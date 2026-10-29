<?php

/**
 * Standalone structural, security and configuration validation.
 */

declare(strict_types=1);

$root = dirname(__DIR__);
$failures = [];
$passes = [];

$assert = static function (bool $condition, string $message) use (&$failures, &$passes): void {
    if ($condition) {
        $passes[] = $message;
    } else {
        $failures[] = $message;
    }
};

$required = [
    'setup.php',
    'hook.php',
    'composer.json',
    'inc/config.class.php',
    'front/config.php',
    'front/config.form.php',
    'js/customlogin.js',
    'css/customlogin.css',
    'public/config.php',
    'public/asset.php',
    'public/js/customlogin.js',
    'public/css/customlogin.css',
    'pics/service_tic_logo.png',
    'pics/service_tic_qrcode.png',
    'public/pics/service_tic_logo.png',
    'public/pics/service_tic_qrcode.png',
    'README.md',
    'CHANGELOG.md',
    'SECURITY.md',
    'LICENSE',
    'docs/PROMPT_EXECUTADO.md',
    'docs/RELATORIO_VALIDACAO.md',
    'tests/setup_compatibility.php',
    'tests/endpoint_case.php',
    'tests/admin_form_case.php',
    'tests/run_admin_form_tests.py',
    'tests/run_endpoint_tests.py',
    'tests/run_http_integration.py',
    'tests/background_dimension_case.php',
    'tests/run_background_dimension_tests.py',
    'tests/dom_compatibility.html',
    'tests/run_all.sh',
];

foreach ($required as $relative) {
    $assert(is_file($root . '/' . $relative), 'Arquivo obrigatório: ' . $relative);
}

$composer = json_decode(
    (string) file_get_contents($root . '/composer.json'),
    true,
    512,
    JSON_THROW_ON_ERROR
);
$assert(($composer['type'] ?? null) === 'glpi-plugin', 'Composer declara tipo glpi-plugin');
$assert(($composer['license'] ?? null) === 'GPL-2.0-or-later', 'Composer declara licença GPL-2.0-or-later');
$assert(($composer['require']['php'] ?? null) === '>=8.3', 'Composer declara PHP >=8.3');
$assert(($composer['require']['ext-fileinfo'] ?? null) === '*', 'Composer declara extensão fileinfo');

$setup = (string) file_get_contents($root . '/setup.php');
$assert(str_contains($setup, "PLUGIN_CUSTOMLOGIN_VERSION', '2.2.1'"), 'Versão 2.2.1 declarada');
$assert(str_contains($setup, "PLUGIN_CUSTOMLOGIN_MIN_GLPI', '10.0.10'"), 'GLPI mínimo declarado');
$assert(str_contains($setup, "PLUGIN_CUSTOMLOGIN_MAX_GLPI', '12.0.0'"), 'GLPI máximo exclusivo declarado');
$assert(str_contains($setup, "PLUGIN_CUSTOMLOGIN_MIN_PHP', '8.3.0'"), 'PHP mínimo declarado');
$assert(str_contains($setup, "'requirements' =>"), 'Metadados usam bloco requirements');
$assert(str_contains($setup, "registerPluginStatelessPath"), 'GLPI 11 registra caminhos stateless');
$assert(str_contains($setup, "addPluginStrategyForLegacyScripts"), 'GLPI 11 registra estratégia de firewall');
$assert(
    str_contains($setup, "['add_javascript_anonymous_page']['customlogin']"),
    'Setup registra JavaScript no pipeline de páginas anônimas'
);
$assert(
    str_contains($setup, "['add_css_anonymous_page']['customlogin']"),
    'Setup registra CSS no pipeline de páginas anônimas'
);


