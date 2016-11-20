<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Javascript extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function validation_on_check_box(){
		$header['title']='Validation On Check Box Before Form Submit';
		$header['heading']='Validation On Check Box Before Form Submit';
		$header['keywords']='javascript';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('javascript/validation_on_check_box');
		$this->load->view('footer');
	}
	
	
	public function control_checkbox_using_javascript(){
		$header['title']='Control Checkbox Using Javascript';
		$header['heading']='Control Checkbox Using Javascript';
		$header['keywords']='javascript, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('javascript/control-checkbox-using-javascript');
		$this->load->view('footer');
	}
	
	
	
	
	public function location_object_in_javascript(){
		$header['title']='Location Object In Javascript';
		$header['heading']='Location Object In Javascript';
		$header['keywords']='javascript, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('javascript/location-object-in-javascript');
		$this->load->view('footer');
	}
	
	
	

}