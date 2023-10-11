<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog extends CI_Controller {

	public function index()
	{
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        
        $obj = json_decode($data)
       	/*print_r(json_decode($results));*/
        $this->load->view('website/blog', $obj);
        curl_close($ch);
	}
}