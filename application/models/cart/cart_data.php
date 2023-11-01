<?php
class cart_data extends CI_Model 
{
	function index($id)
	{

		$this->load->database();
		$q = $this->db->query('select * from products where id="$id"');
		
		return $q->result_array();
	}
}
