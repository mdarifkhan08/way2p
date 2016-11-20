<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Django extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function django_setup_for_ubuntu(){
		$header['title']='Install Django In Ubuntu Operating System';
		$header['heading']='Installation Of Django Project In Ubuntu Operating System Environment';
		$header['keywords']='python, django';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('django/django_setup_for_ubuntu');
		$this->load->view('footer');
	}


	public function django_migrations(){
		$header['title']='Migrations';
		$header['heading']='Migrations';
		$header['keywords']='python, django';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('django/django-migrations');
		$this->load->view('footer');
	}



	public function create_super_user(){
		$header['title']='Create Super User For Django Project';
		$header['heading']='Create Super User(Admin)';
		$header['keywords']='python, django';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('django/create_super_user');
		$this->load->view('footer');
	}




	public function apps_in_django(){
		$header['title']='Apps In Django Project';
		$header['heading']='Apps In Django Project';
		$header['keywords']='python, django';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('django/apps_in_django');
		$this->load->view('footer');
	}



	public function setup_for_setting_py(){
		$header['title']='Work With Settings.py';
		$header['heading']='Work With Settings.py';
		$header['keywords']='python, django';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('django/setup_for_setting_py');
		$this->load->view('footer');
	}


	public function working_with_views_and_urls_in_django(){
		$header['title']='Working With Views And Urls In Django';
		$header['heading']='Working With Views And Urls In Django';
		$header['keywords']='python, django';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('django/working_with_views_and_urls_in_django');
		$this->load->view('footer');
	}



	public function models_in_django(){
		$header['title']='Models In Django';
		$header['heading']='Models In Django';
		$header['keywords']='python, django';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('django/models_in_django');
		$this->load->view('footer');
	}


	public function register_model_inside_admin_py(){
		$header['title']='Register Model Inside Admin.py File In Django Project';
		$header['heading']='Register Model Inside Admin.py File In Django Project';
		$header['keywords']='python, django';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('django/register_model_inside_admin_py');
		$this->load->view('footer');
	}



	public function forms_in_django(){
		$header['title']='Register Model With The Help Of Form And Handles Form Fields';
		$header['heading']='Register Model With The Help Of Form And Handles Form Fields';
		$header['keywords']='python, django';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('django/forms_in_django');
		$this->load->view('footer');
	}



	public function form_models_registration(){
		$header['title']='Register Model With The Help Of Forms';
		$header['heading']='Register Model With Form';
		$header['keywords']='python, django';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('django/form_models_registration');
		$this->load->view('footer');
	}



	public function custom_validation_on_form(){
		$header['title']='Custom Validation On Form Fields';
		$header['heading']='Custom Validation On Form Fields';
		$header['keywords']='python, django';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('django/custom_validation_on_form');
		$this->load->view('footer');
	}



	public function using_context_pass_the_variable_to_view(){
		$header['title']='Pass the Variable Using Context In Django';
		$header['heading']='Pass the Variable Using Context To View';
		$header['keywords']='python, django';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('django/using-context-pass-the-variable-to-view');
		$this->load->view('footer');
	}



	public function sending_form_to_view(){
		$header['title']='Send Form, Attach View And Save Data';
		$header['heading']='Send Form, Attach View And Save Data';
		$header['keywords']='python, django';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('django/sending-form-to-view');
		$this->load->view('footer');
	}



	public function using_gmail_smtp_to_send_mail(){
		$header['title']='Using Gmail SMTP to Send Mail With Django';
		$header['heading']='Sending Mail With Django';
		$header['keywords']='python, django';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('django/using-gmail-smtp-to-send-mail');
		$this->load->view('footer');
	}



	public function static_files_in_django(){
		$header['title']='Static Files In Django';
		$header['heading']='Static Files In Django';
		$header['keywords']='python, django';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('django/static-files-in-django');
		$this->load->view('footer');
	}


	public function include_template_and_block_in_django(){
		$header['title']='Include Template And Block In Django';
		$header['heading']='Include Template And Block In Django';
		$header['keywords']='python, django';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('django/include_template_and_block_in_django');
		$this->load->view('footer');
	}
}