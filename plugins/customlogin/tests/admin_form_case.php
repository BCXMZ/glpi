<?php

/**
 * Isolated regression fixture for the authenticated administration handler.
 *
 * It simulates the relevant CSRF lifecycle of GLPI 10 and GLPI 11:
 * - GLPI 10: the legacy front script must validate the token itself.
 * - GLPI 11: CheckCsrfListener validates and consumes the token before the
 *   legacy front script is required by LegacyFileLoadController.
 */

declare(strict_types=1);

$version = $argv[1] ?? '';
$scenario = $argv[2] ?? '';
if ($version === '' || $scenario === '') {
    fwrite(STDERR, "Uso: php admin_form_case.php <versao-glpi> <cenario>\n");
    exit(2);
}

$root = dirname(__DIR__);
$tempSuffix = preg_replace('/[^A-Za-z0-9_.-]/', '-', $version . '-' . $scenario);
$tempRoot = sys_get_temp_dir() . '/stcl-admin-form-' . $tempSuffix . '-' . bin2hex(random_bytes(4));

const UPDATE = 2;
const INFO = 1;
const ERROR = 2;
define('GLPI_VERSION', $version);
define('GLPI_ROOT', $tempRoot . '/glpi');
define('GLPI_PLUGIN_DOC_DIR', $tempRoot . '/files/_plugins');
define('PLUGIN_CUSTOMLOGIN_VERSION', '2.2.1');

$CFG_GLPI = ['root_doc' => '/glpi'];

final class CsrfDeniedException extends RuntimeException {}
final class RightDeniedException extends RuntimeException {}
final class RedirectSignalException extends RuntimeException {}

final class Config
{
    /** @var array<string, array<string, mixed>> */
    public static array $data = [];
    public static int $writeCalls = 0;
    public static bool $failWrites = false;

    /** @return array<string, mixed> */
    public static function getConfigurationValues(string $context): array
    {
        return self::$data[$context] ?? [];
    }

