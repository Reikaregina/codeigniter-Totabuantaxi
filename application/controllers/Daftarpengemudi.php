<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarpengemudi extends CI_Controller {

	public function index()
	{
		$this->data2['Dpengemudi'] = $this->M_pengemudi->getpengemudi('t_pengemudi');
		$this->load->view('admin/pengemudi/daftarpengemudi', $this->data2)
		;
	}

	public function insert()
		{
		
		$nama_pengemudi = $_POST['nama_pengemudi'];
		$no_telp_pengemudi = $_POST['no_telp_pengemudi'];
		$alamat_pengemudi = $_POST['alamat_pengemudi'];
		$sim = $_POST['sim'];
		$simpan = array('nama_pengemudi' => $nama_pengemudi, 'no_telp_pengemudi' => $no_telp_pengemudi, 'alamat_pengemudi' => $alamat_pengemudi, 'sim' => $sim);
		$insert = $this->M_pengemudi->insertdataP('t_pengemudi',$simpan);
		if($insert > 0) {
		     redirect('daftarpengemudi/index');
		}else{
			echo 'gagal input';
		}
	}

	public function delete($id_pengemudi)
	{
		$hapus = $this->M_pengemudi->hapusData('t_pengemudi',$id_pengemudi);
		if($hapus > 0) {
		     redirect('Daftarpengemudi/index');
		}else{
			echo 'gagal hapus';
		}
	}

	public function tambahdata()
	{
		$this->load->view('admin/pengemudi/tambahdata');
	}

	public function edit($id_pengemudi)
	{
		$this->data2['dataEdit'] = $this->M_pengemudi->dataEdit('t_pengemudi',$id_pengemudi);
		$this->load->view('admin/pengemudi/formeditpengemudi', $this->data2);
	}

	public function ubah($id)
	{
		$nama_pengemudi = $_POST['nama_pengemudi'];
		$no_telp_pengemudi = $_POST['no_telp_pengemudi'];
		$alamat_pengemudi = $_POST['alamat_pengemudi'];
		$sim = $_POST['sim'];
		$data = array('nama_pengemudi' => $nama_pengemudi, 'no_telp_pengemudi' => $no_telp_pengemudi, 'alamat_pengemudi' => $alamat_pengemudi, 'sim' => $sim);
		$edit = $this->M_pengemudi->editData('t_pengemudi',$data,$id);
		
		if($edit > 0) {
		     redirect('daftarpengemudi/index');
		}else{
			echo 'gagal input';
		}
	}
	
}
	