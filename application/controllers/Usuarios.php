<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	public function index()
	{
		$this->load->view('elements/header');
		echo "<h1>INDEX</h1>";
		$this->load->view('elements/footer');
	}

	public function login() {
		$params = Array(
			"titulo" => "Login de algo"
		);
		/**
			view(<NOMBRE DE LA VISTA>, <ARREGLO CON VARIABLES>);
		**/
		$this->load->view('elements/header', $params);
		echo "<h1>LOGIN</h1>";
		$this->load->view('elements/footer');
	}
}
