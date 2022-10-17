<?php
require_once 'libs/smarty.class.php';
class loginView {
    private $smarty;

    public function __construct(){
        $this->smarty= new Smarty();
    }

    public function showLogin($session, $error = ""){
        $this -> smarty -> assign('error', $error);
        $this -> smarty -> assign('session', $session);
        $this -> smarty -> display('./templates/login.tpl');
    }
    public function showHome(){
        header('location: ' . BASE_URL);
    }
    public function showSignIn($session, $error = ""){
        $this -> smarty -> assign('error', $error);
        $this -> smarty -> assign('session', $session);
        $this->smarty->display('templates/signIn.tpl');
    }
    public function failSignIn(){
        header('location: ' . BASE_URL . 'signIn');
    }
}