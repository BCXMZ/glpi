#!/usr/bin/env bash
set -euo pipefail

ROOT="$(cd "$(dirname "$0")/.." && pwd)"

echo '== Sintaxe PHP =='
find "$ROOT" -type f -name '*.php' -print0 | sort -z | xargs -0 -n1 php -l

echo '== Sintaxe JavaScript =='
node --check "$ROOT/js/customlogin.js"
node --check "$ROOT/public/js/customlogin.js"

echo '== Manifesto JSON =='
python3 -m json.tool "$ROOT/composer.json" >/dev/null

echo '== Validação estrutural e de segurança =='
php "$ROOT/tests/validate.php"

echo '== Compatibilidade de setup GLPI =='
for version in 10.0.9 10.0.10 10.0.26 11.0.7 11.0.8 12.0.0; do
    STCL_GLPI_VERSION="$version" php "$ROOT/tests/setup_compatibility.php" "$version"
done

echo '== Formulário administrativo e regressão CSRF =='
python3 "$ROOT/tests/run_admin_form_tests.py"

echo '== Dimensões padronizadas do plano de fundo =='
python3 "$ROOT/tests/run_background_dimension_tests.py"

echo '== Endpoints públicos =='
python3 "$ROOT/tests/run_endpoint_tests.py"

echo '== Integração HTTP local =='
python3 "$ROOT/tests/run_http_integration.py"

echo '== Compatibilidade DOM em Chromium =='
bash "$ROOT/tests/run_browser_test.sh"

echo '== Integridade dos recursos duplicados =='
cmp "$ROOT/js/customlogin.js" "$ROOT/public/js/customlogin.js"
cmp "$ROOT/css/customlogin.css" "$ROOT/public/css/customlogin.css"
cmp "$ROOT/pics/service_tic_logo.png" "$ROOT/public/pics/service_tic_logo.png"
cmp "$ROOT/pics/service_tic_qrcode.png" "$ROOT/public/pics/service_tic_qrcode.png"

echo 'Todas as validações do código-fonte foram concluídas com sucesso.'
