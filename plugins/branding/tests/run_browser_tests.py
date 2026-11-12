#!/usr/bin/env python3
"""Real GLPI browser regressions using agent-browser and disposable test entities."""

import json
import os
from pathlib import Path
import subprocess
import tempfile
import urllib.request
import uuid

ROOT = Path(__file__).resolve().parents[3]
BASE = os.environ.get("BRANDING_TEST_URL", "http://127.0.0.1:18811").rstrip("/")
OUTPUT = Path(os.environ.get("BRANDING_BROWSER_OUTPUT", tempfile.mkdtemp(prefix="branding-browser-")))
OUTPUT.mkdir(parents=True, exist_ok=True)
RUN = uuid.uuid4().hex
SESSION = "branding-" + RUN[:12]
passes = []


def php(code):
    result = subprocess.run(
        ["php", "-r", 'require "tests/bootstrap.php"; require_once "plugins/branding/inc/config.class.php"; ' + code],
        cwd=ROOT, check=False, capture_output=True, text=True, timeout=30,
    )
    if result.returncode:
        raise RuntimeError(result.stderr + result.stdout)
    return json.loads(result.stdout)


def browser(*args):
    result = subprocess.run(
        ["agent-browser", "--session", SESSION, "--json", *args],
        check=False, capture_output=True, text=True, timeout=45,
    )
    response = json.loads(result.stdout)
    if result.returncode or not response.get("success"):
        raise AssertionError(str(response) + result.stderr)
    return response.get("data", {})


def evaluate(script):
    return browser("eval", script).get("result")


def check(condition, message):
    if not condition:
        raise AssertionError(message)
    passes.append(message)
    print("PASS:", message, flush=True)


def login():
    browser("fill", "#login_name", "_test_user")
    browser("fill", "#login_password", "PhpUnit_4")
    browser("click", 'button[type="submit"]')
    browser("wait", "--url", "**/front/central.php")


def appearance():
    return evaluate("""(() => {
        const logo = document.querySelector('.page-anonymous .glpi-logo');
        return {background: getComputedStyle(document.body).backgroundImage,
            logo: logo ? getComputedStyle(logo).backgroundImage : '',
            visible: logo && getComputedStyle(logo).display !== 'none',
            action: document.querySelector('form[action]')?.action};
    })()""")


# Refuse production servers before making any changes, even if a URL is supplied.
with urllib.request.urlopen(BASE, timeout=15) as response:
    assert response.headers.get("X-Branding-Test-Environment") == "testing", "Use tests/router.php only"

entities = php("""
if (GLPI_ENVIRONMENT_TYPE !== 'testing') { exit(1); }
$ids = [];
foreach (['parent', 'child', 'sibling'] as $name) {
    $DB->insert('glpi_entities', [
        'name' => 'Branding browser """ + RUN + """ ' . $name,
        'entities_id' => $name === 'child' ? $ids['parent'] : 0,
    ]);
    $ids[$name] = (int) $DB->insertId();
}
$DB->update('glpi_entities', ['sons_cache' => null], ['id' => 0]);
(new \\Glpi\\Cache\\CacheManager())->getCoreCacheInstance()->delete('sons_cache_glpi_entities_0');
echo json_encode($ids);
""")

