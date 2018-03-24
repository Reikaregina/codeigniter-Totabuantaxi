<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formkotamobagu extends CI_Controller {


	//load tampilan form data kotamobagu yang so ta isi
	public function index()
	{
		
		$isi['tformk'] = $this->M_formk->getform();
		$this->load->view('admin/formkotamobagu/formkotamobagu', $isi);
	}

	//for mo load data dropdown di tambah data manado

	public function tambahdata()
	{
		$this->isi['kendaraan']	= $this->M_kendaraan->cth();
		$this->isi['pengemudi'] = $this->M_pengemudi->cth();
		$this->isi['tformk'] = $this->M_formk->getform('t_form_kotamobagu');
		$this->load->view('admin/formkotamobagu/tambahdatakotamobagu', $this->isi);
	}

//for mo insert data di tambah data manado

	public function insert()
		{
		$key							= $this->input->post('id_formk');
		$data['tgl_keberangkatan']		= $this->input->post('tgl_keberangkatan');
		$data['jam_keberangkatan']		= $this->input->post('jam_keberangkatan');
		$data['nama_pengemudi']			= $this->input->post('nama_pengemudi');
		$data['jenis_kendaraan']	    = $this->input->post('j_kendaraan');
		$data['kode_kendaraan']	    = $this->input->post('plat_nomor');
		
		$this->db->where('t_form_kotamobagu.id_formk', $key);
		$query = $this->M_formk->coba2($key);
		if($query ->num_rows()>0) 
		{
		    $this->session->set_flashdata('sukses');
		}
		else
		{
			$this->M_formk->coba('t_form_kotamobagu',$data);
		}
		redirect('Formkotamobagu/index');

	}



	//blum mo pake
	//public function edit($tgl_keberangkatan)
	//{
		//$this->data3['dataEdit'] = $this->M_penumpang->dataEdit('t_form_kotamobagu',$tgl_keberangkatan);
		//$this->load->view('admin/formkotamobagu/editkotamobagu', $this->data3);
	//}

	//public function ubah($id)
		//{
		//$tgl_keberangkatan = $_POST['tgl_keberangkatan'];
		//$jam_keberangkatan = $_POST['jam_keberangkatan'];
		//$id_kendaraan = $_POST['id_kendaraan'];
		//$id_pengemudi = $_POST['id_pengemudi'];
		//$data = array('tgl_keberangkatan' => $jam_keberangkatan, 'jam_keberangkatan' => $jam_keberangkatan, 'id_kendaraan' => $id_kendaraan, 'id_pengemudi' => $id_pengemudi);
		//$edit = $this->M_formk->editData('t_form_kotamobagu',$data);
		//if($insert > 0) {
		    // redirect('formkotamobagu/index');
		//}else{
			//echo 'gagal edit';
		//}
	//}
}
	