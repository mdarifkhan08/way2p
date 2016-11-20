<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Codeigniter extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function codeigniter_introduction(){
		$header['title']='Codeigniter Introduction | Codeigniter Framework';
		$header['heading']='Codeigniter Introduction';
		$header['keywords']='php, codeigniter';
		$header['description']='Codeigniter Introduction';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('codeigniter/codeigniter-introduction');
		$this->load->view('footer');
	}


	public function seo_url_in_codeigniter(){
		$header['title']='SEO friendly URL in codeigniter Or remove index.php from url';
		$header['heading']='SEO friendly URL in codeigniter Or remove index.php from url';
		$header['keywords']='php, codeigniter';
		$header['description']='SEO friendly URL in codeigniter Or remove index.php from url';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('codeigniter/codeigniter_seo_friendly_url');
		$this->load->view('footer');
	}


	public function insert_data(){
		$header['title']='Insert Data Using Codeigniter';
		$header['heading']='Insert Data Using Codeigniter';
		$header['keywords']='php, codeigniter';
		$header['description']='Insert Data Using Codeigniter';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('codeigniter/insert-data');
		$this->load->view('footer');
	}


	public function user_panel_in_codeigniter(){
		$header['title']='User panel in codeigniter';
		$header['heading']='User panel in codeigniter';
		$header['keywords']='php, codeigniter';
		$header['description']='User panel in codeigniter';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('codeigniter/codeigniter-login-logout-sytem');
		$this->load->view('footer');
	}

	public function internationalization_in_codeigniter(){
		$header['title']='Internationalization In Codeigniter';
		$header['heading']='Internationalization In Codeigniter';
		$header['keywords']='php, codeigniter';
		$header['description']='Internationalization In Codeigniter';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('codeigniter/i18n-in-codeigniter');
		$this->load->view('footer');
	}


	public function insert_and_select(){
		$header['title']='Insert And Select Operation';
		$header['heading']='Insert And Select Operation';
		$header['keywords']='php, codeigniter';
		$header['description']='Insert And Select Operation in codeigniter';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('codeigniter/codeigniter-insert-select');
		$this->load->view('footer');
	}

	public function pagination_in_codeigniter(){
		$header['title']='Pagination In Codeigniter';
		$header['heading']='Pagination In Codeigniter';
		$header['keywords']='php, codeigniter';
		$header['description']='Pagination In Codeigniter';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('codeigniter/codeigniter-pagination');
		$this->load->view('footer');
	}
	
	
	public function htaccess_for_hostinger(){
		$header['title']='.htaccess file for hostinger';
		$header['heading']='.htaccess file for hostinger';
		$header['keywords']='php, codeigniter';
		$header['description']='Pagination In Codeigniter';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('codeigniter/htaccess-file-for-hostinger');
		$this->load->view('footer');
	}


}