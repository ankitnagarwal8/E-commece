<?php
class shopping_Data extends CI_Model 
{
	function index()
	{
		$this->load->database();
		$q = $this->db->query('select * from products');

		return $q->result_array();

	}
	function Groceries_data(){
		$this->load->database();
		$q = $this->db->query('select * from products where category="groceries"');

		return $q->result_array();

	}
	function smartphones_data(){
		$this->load->database();
		$q = $this->db->query('select * from products where category="smartphones"');

		return $q->result_array();
	}
}