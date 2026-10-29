#!/usr/bin/env python3
"""Validate public endpoints through a real local PHP HTTP server."""

from __future__ import annotations

import hashlib
import json
import os
import shutil
import socket
import subprocess
import sys
import tempfile
import time
import urllib.error
import urllib.request
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
PNG = __import__("base64").b64decode(
    "iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAusB9Wl6qLgAAAAASUVORK5CYII="
)


def free_port() -> int:
    with socket.socket(socket.AF_INET, socket.SOCK_STREAM) as sock:
        sock.bind(("127.0.0.1", 0))
        return int(sock.getsockname()[1])


def request(url: str, method: str = "GET", headers: dict[str, str] | None = None) -> tuple[int, dict[str, str], bytes]:
    req = urllib.request.Request(url, method=method, headers=headers or {})
    try:
        with urllib.request.urlopen(req, timeout=5) as response:
            return response.status, {k.lower(): v for k, v in response.headers.items()}, response.read()
    except urllib.error.HTTPError as error:
        return error.code, {k.lower(): v for k, v in error.headers.items()}, error.read()


def wait_for_server(base_url: str, process: subprocess.Popen[str]) -> None:
    deadline = time.monotonic() + 8
    while time.monotonic() < deadline:
        if process.poll() is not None:
            stderr = process.stderr.read() if process.stderr else ""
            raise RuntimeError(f"Servidor PHP encerrou antes do teste: {stderr}")
        try:
            status, _, _ = request(base_url + "/plugins/customlogin/config.php")
            if status == 200:
                return
        except OSError:
            pass
        time.sleep(0.1)
    raise RuntimeError("Servidor PHP não ficou disponível no prazo do teste.")


