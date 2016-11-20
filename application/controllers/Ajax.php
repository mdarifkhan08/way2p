<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ajax extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function post_request_in_ajax(){
		$header['title']='Send Form Data Using Post Method And Ajax, Send Form Data With Post Request And Ajax';
		$header['heading']='Send Form Data Using Ajax and Post Request';
		$header['keywords']='ajax, jquery, javascript';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('ajax/send_form_data_using_post_method_and_ajax');
		$this->load->view('footer');
	}

	public function get_request_in_ajax(){
		$header['title']='Send Get Request By Using Anchor Tag And Ajax';
		$header['heading']='Send Get Request By Using Anchor Tag And Ajax';
		$header['keywords']='get request in ajax,ajax get request and php,get request,';
		$header['description']='This is basic application that used basic get request in ajax and php PDO to get data from database using get request';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('ajax/send_request_by_anchor_tag');
		$this->load->view('footer');
	}
}