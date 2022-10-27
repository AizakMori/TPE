<?php
require_once 'app/model/homeModel.php';
require_once 'app/view/homeView.php';
require_once 'app/helpers/authHelper.php';
class homeController{
    private $model;
    private $view;
    private $authHelper;
    public function __construct(){
        $this->model = new tableModel();
        $this->view = new tableView();
        $this->authHelper = new AuthHelper();
    }
    function getAllData(){
        $this -> authHelper -> isLoggedIn();
        $valores =$this->model->getAllData();
        return $valores;
    }
     function showHome(){
        $this->view->showHome(); 
    }
    function showAll(){
        $valores = $this -> getAllData();
        $this->view->showAll($valores);
    }

    /* --------------------------------aca comienza el control de categorias----------------------------*/
    function showCategories(){
        $category = $this->model->getCategories();
        $this->view->showCategories($category);
    }
    function showById($id){
        $category = $this->model->getCategory($id);
        $this->view->showCategory($category);
    }













     function showDetail($id){
            $this -> authHelper -> isLoggedIn();
            $detail = $this->model->getDetailById($id);
            $modif = false;
            $this->view->showDetailById($detail, $modif);
    }


     function goToAdd($error = null){
                $category = $this->model->getCategories();
            $this -> authHelper -> checkLoggedIn();
            $valores =$this->model->getAllData();
            $this->view->showInsert($valores, $category); 
    }
    

    public function tableAdd(){
                if(!empty($_POST["id"]) && !empty($_POST["name"]) && !empty($_POST["element"])&& !empty($_POST["speed"]) && !empty($_POST["habilidad"])){
                        $invocacion = new stdClass();
                        $invocacion->id_puntos = $_POST['id'];
                        $invocacion->nombre = $_POST['name'];
                        $invocacion->elemento = $_POST['element'];
                       
                        $invocacion->velocidad = $_POST['speed'];
                        
                        $invocacion->habilidad = $_POST['habilidad'];
                        
                        $this->model->insertTable($invocacion);
                        header('location: '. BASE_URL . 'add');
                }else{
                        header('location: '. BASE_URL . 'add');
                }
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