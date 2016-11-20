<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CoreJava extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function prime_number_program(){
		$header['title']='Prime Number Program';
		$header['heading']='Prime Number Program';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corejava/prime_number_program');
		$this->load->view('footer');
	}

	public function increment_decrement_operator(){
		$header['title']='Increment Decrement Operator';
		$header['heading']='Increment Decrement Operator';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corejava/increment_decrement_operator');
		$this->load->view('footer');
	}

	

	public function sum_of_digits_java_program(){
		$header['title']='Sum Of digits java Application';
		$header['heading']='Sum Of digits java Application';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corejava/sum_of_digits_java_program');
		$this->load->view('footer');
	}


    public function convert_binary_number_to_decimal(){
		$header['title']='Convert binary number to decimal in java Application';
		$header['heading']='Convert binary number to decimal in java Application';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corejava/convert_binary_number_to_decimal_number');
		$this->load->view('footer');
	}


	public function even_and_odd_number_application(){
		$header['title']='Even and Odd Number Program';
		$header['heading']='Even and Odd Number Program';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corejava/even_and_odd_number_programs');
		$this->load->view('footer');
	}
	
	
	public function private_constructor(){
		$header['title']='Private Constructor In Java';
		$header['heading']='Private Constructor In Java';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corejava/private_constructor');
		$this->load->view('footer');
	}
	
	
	public function singleton_design_pattern(){
		$header['title']='Singleton design pattern';
		$header['heading']='Singleton design pattern';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corejava/singleton-design-pattern');
		$this->load->view('footer');
	}



	public function tightly_and_loosely_couple_code(){
		$header['title']='Tightly and Loosely Coupling';
		$header['heading']='Tightly and Loosely Coupling';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corejava/tightly-coupled-and-loosely-coupled-code');
		$this->load->view('footer');
	}

}
	