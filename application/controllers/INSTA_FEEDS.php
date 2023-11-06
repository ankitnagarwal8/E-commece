
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class INSTA_FEEDS extends CI_Controller {

	public function index()
	{
		$username = 'ak_tha_coder007';
		$json = file_get_contents('https://www.instagram.com/'.$username.'/media/');
		$instagram_feed_data = json_decode($json, true);
		print_r($instagram_feed_data);

	}
}