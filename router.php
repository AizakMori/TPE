<?php 
require_once 'app/controller/tableController.php';
require_once 'app/controller/userController.php';

$controller = new tableController();
$loginController = new authController();

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action']; 
}

$params = explode('/', $action);

switch ($params[0]){
    case 'home':
        if(empty($params[1])){
            $controller->showHome();
        }else{
            $controller->showAll();
        }
        break;
    case 'login':
        $loginController->showLogin();
        break;
    case 'detail':
        $id = $params[1];
        $controller->showDetail($id);
        break;
    case 'agregar':
        $controller->insertRow();
        break;
    case 'add':
        $controller-> tableAdd();
        break;
    case 'delete':
        $id = $params[1];
        $controller-> tableDelete($id);
        break;
    case 'modif':
        $id = $params[1];
        $if = 1;
        $controller->editTable($id,$if);
        break;
    case 'edit':
        $id = $params[1];
        $controller->editRow($id);
        break;
    case 'filtro':
            $controller-> filterTable();
        break;
    default:
    echo 'error 404';
} ?>