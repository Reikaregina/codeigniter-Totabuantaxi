<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarpenumpang extends CI_Controller {

public function __construct(){
    parent::__construct();
    
    $this->load->model('M_penumpang');
  }
  
  public function index(){
    $data['t_penumpang'] = $this->M_penumpang->view_row();
    $this->load->view('admin/penumpang/daftarpenumpang', $data);
  }
  
  public function cetak(){
    ob_start();
    $data['t_penumpang'] = $this->M_penumpang->view_row();
    $this->load->view('print', $data);
    $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
    $pdf->Output('DataPenumpangKotamobagu.pdf', 'D');
  }

public function manado(){
    $data['t_penumpangm'] = $this->M_penumpang->view_rowmanado();
    $this->load->view('admin/penumpang/daftarpenumpangm', $data);
  }
  
  public function cetakmanado(){
    ob_start();
    $data['t_penumpangm'] = $this->M_penumpang->view_rowmanado();
    $this->load->view('cetak', $data);
    $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
    $pdf->Output('DataPenumpangManado.pdf', 'D');
  }



	//public function index()
	//{
		//$this->data['penumpang'] = $this->M_penumpang->getpenumpang('t_penumpang');
		//$this->load->view('admin/penumpang/daftarpenumpang', $this->data);
	//}

	//public function delete($id_penumpang)
	//{
		//$hapus = $this->M_penumpang->hapusData('t_penumpang',$id_penumpang);
		//if($hapus > 0) {
		  //   redirect('daftarpenumpang');
		//}else{
		//	echo 'gagal hapus';
		//}
	//}

	


   


	
}
	