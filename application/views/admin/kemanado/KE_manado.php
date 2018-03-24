<!DOCTYPE html>
<html lang="en">



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
                            Keberangkatan Manado - Kotamobagu
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead >
                                        <tr>
                                            <th>NO</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>ID Pengemudi</th>
                                            <th>ID Kedaraan</th>
                                            <th>Jumlah Penumpang</th>
                                            <th>Pembatalan</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    $no = 1;
                                    foreach ($trayekmanado as $r){ ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $r['tgl_keberangkatan']?></td>
                                            <td><?php echo $r['jam_keberangkatan']?></td>
                                            <td><?php echo $r['id_pengemudi']?></td>
                                            <td><?php echo $r['id_kendaraan']?></td>
                                            <td><?php echo $r['jml_penumpang']?></td>
                                            <td><?php echo $r['batal']?></td>
                                        </tr>
                                    </tbody>
                                    <?php } ?>
                                </table>
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