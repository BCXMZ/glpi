<?php

/**
 * Isolated validator for the standardized login background dimensions.
 */

declare(strict_types=1);

$path = (string) (getenv('STCL_IMAGE_PATH') ?: '');
$assetKey = (string) (getenv('STCL_ASSET_KEY') ?: 'background');

if ($path === '' || !is_file($path)) {
    fwrite(STDERR, "Informe STCL_IMAGE_PATH com uma imagem existente.\n");
    exit(2);
}

if (!defined('GLPI_ROOT')) {
    define('GLPI_ROOT', sys_get_temp_dir() . '/stcl-background-dimension-root');
}

require dirname(__DIR__) . '/inc/config.class.php';

try {
    $definitions = PluginCustomloginConfig::getAssetDefinitions();
    if (!array_key_exists($assetKey, $definitions)) {
        throw new InvalidArgumentException('Tipo de imagem inválido para a fixture.');
    }

    $method = new ReflectionMethod(PluginCustomloginConfig::class, 'validateImageFile');
    $method->setAccessible(true);
    /** @var array{0: string, 1: string} $result */
    $result = $method->invoke(null, $path, $definitions[$assetKey], true);

    echo json_encode([
        'ok' => true,
        'mime' => $result[0],
        'extension' => $result[1],
        'error' => '',
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
} catch (Throwable $exception) {
    echo json_encode([
        'ok' => false,
        'mime' => '',
        'extension' => '',
        'error' => $exception->getMessage(),
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
}
