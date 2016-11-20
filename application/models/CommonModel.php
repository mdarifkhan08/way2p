<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommonModel extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function insertIpAddress($data){
		$this->db->insert('ip_address',$data);
	}
	
	public function getPageViews($qu){
		$this->db->select('*');
		$this->db->like("created_at", $qu);
		$data=$this->db->get('ip_address')->result_array();
		return $data;
	}
	
	
	public function getCountViews($qu){
		$this->db->select('*');
		$this->db->like("created_at", $qu);
		$data=$this->db->get('ip_address');
		return $data->num_rows();
	}

}