<?php

/**
 * Configuration, upload validation and public payload helper.
 *
 * @license GPL-2.0-or-later
 */

declare(strict_types=1);

if (!defined('GLPI_ROOT')) {
    return;
}

final class PluginCustomloginConfig
{
    public const CONTEXT = 'plugin:customlogin';
    public const SCHEMA_VERSION = '3.0';

    /** @var array<string, string> */
    private const LOGIN_ALIGNMENTS = [
        'left' => 'Esquerda',
        'center' => 'Centralizada',
        'right' => 'Direita',
    ];

    /** @var array<string, string> */
    private const SIDEBAR_PRESETS = [
        'service-tic' => 'Service TIC — grafite e âmbar',
        'ocean' => 'Oceano — azul corporativo',
        'emerald' => 'Esmeralda — verde tecnológico',
        'violet' => 'Violeta — roxo moderno',
        'cyan' => 'Ciano — azul luminoso',
        'ruby' => 'Rubi — vermelho executivo',
        'graphite' => 'Grafite — monocromático',
    ];

    /** @var array<string, array<string, mixed>> */
    private const ASSETS = [
        'background' => [
            'label'     => 'Plano de fundo do login (16:9)',
            'max_bytes' => 12_582_912,
            'max_width' => 3_840,
            'max_height'=> 2_160,
            'accept'    => 'image/png,image/jpeg,image/webp',
            'formats'   => 'PNG, JPEG ou WEBP',
            'allowed_mimes' => ['image/png', 'image/jpeg', 'image/webp'],
            'allowed_dimensions' => [
                [1_920, 1_080],
                [2_560, 1_440],
                [3_840, 2_160],
            ],
            'dimension_help' => '1920×1080 (Full HD), 2560×1440 (QHD/2K) ou 3840×2160 (4K), sempre em 16:9',
        ],
        'login_logo' => [
            'label'     => 'Logotipo da tela de login',
            'max_bytes' => 3_145_728,
            'max_width' => 4_000,
            'max_height'=> 4_000,
            'accept'    => 'image/png,image/jpeg,image/webp',
            'formats'   => 'PNG, JPEG ou WEBP',
            'allowed_mimes' => ['image/png', 'image/jpeg', 'image/webp'],
        ],
        'navbar_logo' => [
            'label'     => 'Logotipo interno (menu expandido)',
            'max_bytes' => 3_145_728,
            'max_width' => 4_000,
            'max_height'=> 4_000,
            'accept'    => 'image/png,image/jpeg,image/webp',
            'formats'   => 'PNG, JPEG ou WEBP',
            'allowed_mimes' => ['image/png', 'image/jpeg', 'image/webp'],
        ],
        'navbar_logo_collapsed' => [
            'label'     => 'Logotipo interno (menu recolhido)',
            'max_bytes' => 3_145_728,
            'max_width' => 4_000,
            'max_height'=> 4_000,
            'accept'    => 'image/png,image/jpeg,image/webp',
            'formats'   => 'PNG, JPEG ou WEBP',
            'allowed_mimes' => ['image/png', 'image/jpeg', 'image/webp'],
        ],
        'favicon' => [
            'label'     => 'Favicon / ícone do navegador',
            'max_bytes' => 1_048_576,
            'max_width' => 1_024,
            'max_height'=> 1_024,
            'accept'    => 'image/png,image/jpeg,image/webp,image/x-icon,image/vnd.microsoft.icon,.ico',
            'formats'   => 'PNG, JPEG, WEBP ou ICO',
            'allowed_mimes' => [
                'image/png',
                'image/jpeg',
                'image/webp',
                'image/x-icon',
                'image/vnd.microsoft.icon',
            ],
        ],
    ];

    /** @var array<string, string> */
    private const MIME_EXTENSIONS = [
        'image/png'  => 'png',
        'image/jpeg' => 'jpg',
        'image/webp' => 'webp',
        'image/x-icon' => 'ico',
        'image/vnd.microsoft.icon' => 'ico',
    ];

