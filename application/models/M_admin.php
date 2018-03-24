<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function getmanado($t_manado)
	{
		 $data = $this->db->get($t_manado);
		 return $data->result_array();
	}

	public function getkotamobagu($t_kotamobagu)
	{
		 $data1 = $this->db->get($t_kotamobagu);
		 return $data1->result_array();
	}
}
