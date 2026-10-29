<?php

/**
 * Install, uninstall and display hooks for ST-Custom Login.
 *
 * @license GPL-2.0-or-later
 */

declare(strict_types=1);

/**
 * Load the configuration helper when legacy autoloading is unavailable.
 */
function plugin_customlogin_require_config_class(): void
{
    if (!class_exists('PluginCustomloginConfig', false)) {
        require_once __DIR__ . '/inc/config.class.php';
    }
}

/**
 * Install or upgrade configuration without changing GLPI core files.
 */
function plugin_customlogin_install(): bool
{
    plugin_customlogin_require_config_class();

    try {
        PluginCustomloginConfig::install();
        return true;
    } catch (Throwable $exception) {
        if (class_exists('Toolbox')) {
            Toolbox::logInFile(
                'customlogin',
                sprintf("Installation error: %s\n", $exception->getMessage())
            );
        }

        return false;
    }
}

/**
 * Remove plugin configuration and files stored in its private data directory.
 */
function plugin_customlogin_uninstall(): bool
{
    plugin_customlogin_require_config_class();

    try {
        PluginCustomloginConfig::uninstall();
        return true;
    } catch (Throwable $exception) {
        if (class_exists('Toolbox')) {
            Toolbox::logInFile(
                'customlogin',
                sprintf("Uninstall error: %s\n", $exception->getMessage())
            );
        }

        return false;
    }
}

/**
 * Embed the public appearance configuration directly in the login page when
 * GLPI renders the display_login slot. The anonymous JavaScript hook remains
 * the primary loading path and can fetch the same payload from config.php.
 */
function plugin_customlogin_display_login(): void
{
    plugin_customlogin_require_config_class();

    try {
        $payload = PluginCustomloginConfig::getPublicPayload();
        $json = json_encode(
            $payload,
            JSON_UNESCAPED_SLASHES
            | JSON_UNESCAPED_UNICODE
            | JSON_HEX_TAG
            | JSON_HEX_AMP
            | JSON_HEX_APOS
            | JSON_HEX_QUOT
            | JSON_THROW_ON_ERROR
        );

        echo '<script type="application/json" id="st-customlogin-config">'
            . $json
            . '</script>';
    } catch (Throwable $exception) {
        if (class_exists('Toolbox')) {
            Toolbox::logInFile(
                'customlogin',
                sprintf("Login configuration render error: %s\n", $exception->getMessage())
            );
        }
    }
}
