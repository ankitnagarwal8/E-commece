<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shoping_Details extends CI_Controller {

	public function index()
	{
		$this->load->model('shopping_Data/shopping_Data');
		$que['datas'] = $this->shopping_Data->index();
		$this->load->view('website/shop',$que);
	}
	public function All_Catagary(){
		$this->load->model('shopping_Data/shopping_Data');
		$que['datas'] = $this->shopping_Data->index();
		$this->load->view('website/shop',$que);
	}
	public function Groceries(){
		$this->load->model('shopping_Data/shopping_Data');
		$que['datas'] = $this->shopping_Data->Groceries_data();
		$this->load->view('website/shop',$que);
	}
	public function smartphones(){
		$this->load->model('shopping_Data/shopping_Data');
		$que['datas'] = $this->shopping_Data->smartphones_data();
		$this->load->view('website/shop',$que);
	}
}