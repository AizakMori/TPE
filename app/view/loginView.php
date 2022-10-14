<?php
require_once 'libs/smarty.class.php';
class loginView {
    private $smarty;

    public function __construct(){
        $this->smarty= new Smarty();
    }

    public function showLogin(){
        $this->smarty->display('templates/login.tpl');
    }
}