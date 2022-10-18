<?php

class AutenticacionHelper {

     /**
     * Verifica que el usuario este logueado y si no lo está
     * lo redirige al login.
     */
    public function chequearLogueo() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }  

        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . 'acceso');
            die();
        }
    } 
}