<?php

/**
 * ST-Custom Login administration page.
 *
 * @license GPL-2.0-or-later
 */

declare(strict_types=1);

if (!defined('GLPI_ROOT')) {
    require_once dirname(__DIR__, 3) . '/inc/includes.php';
}

require_once dirname(__DIR__) . '/inc/config.class.php';

Session::checkRight('config', UPDATE);

$config = PluginCustomloginConfig::get();
$webDir = PluginCustomloginConfig::getWebDir();
$action = $webDir . '/front/config.form.php';
$token = Session::getNewCSRFToken(true);
$definitions = PluginCustomloginConfig::getAssetDefinitions();
$storageWritable = PluginCustomloginConfig::isStorageWritable();
$marketingLogoUrl = $webDir . '/pics/service_tic_logo.png';
$marketingQrUrl = $webDir . '/pics/service_tic_qrcode.png';

Html::header('ST-Custom Login', $webDir . '/front/config.php', 'config', 'plugins');

$e = static fn (string $value): string => PluginCustomloginConfig::escape($value);
$checked = static fn (mixed $value): string => (int) $value === 1 ? ' checked' : '';

$assetPreview = static function (string $assetKey, string $alt) use ($e): string {
    $url = PluginCustomloginConfig::getAssetUrl($assetKey);
    if ($url === null) {
        return '<div class="stcl-empty-preview">Nenhuma imagem personalizada</div>';
    }

    return '<img src="' . $e($url) . '" alt="' . $e($alt) . '" class="stcl-image-preview">';
};

$toggle = static function (
    string $name,
    string $label,
    string $description,
    mixed $value,
    string $column = 'col-md-4'
) use ($checked, $e): void {
    echo '<div class="' . $e($column) . '"><label class="form-check form-switch">';
    echo '<input type="hidden" name="' . $e($name) . '" value="0">';
    echo '<input class="form-check-input" type="checkbox" name="' . $e($name) . '" value="1"'
        . $checked($value) . '>';
    echo '<span class="form-check-label"><strong>' . $e($label) . '</strong><br>';
    echo '<span class="text-secondary">' . $e($description) . '</span></span>';
    echo '</label></div>';
};

echo '<div class="container-xl stcl-admin">';
echo '<div class="page-header d-print-none"><div class="row align-items-center">';
echo '<div class="col"><h2 class="page-title">ST-Custom Login</h2>';
echo '<div class="text-secondary mt-1">Versão 2.2.1 — GLPI 10/11 — PHP 8.3+</div></div>';
echo '</div></div>';

if (!$storageWritable) {
    echo '<div class="alert alert-danger" role="alert">';
    echo '<strong>Diretório sem permissão de escrita.</strong> Verifique: <code>'
        . $e(PluginCustomloginConfig::storageDirectory())
        . '</code>';
    echo '</div>';
}

echo '<form method="post" action="' . $e($action) . '" enctype="multipart/form-data" autocomplete="off">';
echo '<input type="hidden" name="_glpi_csrf_token" value="' . $e($token) . '">';

echo '<div class="card mb-3"><div class="card-header"><h3 class="card-title">Ativação e aparência do login</h3></div>';
echo '<div class="card-body"><div class="row g-3">';

$toggle('enabled', 'Ativar personalização', 'Chave geral do plugin.', $config['enabled']);
$toggle('login_enabled', 'Personalizar login', 'Aplica fundo, logotipo, textos e posicionamento do painel.', $config['login_enabled']);
$toggle(
    'internal_enabled',
    'Personalizar área interna',
    'Aplica as logos internas e permite o efeito opcional do menu lateral.',
    $config['internal_enabled']
);

echo '<div class="col-md-3"><label class="form-label" for="primary_color">Cor principal do login</label>';
echo '<input class="form-control form-control-color" type="color" id="primary_color" name="primary_color" value="'
    . $e((string) $config['primary_color']) . '" title="Cor principal"></div>';

echo '<div class="col-md-3"><label class="form-label" for="background_overlay">Escurecimento do fundo (%)</label>';
echo '<input class="form-range" type="range" min="0" max="80" step="1" id="background_overlay" name="background_overlay" value="'
    . (int) $config['background_overlay'] . '" oninput="this.nextElementSibling.value=this.value">';
echo '<output class="form-hint">' . (int) $config['background_overlay'] . '</output></div>';

echo '<div class="col-md-3"><label class="form-label" for="login_alignment">Posição do painel de login</label>';
echo '<select class="form-select" id="login_alignment" name="login_alignment">';
foreach (PluginCustomloginConfig::getLoginAlignments() as $value => $label) {
    $selected = $config['login_alignment'] === $value ? ' selected' : '';
    echo '<option value="' . $e($value) . '"' . $selected . '>' . $e($label) . '</option>';
}
echo '</select><div class="form-hint">Em celulares, o painel é centralizado automaticamente.</div></div>';

echo '<div class="col-md-3"><label class="form-label" for="card_width">Largura máxima do painel (px)</label>';
echo '<input class="form-control" type="number" min="320" max="760" id="card_width" name="card_width" value="'
    . (int) $config['card_width'] . '"></div>';

