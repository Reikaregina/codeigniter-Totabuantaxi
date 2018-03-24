<!DOCTYPE html>
<html lang="en">

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  

    <!-- Bootstrap Core CSS -->
    

    <!-- DataTables CSS -->
    <link href="<?php echo base_url();?>assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url();?>assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<?php $this->load->view("admin/template"); ?>
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
                            Daftar Kendaraan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>ID Kendaraan</th>
                                            <th>Jenis Kendaraan</th>
                                            <th>Plat Nomor</th>
                                            <th>Pemilik</th>
                                            <th>Jumlah tempat duduk</th>
                                            <th>STNK</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    $no = 1;
                                    foreach ($Dkendaraan as $e){ ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $e['id_kendaraan']?></td>
                                            <td><?php echo $e['j_kendaraan']?></td>
                                            <td><?php echo $e['plat_nomor']?></td>
                                            <td><?php echo $e['pemilik']?></td>
                                            <td><?php echo $e['j_tempat_duduk']?></td>
                                            <td><?php echo $e['stnk']?></td>
                                                <td>
                                                    <a class="btn btn-info btn-xs" href="<?php echo base_url('DaftarKendaraan/edit/'.$e['id_kendaraan'])?>">Edit</a> 
                                                    <a class="btn btn-danger btn-xs" href="<?php echo base_url('DaftarKendaraan/delete/'.$e['id_kendaraan'])?>" onclick="return confirm('anda yakin akan mengahapus data ini')" >Hapus</a>
                                                </td>
                                        </tr>
                                    </tbody>
                                    <?php } ?>
                                </table>
                                  <a class="btn btn-info btn-xs align-left" type="button" href="<?php echo base_url('DaftarKendaraan/tambahdata')?>" > Tambah data </a>
                            </div>
                         
            
                            
                           
                   </div>     
        </div>
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

</html>