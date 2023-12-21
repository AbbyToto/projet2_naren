// $url = $_SERVER['REQUEST_URI'];

// $explodeUrl = explode('/', $url);
// var_dump($explodeUrl[3]);
// switch ($explodeUrl[3]) {
// case 'products':
// $page = new PageController;
// $page->products();

// break;
// case 'signup':
// $page = new PageController;
// $page->signup();
// break;
// default:
// $page = new PageController;
// $page->homePage();
// break;
//
<?php
session_start();

define("ROOT", str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

// require_once ROOT.'app/Controller.php';
// require_once ROOT.'app/Model.php';
require_once(ROOT . 'app/' . 'chargement.php');

$params = explode('/', $_GET['p']);

if ($params[0] != null) {
    $controller = $params[0];
    $controller = ucfirst($controller);
    //require_once (ROOT.'controllers/'.$controller.".php");
    $controller = new $controller();
    $action = $params[1];
    if (method_exists($controller, $action)) {
        unset($params[0]);
        unset($params[1]);
        call_user_func_array([$controller, $action], $params);
        // $controller->$action();
    } else {
        echo "Not found";
    }
}


?>