    /**
     * Default scalar configuration stored in glpi_configs.
     *
     * @return array<string, int|string>
     */
    public static function defaults(): array
    {
        return [
            'schema_version'      => self::SCHEMA_VERSION,
            'enabled'             => 1,
            'login_enabled'       => 1,
            'internal_enabled'    => 1,
            'sidebar_effect_enabled' => 0,
            'sidebar_effect_preset'  => 'service-tic',
            'primary_color'       => '#206bc4',
            'background_overlay'  => 18,
            'login_alignment'     => 'center',
            'card_width'          => 480,
            'login_logo_width'    => 180,
            'login_logo_height'   => 100,
            'navbar_logo_width'   => 150,
            'navbar_logo_height'  => 42,
            'navbar_logo_collapsed_width'  => 42,
            'navbar_logo_collapsed_height' => 42,
            'login_title'         => '',
            'login_subtitle'      => '',
            'login_prompt_enabled'=> 1,
            'login_prompt_text'   => '',
            'login_footer'        => '',
            'asset_background'    => '',
            'asset_background_mime' => '',
            'asset_login_logo'    => '',
            'asset_login_logo_mime' => '',
            'asset_navbar_logo'   => '',
            'asset_navbar_logo_mime' => '',
            'asset_navbar_logo_collapsed' => '',
            'asset_navbar_logo_collapsed_mime' => '',
            'asset_favicon'       => '',
            'asset_favicon_mime'  => '',
            'asset_revision'      => 0,
        ];
    }

    /**
     * Install/update defaults and migrate legacy image files when possible.
     */
    public static function install(): void
    {
        self::ensureStorageDirectory();

        $stored = Config::getConfigurationValues(self::CONTEXT);
        $missing = [];

        foreach (self::defaults() as $key => $value) {
            if (!array_key_exists($key, $stored)) {
                $missing[$key] = $value;
            }
        }

        $missing['schema_version'] = self::SCHEMA_VERSION;

        if ($missing !== []) {
            Config::setConfigurationValues(self::CONTEXT, $missing);
        }

        // Version 2.2.0 introduced one predictable center/cover behavior for every
        // standardized 16:9 background. Remove the retired selector value so
        // upgrades do not keep an orphaned option in glpi_configs.
        Config::deleteConfigurationValues(self::CONTEXT, ['background_position']);

        self::migrateLegacyAssets();
    }

    /**
     * Remove plugin-owned configuration and private files.
     */
    public static function uninstall(): void
    {
        $stored = Config::getConfigurationValues(self::CONTEXT);
        $keys = array_values(array_unique(array_merge(
            array_keys(self::defaults()),
            array_keys($stored)
        )));

        if ($keys !== []) {
            Config::deleteConfigurationValues(self::CONTEXT, $keys);
        }

        self::removeStorageDirectory();
    }

    /**
     * Return normalized configuration safe for rendering.
     *
     * @return array<string, int|string>
     */
    public static function get(): array
    {
        $stored = Config::getConfigurationValues(self::CONTEXT);

        return self::normalize(array_merge(self::defaults(), $stored));
    }

