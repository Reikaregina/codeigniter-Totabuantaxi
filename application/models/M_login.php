<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function user_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$this->db->from('admin');
		$query = $this->db->get();
		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function getsqurity()
	{
		$username = $this->session->userdata('username');
		if(empty($username))
		{
			$this->session->sess_destroy();
			redirect('');
		}
	}
}
