<!DOCTYPE html>
<html lang="en">


<?php $this->load->view("admin/template"); ?>
<body>
<body>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Penumpang Tujuan
                <a href="<?php echo base_url("Daftarpenumpang/index");?>">Kotamobagu</a>
            <a href="<?php echo base_url("Daftarpenumpang/manado");?>">Manado</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead >
                                       <tr>
                                            <th>ID Penumpang</th>
                                            <th>Nama Penumpang</th>
                                            <th>Nomor Telepon</th>
                                            <th>Tanggal Keberangkatan</th>
                                            <th>Jam Keberangkatan</th>
                                            <th>Kode kursi</th>
                                            <th>Jumlah Bayar</th>
                                            <th>Nama Pengemudi</th>
                                            <th>Kode Kendaraan</th>
                                            <th>Jenis Kendaraan</th>
                                    </tr>
                                   <?php
                                  if( ! empty($t_penumpangm)){
                                   $no = 1;
                                   foreach($t_penumpangm as $data){
                                echo "<tr>";
                                echo "<td>".$data->id_penumpang."</td>";
                                echo "<td>".$data->nama_penumpang."</td>";
                                echo "<td>".$data->no_telp."</td>";
                                echo "<td>".$data->tgl_keberangkatan."</td>";
                                echo "<td>".$data->jam_keberangkatan."</td>";
                                echo "<td>".$data->kode_kursi."</td>";
                                echo "<td>".$data->jumlah_bayar."</td>";
                                echo "<td>".$data->nama_pengemudi."</td>";
                                echo "<td>".$data->kode_kendaraan."</td>";
                                echo "<td>".$data->jenis_kendaraan."</td>";
                                 echo "</tr>";
                                 $no++;
                                    }
                                        }
                                        ?>
                                                  
                                    
                                </table>
                                <a href="<?php echo base_url("Daftarpenumpang/cetakmanado");?>">Cetak</a>

                            </div>

                            <!-- /.table-responsive -->
                        </div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                
        </div>


                        <!-- /.panel-body -->
                    
</div>
<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
  
    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>
</body>