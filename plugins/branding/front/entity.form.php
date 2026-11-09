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

require_once(__DIR__ . '/../../../inc/includes.php');
require_once(__DIR__ . '/../inc/config.class.php');

Session::checkRight(Config::$rightname, UPDATE);

if (!Plugin::isPluginActive('branding')) {
    http_response_code(404);
    exit;
}

$entities_id = filter_var($_POST['entities_id'] ?? null, FILTER_VALIDATE_INT, ['options' => ['min_range' => 0]]);
if ($entities_id === false) {
    http_response_code(400);
    exit;
}

$entity = new Entity();
if (!$entity->getFromDB($entities_id)) {
    Session::addMessageAfterRedirect(__('Invalid item'), false, ERROR);
    Html::back();
}

if (!Session::haveAccessToEntity($entities_id)) {
    Session::addMessageAfterRedirect(__('You do not have access to this entity.'), false, ERROR);
    Html::back();
}

if (empty($_POST['update'])) {
    Html::redirect($entity->getFormURLWithID($entities_id) . '&forcetab=' . rawurlencode('PluginBrandingEntity$1'));
}

// CSRF is already validated by GLPI's CheckCsrfListener before this script runs; do not call validateCSRF again
// (the token is single-use and would fail on a second check).

if (PluginBrandingConfig::processEntityFormPost($entity)) {
    Session::addMessageAfterRedirect(__('Branding configuration saved.'), false, INFO);
} else {
    Session::addMessageAfterRedirect(__('Some branding images could not be saved.'), false, ERROR);
}

Html::redirect($entity->getFormURLWithID($entities_id) . '&forcetab=' . rawurlencode('PluginBrandingEntity$1'));
