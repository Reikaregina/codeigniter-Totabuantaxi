<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarKendaraan extends CI_Controller {

	public function index()
	{
		$this->data3['Dkendaraan'] = $this->M_kendaraan->getkendaraan('t_kendaraan');
		$this->load->view('admin/kendaraan/daftarkendaraan', $this->data3);
	}

	public function insert()
		{
		
		$j_kendaraan = $_POST['j_kendaraan'];
		$plat_nomor = $_POST['plat_nomor'];
		$pemilik = $_POST['pemilik'];
		$j_tempat_duduk = $_POST['j_tempat_duduk'];
		$stnk = $_POST['stnk'];
		$data = array('j_kendaraan' => $j_kendaraan, 'plat_nomor' => $plat_nomor, 'pemilik' => $pemilik, 'j_tempat_duduk' => $j_tempat_duduk, 'stnk' => $stnk);
		$insert = $this->M_kendaraan->insertdataK('t_kendaraan',$data);
		if($insert > 0) {
		     redirect('daftarkendaraan/index');
		}else{
			echo 'gagal input';
		}
	}
	public function tambahdata()
	{
		$this->load->view('admin/kendaraan/tambahdata');
	}

	public function delete($id_kendaraan)
	{

		$hapus = $this->M_kendaraan->hapusData('t_kendaraan',$id_kendaraan);
		if($hapus > 0) {
		     redirect('DaftarKendaraan/index');
		}else{
			echo 'gagal hapus';
		}
	}


	public function edit($id_kendaraan)
	{
		$this->data3['dataEdit'] = $this->M_kendaraan->dataEdit('t_kendaraan',$id_kendaraan);
		$this->load->view('admin/kendaraan/formedit_kendaraan', $this->data3);
	}

	

	public function ubah($id)
		{
		$j_kendaraan = $_POST['j_kendaraan'];
		$plat_nomor = $_POST['plat_nomor'];
		$pemilik = $_POST['pemilik'];
		$j_tempat_duduk = $_POST['j_tempat_duduk'];
		$stnk = $_POST['stnk'];
		$data = array('j_kendaraan' => $j_kendaraan, 'plat_nomor' => $plat_nomor, 'pemilik' => $pemilik, 'j_tempat_duduk' => $j_tempat_duduk, 'stnk' => $stnk);
		$edit = $this->M_kendaraan->editData('t_kendaraan',$data,$id);
		
		if($edit > 0) {
		     redirect('daftarkendaraan/index');
		}else{
			echo 'gagal input';
		}
		$this->model_login->getsqurity();
	}
}
	