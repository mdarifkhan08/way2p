<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jquery extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function submit_form_on_select_using_jquery(){
		$header['title']='Submit Form On Select Using Jquery';
		$header['heading']='Submit Form On Select(Form element) Using Jquery';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('jquery/submit_form_on_select_using_jquery');
		$this->load->view('footer');
	}


	public function jquery_validation(){
		$header['title']='Jquery Validation';
		$header['heading']='Jquery Validation';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('jquery/jquery_validation');
		$this->load->view('footer');
	}



	public function jquery_datepicker(){
		$header['title']='Jquery Date Picker';
		$header['heading']='Jquery Date Picker';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('jquery/jquery_date_picker');
		$this->load->view('footer');
	}

}