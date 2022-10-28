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
    public function getAllData(){
        $this -> authHelper -> isLoggedIn();
        $valores =$this->model->getAllData();
        return $valores;
    }
     function showHome(){
        $this -> authHelper -> isLoggedIn();
        $this->view->showHome(); 
    }
    function showAll(){
        $this -> authHelper -> isLoggedIn();
        $valores = $this -> getAllData();
        $this->view->showAll($valores);
    }
    function showDetail($id){
        $this -> authHelper -> isLoggedIn();
        $detail = $this->model->getDetailById($id);
        $modif = null;
        $this->view->showDetailById($detail, $modif);
    }
    function goToAdd($error = null){
        $this -> authHelper -> isLoggedIn();
        $category = $this->model->getCategories();
        $valores =$this->model->getAllData();
        $this->view->showInsert($valores, $category, $error); 
    }

    /* ----------------------------------aca comienza el control de categorias---------------------------------------*/
    function showCategories(){
        $this -> authHelper -> isLoggedIn();
        $category = $this->model->getCategories();
        $this->view->showCategories($category);
    }
    function showById($id){
        $category = $this->model->getCategory($id);
        $categories = $this->model->getCategories();
        $this->view->showCategory($categories, $category);
    }
    function categoryAdd(){
        if(!empty($_POST['newcategory']) && !empty($_POST['rendimiento'])){
                $newcategory = new stdClass();
                $newcategory->category = $_POST['newcategory'];
                $newcategory->rendimiento = $_POST['rendimiento'];
                $this->model-> insertCategory($newcategory);
        }
        header('location: '. BASE_URL . 'categories/list');
    }
    function categoryEdit($id){
        $this->authHelper->checkLoggedIn();
        $this -> authHelper -> isLoggedIn();
        $category = $this->model->getCategoryById($id);
        $this->view->showCategoryEdit($category, $id);
    }
    function categoryUpdate($id){
        if(!empty($_POST['editcategory']) && !empty($_POST['rendimiento'])){
            $category= new stdClass();
            $category->category = $_POST['editcategory'];
            $category->rendimiento=$_POST['rendimiento'];
            $this->model->updateCategory($category, $id);
        }
        header('location: '. BASE_URL . 'categories/list');
    }
    function categoryDelete($id){
        $this->authHelper->checkLoggedIn();
        $resp = $this->model->deleteCategory($id);
        $category = $this->model->getCategories();
        $this->view->showCategories($category, $resp);
    }




    /*-------------------------------------------------------invocacion------------------------------------------ */
   
    public function invocationAdd(){
        $user = $this->authHelper->checkLoggedIn();
        if(isset($user)){
        if(!empty($_POST["id"]) && !empty($_POST["name"]) && !empty($_POST["element"])&& !empty($_POST["speed"]) && !empty($_POST["habilidad"])){
            $invocacion = new stdClass();
            $invocacion->id_puntos = $_POST['id'];
            $invocacion->nombre = $_POST['name'];
            $invocacion->elemento = $_POST['element'];
            $invocacion->velocidad = $_POST['speed'];
            $invocacion->habilidad = $_POST['habilidad'];
            $this->model->insertInvocation($invocacion);
            header('location: '. BASE_URL . 'all/list');
        }else{
            echo "debe completar todos los campos!";
        }}
        else{header('location: ' . BASE_URL . 'login');}
    }
    public function editInvocation($id){
        $this->authHelper-> isLoggedIn();
        $detail = $this->model->getDetailById($id);
        $categories = $this->model->getCategories();
        $this->view->showDetailById($detail, $categories);
    }
    public function invocationEdit($id){
        $user = $this->authHelper-> checkLoggedIn();
        if(isset($user)){
            if(!empty($_POST["id"]) && !empty($_POST["name"]) && !empty($_POST["element"])&& !empty($_POST["speed"]) && !empty($_POST["habilidad"])){
                $invocacion = new stdClass();
                $invocacion->id_puntos = $_POST['id'];
                $invocacion->nombre = $_POST['name'];
                $invocacion->elemento = $_POST['element'];
                $invocacion->velocidad = $_POST['speed'];
                $invocacion->habilidad = $_POST['habilidad'];
                $this->model->editTable($invocacion);}
                else{ 
                    echo 'ERROR: Complete todos los campos del formulario para ingresar los datos.';
                }
                header('location: '. BASE_URL . 'all/list');
            }else {
                header('location: ' . BASE_URL . 'login');
            }
        }
        
        public function invocationDelete($id){
                $this->model->deleteInvocation($id);
                header('location: '. BASE_URL . 'all/list');
        }
}