$formHandler = (string) file_get_contents($root . '/front/config.form.php');
$formPage = (string) file_get_contents($root . '/front/config.php');
$assert(str_contains($formHandler, "version_compare(GLPI_VERSION, '11.0.0', '>=')"), 'Handler distingue o fluxo CSRF do GLPI 11');
$assert(substr_count($formHandler, 'Session::checkCSRF($_POST)') === 1, 'Handler possui uma única validação CSRF manual');
$assert(strpos($formHandler, 'Session::checkCSRF($_POST)') < strpos($formHandler, 'PluginCustomloginConfig::saveAppearance'), 'Validação CSRF do GLPI 10 precede qualquer gravação');
$assert(str_contains($formPage, 'Session::getNewCSRFToken(true)'), 'Formulário gera token CSRF independente');
$assert(str_contains($formPage, 'name="_glpi_csrf_token"'), 'Formulário envia o token no campo esperado pelo GLPI');
$assert(!str_contains($formPage, 'background_position'), 'Formulário remove a antiga posição do fundo');
$assert(
    !str_contains($formPage, 'por isso a antiga opção “Posição do fundo” foi removida'),
    'Aviso administrativo não exibe mais o texto solicitado para remoção'
);
$assert(str_contains($formPage, 'class="stcl-assets-grid"'), 'Formulário usa grade própria para alinhar os cartões de imagens');
$assert(str_contains($formPage, 'class="stcl-marketing-card"'), 'Formulário ocupa o espaço livre com o cartão de marketing Service TIC');
$assert(str_contains($formPage, "'/pics/service_tic_logo.png'"), 'Formulário usa a logo institucional empacotada');
$assert(str_contains($formPage, "'/pics/service_tic_qrcode.png'"), 'Formulário usa o QR Code institucional empacotado');
$assert(str_contains($formPage, 'https://www.servicetic.com.br'), 'Cartão de marketing aponta para o site oficial informado');
$assert(str_contains($formPage, 'https://servicetic.com.br/links'), 'QR Code aponta para a página de links informada');
$assert(substr_count($formPage, 'rel="noopener noreferrer"') >= 2, 'Links externos do marketing usam noopener e noreferrer');
$assert(str_contains($formPage, 'name="login_alignment"'), 'Formulário permite alinhar o painel à esquerda, centro ou direita');
$assert(str_contains($formPage, "'sidebar_effect_enabled'"), 'Formulário permite ativar o efeito do menu lateral');
$assert(str_contains($formPage, 'name="sidebar_effect_preset"'), 'Formulário oferece seleção do tema do menu lateral');
$assert(str_contains($formPage, 'PluginCustomloginConfig::getSidebarPresets()'), 'Formulário carrega os temas permitidos da configuração central');
$assert(str_contains((string) file_get_contents($root . '/inc/config.class.php'), "'service-tic' =>"), 'Configuração inclui o tema Service TIC');
$assert(str_contains((string) file_get_contents($root . '/inc/config.class.php'), "'graphite' =>"), 'Configuração inclui sete temas até Grafite');
$assert(substr_count($formHandler, 'Html::redirect($redirect)') === 2, 'Handler mantém redirects somente fora do bloco de processamento');
$tryStart = strpos($formHandler, 'try {');
$catchStart = strpos($formHandler, '} catch (Throwable');
$redirectInsideTry = $tryStart !== false && $catchStart !== false
    ? strpos(substr($formHandler, $tryStart, $catchStart - $tryStart), 'Html::redirect(')
    : false;
$assert($redirectInsideTry === false, 'RedirectException do GLPI 11 não pode ser capturada como erro de configuração');
$assert(!str_contains($formHandler, "'Não foi possível salvar o ST-Custom Login: ' . \$exception->getMessage()"), 'Mensagem administrativa não expõe detalhes internos da exceção');

