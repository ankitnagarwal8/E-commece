
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chackout extends CI_Controller {

	public function index()
	{
		if(isset($_SESSION['logged_in']) && isset($_SESSION['email']))
		{
			$data['results'] = $this->cart->contents();

			$id = $_SESSION['email'];
			$this->load->database();
			$db = $this->db->query("select * from registeration where email = '$id'");
			$q = $db->result_array();
			foreach($q as $p){
				$data['user_id'] = $p['id'];
			}
			 
			$this->load->view('billing/billing',$data);
        }else{
        	$this->load->view('sign/sign');
        }
                                  
	}
	public function bill(){
		$results = $this->cart->contents();
		$id = $_SESSION['email'];
		$this->load->database();
		$db = $this->db->query("select * from registeration where email = '$id'");
		$q = $db->result_array();
		foreach($q as $p){
			$user_id = $p['id'];
		}
		$format = "%Y-%M-%d %H:%i";
		$date = date("y/m/d");
		$time= date("h:i:sa");
		foreach($results as $result):
		$Arr = array(
			"user_ids"=>$user_id,
			"product_name"=>$result['name'],
			"product_id"=>$result['id'],
			"qty"=>$result['qty'],
			"product_price"=>$result['price'],
			"product_sub_total"=>$result['price']*$result['qty'],
			"status"=>"0",
			"order_date"=>$date,
			"order_time"=>$time
		);

		$this->load->database();
		$this->db->insert('orders',$Arr);
		endforeach;
		$this->cart->destroy();
		redirect(base_url('home'));
	}
}
