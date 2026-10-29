#!/usr/bin/env python3
"""Run DOM and anonymous-asset pipeline regressions in a real Chromium engine."""

from __future__ import annotations

import json
import os
import shutil
import sys
from pathlib import Path

try:
    from playwright.sync_api import Error as PlaywrightError
    from playwright.sync_api import sync_playwright
except ImportError as exc:  # pragma: no cover - environment dependent
    print(f"Playwright Python não encontrado: {exc}", file=sys.stderr)
    sys.exit(2)

ROOT = Path(__file__).resolve().parents[1]
HTML_PATH = ROOT / "tests" / "dom_compatibility.html"
JS_PATH = ROOT / "js" / "customlogin.js"
CSS_PATH = ROOT / "css" / "customlogin.css"


def find_chromium() -> str | None:
    explicit = os.environ.get("CHROME_BIN")
    if explicit and Path(explicit).is_file():
        return explicit

    for command in ("chromium", "chromium-browser", "google-chrome", "google-chrome-stable"):
        resolved = shutil.which(command)
        if resolved:
            return resolved
    return None


def inline_fixture() -> str:
    html = HTML_PATH.read_text(encoding="utf-8")
    javascript = JS_PATH.read_text(encoding="utf-8")
    css = CSS_PATH.read_text(encoding="utf-8")

    js_marker = '<script src="../js/customlogin.js"></script>'
    css_marker = '<link rel="stylesheet" href="../css/customlogin.css">'
    if js_marker not in html:
        raise RuntimeError("Marcador do JavaScript não encontrado na fixture.")
    if css_marker not in html:
        raise RuntimeError("Marcador do CSS não encontrado na fixture.")
    if "</script" in javascript.lower():
        raise RuntimeError("JavaScript contém fechamento de tag incompatível com inlining do teste.")
    if "</style" in css.lower():
        raise RuntimeError("CSS contém fechamento de tag incompatível com inlining do teste.")

    html = html.replace(css_marker, f"<style>\n{css}\n</style>", 1)
    return html.replace(js_marker, f"<script>\n{javascript}\n</script>", 1)


def attach_error_collectors(page) -> tuple[list[str], list[str]]:
    page_errors: list[str] = []
    console_errors: list[str] = []
    page.on("pageerror", lambda error: page_errors.append(str(error)))
    page.on(
        "console",
        lambda message: console_errors.append(message.text)
        if message.type == "error"
        else None,
    )
    return page_errors, console_errors


def run_embedded_dom_fixture(browser) -> tuple[list[str], list[str], list[str], list[str]]:
    page = browser.new_page()
    page_errors, console_errors = attach_error_collectors(page)
    page.set_content(inline_fixture(), wait_until="domcontentloaded", timeout=15_000)
    page.wait_for_selector('#test-result[data-tests]', timeout=8_000)
    status = page.locator("#test-result").get_attribute("data-tests")
    raw_result = page.locator("#test-result").inner_text()
    page.close()

    try:
        result = json.loads(raw_result)
    except json.JSONDecodeError as exc:
        return [], [f"Resultado DOM não é JSON válido: {exc}: {raw_result}"], page_errors, console_errors

    failures = list(result.get("failures") or [])
    if status != "passed":
        failures.append("Fixture DOM marcou o resultado como falho.")
    return list(result.get("passes") or []), failures, page_errors, console_errors


