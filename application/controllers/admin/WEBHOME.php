<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WEBHOME extends CI_Controller {

	public function index()
	{
		$heading_6 = $this->input->post('heading_6');
		$heading_2 = $this->input->post('heading_2');
		$paragraph_1 = $this->input->post('paragraph_1');
		$instagram = $this->input->post('insta');
		$face_book = $this->input->post('face_book');
		$twitter = $this->input->post('twitter');
		$pinterest = $this->input->post('pinterest');

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
						'heading_6'=>$heading_6,
						'heading_2'=>$heading_2,
						'paragraph_1'=>$paragraph_1,
						'instagram'=>$instagram,
						'face_book'=>$face_book,
						'twitter'=>$twitter,
						'pinterest'=>$pinterest,
						"photo"=> $data['image_metadata']['file_name']
                    );
                    $this->db->where('id','1');
                    $update=$this->db->update('home_part_1', $updateArr);

                    }
                }else{
                    $updateArr=array(
                        'heading_6'=>$heading_6,
						'heading_2'=>$heading_2,
						'paragraph_1'=>$paragraph_1,
						'instagram'=>$instagram,
						'face_book'=>$face_book,
						'twitter'=>$twitter,
						'pinterest'=>$pinterest
                    );
                    $this->db->where('id','1');
                   $update=$this->db->update('home_part_1', $updateArr);
                 

                }   
                if($update){
                	
                   	$this->session->set_flashdata('web_home_data','home data updated');
                	redirect(base_url('admin/ADMIN/web_home'));
					
                }else{
                
                	$this->session->set_flashdata('web_home_data','home data not updated');
                    redirect(base_url('admin/ADMIN/web_home'));
                }
	}
}