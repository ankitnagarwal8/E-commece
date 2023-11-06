<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ADMIN extends CI_Controller {

	public function index()
	{
       if(isset($_SESSION['logged_in']) && (isset($_SESSION['admin_email']))){

       	 $this->load->view('admin/index');
       }else{
            $this->load->view('sign/login');
        }
         
		
	}
	public function web_home()
	{
		$this->load->database();
		$q = $this->db->query("select * from home_part_1");
		$data['results'] = $q->result_array();
		$this->load->view('admin/web_home',$data);
	}
	public function About_as()
	{
		$this->load->database();
		$q = $this->db->query("select * from about_part_1");
		$data['results1'] = $q->result_array();

		$p = $this->db->query("select * from about_part_2");
		$data['results2'] = $p->result_array();

		$this->load->view('admin/Web_About_as',$data);
	}
	public function Twocolumn()
	{
		$this->load->view('admin/layout_two_column');
	}
	public function layout_compact_nav()
	{
		$this->load->view('admin/layout_compact_nav');
	}
	public function layout_vertical()
	{
		$this->load->view('admin/layout_vertical');
	}
	public function Horizontal()
	{
		$this->load->view('admin/layout_horizontal');
	}
	public function Boxed()
	{
		$this->load->view('admin/layout_boxed');
	}
	public function Wide()
	{
		$this->load->view('admin/layout_wide');
	}
	public function layout_fixed_header()
	{
		$this->load->view('admin/layout_fixed_header');
	}
	public function layout_fixed_sidebar()
	{
		$this->load->view('admin/layout_fixed_sidebar');
	}
	public function Inbox()
	{
		$this->load->view('admin/email_inbox');
	}
	public function Read()
	{
		$this->load->view('admin/email_read');
	}
	public function Compose()
	{
		$this->load->view('admin/email_compose');
	}
	public function Order_Details()
	{
		$this->load->database();
		$q = $this->db->query("select * from orders");
		$results['results'] = $q->result_array();
		$this->load->view('admin/Order_Details',$results);
	}
	public function Calender()
	{
		$this->load->view('admin/app_Calender');
	}
	public function Flot()
	{
		$this->load->view('admin/chart_flot');
	}
	public function Morris()
	{
		$this->load->view('admin/chart_morris');
	}
	public function Chartjs()
	{
		$this->load->view('admin/chart_chartjs');
	}
	public function Chartist()
	{
		$this->load->view('admin/chart_chartist');
	}
	public function Peity()
	{
		$this->load->view('admin/chart_peity');
	}
	public function Sparkline()
	{
		$this->load->view('admin/chart_sparkline');
	}
	public function Accordion()
	{
		$this->load->view('admin/ui_accordion');
	}
	public function Alert()
	{
		$this->load->view('admin/ui_alert');
	}
	public function Badge()
	{
		$this->load->view('admin/ui_badge');
	}
	public function Button()
	{
		$this->load->view('admin/ui_button');
	}
	public function ButtonGroup()
	{
		$this->load->view('admin/ui_button_group');
	}
	public function Cards()
	{
		$this->load->view('admin/ui_cards');
	}
	public function Carousel()
	{
		$this->load->view('admin/ui_carousel');
	}
	public function Dropdown()
	{
		$this->load->view('admin/ui_dropdown');
	}
	public function ListGroup()
	{
		$this->load->view('admin/ui_list_group');
	}
	public function MediaObject()
	{
		$this->load->view('admin/ui_media_object');
	}
	public function Modal()
	{
		$this->load->view('admin/ui_modal');
	}
	public function Pagination()
	{
		$this->load->view('admin/ui_pagination');
	}
	public function Popover()
	{
		$this->load->view('admin/ui_popover');
	}
	public function Progressbar()
	{
		$this->load->view('admin/ui_progressbar');
	}
	public function Tab()
	{
		$this->load->view('admin/ui_tab');
	}
	public function Typography()
	{
		$this->load->view('admin/ui_typography');
	}
	public function Nestedable()
	{
		$this->load->view('admin/uc_nestedable');
	}
	public function NouiSlider()
	{
		$this->load->view('admin/uc_noui_Slider');
	}
	public function uc_NouiSlider()
	{
		$this->load->view('admin/uc_noui_Slider');
	}
	public function SweetAlert()
	{
		$this->load->view('admin/uc_sweetalert');
	}
	public function Toastr()
	{
		$this->load->view('admin/uc_toastr');
	}
	public function Widget()
	{
		$this->load->view('admin/widgets');
	}
	public function BasicForm()
	{
		$this->load->view('admin/form_basic');
	}
	public function FormValidation()
	{
		$this->load->view('admin/form_validation');
	}
	public function StepForm()
	{
		$this->load->view('admin/form_step');
	}
	public function Editor()
	{
		$this->load->view('admin/form_editor');
	}
	public function Picker()
	{
		$this->load->view('admin/form_picker');
	}
	public function BasicTable()
	{
		$this->load->view('admin/table_basic');
	}
	public function DataTable()
	{
		$this->load->view('admin/table_datatable');
	}
	public function Login()
	{
		$this->load->view('admin/page_login');
	}
	public function Register()
	{
		$this->load->view('admin/page_register');
	}
	public function LockScreen()
	{
		$this->load->view('admin/page_lock');
	}
	public function Error404()
	{
		$this->load->view('admin/page_error_404');
	}
	public function Error403()
	{
		$this->load->view('admin/page_error_403');
	}
	public function Error400()
	{
		$this->load->view('admin/page_error_400');
	}
	public function Error500()
	{
		$this->load->view('admin/page_error_500');
	}
	public function Error503()
	{
		$this->load->view('admin/page_error_503');
	}
	public function app_profile()
	{
		$this->load->model('admin/ADMIN_PROFILE_DATA');
		$data['results'] = $this->ADMIN_PROFILE_DATA->index();

		$this->load->view('admin/app_profile',$data);
	}


}