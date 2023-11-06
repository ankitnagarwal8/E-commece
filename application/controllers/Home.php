<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$q = $this->db->query('select * from home_part_1');
		$data['results'] = $q->result_array();
		$this->load->view('website/index', $data);
	}
	/*public function shop()
	{
		/*$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://dummyjson.com/products");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        
        $obj['data'] = json_decode($data);
		
		$this->load->view('website/shop', $obj);
	}*/
	public function about()
	{
		$this->load->database();
		$q = $this->db->query('select * from about_part_1');
		$data['results'] = $q->result_array();
		$p = $this->db->query('select * from about_part_2');
		$data['results2'] = $p->result_array();
		$this->load->view('website/about',$data);
	}

	public function shop_details()
	{
		$this->load->view('website/shop_details');
	}
	public function shopping_cart()
	{
		$this->load->view('website/shopping_cart');
	}
	public function checkout()
	{
		$this->load->view('website/checkout');
	}
	public function blog_details()
	{
		$this->load->view('website/blog_details');
	}
	public function blog()
	{
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        
        $obj["data"] = json_decode($data);
        /*echo "<pre>";
        print_r($obj);
        die;*/
        $this->load->view('website/blog', $obj);
        curl_close($ch);
	}
	public function contact()
	{
		$this->load->view('website/contact');
	}
	public function Profile_Dtails()
	{

		$email = $_SESSION['email'];

		$this->load->database();
		$p = $this->db->query("select * from registeration where email='$email'");
		$data = $p->result_array();

		foreach($data as $dt){
				$id = $dt['id'];
			}
			
		$q = $this->db->query("select * from orders where user_ids='$id'");
		$data['results'] = $p->result_array();
		$data['result1'] = $q->result_array();
		$this->load->view('Profile/Profile_Dtails',$data);
		
	}

}
