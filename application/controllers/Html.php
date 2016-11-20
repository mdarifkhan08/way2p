<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Html extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function products_panel_with_left_navigation_menu(){
		$header['title']='Product Panel-1 With Left Filter Menu';
		$header['heading']='Product Panel-1 With Left Filter Menu';
		$header['keywords']='html, html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/products-panel-with-left-navigation-menu');
		$this->load->view('footer');
	}


	public function register_and_login_form_with_bootstrap_1(){
		$header['title']='Register And Login Form With Bootstrap';
		$header['heading']='Register And Login Form With Bootstrap';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/register-and-login-form-with-bootstrap-1');
		$this->load->view('footer');
	}




	public function mega_menu_navigation_menu_with_bootstrap(){
		$header['title']='Mega Menu Navigation Menu With Bootstrap';
		$header['heading']='Mega Menu Navigation Menu With Bootstrap';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/mega-menu-navigation-menu-with-bootstrap');
		$this->load->view('footer');
	}



	public function slide_div_over_the_div_vertically(){
		$header['title']='Slide Div Over The Div Vertically';
		$header['heading']='Slide Div Over The Div Vertically';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/slide-div-over-the-div-vertically');
		$this->load->view('footer');
	}




	public function text_area_with_special_tool_for_styling_mail_or_message_service(){
		$header['title']='Summernote tool to send styling mail/message';
		$header['heading']='Summernote tool to send styling mail/message';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/text_area_with_special_tool_for_styling_mail_or_message_service');
		$this->load->view('footer');
	}




	public function display_inline_practice_with_unorder_list(){
		$header['title']='Display Inline Practice With Unorder List';
		$header['heading']='Display Inline Practice With Unorder List';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/display-inline-practice-with-unorder-list');
		$this->load->view('footer');
	}




	public function image_with_bootstrap_setting(){
		$header['title']='Responsive Image With Css';
		$header['heading']='Responsive Image With Css';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/how-to-do-image-responsive-using-css');
		$this->load->view('footer');
	}




	public function basic_real_time_calculator_using_html_table_and_javascript(){
		$header['title']='Basic Calculator Using Html Table and javascript';
		$header['heading']='Basic Calculator Using Html Table and javascript';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/basic-real-time-calculator-using-html-table-and-javascript');
		$this->load->view('footer');
	}




	public function basic_footer_with_out_bootstrap_for_beginners(){
		$header['title']='Basic Footer Without BootStrap For Beginners';
		$header['heading']='Basic Footer Without BootStrap For Beginners';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/basic-footer-with-out-bootstrap-for-beginners');
		$this->load->view('footer');
	}




/*	public function (){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/');
		$this->load->view('footer');
	}




	public function (){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/');
		$this->load->view('footer');
	}




	public function (){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/');
		$this->load->view('footer');
	}




	public function (){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/');
		$this->load->view('footer');
	}




	public function (){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/');
		$this->load->view('footer');
	}




	public function (){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/');
		$this->load->view('footer');
	}





	public function (){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/');
		$this->load->view('footer');
	}




	public function (){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/');
		$this->load->view('footer');
	}




	public function (){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/');
		$this->load->view('footer');
	}


	public function (){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='html,html5';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('html/');
		$this->load->view('footer');
	}*/

}