    /**
     * Normalize values from storage or the admin form.
     *
     * @param array<string, mixed> $values
     * @return array<string, int|string>
     */
    public static function normalize(array $values): array
    {
        $defaults = self::defaults();
        $normalized = $defaults;

        foreach ([
            'enabled',
            'login_enabled',
            'internal_enabled',
            'sidebar_effect_enabled',
            'login_prompt_enabled',
        ] as $key) {
            $normalized[$key] = self::toBooleanInt($values[$key] ?? $defaults[$key]);
        }

        $normalized['primary_color'] = self::normalizeColor(
            (string) ($values['primary_color'] ?? $defaults['primary_color']),
            (string) $defaults['primary_color']
        );

        $normalized['background_overlay'] = self::boundedInt(
            $values['background_overlay'] ?? $defaults['background_overlay'],
            0,
            80,
            (int) $defaults['background_overlay']
        );

        $alignment = (string) ($values['login_alignment'] ?? $defaults['login_alignment']);
        $normalized['login_alignment'] = array_key_exists($alignment, self::LOGIN_ALIGNMENTS)
            ? $alignment
            : $defaults['login_alignment'];

        $sidebarPreset = (string) ($values['sidebar_effect_preset'] ?? $defaults['sidebar_effect_preset']);
        $normalized['sidebar_effect_preset'] = array_key_exists($sidebarPreset, self::SIDEBAR_PRESETS)
            ? $sidebarPreset
            : $defaults['sidebar_effect_preset'];

        $normalized['card_width'] = self::boundedInt(
            $values['card_width'] ?? $defaults['card_width'],
            320,
            760,
            (int) $defaults['card_width']
        );
        $normalized['login_logo_width'] = self::boundedInt(
            $values['login_logo_width'] ?? $defaults['login_logo_width'],
            60,
            420,
            (int) $defaults['login_logo_width']
        );
        $normalized['login_logo_height'] = self::boundedInt(
            $values['login_logo_height'] ?? $defaults['login_logo_height'],
            30,
            300,
            (int) $defaults['login_logo_height']
        );
        $normalized['navbar_logo_width'] = self::boundedInt(
            $values['navbar_logo_width'] ?? $defaults['navbar_logo_width'],
            40,
            320,
            (int) $defaults['navbar_logo_width']
        );
        $normalized['navbar_logo_height'] = self::boundedInt(
            $values['navbar_logo_height'] ?? $defaults['navbar_logo_height'],
            20,
            120,
            (int) $defaults['navbar_logo_height']
        );
        $normalized['navbar_logo_collapsed_width'] = self::boundedInt(
            $values['navbar_logo_collapsed_width'] ?? $defaults['navbar_logo_collapsed_width'],
            20,
            120,
            (int) $defaults['navbar_logo_collapsed_width']
        );
        $normalized['navbar_logo_collapsed_height'] = self::boundedInt(
            $values['navbar_logo_collapsed_height'] ?? $defaults['navbar_logo_collapsed_height'],
            20,
            120,
            (int) $defaults['navbar_logo_collapsed_height']
        );

        $normalized['login_title'] = self::normalizeText(
            $values['login_title'] ?? '',
            160
        );
        $normalized['login_subtitle'] = self::normalizeText(
            $values['login_subtitle'] ?? '',
            300
        );
        $normalized['login_prompt_text'] = self::normalizeText(
            $values['login_prompt_text'] ?? '',
            200
        );
        $normalized['login_footer'] = self::normalizeText(
            $values['login_footer'] ?? '',
            300
        );

        foreach (array_keys(self::ASSETS) as $assetKey) {
            $filenameKey = 'asset_' . $assetKey;
            $mimeKey = $filenameKey . '_mime';

            $normalized[$filenameKey] = self::normalizeStoredFilename(
                (string) ($values[$filenameKey] ?? '')
            );

            $mime = (string) ($values[$mimeKey] ?? '');
            $normalized[$mimeKey] = self::isMimeAllowed($assetKey, $mime)
                ? $mime
                : '';
        }

        $normalized['asset_revision'] = max(0, (int) ($values['asset_revision'] ?? 0));
        $normalized['schema_version'] = self::SCHEMA_VERSION;

        return $normalized;
    }

    /**
     * Save only supported appearance fields.
     *
     * @param array<string, mixed> $input
     */
    public static function saveAppearance(array $input): void
    {
        $current = self::get();
        $merged = array_merge($current, $input);
        $normalized = self::normalize($merged);

        $keys = [
            'schema_version',
            'enabled',
            'login_enabled',
            'internal_enabled',
            'sidebar_effect_enabled',
            'sidebar_effect_preset',
            'primary_color',
            'background_overlay',
            'login_alignment',
            'card_width',
            'login_logo_width',
            'login_logo_height',
            'navbar_logo_width',
            'navbar_logo_height',
            'navbar_logo_collapsed_width',
            'navbar_logo_collapsed_height',
            'login_title',
            'login_subtitle',
            'login_prompt_enabled',
            'login_prompt_text',
            'login_footer',
        ];

        $toSave = [];
        foreach ($keys as $key) {
            $toSave[$key] = $normalized[$key];
        }

        Config::setConfigurationValues(self::CONTEXT, $toSave);
    }

    /**
     * Restore defaults and optionally delete uploaded images.
     */
    public static function reset(bool $deleteAssets = true): void
    {
        if ($deleteAssets) {
            foreach (array_keys(self::ASSETS) as $assetKey) {
                self::deleteAsset($assetKey, false);
            }
        }

        Config::setConfigurationValues(self::CONTEXT, self::defaults());
    }

