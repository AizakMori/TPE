<?php
require_once 'app/model/tableModel.php';
require_once 'app/view/tableView.php';
class tableController{
    private $model;
    private $view;
    public function __construct(){
        $this->model = new tableModel();
        $this->view = new tableView();
    }

    public function showHome(){
        $valores =$this->model-> getAllData();
        $this->view->showHome($valores); 
    }
    public function showDetail($id){
        $detail = $this->model->getDetailById($id);
        $this->view->showDetailById($detail);
    }
    public function showAll(){
        $valores = $this->model->getAllData();
        $this->view->showAll($valores);
    }
}