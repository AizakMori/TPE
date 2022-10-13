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

    function showHome(){
        $valores = $this->model->getValores();
        $this->view->showHome($valores); 
    }
    function showDetail($id){
        $detail = $this->model->getDetailById($id);
        $this->view->showDetail($detail);
    }
}