<?php


class ProductoModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe_belleza;charset=utf8', 'root', '');
    }

    /**
     * Devuelve la lista de tareas completa.
     */
    public function getAllProductos() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM productos");
        $query->execute();

        // 3. obtengo los resultados
        $productos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $productos;
    }

    public function obtengoById($id){
        $query = $this->db->prepare("SELECT * FROM productos WHERE `id`=$id");
        $query->execute([$id]);
        $registroDeProducto = $query->fetchAll(PDO::FETCH_OBJ);
        return $registroDeProducto;
    }
    public function insertarEdicionDelProducto($nombre, $descripcion, $marca, $precio, $id){
        
        $query = $this->db->prepare("UPDATE `productos` SET nombre=?, descripcion=?, marca=?, precio=?, id_categoria=? WHERE id=?");
        $query->execute([$nombre, $descripcion, $marca, $precio, $id]);
        
        
}

    function mostrarProductoPorCategoria($id){
        $query = $this->db->prepare('SELECT * FROM productos WHERE id_categoria = ?');
        $query->execute([$id]);
        $productoPorCategoria = $query->fetchAll(PDO::FETCH_OBJ);
        return $productoPorCategoria;
    }

    /**
     * Inserta una tarea en la base de datos.
     */
    function insertarProducto($nombre, $descripcion, $marca, $precio, $categoria) {
        $query = $this->db->prepare("INSERT INTO productos (nombre, descripcion, marca, precio, id_categoria) VALUES (?, ?, ?, ?, ?)");
        $query->execute([$nombre, $descripcion, $marca, $precio, $categoria]);
         
        

        return $this->db->lastInsertId();
    }
    
     function borrarProductoById($id) {
        $query = $this->db->prepare('DELETE FROM productos WHERE id = ?');
        $query->execute(array($id));
    }

    function verDetalle($id){
        $query = $this->db->prepare('SELECT * FROM productos JOIN categoria on productos.id_categoria = categoria.id_categoria WHERE id=?' );
        $query->execute([$id]);
        $producto = $query->fetch(PDO::FETCH_OBJ);

        return($producto);
    }
}

