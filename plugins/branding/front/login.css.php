<?php

/**
 * ---------------------------------------------------------------------
 *
 * GLPI - Gestionnaire Libre de Parc Informatique
 *
 * @copyright 2015-2026 Teclib' and contributors.
 * @licence   https://www.gnu.org/licenses/gpl-3.0.html
 *
 * ---------------------------------------------------------------------
 */

require_once(__DIR__ . '/../../../inc/includes.php');
require_once(__DIR__ . '/../inc/config.class.php');

global $CFG_GLPI;

if (!Plugin::isPluginActive('branding')) {
    http_response_code(404);
    exit;
}

header('Content-Type: text/css; charset=UTF-8');
header('Cache-Control: private, no-store');

$entity_id = PluginBrandingConfig::getLoginEntityId($_GET['branding_entity'] ?? 0);
$resolved_bg   = PluginBrandingConfig::resolveFileForEntity($entity_id, 'login_background');
$resolved_logo = PluginBrandingConfig::resolveFileForEntity($entity_id, 'login_logo');

if ($resolved_bg === null && $resolved_logo === null) {
    exit;
}

$css = '';

if ($resolved_bg !== null) {
    $url_bg = json_encode(PluginBrandingConfig::getImageUrl('login_background', $resolved_bg), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
    $css .= <<<CSS
html:root body.welcome-anonymous,
html:root.stcl-enabled.stcl-login-enabled.stcl-login-background-custom body.welcome-anonymous {
    margin: 0;
    min-height: 100vh;
    background-color: #1e293b;
    background-image: url({$url_bg}) !important;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

body.welcome-anonymous .page-anonymous {
    min-height: 100vh;
    width: 100%;
    background: transparent;
}

body.welcome-anonymous .page-anonymous > .flex-fill {
    min-height: 100vh;
}

CSS;
} else {
    $css .= <<<CSS
body.welcome-anonymous .page-anonymous {
    min-height: 100vh;
    width: 100%;
}

CSS;
}

if ($resolved_logo !== null) {
    $url_logo = json_encode(PluginBrandingConfig::getImageUrl('login_logo', $resolved_logo), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
    $css .= <<<CSS
body.welcome-anonymous .page-anonymous .glpi-logo,
html:root.stcl-enabled.stcl-login-enabled.stcl-login-logo-custom body.welcome-anonymous
.page-anonymous .glpi-logo.stcl-native-login-logo-hidden {
    display: inline-block !important;
    width: min(280px, 85vw);
    max-width: 100%;
    height: 120px;
    background: url({$url_logo}) no-repeat center center !important;
    background-size: contain !important;
    content: none !important;
    -webkit-mask: none !important;
    mask: none !important;
}

/* Keep the entity logo visible when ST-Custom Login also supplies a logo. */
body.welcome-anonymous #stcl-login-logo {
    display: none !important;
}

CSS;
}

/* Frosted card whenever this stylesheet is loaded (login background and/or custom logo) */
$css .= <<<CSS
body.welcome-anonymous .main-content-card {
    background-color: rgba(255, 255, 255, 0.72) !important;
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.45) !important;
    box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.15);
}

body.welcome-anonymous .main-content-card > .card-header,
body.welcome-anonymous .main-content-card > .card-body {
    background-color: transparent !important;
}

CSS;

echo $css;
