#!/usr/bin/env python3
"""Execute the public endpoint fixtures in isolated PHP processes."""

from __future__ import annotations

import base64
import json
import subprocess
import sys
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
CASE_SCRIPT = ROOT / "tests" / "endpoint_case.php"


def run_case(name: str) -> dict[str, object]:
    completed = subprocess.run(
        ["php", str(CASE_SCRIPT), name],
        check=False,
        capture_output=True,
        text=True,
        timeout=15,
    )
    if completed.returncode != 0:
        raise RuntimeError(
            f"{name}: processo retornou {completed.returncode}: {completed.stderr.strip()}"
        )
    try:
        return json.loads(completed.stdout)
    except json.JSONDecodeError as exc:
        raise RuntimeError(f"{name}: JSON inválido: {completed.stdout!r}") from exc


def main() -> int:
    failures: list[str] = []
    passes: list[str] = []

    def assert_case(condition: bool, message: str) -> None:
        (passes if condition else failures).append(message)

    config_get = run_case("config_get")
    assert_case(config_get["status"] == 200, "config GET retorna 200")
    config_body = base64.b64decode(str(config_get["body_base64"]))
    try:
        config_payload = json.loads(config_body)
    except json.JSONDecodeError:
        config_payload = None
    assert_case(isinstance(config_payload, dict), "config GET retorna JSON válido")
    assert_case(config_payload.get("plugin", {}).get("version") == "2.2.1" if isinstance(config_payload, dict) else False, "config GET retorna versão esperada")
    assert_case(config_payload.get("plugin", {}).get("schema") == "3.0" if isinstance(config_payload, dict) else False, "config GET retorna schema 3.0")
    assert_case("promptEnabled" in config_payload.get("login", {}) if isinstance(config_payload, dict) else False, "config GET inclui controle do texto de autenticação")
    assert_case("collapsedLogoUrl" in config_payload.get("internal", {}) if isinstance(config_payload, dict) else False, "config GET inclui logo interna recolhida")
    assert_case(config_payload.get("login", {}).get("alignment") == "center" if isinstance(config_payload, dict) else False, "config GET inclui alinhamento padrão do painel")
    assert_case(config_payload.get("internal", {}).get("sidebarEffectEnabled") is False if isinstance(config_payload, dict) else False, "config GET mantém efeito lateral desativado por padrão")
    assert_case(config_payload.get("internal", {}).get("sidebarEffectPreset") == "service-tic" if isinstance(config_payload, dict) else False, "config GET inclui tema lateral padrão")
    assert_case("backgroundPosition" not in config_payload.get("login", {}) if isinstance(config_payload, dict) else False, "config GET remove a antiga posição do fundo")
    assert_case("faviconMime" in config_payload if isinstance(config_payload, dict) else False, "config GET inclui MIME do favicon")
    assert_case("password" not in config_body.decode("utf-8", errors="ignore").lower(), "config GET não expõe credenciais")

    for scenario, status in (
        ("config_head", 200),
        ("config_post", 405),
        ("config_not_modified", 304),
        ("asset_head", 200),
        ("asset_post", 405),
        ("asset_invalid_key", 404),
        ("asset_not_modified", 304),
        ("asset_tampered_config", 404),
    ):
        result = run_case(scenario)
        assert_case(result["status"] == status, f"{scenario} retorna {status}")
        assert_case(result["body_length"] == 0, f"{scenario} não retorna corpo")

    asset_get = run_case("asset_get")
    assert_case(asset_get["status"] == 200, "asset GET retorna 200")
    assert_case(asset_get["body_length"] > 0, "asset GET retorna bytes")
    assert_case(asset_get["body_sha256"] == asset_get["fixture_sha256"], "asset GET preserva exatamente a imagem validada")

    for message in passes:
        print(f"[OK] {message}")

    if failures:
        for message in failures:
            print(f"[FAIL] {message}", file=sys.stderr)
        print(f"\n{len(failures)} falha(s) nos endpoints públicos.", file=sys.stderr)
        return 1

    print(f"\n{len(passes)} verificações de endpoints concluídas com sucesso.")
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
