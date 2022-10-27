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
        $all;
        if(empty($params[1])){
            $all = false;
            $controller->showHome($all);
        }else{
            $all = true;
            $controller->showHome($all
        );
        }
        break;
    case 'login':
        $loginController->showLogin();
        break;
    case 'validate':
        $loginController->validateLogin();
        break;
    case 'logout':
        $loginController->logOut();
        break;
    case 'signin':
        $loginController->showSignIn();
        break;
    case 'adduser':
        $loginController->addUser();
        break;
    case 'detail':
        $id = $params[1];
        $controller->showDetail($id);
        break;
    case 'agregar':
        if(!empty($params[1])){
            if($params[1] == "invocacion"){
                $controller->goToAddInvocation();
            }else{
                $controller->goToAddCategory();
            }
        }else{
            $controller->goToAdd();
        }
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
        $controller->editTable($id);
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