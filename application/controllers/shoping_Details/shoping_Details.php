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
	public function cloths(){
		$this->load->model('shopping_Data/shopping_Data');
		$que['datas'] = $this->shopping_Data->cloth_data();
		$this->load->view('website/shop',$que);
	}
	public function Shoes(){
		$this->load->model('shopping_Data/shopping_Data');
		$que['datas'] = $this->shopping_Data->Shoes_data();
		$this->load->view('website/shop',$que);
	}
	public function Accessories(){
		$this->load->model('shopping_Data/shopping_Data');
		$que['datas'] = $this->shopping_Data->Accessories_data();
		$this->load->view('website/shop',$que);
	}
	public function Kids(){
		$this->load->model('shopping_Data/shopping_Data');
		$que['datas'] = $this->shopping_Data->Kids_data();
		$this->load->view('website/shop',$que);
	}
}