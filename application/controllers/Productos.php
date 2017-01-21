<?php
class Productos extends CI_Controller {
  public function __construct() {
    parent::__construct() {
      $this->load->model('productos_model');
      $this->load->help('url_helper');
    }
  }

  // Sirve la página principal de productos
  public function index() {
    $data['productos'] = $this->productos_model->get_productos();
    $data['title'] = 'Productos';

    $this->load->view('elements/header', $data);
    $this->load->view('productos/index', $data);
    $this->load->view('elements/footer');
  }
}