$js = (string) file_get_contents($root . '/js/customlogin.js');
$css = (string) file_get_contents($root . '/css/customlogin.css');
$assert(!str_contains($js, 'insert' . 'Before'), 'JavaScript não usa a API frágil reportada na issue #12');
$assert(!str_contains($js, '.innerHTML'), 'JavaScript não injeta HTML');
$assert(!str_contains($js, 'document.write'), 'JavaScript não usa document.write');
$assert(str_contains($js, 'MutationObserver'), 'Reaplicação idempotente disponível');
$assert(str_contains($js, 'target.prepend(branding)'), 'Bloco de marca é inserido defensivamente dentro do card');
$assert(str_contains($js, 'branding.prepend(image)'), 'Logo do login é inserida antes dos textos personalizados');
$assert(str_contains($js, 'applyLoginPrompt'), 'Texto nativo de autenticação possui controle dedicado');
$assert(str_contains($js, "'stcl-login-background-custom'"), 'Classe de fundo só é aplicada com imagem configurada');
$assert(str_contains($js, "'stcl-login-logo-custom'"), 'Classe de logo do login só é aplicada com imagem configurada');
$assert(str_contains($js, "'stcl-navbar-logo-custom'"), 'Classe de logo interno só é aplicada com imagem configurada');
$assert(str_contains($js, "'stcl-navbar-logo-collapsed-custom'"), 'Classe de logo interno recolhido é aplicada');
$assert(str_contains($js, "'stcl-sidebar-effect-enabled'"), 'Classe do efeito do menu lateral é controlada pelo JavaScript');
$assert(str_contains($js, 'stcl-login-align-${config.login.alignment}'), 'JavaScript aplica o alinhamento escolhido do painel');
$assert(str_contains($js, 'stcl-sidebar-theme-${config.internal.sidebarEffectPreset}'), 'JavaScript aplica o tema escolhido do menu lateral');
$assert(str_contains($js, "ROOT.dataset.stclVersion = PLUGIN_VERSION"), 'JavaScript expõe marcador de diagnóstico da versão aplicada');
$assert(str_contains($css, '.stcl-login-background-custom'), 'CSS preserva fundo nativo quando não há imagem');
$assert(str_contains($css, '.stcl-login-logo-custom'), 'CSS preserva logo nativo do login quando não há imagem');
$assert(str_contains($css, '.stcl-navbar-logo-custom'), 'CSS preserva logo interno nativo quando não há imagem');
$assert(str_contains($css, '.stcl-navbar-logo-collapsed-custom'), 'CSS suporta logo interna recolhida');
$assert(str_contains($css, '--logo: none !important'), 'CSS neutraliza a variável do logo nativo do GLPI 10.0.26/11');
$assert(str_contains($css, 'content: none !important'), 'CSS neutraliza o conteúdo substituído do logo nativo');
$assert(str_contains($css, '.stcl-login-logo'), 'CSS possui elemento próprio para a logo dentro do card');
$assert(str_contains($css, 'object-fit: contain'), 'CSS preserva a proporção da logo do login');
$assert(str_contains($css, '.stcl-native-login-logo-hidden'), 'CSS oculta somente a logo nativa externa marcada');
$assert(str_contains($css, '.stcl-login-prompt-hidden'), 'CSS remove o espaço do texto de autenticação desativado');
$assert(!str_contains($css, '--stcl-background-position'), 'CSS não mantém a antiga variável de posição do fundo');
$assert(str_contains($css, 'background-position: center center !important'), 'Fundo usa posicionamento central fixo');
$assert(str_contains($css, '.stcl-login-align-left'), 'CSS suporta painel de login à esquerda');
$assert(str_contains($css, '.stcl-login-align-center'), 'CSS suporta painel de login centralizado');
$assert(str_contains($css, '.stcl-login-align-right'), 'CSS suporta painel de login à direita');
$assert(str_contains($css, '.stcl-sidebar-theme-service-tic'), 'CSS inclui tema Service TIC do menu lateral');
$assert(str_contains($css, '.stcl-sidebar-theme-graphite'), 'CSS inclui sete temas do menu lateral');
$assert(str_contains($css, '.stcl-sidebar-effect-enabled'), 'CSS mantém o efeito do menu lateral opt-in');
$assert(str_contains($css, '.dropdown-menu-columns'), 'CSS organiza o submenu em coluna única');
$assert(str_contains($css, '.stcl-assets-grid'), 'CSS define a grade alinhada dos cartões administrativos');
$assert(str_contains($css, 'grid-template-columns: repeat(2, minmax(0, 1fr))'), 'Grade administrativa usa duas colunas equivalentes no desktop');
$assert(str_contains($css, '@media (max-width: 1199.98px)'), 'Grade administrativa reduz para uma coluna antes de ficar apertada');
$assert(str_contains($css, '.stcl-assets-grid-item'), 'Cada item da grade permite esticar o cartão');
$assert(str_contains($css, '.stcl-marketing-card'), 'CSS contém o cartão institucional Service TIC');
$assert(str_contains($css, 'height: 100%'), 'Cartões administrativos preenchem a altura da linha');
$assert(str_contains($css, '.stcl-marketing-logo'), 'CSS dimensiona a logo institucional');
$assert(str_contains($css, '.stcl-marketing-qr'), 'CSS dimensiona o QR Code institucional');
$assert(hash_file('sha256', $root . '/js/customlogin.js') === hash_file('sha256', $root . '/public/js/customlogin.js'), 'Cópias JS do GLPI 10/11 são idênticas');
$assert(hash_file('sha256', $root . '/css/customlogin.css') === hash_file('sha256', $root . '/public/css/customlogin.css'), 'Cópias CSS do GLPI 10/11 são idênticas');
$assert(
    hash_file('sha256', $root . '/pics/service_tic_logo.png') === hash_file('sha256', $root . '/public/pics/service_tic_logo.png'),
    'Cópias da logo institucional para GLPI 10/11 são idênticas'
);
$assert(
    hash_file('sha256', $root . '/pics/service_tic_qrcode.png') === hash_file('sha256', $root . '/public/pics/service_tic_qrcode.png'),
    'Cópias do QR Code institucional para GLPI 10/11 são idênticas'
);
$marketingLogoInfo = @getimagesize($root . '/pics/service_tic_logo.png');
$marketingQrInfo = @getimagesize($root . '/pics/service_tic_qrcode.png');
$assert(
    is_array($marketingLogoInfo) && ($marketingLogoInfo[0] ?? 0) === 945 && ($marketingLogoInfo[1] ?? 0) === 945,
    'Logo institucional empacotada possui 945×945 px'
);
$assert(
    is_array($marketingQrInfo) && ($marketingQrInfo[0] ?? 0) === 128 && ($marketingQrInfo[1] ?? 0) === 130,
    'QR Code institucional empacotado possui 128×130 px'
);


