<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Angular2 extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}


	public function setup_angular2(){
		$header['title']='Setup of Angular2';
		$header['heading']='Setup of Angular2';
		$header['keywords']='Angularjs,angular2';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/setup-angular2');
		$this->load->view('footer');
	}


	public function angular2_first_app_sending_simple_json_object_to_view(){
		$header['title']='Angular2 Binding Simple Json Object To View';
		$header['heading']='Angular2 Binding Simple Json Object To View';
		$header['keywords']='Angularjs,angular2';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/angular2-first-app-sending-simple-json-object-to-view');
		$this->load->view('footer');
	}



	public function angular2_second_app_binding_multiple_json_object_to_view(){
		$header['title']='Angular2 Binding Multiple Json Object To View';
		$header['heading']='Angular2 Binding Multiple Json Object To View';
		$header['keywords']='Angularjs,angular2';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/angular2-second-app-sending-multiple-json-object-to-view');
		$this->load->view('footer');
	}




	public function angular2_third_app_onclick_name_get_the_full_details_of_person(){
		$header['title']='Angular2 On Click Name Get Full Details of Person';
		$header['heading']='Angular2 On Click Name Get Full Details of Person';
		$header['keywords']='Angularjs,angular2';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/angular2-third-app-onclick-name-get-the-full-details-of-person');
		$this->load->view('footer');
	}



	public function angular2_data_sharing_between_two_component(){
		$header['title']='Angular2 Data Sharing Between two Component';
		$header['heading']='Angular2 Data Sharing Between two Component';
		$header['keywords']='Angularjs,angular2';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/angular2-4th-app-data-sharing-between-component');
		$this->load->view('footer');
	}



	public function angular2_data_sharing_between_three_component(){
		$header['title']='Angular2 Data Sharing Between three Component';
		$header['heading']='Angular2 Data Sharing Between three Component';
		$header['keywords']='Angularjs,angular2';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/angular2-5th-app-data-sharing-between-three-component');
		$this->load->view('footer');
	}



	public function angular2_services(){
		$header['title']='Angular2 Services';
		$header['heading']='Angular2 Services';
		$header['keywords']='Angularjs,angular2';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/angular2-services');
		$this->load->view('footer');
	}


	public function angular2_related_concept(){
		$header['title']='Angular2 Related Concepts';
		$header['heading']='Angular2 Related Concepts';
		$header['keywords']='Angularjs,angular2,jsonp';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/angular2-related-concept');
		$this->load->view('footer');
	}

	public function hcl_two_way_binding(){
		$header['title']='Two way binding';
		$header['heading']='Two way binding';
		$header['keywords']='Angularjs,angular2,jsonp';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/hcl-two-way-databinding');
		$this->load->view('footer');
	}

	public function hcl_routing(){
		$header['title']='Angular2 Routing';
		$header['heading']='Angular2 Routing';
		$header['keywords']='Angularjs,angular2,jsonp,angular2 routing';
		$header['description']='in this page we will cover angular2 routing';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/hcl-angular2-routing');
		$this->load->view('footer');
	}


	public function handle_static_data_with_observable(){
		$header['title']='Angular2 Handle static data with observable and async pipe';
		$header['heading']='Angular2 Handle static data with observable and async pipe';
		$header['keywords']='Angularjs,angular2,jsonp,angular2 routing';
		$header['description']='in this page we will cover angular2 routing';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/hcl_get_static_data_using_service_with_observable');
		$this->load->view('footer');
	}


	public function es5_function_object_keys(){
		$header['title']='ES5 Object.Keys() Function';
		$header['heading']='ES5 Object.Keys() Function';
		$header['keywords']='Angularjs,angular2,jsonp,angular2 routing';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/');
		$this->load->view('footer');
	}


	public function how_to_configure_ngrx_store_in_angular2_webpack_starter(){
		$header['title']='configure @ngrx/store with angular2 webpack starter';
		$header['heading']='configure @ngrx/store with angular2 webpack starter';
		$header['keywords']='Angularjs,angular2,jsonp,angular2 routing';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/how_to_configure_ngrx_store_in_angular2_webpack_starter');
		$this->load->view('footer');
	}


	public function es2015_var_let_const(){
		$header['title']='var, let and const';
		$header['heading']='var, let and const';
		$header['keywords']='Angularjs,angular2,jsonp,angular2 routing';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/es2015_var_let_const');
		$this->load->view('footer');
	}

	public function ng2_bootstrap_typeahead(){
		$header['title']='Ng2 Bootstrap typeahead for Angular2';
		$header['heading']='Ng2 Bootstrap typeahead for Angular2';
		$header['keywords']='Angularjs,angular2,jsonp,angular2 routing';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/ng2-bootstrap-typeahead');
		$this->load->view('footer');
	}

	public function rxjs_observable(){
		$header['title']='Rxjs Observable Basics';
		$header['heading']='Rxjs Observable Basics';
		$header['keywords']='Angularjs,angular2,jsonp,angular2 routing';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/observable');
		$this->load->view('footer');
	}


	public function es2015_arrow_function(){
		$header['title']='ES2015 Arrow Function';
		$header['heading']='ES2015 Arrow Function';
		$header['keywords']='Angularjs,angular2,jsonp,angular2 routing';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('angular2/es2015_arrow_function');
		$this->load->view('footer');
	}





	


   



	
}