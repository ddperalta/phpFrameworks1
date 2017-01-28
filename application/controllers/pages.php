<?php
	class Pages extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('productos_model');
			$this->load->helper('url_helper');
		}
		
		public function view($page='home'){
			//revis que la pagina exista
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$data['title'] = ucfirst($page); // mayuscula la priemra letra
			$this->load->view('elements/header',$data);
			$this->load->view('pages/'.$page,$data);
			$this->load->view('elements/footer');
		}
		
	}

?>