$publicConfig = (string) file_get_contents($root . '/public/config.php');
$publicAsset = (string) file_get_contents($root . '/public/asset.php');
foreach (['exit(', 'die(', 'http_response_code('] as $pattern) {
    $assert(!str_contains($publicConfig, $pattern), 'config.php não usa ' . $pattern);
    $assert(!str_contains($publicAsset, $pattern), 'asset.php não usa ' . $pattern);
}
$assert(str_contains($publicConfig, "['GET', 'HEAD']"), 'Endpoint JSON aceita somente GET/HEAD');
$assert(str_contains($publicAsset, "['GET', 'HEAD']"), 'Endpoint de imagem aceita somente GET/HEAD');
$assert(str_contains($publicAsset, 'array_key_exists($key'), 'Endpoint usa lista fechada de chaves');
$assert(str_contains($publicAsset, 'fopen(') && str_contains($publicAsset, 'fpassthru('), 'Endpoint mantém handle do arquivo durante a resposta');

$phpFiles = [];
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root));
foreach ($iterator as $file) {
    if (
        $file->isFile()
        && strtolower($file->getExtension()) === 'php'
        && !str_contains(str_replace('\\', '/', $file->getPathname()), '/tests/')
    ) {
        $phpFiles[] = $file->getPathname();
    }
}

$allPhp = '';
foreach ($phpFiles as $file) {
    $allPhp .= "\n" . (string) file_get_contents($file);
}

$forbidden = [
    '/\beval\s*\(/i' => 'eval(',
    '/\bshell_exec\s*\(/i' => 'shell_exec(',
    '/(?<![A-Za-z0-9_])passthru\s*\(/i' => 'passthru(',
    '/(?<![A-Za-z0-9_])system\s*\(/i' => 'system(',
    '/\bbase64_decode\s*\(/i' => 'base64_decode(',
    '/\bunserialize\s*\(/i' => 'unserialize(',
    '/\bmysqli_query\s*\(/i' => 'mysqli_query(',
    '/->query\s*\(/i' => '->query(',
];
foreach ($forbidden as $pattern => $label) {
    $assert(preg_match($pattern, $allPhp) !== 1, 'Ausência do padrão perigoso: ' . $label);
}

$configSource = (string) file_get_contents($root . '/inc/config.class.php');
$assert(str_contains($configSource, 'is_uploaded_file'), 'Upload HTTP validado');
$assert(str_contains($configSource, '$actualSize = filesize($temporaryPath)'), 'Tamanho real do upload validado');
$assert(str_contains($configSource, '$reportedSize !== $actualSize'), 'Inconsistência de tamanho do upload rejeitada');
$assert(str_contains($configSource, 'FILEINFO_MIME_TYPE'), 'MIME detectado por conteúdo');
$assert(substr_count($configSource, 'getimagesize') >= 2, 'Imagem validada no upload e novamente na entrega');
$assert(str_contains($configSource, 'basename($filename) !== $filename'), 'Nome armazenado impede travessia');
$assert(!str_contains($configSource, "'image/svg+xml'"), 'SVG de usuário não permitido');
$assert(str_contains($configSource, "'allowed_dimensions'"), 'Plano de fundo possui dimensões 16:9 permitidas');
$assert(str_contains($configSource, '[1_920, 1_080]'), 'Full HD é aceito para o plano de fundo');
$assert(str_contains($configSource, '[2_560, 1_440]'), 'QHD/2K é aceito para o plano de fundo');
$assert(str_contains($configSource, '[3_840, 2_160]'), '4K é aceito para o plano de fundo');
$assert(str_contains($configSource, "'login_alignment'"), 'Configuração persiste o alinhamento do painel');
$assert(str_contains($configSource, "'sidebar_effect_preset'"), 'Configuração persiste o tema do menu lateral');
$assert(!str_contains($configSource, "'background_position' =>"), 'Configuração não mantém a antiga posição do fundo entre os campos ativos');
$assert(substr_count($configSource, "'background_position'") === 1, 'Migração remove somente a chave legada de posição do fundo');
$assert(str_contains($configSource, 'Config::deleteConfigurationValues'), 'Remoção usa API estática compatível');
$assert(str_contains($configSource, "return \$root . '/plugins/customlogin';"), 'GLPI 11 usa URL canônica do plugin');
$assert(str_contains($configSource, "hash('sha256', \$info['filename']"), 'Cache de imagem usa revisão por conteúdo/metadados');
$assert(str_contains($configSource, 'writeProtectionFile'), 'Arquivos de proteção são criados com falha fechada');
$assert(str_contains($configSource, 'if (is_link($path))'), 'Links simbólicos são rejeitados na leitura/na proteção');
$assert(str_contains($configSource, 'getConfiguredStoragePath'), 'Remoção não segue links simbólicos configurados');
$assert(str_contains($configSource, "'navbar_logo_collapsed'"), 'Configuração inclui upload da logo interna recolhida');
$assert(str_contains($configSource, "'login_prompt_enabled'"), 'Configuração inclui opção de exibir o texto de autenticação');
$assert(str_contains($configSource, "'login_prompt_text'"), 'Configuração inclui renomeação do texto de autenticação');
$assert(str_contains($configSource, "'image/vnd.microsoft.icon'"), 'Favicon aceita MIME ICO validado');
$assert(str_contains($configSource, 'Favicon / ícone do navegador'), 'Formulário identifica explicitamente o upload de favicon');
$assert(str_contains($configSource, 'Logotipo interno (menu recolhido)'), 'Formulário oferece upload da logo interna recolhida');
$assert(str_contains($formPage, 'name="login_prompt_enabled"'), 'Formulário oferece opção de ocultar o texto de autenticação');
$assert(str_contains($formPage, 'name="login_prompt_text"'), 'Formulário oferece campo para renomear o texto de autenticação');

