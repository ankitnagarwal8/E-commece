<?php

class login_model extends CI_Model{

		function index($email,$pass){
   			$this->load->database();
   			$result = $this->db->query("select * from register where email='$email' && password='$pass'");
   			return $result->result_array();

		}
	}