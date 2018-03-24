<!DOCTYPE html>
<html lang="en">
<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


       <?php $this->load->view("admin/template"); ?>

<body>
 <div id="page-wrapper">
            <div class="row">
            <div class="col-lg-12">
            <h1 class="page-header"></h1>
            </div>
            </div>
            <!-- /.row -->
                <div class="row">
                <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            Tambah Data Kendaraan
                    </div>
                    <div class="panel-body">
                    <div class="row">
                    <div class="col-lg-6">
                    <form method="post" action="<?php echo base_url('Daftarkendaraan/insert');?>"> 
                                        <div class="form-group">
                                            <label>Jenis Kendaraan</label>
                                           <input class="form-control" id="j_kendaraan" type="text" name="j_kendaraan"/>
                                        </div>  
                                        <div class="form-group">
                                            <label>Plat Nomor</label>
                                            <input class="form-control" id="plat_nomor" type="text" name="plat_nomor"/>
                                        </div> 
                                         <div class="form-group">
                                            <label>Pemilik Kendaraan</label>
                                            <input class="form-control" id="pemilik_kendaraan" type="text" name="pemilik"/>
                                        </div>
                                        <div class="form-group">
                                            <label>STNK</label>
                                            <input class="form-control" id="stnk" type="file" name="stnk" value="stnk"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Tempat Duduk</label>
                                            <input class="form-control" id="j_tempat_duduk" type="text" name="j_tempat_duduk"/>
                                        </div> 
                      
                    
                        
                         <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button type="submit" name="simpan" class="btn btn-info" value="simpan"> submit </button></td>
                        </tr>
                       
                        </form>

                        &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;

                        

            
            </table>
</form>
</div>
</div>
</div>
</table>

</div>
  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/dist/js/sb-admin-2.js"></script>

</body>

</html>