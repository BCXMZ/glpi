<?php

/**
 * -------------------------------------------------------------------------
 * ST-Custom Login plugin for GLPI
 * -------------------------------------------------------------------------
 *
 * @copyright Copyright (C) 2023-2026 Service TIC Soluções Tecnológicas
 * @copyright Original Mod plugin contributors
 * @license GPL-2.0-or-later
 * @link https://github.com/serviceticst/glpi-plugin-custom_login
 * -------------------------------------------------------------------------
 */

declare(strict_types=1);

define('PLUGIN_CUSTOMLOGIN_VERSION', '2.1.0');
define('PLUGIN_CUSTOMLOGIN_MIN_GLPI', '10.0.10');
define('PLUGIN_CUSTOMLOGIN_MAX_GLPI', '12.0.0');
define('PLUGIN_CUSTOMLOGIN_MIN_PHP', '8.3.0');

/**
 * Early hook used by GLPI 11 to mark the public appearance endpoints as
 * stateless. GLPI 10 safely ignores this function.
 */
function plugin_customlogin_boot(): void
{
    if (
        class_exists(\Glpi\Http\SessionManager::class)
        && method_exists(\Glpi\Http\SessionManager::class, 'registerPluginStatelessPath')
    ) {
        \Glpi\Http\SessionManager::registerPluginStatelessPath(
            'customlogin',
            '#^/(?:public/)?(?:config|asset)\.php$#'
        );
    }
}

/**
 * Initialize plugin hooks.
 */
function plugin_init_customlogin(): void
{
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['customlogin'] = true;

    // Authenticated pages use the regular hooks. Anonymous pages (including
    // the login form) have a separate asset pipeline in recent GLPI 10
    // releases and in GLPI 11, so both hook families are mandatory. Older
    // GLPI 10 releases safely ignore the additional anonymous hook keys.
    $PLUGIN_HOOKS['add_javascript']['customlogin'] = 'js/customlogin.js';
    $PLUGIN_HOOKS['add_css']['customlogin'] = 'css/customlogin.css';
    $PLUGIN_HOOKS['add_javascript_anonymous_page']['customlogin'] = 'js/customlogin.js';
    $PLUGIN_HOOKS['add_css_anonymous_page']['customlogin'] = 'css/customlogin.css';

    // Optional inline configuration fallback. The normal GLPI 11 login layout
    // does not always render this hook, therefore JavaScript also reads the
    // public read-only config endpoint.
    $PLUGIN_HOOKS['display_login']['customlogin'] = 'plugin_customlogin_display_login';

    if (class_exists('Session') && Session::haveRight('config', UPDATE)) {
        $PLUGIN_HOOKS['config_page']['customlogin'] = 'front/config.php';
    }

    // GLPI 11 restricts direct plugin scripts. These two endpoints expose only
    // non-sensitive appearance data and validated image bytes.
    if (
        class_exists(\Glpi\Http\Firewall::class)
        && method_exists(\Glpi\Http\Firewall::class, 'addPluginStrategyForLegacyScripts')
    ) {
        \Glpi\Http\Firewall::addPluginStrategyForLegacyScripts(
            'customlogin',
            '#^/(?:public/)?(?:config|asset)\.php$#',
            \Glpi\Http\Firewall::STRATEGY_NO_CHECK
        );
    }
}

/**
 * Return plugin metadata and compatibility requirements.
 *
 * @return array<string, mixed>
 */
function plugin_version_customlogin(): array
{
    return [
        'name'         => 'ST-Custom Login',
        'shortname'    => 'customlogin',
        'version'      => PLUGIN_CUSTOMLOGIN_VERSION,
        'author'       => 'Service TIC Soluções Tecnológicas',
        'license'      => 'GPLv2+',
        'homepage'     => 'https://github.com/serviceticst/glpi-plugin-custom_login',
        'requirements' => [
            'glpi' => [
                'min' => PLUGIN_CUSTOMLOGIN_MIN_GLPI,
                'max' => PLUGIN_CUSTOMLOGIN_MAX_GLPI,
            ],
            'php' => [
                'min' => PLUGIN_CUSTOMLOGIN_MIN_PHP,
            ],
        ],
    ];
}

/**
 * Check requirements before installation/activation.
 */
function plugin_customlogin_check_prerequisites(): bool
{
    $ok = true;

    if (version_compare(PHP_VERSION, PLUGIN_CUSTOMLOGIN_MIN_PHP, '<')) {
        echo 'ST-Custom Login requer PHP >= ' . PLUGIN_CUSTOMLOGIN_MIN_PHP . '.<br>';
        $ok = false;
    }

    if (defined('GLPI_VERSION')) {
        if (version_compare(GLPI_VERSION, PLUGIN_CUSTOMLOGIN_MIN_GLPI, '<')) {
            echo 'ST-Custom Login requer GLPI >= ' . PLUGIN_CUSTOMLOGIN_MIN_GLPI . '.<br>';
            $ok = false;
        }

        if (version_compare(GLPI_VERSION, PLUGIN_CUSTOMLOGIN_MAX_GLPI, '>=')) {
            echo 'ST-Custom Login requer GLPI < ' . PLUGIN_CUSTOMLOGIN_MAX_GLPI . '.<br>';
            $ok = false;
        }
    }

    if (!extension_loaded('fileinfo')) {
        echo 'ST-Custom Login requer a extensão PHP fileinfo.<br>';
        $ok = false;
    }

    return $ok;
}

/**
 * Configuration is optional; defaults are immediately usable.
 */
function plugin_customlogin_check_config(bool $verbose = false): bool
{
    return true;
}
