<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class logout extends CI_Controller {

	public function index()
	{

		$this->session->unset_userdata('email');
		// echo "<pre>";print_r($this->session->userdata());die;

		$distroye = session_destroy();
		if($distroye){
        	$this->load->view('sign/login');	
    	}
	}
}