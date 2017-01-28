<?php
   class usuarios_model extends CI_Model {
	   public function __construct(){
		   $this->load->database();
	   }
	   
	   public function get_usuarios($id = false){
		   if ($id===false){
			   $query=$this->db->get('USUARIO'); // lee todos los registros de la tabla
			   return $query->result_array();
		   }
			$query = $this->db->get_where('USUARIO',array('id'=>$id)); // protege en automatico ataques inyeccion dql
			return $query->row_array();
	   }
	   
	   public function set_usuarios(){
		   $data=array(
				'login'=>$this->input->post('login'),
				'pass'=>$this->input->post('pass')
		   );
		   return $this->db->insert('USUARIO',$data);
	   }
	   
	   public function validar_login(){
		   $data=array(
				'login'=>$this->input->post('login'),
				'pass'=>$this->input->post('pass')
		   );
		   $query = $this->db->get_where('USUARIO',array('LOGIN'=>$data['login'],'PASS'=>$data['pass']));
		   return $query->row_array();
	   }
	   
	   
   }