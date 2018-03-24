<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('user_login'))
		{
			redirect('home/dashboard');
		}
		else
		{
		$this->load->view('Login');
		}
	}

	public function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','callback_check_login');
		$this->form_validation->set_rules('password','Password','md5');
		if($this->form_validation->run() == false)
		{
			$this->index();
		}
		else
		{
			redirect('home/dashboard');
		}
	}

	public function check_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->M_login->user_login($username,$password);
		if($result)
		{
			foreach($result as $a)
			{
				$i = array();
				$i['user_login']			= 1;
				$i['id']					= $a->id;
				$i['username']				= $a->username;
				$i['password']				= $a->password;
				$this->session->set_userdata($i);

			}
		}
		else
		{
			$this->form_validation->set_message('check_login','maaf username atau passwor anda salah');
			return false;
		}
	} 
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}