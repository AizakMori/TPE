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
    public function tableAdd(){
        $numero = $_POST['id'];
        $nombre = $_POST['name'];
        $elemento = $_POST['element'];
        $category = $_POST['category'];
        $velocidad = $_POST['speed'];
        $rendimiento = $_POST['rendimiento'];
        $habilidad = $_POST['habilidad'];
        $this->model->insertTable($numero,$nombre, $elemento,$category,$velocidad,$rendimiento,$habilidad);
        header('location '. BASE_URL);
    }
    public function tableDelete($id){
        $this->model->deleteTable($id);
        // de momento para refrescar y si aprendo otra forma
        $valores = $this->model->getAllData();
        $this->view->showAll($valores);
    }
}