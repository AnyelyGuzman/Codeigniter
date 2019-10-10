<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Detalle_Pedido extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function guardar($idPedido = null, $idProducto = null, $cantidad = null, $estado = null)
    {
        $sql = "INSERT INTO detalle_pedido(id_pedido, id_producto, cantidad, estado)
            VALUES ($idPedido, $idProducto, $cantidad, $estado)";
        $query = $this->db->query($sql);
        return $query;
    }

    public function editar($id, $idProducto = null, $cantidad = null, $estado = null)
    {
        $sql = "UPDATE detalle_pedido SET id_producto = $idProducto, cantidad = $cantidad, estado = $estado WHERE id = $id";
        $query = $this->db->query($sql);
        return $query;
    }
    
    public function eliminarPedido($id = null)
    {
        $sql = "DELETE FROM detalle_pedido WHERE id=$id";
        $query = $this->db->query($sql);
        return $query;
    }
}