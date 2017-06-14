<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function registration()
	{
		$data = array(	'username' => $this->input->post('username'),
						'password' => $this->input->post('password'),
						'email' => $this->input->post('email')
			);
		return $this->db->insert('member',$data);
	}
}
