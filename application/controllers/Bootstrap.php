<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bootstrap extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function bootstrap_navigation_menu(){
		$header['title']='Bootstrap Navigation Menu | Navigation Menu Dropdown | Simple Bootstrap Navigation Menu';
		$header['heading']='Bootstrap Navigation Menu & Navigation Menu Dropdown';
		$header['keywords']='bootstrap, html';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('bootstrap/bootstrap-navigation-menu');
		$this->load->view('footer');
	}


	public function left_navigation_menu_1(){
		$header['title']='Left Navigation Menu With Bootstrap';
		$header['heading']='Responsive Left Navigation Menu With Bootstrap';
		$header['keywords']='bootstrap, html';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('bootstrap/left_bootstrap_navigation');
		$this->load->view('footer');
	}



	public function left_navigation_menu_2(){
		$header['title']='Left Navigation Menu';
		$header['heading']='Responsive Left Navigation Menu 2';
		$header['keywords']='bootstrap, html';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('bootstrap/left_navigation_2');
		$this->load->view('footer');
	}


	public function on_page_load_open_bootstrap_model(){
		$header['title']='On Page Load Open Bootstrap Model';
		$header['heading']='On Page Load Open Bootstrap Model';
		$header['keywords']='bootstrap, html';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('bootstrap/on-page-load-open-bootstrap-model');
		$this->load->view('footer');
	}



}