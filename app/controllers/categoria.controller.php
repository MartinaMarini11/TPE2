<?php
require_once './app/models/categoria.model.php';
require_once './app/views/categoria.view.php';
require_once './app/models/producto.model.php';

class CategoriaController {
    private $model; 
    private $view;
    private $modelProducto;

    public function __construct() {
        $this->model = new CategoriaModel();
        $this->view = new CategoriaView();
        $this->modelProducto = new ProductoModel();

    }

      public function mostrarCategoria() {
        session_start();
        $categorias= $this->model->obtenerTodoCategoria();
        $this->view->categorias($categorias);
    }
    function obtenerCategorias() {
        $db = connect();
        $query = $db->prepare("SELECT categoria.*, categoria.id_categoria as categoria FROM productos JOIN categoria ON productos.id_categoria = categoria.id_categoria");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    

}

    function agregarCategoria() {
        session_start();
        $autenticacionHelper = new AutenticacionHelper();
        $autenticacionHelper->chequearLogueo();
        
        // TODO: validar entrada de datos
        $id = $_POST['id_categoria'];
        $categoria = $_POST['categoria'];
             $id = $this->model->insertarCategoria($categoria, $id);
             header("Location: " . BASE_URL. 'categorias');
    }
            

    function mostrarFormEditar($id){   
       
        $producto = $this->modelProducto->getAllProductos();
        $categoria =  $this->model->obtenerLaCategoria($id);
        $this->view->mostrarEditCategoria($categoria, $producto);

    }

    function editarCategoria($id){   
    
        if (!empty($_POST['categoria'])) {
            $categoria = $_POST['categoria'];

            $this->model->actualizarCategorias( $categoria);
            header("Location:" . BASE_URL . 'categorias');        
        }
       
    }

    function eliminarCategoria($id){

        $autenticacionHelper = new AutenticacionHelper();
        $autenticacionHelper->chequearLogueo();
        
        $this->model->eliminarCategoria($id);
        header("Location: " . BASE_URL . 'categorias');
    }
    
}
    


 