try:
    parent = entities["parent"]
    child = entities["child"]
    source = ROOT / "public/pics/logos/logo-GLPI-100-black.png"
    browser("open", BASE)
    login()
    evaluate("""fetch('/Session/ChangeEntity', {method:'POST', body:new URLSearchParams({
        id:'0', is_recursive:'1',
        _glpi_csrf_token:document.querySelector('meta[property="glpi:csrf_token"]').content
    })}).then(r => r.status)""")
    browser("open", f"{BASE}/front/entity.form.php?id={parent}&forcetab=PluginBrandingEntity%241")
    browser("wait", "#plugin_branding_login_background")
    check(evaluate(f"!!document.querySelector('a[href=\"/index.php?branding_entity={parent}\"]')"),
          "Branding tab exposes the entity login link")
    for field in ("login_background", "login_logo", "logo_expanded", "logo_collapsed"):
        browser("upload", "#plugin_branding_" + field, str(source))
    browser("click", 'form[action*="/branding/front/entity.form.php"] button[name="update"]')
    browser("wait", "--text", "Branding configuration saved.")
    browser("wait", "#plugin_branding_login_background")
    check(evaluate("document.querySelectorAll('input[name^=\"_plugin_branding_remove_\"]').length") == 4,
          "Real multipart form saves and reloads all four images")
    browser("screenshot", str(OUTPUT / "saved.png"), "--full")

    evaluate(f"""fetch('/Session/ChangeEntity', {{method:'POST', body:new URLSearchParams({{
        id:'{parent}', is_recursive:'0',
        _glpi_csrf_token:document.querySelector('meta[property="glpi:csrf_token"]').content
    }})}}).then(r => r.status)""")
    browser("open", BASE + "/front/central.php")
    evaluate("document.body.classList.remove('navbar-collapsed')")
    check("field=logo_expanded" in evaluate("getComputedStyle(document.querySelector('.navbar-brand .glpi-logo')).backgroundImage"),
          "Changing active entity applies the expanded menu logo")
    evaluate("document.body.classList.add('navbar-collapsed')")
    check("field=logo_collapsed" in evaluate("getComputedStyle(document.querySelector('.navbar-brand .glpi-logo')).backgroundImage"),
          "Collapsed menu applies its configured logo")
    browser("open", BASE + "/front/logout.php?noAUTO=1")
    browser("open", f"{BASE}/index.php?branding_entity={parent}")
    view = appearance()
    check(f"branding_entity={parent}" in view["background"] and f"branding_entity={parent}" in view["logo"],
          "Anonymous entity login displays its background and logo")
    check(f"branding_entity={parent}" in view["action"], "Login submission preserves entity context")
    check(evaluate("""Promise.all([...document.styleSheets].filter(s => s.href?.includes('/branding/')).map(async s => {
        const urls = [...s.cssRules].flatMap(r => [...(r.cssText || '').matchAll(/url\("([^" ]+)"\)/g)].map(m=>m[1]));
        return Promise.all(urls.map(async u => (await fetch(u)).status));
    })).then(a=>a.flat().every(s=>s===200))"""), "Rendered branding images return HTTP 200")

    # Load ST-Custom Login's actual stylesheet after Branding to exercise specificity.
    css = (ROOT / "plugins/customlogin/public/css/customlogin.css").read_text()
    evaluate("""(() => {
        const style = document.createElement('style'); style.textContent = """ + json.dumps(css) + """;
        document.head.append(style);
        document.documentElement.classList.add('stcl-enabled','stcl-login-enabled',
            'stcl-login-background-custom','stcl-login-logo-custom');
        document.documentElement.style.setProperty('--stcl-login-background-image','url(/pics/logos/logo-GLPI-100-black.png)');
        document.querySelector('.page-anonymous .glpi-logo').classList.add('stcl-native-login-logo-hidden');
        const duplicate = document.createElement('img'); duplicate.id='stcl-login-logo'; document.body.append(duplicate);
    })()""")
    view = appearance()
    check(f"branding_entity={parent}" in view["background"] and view["visible"],
          "Entity images win over ST-Custom Login CSS and native-logo hiding")
    check(evaluate("getComputedStyle(document.getElementById('stcl-login-logo')).display") == "none",
          "Competing login logo is hidden without duplicating the entity logo")
    browser("set", "viewport", "390", "844")
    check(f"branding_entity={parent}" in appearance()["background"], "Entity background remains applied on mobile")
    browser("screenshot", str(OUTPUT / "mobile.png"), "--full")
    browser("set", "viewport", "1280", "900")

    browser("open", f"{BASE}/index.php?branding_entity={child}")
    check(f"branding_entity={parent}" in appearance()["background"], "Child entity inherits the nearest parent image")
    browser("open", f"{BASE}/index.php?branding_entity={entities['sibling']}")
    check(f"branding_entity={parent}" not in appearance()["background"], "Sibling entity does not receive another entity's image")
    browser("open", BASE + "/index.php?branding_entity[]=1")
    check(f"branding_entity={parent}" not in appearance()["background"], "Invalid entity parameter falls back safely")
    browser("open", f"{BASE}/index.php?branding_entity={parent}")
    browser("fill", "#login_name", "_branding_missing_" + RUN)
    browser("fill", "#login_password", "invalid-test-password")
    browser("click", 'button[type="submit"]')
    browser("wait", "--text", "Log in again")
    check(f"branding_entity={parent}" in appearance()["background"], "Failed login keeps the entity branding")
    browser("click", 'a[href*="/front/logout.php"]')
    browser("wait", "--url", f"**/index.php*branding_entity={parent}*")
    browser("wait", "#login_name")
    check(f"branding_entity={parent}" in appearance()["background"], "Retry completes GLPI logout and returns to the entity login")
    browser("screenshot", str(OUTPUT / "retry.png"), "--full")
    login()
    check("central.php" in browser("get", "url")["url"], "Valid credentials still reach the GLPI dashboard")
    print(f"{len(passes)} browser checks passed. Screenshots: {OUTPUT}", flush=True)
except Exception:
    browser("screenshot", str(OUTPUT / "failure.png"), "--full")
    print("Failure evidence:", OUTPUT, flush=True)
    raise
finally:
    try:
        browser("close")
    finally:
        php("""
        $ids = """ + json.dumps(list(entities.values())) + """;
        foreach (array_reverse($ids) as $id) {
            foreach (PluginBrandingConfig::FIELDS as $field) { PluginBrandingConfig::removeField($id, $field); }
            $DB->delete(PluginBrandingConfig::getTable(), ['entities_id' => $id]);
            $DB->delete('glpi_entities', ['id' => $id]);
        }
        $DB->update('glpi_entities', ['sons_cache' => null], ['id' => 0]);
        (new \\Glpi\\Cache\\CacheManager())->getCoreCacheInstance()->delete('sons_cache_glpi_entities_0');
        echo json_encode(true);
        """)
