<?php 
require_once 'app/controller/homeController.php';
require_once 'app/controller/userController.php';

$controller = new homeController();
$loginController = new authController();

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action']; 
}

$params = explode('/', $action);

switch ($params[0]){
    case 'home':
        $controller->showHome();
        break;
    case 'detail':
        $id = $params[1];
        $controller->showDetail($id);
        break;
    case 'all':
        switch($params[1]){
            case 'list':
                $controller->showAll();
                break;
            case 'modif':
                $controller->editInvocation($params[2]);
                break;
            case 'delete':
                $controller-> invocationDelete($params[2]);
                break;
            case 'edit':
                $controller->invocationEdit($params[2]);
                break;
            case 'add':
                $controller-> goToAdd($params[0]);
                break;
            case 'añadir':
                $controller->invocationAdd();
                break;
        }
        break;
    case'categories':
        switch($params[1]){
            case "list":
                $controller->showCategories();
                break;
            case 'show':
                $controller->showById($params[2]);
                break;
            case 'add':
                $controller-> goToAdd($params[0]);
                break;
            case 'añadir':
                $controller->categoryAdd();
                break;
            case 'modificar':
                $controller->categoryEdit($params[2]);
                break;
            case 'update':
                $controller->categoryUpdate($params[2]);
                break;
            case 'delete':
                $controller->categoryDelete($params[2]);
                break;
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
    default:
    echo 'error 404';
} ?>