<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formmanado extends CI_Controller {


	//load tampilan form data manado yang so ta isi
	public function index()
	{
		
		$isi['tformm'] = $this->M_formm->getform();
		$this->load->view('admin/formmanado/formmanado', $isi);
	}

	//for mo load data dropdown di tambah data manado

	public function tambahdata()
	{
		$this->isi['kendaraan']	= $this->M_kendaraan->cth();
		$this->isi['pengemudi'] = $this->M_pengemudi->cth();
		$this->isi['tformm'] = $this->M_formm->getform('t_form_manado');
		$this->load->view('admin/formmanado/tambahdatamanado', $this->isi);
	}
	


	//for mo insert data di tambah data manado

	public function insert_test()
		{
		$key							= $this->input->post('id_formm');
		$data['tgl_keberangkatan']		= $this->input->post('tgl_keberangkatan');
		$data['jam_keberangkatan']		= $this->input->post('jam_keberangkatan');
		$data['nama_pengemudi']			= $this->input->post('nama_pengemudi');
		$data['kode_kendaraan']			= $this->input->post('kode_kendaraan');
		$data['jenis_kendaraan']	    = $this->input->post('jenis_kendaraan');
		
		$this->db->where('t_form_manado.id_formm', $key);
		$query = $this->M_formm->coba2($key);
		if($query ->num_rows()>0) 
		{
		    $this->session->set_flashdata('sukses');
		}
		else
		{
			$this->M_formm->coba('t_form_manado',$data);
		}
		redirect('formmanado/index');

	}

	
	//ini nda jdi pake mar nnti klo mo pke bru se pindah

	//public function insert()
		//{
		//$tgl_keberangkatan = $_POST['tgl_keberangkatan'];
		//$jam_keberangkatan = $_POST['jam_keberangkatan'];
		//$nama_pengemudi= $_POST['nama_pengemudi'];
		//$kode_kendaraan =$_POST['kode_kendaraan'];
		//$data = array('tgl_keberangkatan' => $tgl_keberangkatan, 'jam_keberangkatan' => $jam_keberangkatan, 'nama_pengemudi' => $nama_pengemudi, 'kode_kendaraan' => $kode_kendaraan);
		//$simpan = $this->M_formm->insertdata('t_form_manado',$data);
		//if($simpan > 0) {
		//     redirect('formmanado/index');
		//}else{
		//	echo 'gagal input';
		//}
	

	}
	