<?php 
require_once 'app/controller/tableController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action']; 
}

$params = explode('/', $action);

switch ($params[0]){
    case 'home':
        $controller = new tableController();
        $controller->showHome();
        
        break;
    case 'detail':
        $controller = new tableController();
        $controller->showDetail();
        break;
    default: 
    echo 'error 404';
} ?>