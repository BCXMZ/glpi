#!/usr/bin/env python3
"""Validate actual image dimensions accepted by the background upload layer."""

from __future__ import annotations

import binascii
import json
import os
import struct
import subprocess
import sys
import tempfile
import zlib
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
CASE = ROOT / "tests" / "background_dimension_case.php"


def png_chunk(chunk_type: bytes, data: bytes) -> bytes:
    payload = chunk_type + data
    return (
        struct.pack(">I", len(data))
        + payload
        + struct.pack(">I", binascii.crc32(payload) & 0xFFFFFFFF)
    )


def create_grayscale_png(path: Path, width: int, height: int) -> None:
    """Create a valid, highly compressed 8-bit grayscale PNG using stdlib only."""
    scanline = b"\x00" + (b"\x00" * width)
    raw = scanline * height
    ihdr = struct.pack(">IIBBBBB", width, height, 8, 0, 0, 0, 0)
    contents = (
        b"\x89PNG\r\n\x1a\n"
        + png_chunk(b"IHDR", ihdr)
        + png_chunk(b"IDAT", zlib.compress(raw, 9))
        + png_chunk(b"IEND", b"")
    )
    path.write_bytes(contents)


def run_case(path: Path, asset_key: str = "background") -> dict[str, object]:
    env = os.environ.copy()
    env["STCL_IMAGE_PATH"] = str(path)
    env["STCL_ASSET_KEY"] = asset_key
    process = subprocess.run(
        ["php", str(CASE)],
        env=env,
        text=True,
        capture_output=True,
        check=False,
        timeout=30,
    )
    if process.returncode != 0:
        raise RuntimeError(
            f"Fixture PHP terminou com {process.returncode}: {process.stderr or process.stdout}"
        )
    try:
        payload = json.loads(process.stdout)
    except json.JSONDecodeError as exc:
        raise RuntimeError(f"Fixture PHP não retornou JSON: {process.stdout}") from exc
    if not isinstance(payload, dict):
        raise RuntimeError("Fixture PHP retornou uma estrutura inesperada.")
    return payload


def main() -> int:
    failures: list[str] = []
    passes: list[str] = []

    def check(condition: bool, message: str) -> None:
        (passes if condition else failures).append(message)

    with tempfile.TemporaryDirectory(prefix="stcl-background-dimensions-") as temp:
        directory = Path(temp)
        cases = [
            ("full-hd", (1920, 1080), True),
            ("qhd-2k", (2560, 1440), True),
            ("uhd-4k", (3840, 2160), True),
            ("legacy-1600x900", (1600, 900), False),
            ("non-16x9", (1920, 1200), False),
            ("portrait", (1080, 1920), False),
        ]

        generated: dict[str, Path] = {}
        for name, size, expected in cases:
            image_path = directory / f"{name}.png"
            create_grayscale_png(image_path, *size)
            generated[name] = image_path
            result = run_case(image_path)
            check(
                result.get("ok") is expected,
                f"Plano de fundo {size[0]}×{size[1]} "
                + ("é aceito" if expected else "é rejeitado"),
            )
            if not expected:
                check(
                    "Dimensão do plano de fundo não permitida" in str(result.get("error", "")),
                    f"Rejeição {size[0]}×{size[1]} informa o padrão permitido",
                )

        regular_logo = run_case(generated["legacy-1600x900"], "login_logo")
        check(
            regular_logo.get("ok") is True,
            "Restrição de dimensão padronizada não é aplicada às demais logos",
        )

    for message in passes:
        print(f"[OK] {message}")
    if failures:
        for message in failures:
            print(f"[FAIL] {message}", file=sys.stderr)
        print(f"\n{len(failures)} falha(s) na validação de dimensões.", file=sys.stderr)
        return 1

    print(f"\n{len(passes)} verificações de dimensões concluídas com sucesso.")
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