// Lightweight GLPI stubs make it possible to exercise configuration behavior.
$fixtureSuffix = bin2hex(random_bytes(5));
if (!defined('GLPI_ROOT')) {
    define('GLPI_ROOT', sys_get_temp_dir() . '/stcl-test-root-' . $fixtureSuffix);
}
if (!defined('GLPI_PLUGIN_DOC_DIR')) {
    define('GLPI_PLUGIN_DOC_DIR', sys_get_temp_dir() . '/stcl-test-files-' . $fixtureSuffix);
}
if (!defined('GLPI_VERSION')) {
    define('GLPI_VERSION', '11.0.8');
}
if (!defined('PLUGIN_CUSTOMLOGIN_VERSION')) {
    define('PLUGIN_CUSTOMLOGIN_VERSION', '2.2.1');
}

$CFG_GLPI = ['root_doc' => '/glpi'];

if (!class_exists('Config')) {
    final class Config
    {
        /** @var array<string, array<string, mixed>> */
        public static array $data = [];

        /** @return array<string, mixed> */
        public static function getConfigurationValues(string $context): array
        {
            return self::$data[$context] ?? [];
        }

        /** @param array<string, mixed> $values */
        public static function setConfigurationValues(string $context, array $values): void
        {
            self::$data[$context] = array_merge(self::$data[$context] ?? [], $values);
        }

        /** @param list<string> $keys */
        public static function deleteConfigurationValues(string $context, array $keys): void
        {
            foreach ($keys as $key) {
                unset(self::$data[$context][$key]);
            }
        }
    }
}

if (!class_exists('Plugin')) {
    final class Plugin
    {
        public static int $webDirCalls = 0;

        public static function getWebDir(string $name): string
        {
            self::$webDirCalls++;
            return '/glpi/marketplace/' . $name;
        }
    }
}

require_once $root . '/inc/config.class.php';

$alignments = PluginCustomloginConfig::getLoginAlignments();
$sidebarPresets = PluginCustomloginConfig::getSidebarPresets();
$assert($alignments === [
    'left' => 'Esquerda',
    'center' => 'Centralizada',
    'right' => 'Direita',
], 'Lista fechada oferece exatamente esquerda, centro e direita');
$assert(count($sidebarPresets) === 7, 'Lista fechada oferece exatamente sete temas laterais');
$assert(array_key_exists('service-tic', $sidebarPresets), 'Lista de temas inclui Service TIC');
$assert(array_key_exists('graphite', $sidebarPresets), 'Lista de temas inclui Grafite');