def run_anonymous_pipeline_fixture(browser) -> tuple[list[str], list[str], list[str], list[str]]:
    """Exercise the GLPI 11 anonymous pipeline without relying on display_login."""

    javascript = JS_PATH.read_text(encoding="utf-8")
    css = CSS_PATH.read_text(encoding="utf-8")
    payload = {
        "plugin": {"name": "ST-Custom Login", "version": "2.2.1", "schema": "3.0"},
        "enabled": True,
        "login": {
            "enabled": True,
            "title": "Portal carregado pelo endpoint",
            "subtitle": "Pipeline anônimo do GLPI",
            "promptEnabled": True,
            "promptText": "Entre no portal corporativo",
            "footer": "Teste de regressão 2.2.1",
            "primaryColor": "#123456",
            "backgroundOverlay": 25,
            "alignment": "right",
            "cardWidth": 510,
            "logoWidth": 188,
            "logoHeight": 104,
            "backgroundUrl": "/plugins/customlogin/asset.php?key=background&v=test",
            "logoUrl": "/plugins/customlogin/asset.php?key=login_logo&v=test",
        },
        "internal": {
            "enabled": True,
            "logoWidth": 150,
            "logoHeight": 42,
            "logoUrl": "",
            "collapsedLogoWidth": 42,
            "collapsedLogoHeight": 42,
            "collapsedLogoUrl": "",
            "sidebarEffectEnabled": True,
            "sidebarEffectPreset": "ocean",
        },
        "faviconUrl": "/plugins/customlogin/asset.php?key=favicon&v=test",
        "faviconMime": "image/png",
    }
    payload_js = json.dumps(payload, ensure_ascii=False).replace("</", "<\\/")

    html = f"""<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <base href="https://glpi.example.test/">
  <title>GLPI 11 anonymous pipeline fixture</title>
  <style>
    :root {{ --tblr-primary: #fec95c; --tblr-body-bg: #f5f7fb; }}
    body {{ margin: 0; min-height: 100vh; background: var(--tblr-body-bg); }}
    .page-anonymous .glpi-logo {{
      --logo: url('/native-glpi-logo.png');
      content: var(--logo);
      width: 200px;
      height: 110px;
    }}
  </style>
  <style>{css}</style>
  <script>
    window.__stclFetchUrls = [];
    window.__stclPayload = {payload_js};
    window.fetch = async (endpoint) => {{
      window.__stclFetchUrls.push(String(endpoint));
      return {{ ok: true, json: async () => window.__stclPayload }};
    }};
    const sourceMarker = document.createElement('script');
    sourceMarker.type = 'application/x-stcl-source';
    sourceMarker.src = '/plugins/customlogin/js/customlogin.js?v=2.2.1';
    document.head.append(sourceMarker);
  </script>
  <script>{javascript}</script>
</head>
<body class="welcome-anonymous">
  <main id="page" class="page-anonymous" role="main">
    <div class="container-tight">
      <div class="text-center"><span class="glpi-logo mb-4" title="GLPI"></span></div>
      <div class="card main-content-card">
        <div class="card-header"></div>
        <div class="card-body">
          <form>
            <div class="row justify-content-center">
              <div class="col-md-5">
                <div class="card-header mb-4"><h2 class="mx-auto">Faça login para sua conta</h2></div>
                <input id="login_name">
                <button type="button" class="btn btn-primary">Entrar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
</body>
</html>"""

    page = browser.new_page()
    page_errors, console_errors = attach_error_collectors(page)
    page.set_content(html, wait_until="domcontentloaded", timeout=15_000)
    page.wait_for_selector('html[data-stcl-applied="1"]', timeout=8_000)
    page.wait_for_selector("#stcl-login-logo", timeout=8_000)
    page.wait_for_selector("#stcl-login-heading", timeout=8_000)

    computed = page.evaluate(
        """() => {
            const root = document.documentElement;
            const nativeLogo = document.querySelector('.page-anonymous .glpi-logo');
            const customLogo = document.querySelector('#stcl-login-logo');
            const nativeLogoStyle = getComputedStyle(nativeLogo);
            const customLogoStyle = getComputedStyle(customLogo);
            const bodyStyle = getComputedStyle(document.body);
            return {
                version: root.dataset.stclVersion || '',
                applied: root.dataset.stclApplied || '',
                loginEnabled: root.classList.contains('stcl-login-enabled'),
                backgroundCustom: root.classList.contains('stcl-login-background-custom'),
                logoCustom: root.classList.contains('stcl-login-logo-custom'),
                alignRight: root.classList.contains('stcl-login-align-right'),
                sidebarEffect: root.classList.contains('stcl-sidebar-effect-enabled'),
                sidebarOcean: root.classList.contains('stcl-sidebar-theme-ocean'),
                alignmentDataset: root.dataset.stclLoginAlignment || '',
                sidebarDataset: root.dataset.stclSidebarPreset || '',
                nativeLogoDisplay: nativeLogoStyle.display,
                nativeLogoHiddenClass: nativeLogo.classList.contains('stcl-native-login-logo-hidden'),
                customLogoSrc: customLogo.getAttribute('src') || '',
                customLogoWidth: customLogoStyle.width,
                customLogoHeight: customLogoStyle.height,
                customLogoInsideCard: Boolean(customLogo.closest('.card-body')),
                bodyBackground: bodyStyle.backgroundImage,
                title: document.querySelector('.stcl-login-title')?.textContent || '',
                subtitle: document.querySelector('.stcl-login-subtitle')?.textContent || '',
                prompt: document.querySelector('.card-header.mb-4 h2')?.textContent || '',
                footer: document.querySelector('#stcl-login-footer')?.textContent || '',
                faviconCount: document.querySelectorAll('link[data-stcl-favicon="1"]').length,
                configElementPresent: Boolean(document.querySelector('#st-customlogin-config')),
                fetchUrls: window.__stclFetchUrls || [],
                sourceMarker: document.querySelector('script[type="application/x-stcl-source"]')?.src || '',
            };
        }"""
    )
    page.close()

    passes: list[str] = []
    failures: list[str] = []

    def check(condition: bool, message: str) -> None:
        (passes if condition else failures).append(message)

    check(computed["version"] == "2.2.1", "Pipeline anônimo: versão aplicada identificada")
    check(computed["applied"] == "1", "Pipeline anônimo: marcador de aplicação presente")
    check(computed["loginEnabled"], "Pipeline anônimo: classe de login aplicada")
    check(computed["backgroundCustom"], "Pipeline anônimo: classe de fundo aplicada")
    check(computed["logoCustom"], "Pipeline anônimo: classe de logo aplicada")
    check(computed["alignRight"], "Pipeline anônimo: painel configurado à direita")
    check(computed["alignmentDataset"] == "right", "Pipeline anônimo: diagnóstico informa alinhamento à direita")
    check(computed["sidebarEffect"], "Pipeline anônimo: opção do efeito lateral é carregada")
    check(computed["sidebarOcean"], "Pipeline anônimo: tema Oceano é selecionado")
    check(computed["sidebarDataset"] == "ocean", "Pipeline anônimo: diagnóstico informa tema Oceano")
    check(computed["nativeLogoDisplay"] == "none", "Pipeline anônimo: logo nativo externo ocultado")
    check(computed["nativeLogoHiddenClass"], "Pipeline anônimo: logo nativo externo marcado pelo plugin")
    check("asset.php?key=login_logo" in computed["customLogoSrc"], "Pipeline anônimo: logo remoto aplicado ao elemento interno")
    check(computed["customLogoWidth"] == "188px", "Pipeline anônimo: largura do logo aplicada")
    check(computed["customLogoHeight"] == "104px", "Pipeline anônimo: altura do logo aplicada")
    check(computed["customLogoInsideCard"], "Pipeline anônimo: logo fica dentro do quadro branco")
    check("asset.php?key=background" in computed["bodyBackground"], "Pipeline anônimo: plano de fundo remoto aplicado")
    check(computed["title"] == payload["login"]["title"], "Pipeline anônimo: título carregado pelo endpoint")
    check(computed["subtitle"] == payload["login"]["subtitle"], "Pipeline anônimo: subtítulo carregado pelo endpoint")
    check(computed["prompt"] == payload["login"]["promptText"], "Pipeline anônimo: texto de autenticação renomeado")
    check(computed["footer"] == payload["login"]["footer"], "Pipeline anônimo: rodapé carregado pelo endpoint")
    check(computed["faviconCount"] == 2, "Pipeline anônimo: favicon personalizado aplicado")
    check(not computed["configElementPresent"], "Pipeline anônimo: não depende do hook display_login")
    check(
        computed["fetchUrls"] == ["/plugins/customlogin/config.php"],
        "Pipeline anônimo: endpoint canônico de configuração consultado",
    )
    check(
        computed["sourceMarker"].endswith("/plugins/customlogin/js/customlogin.js?v=2.2.1"),
        "Pipeline anônimo: origem do JavaScript é reconhecida",
    )

    return passes, failures, page_errors, console_errors



