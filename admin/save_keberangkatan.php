<?php
include '../connect.php';

$keberangkatan = ucfirst($_POST['nama_terminal']);
$query = "INSERT INTO keberangkatan (nama_terminal) values ('$keberangkatan')";

$cek = "SELECT * FROM keberangkatan";
$cek_data = mysqli_query($dbc,$cek);
$data = mysqli_fetch_array($cek_data);
// var_dump($data);

    if(in_array(ucfirst($_POST['nama_terminal']),$data))
    {
        echo "<script>alert('Data sudah ada! silahkan input data yg lain!');window.location='add_keberangkatan.php';</script>";
    }
    else
    {
        $sql = mysqli_query($dbc,$query);
        echo "<script>alert('Data berhasil tersimpan!');window.location='keberangkatan.php';</script>";
    }



?>