<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->view('home_admin');
    }
    
    public function pedido()
    {
        $this->load->model('Model_Pedido');
        $this->load->model('Model_Producto');
        $data['pedidos'] = $this->Model_Pedido->getAll();
        $data['productos'] = $this->Model_Producto->getAll();
        $this->load->view('pedidos', $data);
    }
    
    public function eliminarPedido()
    {
        $this->load->model('Model_Detalle_Pedido');
        $id= $this->input->post('id');
        $this->Model_Detalle_Pedido->eliminarPedido($id);
        redirect(base_url()."index.php/admin/pedido");
    }

    public function editarPedido()
    {
        $this->load->model('Model_Detalle_Pedido');
        $id= $this->input->post('id');
        $pedido= $this->input->post('pedido');
        $estado= $this->input->post('estado');
        $cantidad= $this->input->post('cantidad');
        $this->Model_Detalle_Pedido->editar($id, $pedido, $cantidad, $estado);
        redirect(base_url()."index.php/admin/pedido");
    }
}