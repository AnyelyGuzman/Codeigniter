<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Pedido extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function ultimoPedido($id = null)
    {
        $sql = "SELECT id FROM pedidos WHERE id_usuario = $id";
        $query = $this->db->query($sql);
        return $query->row();
    }
    
    public function guardar($idUsuario = null)
    {
        $sql = "INSERT INTO pedidos (id_usuario)
            VALUES ($idUsuario)";
        $query = $this->db->query($sql);
        return $query;
    }
    
    public function getAll()
    {
        $sql = 'SELECT
                dp.id, concat(u.nombre, " ", u.apellido) as nombre, u.telefono, u.direccion,
                pr.nombre as pedido, pr.id as proId, dp.cantidad, dp.estado, (pr.precio * dp.cantidad) as total,
                pr.precio
            FROM detalle_pedido dp 
            inner join pedidos p on p.id = dp.id_pedido
            inner join usuarios u on p.id_usuario = u.id
            inner join productos pr on dp.id_producto = pr.id
            ORDER BY p.id, dp.id
        ';

        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function eliminar($id = null)
    {
        $sql = "DELETE FROM pedidos WHERE id=$id";
        $query = $this->db->query($sql);
        return  $query;
    }
}