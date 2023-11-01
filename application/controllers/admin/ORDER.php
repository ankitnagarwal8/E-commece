<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ORDER extends CI_Controller {

	public function index()
	{

	}
	public function AccseptOrder($id)
	{
		$this->load->database();
		$arr = array(
			"status"=>"1"
		);
		$this->db->where("id",$id);
        $update=$this->db->update('orders', $arr);
        if($update){
        	redirect(base_url('Admin/ADMIN/Order_Details'));
        }


	}
	public function RejectOrder($id){
		$this->load->database();
		/*$arr = array(
			"status"=>"1"
		);*/
		/*$this->db->where("id",$id);
        $update=$this->db->delete('orders');*/
        $update = $this->db->query("DELETE FROM orders WHERE id='$id'");
        if($update){
        	redirect(base_url('Admin/ADMIN/Order_Details'));
        }
	}

}
