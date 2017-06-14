<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('main/login');
	}

	public function log_in(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('main/login');
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$member_id = $this->login_model->login($username,$password);
			if ($member_id) {
				$member_data = array(	'member_id' => $member_id,
										'username' => $username,
										'logged_in' => true
				 );
			$this->session->set_userdata('member_data');
			redirect('main');
			}else{
				redirect('login/log_in');
			}
		}
	}

	public function logout(){
		$this->session->unset_userdata('member_data');

		redirect('login');
	}
}
