<!DOCTYPE html>
<html lang="en">

       <?php $this->load->view("admin/template"); ?>

<body>
<div id="page-wrapper">   
             <table> 
                <div class="row">
                       <form method="post" action="<?php echo base_url();?>Daftarpengemudi/insert">    
                 
                        <tr>
                            <td>Nama Pengemudi </td>
                            <td>  &nbsp;:</td>
                            <td></td>
                            <td>
                            <input class="form-control" id="nama_pengemudi" type="text" name="nama_pengemudi"/>
                             &nbsp;</td>
                        </tr>
                        
                        <tr>
                            <td>No Telp Pengemudi </td>
                            <td>  &nbsp; :</td>
                            <td></td>
                            <td>
                            <input class="form-control" id="no_telp_pengemudi" type="text" name="no_telp_pengemudi"/>
                             &nbsp;</td>
                        </tr>

                         <tr>
                            <td>SIM </td>
                            <td>  &nbsp; :</td>
                            <td> &nbsp; &nbsp;</td>
                            <td>  
                            <input class="form-control" id="sim" type="file" name="sim" value="sim"/>
                             &nbsp;</td>
                        </tr>

                        <tr>
                            <td>Alamat Pengemudi</td>
                            <td> &nbsp;:</td>
                            <td></td>
                            <td>
                            <input class="form-control" id="alamat_pengemudi" type="text" name="alamat_pengemudi"/>
                             &nbsp;</td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button type="submit" name="simpan" class="btn btn-info" value="simpan"> submit </button></td>
                        </tr>
                        </form>
                        &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;

                        

            
            </table>

</div>

</body>

</html>