    /**
     * Store one validated uploaded image.
     *
     * @param array<string, mixed> $file
     */
    public static function storeUploadedAsset(string $assetKey, array $file): void
    {
        $definition = self::getAssetDefinition($assetKey);

        $error = (int) ($file['error'] ?? UPLOAD_ERR_NO_FILE);
        if ($error === UPLOAD_ERR_NO_FILE) {
            return;
        }
        if ($error !== UPLOAD_ERR_OK) {
            throw new RuntimeException(self::uploadErrorMessage($error));
        }

        $temporaryPath = (string) ($file['tmp_name'] ?? '');
        $reportedSize = (int) ($file['size'] ?? 0);

        if ($temporaryPath === '' || !is_file($temporaryPath) || !is_uploaded_file($temporaryPath)) {
            throw new RuntimeException('O arquivo enviado não é um upload HTTP válido.');
        }

        $actualSize = filesize($temporaryPath);
        if ($actualSize === false || $actualSize <= 0) {
            throw new RuntimeException('Não foi possível determinar o tamanho real do arquivo enviado.');
        }

        if ($reportedSize > 0 && $reportedSize !== $actualSize) {
            throw new RuntimeException('O tamanho informado pelo upload não corresponde ao arquivo recebido.');
        }

        if ($actualSize > (int) $definition['max_bytes']) {
            throw new RuntimeException(sprintf(
                '%s excede o limite permitido de %.1f MB.',
                (string) $definition['label'],
                ((int) $definition['max_bytes']) / 1_048_576
            ));
        }

        [$mime, $extension] = self::validateImageFile($temporaryPath, $definition, true);
        self::ensureStorageDirectory();
        $previousPath = self::getConfiguredStoragePath($assetKey);

        $filename = sprintf(
            '%s-%s.%s',
            $assetKey,
            bin2hex(random_bytes(12)),
            $extension
        );
        $target = self::storageDirectory() . DIRECTORY_SEPARATOR . $filename;

        if (!move_uploaded_file($temporaryPath, $target)) {
            throw new RuntimeException('Não foi possível mover o arquivo enviado para o diretório privado do plugin.');
        }

        @chmod($target, 0640);

        try {
            Config::setConfigurationValues(self::CONTEXT, [
                'asset_' . $assetKey => $filename,
                'asset_' . $assetKey . '_mime' => $mime,
                'asset_revision' => time(),
            ]);
        } catch (Throwable $exception) {
            @unlink($target);
            throw $exception;
        }

        if ($previousPath !== null && $previousPath !== $target) {
            @unlink($previousPath);
        }
    }

    /**
     * Delete a configured image.
     */
    public static function deleteAsset(string $assetKey, bool $touchRevision = true): void
    {
        self::getAssetDefinition($assetKey);
        $configuredPath = self::getConfiguredStoragePath($assetKey);

        if ($configuredPath !== null) {
            @unlink($configuredPath);
        }

        $values = [
            'asset_' . $assetKey => '',
            'asset_' . $assetKey . '_mime' => '',
        ];
        if ($touchRevision) {
            $values['asset_revision'] = time();
        }

        Config::setConfigurationValues(self::CONTEXT, $values);
    }

    /**
     * Public, non-sensitive appearance data consumed by the browser.
     *
     * @return array<string, mixed>
     */
    public static function getPublicPayload(): array
    {
        $config = self::get();

        return [
            'plugin' => [
                'name' => 'ST-Custom Login',
                'version' => defined('PLUGIN_CUSTOMLOGIN_VERSION')
                    ? PLUGIN_CUSTOMLOGIN_VERSION
                    : '2.2.1',
                'schema' => self::SCHEMA_VERSION,
            ],
            'enabled' => (bool) $config['enabled'],
            'login' => [
                'enabled' => (bool) $config['login_enabled'],
                'title' => (string) $config['login_title'],
                'subtitle' => (string) $config['login_subtitle'],
                'promptEnabled' => (bool) $config['login_prompt_enabled'],
                'promptText' => (string) $config['login_prompt_text'],
                'footer' => (string) $config['login_footer'],
                'primaryColor' => (string) $config['primary_color'],
                'backgroundOverlay' => (int) $config['background_overlay'],
                'alignment' => (string) $config['login_alignment'],
                'cardWidth' => (int) $config['card_width'],
                'logoWidth' => (int) $config['login_logo_width'],
                'logoHeight' => (int) $config['login_logo_height'],
                'backgroundUrl' => self::getAssetUrl('background'),
                'logoUrl' => self::getAssetUrl('login_logo'),
            ],
            'internal' => [
                'enabled' => (bool) $config['internal_enabled'],
                'logoWidth' => (int) $config['navbar_logo_width'],
                'logoHeight' => (int) $config['navbar_logo_height'],
                'logoUrl' => self::getAssetUrl('navbar_logo'),
                'collapsedLogoWidth' => (int) $config['navbar_logo_collapsed_width'],
                'collapsedLogoHeight' => (int) $config['navbar_logo_collapsed_height'],
                'collapsedLogoUrl' => self::getAssetUrl('navbar_logo_collapsed'),
                'sidebarEffectEnabled' => (bool) $config['sidebar_effect_enabled'],
                'sidebarEffectPreset' => (string) $config['sidebar_effect_preset'],
            ],
            'faviconUrl' => self::getAssetUrl('favicon'),
            'faviconMime' => self::getAssetInfo('favicon')['mime'] ?? '',
        ];
    }

