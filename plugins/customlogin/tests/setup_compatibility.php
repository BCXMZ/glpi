<?php

/**
 * Exercise setup.php/hook.php against lightweight GLPI 10/11 API fixtures.
 */

declare(strict_types=1);

namespace Glpi\Http {
    if (version_compare((string) getenv('STCL_GLPI_VERSION'), '11.0.0', '>=')) {
        final class SessionManager
        {
            /** @var list<array{plugin: string, pattern: string}> */
            public static array $calls = [];

            public static function registerPluginStatelessPath(string $plugin, string $pattern): void
            {
                self::$calls[] = ['plugin' => $plugin, 'pattern' => $pattern];
            }
        }

        final class Firewall
        {
            public const STRATEGY_NO_CHECK = 'NO_CHECK';

            /** @var list<array{plugin: string, pattern: string, strategy: string}> */
            public static array $calls = [];

            public static function addPluginStrategyForLegacyScripts(
                string $plugin,
                string $pattern,
                string $strategy
            ): void {
                self::$calls[] = [
                    'plugin' => $plugin,
                    'pattern' => $pattern,
                    'strategy' => $strategy,
                ];
            }
        }
    }
}

namespace {
    $version = $argv[1] ?? '';
    if ($version === '') {
        fwrite(STDERR, "Informe a versão GLPI a testar.\n");
        exit(2);
    }

    $root = dirname(__DIR__);
    $failures = [];
    $passes = [];
    $assert = static function (bool $condition, string $message) use (&$failures, &$passes): void {
        if ($condition) {
            $passes[] = $message;
        } else {
            $failures[] = $message;
        }
    };

    define('GLPI_VERSION', $version);
    define('GLPI_ROOT', sys_get_temp_dir() . '/stcl-setup-root-' . preg_replace('/[^0-9.]/', '', $version));
    define('GLPI_PLUGIN_DOC_DIR', sys_get_temp_dir() . '/stcl-setup-files-' . preg_replace('/[^0-9.]/', '', $version));
    define('UPDATE', 2);

    $CFG_GLPI = ['root_doc' => '/glpi'];
    $PLUGIN_HOOKS = [];

    final class Session
    {
        public static function haveRight(string $right, int $action): bool
        {
            return $right === 'config' && $action === UPDATE;
        }
    }

    final class Plugin
    {
        public static int $webDirCalls = 0;

        public static function getWebDir(string $plugin): string
        {
            self::$webDirCalls++;
            return '/glpi/marketplace/' . $plugin;
        }
    }

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

    require $root . '/setup.php';
    require $root . '/hook.php';
    require $root . '/inc/config.class.php';

    $metadata = plugin_version_customlogin();
    $assert(($metadata['version'] ?? null) === '2.2.1', 'Metadados expõem a versão 2.2.1');
    $assert(($metadata['requirements']['glpi']['min'] ?? null) === '10.0.10', 'Metadados expõem GLPI mínimo');
    $assert(($metadata['requirements']['glpi']['max'] ?? null) === '12.0.0', 'Metadados expõem GLPI máximo exclusivo');
    $assert(($metadata['requirements']['php']['min'] ?? null) === '8.3.0', 'Metadados expõem PHP mínimo');

    ob_start();
    $prerequisites = plugin_customlogin_check_prerequisites();
    $prerequisiteMessage = (string) ob_get_clean();
    $expectedSupport = version_compare($version, '10.0.10', '>=')
        && version_compare($version, '12.0.0', '<');
    $assert($prerequisites === $expectedSupport, 'Pré-requisito aceita/rejeita a versão corretamente');
    $assert(
        $expectedSupport ? $prerequisiteMessage === '' : $prerequisiteMessage !== '',
        'Mensagem de pré-requisito é coerente com o resultado'
    );
    $assert(plugin_customlogin_check_config() === true, 'Configuração opcional é aceita');

    plugin_init_customlogin();
    $assert(($PLUGIN_HOOKS['csrf_compliant']['customlogin'] ?? false) === true, 'Plugin declara conformidade CSRF');
    $assert(($PLUGIN_HOOKS['add_javascript']['customlogin'] ?? null) === 'js/customlogin.js', 'Hook JavaScript autenticado registrado');
    $assert(($PLUGIN_HOOKS['add_css']['customlogin'] ?? null) === 'css/customlogin.css', 'Hook CSS autenticado registrado');
    $assert(
        ($PLUGIN_HOOKS['add_javascript_anonymous_page']['customlogin'] ?? null) === 'js/customlogin.js',
        'Hook JavaScript anônimo registrado para a tela de login'
    );
    $assert(
        ($PLUGIN_HOOKS['add_css_anonymous_page']['customlogin'] ?? null) === 'css/customlogin.css',
        'Hook CSS anônimo registrado para a tela de login'
    );

