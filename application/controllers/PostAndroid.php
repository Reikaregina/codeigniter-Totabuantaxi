 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class PostAndroid extends REST_Controller {  

 function index_post() {
    
        $data = array(
                    'id_penumpang'           => $this->post('id_penumpang'),
                    'nama_penumpang'         => $this->post('nama_penumpang'),
                    'jml_bayar'              => $this->post('jml_bayar'),
                    'tgl_keberangkatan'      => $this->post('tgl_keberangkatan'),
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
 }
?>