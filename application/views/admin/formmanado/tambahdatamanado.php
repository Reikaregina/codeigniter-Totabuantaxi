<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin/template");?>
<body>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-14">
                <h3 class="page-header" align="center">Form Keberangkatan</h3>
                <h4>Trayek Manado-kotamobagu</h4>
                <form method="post" action="<?php echo base_url();?>Formmanado/insert_test">    
                       <table >     
                        <tr>
                            <td>Tanggal keberangkatan</td>
                            <td><input class="form-control datepicker"  id="tgl_keberangkatan" type="date" name="tgl_keberangkatan" data-date-format="yyyy-mm-dd"></td>
                        </tr>  
                        <tr> 
                            <td>Jam Keberangkatan  </td>
                            <td><input class="form-control" id="jam_keberangkatan" type="time" name="jam_keberangkatan"></td>
                        </tr>
                        </table>
                        
                         <tr>
                            <td> Nama Pengemudi </td>
                            <td> :</td>
                            <select name="nama_pengemudi" id="nama_pengemudi" class="form-control">
                                <?php foreach ($pengemudi->result () as $rows) { ?>
                                <option value="<?php echo $rows->nama_pengemudi;?>"><?php echo $rows->nama_pengemudi; ?></option>
                                <?php } ?>
                                </select>
                        </tr>
                      
                        <tr>
                            <td> Kode Kendaraan </td>
                            <td> :</td>
                            <select name="kode_kendaraan"  id="kode_kendaraan" class="form-control">
                                <?php foreach ($kendaraan->result () as $rows) { ?>
                                <option value="<?php echo $rows->plat_nomor;?>"><?php echo $rows->plat_nomor; ?></option>
                                <?php } ?>
                                </select>
                        </tr>
                        <tr>
                            <td> Jenis Kendaraan </td>
                            <td> :</td>
                            <select name="jenis_kendaraan"  id="jenis_kendaraan" class="form-control">
                                <?php foreach ($kendaraan->result () as $rows) { ?>
                                <option value="<?php echo $rows->j_kendaraan;?>"><?php echo $rows->j_kendaraan; ?></option>
                                <?php } ?>
                                </select>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button type="submit" name="simpan" class="btn btn-primary" value="simpan"> Simpan </button></td>
                        </tr>
                    </form>

                        
                    
                </div>
          </div>
</div>

</body>
</html>