echo '</div></div></div>';

echo '<div class="card mb-3"><div class="card-header"><h3 class="card-title">Efeito visual do menu lateral</h3></div>';
echo '<div class="card-body"><div class="row g-3 align-items-start">';

$toggle(
    'sidebar_effect_enabled',
    'Ativar efeito no menu lateral',
    'Aplica cartões, destaque, sombras, movimento no hover e submenu organizado, sem alterar permissões ou itens do GLPI.',
    $config['sidebar_effect_enabled'],
    'col-lg-5'
);

echo '<div class="col-lg-4"><label class="form-label" for="sidebar_effect_preset">Tema do efeito</label>';
echo '<select class="form-select" id="sidebar_effect_preset" name="sidebar_effect_preset">';
foreach (PluginCustomloginConfig::getSidebarPresets() as $value => $label) {
    $selected = $config['sidebar_effect_preset'] === $value ? ' selected' : '';
    echo '<option value="' . $e($value) . '"' . $selected . '>' . $e($label) . '</option>';
}
echo '</select><div class="form-hint">Sete variações do mesmo efeito visual. A opção Service TIC reproduz o padrão grafite/âmbar do CSS de referência.</div></div>';

echo '<div class="col-lg-3"><div class="alert alert-info mb-0 py-2">';
echo '<strong>Compatibilidade:</strong> o efeito atua somente no menu lateral da área autenticada. O login e o conteúdo principal não recebem esse tema.';
echo '</div></div>';

echo '</div></div></div>';

echo '<div class="card mb-3"><div class="card-header"><h3 class="card-title">Textos da tela de login</h3></div>';
echo '<div class="card-body"><div class="row g-3">';

echo '<div class="col-md-6"><label class="form-label" for="login_title">Título</label>';
echo '<input class="form-control" type="text" maxlength="160" id="login_title" name="login_title" value="'
    . $e((string) $config['login_title']) . '"></div>';

echo '<div class="col-md-6"><label class="form-label" for="login_subtitle">Subtítulo</label>';
echo '<input class="form-control" type="text" maxlength="300" id="login_subtitle" name="login_subtitle" value="'
    . $e((string) $config['login_subtitle']) . '"></div>';

echo '<div class="col-md-4"><label class="form-check form-switch mt-md-4">';
echo '<input type="hidden" name="login_prompt_enabled" value="0">';
echo '<input class="form-check-input" type="checkbox" id="login_prompt_enabled" name="login_prompt_enabled" value="1"'
    . $checked($config['login_prompt_enabled']) . '>';
echo '<span class="form-check-label"><strong>Exibir texto de autenticação</strong><br>';
echo '<span class="text-secondary">Controla o texto nativo “Faça login para sua conta”.</span></span>';
echo '</label></div>';

echo '<div class="col-md-8"><label class="form-label" for="login_prompt_text">Texto de autenticação</label>';
echo '<input class="form-control" type="text" maxlength="200" id="login_prompt_text" name="login_prompt_text" value="'
    . $e((string) $config['login_prompt_text']) . '">';
echo '<div class="form-hint">Deixe vazio para manter o texto traduzido pelo GLPI. Desative a opção ao lado para ocultá-lo.</div></div>';

echo '<div class="col-12"><label class="form-label" for="login_footer">Rodapé</label>';
echo '<input class="form-control" type="text" maxlength="300" id="login_footer" name="login_footer" value="'
    . $e((string) $config['login_footer']) . '">';
echo '<div class="form-hint">Somente texto simples; HTML e scripts não são aceitos.</div></div>';

echo '</div></div></div>';

echo '<div class="card mb-3"><div class="card-header"><h3 class="card-title">Imagens</h3></div>';
echo '<div class="card-body">';
echo '<div class="alert alert-info" role="alert">';
echo '<strong>Padrão do plano de fundo:</strong> use 1920×1080 (Full HD), 2560×1440 (QHD/2K) ou 3840×2160 (4K), sempre em 16:9. ';
echo 'Para melhor desempenho, prefira WEBP ou JPEG em 1920×1080. O fundo é centralizado e preenchido automaticamente.';
echo '</div>';
echo '<div class="stcl-assets-grid">';

