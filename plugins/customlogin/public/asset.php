<?php

/**
 * Strict allowlist image-serving endpoint for private plugin assets.
 *
 * @license GPL-2.0-or-later
 */

declare(strict_types=1);

if (!defined('GLPI_ROOT')) {
    require_once dirname(__DIR__, 3) . '/inc/includes.php';
}

require_once dirname(__DIR__) . '/inc/config.class.php';

$sendStatus = static function (int $status, string $reason): void {
    $protocol = (string) ($_SERVER['SERVER_PROTOCOL'] ?? 'HTTP/1.1');
    if (preg_match('/^HTTP\/\d(?:\.\d)?$/D', $protocol) !== 1) {
        $protocol = 'HTTP/1.1';
    }

    header(sprintf('%s %d %s', $protocol, $status, $reason), true, $status);
};

$etagMatches = static function (string $etag): bool {
    $header = trim((string) ($_SERVER['HTTP_IF_NONE_MATCH'] ?? ''));
    if ($header === '') {
        return false;
    }

    if ($header === '*') {
        return true;
    }

    return in_array($etag, array_map('trim', explode(',', $header)), true);
};

$method = strtoupper((string) ($_SERVER['REQUEST_METHOD'] ?? 'GET'));
if (!in_array($method, ['GET', 'HEAD'], true)) {
    header('Allow: GET, HEAD');
    $sendStatus(405, 'Method Not Allowed');
    return;
}

$key = (string) ($_GET['key'] ?? '');
if (!array_key_exists($key, PluginCustomloginConfig::getAssetDefinitions())) {
    $sendStatus(404, 'Not Found');
    return;
}

$asset = PluginCustomloginConfig::getAssetInfo($key);
if ($asset === null) {
    $sendStatus(404, 'Not Found');
    return;
}

$handle = fopen($asset['path'], 'rb');
if ($handle === false) {
    $sendStatus(404, 'Not Found');
    return;
}

$etag = '"' . hash(
    'sha256',
    $asset['filename'] . '|' . $asset['size'] . '|' . $asset['mtime']
) . '"';

if ($etagMatches($etag)) {
    fclose($handle);
    header('ETag: ' . $etag);
    $sendStatus(304, 'Not Modified');
    return;
}

header('Content-Type: ' . $asset['mime']);
header('Content-Length: ' . $asset['size']);
header('Content-Disposition: inline; filename="' . $asset['filename'] . '"');
header('Cache-Control: public, max-age=31536000, immutable');
header('ETag: ' . $etag);
header('Last-Modified: ' . gmdate('D, d M Y H:i:s', $asset['mtime']) . ' GMT');
header('X-Content-Type-Options: nosniff');
header('Cross-Origin-Resource-Policy: same-origin');
header("Content-Security-Policy: default-src 'none'; sandbox");

if ($method === 'GET') {
    fpassthru($handle);
}

fclose($handle);
