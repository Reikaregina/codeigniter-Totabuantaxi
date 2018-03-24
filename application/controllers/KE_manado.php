<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KE_manado extends CI_Controller {

	public function index()
	{
		$this->data['trayekmanado'] = $this->M_admin->getmanado('t_manado');
		$this->load->view('admin/kemanado/KE_manado', $this->data);
	}
}
	