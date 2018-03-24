<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function dashboard()
	{
		if($this->session->userdata('user_login'))
		{
			$this->load->view('admin/static');
		}
		else
		{
			$this->M_login->getsqurity();
		}
	}
}
	