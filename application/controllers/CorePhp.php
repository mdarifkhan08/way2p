<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CorePhp extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function operators(){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corephp/operators');
		$this->load->view('footer');
	}
	
	
	
	public function array_in_php(){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corephp/array');
		$this->load->view('footer');
	}
	
	
	
	public function pdo(){
		$header['title']='PDO(PHP Data Object) Configutaion';
		$header['heading']='PDO(PHP Data Object) Configutaion';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corephp/pdo-in-php');
		$this->load->view('footer');
	}
	
	
	
	
	public function live_search(){
		$header['title']='Live Search With PHP';
		$header['heading']='Live Search With PHP';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corephp/live-search');
		$this->load->view('footer');
	}
	
	
	
	public function dynamic_image_slider(){
		$header['title']='Dynamic Image Slider With PHP';
		$header['heading']='Dynamic Image Slider With PHP';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corephp/dynamic-image-slider-in-php');
		$this->load->view('footer');
	}
	
	
	
	
	public function admin_panel_in_php(){
		$header['title']='Admin Panel In Php';
		$header['heading']='Admin Panel In Php';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corephp/dynamic-image-slider-in-php');
		$this->load->view('footer');
	}
	
	
	
	
	public function object_oriented_programming_in_php(){
		$header['title']='Object Oriented Programming in Php';
		$header['heading']='Object Oriented Programming in Php';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corephp/object-oriented-programming-in-php');
		$this->load->view('footer');
	}
	
	
	
	public function object_oriented_programming_in_php_1(){
		$header['title']='Object Oriented Programming in Php 1';
		$header['heading']='Object Oriented Programming in Php 1';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corephp/object-oriented-programming-in-php-1');
		$this->load->view('footer');
	}
	
	
	
	public function implode_and_explode_in_php(){
		$header['title']='Implode And Explode In Php';
		$header['heading']='Implode And Explode In Php';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corephp/implode-and-explode-in-php');
		$this->load->view('footer');
	}
	
	
	
	public function upload_videos_1(){
		$header['title']='Upload Video In Php';
		$header['heading']='Upload Video In Php';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corephp/upload-video-1');
		$this->load->view('footer');
	}
	
	
	public function upload_csv_1(){
		$header['title']='Upload CSV In Php';
		$header['heading']='Upload CSV In Php';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corephp/upload-csv-1');
		$this->load->view('footer');
	}
	
	
	public function work_with_timestamp(){
		$header['title']='Mysql Timestamp Useful Part With Php';
		$header['heading']='Mysql Timestamp Useful Part With Php';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('corephp/mysql-timestamp-with-php');
		$this->load->view('footer');
	}

}