    /** @param array<string, mixed> $values */
    public static function setConfigurationValues(string $context, array $values): void
    {
        self::$writeCalls++;
        if (self::$failWrites) {
            throw new RuntimeException('fixture-sensitive-detail-/srv/glpi');
        }
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

final class Session
{
    public static bool $hasRight = true;
    public static int $rightChecks = 0;
    public static int $csrfChecks = 0;
    /** @var array<string, true> */
    public static array $tokens = [];
    /** @var list<array{message: string, check: bool, type: int}> */
    public static array $messages = [];

    public static function checkRight(string $right, int $action): void
    {
        self::$rightChecks++;
        if (!self::$hasRight || $right !== 'config' || $action !== UPDATE) {
            throw new RightDeniedException('Acesso administrativo negado.');
        }
    }

    /** @param array<string, mixed> $data */
    public static function checkCSRF(array $data, bool $preserve_token = false): void
    {
        self::$csrfChecks++;
        $token = (string) ($data['_glpi_csrf_token'] ?? '');
        if ($token === '' || !isset(self::$tokens[$token])) {
            throw new CsrfDeniedException('Token CSRF ausente, inválido ou já consumido.');
        }

        if (!$preserve_token) {
            unset(self::$tokens[$token]);
        }
    }

    public static function addMessageAfterRedirect(string $message, bool $check, int $type): void
    {
        self::$messages[] = [
            'message' => $message,
            'check' => $check,
            'type' => $type,
        ];
    }
}

final class Html
{
    /** @var list<string> */
    public static array $redirects = [];

    public static function redirect(string $url): void
    {
        self::$redirects[] = $url;

        // Since GLPI 11, Html::redirect() signals the Symfony kernel by
        // throwing Glpi\Exception\RedirectException.
        if (version_compare(GLPI_VERSION, '11.0.0', '>=')) {
            throw new RedirectSignalException($url);
        }
    }
}

final class Toolbox
{
    /** @var list<string> */
    public static array $logs = [];

    public static function logInFile(string $channel, string $message): void
    {
        self::$logs[] = $channel . ':' . $message;
    }
}

require_once $root . '/inc/config.class.php';

$validToken = 'fixture-valid-token';
Session::$tokens[$validToken] = true;
$_FILES = [];
$_GET = [];
$_POST = [
    '_glpi_csrf_token' => $validToken,
    'enabled' => '1',
    'login_enabled' => '1',
    'internal_enabled' => '1',
    'sidebar_effect_enabled' => '1',
    'sidebar_effect_preset' => 'ocean',
    'primary_color' => '#123456',
    'background_overlay' => '22',
    'login_alignment' => 'right',
    'card_width' => '500',
    'login_logo_width' => '190',
    'login_logo_height' => '110',
    'navbar_logo_width' => '155',
    'navbar_logo_height' => '44',
    'navbar_logo_collapsed_width' => '46',
    'navbar_logo_collapsed_height' => '46',
    'login_title' => 'Portal de testes',
    'login_subtitle' => 'Compatibilidade CSRF',
    'login_prompt_enabled' => '1',
    'login_prompt_text' => 'Acesse sua conta corporativa',
    'login_footer' => 'Service TIC',
];
$_SERVER['REQUEST_METHOD'] = 'POST';
$_SERVER['REQUEST_URI'] = '/glpi/plugins/customlogin/front/config.form.php';

switch ($scenario) {
    case 'valid':
        break;

    case 'missing_token':
        unset($_POST['_glpi_csrf_token']);
        break;

    case 'invalid_token':
        $_POST['_glpi_csrf_token'] = 'fixture-invalid-token';
        break;

    case 'get':
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_POST = [];
        break;

    case 'put':
        $_SERVER['REQUEST_METHOD'] = 'PUT';
        $_POST = [];
        break;

    case 'no_right':
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_POST = [];
        Session::$hasRight = false;
        break;

    case 'restore_defaults':
        Config::$data[PluginCustomloginConfig::CONTEXT] = [
            'enabled' => 0,
            'primary_color' => '#abcdef',
        ];
        $_POST['restore_defaults'] = '1';
        break;

    case 'save_failure':
        Config::$failWrites = true;
        break;

    default:
        fwrite(STDERR, "Cenário desconhecido: {$scenario}\n");
        exit(2);
}

$listenerDenied = false;
$handlerIncluded = false;
$caught = null;
$redirectSignal = null;

try {
    // GLPI 11 performs this before LegacyFileLoadController requires the
    // plugin front script. Bodyless methods do not pass through CSRF checks.
    if (
        version_compare(GLPI_VERSION, '11.0.0', '>=')
        && !in_array($_SERVER['REQUEST_METHOD'], ['GET', 'HEAD', 'OPTIONS', 'TRACE'], true)
    ) {
        try {
            Session::checkCSRF($_POST);
        } catch (CsrfDeniedException $exception) {
            $listenerDenied = true;
            throw $exception;
        }
    }

    $handlerIncluded = true;
    include $root . '/front/config.form.php';
} catch (RedirectSignalException $exception) {
    $redirectSignal = [
        'class' => $exception::class,
        'message' => $exception->getMessage(),
    ];
} catch (Throwable $exception) {
    $caught = [
        'class' => $exception::class,
        'message' => $exception->getMessage(),
    ];
}

$stored = Config::$data[PluginCustomloginConfig::CONTEXT] ?? [];
$result = [
    'version' => GLPI_VERSION,
    'scenario' => $scenario,
    'listener_denied' => $listenerDenied,
    'handler_included' => $handlerIncluded,
    'caught' => $caught,
    'redirect_signal' => $redirectSignal,
    'right_checks' => Session::$rightChecks,
    'csrf_checks' => Session::$csrfChecks,
    'token_still_valid' => isset(Session::$tokens[$validToken]),
    'write_calls' => Config::$writeCalls,
    'stored' => $stored,
    'messages' => Session::$messages,
    'redirects' => Html::$redirects,
    'logs' => Toolbox::$logs,
];

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

echo json_encode($result, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
