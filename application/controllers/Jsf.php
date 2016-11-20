<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jsf extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function basic_application_in_jsf(){
		$header['title']='Basic Application In JSF';
		$header['heading']='Basic Application In JSF';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('jsf/basic_application_of_jsf');
		$this->load->view('footer');
	}


	public function jsf_app_with_basic_tags(){
		$header['title']='JSF Application with Basic Tags';
		$header['heading']='JSF Application with Basic Tags';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('jsf/jsf_app_with_basic_tags');
		$this->load->view('footer');
	}



	public function jsf_settings(){
		$header['title']='JSF Settings';
		$header['heading']='JSF Settings';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('jsf/jsf_settings');
		$this->load->view('footer');
	}



	public function jsf_tag_info(){
		$header['title']='Tags In JSF';
		$header['heading']='Tags In JSF';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('jsf/jsf_tag_info');
		$this->load->view('footer');
	}



	public function navigation_in_jsf(){
		$header['title']='Navigation In JSF';
		$header['heading']='Navigation In JSF';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('jsf/navigation_in_jsf');
		$this->load->view('footer');
	}



	public function navigation_in_jsf_2(){
		$header['title']='Navigation In JSF';
		$header['heading']='Navigation In JSF';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('jsf/one_more_navigation_in_jsf');
		$this->load->view('footer');
	}



	public function second_application_in_jsf(){
		$header['title']='Second Application In JSF';
		$header['heading']='Second Application In JSF';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('jsf/second_app');
		$this->load->view('footer');
	}

}