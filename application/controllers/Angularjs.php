<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Angularjs extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}


	public function angularjs_basic_application_part1(){
		$header['title']='Angularjs Basic Part 1';
		$header['heading']='Angularjs Basic Part 1';
		$header['keywords']='Angularjs';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/angularjs-basic-part1');
		$this->load->view('footer');
	}


	public function angularjs_application_part2(){
		$header['title']='Angularjs Learn And Understand';
		$header['heading']='Angularjs Learn And Understand';
		$header['keywords']='Angularjs';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/complete_angularjs');
		$this->load->view('footer');
	}



	public function http_service(){
		$header['title']='Http service';
		$header['heading']='Http service';
		$header['keywords']='Angularjs';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/http-service-in-angularjs');
		$this->load->view('footer');
	}



	public function route_in_angularjs(){
		$header['title']='Route Config In Angularjs';
		$header['heading']='Route Config In Angularjs';
		$header['keywords']='Angularjs';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/route-config-in-angularjs');
		$this->load->view('footer');
	}



	public function weather_forecast_app(){
		$header['title']='Weather Forecast App In Angularjs';
		$header['heading']='Weather Forecast App In Angularjs';
		$header['keywords']='Angularjs';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/weather-forecast-app-in-angularjs');
		$this->load->view('footer');
	}


    public function how_to_work_with_resource_service_in_angularjs(){
		$header['title']='resource service in angularjs';
		$header['heading']='resource service in angularjs';
		$header['keywords']='Angularjs';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/how_to_work_with_resource_service_in_angularjs');
		$this->load->view('footer');
	}

	public function using_resource_service_get_data(){
		$header['title']='using angularjs resource service get data from database';
		$header['heading']='using angularjs resource service get data from database';
		$header['keywords']='Angularjs';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/using-resource-service-get-data');
		$this->load->view('footer');
	}



	public function using_resource_service_get_data_and_post_data(){
		$header['title']='using angularjs resource service get data and post data';
		$header['heading']='using angularjs resource service get data and post data';
		$header['keywords']='Angularjs';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/using-resource-service-get-data-and-post-data');
		$this->load->view('footer');
	}


	public function using_resource_service_get_data_and_post_data_and_put_data(){
		$header['title']='using angularjs resource service get data and post data and Put Data';
		$header['heading']='using angularjs resource service get data and post data and Put Data';
		$header['keywords']='Angularjs';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/using-resource-service-get-data-and-post-data-put-data');
		$this->load->view('footer');
	}
	
	
	
	public function control_checkbox_using_angularjs(){
		$header['title']='Get Data From Checkbox In Angularjs';
		$header['heading']='Get Data From Checkbox Using Angularjs';
		$header['keywords']='Angularjs, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/control-checkbox-using-angularjs');
		$this->load->view('footer');
	}


	public function validation_in_angularjs(){
		$header['title']='Validation In Angularjs';
		$header['heading']='Validation In Angularjs';
		$header['keywords']='Angularjs, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/validation-in-angularjs');
		$this->load->view('footer');
	}


	public function basic_curd_operation_with_php_slim_framework(){
		$header['title']='Basic Curd Operation With Slim Rest Framework';
		$header['heading']='Basic Curd Operation With Slim Rest Framework';
		$header['keywords']='Angularjs, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/basic-curd-operation-with-php-slim-framework');
		$this->load->view('footer');
	}


	public function angular_filter_service(){
		$header['title']='Filter Service Of Angularjs';
		$header['heading']='Filter Service Of Angularjs';
		$header['keywords']='Angularjs, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/filter-service-in-angularjs');
		$this->load->view('footer');
	}


	public function angularjs_interpolation(){
		$header['title']='Angularjs Interpolation';
		$header['heading']='Angularjs Interpolation';
		$header['keywords']='Angularjs, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/interpolation');
		$this->load->view('footer');
	}


	public function angularjs_ng_click(){
		$header['title']='Angularjs ng-click';
		$header['heading']='Angularjs ng-click';
		$header['keywords']='Angularjs, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/ng-click');
		$this->load->view('footer');
	}

	public function angularjs_ng_cloak(){
		$header['title']='Angularjs ng-cloak';
		$header['heading']='Angularjs ng-cloak';
		$header['keywords']='Angularjs, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/ng-cloak');
		$this->load->view('footer');
	}


	public function angularjs_ng_hide(){
		$header['title']='Angularjs ng-hide';
		$header['heading']='Angularjs ng-hide';
		$header['keywords']='Angularjs, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/ng-hide');
		$this->load->view('footer');
	}


	public function angularjs_ng_if(){
		$header['title']='Angularjs ng-if';
		$header['heading']='Angularjs ng-if';
		$header['keywords']='Angularjs, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/ng-if');
		$this->load->view('footer');
	}


	public function angularjs_ng_keyup(){
		$header['title']='Angularjs ng-keyup';
		$header['heading']='Angularjs ng-keyup';
		$header['keywords']='Angularjs, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/ng-keyup');
		$this->load->view('footer');
	}


	public function angularjs_ng_repeat(){
		$header['title']='Angularjs ng-repeat';
		$header['heading']='Angularjs ng-repeat';
		$header['keywords']='Angularjs, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/ng-repeat');
		$this->load->view('footer');
	}

	public function angularjs_ng_show(){
		$header['title']='Angularjs ng-show';
		$header['heading']='Angularjs ng-show';
		$header['keywords']='Angularjs, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/ng-show');
		$this->load->view('footer');
	}

	public function push_data_in_array(){
		$header['title']='Push Data In Array';
		$header['heading']='Push Data In Array';
		$header['keywords']='Angularjs, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/push-data-in-array');
		$this->load->view('footer');
	}


	public function resource_service_of_angularjs(){
		$header['title']='Resource Service Of Angularjs';
		$header['heading']='Resource Service Of Angularjs';
		$header['keywords']='Angularjs, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/resource-service');
		$this->load->view('footer');
	}



	public function route_config_in_angularjs(){
		$header['title']='Route Config In Angularjs';
		$header['heading']='Route Config In Angularjs';
		$header['keywords']='Angularjs, checkbox';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angularjs/route-config-in-angularjs');
		$this->load->view('footer');
	}


	






}