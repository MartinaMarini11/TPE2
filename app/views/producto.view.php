<?php
require_once './libs/smarty/libs/Smarty.class.php';

class ProductoView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showProductos($productos,$categoria) {
        // asigno variables al tpl smarty
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->assign('productos', $productos);
        
        // mostrar el tpl
        $this->smarty->display('productos.tpl');
    }
    function editarProducto($productos, $categoria){
        $this->smarty->assign('categoria', $categoria); 
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('editarProducto.tpl');
    }

    function obtenerId($id){
        $this->smarty->assign('id', $id);
    }

    function verDetalle($producto){
        $this->smarty->assign('producto', $producto);
        $this->smarty->display('templates/verDetalle.tpl');
    }
}