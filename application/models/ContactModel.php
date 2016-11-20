<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactModel extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function insertMessage($data){
		$this->db->insert('contact',$data);
	}

}