
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WEBABOUT extends CI_Controller {

	public function index()
	{
		$h1 = $this->input->post('head1');
		$h2 = $this->input->post('head2');
		$h3 = $this->input->post('head3');
		$p1 = $this->input->post('p1');
		$p2 = $this->input->post('p1');
		$p3 = $this->input->post('p1');
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
						'h1'=>$h1,
						'h2'=>$h2,
						'h3'=>$h3,
						'p1'=>$p1,
						'p2'=>$p2,
						'p3'=>$p3,
						"image"=> $data['image_metadata']['file_name']
                    );
                    $this->db->where('id','1');
                    $update=$this->db->update('about_part_1', $updateArr);

                    }
                }else{
                    $updateArr=array(
                        'h1'=>$h1,
						'h2'=>$h2,
						'h3'=>$h3,
						'p1'=>$p1,
						'p2'=>$p2,
						'p3'=>$p3,
                    );
                    $this->db->where('id','1');
                   $update=$this->db->update('about_part_1', $updateArr);
                 

                }   
                if($update){
                	
                   	$this->session->set_flashdata('Web_About_as_data','Web_About_as_data data updated');
                	redirect(base_url('admin/ADMIN/About_as'));
					
                }else{
                
                	$this->session->set_flashdata('Web_About_as_data','Web_About_as_data data not updated');
                    redirect(base_url('admin/ADMIN/About_as'));
                }
	}
	public function part2(){
		$h1 = $this->input->post('heading1');
		
		$files_get=$_FILES["image"]["name"];
            if(!empty($files_get)){
                $config['upload_path'] = './photos/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
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
                    $this->load->database();
                    $updateArr=array(
						'paragraph'=>$h1,
						"image"=> $data['image_metadata']['file_name']
                    );
                    $update=$this->db->update('about_part_2', $updateArr);

                    }
                }else{
                    $updateArr=array(
                        'paragraph'=>$h1
						
                    );

                    $this->load->database();
                   $update=$this->db->update('about_part_2', $updateArr);
                 

                }
                /*print_r($update);
                die;*/
                if($update){
                	
                   	$this->session->set_flashdata('Web_About_as_data2','Web_About_as_data data updated');
                	redirect(base_url('admin/ADMIN/About_as'));
					
                }else{
                
                	$this->session->set_flashdata('Web_About_as_data2','Web_About_as_data data not updated');
                    redirect(base_url('admin/ADMIN/About_as'));
                }
	}
}