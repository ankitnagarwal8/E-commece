<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('website/index');
	}
	public function shop()
	{
		
		$this->load->view('website/shop');
	}
	public function about()
	{
		$this->load->view('website/about');
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
		$this->load->view('website/blog');
	}
	public function contact()
	{
		$this->load->view('website/contact');
	}
	public function Profile_Dtails()
	{
		$this->load->view('Profile/Profile_Dtails');
	}

}
