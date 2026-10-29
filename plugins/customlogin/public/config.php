<?php

/**
 * Read-only public appearance configuration endpoint.
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

try {
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
} catch (Throwable) {
    $sendStatus(500, 'Internal Server Error');
    return;
}

$etag = '"' . hash('sha256', $json) . '"';
if ($etagMatches($etag)) {
    header('ETag: ' . $etag);
    $sendStatus(304, 'Not Modified');
    return;
}

header('Content-Type: application/json; charset=UTF-8');
header('Content-Length: ' . strlen($json));
header('Cache-Control: no-store, max-age=0');
header('Pragma: no-cache');
header('ETag: ' . $etag);
header('X-Content-Type-Options: nosniff');
header('Cross-Origin-Resource-Policy: same-origin');

if ($method === 'GET') {
    echo $json;
}
