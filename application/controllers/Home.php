<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ContactModel');
	}

	public function index(){
		$header['title']='Way2programming | Home';
		$header['heading']='';
		$header['keywords']='java, php, codeigniter-3.0.6, angularjs';
		$header['description']='way2programming.com';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('home');
		$this->load->view('footer');
	}
	
	public function contact(){
		
		$header['title']='Contact Us';
		$header['heading']='';
		$header['keywords']='way2programming, contact us';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('contact');
		$this->load->view('footer');
	}
	
	public function contactRequest(){
		$ms=$this->input->post('message');
		if(isset($ms)){
			$header['title']='Contact Us';
			$header['heading']='';
			$header['keywords']='';
			$header['description']='';
			$sendData['ip_address']=$this->input->server('REMOTE_ADDR');
			$sendData['email']=$this->input->post('email');
			$sendData['message']=$this->input->post('message');
			$this->ContactModel->insertMessage($sendData);
			$mess['mess']='<div class="alert alert-success">Thanks for contacting us!</div>';
			$this->load->view('header',$header);
			$this->load->view('contact',$mess);
			$this->load->view('footer');
		}
		else{
			$header['title']='Contact Us';
			$header['heading']='';
			$header['keywords']='';
			$header['description']='';
			$sendData['ip_address']=$this->input->server('REMOTE_ADDR');
			$this->load->view('header',$header);
			$this->load->view('contact');
			$this->load->view('footer');
		}
	}
	
	public function pageViews(){
		$header['title']='';
		$header['heading']='';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('page-view');
		$this->load->view('footer');
	}
	
	public function getPageViews(){
		$date=$this->input->post('created_at');
		$data['records']=$this->CommonModel->getPageViews($date);
		$data['count']=$this->CommonModel->getCountViews($date);
		$this->load->view('page-view',$data); 
	}
	
}