$cleanup = static function (string $path) use (&$cleanup): void {
    if (!file_exists($path) && !is_link($path)) {
        return;
    }
    if (is_dir($path) && !is_link($path)) {
        $items = scandir($path) ?: [];
        foreach ($items as $item) {
            if ($item !== '.' && $item !== '..') {
                $cleanup($path . DIRECTORY_SEPARATOR . $item);
            }
        }
        @rmdir($path);
        return;
    }
    @unlink($path);
};
$cleanup(GLPI_PLUGIN_DOC_DIR);
Config::$data = [
    PluginCustomloginConfig::CONTEXT => [
        'background_position' => 'left center',
    ],
];

$normalized = PluginCustomloginConfig::normalize([
    'enabled' => '1',
    'login_enabled' => '0',
    'sidebar_effect_enabled' => '1',
    'sidebar_effect_preset' => 'invalid-theme',
    'primary_color' => 'javascript:alert(1)',
    'background_overlay' => 999,
    'login_alignment' => 'diagonal',
    'login_title' => '<script>alert(1)</script> Portal',
    'login_prompt_enabled' => '0',
    'login_prompt_text' => '<b>Acesse sua conta</b>',
    'navbar_logo_collapsed_width' => 999,
    'asset_background' => '../../etc/passwd',
]);

$assert($normalized['enabled'] === 1, 'Booleano verdadeiro normalizado');
$assert($normalized['login_enabled'] === 0, 'Booleano falso normalizado');
$assert($normalized['primary_color'] === '#206bc4', 'Cor inválida volta ao padrão');
$assert($normalized['background_overlay'] === 80, 'Número limitado ao máximo');
$assert($normalized['login_alignment'] === 'center', 'Alinhamento inválido volta ao centro');
$assert($normalized['sidebar_effect_enabled'] === 1, 'Ativação do efeito lateral normalizada');
$assert($normalized['sidebar_effect_preset'] === 'service-tic', 'Tema lateral inválido volta ao padrão Service TIC');
$assert($normalized['login_title'] === 'alert(1) Portal', 'Tags removidas de texto administrativo');
$assert($normalized['login_prompt_enabled'] === 0, 'Exibição do texto de autenticação normalizada');
$assert($normalized['login_prompt_text'] === 'Acesse sua conta', 'Texto de autenticação tratado como texto simples');
$assert($normalized['navbar_logo_collapsed_width'] === 120, 'Dimensão da logo recolhida limitada ao máximo');
$assert($normalized['asset_background'] === '', 'Caminho malicioso rejeitado');
$assert(PluginCustomloginConfig::isStandardBackgroundSize(1_920, 1_080), 'Validador aceita Full HD 16:9');
$assert(PluginCustomloginConfig::isStandardBackgroundSize(2_560, 1_440), 'Validador aceita QHD/2K 16:9');
$assert(PluginCustomloginConfig::isStandardBackgroundSize(3_840, 2_160), 'Validador aceita 4K 16:9');
$assert(!PluginCustomloginConfig::isStandardBackgroundSize(1_600, 900), 'Validador rejeita dimensão 16:9 fora do padrão permitido');

$pngChunk = static function (string $type, string $data): string {
    return pack('N', strlen($data))
        . $type
        . $data
        . pack('N', crc32($type . $data));
};
$makeGrayscalePng = static function (int $width, int $height) use ($pngChunk): string {
    $row = "\x00" . str_repeat("\x00", $width);
    $raw = str_repeat($row, $height);
    $compressed = gzcompress($raw, 9);
    if (!is_string($compressed)) {
        throw new RuntimeException('Não foi possível criar a fixture PNG.');
    }

    return "\x89PNG\r\n\x1a\n"
        . $pngChunk('IHDR', pack('NNCCCCC', $width, $height, 8, 0, 0, 0, 0))
        . $pngChunk('IDAT', $compressed)
        . $pngChunk('IEND', '');
};
$backgroundDefinition = PluginCustomloginConfig::getAssetDefinitions()['background'];
$validateImage = new ReflectionMethod(PluginCustomloginConfig::class, 'validateImageFile');
$allowedBackgroundFixture = GLPI_PLUGIN_DOC_DIR . '/allowed-background.png';
$rejectedBackgroundFixture = GLPI_PLUGIN_DOC_DIR . '/rejected-background.png';
@mkdir(GLPI_PLUGIN_DOC_DIR, 0750, true);
file_put_contents($allowedBackgroundFixture, $makeGrayscalePng(1_920, 1_080), LOCK_EX);
file_put_contents($rejectedBackgroundFixture, $makeGrayscalePng(1_600, 900), LOCK_EX);
$validatedBackground = $validateImage->invoke(null, $allowedBackgroundFixture, $backgroundDefinition, true);
$assert(
    is_array($validatedBackground) && ($validatedBackground[0] ?? null) === 'image/png',
    'Validação real aceita upload Full HD com conteúdo PNG válido'
);
$dimensionRejected = false;
try {
    $validateImage->invoke(null, $rejectedBackgroundFixture, $backgroundDefinition, true);
} catch (RuntimeException $exception) {
    $dimensionRejected = str_contains($exception->getMessage(), 'Dimensão do plano de fundo não permitida');
}
$assert($dimensionRejected, 'Validação real rejeita upload 1600×900 fora das três dimensões permitidas');
@unlink($allowedBackgroundFixture);
@unlink($rejectedBackgroundFixture);

