<?php 
require_once 'libs/Smarty.class.php';
class tableView{
    private $smarty;

    public function __construct(){
        $this->smarty= new Smarty();
    }
    function showHome(){
        $this->smarty->assign('titulo', "Summoner's greed");
        $this->smarty->display('home.tpl');
    }
    public function showInsert($valores,$category, $error){
        $this->smarty->assign('categoria',$category);
        $this->smarty->assign('detail',$valores);
        $this->smarty->assign('error', $error);
        $this->smarty->assign('titulo', "Todos");
        $this->smarty->display('formAdd.tpl'); 
    }

    /* ------------------------------- categorias --------------------------------- */
    public function showCategories($categories, $resp = null){
        $this->smarty->assign('titulo', "Categorias");
        $this->smarty->assign('categories',$categories);
        $this->smarty->assign('id',false);
        $this->smarty->assign('respuesta', $resp);
        $this->smarty->display('categories.tpl');
    }
    public function showCategory($categories, $category, $resp = null){
        $this->smarty->assign('category', $category);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('titulo', "Categoria");
        $this->smarty->assign('respuesta', $resp);
        $this->smarty->assign('id',true);
        $this->smarty->display('categories.tpl');
    }
    public function showCategoryEdit($category,$id){
        $this->smarty->assign('category', $category);
        $this->smarty->assign('titulo', "Editar categoria");
        $this->smarty->assign('id', $id);
        $this->smarty->display('editCategory.tpl');
    }


/*------------------------------------invocacion----------------------- */
public function showAll($valores){
    $this->smarty->assign('detail',$valores);
    $this->smarty->assign('titulo', "Todos");
    $this->smarty->assign('edit', 0);
    $this->smarty->display('Detail.tpl'); 
}

    function showDetailById($detail, $categories = null){
            $this->smarty->assign('detail',$detail);
            $this->smarty->assign('categories',$categories);
            foreach($detail as $detalle){
                $this->smarty->assign('titulo',$detalle->nombre);
                $this->smarty->assign('id',$detalle->id_puntos);
            }
            $this->smarty->display('Detail.tpl');
    }
}