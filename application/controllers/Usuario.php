<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	public function index()
	{
        $this->load->model('Model_Usuario');
		$data['usuarios'] = $this->Model_Usuario->getAll();
		$data['message'] = '';
		$this->load->view('usuario', $data);
	}

    public function agregar()
	{
		$this->load->model('Model_Usuario');
		$nombre = $this->input->post("nombre");
		$apellido = $this->input->post("apellido");
		$telefono = $this->input->post("telefono");
		$direccion = $this->input->post("direccion");
		$user = $this->input->post("usuario");
		$pass = $this->input->post("contrasena");
		$rol = $this->input->post("rol");
		$resp = $this->Model_Usuario->agregar($nombre, $apellido, $telefono, $direccion, $user, $pass, $rol);
		redirect(base_url()."index.php/usuario");
	}

	public function eliminar()
	{
		$this->load->model('Model_Usuario');
		$id = $this->input->post("id");
		$this->Model_Usuario->eliminar($id);
		redirect(base_url()."index.php/usuario");
	}

	public function editar()
	{
		$this->load->model('Model_Usuario');
		$id = $this->input->post("id");
		$nombre = $this->input->post("nombre");
		$apellido = $this->input->post("apellido");
		$telefono = $this->input->post("telefono");
		$direccion = $this->input->post("direccion");
		$user = $this->input->post("usuario");
		$pass = $this->input->post("contrasena");
		$rol = $this->input->post("rol");
		$resp = $this->Model_Usuario->editar($id, $nombre, $apellido, $telefono, $direccion, $user, $pass, $rol);
		redirect(base_url()."index.php/usuario");
	}
}
