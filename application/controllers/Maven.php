<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Maven extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function hibernate_dependency(){
		$header['title']='Hibernate Dependency';
		$header['heading']='Hibernate Dependency';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('maven/hibernate');
		$this->load->view('footer');
	}
	
	
	public function jax_rs_dependency(){
		$header['title']='REST First App';
		$header['heading']='REST First App';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('maven/jax_rs_dependency');
		$this->load->view('footer');
	}
	
	
	
	public function junit(){
		$header['title']='Junit Dependency';
		$header['heading']='Junit Dependency';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('maven/junit');
		$this->load->view('footer');
	}
	
	
	
	public function servlet_jsp_jstl(){
		$header['title']='Servlet Dependency/JSP Dependency/JSTL Dependency';
		$header['heading']='Servlet Dependency/JSP Dependency/JSTL Dependency';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('maven/servlet_jsp_jstl');
		$this->load->view('footer');
	}
	
	
	
	
	public function spring_data(){
		$header['title']='Spring-Data Dependency';
		$header['heading']='Spring-Data Dependency';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('maven/spring_data');
		$this->load->view('footer');
	}
	
	
	
	
	public function spring_hibernate(){
		$header['title']='Spring Hibernate Dependency';
		$header['heading']='Spring Hibernate Dependency';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('maven/spring_hibernate');
		$this->load->view('footer');
	}
	
	
	
	
	public function spring_mvc(){
		$header['title']='Spring MVC Dependency';
		$header['heading']='Spring MVC Dependency';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('maven/spring_mvc');
		$this->load->view('footer');
	}
	
	
	
	public function struts(){
		$header['title']='Struts Dependency';
		$header['heading']='Struts Dependency';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('maven/struts');
		$this->load->view('footer');
	}
	
	
	
	public function google_gson(){
		$header['title']='Google Gson Dependency';
		$header['heading']='Google Gson Dependency';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('maven/google_gson');
		$this->load->view('footer');
	}
	
	
	
	
	public function mysql_connector(){
		$header['title']='Mysql Connector Dependency';
		$header['heading']='Mysql Connector Dependency';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('maven/mysql_connector');
		$this->load->view('footer');
	}
}