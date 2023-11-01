<?php
class ADMIN_PROFILE_DATA  extends CI_Model 
{
	function index()
	{
		$email = $_SESSION['admin_email'];
		$this->load->database();
		$q = $this->db->query("select * from admin where email='$email'");
		return $q->result_array();

	}
}