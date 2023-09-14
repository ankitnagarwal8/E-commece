<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class sign extends CI_Controller {

	public function index()
	{
		$this->load->view('sign/sign');
	}
	public function registeration(){
				
				require 'vendor/autoload.php';

				$email = $this->input->post('email');

				try {
					
					$config['protocol'] = 'smtp';
					$config['smtp_host'] = 'ssl://smtp.gmail.com';
					$config['smtp_port'] = '465';
					$config['smtp_user'] = 'ankitnagarwal5@gmail.com';
					$config['smtp_pass'] = 'fdnojlihvgexyhvq';
					$config['mailtype'] = 'html';
					$config['charset'] = 'utf-8';
					$config['newline'] = "\r\n";

					$this->email->initialize($config);
					$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

					$this->email->from('ankitnagarwal5@gmail.com', 'nagarwal');
					$this->email->to($email);
					$this->email->subject('Email verification');
					$this->email->message('<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>');
					$this->load->database();
					$Arr = array(
						'email'=>$email,
						'verification_code'=>$verification_code,
						'email_verified_at'=>0
					);

					$this->db->insert('register',$Arr);

					if($this->email->send()){

						$this->emailverificationfun($email);
					}

					
    			} catch (Exception $e) 
    			{
        		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    			}


	}
	public function emailverificationfun($email){
		$result['data'] = $email;
		$this->load->view('sign/emailverification',$result);
	}

	public function emailverification(){

    $email = $this->input->post('email');
    $verification_code = $this->input->post('verification_code');

    $this->load->database();
    $sql = $this->db->query("UPDATE register SET email_verified_at = NOW() WHERE email = '" . $email . "' AND verification_code = '" . $verification_code . "'");

    if($sql){
    	echo "<p>You can login now.</p>";
    }else{
    	echo "<h1>sorry try!</h1>";
    }

    
   
	}



	}






