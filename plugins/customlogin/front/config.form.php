<?php

/**
 * ST-Custom Login configuration POST handler.
 *
 * @license GPL-2.0-or-later
 */

declare(strict_types=1);

if (!defined('GLPI_ROOT')) {
    require_once dirname(__DIR__, 3) . '/inc/includes.php';
}

require_once dirname(__DIR__) . '/inc/config.class.php';

Session::checkRight('config', UPDATE);

$redirect = PluginCustomloginConfig::getWebDir() . '/front/config.php';

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    Html::redirect($redirect);
    return;
}

// GLPI 11 validates and consumes the CSRF token in CheckCsrfListener
// before this legacy front script is loaded. A second validation here would
// reject a request that has already been accepted by the core. GLPI 10 does
// not have this listener, so the plugin must keep the explicit validation.
$isGlpi11OrLater = defined('GLPI_VERSION')
    && version_compare(GLPI_VERSION, '11.0.0', '>=');

if (!$isGlpi11OrLater) {
    Session::checkCSRF($_POST);
}

try {
    if (isset($_POST['restore_defaults'])) {
        PluginCustomloginConfig::reset(true);
        Session::addMessageAfterRedirect(
            'As configurações e imagens do ST-Custom Login foram restauradas.',
            true,
            INFO
        );
    } else {
        PluginCustomloginConfig::saveAppearance([
            'enabled' => $_POST['enabled'] ?? 0,
            'login_enabled' => $_POST['login_enabled'] ?? 0,
            'internal_enabled' => $_POST['internal_enabled'] ?? 0,
            'sidebar_effect_enabled' => $_POST['sidebar_effect_enabled'] ?? 0,
            'sidebar_effect_preset' => $_POST['sidebar_effect_preset'] ?? 'service-tic',
            'primary_color' => $_POST['primary_color'] ?? '',
            'background_overlay' => $_POST['background_overlay'] ?? 18,
            'login_alignment' => $_POST['login_alignment'] ?? 'center',
            'card_width' => $_POST['card_width'] ?? 480,
            'login_logo_width' => $_POST['login_logo_width'] ?? 180,
            'login_logo_height' => $_POST['login_logo_height'] ?? 100,
            'navbar_logo_width' => $_POST['navbar_logo_width'] ?? 150,
            'navbar_logo_height' => $_POST['navbar_logo_height'] ?? 42,
            'navbar_logo_collapsed_width' => $_POST['navbar_logo_collapsed_width'] ?? 42,
            'navbar_logo_collapsed_height' => $_POST['navbar_logo_collapsed_height'] ?? 42,
            'login_title' => $_POST['login_title'] ?? '',
            'login_subtitle' => $_POST['login_subtitle'] ?? '',
            'login_prompt_enabled' => $_POST['login_prompt_enabled'] ?? 0,
            'login_prompt_text' => $_POST['login_prompt_text'] ?? '',
            'login_footer' => $_POST['login_footer'] ?? '',
        ]);

        foreach (array_keys(PluginCustomloginConfig::getAssetDefinitions()) as $assetKey) {
            if (!empty($_POST['reset_' . $assetKey])) {
                PluginCustomloginConfig::deleteAsset($assetKey);
            }

            $field = 'upload_' . $assetKey;
            if (isset($_FILES[$field]) && is_array($_FILES[$field])) {
                PluginCustomloginConfig::storeUploadedAsset($assetKey, $_FILES[$field]);
            }
        }

        Session::addMessageAfterRedirect(
            'Configuração do ST-Custom Login salva com sucesso.',
            true,
            INFO
        );
    }
} catch (Throwable $exception) {
    Toolbox::logInFile(
        'customlogin',
        sprintf("Configuration update error: %s\n", $exception->getMessage())
    );

    Session::addMessageAfterRedirect(
        'Não foi possível salvar o ST-Custom Login. Consulte o log do plugin para obter detalhes.',
        true,
        ERROR
    );
}

Html::redirect($redirect);