def main() -> int:
    if shutil.which("php") is None:
        print("PHP CLI não encontrado; integração HTTP não executada.", file=sys.stderr)
        return 2

    failures: list[str] = []
    passes: list[str] = []

    def assert_http(condition: bool, message: str) -> None:
        (passes if condition else failures).append(message)

    with tempfile.TemporaryDirectory(prefix="stcl-http-") as temp:
        glpi = Path(temp) / "glpi"
        (glpi / "inc").mkdir(parents=True)
        storage = glpi / "files" / "_plugins" / "customlogin"
        storage.mkdir(parents=True)
        (storage / "background-http.png").write_bytes(PNG)

        includes = glpi / "inc" / "includes.php"
        includes.write_text(
            """<?php
            declare(strict_types=1);
            define('GLPI_ROOT', dirname(__DIR__));
            define('GLPI_PLUGIN_DOC_DIR', GLPI_ROOT . '/files/_plugins');
            define('GLPI_VERSION', '11.0.8');
            define('PLUGIN_CUSTOMLOGIN_VERSION', '2.2.1');
            $CFG_GLPI = ['root_doc' => ''];
            final class Config {
                public static function getConfigurationValues(string $context): array {
                    return $context === 'plugin:customlogin'
                        ? [
                            'asset_background' => 'background-http.png',
                            'asset_background_mime' => 'image/png',
                        ]
                        : [];
                }
                public static function setConfigurationValues(string $context, array $values): void {}
                public static function deleteConfigurationValues(string $context, array $keys): void {}
            }
            final class Plugin {
                public static function getWebDir(string $plugin): string {
                    return '/marketplace/' . $plugin;
                }
            }
            """,
            encoding="utf-8",
        )

        router = Path(temp) / "router.php"
        router.write_text(
            """<?php
            declare(strict_types=1);
            require __DIR__ . '/glpi/inc/includes.php';
            $plugin = (string) getenv('STCL_PLUGIN_ROOT');
            $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
            if ($path === '/plugins/customlogin/config.php') {
                require $plugin . '/public/config.php';
                return true;
            }
            if ($path === '/plugins/customlogin/asset.php') {
                require $plugin . '/public/asset.php';
                return true;
            }
            header('HTTP/1.1 404 Not Found', true, 404);
            return true;
            """,
            encoding="utf-8",
        )

        port = free_port()
        base_url = f"http://127.0.0.1:{port}"
        env = os.environ.copy()
        env["STCL_PLUGIN_ROOT"] = str(ROOT)
        process = subprocess.Popen(
            ["php", "-d", "display_errors=0", "-S", f"127.0.0.1:{port}", "-t", str(glpi), str(router)],
            cwd=temp,
            env=env,
            stdout=subprocess.PIPE,
            stderr=subprocess.PIPE,
            text=True,
        )

        try:
            wait_for_server(base_url, process)

            config_url = base_url + "/plugins/customlogin/config.php"
            asset_url = base_url + "/plugins/customlogin/asset.php?key=background"

            status, headers, body = request(config_url)
            assert_http(status == 200, "HTTP config GET retorna 200")
            assert_http(headers.get("content-type", "").startswith("application/json"), "HTTP config usa Content-Type JSON")
            assert_http(headers.get("cache-control") == "no-store, max-age=0", "HTTP config impede cache persistente")
            assert_http(headers.get("x-content-type-options") == "nosniff", "HTTP config envia nosniff")
            assert_http(headers.get("cross-origin-resource-policy") == "same-origin", "HTTP config limita origem")
            try:
                payload = json.loads(body)
            except json.JSONDecodeError:
                payload = None
            assert_http(isinstance(payload, dict), "HTTP config retorna JSON válido")
            assert_http(payload.get("plugin", {}).get("version") == "2.2.1" if isinstance(payload, dict) else False, "HTTP config retorna versão 2.2.1")
            assert_http(payload.get("plugin", {}).get("schema") == "3.0" if isinstance(payload, dict) else False, "HTTP config retorna schema 3.0")
            assert_http("promptEnabled" in payload.get("login", {}) if isinstance(payload, dict) else False, "HTTP config inclui controle do texto de autenticação")
            assert_http("collapsedLogoUrl" in payload.get("internal", {}) if isinstance(payload, dict) else False, "HTTP config inclui logo interna recolhida")
            assert_http(payload.get("login", {}).get("alignment") == "center" if isinstance(payload, dict) else False, "HTTP config inclui alinhamento padrão do painel")
            assert_http(payload.get("internal", {}).get("sidebarEffectEnabled") is False if isinstance(payload, dict) else False, "HTTP config mantém efeito lateral desativado por padrão")
            assert_http(payload.get("internal", {}).get("sidebarEffectPreset") == "service-tic" if isinstance(payload, dict) else False, "HTTP config inclui tema lateral padrão")
            assert_http("backgroundPosition" not in payload.get("login", {}) if isinstance(payload, dict) else False, "HTTP config remove a antiga posição do fundo")
            assert_http("faviconMime" in payload if isinstance(payload, dict) else False, "HTTP config inclui MIME do favicon")
            config_etag = headers.get("etag", "")
            assert_http(config_etag.startswith('"') and config_etag.endswith('"'), "HTTP config retorna ETag")

            status, headers, body = request(config_url, method="HEAD")
            assert_http(status == 200 and body == b"", "HTTP config HEAD retorna 200 sem corpo")
            assert_http(int(headers.get("content-length", "-1")) > 0, "HTTP config HEAD informa Content-Length")

            status, headers, body = request(config_url, method="POST")
            assert_http(status == 405 and body == b"", "HTTP config rejeita POST com 405")
            assert_http(headers.get("allow") == "GET, HEAD", "HTTP config informa métodos permitidos")

            status, _, body = request(config_url, headers={"If-None-Match": config_etag})
            assert_http(status == 304 and body == b"", "HTTP config respeita If-None-Match")

            status, headers, body = request(asset_url)
            assert_http(status == 200, "HTTP asset GET retorna 200")
            assert_http(headers.get("content-type") == "image/png", "HTTP asset retorna MIME validado")
            assert_http(headers.get("cache-control") == "public, max-age=31536000, immutable", "HTTP asset usa cache imutável")
            assert_http(headers.get("x-content-type-options") == "nosniff", "HTTP asset envia nosniff")
            assert_http(headers.get("cross-origin-resource-policy") == "same-origin", "HTTP asset limita origem")
            assert_http("default-src 'none'" in headers.get("content-security-policy", ""), "HTTP asset envia CSP restritiva")
            assert_http(headers.get("content-disposition", "").startswith("inline; filename="), "HTTP asset força disposição inline segura")
            assert_http(hashlib.sha256(body).digest() == hashlib.sha256(PNG).digest(), "HTTP asset preserva bytes da imagem")
            asset_etag = headers.get("etag", "")
            assert_http(asset_etag.startswith('"') and asset_etag.endswith('"'), "HTTP asset retorna ETag")

            status, headers, body = request(asset_url, method="HEAD")
            assert_http(status == 200 and body == b"", "HTTP asset HEAD retorna 200 sem corpo")
            assert_http(int(headers.get("content-length", "-1")) == len(PNG), "HTTP asset HEAD informa tamanho correto")

            status, headers, body = request(asset_url, method="POST")
            assert_http(status == 405 and body == b"", "HTTP asset rejeita POST com 405")
            assert_http(headers.get("allow") == "GET, HEAD", "HTTP asset informa métodos permitidos")

            status, _, body = request(base_url + "/plugins/customlogin/asset.php?key=../../etc/passwd")
            assert_http(status == 404 and body == b"", "HTTP asset rejeita chave não permitida")

            status, _, body = request(asset_url, headers={"If-None-Match": asset_etag})
            assert_http(status == 304 and body == b"", "HTTP asset respeita If-None-Match")
        finally:
            process.terminate()
            try:
                process.wait(timeout=5)
            except subprocess.TimeoutExpired:
                process.kill()
                process.wait(timeout=5)

            stderr = process.stderr.read() if process.stderr else ""
            if "Fatal error" in stderr or "Uncaught" in stderr:
                failures.append("Servidor PHP registrou erro fatal: " + stderr.strip())

    for message in passes:
        print(f"[OK] {message}")

    if failures:
        for message in failures:
            print(f"[FAIL] {message}", file=sys.stderr)
        print(f"\n{len(failures)} falha(s) na integração HTTP.", file=sys.stderr)
        return 1

    print(f"\n{len(passes)} verificações HTTP concluídas com sucesso.")
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
