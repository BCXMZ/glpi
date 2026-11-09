<?php

// Development server for the isolated GLPI testing environment.
if (PHP_SAPI !== 'cli-server') {
    http_response_code(404);
    exit;
}

require_once dirname(__DIR__, 3) . '/vendor/autoload.php';
\Glpi\Application\Environment::set(\Glpi\Application\Environment::TESTING);
header('X-Branding-Test-Environment: testing');
require dirname(__DIR__, 3) . '/public/index.php';
// Do not return false: the GLPI kernel has already served the response.
