<?php
	class Productos Extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('productos_model');
			$this->load->helper('url_helper');
		}
		
		//sirve la pagina principal de productos
		//localhost/productos
		public function index(){
			$data['productos']=$this->productos_model->get_productos();
			$data['title']='Manejo de productos';
			$this->load->view('elements/header',$data);
			$this->load->view('productos/index',$data);
			$this->load->view('elements/footer',$data);
		}
		
		//sirve el detalle de un producto
		//localhost/productos/view/1
		public function view($id=NULL){
			$data['productos_item']=$this->productos_model->get_productos($id);
			if(empty($data['productos_item'])){
				show_404();//muestra mensaje de error
			}
			$data['title'] = $data['productos_item']['nombre'];
			$this->load->view('elements/header',$data);
			$this->load->view('productos/view',$data);
			$this->load->view('elements/footer',$data);
		}
		
		public function create(){
			$this->load->helper('form');
			$this->load->library('form_validation');
			$data['title']='Crear un Producto';
			
			$this->form_validation->set_rules('nombre','Nombre','required');
			$this->form_validation->set_rules('precio','Precio','required');
			$this->form_validation->set_rules('precio','Precio','decimal');
			
			// Muestra el formulario por primera vez
			if($this->form_validation->run()===FALSE){
				$this->load->view('elements/header',$data);
				$this->load->view('productos/create');
				$this->load->view('elements/footer');				
			}else{
				//guarda datos usando el modelo
				$this->productos_model->set_productos();
				$this->load->view('elements/header',$data);
				$this->load->view('productos/success');
				$this->load->view('elements/footer');
			}
		}
	}
	