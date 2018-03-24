<!DOCTYPE html>
<html lang="en">


<head>
    <title>Penumpang</title>
</head>
<body>
<h1 style="text-align: center;">Data Penumpang</h1>
<table border="1" width="100%">
 <tr>
                                            <th>ID Penumpang</th>
                                            <th>Nama Penumpang</th>
                                            <th>Nomor Telepon</th>
                                            <th>Tanggal Keberangkatan</th>
                                            <th>Jam Keberangkatan</th>
                                            <th>Kode kursi</th>
                                            <th>Jumlah Bayar</th>
                                    </tr>
                                   <?php
                                  if( ! empty($t_penumpang)){
                                   $no = 1;
                                   foreach($t_penumpang as $data){
                                echo "<tr>";
                                echo "<td>".$data->id_penumpang."</td>";
                                echo "<td>".$data->nama_penumpang."</td>";
                                echo "<td>".$data->no_telp."</td>";
                                echo "<td>".$data->tgl_keberangkatan."</td>";
                                echo "<td>".$data->jam_keberangkatan."</td>";
                                echo "<td>".$data->kode_kursi."</td>";
                                echo "<td>".$data->jml_bayar."</td>";
                                 echo "</tr>";
                                 $no++;
                                    }
                                        }
                                        ?>
</table>
</body>
