<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Struts extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function struts_basic_apps(){
		$header['title']='Struts Basic Application';
		$header['heading']='Struts Basic Application';
		$header['keywords']='struts, java';
		$header['description']='struts basic application';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('struts/basic_apps');
		$this->load->view('footer');
	}

	public function struts_introduction(){
		$header['title']='Struts Introduction';
		$header['heading']='Struts Introduction';
		$header['keywords']='struts, java';
		$header['description']='struts basic application';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('struts/struts-introduction');
		$this->load->view('footer');
	}


	public function struts_first_application(){
		$header['title']='Struts First Application';
		$header['heading']='Struts First Application';
		$header['keywords']='struts, java';
		$header['description']='struts basic application';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('struts/struts-first-app');
		$this->load->view('footer');
	}


	public function struts_login_application(){
		$header['title']='Struts Login Application';
		$header['heading']='Struts Login Application';
		$header['keywords']='struts, java';
		$header['description']='struts basic application';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('struts/struts-login-app');
		$this->load->view('footer');
	}



}