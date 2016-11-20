<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hibernate extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function hibernate_introduction(){
		$header['title']='Hibernate Introduction ';
		$header['heading']='Hibernate Introduction';
		$header['keywords']='hibernate, java';
		$header['description']='basic hibernate introduction';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/hibernate-introduction');
		$this->load->view('footer');
	}


	public function hibernate_auto_ddl_operations(){
		$header['title']='Hibernate Basic Application with DDL Operations ';
		$header['heading']='Auto DDL Operations';
		$header['keywords']='hibernate, java, auto ddl';
		$header['description']='basic hibernate application with auto ddl operations';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/hibernate-auto-ddl-operations');
		$this->load->view('footer');
	}



	public function hibernate_states_of_object(){
		$header['title']='Hibernate Application With Description of States Of Object';
		$header['heading']='States Of Object In Hibernate';
		$header['keywords']='hibernate, java, states of object';
		$header['description']='basic hibernate application that describe state of object';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/hibernate_states_of_object');
		$this->load->view('footer');
	}




	public function curd_in_hibernate(){
		$header['title']='Curd Operations In Hibernate';
		$header['heading']='Curd Operations In Hibernate';
		$header['keywords']='hibernate, java, curd, ';
		$header['description']='hibernate application with curd operations';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/hibernate-curd');
		$this->load->view('footer');
	}


	public function hibernate_primary_key_generators1(){
		$header['title']='Hibernate Primary Key Auto Generators';
		$header['heading']='Hibernate Primary Key Auto Generators';
		$header['keywords']='hibernate, java, curd, ';
		$header['description']='hibernate application with primary key generators';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/hibernate-primary-key-generator1');
		$this->load->view('footer');
	}


	public function hql_operation(){
		$header['title']='Hibernate Query Language(HQL) | Application On HQL';
		$header['heading']='Hibernate Query Language(HQL)';
		$header['keywords']='hibernate, java, curd, hql';
		$header['description']='hibernate application with HQL Operations';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/how-to-work-with-hibernate-query-language');
		$this->load->view('footer');
	}



	public function introduction_hibernate(){
		$header['title']='Hibernate Introduction 2';
		$header['heading']='Hibernate Introduction 2';
		$header['keywords']='hibernate, java, curd, hql';
		$header['description']='hibernate introduction';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/introduction');
		$this->load->view('footer');
	}


	public function first_app(){
		$header['title']='Basic Hibernate Application';
		$header['heading']='Basic Hibernate Application';
		$header['keywords']='hibernate, java, curd, hql';
		$header['description']='hibernate introduction';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/first-app');
		$this->load->view('footer');
	}


	public function second_app(){
		$header['title']='Basic Hibernate Application With Annotation';
		$header['heading']='Basic Hibernate Application With Annotation';
		$header['keywords']='hibernate, java, curd, hql, hibernate annotation';
		$header['description']='basic hibernate application with annotation';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/second-app-without-annotation');
		$this->load->view('footer');
	}

    public function hibernate_select_query(){
		$header['title']='Select Data From Database';
		$header['heading']='Select Data From Database';
		$header['keywords']='hibernate, java, curd, hql, mysql';
		$header['description']='basic hibernate application with select data from database';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/hibernate_select_query');
		$this->load->view('footer');
	}

	public function hibernate_delete_update_query(){
		$header['title']='Delete or Update Data from database';
		$header['heading']='Delete or Update Data from database';
		$header['keywords']='hibernate, java, curd, hql, mysql, hibernate delete, hibernate update';
		$header['description']='basic hibernate application with delete and update data from database';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/hibernate_delete_update_query');
		$this->load->view('footer');
	}


	public function difference_between_get_and_load_in_hibernate(){
		$header['title']='Difference between get() and load()';
		$header['heading']='Difference between get() and load()';
		$header['keywords']='hibernate, java, curd, hql, mysql, hibernate delete, hibernate update';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/difference_between_get_and_load_in_hibernate');
		$this->load->view('footer');
	}


	public function one_to_one_mapping_using_annotation(){
		$header['title']='One to One Mapping using annotation';
		$header['heading']='One to One Mapping using annotation';
		$header['keywords']='hibernate, java, curd, hql, mysql, hibernate delete, hibernate update';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/one_to_one_mapping_using_annotation');
		$this->load->view('footer');
	}


	public function mapping_or_relationship_in_hibernate(){
		$header['title']='Mapping and relationship in hibernate';
		$header['heading']='Mapping and relationship in hibernate';
		$header['keywords']='hibernate, java, curd, hql, mysql, hibernate delete, hibernate update';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/mapping_and_relationship_in_hibernate');
		$this->load->view('footer');
	}


	public function difference_between_update_and_merge_method(){
		$header['title']='Difference between update() and merge()';
		$header['heading']='Difference between update() and merge()';
		$header['keywords']='hibernate, java, curd, ';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/difference_between_update_and_merge_method');
		$this->load->view('footer');
	}


	public function eager_loading_or_fetch_and_lazy_loading_or_fetch(){
		$header['title']='Eager Loading/Fetch And Lazy Loading/Fetch';
		$header['heading']='Eager Loading/Fetch And Lazy Loading/Fetch';
		$header['keywords']='hibernate, java, curd, hql,';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/eager-loading-or-fetch-and-lazy-loading-or-fetch');
		$this->load->view('footer');
	}
	
	
	
	public function hbm2ddl(){
		$header['title']='hbm2ddl.auto operations';
		$header['heading']='hbm2ddl.auto operations';
		$header['keywords']='hibernate, java, curd, hql,';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/hbm2ddl-auto');
		$this->load->view('footer');
	}
	
	
	public function basic_annotations_in_hibernate(){
		$header['title']='Basic Annotations In Hibernate';
		$header['heading']='Basic Annotation In Hibernate';
		$header['keywords']='hibernate, java, curd, hql,';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/basic-annotations-in-hibernate');
		$this->load->view('footer');
	}
	
	public function primary_key_auto_generator_part2(){
		$header['title']='Primary key auto generator part2';
		$header['heading']='Primary key auto generator part2';
		$header['keywords']='hibernate, java, curd, hql,';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/primary-key-auto-generation-part-2');
		$this->load->view('footer');
	}
	
	public function one_to_one_mapping_or_relationship(){
		$header['title']='One To One Mapping Or Relationship';
		$header['heading']='One To One Mapping Or Relationship';
		$header['keywords']='hibernate, java, curd, hql,';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/one_to_one_mapping');
		$this->load->view('footer');
	}
	

public function many_to_one_mapping(){
		$header['title']='Many To One Mapping Or Relationship';
		$header['heading']='Many To One Mapping Or Relationship';
		$header['keywords']='hibernate, java, curd, hql,';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/many_to_one_mapping');
		$this->load->view('footer');
	}


	public function many_to_one_and_one_to_many_bidirection_mapping(){
		$header['title']='Many To One And One To Many bidirection Mapping Or Relationship';
		$header['heading']='Many To One And One To Many bidirection Mapping Or Relationship';
		$header['keywords']='hibernate, java, curd, hql,';
		$header['description']='';
		$data['ip_address']=$this->input->server('REMOTE_ADDR');
		$data['page_link']='http://'.$this->input->server('SERVER_NAME').$this->input->server('REQUEST_URI');
		$this->CommonModel->insertIpAddress($data);
		$this->load->view('header',$header);
		$this->load->view('hibernate/many_to_one_and_one_to_many_bidirection_mapping');
		$this->load->view('footer');
	}



}