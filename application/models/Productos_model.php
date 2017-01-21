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
	   
	   public function set_productos(){
		   $data=array(
				'nombre'=>$this->input->post('nombre'),
				'descripcion'=>$this->input->post('descripcion'),
				'precio'=>$this->input->post('precio')
		   );
		   return $this->db->insert('productos',$data);
	   }
	   
	   
   }

//vista producto/success mensaje insertar, link a productos y link a create