<?php
class Usuarios_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function get_usuarios($id = FALSE) {
    if ($id === FALSE) {
      $query = $this->db->get('usuarios'); // Lee todos los registros de la tabla
      return $query->result_array();
    }

    $query = $this->db->get_where('usuarios', array('id' => $id));
    return $query->row_array(); // regresa un registro
  }

  public function set_usuarios() {
    $data = array(
      'login' => $this->input->post('login'),
      'password' => $this->input->post('password')
    );

    return $this->db->insert('usuarios', $data);
  }

  public function login() {
    $data = array(
      'login' => $this->input->post('login'),
      'password' => $this->input->post('password')
    );
    $query = $this->db->get_where('usuarios', array('login'=>$data['login'], 'password' => $data['password']));

    if ($query->num_rows == 1) {
      return true;
    }
    return false;
  }
}
