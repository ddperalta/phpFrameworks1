<?php
class Productos_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function get_productos($id = FALSE) {
    if ($id === FALSE) {
      $query2 = $this->db->get('productos'); // Lee todos los registros de la tabla
			 //$this->db->select('productos');

			 $detailsData=$this->session->userdata('detailsData');
			 //var_dump($detailsData);
			 $dato = array();
			 foreach($detailsData as $key){
				 $dato[]=$key;
			 }
			 //var_dump($dato);
			 $this->db->where_in('id',$dato);
			 $query = $this->db->get('productos');
			 //var_dump($query->result_array());
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
    //return $this->db->insert('productos', $data);
	$this->db->insert('productos', $data);
	
	$this->db->select_max('id','id');
    $query =$this->db->get('productos');
	return $query;
  }
}
