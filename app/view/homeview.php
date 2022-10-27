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
    public function showAll($valores){
        $this->smarty->assign('detail',$valores);
        $this->smarty->assign('titulo', "Todos");
        $this->smarty->assign('edit', 0);
        $this->smarty->display('Detail.tpl'); 
    }
    /* ------------------------------- categorias --------------------------------- */
    public function showCategories($categories){
        $this->smarty->assign('titulo', "Categorias");
        $this->smarty->assign('categories',$categories);
        $this->smarty->display('categories.tpl');
    }
    public function showCategory($categories){
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('titulo', "Categoria");
        $this->smarty->display('category.tpl');
    }
















    function showDetailById($detail, $modif){
            $this->smarty->assign('detail',$detail);
            $this->smarty->assign('edit',$modif);
            foreach($detail as $detalle){
                $this->smarty->assign('titulo',$detalle->nombre);
                $this->smarty->assign('id',$detalle->id_puntos);
            }
            $this->smarty->display('Detail.tpl');
    }
    public function showInsert($valores,$category){
        $this->smarty->assign('categoria',$category);
        $this->smarty->assign('detail',$valores);
        $this->smarty->assign('titulo', "Todos");
        $this->smarty->display('formAdd.tpl'); 
    }
}