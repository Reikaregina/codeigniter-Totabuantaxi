<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_formk extends CI_Model {



    //for mo se tampil data dari database ke table form manado

    public function getform()
    {
         $this->db->join('t_kendaraan','t_form_kotamobagu.kode_kendaraan = t_kendaraan.plat_nomor','inner');
        return $this->db->get('t_form_kotamobagu');
    }

	 //form mo se konek dengan databse pas mo insert data
    public function coba($table, $data)
    {
        $this->db->insert($table,$data);
    }

    public function coba2()
   {
     return $this->db->get('t_form_kotamobagu');
    }
	

    public function editData($t_form_kotamobagu,$data,$id)
    {
        $this->db->where('tgl_keberangkatan',$id);
        $edit = $this->db->update($t_form_kotamobagu,$data);
        return $edit;
    }


    public function dataEdit($t_form_kotamobagu,$id)
    {
         $this->db->where('tgl_keberangkatan',$id);
         $data = $this->db->get($t_form_kotamobagu);
         return $data->row();
    }


    //blum mo pake
    //public function getform($t_form_kotamobagu)
   // {
       //  $data4 = $this->db->get($t_form_kotamobagu);
       //  return $data4->result_array();
   // }

   // public function insertdata($t_form_kotamobagu, $data)
   // {
      //  $insert = $this->db->insert($t_form_kotamobagu,$data);
       // return $data;
   // }
}
