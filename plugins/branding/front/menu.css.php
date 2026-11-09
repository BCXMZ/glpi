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

Session::checkLoginUser();

global $CFG_GLPI;

if (!Plugin::isPluginActive('branding')) {
    http_response_code(404);
    exit;
}

header('Content-Type: text/css; charset=UTF-8');
header('Cache-Control: private, no-store');

$exp = PluginBrandingConfig::resolveFileForEntity((int) Session::getActiveEntity(), 'logo_expanded');
$col = PluginBrandingConfig::resolveFileForEntity((int) Session::getActiveEntity(), 'logo_collapsed');

$rules = [];

if ($exp !== null) {
    $u = json_encode(PluginBrandingConfig::getImageUrl('logo_expanded', $exp), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
    $rules[] = <<<CSS
.page .glpi-logo,
.navbar .glpi-logo {
    --glpi-logo: url({$u}) !important;
    background-color: transparent !important;
    background-image: var(--glpi-logo) !important;
    background-repeat: no-repeat !important;
    background-position: center center !important;
    background-size: contain !important;
    -webkit-mask: none !important;
    mask: none !important;
}

CSS;
}

if ($col !== null) {
    $u = json_encode(PluginBrandingConfig::getImageUrl('logo_collapsed', $col), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
    $rules[] = <<<CSS
/* Tabler/Bootstrap often paints .container-fluid with --tblr-bg-surface (white); strip it when collapsed so logo alpha blends with the sidebar. */
@media (min-width: 992px) {
body.navbar-collapsed aside.sidebar.navbar > .container-fluid {
    background-color: transparent !important;
    background-image: none !important;
}

body.navbar-collapsed aside.sidebar .navbar-brand {
    background: transparent none !important;
    background-color: transparent !important;
    background-image: none !important;
    box-shadow: none !important;
}

/* One shorthand avoids leftover background-color from other rules; direct url avoids var() merging issues with GLPI's background: var(--glpi-logo-reduced). */
body.navbar-collapsed aside.sidebar .navbar-brand .glpi-logo {
    background: transparent url({$u}) no-repeat center center / contain !important;
    -webkit-mask: none !important;
    mask: none !important;
}
}

CSS;
}

echo implode("\n", $rules);
