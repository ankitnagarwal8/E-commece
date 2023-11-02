<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cart extends CI_Controller {

	public function index($id)
	{
		$Arr = array();
		$this->load->library('session');
		$this->load->database();
		$q = $this->db->query("select * from products where id = '$id'");
		$item =  $q->result_array();	
		foreach($item as $result){
			

		$data = array(
        'id'      => $result['id'],
        'qty'     => 1,
        'price'   => $result['price'],
        'name'    => $result['title'],
        'image1'    => $result['image1']
		);
		$this->cart->insert($data);
	}

		$data['results'] = $this->cart->contents();
		

		$this->load->view('website/cart',$data);
	
	}

	public function remove($rowid){
		$remove = $this->cart->remove($rowid);
		$data['results']=$this->cart->contents();
        
		$this->load->view('website/cart',$data);
	}
	public function cart_data(){
		$data['results']=$this->cart->contents();
        
		$this->load->view('website/cart',$data);
	}



}
