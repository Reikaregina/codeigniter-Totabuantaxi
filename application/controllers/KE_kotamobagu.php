<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KE_kotamobagu extends CI_Controller {

	public function index()
	{
		$this->data1['trayekkotamobagu'] = $this->M_admin->getmanado('t_kotamobagu');
		$this->load->view('admin/kekotamobagu/KE_kotamobagu', $this->data1);
	}
}
	