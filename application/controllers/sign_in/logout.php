<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class logout extends CI_Controller {

	public function index()
	{
		
		$distroye = $this->session->sess_destroy();
		if($distroye){
        $this->load->view('website/index');	
    }
	}
}