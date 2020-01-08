<?php
class CIELO extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('CIELOModel');
	}

	public function savedata() {
		$this->load->view('test');	
		if($this->input->post('save')) {
			$name=$this->input->post('name');
			$dob=$this->input->post('dob');
			$email=$this->input->post('email');
			$fav_color=$this->input->post('favorite_color');
		
		$this->CIELOModel->insert_to_db($name, $dob, $email, $fav_color);		
		echo "Inserted to Database!";
		}
	}
}