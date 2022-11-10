<?php

class AutenticacionHelper {

     /**
     * Verifica que el usuario este logueado y si no lo está
     * lo redirige al login.
     */
    public function chequearLogueo() {
            session_start();

        if ((!isset($_SESSION['IS_LOGGED']))){
            header("Location: " . BASE_URL . 'acceso');
            die();
        }
    } 
}