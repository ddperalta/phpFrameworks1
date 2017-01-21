<?php
   class Productos_model extends CI_Model {
	   public function __construct(){
		   $this->load->database();
	   }
	   
	   public function get_productos($id = false){
		   if ($id===false){
			   $query=$this->db->get('productos'); // lee todos los registros de la tabla
			   return $query->result_array();
		   }
			$query = $this->db->get_where('productos',array('id'=>$id)); // protege en automatico ataques inyeccion dql
			return $query->row_array();
	   }
	   
	   
   }

