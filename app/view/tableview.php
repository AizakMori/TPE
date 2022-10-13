<?php 
require_once 'libs/Smarty.class.php';
class tableView{
    private $smarty;

    public function __construct(){
        $this->smarty= new Smarty();
    }

    function showHome($valores){
        $this->smarty->assign('valores',$valores);
        $this->smarty->display('table.tpl');
    }
    function showDetail($detail){
        $this->smarty->assign('valores',$valores);
        $this->smarty->display('Detail.tpl');
    }
}