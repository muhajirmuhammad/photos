<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function login($user,$pass){
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$result = $this->db->get('member');
		if ($result->num_rows() == 1) {
			return $result->row(0)->id;
		}else{
			return false;
		}
	}
}