<?php
require_once './app/models/usuario.model.php';
require_once './app/views/autenticacion.view.php';

class AutenticacionController {
    private $view;
    private $model;
    
    public function __construct() {
        $this->model = new UsuarioModel();
        $this->view = new AutenticacionView();
    }

    public function mostrarFormularioAcceso() {
        $this->view->mostrarFormularioAcceso();
    }

    public function validarUsuario() {
        // toma los datos del form
        $email = $_POST['email'];
        $password = $_POST['password'];
    

        // busco el usuario por email
        $usuario = $this->model->obtenerUsuarioPorEmail($email);

        // verifico que el usuario existe y que las contraseñas son iguales
        if ($usuario && password_verify($password, $usuario->password)) {

            // inicio una session para este usuario
            session_start();
            $_SESSION['USER_ID'] = $usuario->id;
            $_SESSION['USER_EMAIL'] = $usuario->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL);
        } else {
            // si los datos son incorrectos muestro el form con un error
           $this->view->mostrarFormularioAcceso("El usuario o la contraseña no existe.");
        } 
    }

    public function cerrarSesion() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}