    /**
     * Return a validated asset path and MIME, or null when not configured.
     *
     * @return array{path: string, filename: string, mime: string, size: int, mtime: int, width: int, height: int}|null
     */
    public static function getAssetInfo(string $assetKey): ?array
    {
        $definition = self::getAssetDefinition($assetKey);
        $config = self::get();
        $filename = (string) $config['asset_' . $assetKey];
        $storedMime = (string) $config['asset_' . $assetKey . '_mime'];

        if ($filename === '') {
            return null;
        }

        $directory = self::storageDirectory();
        $path = $directory . DIRECTORY_SEPARATOR . $filename;
        if (is_link($path)) {
            return null;
        }

        $realDirectory = realpath($directory);
        $realPath = realpath($path);

        if ($realDirectory === false || $realPath === false || !is_file($realPath)) {
            return null;
        }

        $prefix = rtrim($realDirectory, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
        if (!str_starts_with($realPath, $prefix)) {
            return null;
        }

        $size = filesize($realPath);
        $mtime = filemtime($realPath);
        if (
            $size === false
            || $mtime === false
            || $size <= 0
            || $size > (int) $definition['max_bytes']
        ) {
            return null;
        }

        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $detectedMime = (string) $finfo->file($realPath);
        if (!self::isMimeAllowed($assetKey, $detectedMime)) {
            return null;
        }

        $imageInfo = @getimagesize($realPath);
        if (
            !is_array($imageInfo)
            || !isset($imageInfo[0], $imageInfo[1], $imageInfo['mime'])
            || !self::mimeMatches((string) $imageInfo['mime'], $detectedMime)
            || (int) $imageInfo[0] <= 0
            || (int) $imageInfo[1] <= 0
            || (int) $imageInfo[0] > (int) $definition['max_width']
            || (int) $imageInfo[1] > (int) $definition['max_height']
        ) {
            return null;
        }

        $mime = self::isMimeAllowed($assetKey, $storedMime)
            && self::mimeMatches($storedMime, $detectedMime)
                ? $storedMime
                : $detectedMime;

        return [
            'path' => $realPath,
            'filename' => basename($realPath),
            'mime' => $mime,
            'size' => (int) $size,
            'mtime' => (int) $mtime,
            'width' => (int) $imageInfo[0],
            'height' => (int) $imageInfo[1],
        ];
    }

    /**
     * Return the private data directory used by this plugin.
     */
    public static function storageDirectory(): string
    {
        if (defined('GLPI_PLUGIN_DOC_DIR')) {
            return rtrim((string) GLPI_PLUGIN_DOC_DIR, DIRECTORY_SEPARATOR)
                . DIRECTORY_SEPARATOR
                . 'customlogin';
        }

        if (defined('GLPI_DOC_DIR')) {
            return rtrim((string) GLPI_DOC_DIR, DIRECTORY_SEPARATOR)
                . DIRECTORY_SEPARATOR
                . '_plugins'
                . DIRECTORY_SEPARATOR
                . 'customlogin';
        }

        return rtrim((string) GLPI_ROOT, DIRECTORY_SEPARATOR)
            . DIRECTORY_SEPARATOR
            . 'files'
            . DIRECTORY_SEPARATOR
            . '_plugins'
            . DIRECTORY_SEPARATOR
            . 'customlogin';
    }

    /**
     * Return whether private storage is currently writable.
     */
    public static function isStorageWritable(): bool
    {
        try {
            self::ensureStorageDirectory();
        } catch (Throwable) {
            return false;
        }

        return is_writable(self::storageDirectory());
    }

    /**
     * Return plugin web directory for plugins and marketplace installations.
     */
    public static function getWebDir(): string
    {
        global $CFG_GLPI;

        $root = is_array($CFG_GLPI ?? null)
            ? rtrim((string) ($CFG_GLPI['root_doc'] ?? ''), '/')
            : '';

        // GLPI 11 exposes plugin resources through the canonical /plugins URL,
        // including packages physically installed from the marketplace.
        if (defined('GLPI_VERSION') && version_compare(GLPI_VERSION, '11.0.0', '>=')) {
            return $root . '/plugins/customlogin';
        }

        // GLPI 10 may still need the legacy helper to distinguish plugins from
        // marketplace installations. It is intentionally not called on GLPI 11.
        if (class_exists('Plugin') && method_exists('Plugin', 'getWebDir')) {
            try {
                $legacyWebDir = rtrim((string) Plugin::getWebDir('customlogin'), '/');
                if ($legacyWebDir !== '') {
                    return $legacyWebDir;
                }
            } catch (Throwable) {
                // Fall through to the compatible default below.
            }
        }

        return $root . '/plugins/customlogin';
    }

    /**
     * Return version-aware asset endpoint URL.
     */
    public static function getAssetUrl(string $assetKey): ?string
    {
        $info = self::getAssetInfo($assetKey);
        if ($info === null) {
            return null;
        }

        $endpoint = defined('GLPI_VERSION') && version_compare(GLPI_VERSION, '11.0.0', '>=')
            ? '/asset.php'
            : '/public/asset.php';

        return self::getWebDir()
            . $endpoint
            . '?key=' . rawurlencode($assetKey)
            . '&v=' . substr(
                hash('sha256', $info['filename'] . '|' . $info['size'] . '|' . $info['mtime']),
                0,
                20
            );
    }

    /**
     * Return asset definitions for the admin UI/tests.
     *
     * @return array<string, array<string, mixed>>
     */
    public static function getAssetDefinitions(): array
    {
        return self::ASSETS;
    }

    /**
     * Return supported desktop positions for the login panel.
     *
     * @return array<string, string>
     */
    public static function getLoginAlignments(): array
    {
        return self::LOGIN_ALIGNMENTS;
    }

    /**
     * Return the seven visual themes available for the vertical sidebar.
     *
     * @return array<string, string>
     */
    public static function getSidebarPresets(): array
    {
        return self::SIDEBAR_PRESETS;
    }

    /**
     * Check whether a background already stored follows one of the new
     * standardized dimensions. Legacy assets remain readable until replaced.
     */
    public static function isStandardBackgroundSize(int $width, int $height): bool
    {
        $allowed = self::ASSETS['background']['allowed_dimensions'] ?? [];

        return is_array($allowed) && in_array([$width, $height], $allowed, true);
    }

    /**
     * Escape plain text for the administration page.
     */
    public static function escape(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    /**
     * Ensure data directory exists and is protected against direct serving.
     */
    private static function ensureStorageDirectory(): void
    {
        $directory = self::storageDirectory();

        if (!is_dir($directory) && !mkdir($directory, 0750, true) && !is_dir($directory)) {
            throw new RuntimeException('Não foi possível criar o diretório privado do ST-Custom Login.');
        }

        if (!is_writable($directory)) {
            throw new RuntimeException('O diretório privado do ST-Custom Login não possui permissão de escrita.');
        }

        self::writeProtectionFile(
            $directory . DIRECTORY_SEPARATOR . '.htaccess',
            "Require all denied\nDeny from all\n"
        );
        self::writeProtectionFile(
            $directory . DIRECTORY_SEPARATOR . 'web.config',
            '<?xml version="1.0" encoding="UTF-8"?>' . "\n"
            . '<configuration><system.webServer><security><authorization>'
            . '<remove users="*" roles="" verbs="" />'
            . '<add accessType="Deny" users="*" />'
            . '</authorization></security></system.webServer></configuration>' . "\n"
        );
        self::writeProtectionFile(
            $directory . DIRECTORY_SEPARATOR . 'index.html',
            ''
        );
    }

    /**
     * Return the configured file path without following symbolic links.
     */
    private static function getConfiguredStoragePath(string $assetKey): ?string
    {
        self::getAssetDefinition($assetKey);
        $config = self::get();
        $filename = (string) $config['asset_' . $assetKey];
        if ($filename === '') {
            return null;
        }

        $directory = self::storageDirectory();
        $realDirectory = realpath($directory);
        if ($realDirectory === false) {
            return null;
        }

        $path = $directory . DIRECTORY_SEPARATOR . $filename;
        $realParent = realpath(dirname($path));
        if (
            $realParent === false
            || $realParent !== $realDirectory
            || (!is_file($path) && !is_link($path))
        ) {
            return null;
        }

        return $path;
    }

    /**
     * Create a storage protection file and fail closed when it cannot be written.
     */
    private static function writeProtectionFile(string $path, string $contents): void
    {
        if (is_link($path)) {
            throw new RuntimeException(sprintf(
                'O arquivo de proteção %s não pode ser um link simbólico.',
                basename($path)
            ));
        }

        if (is_file($path)) {
            $existing = file_get_contents($path);
            if ($existing === $contents) {
                return;
            }
        } elseif (file_exists($path)) {
            throw new RuntimeException(sprintf(
                'O caminho de proteção %s não é um arquivo regular.',
                basename($path)
            ));
        }

        $written = file_put_contents($path, $contents, LOCK_EX);
        if ($written === false) {
            throw new RuntimeException(sprintf(
                'Não foi possível criar o arquivo de proteção %s.',
                basename($path)
            ));
        }

        @chmod($path, 0640);
    }

    /**
     * Delete only files inside the plugin-owned private directory.
     */
    private static function removeStorageDirectory(): void
    {
        $directory = self::storageDirectory();
        if (!is_dir($directory)) {
            return;
        }

        $items = scandir($directory);
        if ($items === false) {
            return;
        }

        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }

            $path = $directory . DIRECTORY_SEPARATOR . $item;
            if (is_file($path) || is_link($path)) {
                @unlink($path);
            }
        }

        @rmdir($directory);
    }

