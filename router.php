<?php
require_once './app/controllers/producto.controller.php';
require_once './app/controllers/categoria.controller.php';
require_once './app/controllers/autenticacion.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['productos', productos, ]
$params = explode('/', $action);

// instancio el controller que existe 
$productoController = new ProductoController();
$categoriaController = new CategoriaController();
$autenticacionController = new AutenticacionController();

// tabla de ruteo
switch ($params[0]) {
    case 'home':
        $productoController->showProductos();
        break;
    case 'agregarProducto':
        $productoController->agregarProducto();
        break;
    case 'borrar':
        // obtengo el parametro de la acción
        $productoController->borrarProducto($params[1]);
        break;
    case 'acceso':
        $autenticacionController = new AutenticacionController();
        $autenticacionController->mostrarFormularioAcceso();
        break;
    case 'validar':
        $autenticacionController = new AutenticacionController();
        $autenticacionController->validarUsuario();
        break;
    case 'cerrarSesion':
        $autenticacionController = new AutenticacionController();
        $autenticacionController->cerrarSesion();
        break;
    case 'verDetalle':
        $productoController->verDetalle($params[1]);
        if($params[1]=="productos"){
            header("Location: " . BASE_URL);
        }
        break;
    case 'volverAlHome':
        $productoController-> showProductos();  
        break; 
    case  'editarProducto':
        $id = $params[1];
        $productoController->insertarEdicionDelProducto($id);
       break;
    case 'productoPorCategoria':
        $muralsController->ProductoPorCategoria($params[1]);
        break;
    case 'editarCategoria':
        $categoriaController-> mostrarFormEditar($params[1]);
        if($params[1]=="categorias"){
            header("Location: " . BASE_URL);
        }
        break;
    case 'categorias';
        $categoriaController->mostrarCategoria();
        break;
    case 'verCategoriaId':
        $categoriaController->verCategoriaId($params[1]);
        if($params[1]=="productos"){
            header("Location: " . BASE_URL);
        }
    case 'eliminarCategoria':
        $categoriaController->eliminarCategoria($params[1]);
        break;
    case 'agregarCategoria':
        $categoriaController-> agregarCategoria();
        break;
    default:
        echo('404 Page not found');
        break;
}
