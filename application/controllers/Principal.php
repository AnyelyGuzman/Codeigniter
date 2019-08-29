<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {
	public function login()
	{
		$this->load->view('login');
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
