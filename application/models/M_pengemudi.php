<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengemudi extends CI_Model {

	public function getpengemudi($t_pengemudi)
	{
		 $data2 = $this->db->get($t_pengemudi);
		 return $data2->result_array();
	}
	 
    public function insertdataP($t_pengemudi, $datap)
    {
    	$insert = $this->db->insert($t_pengemudi,$datap);
    	return $datap;
    }

   public function hapusData($t_pengemudi,$id)
    {
    	$this->db->where('id_pengemudi',$id);
    	$hapus = $this->db->delete($t_pengemudi);
    	return $hapus;

    }

    public function editData($t_pengemudi,$data,$id)
    {
        $this->db->where('id_pengemudi',$id);
        $edit = $this->db->update($t_pengemudi,$data);
        return $edit;
    }


    public function dataEdit($t_pengemudi,$id)
    {
         $this->db->where('id_pengemudi',$id);
         $data = $this->db->get($t_pengemudi);
         return $data->row();
    }
    public function cth()
    {
         return $this->db->get('t_pengemudi');
    }

 }