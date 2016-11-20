<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Nodejs extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function node_js_mean_app_1(){
		$header['title']='Node Js Mean Application';
		$header['heading']='Node Js Mean Application';
		$header['keywords']='Nodejs';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('nodejs/mean_app_1');
		$this->load->view('footer');
	}


	public function node_js_basic_application(){
		$header['title']='Node Js Basic Application';
		$header['heading']='Node Js Basic Application';
		$header['keywords']='Nodejs';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('nodejs/node_js_basic_app');
		$this->load->view('footer');
	}



	public function node_js_chat_application(){
		$header['title']='Node Js Chat Application';
		$header['heading']='Node Js Chat Application';
		$header['keywords']='Nodejs';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('nodejs/node_js_chat_app');
		$this->load->view('footer');
	}
}