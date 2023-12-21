<?php
session_start();

define("ROOT", str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
define("ROOTDOMAINE", "/projet2_naren/");

// require_once ROOT.'app/Controller.php';
// require_once ROOT.'app/Model.php';
require_once(ROOT . 'app/' . 'chargement.php');

$params = explode('/', $_GET['p']);

if ($params[0] != null) {
    $controller = $params[0];
    $controller = ucfirst($controller);
    $controller = new $controller();
    $action = $params[1];
    if (method_exists($controller, $action)) {
        unset($params[0]);
        unset($params[1]);
        call_user_func_array([$controller, $action], $params);
        // $controller->$action();
    } else {
        http_response_code(404);
        echo "La page recherchee n'existe pas";
    }
}
