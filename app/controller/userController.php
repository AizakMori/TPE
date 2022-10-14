<?php
require_once 'app/view/loginView.php';
require_once 'app/model/userModel.php';
class authController{
    private $model;
    private $view;
    private $user;
    private $mail;
    public function __construct(){
        $this->model = new userModel();
        $this->view= new loginView();
    }
    public function showLogin(){
        $this->view->showLogin();
    }
}