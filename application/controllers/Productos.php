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
	}
	