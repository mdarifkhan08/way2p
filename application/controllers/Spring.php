<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spring extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function first_app(){
		$header['title']='Spring First App';
		$header['heading']='Spring First App';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/spring-first-app');
		$this->load->view('footer');
	}
	
	
	
	public function file_download(){
		$header['title']='File Download In Spring MVC';
		$header['heading']='File Download In Spring MVC';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/file_download');
		$this->load->view('footer');
	}
	
	
	
	public function file_upload(){
		$header['title']='File Upload In Spring MVC';
		$header['heading']='File Upload In Spring MVC';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/file_upload');
		$this->load->view('footer');
	}
	
	
	
	public function hibernate_settings(){
		$header['title']='Hibernate Setting In Spring';
		$header['heading']='Hibernate Setting In Spring';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/hibernate_settings');
		$this->load->view('footer');
	}
	
	
	
	public function import_xml_file(){
		$header['title']='Import XML File in Spring';
		$header['heading']='Import XML File in Spring';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/import_xml_file');
		$this->load->view('footer');
	}
	
	
	
	public function internationalization(){
		$header['title']='Spring Internationalization';
		$header['heading']='Spring Internationalization';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/internationalization');
		$this->load->view('footer');
	}
	
	
	
	
	public function problems(){
		$header['title']='Problems and Solutions In Spring Mvc';
		$header['heading']='Problems and Solutions In Spring Mvc';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/problems');
		$this->load->view('footer');
	}
	
	
	
	
	public function read_properties_file(){
		$header['title']='Read Properties File';
		$header['heading']='Read Properies File In JSP using spring mvc';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/read_properties_file');
		$this->load->view('footer');
	}
	
	
	
	
	public function read_properties_file2(){
		$header['title']='Read Properties File';
		$header['heading']='Read Properties In JSp using Spring Mvc';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/read_properties_file2');
		$this->load->view('footer');
	}
	
	
	
	
	public function resource_manage(){
		$header['title']='Resource Manage In Spring';
		$header['heading']='Resource Manage In Spring';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/resource_manage');
		$this->load->view('footer');
	}
	
	
	
	
	public function tag_lib(){
		$header['title']='All Tag Library';
		$header['heading']='All Tag Library';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/tag_lib');
		$this->load->view('footer');
	}
	
	
	
	
	public function welcome_file(){
		$header['title']='Welcome File In Spring MVC';
		$header['heading']='Welcome File In Spring MVC';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/welcome_file');
		$this->load->view('footer');
	}
	
	
	
	
	public function dependency_injection_in_spring(){
		$header['title']='Dependency Injection In Spring';
		$header['heading']='Dependency Injection In Spring';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/dependency-injection-in-spring');
		$this->load->view('footer');
	}
	
	
	
	/*spring work part 2*/
	
	
	
	/*public function spring4_mvc_with_rest_and_angularjs(){
		$header['title']='Spring4 MVC With REST Webservice With Angularjs';
		$header['heading']='Spring4 MVC With REST Webservice With Angularjs';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/spring4-mvc-with-REST-and-angularjs');
		$this->load->view('footer');
	}*/


	public function basic_annotations_of_spring(){
		$header['title']='Basic Annotaions of Spring';
		$header['heading']='Basic Annotaions of Spring';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/basic-annotations-of-spring');
		$this->load->view('footer');
	}
	
	
	
	public function spring_interview_prepration(){
		$header['title']='Spring Interview Prepration';
		$header['heading']='Spring Interview Prepration';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/spring-interview-prepration');
		$this->load->view('footer');
	}
	
	
	
	public function introduction(){
		$header['title']='Spring Core Introduction';
		$header['heading']='Spring Core Introduction';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/introduction');
		$this->load->view('footer');
	}
	
	
	
	public function dependency_injection_using_autowire_component(){
		$header['title']='Dependency Injection Using @Autowire and @Component Annotation';
		$header['heading']='Dependency Injection Using @Autowire and @Component Annotation';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/dependency-injection-using-autowire-and-component-annotation');
		$this->load->view('footer');
	}
	
	
	public function spring_data_curd_repository(){
		$header['title']='Spring Data | JPA | Curd Repository';
		$header['heading']='Spring Data with JPA and Curd Repository';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/spring_data_with_jpa_and_curd_repository');
		$this->load->view('footer');
	}
	
	
	public function details_of_ServletContainerInitializer(){
		$header['title']='Details of servlet container in spring';
		$header['heading']='Details of servlet container in spring';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/details_of_ServletContainerInitializer');
		$this->load->view('footer');
	}
	

	/* Spring Mvc afrer select in HCL*/

	public function springBootWithSpringMvcFirstApp(){
		$header['title']='Spring Boot With Spring Mvc Basic App';
		$header['heading']='Spring Boot With Spring Mvc Basic App';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/spring-boot-with-spring-mvc-basic-app');
		$this->load->view('footer');
	}


	public function springBootWithSpringMvcAndSpringHibernateWithJpaFirstApp(){
		$header['title']='Spring Boot + Spring Mvc + Jpa2 + Hibernate';
		$header['heading']='Spring Boot + Spring Mvc + Jpa2 + Hibernate';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/spring-boot-with-spring-mvc-and-spring-hibernate-with-jpa-basic-app');
		$this->load->view('footer');
	}


	public function best_example_on_dependency_injection(){
		$header['title']='Example On Dependency Injection';
		$header['heading']='Example On Dependency Injection';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/constructor-and-setter-injection-example');
		$this->load->view('footer');
	}


	public function difference_between_page_scope_and_request_scope(){
		$header['title']='Difference between page scope and request scope';
		$header['heading']='Difference between page scope and request scope';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/difference-between-page-scope-and-request-scope');
		$this->load->view('footer');
	}


	public function scope_in_jsp(){
		$header['title']='Scope in jsp';
		$header['heading']='Scope in jsp';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/scope-in-jsp');
		$this->load->view('footer');
	}


	public function use_of_http_session(){
		$header['title']='HttpSession in spring';
		$header['heading']='HttpSession in spring';
		$header['keywords']='';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/use-of-http-session-in-spring');
		$this->load->view('footer');
	}

	public function Spring4_Mvc_Validation_with_Annotation_Configuration(){
		$header['title']='Spring4 Mvc Validation with Annotation Configuration';
		$header['heading']='Spring4 Mvc Validation with Annotation Configuration';
		$header['keywords']='';
		$header['description']='Spring4 Mvc Validation with Annotation Configuration';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/Spring4_Mvc_Validation_with_Annotation_Configuration');
		$this->load->view('footer');
	}


	public function spring_restful_web_services_with_jpa2_and_annotation_configuration(){
		$header['title']='Spring Restful webservices with jpa2 and Annotation Configuration';
		$header['heading']='Spring Restful webservices with jpa2 and Annotation Configuration';
		$header['keywords']='';
		$header['description']='Spring Restful webservices with jpa2 and Annotation Configuration';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('spring/spring_restful_web_services_with_jpa2_and_annotation_configuration');
		$this->load->view('footer');
	}

	
}