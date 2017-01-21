<?php
	class Productos Extends CI_Controller{
		public function ___construct(){
			parent::__construct{
				$this->load->model('products_model');
				$this->load->help('url_helper');
			}
		}
		
		//sirve la pagina principal de productos
		public function index(){
			$data['productos']=$this->productos_model->get_productos();
			$data['title']='Manejo de productos';
			$this->load->view('elements/header',$data);
			$this->load->view('productos/index',$data);
			$this->load->view('elements/footer',$data);
		}
	}
	