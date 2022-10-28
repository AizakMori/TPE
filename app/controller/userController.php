<?php
require_once 'app/view/loginView.php';
require_once 'app/model/userModel.php';
require_once 'app/helpers/authHelper.php';
class authController{
    private $model;
    private $view;
    private $authHelper;

    public function __construct(){
            $this->model = new userModel();
            $this->view= new loginView();
            $this->authHelper = new authHelper();
    }
    public function showLogin(){
                $this -> view -> showLogin($error = null);
    }


    public function showSignin(){
            $this -> view -> showSignin();
    }



    public function addUser(){
        $user = $this -> authHelper -> checkLoggedIn();
        if(isset($user) && !empty($_POST['email']) && !empty($_POST['password'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $passwordUser = password_hash($password, PASSWORD_ARGON2ID);
                $user = $this -> model -> getUser($email);
            if (!$user) {
                    $this->model->add($name, $email, $passwordUser);
                    $this -> view -> showLogIn("Usuario Creado");
                }else{
                    $this -> view -> failSignIn();
            }  
        }
        else{
                $this -> view -> failSignIn();
        }
    }

    public function logout(){
        $this -> authHelper -> logout();
        $this -> authHelper -> isLoggedIn();
        header("location: ".BASE_URL);
    }


    public function validateLogin(){
        $user = $this -> authHelper -> isLoggedIn();
        if(!isset($user) && !empty($_POST['email']) && !empty($_POST['password'])){
            $email = $_POST['email'];
            $userPassword = $_POST['password'];
            $user = $this -> model -> getUser($email);
            if($user and password_verify($userPassword, $user->password)){
                session_start();
                if($user->id == 1){
                    $_SESSION["USER_MAIL"] = $user -> email;
                    $_SESSION["USER_ID"] = $user -> id;
                    $_SESSION["USER_NAME"] = $user -> nombre;
                    $_SESSION["logged"] = true;
                    $_SESSION["USER_ADMIN"]=true;
                }else{
                $_SESSION["USER_MAIL"] = $user -> email;
                $_SESSION["USER_ID"] = $user -> id;
                $_SESSION["USER_NAME"] = $user -> nombre;
                $_SESSION["logged"] = true;}
                $this -> view -> showHome();
            }else{
                $resp = "verifique sus datos!";
                $this -> view -> showLogin($resp);
            }
        }else{
            $resp = "su usuario no existe, cree uno! ;)";
            $this -> view -> showLogin($resp);
        }
    }
}