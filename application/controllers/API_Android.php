<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class API_Android extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    //Menampilkan data kontak
    function index_get() { 
    	$jam = $_GET['jam'];
    	$tgl = $_GET['tgl'];
    	
        $this->db->where('jam_keberangkatan', $jam);
        $this->db->where('tgl_keberangkatan', $tgl);
        $result = $this->db->get('t_form_kotamobagu')->result();

        if ($result != null) {	

       		foreach($result as $row) {
                $data = array();
                $data['id'] = $row->id_formk;
                $data['tgl'] = $row->tgl_keberangkatan;
                $data['jam'] = $row->jam_keberangkatan;
                $data['jenis_kendaraan'] = $row->jenis_kendaraan;
                $data['nama_pengemudi'] = $row->nama_pengemudi;
                $data['kode_kendaraan'] = $row->kode_kendaraan;
                header('Content-Type: application/json');
                $output = json_encode(array('responsedata' => $data));
                echo $output;
            }


        } else {

        	$errorMessage = [
        		'code' => 404,
        		'message' => 'data not found'
        	];
 			$output = json_encode(array('responsedata' => $errorMessage));
            echo $output;
       
        }
       
    }

    function index_post() {
    	$jam = $_POST["jam"];
    	$tgl = $_POST["tgl"];
    	$kursi = $_POST["kursi"];
    	$harga = $_POST["harga"];
    	$nama_pengemudi = $_POST["supir"];
    	$kode_kendaraan = $_POST["platno"];
    	$jenis_kendaraan = $_POST["jenisoto"];
	    header('Content-Type: application/json');

    	$data = [
    		//'nama_penumpang' =>
    		'jml_bayar' => $harga,
    		'tgl_keberangkatan' => $tgl,
     		'jam_keberangkatan' => $jam,
    		//'no_telp' =>
    		'kode_kursi' =>  $kursi,
    		'nama_pengemudi' => $nama_pengemudi,
    		'kode_kendaraan' => $kode_kendaraan,
    		'jenis_kendaraan' => $jenis_kendaraan
    	];


    	if (isset($jam) && isset($tgl) && isset($kursi) && isset($harga) && 
    		isset($nama_pengemudi) && isset($kode_kendaraan) && isset($jenis_kendaraan)) {
    		

    		$storeData = $this->db->insert('t_penumpang', $data);

    		if ($storeData) {
    			$successMessage = [
	        		'code' => 200,
	        		'message' => 'Data has been saved'
	        	];

       			$output = json_encode(array('responsedata' => $successMessage));
            	echo $output;
    		} else { 
    			$errorMessage = [
	        		'code' => 403,
	        		'message' => 'Bad Request'
	        	];

       			$output = json_encode(array('responsedata' => $errorMessage));
            	echo $output;
    		}

    	} else {

    		echo "data null";

    	}

    }
    
}
?>