def run_admin_layout_fixture(browser) -> tuple[list[str], list[str], list[str], list[str]]:
    """Validate the administration image grid and institutional card geometry."""

    css = CSS_PATH.read_text(encoding="utf-8")
    html = f"""<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <style>
    :root {{
      --tblr-border-color: #dce1e7;
      --tblr-border-radius: .375rem;
      --tblr-bg-surface: #fff;
      --tblr-body-color: #182433;
      --tblr-secondary-color: #667085;
      --tblr-primary: #206bc4;
    }}
    body {{ margin: 0; padding: 24px; background: #f4f6f8; font-family: Arial, sans-serif; }}
    * {{ box-sizing: border-box; }}
    .flex-fill {{ flex: 1 1 auto; }}
  </style>
  <style>{css}</style>
</head>
<body>
  <div class="stcl-admin">
    <div class="stcl-assets-grid" id="admin-grid">
      <div class="stcl-assets-grid-item"><div class="stcl-asset-card" id="card-background">
        <div class="stcl-preview-box"><div>Fundo</div></div>
        <div class="flex-fill"><strong>Plano de fundo</strong><p>Dimensões aceitas.</p><p>Imagem legada.</p><div style="height:190px">Aviso mais alto para simular o conteúdo real.</div></div>
      </div></div>
      <div class="stcl-assets-grid-item"><div class="stcl-asset-card" id="card-login-logo">
        <div class="stcl-preview-box"><div>Logo</div></div><div class="flex-fill"><strong>Logo do login</strong><p>Conteúdo curto.</p></div>
      </div></div>
      <div class="stcl-assets-grid-item"><div class="stcl-asset-card" id="card-navbar-logo">
        <div class="stcl-preview-box"><div>Expandida</div></div><div class="flex-fill"><strong>Logo expandida</strong><p>Largura e altura.</p></div>
      </div></div>
      <div class="stcl-assets-grid-item"><div class="stcl-asset-card" id="card-collapsed-logo">
        <div class="stcl-preview-box"><div>Recolhida</div></div><div class="flex-fill"><strong>Logo recolhida</strong><p>Largura e altura.</p><p>Descrição adicional.</p></div>
      </div></div>
      <div class="stcl-assets-grid-item"><div class="stcl-asset-card" id="card-favicon">
        <div class="stcl-preview-box"><div>Favicon</div></div><div class="flex-fill"><strong>Favicon</strong><p>PNG, JPEG, WEBP ou ICO.</p></div>
      </div></div>
      <div class="stcl-assets-grid-item"><aside class="stcl-marketing-card" id="card-marketing" aria-label="Desenvolvido pela Service TIC">
        <div class="stcl-marketing-brand"><div class="stcl-marketing-logo">SERVICE TIC</div></div>
        <div class="stcl-marketing-details">
          <div class="stcl-marketing-title">Desenvolvido por:</div>
          <a class="stcl-marketing-site" href="https://www.servicetic.com.br" target="_blank" rel="noopener noreferrer">www.servicetic.com.br</a>
          <a class="stcl-marketing-qr-link" href="https://servicetic.com.br/links" target="_blank" rel="noopener noreferrer"><span class="stcl-marketing-qr">QR</span></a>
        </div>
      </aside></div>
    </div>
  </div>
</body>
</html>"""

    page = browser.new_page(viewport={"width": 1440, "height": 1100})
    page_errors, console_errors = attach_error_collectors(page)
    page.set_content(html, wait_until="domcontentloaded", timeout=15_000)

    desktop = page.evaluate(
        """() => {
            const ids = ['card-background','card-login-logo','card-navbar-logo','card-collapsed-logo','card-favicon','card-marketing'];
            const rects = Object.fromEntries(ids.map((id) => {
                const r = document.getElementById(id).getBoundingClientRect();
                return [id, {left:r.left, top:r.top, right:r.right, bottom:r.bottom, width:r.width, height:r.height}];
            }));
            const brand = document.querySelector('#card-marketing .stcl-marketing-brand').getBoundingClientRect();
            const details = document.querySelector('#card-marketing .stcl-marketing-details').getBoundingClientRect();
            return {
                rects,
                columns: getComputedStyle(document.getElementById('admin-grid')).gridTemplateColumns,
                marketingDirection: getComputedStyle(document.getElementById('card-marketing')).flexDirection,
                marketingSideBySide: brand.right <= details.left + 1,
                itemCount: document.querySelectorAll('#admin-grid > .stcl-assets-grid-item').length,
                marketingLabel: document.getElementById('card-marketing').getAttribute('aria-label') || '',
                externalRel: [...document.querySelectorAll('#card-marketing a')].map((a) => a.rel),
            };
        }"""
    )

    page.set_viewport_size({"width": 1100, "height": 1400})
    page.wait_for_timeout(100)
    tablet = page.evaluate(
        """() => ({
            columns: getComputedStyle(document.getElementById('admin-grid')).gridTemplateColumns,
            marketingDirection: getComputedStyle(document.getElementById('card-marketing')).flexDirection,
        })"""
    )

    page.set_viewport_size({"width": 700, "height": 1800})
    page.wait_for_timeout(100)
    mobile = page.evaluate(
        """() => {
            const cards = [...document.querySelectorAll('#admin-grid > .stcl-assets-grid-item > *')];
            const rects = cards.map((card) => {
                const r = card.getBoundingClientRect();
                return {left:r.left, top:r.top, width:r.width};
            });
            const brand = document.querySelector('#card-marketing .stcl-marketing-brand').getBoundingClientRect();
            const details = document.querySelector('#card-marketing .stcl-marketing-details').getBoundingClientRect();
            return {
                columns: getComputedStyle(document.getElementById('admin-grid')).gridTemplateColumns,
                marketingDirection: getComputedStyle(document.getElementById('card-marketing')).flexDirection,
                marketingStacked: brand.bottom <= details.top + 1,
                rects,
            };
        }"""
    )
    page.close()

    passes: list[str] = []
    failures: list[str] = []

    def check(condition: bool, message: str) -> None:
        (passes if condition else failures).append(message)

    rects = desktop["rects"]

    def close(a: float, b: float, tolerance: float = 1.0) -> bool:
        return abs(float(a) - float(b)) <= tolerance

    pairs = [
        ("card-background", "card-login-logo", "primeira linha"),
        ("card-navbar-logo", "card-collapsed-logo", "segunda linha"),
        ("card-favicon", "card-marketing", "terceira linha"),
    ]

    check(desktop["itemCount"] == 6, "Admin: grade contém cinco uploads e um cartão de marketing")
    check(len(str(desktop["columns"]).split()) == 2, "Admin: grade usa duas colunas no desktop")
    for left_id, right_id, label in pairs:
        left = rects[left_id]
        right = rects[right_id]
        check(close(left["top"], right["top"]), f"Admin: topo alinhado na {label}")
        check(close(left["bottom"], right["bottom"]), f"Admin: base alinhada na {label}")
        check(close(left["height"], right["height"]), f"Admin: cartões com mesma altura na {label}")
        check(close(left["width"], right["width"]), f"Admin: cartões com mesma largura na {label}")

    check(rects["card-login-logo"]["height"] > 250, "Admin: cartão curto é esticado para acompanhar o cartão alto")
    check(desktop["marketingDirection"] == "row", "Admin: marketing usa composição horizontal no desktop")
    check(desktop["marketingSideBySide"], "Admin: logo e QR Code ficam lado a lado no desktop")
    check(desktop["marketingLabel"] == "Desenvolvido pela Service TIC", "Admin: cartão institucional possui rótulo acessível")
    check(all("noopener" in rel and "noreferrer" in rel for rel in desktop["externalRel"]), "Admin: links institucionais protegem a aba de origem")
    check(len(str(tablet["columns"]).split()) == 1, "Admin: grade usa uma coluna em larguras intermediárias")
    check(tablet["marketingDirection"] == "row", "Admin: marketing permanece horizontal quando há largura interna suficiente")
    check(len(str(mobile["columns"]).split()) == 1, "Admin: grade muda para uma coluna no celular")
    check(mobile["marketingDirection"] == "column", "Admin: marketing muda para composição vertical no celular")
    check(mobile["marketingStacked"], "Admin: conteúdo institucional é empilhado no celular")
    mobile_lefts = [float(rect["left"]) for rect in mobile["rects"]]
    mobile_widths = [float(rect["width"]) for rect in mobile["rects"]]
    mobile_tops = [float(rect["top"]) for rect in mobile["rects"]]
    check(max(mobile_lefts) - min(mobile_lefts) <= 1.0, "Admin: cartões ficam alinhados à esquerda no celular")
    check(max(mobile_widths) - min(mobile_widths) <= 1.0, "Admin: cartões mantêm a mesma largura no celular")
    check(all(b > a for a, b in zip(mobile_tops, mobile_tops[1:])), "Admin: cartões mantêm ordem vertical no celular")

    return passes, failures, page_errors, console_errors

