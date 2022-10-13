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
        $id = $params[1];
        $controller->showDetail($id);
        break;
    case 'all':
        $controller = new tableController();
        $controller->showAll();
        break;
    case 'add':
        $controller = new tableController();
        $controller-> tableAdd();
        break;
    case 'delete':
        $controller = new tableController();
        $id = $params[1];
        $controller-> tableDelete($id);
        break;
    default: 
    echo 'error 404';
} ?>