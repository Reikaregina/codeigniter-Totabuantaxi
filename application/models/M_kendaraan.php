<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kendaraan extends CI_Model {

	public function getkendaraan($t_kendaraan)
	{
		 $data3 = $this->db->get($t_kendaraan);
		 return $data3->result_array();
	}

	public function insertdataK($t_kendaraan, $datak)
    {
    	$insert = $this->db->insert($t_kendaraan,$datak);
    	return $datak;
    }

    public function hapusData($t_kendaraan,$id)
    {
    	$this->db->where('id_kendaraan',$id);
    	$hapus = $this->db->delete($t_kendaraan);
    	return $hapus;

    }

    public function editData($t_kendaraan,$data,$id)
    {
        $this->db->where('id_kendaraan',$id);
        $edit = $this->db->update($t_kendaraan,$data);
        return $edit;
    }


    public function dataEdit($t_kendaraan,$id)
    {
         $this->db->where('id_kendaraan',$id);
         $data = $this->db->get($t_kendaraan);
         return $data->row();
    }

    public function cth()
    {
         return $this->db->get('t_kendaraan');
    }
    

}
?>