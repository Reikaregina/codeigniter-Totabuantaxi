<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_formm extends CI_Model {

    //for mo se tampil data dari database ke table form manado

	public function getform()
	{
		 $this->db->join('t_kendaraan','t_form_manado.kode_kendaraan = t_kendaraan.plat_nomor','inner');
        return $this->db->get('t_form_manado');
	}


     //form mo se konek dengan databse pas mo insert data
    public function coba($table, $data)
    {
        $this->db->insert($table,$data);
    }

    public function coba2()
   {
     return $this->db->get('t_form_manado');
    }


    //so nda pake
   // public function insertdata($t_form_manado, $data)
    //{
        //$insert = $this->db->insert($t_form_manado,$data);
        //return $data;
    //}

    
}
