<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comments extends CI_Controller {

	public function index()
	{
		$name = $this->input->post('name');	
		$email = $this->input->post('email');	
		$mobile = $this->input->post('mobile');	
		$comments = $this->input->post('comments');	

		$Arr = array(
			"name" => $name,
			"email" => $mobile,
			"mobile" => $mobile,
			"comments" => $comments
		);

		$this->load->database();
		$que = $this->db->insert("comment",$Arr);

		if($que){
			$this->load->view('website/blog_details');
		}

	}
}