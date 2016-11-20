<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Rest extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function first_app(){
		$header['title']='Restful api with JAX-RS-1';
		$header['heading']='Restful api with JAX-RS';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('rest/first_app');
		$this->load->view('footer');
	}
	
	public function consuming_restful_webservices_with_angularjs(){
		$header['title']='Consuming restful webservice with angularjs client';
		$header['heading']='Consuming restful webservice with angularjs client';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('rest/consuming_restful_webservices_with_angularjs');
		$this->load->view('footer');
	}
	
	
	
	public function consuming_restful_webservices_with_angularjs_using_mysql(){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('rest/consuming_restful_webservices_with_angularjs_client_and_use_mysql');
		$this->load->view('footer');
	}
	
	
	
	public function restful_webservices_with_spring_hibernate_1(){
		$header['title']='Restful webservice with Spring-Hibernate and JaxRs';
		$header['heading']='Restful webservice with Spring-Hibernate and JaxRs';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('rest/restful_webservices_with_spring_hibernate_1');
		$this->load->view('footer');
	}


	
}

