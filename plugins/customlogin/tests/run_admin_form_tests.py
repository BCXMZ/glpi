#!/usr/bin/env python3
"""Regression tests for authenticated config.form.php CSRF handling."""

from __future__ import annotations

import json
import subprocess
import sys
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
CASE_SCRIPT = ROOT / "tests" / "admin_form_case.php"


def run_case(version: str, scenario: str) -> dict[str, object]:
    completed = subprocess.run(
        ["php", str(CASE_SCRIPT), version, scenario],
        check=False,
        capture_output=True,
        text=True,
        timeout=15,
    )
    if completed.returncode != 0:
        raise RuntimeError(
            f"GLPI {version}/{scenario}: processo retornou "
            f"{completed.returncode}: {completed.stderr.strip()}"
        )
    try:
        return json.loads(completed.stdout)
    except json.JSONDecodeError as exc:
        raise RuntimeError(
            f"GLPI {version}/{scenario}: JSON inválido: {completed.stdout!r}"
        ) from exc


def main() -> int:
    failures: list[str] = []
    passes: list[str] = []

    def assert_case(condition: bool, message: str) -> None:
        (passes if condition else failures).append(message)

    for version in ("10.0.10", "10.0.26"):
        valid = run_case(version, "valid")
        assert_case(valid["caught"] is None, f"GLPI {version}: POST válido não lança exceção")
        assert_case(valid["handler_included"] is True, f"GLPI {version}: handler legado é executado")
        assert_case(valid["csrf_checks"] == 1, f"GLPI {version}: token é validado exatamente uma vez pelo plugin")
        assert_case(valid["right_checks"] == 1, f"GLPI {version}: ACL administrativa é validada")
        assert_case(valid["token_still_valid"] is False, f"GLPI {version}: token válido é consumido")
        assert_case(valid["stored"].get("primary_color") == "#123456", f"GLPI {version}: configuração é salva")
        assert_case(valid["stored"].get("login_alignment") == "right", f"GLPI {version}: alinhamento do painel é salvo")
        assert_case(valid["stored"].get("sidebar_effect_enabled") == 1, f"GLPI {version}: efeito lateral é ativado")
        assert_case(valid["stored"].get("sidebar_effect_preset") == "ocean", f"GLPI {version}: tema lateral é salvo")
        assert_case(valid["stored"].get("login_prompt_enabled") == 1, f"GLPI {version}: opção do texto de autenticação é salva")
        assert_case(valid["stored"].get("login_prompt_text") == "Acesse sua conta corporativa", f"GLPI {version}: texto de autenticação é salvo")
        assert_case(valid["stored"].get("navbar_logo_collapsed_width") == 46, f"GLPI {version}: dimensão da logo recolhida é salva")
        assert_case(len(valid["redirects"]) == 1, f"GLPI {version}: fluxo termina em um redirecionamento")

        for scenario in ("missing_token", "invalid_token"):
            denied = run_case(version, scenario)
            assert_case(
                denied["caught"] is not None
                and denied["caught"].get("class") == "CsrfDeniedException",
                f"GLPI {version}: {scenario} é negado pelo plugin",
            )
            assert_case(denied["csrf_checks"] == 1, f"GLPI {version}: {scenario} passa por uma validação CSRF")
            assert_case(denied["write_calls"] == 0, f"GLPI {version}: {scenario} não altera configuração")
            assert_case(len(denied["redirects"]) == 0, f"GLPI {version}: {scenario} não mascara a negação com redirect")

    for version in ("11.0.7", "11.0.8"):
        valid = run_case(version, "valid")
        assert_case(valid["caught"] is None, f"GLPI {version}: POST pré-validado não lança AccessDenied")
        assert_case(valid["redirect_signal"] is not None, f"GLPI {version}: redirect é entregue ao kernel, não tratado como erro")
        assert_case(valid["handler_included"] is True, f"GLPI {version}: handler é carregado após o listener")
        assert_case(valid["csrf_checks"] == 1, f"GLPI {version}: token é validado uma única vez pelo core")
        assert_case(valid["right_checks"] == 1, f"GLPI {version}: ACL administrativa continua ativa")
        assert_case(valid["token_still_valid"] is False, f"GLPI {version}: listener consome o token")
        assert_case(valid["stored"].get("primary_color") == "#123456", f"GLPI {version}: configuração é salva após validação do core")
        assert_case(valid["stored"].get("login_alignment") == "right", f"GLPI {version}: alinhamento do painel é salvo")
        assert_case(valid["stored"].get("sidebar_effect_enabled") == 1, f"GLPI {version}: efeito lateral é ativado")
        assert_case(valid["stored"].get("sidebar_effect_preset") == "ocean", f"GLPI {version}: tema lateral é salvo")
        assert_case(valid["stored"].get("login_prompt_enabled") == 1, f"GLPI {version}: opção do texto de autenticação é salva")
        assert_case(valid["stored"].get("login_prompt_text") == "Acesse sua conta corporativa", f"GLPI {version}: texto de autenticação é salvo")
        assert_case(valid["stored"].get("navbar_logo_collapsed_width") == 46, f"GLPI {version}: dimensão da logo recolhida é salva")
        assert_case(len(valid["redirects"]) == 1, f"GLPI {version}: fluxo termina em um redirecionamento")

        for scenario in ("missing_token", "invalid_token"):
            denied = run_case(version, scenario)
            assert_case(denied["listener_denied"] is True, f"GLPI {version}: {scenario} é negado pelo listener do core")
            assert_case(denied["handler_included"] is False, f"GLPI {version}: {scenario} não alcança o handler")
            assert_case(
                denied["caught"] is not None
                and denied["caught"].get("class") == "CsrfDeniedException",
                f"GLPI {version}: {scenario} mantém falha fechada",
            )
            assert_case(denied["write_calls"] == 0, f"GLPI {version}: {scenario} não altera configuração")

    for version in ("10.0.26", "11.0.8"):
        passive = run_case(version, "get")
        assert_case(passive["caught"] is None, f"GLPI {version}: GET não gera erro de aplicação")
        if version.startswith("11."):
            assert_case(passive["redirect_signal"] is not None, f"GLPI {version}: GET usa RedirectException do núcleo")
        else:
            assert_case(passive["redirect_signal"] is None, f"GLPI {version}: GET usa redirect legado")
        assert_case(passive["csrf_checks"] == 0, f"GLPI {version}: GET não tenta validar token sem efeito colateral")
        assert_case(passive["write_calls"] == 0, f"GLPI {version}: GET não altera configuração")
        assert_case(len(passive["redirects"]) == 1, f"GLPI {version}: GET retorna à configuração")

        put = run_case(version, "put")
        if version.startswith("11."):
            assert_case(put["listener_denied"] is True, f"GLPI {version}: PUT sem token é negado pelo listener")
            assert_case(put["handler_included"] is False, f"GLPI {version}: PUT negado não alcança o handler")
            assert_case(put["write_calls"] == 0, f"GLPI {version}: PUT negado não altera configuração")
        else:
            assert_case(put["caught"] is None, f"GLPI {version}: PUT sem efeito não gera exceção")
            assert_case(put["csrf_checks"] == 0, f"GLPI {version}: PUT sem efeito não tenta validar token")
            assert_case(put["write_calls"] == 0, f"GLPI {version}: PUT não altera configuração")
            assert_case(len(put["redirects"]) == 1, f"GLPI {version}: PUT retorna à configuração")

        no_right = run_case(version, "no_right")
        assert_case(
            no_right["caught"] is not None
            and no_right["caught"].get("class") == "RightDeniedException",
            f"GLPI {version}: acesso sem direito de configuração é negado",
        )
        assert_case(no_right["right_checks"] == 1, f"GLPI {version}: ACL é verificada uma vez")
        assert_case(no_right["write_calls"] == 0, f"GLPI {version}: usuário sem direito não altera configuração")

        restored = run_case(version, "restore_defaults")
        assert_case(restored["caught"] is None, f"GLPI {version}: restauração válida não gera erro de aplicação")
        assert_case(restored["csrf_checks"] == 1, f"GLPI {version}: restauração possui uma única validação CSRF")
        assert_case(restored["stored"].get("primary_color") == "#206bc4", f"GLPI {version}: restauração aplica os padrões")
        assert_case(restored["stored"].get("login_alignment") == "center", f"GLPI {version}: restauração centraliza o painel")
        assert_case(restored["stored"].get("sidebar_effect_enabled") == 0, f"GLPI {version}: restauração desativa o efeito lateral")
        assert_case(restored["stored"].get("sidebar_effect_preset") == "service-tic", f"GLPI {version}: restauração volta ao tema Service TIC")
        assert_case(restored["stored"].get("login_prompt_enabled") == 1, f"GLPI {version}: restauração reativa o texto nativo")
        assert_case(restored["stored"].get("navbar_logo_collapsed_width") == 42, f"GLPI {version}: restauração aplica dimensão padrão da logo recolhida")
        assert_case(len(restored["redirects"]) == 1, f"GLPI {version}: restauração redireciona uma vez")
        assert_case(len(restored["messages"]) == 1, f"GLPI {version}: restauração gera somente a mensagem de sucesso")
        assert_case(len(restored["logs"]) == 0, f"GLPI {version}: redirect de restauração não é registrado como falha")
        if version.startswith("11."):
            assert_case(restored["redirect_signal"] is not None, f"GLPI {version}: restauração propaga RedirectException ao kernel")


        failed = run_case(version, "save_failure")
        assert_case(failed["caught"] is None, f"GLPI {version}: falha operacional é tratada pelo handler")
        assert_case(failed["csrf_checks"] == 1, f"GLPI {version}: falha operacional ocorre após uma única validação CSRF")
        assert_case(len(failed["messages"]) == 1, f"GLPI {version}: falha gera uma única mensagem administrativa")
        failure_message = str(failed["messages"][0].get("message", "")) if failed["messages"] else ""
        assert_case("fixture-sensitive-detail" not in failure_message, f"GLPI {version}: mensagem não expõe detalhe interno")
        assert_case("Consulte o log do plugin" in failure_message, f"GLPI {version}: mensagem orienta consultar o log")
        assert_case(any("fixture-sensitive-detail" in str(entry) for entry in failed["logs"]), f"GLPI {version}: detalhe técnico permanece no log")
        assert_case(len(failed["redirects"]) == 1, f"GLPI {version}: falha tratada redireciona uma vez")
        if version.startswith("11."):
            assert_case(failed["redirect_signal"] is not None, f"GLPI {version}: falha tratada propaga RedirectException ao kernel")

    for message in passes:
        print(f"[OK] {message}")

    if failures:
        for message in failures:
            print(f"[FAIL] {message}", file=sys.stderr)
        print(f"\n{len(failures)} falha(s) nos testes do formulário administrativo.", file=sys.stderr)
        return 1

    print(f"\n{len(passes)} verificações do formulário administrativo concluídas com sucesso.")
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
