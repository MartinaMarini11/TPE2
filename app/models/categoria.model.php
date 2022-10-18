<?php

class CategoriaModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe_belleza;charset=utf8', 'root', '');
    }

    public function obtenerTodoCategoria() {

        $query = $this->db->prepare("SELECT * FROM categoria");
        $query->execute();

        // 3. obtengo los resultados
        $categorias = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $categorias;
    }

     function obtenerLaCategoria($id){
        $query = $this->db->prepare("SELECT * FROM categoria WHERE id_categoria = ?");
        $query->execute([$id]);

        // 3. obtengo los resultados
        $categoria = $query->fetch(PDO::FETCH_OBJ);
        return $categoria;
     }

    function insertarCategoria($categoria){
        $query = $this->db->prepare("INSERT INTO categoria (categoria) VALUES (?)");
        $query->execute([$categoria]);
         return $this->db->lastInsertId();
    }

    function actualizarCategorias($id, $categoria){
        
        $query = $this->db->prepare("UPDATE categoria SET categoria=? WHERE id_categoria=?");
        $query->execute([$id, $categoria]);
    }

    function eliminarCategoria($id) {
        $query = $this->db->prepare("DELETE FROM categoria WHERE id_categoria= ?");
        $query->execute(array($id));

    }
    
}