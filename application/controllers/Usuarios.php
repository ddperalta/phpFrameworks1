<?php
class Usuarios extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('usuarios_model');
    $this->load->helper('url_helper');
    $this->load->helper('url');
	$this->load->helper('html');
  }

  // Sirve la página principal de usuarios
  // localhost/usuarios
  public function index() {
    $data['usuarios'] = $this->usuarios_model->get_usuarios();
    $data['title'] = 'Usuarios';

    $this->load->view('elements/header', $data);
    $this->load->view('usuarios/index', $data);
    $this->load->view('elements/footer');
  }

  // sirve el detalle de un producto
  // localhost/usuarios/view/1
  public function view($id = NULL) {
    $data['usuarios_item'] = $this->usuarios_model->get_usuarios($id);

    if (empty($data['usuarios_item'])) {
      show_404(); // muestra mensaje de error
    }

    $data['title'] = $data['usuarios_item']['login']; //usuarios item es el nombre de la variable.

    $this->load->view('elements/header', $data);
    $this->load->view('usuarios/view', $data);
    $this->load->view('elements/footer');
  }

  public function create() {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Crear un producto';
    $this->form_validation->set_rules('login', 'login', 'required');
    $this->form_validation->set_rules('password', 'password', 'required');
    if ($this->form_validation->run() === FALSE) {
      // Muestra el formulario por primera vez
      $this->load->view('elements/header', $data);
      $this->load->view('usuarios/create');
      $this->load->view('elements/footer');
    } else {
      // Guarda los datos usando el modelo
      $this->usuarios_model->set_usuarios();
      $this->load->view('elements/header', $data);
      $this->load->view('usuarios/success');
      $this->load->view('elements/footer');
  	}
  }
  public function login() {
    $this->load->helper('form');
    $this->load->library('form_validation');

  	$data = [];
    $data['title'] = 'Inicia sesión';

    $this->form_validation->set_rules('login', 'login', 'required');
    $this->form_validation->set_rules('password', 'password', 'required');

    if ($this->form_validation->run() === FALSE) {
		$this->load->view('elements/header', $data);
		$this->load->view('usuarios/login');
		$this->load->view('elements/scripts');
		$this->load->view('elements/footer');
    } else {
    	$login = $this->usuarios_model->login();
    	var_dump($login);
    } 
  }

  public function login_endpoint() {
  	header('Content-Type: application/json');
  	if ($this->input->post('login') && 
  		$this->input->post('password')) {
  		$login = $this->usuarios_model->login();
  		$data = array("login" => $login);
		if($login){
			$this->session->user=$this->input->post('login');
			$this->session->contador=0;
			$this->session->userdata('detailsData');
	
			
			/*
				$variable=$this->session->user  o  $variable=$this->session->userdata() trae todas las variables de sesion
				$variable=$this->session->userdata('user') trae solo esa variable de session.
			*/
		}
  		echo json_encode($data);
  	}
  }
  public function logout(){
	  //session_destroy();
	  if($this->session->id != NULL){
		  $this->session->sess_destroy(); 
	  }
	  $this->load->view('usuarios/logout');
	  //$this->session->sess_destroy();
  }

}



















