<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('productos_model');
		$this->load->model('usuarios_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$this->load->view('elements/header');
		$this->load->view('elements/footer');
	}

}
