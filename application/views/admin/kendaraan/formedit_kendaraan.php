<!DOCTYPE html>
<html lang="en">

       <?php $this->load->view("admin/template"); ?>

<body>
<div id="page-wrapper">   
             <table> 
                <div class="row">
                        <?php if($dataEdit){
                            $id_kendaraan = $dataEdit->id_kendaraan;
                            $j_kendaraan = $dataEdit->j_kendaraan;
                            $plat_nomor = $dataEdit->plat_nomor;
                            $pemilik = $dataEdit->pemilik;
                            $stnk = $dataEdit->stnk;
                            $j_tempat_duduk = $dataEdit->j_tempat_duduk;
                        }
                        ?>

                        <form method="post" action="<?php echo base_url('Daftarkendaraan/ubah/'.$id_kendaraan);?>"> 
                        <tr>
                            <td>Jenis kendaraan </td>
                            <td>&nbsp; &nbsp; : </td>
                            <td> &nbsp; &nbsp; </td>
                            <td>
                            <input class="form-control" id="j_kendaraan" type="text" name="j_kendaraan" value="<?php echo $j_kendaraan ?>"/>
                            &nbsp;</td>
                        </tr>   
                        <tr>
                            <td>Plat Nomor </td>
                            <td> &nbsp; &nbsp; : </td>
                            <td></td>
                            <td>
                            <input class="form-control" id="plat_nomor" type="text" name="plat_nomor" value="<?php echo $plat_nomor ?>"/>
                            &nbsp;</td>
                        </tr>
                        
                        <tr>
                            <td>Pemilik Kendaraan </td>
                            <td> &nbsp; &nbsp; :</td>
                            <td></td>
                            <td>
                            <input class="form-control" id="pemilik_kendaraan" type="text" name="pemilik" value="<?php echo $pemilik ?>"/>
                            &nbsp;
                            </td>
                        </tr>
                        
                        <tr>
                            <td>STNK</td>
                            <td>  &nbsp; &nbsp; :</td>
                            <td></td>
                            <td>
                            <input class="form-control" id="stnk" type="file" name="stnk" value="<?php echo $stnk ?>"/>
                            &nbsp;
                            </td>
                        </tr>
                     
                        <tr>
                            <td>Jumlah Tempat Duduk </td>
                            <td>&nbsp; &nbsp; :</td>
                            <td></td>
                            <td>
                            <input class="form-control" id="j_tempat_duduk" type="text" name="j_tempat_duduk" value="<?php echo $j_tempat_duduk ?>"/>
                            &nbsp;
                            </td>
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