    /**
     * Validate image magic, MIME, dimensions and limits.
     *
     * @param array<string, mixed> $definition
     * @return array{0: string, 1: string}
     */
    private static function validateImageFile(
        string $path,
        array $definition,
        bool $enforceStandardDimensions = false
    ): array
    {
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mime = (string) $finfo->file($path);

        if (!self::isMimeAllowedForDefinition($mime, $definition)) {
            throw new RuntimeException(sprintf(
                'Formato de imagem não permitido. Use %s.',
                (string) ($definition['formats'] ?? 'um formato permitido')
            ));
        }

        $imageInfo = @getimagesize($path);
        if (!is_array($imageInfo) || !isset($imageInfo[0], $imageInfo[1], $imageInfo['mime'])) {
            throw new RuntimeException('O conteúdo enviado não é uma imagem válida.');
        }

        if (!self::mimeMatches((string) $imageInfo['mime'], $mime)) {
            throw new RuntimeException('O tipo informado pela imagem não corresponde ao conteúdo do arquivo.');
        }

        $width = (int) $imageInfo[0];
        $height = (int) $imageInfo[1];
        if (
            $width <= 0
            || $height <= 0
            || $width > (int) $definition['max_width']
            || $height > (int) $definition['max_height']
        ) {
            throw new RuntimeException(sprintf(
                'Dimensões inválidas. O limite é %dx%d pixels.',
                (int) $definition['max_width'],
                (int) $definition['max_height']
            ));
        }

        $allowedDimensions = $definition['allowed_dimensions'] ?? null;
        if (
            $enforceStandardDimensions
            && is_array($allowedDimensions)
            && !in_array([$width, $height], $allowedDimensions, true)
        ) {
            throw new RuntimeException(sprintf(
                'Dimensão do plano de fundo não permitida. Use %s.',
                (string) ($definition['dimension_help'] ?? 'uma dimensão permitida')
            ));
        }

        return [$mime, self::MIME_EXTENSIONS[$mime]];
    }

