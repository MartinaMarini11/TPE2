 <?php
require_once './app/models/producto.model.php';
require_once './app/views/producto.view.php';
require_once './app/helpers/autenticacion.helper.php';

class ProductoController {
    private $model; 
    private $model_categoria;
    private $view;

    public function __construct() {
        $this->model = new ProductoModel();
        $this->view = new ProductoView();
        $this->model_categoria = new CategoriaModel();
    }

    public function showProductos() {
        $categoria = $this->model_categoria->obtenerTodoCategoria();
        $productos = $this->model->getAllProductos();
        $this->view->showProductos($productos,$categoria);
    }


    function getAllProductos() {
            $db = connect();
            $query = $db->prepare("SELECT productos.*, categorias.nombre as categoria FROM productos JOIN categoria ON productos.id_categoria = categoria.id_categoria");
            $query->execute();
    
            return $query->fetchAll(PDO::FETCH_OBJ);
        
    
    }
   function agregarProducto(){
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $marca = $_POST['marca'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];

        $id = $this->model->insertarProducto($nombre, $descripcion, $marca, $precio, $categoria);

        header("Location: " . BASE_URL); 
    }
    function insertarEdicionDelProducto($id){
        if((isset($_POST['nombre'])&&isset($_POST['descripcion'])&&isset($_POST['marca'])&&isset($_POST['precio'])&&isset($_POST['id_categoria']))&&!empty($_POST['nombre'])&&!empty($_POST['descripcion'])&&!empty($_POST['marca'])&&!empty($_POST['precio'])&&!empty($_POST['id_categoria'])){      
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $marca = $_POST['marca'];
            $precio = $_POST['precio'];
            $id = $_POST['id_categoria'];
            $this->model->insertarEdicionDelProducto($nombre, $descripcion, $marca, $precio, $id);
            header("Location: " . BASE_URL. 'productos');
        }
    }
    function  formEditarProducto($id){
        
        $producto = $this->model->obtengoById($id);
     
        $this->view->formEditarProducto($producto);
}
    
    function productoPorCategoria($id_categoria){
    
    $nombre = $this->model->mostrarLaCategoria($id_categoria);
    $itemsPorCategorias = $this->model->mostrarProductoPorCategoria($id_categoria);
    $this->view->mostrarProductos($itemsPorCategorias, $nombre);
}

    function borrarProducto($id) {
        //$autenticacionHelper = new AutenticacionHelper();
        //$autenticacionHelper->chequearLogeo();

        $id=$this->model->borrarProductoById($id);
        $this->view->obtenerId($id);
        header("Location: " . BASE_URL);
    }

    function verDetalle($id){
        $producto=$this->model->verDetalle($id);
        $this->view->verDetalle($producto);

    }
    
    
   

}