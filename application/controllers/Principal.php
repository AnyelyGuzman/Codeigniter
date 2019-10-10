<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {
	public function login()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		$this->load->view('login');
	}
	
	public function logueo()
	{
		$this->load->model('Model_Usuario');
		$this->load->model('Model_Pedido');
		$this->load->library('session');
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$resp = $this->Model_Usuario->logueo($user, $pass);
		
		if($resp){
			$this->Model_Pedido->guardar($resp->id);
			$data = array(
				"id"=>$resp->id,
				"nombre"=>$resp->nombre,
				"apellido"=>$resp->apellido,
				"rol"=>$resp->rol
			);
			$this->session->set_userdata($data);	
			redirect(base_url()."index.php/producto");
		}else $this->load->view('login');
	}

	public function logueoAdmin()
	{
		$this->load->model('Model_Usuario');
		$this->load->library('session');
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$resp = $this->Model_Usuario->logueoAdmin($user, $pass);
		
		if($resp){
			$data = array(
				"id"=>$resp->id,
				"nombre"=>$resp->nombre,
				"apellido"=>$resp->apellido,
				"rol"=>$resp->rol
			);
			$this->session->set_userdata($data);	
			redirect(base_url()."index.php/admin");
		}else $this->load->view('login');
	}

    public function registro()
	{
		$this->load->view('registro');
	}
	
    public function admin()
	{
		$this->load->view('admin');
	}
}
