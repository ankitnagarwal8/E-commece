<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CONTACT extends CI_Controller {

	public function index()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$massage = $this->input->post('massage');
		 /*$to_email = $this->input->post('email');*/
         $from_email = 'ankitnagarwal5@gmail.com';

		
				$config['protocol'] = 'smtp';
				$config['smtp_host'] = 'ssl://smtp.gmail.com';
				$config['smtp_port'] = '465';
				$config['smtp_user'] = 'ankitnagarwal5@gmail.com';
				$config['smtp_pass'] = 'fdnojlihvgexyhvq';
				$config['mailtype'] = 'html';
				$config['charset'] = 'utf-8';
				$config['newline'] = "\r\n";

				$this->email->initialize($config);

				$this->email->from($from_email, 'ankit');
				$this->email->to($email);
				$this->email->subject($name);
				$this->email->message($massage);

				/*// Path to the photo file
				$photo_path =  "http://localhost/Student_Management/photos/".$data['image_metadata']['file_name'];
*/
			

				// Attach the photo
				/*$this->email->attach($photo_path);*/

				if ($this->email->send()) {
				 	redirect(base_url('Home/contact'));
        		} else {
            		echo 'Error sending email: ' . $this->email->print_debugger();
        		}


	}
}