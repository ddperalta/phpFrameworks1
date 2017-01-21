<?php
class Productos_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function get_productos($id = FALSE) {
    if ($id === FALSE) {
      $query = $this->db->get('productos'); // Lee todos los registros de la tabla
      return $query->result_array();
    }

    $query = $this->db->get_where('productos', array('id' => $id));
    return $query->row_array(); // regresa un registro
  }

  public function set_productos() {
    $data = array(
      'nombre' => $this->input->post('nombre'),
      'descripcion' => $this->input->post('descripcion'),
      'precio' => $this->input->post('precio')
    );

    return $this->db->insert('productos', $data);
  }
}
