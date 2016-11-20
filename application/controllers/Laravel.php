<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Laravel extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function htaccess_file_for_production(){
		$header['title']='.htaccess file for production use';
		$header['heading']='.htaccess file for production use';
		$header['keywords']='.htaccess, laravel5';
		$header['description']='.htaccess configuration for production use in laravel';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('laravel/htaccess-file-for-production');
		$this->load->view('footer');
	}


	public function static_file_in_laravel(){
		$header['title']='Static File In Laravel';
		$header['heading']='Static File In Laravel';
		$header['keywords']='laravel5, php';
		$header['description']='way to use static file in laravel';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('laravel/static-file-in-laravel');
		$this->load->view('footer');
	}


	public function template_system_in_laravel(){
		$header['title']='template system in laravel';
		$header['heading']='template system in laravel';
		$header['keywords']='laravel5, php';
		$header['description']='way to use template system in laravel';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('laravel/template-system-in-laravel');
		$this->load->view('footer');
	}


	public function control_view_using_controller_in_laravel(){
		$header['title']='Control view using controller';
		$header['heading']='Control view using controller';
		$header['keywords']='laravel5, php';
		$header['description']='way to Control view using controller';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('laravel/control-view-using-controller-in-laravel');
		$this->load->view('footer');
	}


	public function configure_database_in_laravel(){
		$header['title']='Configure Database In Laravel';
		$header['heading']='Configure Database In Laravel';
		$header['keywords']='laravel5, php';
		$header['description']='way to Configure Database In Laravel';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('laravel/configure-database-in-laravel');
		$this->load->view('footer');
	}


	public function create_migration(){
		$header['title']='Create Migration';
		$header['heading']='Create Migration';
		$header['keywords']='laravel5, php';
		$header['description']='way to Create Migration In Laravel';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('laravel/work-with-migration');
		$this->load->view('footer');
	}


	public function insert_data(){
		$header['title']='Insert Data';
		$header['heading']='Insert Data';
		$header['keywords']='laravel5, php';
		$header['description']='way to Insert Data In Laravel';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('laravel/insert-data-into-database-using-laravel');
		$this->load->view('footer');
	}


	public function settings_form_facades_html_facedes(){
		$header['title']='Settings Of Form Facades And Html Facades';
		$header['heading']='Settings Of Form Facades And Html Facades';
		$header['keywords']='laravel5, php';
		$header['description']='Settings Of Form Facades And Html Facades';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('laravel/settings-of-html-and-forms-facades');
		$this->load->view('footer');
	}

	public function errors_in_laravel_and_solutions_of_them(){
		$header['title']='Errors In Laravel And Solutions Of them';
		$header['heading']='Errors In Laravel And Solutions Of them';
		$header['keywords']='laravel5, php';
		$header['description']='Errors In Laravel And Solutions Of them';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('laravel/errors-in-laravel-and-solutions-of-them');
		$this->load->view('footer');
	}

	public function mvc_and_student_registration_in_php(){
		$header['title']='MVC With Student Registration';
		$header['heading']='MVC With Student Registration';
		$header['keywords']='laravel5, php';
		$header['description']='MVC With Student Registration';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('laravel/mvc-and-student-registration-in-php');
		$this->load->view('footer');
	}


	public function use_core_php_in_laravel(){
		$header['title']='Use Core Php In Laravel';
		$header['heading']='Use Core Php In Laravel';
		$header['keywords']='laravel5, php';
		$header['description']='way to use core php in laravel';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('laravel/how-to-use-core-php-in-laravel');
		$this->load->view('footer');
	}


	public function download_laravel(){
		$header['title']='Download/Install Laravel 5.2';
		$header['heading']='Download/Install Laravel 5.2';
		$header['keywords']='laravel5, php';
		$header['description']='Download/Install Laravel 5.2';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('laravel/download-laravel');
		$this->load->view('footer');
	}


	public function complete_mvc_in_laravel(){
		$header['title']='Complete MVC In Laravel';
		$header['heading']='Complete MVC In Laravel';
		$header['keywords']='laravel5, php';
		$header['description']='Complete MVC In Laravel';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('laravel/complete-mvc-in-laravel');
		$this->load->view('footer');
	}



	public function first_app(){
		$header['title']='Small Application In Laravel';
		$header['heading']='Small Application In Laravel';
		$header['keywords']='laravel5, php';
		$header['description']='Small Application In Laravel';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('laravel/demo-application-in-laravel');
		$this->load->view('footer');
	}



	public function authentication_system_in_laravel(){
		$header['title']='Authentication System In Laravel';
		$header['heading']='Authentication System In Laravel';
		$header['keywords']='laravel5, php';
		$header['description']='Authentication System In Laravel';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('laravel/authentication-in-laravel');
		$this->load->view('footer');
	}


	public function social_login_facebook(){
		$header['title']='Facebook Social Login  In Laravel';
		$header['heading']='Facebook Social Login  In Laravel';
		$header['keywords']='laravel5, php';
		$header['description']='Facebook Social Login  In Laravel';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('laravel/social-login-facebook');
		$this->load->view('footer');
	}
}