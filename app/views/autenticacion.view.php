<?php
require_once './libs/smarty/libs/Smarty.class.php';

class AutenticacionView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function mostrarFormularioAcceso($error = null) {
        $this->smarty->assign("error", $error);
        $this->smarty->display('acceso.tpl');
    }
}