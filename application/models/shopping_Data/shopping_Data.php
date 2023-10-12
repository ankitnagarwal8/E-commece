<?php
class shopping_Data extends CI_Model 
{
	function index()
	{
		$this->load->database();
		$q = $this->db->query('select * from product');

		return $q->result_array();

	}
	function Groceries_data(){
		$this->load->database();
		$q = $this->db->query('select * from product where category="groceries"');

		return $q->result_array();

	}
	function smartphones_data(){
		$this->load->database();
		$q = $this->db->query('select * from product where category="smartphones"');

		return $q->result_array();
	}
}