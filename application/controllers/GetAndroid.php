<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class GetAndroid extends REST_Controller {

 //Mengirim atau menambah data penumpang baru

    function index_post() {
        $data = array(
                    'id_penumpang'           => $this->post('id_penumpang'),
                    'nama_penumpang'         => $this->post('nama_penumpang'),
                    'jml_bayar'              => $this->post('jml_bayar'),
                    'dateFromPesanClass'      => $this->post('tgl_keberangkatan'),
                    'jam_keberangkatan'      => $this->post('jam_keberangkatan'),
                    'no_telp'                => $this->post('no_telp'),
                    'kode_kursi'             => $this->post('kode_kursi'),
                    'nama_pengemudi'    => $this->post('nama_pengemudi'),
                    'kode_kendaraan'    => $this->post('kode_kendaraan'),
                    'jenis_kendaraan'    => $this->post('jenis_kendaraan'));
        
        $insert = $this->db->insert('t_penumpang', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    

    //Menampilkan data Form Kotamobagu
    function index_get() {
        $id = $this->get('id_formk');
        if ($id == '') {
            $admintaxi = $this->db->get('t_form_kotamobagu')->result();
        } else {
            $this->db->where('id_formk', $id);
            $admintaxi = $this->db->get('t_form_kotamobagu')->result();
        }
        $this->response($admintaxi, 200);
    }

   
   

    //Memperbarui data penumpang yang telah ada

    function index_put() {
        $id = $this->put('id_penumpang');
        $data = array(
                    'id_penumpang'       => $this->put('id_penumpang'),
                    'nama_penumpang'          => $this->put('nama_penumpang'),
                    'nomor'    => $this->put('nomor'));
        $this->db->where('id', $id);
        $update = $this->db->update('telepon', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }


   
}
?>