    /**
     * Import known legacy files left by older plugin packages.
     */
    private static function migrateLegacyAssets(): void
    {
        $pluginRoot = dirname(__DIR__);
        $candidates = [
            'background' => [
                $pluginRoot . '/pics/bg/back.jpg',
                $pluginRoot . '/pics/back.jpg',
                $pluginRoot . '/pics/background.jpg',
                $pluginRoot . '/img/background.jpg',
                $pluginRoot . '/images/background.jpg',
            ],
            'login_logo' => [
                $pluginRoot . '/pics/login_logo_glpi.png',
                $pluginRoot . '/pics/login-logo.png',
                $pluginRoot . '/pics/logo-login.png',
                $pluginRoot . '/img/logo.png',
            ],
            'navbar_logo' => [
                $pluginRoot . '/pics/fd_logo.png',
                $pluginRoot . '/pics/internal-logo.png',
                $pluginRoot . '/pics/navbar-logo.png',
                $pluginRoot . '/img/logo_internal.png',
            ],
            'navbar_logo_collapsed' => [
                $pluginRoot . '/pics/fd_logo_mini.png',
                $pluginRoot . '/pics/internal-logo-collapsed.png',
                $pluginRoot . '/pics/navbar-logo-collapsed.png',
                $pluginRoot . '/img/logo_internal_collapsed.png',
            ],
            'favicon' => [
                $pluginRoot . '/pics/favicon.ico',
                $pluginRoot . '/pics/favicon.png',
                $pluginRoot . '/img/favicon.ico',
                $pluginRoot . '/img/favicon.png',
            ],
        ];

        foreach ($candidates as $assetKey => $paths) {
            if (self::getAssetInfo($assetKey) !== null) {
                continue;
            }

            foreach ($paths as $source) {
                if (!is_file($source)) {
                    continue;
                }

                try {
                    self::importLocalAsset($assetKey, $source);
                    break;
                } catch (Throwable $exception) {
                    if (class_exists('Toolbox')) {
                        Toolbox::logInFile(
                            'customlogin',
                            sprintf(
                                "Legacy asset migration skipped for %s: %s\n",
                                $assetKey,
                                $exception->getMessage()
                            )
                        );
                    }
                }
            }
        }
    }

