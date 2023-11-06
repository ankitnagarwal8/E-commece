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
	function cloth_data(){
		$this->load->database();
		$q = $this->db->query('select * from products where category="cloths"');

		return $q->result_array();
	}
	function Shoes_data(){
		$this->load->database();
		$q = $this->db->query('select * from products where category="Shoes"');

		return $q->result_array();
	}
	function Accessories_data(){
		$this->load->database();
		$q = $this->db->query('select * from products where category="Accessories"');

		return $q->result_array();
	}
	function kids_data(){
		$this->load->database();
		$q = $this->db->query('select * from products where category="kids"');

		return $q->result_array();
	}
}