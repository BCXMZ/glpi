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

/**
 * Per-entity branding (login background, login logo, menu logos).
 */
class PluginBrandingConfig
{
    private const TABLE = 'glpi_plugin_branding_entities';
    public const FIELDS = ['login_background', 'login_logo', 'logo_expanded', 'logo_collapsed'];

    public static function getTable(): string
    {
        return self::TABLE;
    }

    public static function getWebDir(): string
    {
        global $CFG_GLPI;
        // GLPI 11 routes marketplace assets through /plugins as well.
        if (version_compare(GLPI_VERSION, '11.0.0', '<')) {
            return Plugin::getWebDir('branding');
        }
        return $CFG_GLPI['root_doc'] . '/plugins/branding';
    }

    public static function getImageUrl(string $field, array $resolved): string
    {
        return self::getWebDir() . '/front/image.php?' . http_build_query([
            'field' => $field,
            'v' => hash('sha256', $resolved['entities_id'] . '/' . $resolved['filename']),
        ] + (in_array($field, ['login_background', 'login_logo'], true)
            ? ['branding_entity' => $resolved['entities_id']] : []), '', '&', PHP_QUERY_RFC3986);
    }

    /** Public login branding never selects an authenticated user's active entity. */
    public static function getLoginEntityId(mixed $value): int
    {
        global $DB;

        $id = filter_var($value, FILTER_VALIDATE_INT, ['options' => ['min_range' => 0]]);
        if ($id === false || $id === 0) {
            return 0;
        }

        return $DB->request([
            'SELECT' => 'id',
            'FROM' => 'glpi_entities',
            'WHERE' => ['id' => $id],
        ])->count() > 0 ? $id : 0;
    }

    public static function getLoginUrl(int $entities_id): string
    {
        global $CFG_GLPI;

        return $CFG_GLPI['root_doc'] . '/index.php?branding_entity=' . $entities_id;
    }

