<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SpringHibernate extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}


	public function spring_hibernate_application_1(){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='spring hibernate, spring-hibernate, spring';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring-hibernate/spring_hibernate_application_3');
		$this->load->view('footer');
	}
	
	public function spring_hibernate_application_2(){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='spring hibernate, spring-hibernate, spring';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring-hibernate/spring_hibernate_application_2');
		$this->load->view('footer');
	}
	
	public function spring_hibernate_application_3(){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='spring hibernate, spring-hibernate, spring';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring-hibernate/spring_hibernate_application_3');
		$this->load->view('footer');
	}
	
	public function spring_hibernate_application_4(){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='spring hibernate, spring-hibernate, spring';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring-hibernate/spring_hibernate_application_4');
		$this->load->view('footer');
	}
	
	public function one_to_one_mapping_1(){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='spring hibernate, spring-hibernate, spring';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring-hibernate/one-to-one-mapping-with-spring-mvc-and-hibernate-1');
		$this->load->view('footer');
	}
	
	public function one_to_one_mapping_2(){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='spring hibernate, spring-hibernate, spring';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring-hibernate/one-to-one-mapping-with-spring-mvc-and-hibernate-2');
		$this->load->view('footer');
	}
	
	
	public function hibernatetransactionmanager(){
		$header['title']='Hibernate Transaction Manager In Spring';
		$header['heading']='Hibernate Transaction Manager In Spring';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring-hibernate/hibernate_transaction_manager');
		$this->load->view('footer');
	}
	
	
	public function datasource_in_spring(){
		$header['title']='Datasource In Spring';
		$header['heading']='Datasource In Spring';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring-hibernate/datasource-in-spring');
		$this->load->view('footer');
	}
	
}
