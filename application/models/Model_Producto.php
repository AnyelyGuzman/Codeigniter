<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Producto extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function getAll()
    {
        $sql = "SELECT * FROM productos";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function agregar($precio, $nombre, $img, $cant_disponible, $descripcion)
    {
        $sql="INSERT INTO productos(precio,nombre,img,cantidad_disponible,descripcion)
        VALUES ('$precio', '$nombre', '$img', '$cant_disponible', '$descripcion')";
        $query = $this->db->query($sql);
        return $query;
    }

    public function editar($id, $precio, $nombre, $img, $cant, $descripcion)
    {
        $sql="UPDATE productos SET
        precio = '$precio',
        nombre = '$nombre',
        img = '$img',
        cantidad_disponible = '$cant',
        descripcion = '$descripcion'
        WHERE id = $id";
        $query = $this->db->query($sql);
        return $query;
    }


	public function eliminar($id)
    {
        
        $sql="DELETE FROM productos WHERE id=$id";
        $query = $this->db->query($sql);
        return $query;
    }
}