    public static function install(): bool
    {
        global $DB;

        if (!$DB->tableExists(self::TABLE)) {
            $DB->doQuery(
                "CREATE TABLE `" . self::TABLE . "` (
                  `id` int unsigned NOT NULL AUTO_INCREMENT,
                  `entities_id` int unsigned NOT NULL,
                  `login_background` varchar(255) DEFAULT NULL,
                  `login_logo` varchar(255) DEFAULT NULL,
                  `logo_expanded` varchar(255) DEFAULT NULL,
                  `logo_collapsed` varchar(255) DEFAULT NULL,
                  PRIMARY KEY (`id`),
                  UNIQUE KEY `unicity` (`entities_id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;"
            );
        }

        if ($DB->tableExists(self::TABLE) && !$DB->fieldExists(self::TABLE, 'login_logo')) {
            $DB->doQuery(
                'ALTER TABLE `' . self::TABLE . '` ADD `login_logo` varchar(255) DEFAULT NULL AFTER `login_background`'
            );
        }

        self::ensureStorageDir();

        return true;
    }

    public static function uninstall(): bool
    {
        global $DB;

        if ($DB->tableExists(self::TABLE)) {
            $DB->doQuery('DROP TABLE `' . self::TABLE . '`');
        }

        $dir = self::getStorageBaseDir();
        if (is_dir($dir)) {
            foreach (glob($dir . '/*') ?: [] as $sub) {
                if (is_dir($sub)) {
                    array_map('unlink', glob($sub . '/*') ?: []);
                    @rmdir($sub);
                }
            }
            @rmdir($dir);
        }

        return true;
    }

    public static function getStorageBaseDir(): string
    {
        return GLPI_PLUGIN_DOC_DIR . '/branding';
    }

    public static function ensureStorageDir(): void
    {
        if (!is_dir(self::getStorageBaseDir())) {
            @mkdir(self::getStorageBaseDir(), 0755, true);
        }
    }

    /**
     * @return array{login_background: ?string, login_logo: ?string, logo_expanded: ?string, logo_collapsed: ?string}
     */
    public static function getRowForEntity(int $entities_id): array
    {
        global $DB;

        if ($entities_id < 0) {
            return self::emptyRow();
        }

        $it = $DB->request([
            'FROM'  => self::TABLE,
            'WHERE' => ['entities_id' => $entities_id],
            'LIMIT' => 1,
        ]);
        foreach ($it as $row) {
            return [
                'login_background' => $row['login_background'] ?: null,
                'login_logo'       => !empty($row['login_logo']) ? $row['login_logo'] : null,
                'logo_expanded'    => $row['logo_expanded'] ?: null,
                'logo_collapsed'   => $row['logo_collapsed'] ?: null,
            ];
        }

        return self::emptyRow();
    }

    /**
     * @return array{login_background: ?string, login_logo: ?string, logo_expanded: ?string, logo_collapsed: ?string}
     */
    private static function emptyRow(): array
    {
        return [
            'login_background' => null,
            'login_logo'       => null,
            'logo_expanded'    => null,
            'logo_collapsed'   => null,
        ];
    }

    /**
     * Resolve file walking entity ancestors (closest wins).
     *
     * @param 'login_background'|'login_logo'|'logo_expanded'|'logo_collapsed' $field
     *
     * @return null|array{entities_id: int, filename: string}
     */
    public static function resolveFileForEntity(int $entities_id, string $field): ?array
    {
        if ($entities_id < 0 || !in_array($field, self::FIELDS, true)) {
            return null;
        }

        global $DB;

        // getAncestorsOf() may return root-first cached ancestors. Follow the
        // actual parent links so the closest configured entity always wins.
        $visited = [];
        while ($entities_id >= 0 && !isset($visited[$entities_id])) {
            $visited[$entities_id] = true;
            $row = self::getRowForEntity($entities_id);
            if ($row[$field] !== null && self::getReadableImagePath($entities_id, $row[$field]) !== null) {
                return ['entities_id' => $entities_id, 'filename' => $row[$field]];
            }
            if ($entities_id === 0) {
                break;
            }
            $parent = $DB->request([
                'SELECT' => 'entities_id',
                'FROM' => 'glpi_entities',
                'WHERE' => ['id' => $entities_id],
                'LIMIT' => 1,
            ])->current();
            if (!$parent) {
                break;
            }
            $entities_id = (int) $parent['entities_id'];
        }

        return null;
    }

    public static function getImagePath(int $entities_id, string $filename): string
    {
        if (
            $entities_id < 0 || $filename === '' || basename($filename) !== $filename
            || str_contains($filename, '\\') || str_contains($filename, "\0")
        ) {
            throw new InvalidArgumentException('Invalid branding image path.');
        }
        return self::getStorageBaseDir() . '/' . $entities_id . '/' . $filename;
    }

    public static function getReadableImagePath(int $entities_id, string $filename): ?string
    {
        try {
            $path = realpath(self::getImagePath($entities_id, $filename));
        } catch (InvalidArgumentException) {
            return null;
        }
        $base = realpath(self::getStorageBaseDir());
        if (
            $path === false || $base === false || !str_starts_with($path, $base . DIRECTORY_SEPARATOR)
            || !is_readable($path) || !Document::isImage($path)
        ) {
            return null;
        }
        return $path;
    }

    /**
     * @param 'login_background'|'login_logo'|'logo_expanded'|'logo_collapsed' $field
     */
    public static function handleUpload(int $entities_id, string $field, array $fileinfo): bool
    {
        if ($entities_id < 0 || !in_array($field, self::FIELDS, true)) {
            return false;
        }
        if (
            empty($fileinfo['tmp_name'])
            || ($fileinfo['error'] ?? UPLOAD_ERR_OK) !== UPLOAD_ERR_OK
            || !is_uploaded_file($fileinfo['tmp_name'])
        ) {
            Session::addMessageAfterRedirect(__('Could not save uploaded file.'), false, ERROR);
            return false;
        }

        $path = $fileinfo['tmp_name'];
        // PHP upload temporary files have no image extension. Detect their
        // contents first and choose a safe extension instead of trusting name.
        $type = (@getimagesize($path))[2] ?? null;
        $ext = [
            IMAGETYPE_JPEG => 'jpg',
            IMAGETYPE_PNG => 'png',
            IMAGETYPE_GIF => 'gif',
            IMAGETYPE_BMP => 'bmp',
            IMAGETYPE_WEBP => 'webp',
        ][$type] ?? null;
        if ($ext === null) {
            Session::addMessageAfterRedirect(__('The file must be an image.'), false, ERROR);
            return false;
        }

        $basename = $field . '_' . bin2hex(random_bytes(8)) . '.' . $ext;

        self::ensureStorageDir();
        $entity_dir = self::getStorageBaseDir() . '/' . $entities_id;
        if (!is_dir($entity_dir)) {
            @mkdir($entity_dir, 0755, true);
        }

        $dest = $entity_dir . '/' . $basename;
        if (!move_uploaded_file($path, $dest)) {
            Session::addMessageAfterRedirect(__('Could not save uploaded file.'), false, ERROR);
            return false;
        }

        if (!Document::isImage($dest)) {
            unlink($dest);
            Session::addMessageAfterRedirect(__('The file must be an image.'), false, ERROR);
            return false;
        }

        $old = self::getRowForEntity($entities_id)[$field];
        try {
            $saved = self::upsertField($entities_id, $field, $basename);
        } catch (Throwable $e) {
            unlink($dest);
            throw $e;
        }
        if (!$saved) {
            unlink($dest);
            Session::addMessageAfterRedirect(__('Could not save uploaded file.'), false, ERROR);
            return false;
        }
        self::deleteImage($entities_id, $old);

        return true;
    }

    /**
     * @param 'login_background'|'login_logo'|'logo_expanded'|'logo_collapsed' $field
     */
    public static function deleteStoredFile(int $entities_id, string $field): void
    {
        $row = self::getRowForEntity($entities_id);
        self::deleteImage($entities_id, $row[$field] ?? null);
    }

    private static function deleteImage(int $entities_id, ?string $filename): void
    {
        if ($filename !== null && ($path = self::getReadableImagePath($entities_id, $filename)) !== null) {
            @unlink($path);
        }
    }

    /**
     * @param 'login_background'|'login_logo'|'logo_expanded'|'logo_collapsed' $field
     */
    public static function upsertField(int $entities_id, string $field, ?string $value): bool
    {
        global $DB;

        if ($entities_id < 0 || !in_array($field, self::FIELDS, true)) {
            return false;
        }
        $it = $DB->request([
            'SELECT' => 'id',
            'FROM'   => self::TABLE,
            'WHERE'  => ['entities_id' => $entities_id],
            'LIMIT'  => 1,
        ]);
        $id = null;
        foreach ($it as $r) {
            $id = (int) $r['id'];
        }

        if ($id !== null) {
            return $DB->update(
                self::TABLE,
                [$field => $value],
                ['id' => $id]
            );
        } elseif ($value !== null && $value !== '') {
            return $DB->insert(
                self::TABLE,
                [
                    'entities_id' => $entities_id,
                    $field        => $value,
                ]
            );
        }
        return true;
    }

    public static function removeField(int $entities_id, string $field): bool
    {
        if ($entities_id < 0 || !in_array($field, self::FIELDS, true)) {
            return false;
        }
        $old = self::getRowForEntity($entities_id)[$field];
        if (!self::upsertField($entities_id, $field, null)) {
            return false;
        }
        self::deleteImage($entities_id, $old);
        return true;
    }

    public static function processEntityFormPost(Entity $entity): bool
    {
        $eid = (int) $entity->getID();
        if ($eid < 0) {
            return false;
        }

        $success = true;
        foreach (self::FIELDS as $field) {
            $key = 'plugin_branding_' . $field;
            $upload = $_FILES[$key] ?? [];
            if (($upload['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_NO_FILE || !empty($upload['name'])) {
                // Replacement wins over removal, and a failed replacement
                // must keep the previous image intact.
                $success = self::handleUpload($eid, $field, $upload) && $success;
            } elseif (!empty($_POST['_plugin_branding_remove_' . $field])) {
                $success = self::removeField($eid, $field) && $success;
            }
        }
        return $success;
    }
}