    /**
     * Copy one trusted local legacy image after the same image validation.
     */
    private static function importLocalAsset(string $assetKey, string $source): void
    {
        $definition = self::getAssetDefinition($assetKey);
        $size = (int) filesize($source);
        if ($size <= 0 || $size > (int) $definition['max_bytes']) {
            throw new RuntimeException('Legacy image exceeds the allowed size.');
        }

        [$mime, $extension] = self::validateImageFile($source, $definition);
        self::ensureStorageDirectory();

        $filename = sprintf(
            '%s-migrated-%s.%s',
            $assetKey,
            bin2hex(random_bytes(8)),
            $extension
        );
        $target = self::storageDirectory() . DIRECTORY_SEPARATOR . $filename;

        if (!copy($source, $target)) {
            throw new RuntimeException('Unable to copy legacy image.');
        }
        @chmod($target, 0640);

        Config::setConfigurationValues(self::CONTEXT, [
            'asset_' . $assetKey => $filename,
            'asset_' . $assetKey . '_mime' => $mime,
            'asset_revision' => time(),
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    private static function getAssetDefinition(string $assetKey): array
    {
        if (!array_key_exists($assetKey, self::ASSETS)) {
            throw new InvalidArgumentException('Tipo de imagem inválido.');
        }

        return self::ASSETS[$assetKey];
    }

    private static function isMimeAllowed(string $assetKey, string $mime): bool
    {
        return self::isMimeAllowedForDefinition($mime, self::getAssetDefinition($assetKey));
    }

    /**
     * @param array<string, mixed> $definition
     */
    private static function isMimeAllowedForDefinition(string $mime, array $definition): bool
    {
        $allowed = $definition['allowed_mimes'] ?? [];

        return $mime !== ''
            && array_key_exists($mime, self::MIME_EXTENSIONS)
            && is_array($allowed)
            && in_array($mime, $allowed, true);
    }

    private static function mimeMatches(string $first, string $second): bool
    {
        if ($first === $second) {
            return true;
        }

        $iconMimes = ['image/x-icon', 'image/vnd.microsoft.icon'];

        return in_array($first, $iconMimes, true)
            && in_array($second, $iconMimes, true);
    }

    private static function normalizeColor(string $value, string $fallback): string
    {
        $value = trim($value);

        return preg_match('/^#[0-9a-fA-F]{6}$/D', $value) === 1
            ? strtolower($value)
            : $fallback;
    }

    private static function normalizeText(mixed $value, int $maxLength): string
    {
        $text = trim(strip_tags((string) $value));
        $text = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u', '', $text) ?? '';
        $text = preg_replace('/\s+/u', ' ', $text) ?? '';

        if (function_exists('mb_substr')) {
            return mb_substr($text, 0, $maxLength, 'UTF-8');
        }

        return substr($text, 0, $maxLength);
    }

    private static function normalizeStoredFilename(string $filename): string
    {
        $filename = trim($filename);
        if (
            $filename === ''
            || basename($filename) !== $filename
            || preg_match('/^[a-z0-9][a-z0-9._-]{0,190}$/iD', $filename) !== 1
        ) {
            return '';
        }

        return $filename;
    }

    private static function boundedInt(mixed $value, int $min, int $max, int $fallback): int
    {
        if (filter_var($value, FILTER_VALIDATE_INT) === false) {
            return $fallback;
        }

        return max($min, min($max, (int) $value));
    }

    private static function toBooleanInt(mixed $value): int
    {
        return in_array($value, [1, '1', true, 'true', 'on', 'yes'], true) ? 1 : 0;
    }

    private static function uploadErrorMessage(int $error): string
    {
        return match ($error) {
            UPLOAD_ERR_INI_SIZE, UPLOAD_ERR_FORM_SIZE => 'O arquivo excede o limite configurado para upload.',
            UPLOAD_ERR_PARTIAL => 'O arquivo foi enviado apenas parcialmente.',
            UPLOAD_ERR_NO_TMP_DIR => 'O diretório temporário de upload não está disponível.',
            UPLOAD_ERR_CANT_WRITE => 'O servidor não conseguiu gravar o arquivo enviado.',
            UPLOAD_ERR_EXTENSION => 'Uma extensão do PHP interrompeu o upload.',
            default => 'Falha ao receber o arquivo enviado.',
        };
    }
}
