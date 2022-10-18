<?php
require_once './libs/smarty/libs/Smarty.class.php';

class CategoriaView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function categorias($categorias) {
        // asigno variables al tpl smarty
     
        $this->smarty->assign('categorias', $categorias);
        // mostrar el tpl
        $this->smarty->display('categorias.tpl');
    }

    function verCategoria($categorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/verCategoria.tpl');
    }

    function mostrarEditCategoria($categorias){
        $this->smarty->assign('categorias', $categorias); 
        $this->smarty->display('editarCategoria.tpl');
    }
}