PluginCustomloginConfig::install();
$assert(is_dir(PluginCustomloginConfig::storageDirectory()), 'Instalação cria diretório privado');
$assert(is_file(PluginCustomloginConfig::storageDirectory() . '/.htaccess'), 'Instalação cria proteção Apache');
$assert(is_file(PluginCustomloginConfig::storageDirectory() . '/web.config'), 'Instalação cria proteção IIS');
$assert(is_file(PluginCustomloginConfig::storageDirectory() . '/index.html'), 'Instalação cria índice vazio');
$protectionPath = PluginCustomloginConfig::storageDirectory() . '/.htaccess';
file_put_contents($protectionPath, "Allow from all
", LOCK_EX);
PluginCustomloginConfig::install();
$assert(
    file_get_contents($protectionPath) === "Require all denied
Deny from all
",
    'Instalação restaura arquivo de proteção adulterado'
);
$assert((Config::$data[PluginCustomloginConfig::CONTEXT]['schema_version'] ?? null) === '3.0', 'Instalação grava schema 3.0');
$assert(!array_key_exists('background_position', Config::$data[PluginCustomloginConfig::CONTEXT] ?? []), 'Instalação remove a configuração legada de posição do fundo');

$png = base64_decode(
    'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAusB9Wl6qLgAAAAASUVORK5CYII=',
    true
);
$assert(is_string($png), 'Fixture PNG decodificada');
$assetName = 'background-test.png';
$assetPath = PluginCustomloginConfig::storageDirectory() . '/' . $assetName;
file_put_contents($assetPath, $png, LOCK_EX);
Config::setConfigurationValues(PluginCustomloginConfig::CONTEXT, [
    'asset_background' => $assetName,
    'asset_background_mime' => 'image/png',
]);

$assetInfo = PluginCustomloginConfig::getAssetInfo('background');
$assert(is_array($assetInfo), 'Imagem privada válida é reconhecida');
$assert(($assetInfo['mime'] ?? null) === 'image/png', 'MIME privado é revalidado');
$assetUrl = PluginCustomloginConfig::getAssetUrl('background');
$assert(
    is_string($assetUrl)
    && preg_match('#^/glpi/plugins/customlogin/asset\.php\?key=background&v=[a-f0-9]{20}$#D', $assetUrl) === 1,
    'GLPI 11 gera URL canônica com revisão forte'
);
$assert(Plugin::$webDirCalls === 0, 'GLPI 11 não usa Plugin::getWebDir()');

$ico = base64_decode(
    'AAABAAEAEBAAAAAAIABWAAAAFgAAAIlQTkcNChoKAAAADUlIRFIAAAAQAAAAEAgGAAAAH/P/YQAAAB1JREFUeJxjZGhg+M9AAWCiRPOoAaMGjBowmAwAAFReAZ8WJd6uAAAAAElFTkSuQmCC',
    true
);
$assert(is_string($ico), 'Fixture ICO decodificada');
$faviconName = 'favicon-test.ico';
$faviconPath = PluginCustomloginConfig::storageDirectory() . '/' . $faviconName;
file_put_contents($faviconPath, $ico, LOCK_EX);
Config::setConfigurationValues(PluginCustomloginConfig::CONTEXT, [
    'asset_favicon' => $faviconName,
    'asset_favicon_mime' => 'image/vnd.microsoft.icon',
]);
$faviconInfo = PluginCustomloginConfig::getAssetInfo('favicon');
$assert(is_array($faviconInfo), 'Favicon ICO privado válido é reconhecido');
$assert(
    in_array(($faviconInfo['mime'] ?? ''), ['image/x-icon', 'image/vnd.microsoft.icon'], true),
    'MIME ICO é revalidado por conteúdo'
);
$faviconUrl = PluginCustomloginConfig::getAssetUrl('favicon');
$assert(
    is_string($faviconUrl)
    && preg_match('#^/glpi/plugins/customlogin/asset\.php\?key=favicon&v=[a-f0-9]{20}$#D', $faviconUrl) === 1,
    'Favicon ICO recebe URL pública validada'
);

Config::setConfigurationValues(PluginCustomloginConfig::CONTEXT, [
    'asset_background' => '../../etc/passwd',
    'asset_background_mime' => 'image/png',
]);
$assert(PluginCustomloginConfig::getAssetInfo('background') === null, 'Travessia de diretório não resolve ativo');

$fakeName = 'background-fake.png';
$fakePath = PluginCustomloginConfig::storageDirectory() . '/' . $fakeName;
file_put_contents($fakePath, 'not-an-image', LOCK_EX);
Config::setConfigurationValues(PluginCustomloginConfig::CONTEXT, [
    'asset_background' => $fakeName,
    'asset_background_mime' => 'image/png',
]);
$assert(PluginCustomloginConfig::getAssetInfo('background') === null, 'Arquivo com extensão falsa é rejeitado');
PluginCustomloginConfig::deleteAsset('background');
$assert(!is_file($fakePath), 'Arquivo inválido configurado é removido sem ser servido');

$outsidePath = dirname(PluginCustomloginConfig::storageDirectory()) . '/outside.png';
file_put_contents($outsidePath, $png, LOCK_EX);
$linkName = 'background-link.png';
$linkPath = PluginCustomloginConfig::storageDirectory() . '/' . $linkName;
$linkCreated = function_exists('symlink') && @symlink($outsidePath, $linkPath);
if ($linkCreated) {
    Config::setConfigurationValues(PluginCustomloginConfig::CONTEXT, [
        'asset_background' => $linkName,
        'asset_background_mime' => 'image/png',
    ]);
    $assert(PluginCustomloginConfig::getAssetInfo('background') === null, 'Link simbólico de ativo é rejeitado');
    PluginCustomloginConfig::deleteAsset('background');
    $assert(!is_link($linkPath), 'Remoção exclui somente o link configurado');
    $assert(is_file($outsidePath), 'Remoção não segue o link até o arquivo externo');
} else {
    $assert(true, 'Teste de link simbólico ignorado pelo sistema de arquivos');
    $assert(true, 'Remoção de link simbólico não aplicável no ambiente');
    $assert(true, 'Arquivo externo não exposto no ambiente sem symlink');
}
@unlink($outsidePath);

$payload = PluginCustomloginConfig::getPublicPayload();
$assert(isset($payload['login'], $payload['internal']), 'Payload público possui as seções de aparência esperadas');
$assert(($payload['plugin']['version'] ?? null) === '2.2.1', 'Payload público informa versão esperada');
$assert(($payload['plugin']['schema'] ?? null) === '3.0', 'Payload público informa schema 3.0');
$assert(array_key_exists('promptEnabled', $payload['login'] ?? []), 'Payload público inclui controle do texto de autenticação');
$assert(array_key_exists('promptText', $payload['login'] ?? []), 'Payload público inclui texto de autenticação personalizado');
$assert(array_key_exists('collapsedLogoUrl', $payload['internal'] ?? []), 'Payload público inclui logo interna recolhida');
$assert(($payload['login']['alignment'] ?? null) === 'center', 'Payload público inclui alinhamento normalizado do painel');
$assert(array_key_exists('sidebarEffectEnabled', $payload['internal'] ?? []), 'Payload público inclui ativação do efeito lateral');
$assert(($payload['internal']['sidebarEffectPreset'] ?? null) === 'service-tic', 'Payload público inclui tema lateral normalizado');
$assert(!array_key_exists('backgroundPosition', $payload['login'] ?? []), 'Payload público não expõe a antiga posição do fundo');
$assert(array_key_exists('faviconMime', $payload), 'Payload público inclui MIME do favicon');
$assert(
    in_array(($payload['faviconMime'] ?? ''), ['image/x-icon', 'image/vnd.microsoft.icon'], true),
    'Payload público expõe o MIME real do favicon ICO'
);

PluginCustomloginConfig::uninstall();
$assert((Config::$data[PluginCustomloginConfig::CONTEXT] ?? []) === [], 'Desinstalação remove configurações próprias');
$assert(!is_dir(PluginCustomloginConfig::storageDirectory()), 'Desinstalação remove diretório próprio');
$cleanup(GLPI_PLUGIN_DOC_DIR);

foreach ($passes as $message) {
    echo "[OK] {$message}\n";
}

if ($failures !== []) {
    foreach ($failures as $message) {
        fwrite(STDERR, "[FAIL] {$message}\n");
    }
    fwrite(STDERR, sprintf("\n%d validação(ões) falharam.\n", count($failures)));
    exit(1);
}

echo sprintf("\n%d validações concluídas com sucesso.\n", count($passes));
