<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LOGIN extends CI_Controller {

	public function index()
	{
		$this->load->view('sign/login');
	}
	public function logged(){
		$email = $this->input->post('email');
		$pass = $this->input->post('Password');
		$this->load->model('login/login_model');

		$q = $this->login_model->index($email,$pass);
		$a = $this->login_model->admin($email,$pass);


		if($q){
			$newdata = array(
        		'email'     => $email,
        		'logged_in' => TRUE
			);
    		$this->load->library('session');	
			$data = $this->session->set_userdata($newdata);
			$this->load->view('website/index');
		}else if($a){
			$newdata = array(
        		'admin_email'     => $email,
        		'logged_in' => TRUE
			);
    		$this->load->library('session');	
			$data = $this->session->set_userdata($newdata);
			/*$this->load->view('admin/index');*/
			redirect(base_url('admin/ADMIN'));
		}
		else{
			$this->session->set_flashdata('not_find_email','this email is not register.please register now');
			$this->load->view('sign/login');
		}
		/*$this->load->database();
		$result = $this->db->query("select * from register where email='$email' && password='$pass'");
		if($result==1){
		$newdata = array(
        		'email'     => $email,
        		'logged_in' => TRUE
			);
    	$this->load->library('session');	
		$data = $this->session->set_userdata($newdata);

		$res = $result->result_array();
		$this->load->view('website/index');
	}else{
		$this->session->set_flashdata('not_find_email','this email is not register.please register now');
	}*/


	}
}