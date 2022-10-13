<?php 
require_once 'libs/Smarty.class.php';
class tableView{
    private $smarty;

    public function __construct(){
        $this->smarty= new Smarty();
    }

    function showHome($valores){
        $this->smarty->assign('valores',$valores);
        $this->smarty->assign('titulo', "Summoner's greed");
        $this->smarty->display('table.tpl');
    }
    function showDetailById($detail){
        $this->smarty->assign('detail',$detail);
        foreach($detail as $detalle){
            $this->smarty->assign('titulo',$detalle->nombre);
        }
        $this->smarty->display('Detail.tpl');
    }
    public function showAll($valores){
        $this->smarty->assign('detail',$valores);
        $this->smarty->assign('titulo', "Todos");
        $this->smarty->display('Detail.tpl'); 
    }
}