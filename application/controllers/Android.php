<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Android extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function adding_two_number_basic_application_in_android(){
		$header['title']='Adding two number | Basic App In Android';
		$header['heading']='Adding two number | Basic App In Android';
		$header['keywords']='java, android';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('android/adding_two_number_basic_application_in_android');
		$this->load->view('footer');
	}


	public function using_Toast_to_view_the_password_field(){
		$header['title']='Using Toast To View The Password Field Data | Basic App In Android';
		$header['heading']='Using Toast To View The Password Field Data | Basic App In Android';
		$header['keywords']='java, android';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('android/using_Toast_to_view_the_password_field');
		$this->load->view('footer');
	}



	public function get_response_of_checkbox_basic_behavior(){
		$header['title']='Get Response Of Checkbox | Basic behavior';
		$header['heading']='Get Response Of Checkbox | Basic behavior';
		$header['keywords']='java, android';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('android/get-response-of-checkbox-basic-behavior');
		$this->load->view('footer');
	}




	public function get_response_of_radio_button_basic_behavior(){
		$header['title']='Get Response Of Radio Button | Basic behavior';
		$header['heading']='Get Response Of Radio Button | Basic behavior';
		$header['keywords']='java, android';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('android/get-response-of-radio-button-basic-behavior');
		$this->load->view('footer');
	}



	public function get_response_of_rating_system_basic_behavior(){
		$header['title']='Get Response Of Rating System | Basic behavior';
		$header['heading']='Get Response Of Rating System | Basic behavior';
		$header['keywords']='java, android';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('android/get-response-of-rating-system-basic-behavior');
		$this->load->view('footer');
	}




	public function get_response_of_alert_dialog_basic_behavior(){
		$header['title']='Get Response Of Alert Dialog | Basic behavior';
		$header['heading']='Get Response Of Alert Dialog | Basic behavior';
		$header['keywords']='java, android';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('android/get-response-of-alert-dialog-basic-behavior');
		$this->load->view('footer');
	}




	public function login_basic_app(){
		$header['title']='Login System | Basic App';
		$header['heading']='Login System | Basic App';
		$header['keywords']='java, android';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('android/login-application-basic-app-in-android');
		$this->load->view('footer');
	}



	public function android_login_app_with_mysql_database(){
		$header['title']='Android Login App with mysql database';
		$header['heading']='Android Login App with mysql database';
		$header['keywords']='java, android';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('android/android-login-app-with-mysql-database');
		$this->load->view('footer');
	}



	public function android_register_app_with_mysql_database(){
		$header['title']='Android Register App with mysql database';
		$header['heading']='Android Register App with mysql database';
		$header['keywords']='java, android';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('android/android-register-app-with-mysql-database');
		$this->load->view('footer');
	}



	public function android_login_register_and_get_json_response(){
		$header['title']='Android Login-Register and get Json Using Mysql Db';
		$header['heading']='Android Login-Register and get Json Using Mysql Db';
		$header['keywords']='java, android';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('android/android-login-register-and-get-json-response');
		$this->load->view('footer');
	}



	

}