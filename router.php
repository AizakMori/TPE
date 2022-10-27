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
    case 'all':
        $controller->showAll();
        break;
    case'categories':
        switch($params[1]){
            case "list":
                $controller->showCategories();
                break;
            case 'show':
                $controller->showById($params[2]);
                break;
        }
        break;
    case 'detail':
        $id = $params[1];
        $controller->showDetail($id);
        break;
    // case 'add':
    //     if(!empty($params[1])){
    //         if($params[1] == "invocacion"){
    //             $controller->goToAddInvocation();
    //         }else if($params[1] == "categoria"){
    //             $controller->goToAddCategory();
    //         }
    //         else if($params[1]=="sucess"){
    //             $controller->goToAdd("creado con exito!");
    //         }
    //         else {
    //             $controller->goToAdd("hacen falta datos!");
    //         }
    //     }else{
    //         $controller->goToAdd("Cree su invocacion");
    //     }
    //     break;
    case 'add':
            $controller-> goToAdd();
        break;
    case 'añadir':
        $controller->tableAdd();
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