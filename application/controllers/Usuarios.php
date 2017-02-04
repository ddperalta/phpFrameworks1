<?php
	class Usuarios Extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('usuarios_model');
			$this->load->helper('url_helper');
		}
		
		//sirve la pagina principal de productos
		//localhost/productos
		public function index(){
			$data['usuarios']=$this->usuarios_model->get_usuarios();
			$data['title']='Crear Usuarios';
			$this->load->view('elements/header',$data);
			$this->load->view('usuarios/index',$data);
			$this->load->view('elements/footer',$data);
		}
		
		//sirve el detalle de un producto
		//localhost/productos/view/1
		public function view($id=NULL){
			$data['usuarios_item']=$this->usuarios_model->get_usuarios($id);
			if(empty($data['usuarios_item'])){
				show_404();//muestra mensaje de error
			}
			$data['title'] = $data['usuarios_item']['LOGIN'];
			$this->load->view('elements/header',$data);
			$this->load->view('usuarios/view',$data);
			$this->load->view('elements/footer',$data);
		}
		
		public function create(){
			$this->load->helper('form');
			$this->load->library('form_validation');
			$data['title']='Crear un Usuario';
			$this->form_validation->set_rules('login','login','required');
			$this->form_validation->set_rules('pass','pass','required');
			// Muestra el formulario por primera vez
			if($this->form_validation->run()===FALSE){
				$this->load->view('elements/header',$data);
				$this->load->view('usuarios/create');
				$this->load->view('elements/footer');				
			}else{
				//guarda datos usando el modelo
				$this->usuarios_model->set_usuarios();
				$this->load->view('elements/header',$data);
				$this->load->view('usuarios/success');
				$this->load->view('elements/footer');
			}
		}
		
		public function login(){
			$this->load->helper('form');
			$this->load->library('form_validation');
			$data['title']='Logear un Usuario';
			$this->form_validation->set_rules('login','login','required');
			$this->form_validation->set_rules('password','password','required');
			// Muestra el formulario por primera vez
			if($this->form_validation->run()===FALSE){
				$this->load->view('elements/header',$data);
				$this->load->view('usuarios/login');
				$this->load->view('elements/footer');				
			}else{
				$login=$this->usuarios_model->login();
				echo "<pre>".var_dump($login)."</pre>";
						/*guarda datos usando el modelo
						$resultado=$this->usuarios_model->login();
						if ($resultado){
							$this->load->view('elements/header',$data);
							$this->load->view('usuarios/success');
							$this->load->view('elements/footer');
						}*/
			}
		}
		
	}