def main() -> int:
    chromium = find_chromium()
    if chromium is None:
        print("Chromium/Chrome não encontrado; teste de navegador não executado.", file=sys.stderr)
        return 2

    all_passes: list[str] = []
    all_failures: list[str] = []
    all_page_errors: list[str] = []
    all_console_errors: list[str] = []

    try:
        with sync_playwright() as playwright:
            browser = playwright.chromium.launch(
                headless=True,
                executable_path=chromium,
                args=["--no-sandbox", "--disable-gpu", "--disable-dev-shm-usage"],
                timeout=15_000,
            )
            for runner in (run_embedded_dom_fixture, run_anonymous_pipeline_fixture, run_admin_layout_fixture):
                passes, failures, page_errors, console_errors = runner(browser)
                all_passes.extend(passes)
                all_failures.extend(failures)
                all_page_errors.extend(page_errors)
                all_console_errors.extend(console_errors)
            browser.close()
    except (PlaywrightError, RuntimeError, OSError) as exc:
        print(f"Falha ao executar Chromium: {exc}", file=sys.stderr)
        return 1

    if all_failures or all_page_errors or all_console_errors:
        print(json.dumps({"passes": all_passes, "failures": all_failures}, ensure_ascii=False, indent=2), file=sys.stderr)
        if all_page_errors:
            print("Erros de página:", json.dumps(all_page_errors, ensure_ascii=False, indent=2), file=sys.stderr)
        if all_console_errors:
            print("Erros de console:", json.dumps(all_console_errors, ensure_ascii=False, indent=2), file=sys.stderr)
        return 1

    print(f"Testes Chromium: OK ({len(all_passes)} asserções)")
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
