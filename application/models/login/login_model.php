<?php

class login_model extends CI_Model{

		function index($email,$pass){
   			$this->load->database();
   			$result = $this->db->query("select * from registeration where email='$email' && password='$pass'");
   			if($result){
   				return $result->result_array();
   			}
		}
		function admin($email,$pass){
   			$this->load->database();
   			$result = $this->db->query("select * from admin where email='$email' && password='$pass'");
   			if($result){
   				return $result->result_array();
   			}
		}
	}