    $selectPluginAsset = static function (bool $anonymous, string $type) use (&$PLUGIN_HOOKS): mixed {
        $hook = match ($type) {
            'css' => $anonymous ? 'add_css_anonymous_page' : 'add_css',
            'js' => $anonymous ? 'add_javascript_anonymous_page' : 'add_javascript',
            default => throw new InvalidArgumentException('Tipo de ativo inválido.'),
        };

        return $PLUGIN_HOOKS[$hook]['customlogin'] ?? null;
    };
    $assert($selectPluginAsset(true, 'js') === 'js/customlogin.js', 'Pipeline anônimo seleciona o JavaScript do plugin');
    $assert($selectPluginAsset(true, 'css') === 'css/customlogin.css', 'Pipeline anônimo seleciona o CSS do plugin');
    $assert($selectPluginAsset(false, 'js') === 'js/customlogin.js', 'Pipeline autenticado seleciona o JavaScript do plugin');
    $assert($selectPluginAsset(false, 'css') === 'css/customlogin.css', 'Pipeline autenticado seleciona o CSS do plugin');
    $assert(($PLUGIN_HOOKS['display_login']['customlogin'] ?? null) === 'plugin_customlogin_display_login', 'Hook de login registrado como fallback');
    $assert(($PLUGIN_HOOKS['config_page']['customlogin'] ?? null) === 'front/config.php', 'Página administrativa registrada por ACL');

    plugin_customlogin_boot();

    if (version_compare($version, '11.0.0', '>=')) {
        $assert(class_exists(\Glpi\Http\Firewall::class), 'Fixture GLPI 11 possui Firewall');
        $assert(count(\Glpi\Http\Firewall::$calls) === 1, 'GLPI 11 registra estratégia de firewall');
        $assert(count(\Glpi\Http\SessionManager::$calls) === 1, 'GLPI 11 registra caminho stateless');

        $firewallCall = \Glpi\Http\Firewall::$calls[0] ?? [];
        $statelessCall = \Glpi\Http\SessionManager::$calls[0] ?? [];
        $assert(($firewallCall['strategy'] ?? null) === \Glpi\Http\Firewall::STRATEGY_NO_CHECK, 'Estratégia pública é NO_CHECK');
        $assert(@preg_match((string) ($firewallCall['pattern'] ?? ''), '/asset.php') === 1, 'Firewall cobre asset.php do GLPI 11');
        $assert(@preg_match((string) ($statelessCall['pattern'] ?? ''), '/config.php') === 1, 'Stateless cobre config.php do GLPI 11');
        $assert(@preg_match((string) ($firewallCall['pattern'] ?? ''), '/front/config.form.php') === 0, 'Firewall não libera o handler administrativo');
        $assert(@preg_match((string) ($statelessCall['pattern'] ?? ''), '/front/config.form.php') === 0, 'Handler administrativo permanece stateful e protegido pelo core');
    } else {
        $assert(!class_exists(\Glpi\Http\Firewall::class), 'GLPI 10 não depende da API de firewall do GLPI 11');
        $assert(!class_exists(\Glpi\Http\SessionManager::class), 'GLPI 10 não depende da API stateless do GLPI 11');
    }

    $webDir = PluginCustomloginConfig::getWebDir();
    if (version_compare($version, '11.0.0', '>=')) {
        $assert($webDir === '/glpi/plugins/customlogin', 'GLPI 11 usa URL canônica /plugins/customlogin');
        $assert(Plugin::$webDirCalls === 0, 'GLPI 11 não chama Plugin::getWebDir() depreciado');
    } else {
        $assert($webDir === '/glpi/marketplace/customlogin', 'GLPI 10 preserva descoberta plugins/marketplace');
        $assert(Plugin::$webDirCalls === 1, 'GLPI 10 usa helper legado quando disponível');
    }

    ob_start();
    plugin_customlogin_display_login();
    $embedded = (string) ob_get_clean();
    $assert(str_contains($embedded, 'id="st-customlogin-config"'), 'Configuração anônima é incorporada em JSON');
    $assert(str_contains($embedded, '"version":"2.2.1"'), 'JSON incorporado informa a versão');
    $assert(str_contains($embedded, '"schema":"3.0"'), 'JSON incorporado informa o schema 3.0');
    $assert(str_contains($embedded, '"promptEnabled":true'), 'JSON incorporado inclui controle do texto de autenticação');
    $assert(str_contains($embedded, '"alignment":"center"'), 'JSON incorporado inclui alinhamento padrão do painel');
    $assert(str_contains($embedded, '"collapsedLogoUrl":null'), 'JSON incorporado inclui logo recolhida opcional');
    $assert(str_contains($embedded, '"sidebarEffectEnabled":false'), 'JSON incorporado mantém efeito lateral desativado por padrão');
    $assert(str_contains($embedded, '"sidebarEffectPreset":"service-tic"'), 'JSON incorporado inclui tema lateral padrão');

    foreach ($passes as $message) {
        echo "[OK] {$version}: {$message}\n";
    }

    if ($failures !== []) {
        foreach ($failures as $message) {
            fwrite(STDERR, "[FAIL] {$version}: {$message}\n");
        }
        fwrite(STDERR, sprintf("\n%d falha(s) na fixture GLPI %s.\n", count($failures), $version));
        exit(1);
    }

    echo sprintf("\nGLPI %s: %d verificações aprovadas.\n", $version, count($passes));
}
