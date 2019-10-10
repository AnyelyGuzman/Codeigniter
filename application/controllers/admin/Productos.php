<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
	public function index()
	{
		$this->load->library('session');
		if($this->session->userdata("rol") == 1){
        	$this->load->model('Model_Producto');
        	$data['productos'] = $this->Model_Producto->getAll();
			$this->load->view('productos_admin', $data);
		}else redirect(base_url()."index.php/principal/login");
	}

	public function agregar()
	{
		$this->load->model('Model_Producto');
		$precio = $this->input->post('precio');
		$nombre = $this->input->post('nombre');
		$img = $this->input->post('img');
		$cant = $this->input->post('cantidad_disponible');
		$descripcion = $this->input->post('descripcion');
		$this->Model_Producto->agregar($precio, $nombre, $img, $cant, $descripcion);
		redirect(base_url()."index.php/admin/productos");
	}
	
	public function editar()
	{
		$this->load->model('Model_Producto');
		$id = $this->input->post('id');
		$precio = $this->input->post('precio');
		$nombre = $this->input->post('nombre');
		$img = $this->input->post('img');
		$cant = $this->input->post('cantidad_disponible');
		$descripcion = $this->input->post('descripcion');
		$this->Model_Producto->editar($id, $precio, $nombre, $img, $cant, $descripcion);
		redirect(base_url()."index.php/admin/productos");
	}

	public function eliminar($id)
	{
		$this->load->model('Model_Producto');
		$id = $this->input->post('id');
		$this->Model_Producto->eliminar($id);
		redirect(base_url()."index.php/admin/productos");
	}
}