foreach ($definitions as $assetKey => $definition) {
    $field = 'upload_' . $assetKey;
    $reset = 'reset_' . $assetKey;
    $maxMb = ((int) $definition['max_bytes']) / 1_048_576;
    $currentInfo = PluginCustomloginConfig::getAssetInfo($assetKey);

    echo '<div class="stcl-assets-grid-item"><div class="stcl-asset-card">';
    echo '<div class="stcl-preview-box">' . $assetPreview($assetKey, (string) $definition['label']) . '</div>';
    echo '<div class="flex-fill"><label class="form-label" for="' . $e($field) . '">'
        . $e((string) $definition['label']) . '</label>';
    echo '<input class="form-control" type="file" id="' . $e($field) . '" name="' . $e($field)
        . '" accept="' . $e((string) ($definition['accept'] ?? 'image/png,image/jpeg,image/webp')) . '">';
    echo '<div class="form-hint">' . $e((string) ($definition['formats'] ?? 'PNG, JPEG ou WEBP'))
        . '; máximo ' . number_format($maxMb, 1, ',', '.') . ' MB.</div>';

    if ($assetKey === 'background' && isset($definition['dimension_help'])) {
        echo '<div class="form-hint"><strong>Dimensões aceitas:</strong> '
            . $e((string) $definition['dimension_help']) . '.</div>';

        if (is_array($currentInfo)) {
            $currentWidth = (int) ($currentInfo['width'] ?? 0);
            $currentHeight = (int) ($currentInfo['height'] ?? 0);
            echo '<div class="form-hint"><strong>Imagem atual:</strong> '
                . $currentWidth . '×' . $currentHeight . ' px.</div>';

            if (!PluginCustomloginConfig::isStandardBackgroundSize($currentWidth, $currentHeight)) {
                echo '<div class="alert alert-warning py-2 mt-2 mb-0">';
                echo 'A imagem atual é legada e continuará funcionando. Ao substituí-la, use uma das dimensões 16:9 padronizadas.';
                echo '</div>';
            }
        }
    }

    echo '<label class="form-check mt-2"><input class="form-check-input" type="checkbox" name="'
        . $e($reset) . '" value="1"><span class="form-check-label">Remover imagem atual</span></label>';

    if ($assetKey === 'login_logo') {
        echo '<div class="row g-2 mt-1"><div class="col-6"><label class="form-label">Largura (px)</label>';
        echo '<input class="form-control" type="number" min="60" max="420" name="login_logo_width" value="'
            . (int) $config['login_logo_width'] . '"></div>';
        echo '<div class="col-6"><label class="form-label">Altura (px)</label>';
        echo '<input class="form-control" type="number" min="30" max="300" name="login_logo_height" value="'
            . (int) $config['login_logo_height'] . '"></div></div>';
    }

    if ($assetKey === 'navbar_logo') {
        echo '<div class="row g-2 mt-1"><div class="col-6"><label class="form-label">Largura (px)</label>';
        echo '<input class="form-control" type="number" min="40" max="320" name="navbar_logo_width" value="'
            . (int) $config['navbar_logo_width'] . '"></div>';
        echo '<div class="col-6"><label class="form-label">Altura (px)</label>';
        echo '<input class="form-control" type="number" min="20" max="120" name="navbar_logo_height" value="'
            . (int) $config['navbar_logo_height'] . '"></div></div>';
    }

    if ($assetKey === 'navbar_logo_collapsed') {
        echo '<div class="row g-2 mt-1"><div class="col-6"><label class="form-label">Largura (px)</label>';
        echo '<input class="form-control" type="number" min="20" max="120" name="navbar_logo_collapsed_width" value="'
            . (int) $config['navbar_logo_collapsed_width'] . '"></div>';
        echo '<div class="col-6"><label class="form-label">Altura (px)</label>';
        echo '<input class="form-control" type="number" min="20" max="120" name="navbar_logo_collapsed_height" value="'
            . (int) $config['navbar_logo_collapsed_height'] . '"></div></div>';
        echo '<div class="form-hint mt-2">Usado quando o menu estiver recolhido. Sem imagem dedicada, a logo expandida é reduzida automaticamente.</div>';
    }

    echo '</div></div></div>';
}

// Marketing institucional incluído exclusivamente como bloco visual da página
// administrativa. Nenhuma lógica funcional do plugin de referência é usada.
echo '<div class="stcl-assets-grid-item">';
echo '<aside class="stcl-marketing-card" aria-label="Desenvolvido pela Service TIC">';
echo '<div class="stcl-marketing-brand">';
echo '<img src="' . $e($marketingLogoUrl) . '" alt="Service TIC Soluções Tecnológicas" '
    . 'class="stcl-marketing-logo" width="945" height="945" loading="lazy">';
echo '</div>';
echo '<div class="stcl-marketing-details">';
echo '<div class="stcl-marketing-title">Desenvolvido por:</div>';
echo '<a class="stcl-marketing-site" href="https://www.servicetic.com.br" target="_blank" '
    . 'rel="noopener noreferrer">www.servicetic.com.br</a>';
echo '<a class="stcl-marketing-qr-link" href="https://servicetic.com.br/links" target="_blank" '
    . 'rel="noopener noreferrer" title="Links Service TIC">';
echo '<img src="' . $e($marketingQrUrl) . '" alt="QR Code Service TIC" '
    . 'class="stcl-marketing-qr" width="128" height="130" loading="lazy">';
echo '</a>';
echo '</div>';
echo '</aside>';
echo '</div>';

echo '</div></div></div>';

echo '<div class="d-flex gap-2 justify-content-end mb-4">';
echo '<button class="btn btn-outline-danger" type="submit" name="restore_defaults" value="1" '
    . 'onclick="return confirm(\'Restaurar os padrões e remover todas as imagens personalizadas?\')">Restaurar padrões</button>';
echo '<button class="btn btn-primary" type="submit" name="save" value="1"'
    . ($storageWritable ? '' : ' disabled') . '>Salvar configuração</button>';
echo '</div>';

echo '</form></div>';

Html::footer();
