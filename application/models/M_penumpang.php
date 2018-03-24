<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penumpang extends CI_Model {

	
	public function view(){
    return $this->db->get('t_penumpang')->result();
      }
  
    public function view_row(){
    return $this->db->get('t_penumpang')->result();
    }



	//public function getpenumpang($t_penumpang)
	//{
		 //$data = $this->db->get($t_penumpang);
		// return $data->result_array();
	//}
	//public function hapusData($t_penumpang,$id)
   // {
    	//$this->db->where('id_penumpang',$id);
    	//$hapus = $this->db->delete($t_penumpang);
    	//return $hapus;

  //  }

    //penumpang manado

	public function viewmanado(){
    return $this->db->get('t_penumpangm')->result();
      }
  
    public function view_rowmanado(){
    return $this->db->get('t_penumpangm')->result();
    }


}
