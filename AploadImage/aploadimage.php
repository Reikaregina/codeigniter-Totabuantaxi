<?php
    $part = "./imageapload/";
    $filename = "img".rand(9,9999).".jpg";

    $res = array();
    $kode =  "";
    $pesan = "";

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

    if($_FILES["imageapload"])
    {
        $destinationfile = $part.$filename;
        if(move_uploaded_file($_FILES["imageapload"]["tmp_name"], $destinationfile))
        {
                $kode = 1;
                $pesan = "berhasil";    
        }else
        {
                $kode = 0;
                $pesan = "Gagal Apload";
        }
    }else {
        $kode = 0;
        $pesan = "request error";
    }

    }else
    {
        $kode = 0;
        $pesan = "Request tidak valid";
    }

    $res['kode'] = $kode;
    $res['pesan'] = $pesan;

    echo json_encode($res);

?>