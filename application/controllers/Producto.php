<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {
	public function index()
	{
		$this->load->library('session');
		if($this->session->userdata("rol") == 2){
        	$this->load->model('Model_Producto');
        	$data['productos'] = $this->Model_Producto->getAll();
			$this->load->view('productos', $data);
		}else redirect(base_url()."index.php/principal/login");
	}

	public function pedido()
	{
		$this->load->library('session');
		if($this->session->userdata("rol") == 2){
			$this->load->model('Model_Pedido');
			$this->load->model('Model_Detalle_Pedido');

			$id = $this->input->post('id');
			$cantidad = $this->input->post('cantidad');

			$resp = $this->Model_Pedido->ultimoPedido($this->session->userdata("id"));
			$this->Model_Detalle_Pedido->guardar($resp->id, $id, $cantidad, 1);
			redirect(base_url()."index.php/producto");
		}else redirect(base_url()."index.php/principal/login");
	}
}
