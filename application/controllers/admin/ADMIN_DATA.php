<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ADMIN_DATA extends CI_Controller {

	public function index()
	{
		/*$email = $_SESSION['admin_email'];
  		$pass = $_SESSION['pass'];*/
		$name=$this->input->post("frist_name");
		$L_name=$this->input->post("last_name");
		$mnum=$this->input->post("mobile");
		$email=$this->input->post("email");
		$address=$this->input->post("address");
		$DOB=$this->input->post("DOB");
		/*$pan_number=$this->input->post("pan_number");	
		$DOB=$this->input->post("DOB");*/
		


        $files_get=$_FILES["image"]["name"];
            if(!empty($files_get)){
                $config['upload_path'] = './photos/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|';
                $config['max_size'] = 20000;
                $config['max_width'] = 15000;
                $config['max_height'] = 15000;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('image')) {
                    $error = array('error' => $this->upload->display_errors()); 
                    print_r($error);   
                }
                else{
                    $data = array(
                       'image_metadata' => $this->upload->data()
                    );

                    $updateArr=array(
						'frist_name'=>$name,
						'last_name'=>$L_name,
						'mobile'=>$mnum,
						'email'=>$email,
						'address'=>$address,
						'DOB'=>$DOB,
						/*'Pan_Full_Name'=>$pan_name,
						'Pan_Number'=>$pan_number,*/
						"image"=> $data['image_metadata']['file_name']
                    );
                     $this->db->where("email",$email);
                    $update=$this->db->update('admin', $updateArr);
                    }
                }else{
                    $updateArr=array(
                        'frist_name'=>$name,
						'last_name'=>$L_name,
						'mobile'=>$mnum,
						'email'=>$email,

						'address'=>$address,
						'DOB'=>$DOB/*,
						'Pan_Full_Name'=>$pan_name,
						'Pan_Number'=>$pan_number*/
                    );
                   $this->db->where("email",$email);
                   $update=$this->db->update('admin', $updateArr);
                 

                }   
                if($update){
                	redirect(base_url('admin/ADMIN/app_profile'));
                	/*$this->load->database();
					$res = $this->db->query("select * from admin where email='$email'");
					$data['results'] = $res->result_array();
					return $this->load->view('',$data);*/
                }else{
                    echo "data not updated";
                }

	}
	public function changepass(){
		$oldpass = $this->input->post('Old_password');
		$npass = $this->input->post('N_password');
		$this->load->model('admin/ADMIN_PROFILE_DATA');
		$data = $this->ADMIN_PROFILE_DATA->index();
		foreach($data as $res){
			$d_pss = $res['password'];
		}
		if($oldpass==$d_pss){
			$arr = array(
				"password" => $npass
			);
			$this->load->database();
			if($this->db->update('admin',$arr)){
				
				$this->session->set_flashdata('passwordchanger','password are changed');
				redirect(base_url('admin/ADMIN/app_profile'));
			}else{
				$this->session->set_flashdata('passwordchanger','please enter corret old password');
				redirect(base_url('admin/ADMIN/app_profile'));
			}
		}else{
			$this->session->set_flashdata('passwordchanger','please enter corret old password');
			redirect(base_url('admin/ADMIN/app_profile'));
		}

	}
	public function Logout(){
		$this->session->unset_userdata('admin_email');
		// echo "<pre>";print_r($this->session->userdata());die;

		$distroye = session_destroy();
		if($distroye){
        	$this->load->view('sign/login');	
    	}
	}
}