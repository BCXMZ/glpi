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

function plugin_version_branding(): array
{
    return [
        'name'         => 'Branding',
        'version'      => '1.1.0',
        'author'       => 'GLPI Community',
        'license'      => 'GPL v3+',
        'homepage'     => 'https://glpi-project.org',
        'requirements' => [
            'glpi' => [
                'min' => '10.0.0',
            ],
            'php'  => [
                'min' => '8.1',
            ],
        ],
    ];
}

function plugin_branding_check_config(): bool
{
    return true;
}

function plugin_branding_check_prerequisites(): bool
{
    return version_compare(PHP_VERSION, '8.1.0', '>=');
}

function plugin_branding_install(): bool
{
    require_once __DIR__ . '/inc/config.class.php';

    return PluginBrandingConfig::install();
}

function plugin_branding_uninstall(): bool
{
    require_once __DIR__ . '/inc/config.class.php';

    return PluginBrandingConfig::uninstall();
}

function plugin_init_branding(): void
{
    global $PLUGIN_HOOKS, $CFG_GLPI;

    $PLUGIN_HOOKS['csrf_compliant']['branding'] = true;

    $plugin = new Plugin();
    if (!$plugin->isActivated('branding')) {
        return;
    }

    require_once __DIR__ . '/inc/config.class.php';
    $base = PluginBrandingConfig::getWebDir();

    require_once __DIR__ . '/inc/entity.class.php';
    Plugin::registerClass(PluginBrandingEntity::class, [
        'addtabon' => [Entity::class],
    ]);

    $PLUGIN_HOOKS[\Glpi\Plugin\Hooks::ADD_HEADER_TAG_ANONYMOUS_PAGE]['branding'] = [
        [
            'tag'        => 'link',
            'properties' => [
                'rel'  => 'stylesheet',
                'type' => 'text/css',
                'href' => $base . '/front/login.css.php?' . http_build_query([
                    'v' => filemtime(__DIR__ . '/front/login.css.php'),
                    'branding_entity' => PluginBrandingConfig::getLoginEntityId($_GET['branding_entity'] ?? 0),
                ], '', '&', PHP_QUERY_RFC3986),
            ],
        ],
    ];

    $PLUGIN_HOOKS[\Glpi\Plugin\Hooks::ADD_JAVASCRIPT_ANONYMOUS_PAGE]['branding'] =
        version_compare(GLPI_VERSION, '11.0.0', '<') ? 'public/js/login.js' : 'js/login.js';

    $PLUGIN_HOOKS[\Glpi\Plugin\Hooks::ADD_HEADER_TAG]['branding'] = [
        [
            'tag'        => 'link',
            'properties' => [
                'rel'  => 'stylesheet',
                'type' => 'text/css',
                'href' => $base . '/front/menu.css.php?v=' . filemtime(__DIR__ . '/front/menu.css.php'),
            ],
        ],
    ];
}

function plugin_branding_boot(): void
{
    if (class_exists(\Glpi\Http\Firewall::class)) {
        \Glpi\Http\Firewall::addPluginStrategyForLegacyScripts(
            'branding',
            '#^/front/(login\.css\.php|image\.php)$#',
            \Glpi\Http\Firewall::STRATEGY_NO_CHECK
        );
    }
}
