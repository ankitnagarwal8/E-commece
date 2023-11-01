<?php
class Home_data extends CI_Model 
{
	function index()
	{
		$this->load->database();
		$q = $this->db->query('select * from products');

		return $q->result_array();

	}
	function bestsell()
	{
		$this->load->database();
		$q = $this->db->query('select * from products');

		return $q->result_array();

	}
}