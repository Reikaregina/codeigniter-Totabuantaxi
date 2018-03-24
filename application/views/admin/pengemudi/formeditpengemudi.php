<!DOCTYPE html>
<html lang="en">

       <?php $this->load->view("admin/template"); ?>

<body>
<div id="page-wrapper">   
             <table> 
                <div class="row">
                        <?php if($dataEdit){
                            $id_pengemudi = $dataEdit->id_pengemudi;
                            $nama_pengemudi = $dataEdit->nama_pengemudi;
                            $no_telp_pengemudi= $dataEdit->no_telp_pengemudi;
                            $alamat_pengemudi = $dataEdit->alamat_pengemudi;
                            $sim = $dataEdit->sim;
                        }
                        ?>
                       <form method="post" action="<?php echo base_url('Daftarpengemudi/ubah/'.$id_pengemudi);?>">    
                 
                        <tr>
                            <td>Nama Pengemudi </td>
                            <td>  &nbsp;:</td>
                            <td></td>
                            <td>
                            <input class="form-control" id="nama_pengemudi" type="text" name="nama_pengemudi" value="<?php echo $nama_pengemudi?>"/>
                             &nbsp;</td>
                        </tr>
                        
                        <tr>
                            <td>No Telp Pengemudi </td>
                            <td>  &nbsp; :</td>
                            <td></td>
                            <td>
                            <input class="form-control" id="no_telp_pengemudi" type="text" name="no_telp_pengemudi" value="<?php echo $no_telp_pengemudi?>"/>
                             &nbsp;</td>
                        </tr>

                         <tr>
                            <td>SIM </td>
                            <td>  &nbsp; :</td>
                            <td> &nbsp; &nbsp;</td>
                            <td>  
                            <input class="form-control" id="sim" type="file" name="sim" value="<?php echo $sim?>"/>
                             &nbsp;</td>
                        </tr>
                        
                        <tr>
                            <td>Alamat Pengemudi</td>
                            <td> &nbsp;:</td>
                            <td></td>
                            <td>
                            <input class="form-control" id="alamat_pengemudi" type="text" name="alamat_pengemudi" value="<?php echo $alamat_pengemudi?>"/>
                             &nbsp; &nbsp;</td>
                        </tr>
                    
 
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button type="submit" name="simpan" class="btn btn-info" value="simpan"> Edit </button></td>
                        </tr>
                        </form>
                        &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;

                        

            
            </table>

</div>

</body>

</html>