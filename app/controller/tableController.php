<?php
require_once 'app/model/tableModel.php';
require_once 'app/view/tableView.php';
require_once 'app/helpers/authHelper.php';
class tableController{
    private $model;
    private $view;
    private $authHelper;
    public function __construct(){
        $this->model = new tableModel();
        $this->view = new tableView();
        $this->authHelper = new AuthHelper();
    }

     function showHome($all){
            $this -> authHelper -> isLoggedIn();
            $valores =$this->model->getAllData();
            if ($all == false){
                $this->view->showHome($valores); 
            }
            else {
                $this->view->showAll($valores);
            }
    }


     function showDetail($id){
            $this -> authHelper -> isLoggedIn();
            $detail = $this->model->getDetailById($id);
            $modif = false;
            $this->view->showDetailById($detail, $modif);
    }


     function goToAdd(){
            $this -> authHelper -> checkLoggedIn();
            $valores =$this->model->getAllData();
            $this->view->showInsert($valores); 
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
            header('location: '. BASE_URL . 'agregar');
    }


    public function tableDelete($id){
            $this->model->deleteTable($id);
            header('location: '. BASE_URL . '/agregar');
    }


    public function editTable($id){
            $this->authHelper-> isLoggedIn();
            $detail = $this->model->getDetailById($id);
            $modif = true;
            $this->view->showDetailById($detail, $modif);
    }


    public function editRow($id){
            $nombre = $_POST['name'];
            $category = $_POST['category'];
            $elemento = $_POST['elemento'];
            $velocidad = $_POST['speed'];
            $rendimiento = $_POST['rendimiento'];
            $habilidad = $_POST['habilidad'];
            $this->model->editTable($id , $nombre ,$category,$elemento,$velocidad,$rendimiento,$habilidad);
            header('location: '. BASE_URL . '/detail/'. $id);
    }

    
    public function filterTable(){ 
            $this -> authHelper -> isLoggedIn();
            $categoria = $_POST['categoria'];
            $rendimiento = $_POST['rendimiento'];
            if($categoria != "default" && $rendimiento != "default"){
                    $valores = $this->model->getFilter($categoria,$rendimiento);
                    $this->view->showAll($valores);
            }elseif($categoria == "default" && $rendimiento != "default"){
                    $valores = $this->model->getRendimiento($rendimiento);
                    $this->view->showAll($valores);
                
            }elseif($categoria !="default" && $rendimiento =="default"){
                    $valores = $this->model->getCategory($categoria);
                    $this->view->showAll($valores);
            }
            else{
                    $valores = $this->model->getAllData();
                    $this->view->showAll($valores);
                }
    }
}