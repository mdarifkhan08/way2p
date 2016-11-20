<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Opencart extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function details_of_opencart_theme_in_opencart(){
		$header['title']='Template System in opencart';
		$header['heading']='Template System in opencart';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('opencart/information-of-theme-in-opencart');
		$this->load->view('footer');
	}


	public function create_view_and_control_by_the_controller(){
		$header['title']='Create view and control view by controller';
		$header['heading']='Create view and control view by controller';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('opencart/create-view-and-control-by-the-controller');
		$this->load->view('footer');
	}



	public function load_static_file_from_controller_to_view_in_opencart(){
		$header['title']='Load Static File From Controller To View';
		$header['heading']='Load Static File From Controller To View';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('opencart/load-static-file-from-controller-to-view-in-opencart');
		$this->load->view('footer');
	}



	public function insert_data_using_custom_view(){
		$header['title']='Insert Data Using Custom View In Opencart';
		$header['heading']='Insert Data Using Custom View In Opencart';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('opencart/insert-data-using-custom-view-in-opencart');
		$this->load->view('footer');
	}



	public function create_mvc_inside_your_theme_using_opencart(){
		$header['title']='Example Of Opencart MVC With Student Registration';
		$header['heading']='Example Of Opencart MVC With Student Registration';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('opencart/create-mvc-inside-your-theme-using-opencart');
		$this->load->view('footer');
	}



	public function opencart_installation_in_go_daddy_shared_hosting(){
		$header['title']='Opencart Installation In Go Daddy Shared Hosting';
		$header['heading']='Opencart Installation In Go Daddy Shared Hosting';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('opencart/opencart-installation-in-godaddy-shared-hosting');
		$this->load->view('footer');
	}



	public function opencart_validation_with_mvc(){
		$header['title']='Opencart Validation With MVC';
		$header['heading']='Opencart Validation With MVC';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('opencart/opencart-validation-with-mvc');
		$this->load->view('footer');
	}

}