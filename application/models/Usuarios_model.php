<?php
class Usuarios_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function get_usuarios($id = false){

    if($id === FALSE){

      $query = $this->db->get('usuarios');
      return $query->result_array();
    }
      $query = $this->db->get_where('usuarios',array('id'=>$id));
      return $query->row_array();
  }



  public function set_usuarios(){

    $data = array(

        'login' => $this->input->post('login'),
        'password' => $this->input->post('password')

      );

    return $this->db->insert('usuarios',$data);

  }

}