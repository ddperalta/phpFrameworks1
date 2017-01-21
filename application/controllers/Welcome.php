<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('elements/header');
		$this->load->view('elements/footer');
	}

	public function connection_test() {
		$this->db = $this->load->database('default', TRUE);
		$result_set = $this->db->query('SELECT * FROM tbl1');
		print_r($result_set->result_array());
	}
}
