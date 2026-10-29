<?php

/**
 * Isolated child-process fixture for public endpoint behavior.
 */

declare(strict_types=1);

$scenario = $argv[1] ?? '';
if ($scenario === '') {
    fwrite(STDERR, "Informe o cenário do endpoint.\n");
    exit(2);
}

ini_set('display_errors', 'stderr');
error_reporting(E_ALL);

$root = dirname(__DIR__);
$tempRoot = sys_get_temp_dir() . '/stcl-endpoint-' . getmypid();
define('GLPI_ROOT', $tempRoot . '/glpi');
define('GLPI_PLUGIN_DOC_DIR', $tempRoot . '/files/_plugins');
define('GLPI_VERSION', '11.0.8');
define('PLUGIN_CUSTOMLOGIN_VERSION', '2.2.1');

$CFG_GLPI = ['root_doc' => '/glpi'];

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

final class Plugin
{
    public static function getWebDir(string $plugin): string
    {
        return '/glpi/marketplace/' . $plugin;
    }
}

require $root . '/inc/config.class.php';
PluginCustomloginConfig::install();

$png = base64_decode(
    'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAusB9Wl6qLgAAAAASUVORK5CYII=',
    true
);
if (!is_string($png)) {
    throw new RuntimeException('Fixture PNG inválida.');
}

$assetName = 'background-endpoint.png';
$assetPath = PluginCustomloginConfig::storageDirectory() . '/' . $assetName;
file_put_contents($assetPath, $png, LOCK_EX);
touch($assetPath, 1_700_000_000);
Config::setConfigurationValues(PluginCustomloginConfig::CONTEXT, [
    'asset_background' => $assetName,
    'asset_background_mime' => 'image/png',
]);

$_GET = [];
$_POST = [];
$_SERVER = [
    'SERVER_PROTOCOL' => 'HTTP/1.1',
    'REQUEST_METHOD' => 'GET',
];
$endpoint = '';

switch ($scenario) {
    case 'config_get':
        $endpoint = $root . '/public/config.php';
        break;

    case 'config_head':
        $_SERVER['REQUEST_METHOD'] = 'HEAD';
        $endpoint = $root . '/public/config.php';
        break;

    case 'config_post':
        $_SERVER['REQUEST_METHOD'] = 'POST';
        $endpoint = $root . '/public/config.php';
        break;

    case 'config_not_modified':
        $json = json_encode(
            PluginCustomloginConfig::getPublicPayload(),
            JSON_UNESCAPED_SLASHES
            | JSON_UNESCAPED_UNICODE
            | JSON_HEX_TAG
            | JSON_HEX_AMP
            | JSON_HEX_APOS
            | JSON_HEX_QUOT
            | JSON_THROW_ON_ERROR
        );
        $_SERVER['HTTP_IF_NONE_MATCH'] = '"' . hash('sha256', $json) . '"';
        $endpoint = $root . '/public/config.php';
        break;

    case 'asset_get':
        $_GET['key'] = 'background';
        $endpoint = $root . '/public/asset.php';
        break;

    case 'asset_head':
        $_SERVER['REQUEST_METHOD'] = 'HEAD';
        $_GET['key'] = 'background';
        $endpoint = $root . '/public/asset.php';
        break;

    case 'asset_post':
        $_SERVER['REQUEST_METHOD'] = 'POST';
        $_GET['key'] = 'background';
        $endpoint = $root . '/public/asset.php';
        break;

    case 'asset_invalid_key':
        $_GET['key'] = '../../etc/passwd';
        $endpoint = $root . '/public/asset.php';
        break;

    case 'asset_not_modified':
        $_GET['key'] = 'background';
        $asset = PluginCustomloginConfig::getAssetInfo('background');
        if ($asset === null) {
            throw new RuntimeException('Ativo da fixture não foi reconhecido.');
        }
        $_SERVER['HTTP_IF_NONE_MATCH'] = '"' . hash(
            'sha256',
            $asset['filename'] . '|' . $asset['size'] . '|' . $asset['mtime']
        ) . '"';
        $endpoint = $root . '/public/asset.php';
        break;

    case 'asset_tampered_config':
        $_GET['key'] = 'background';
        Config::setConfigurationValues(PluginCustomloginConfig::CONTEXT, [
            'asset_background' => '../../etc/passwd',
            'asset_background_mime' => 'image/png',
        ]);
        $endpoint = $root . '/public/asset.php';
        break;

    default:
        fwrite(STDERR, "Cenário desconhecido: {$scenario}\n");
        exit(2);
}

ob_start();
include $endpoint;
$body = (string) ob_get_clean();
$status = http_response_code();
if ($status === false) {
    $status = 200;
}

$cleanup = static function (string $path) use (&$cleanup): void {
    if (!file_exists($path) && !is_link($path)) {
        return;
    }
    if (is_dir($path) && !is_link($path)) {
        foreach (scandir($path) ?: [] as $item) {
            if ($item !== '.' && $item !== '..') {
                $cleanup($path . DIRECTORY_SEPARATOR . $item);
            }
        }
        @rmdir($path);
        return;
    }
    @unlink($path);
};
$cleanup($tempRoot);

echo json_encode([
    'scenario' => $scenario,
    'status' => $status,
    'body_length' => strlen($body),
    'body_sha256' => hash('sha256', $body),
    'body_base64' => base64_encode($body),
    'fixture_sha256' => hash('sha256', $png),
], JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
