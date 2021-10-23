<?php
include '../connect.php';

$kota = ucfirst($_POST['nama_kota']);
$query = "INSERT INTO kota (nama_kota) values ('$kota')";

$cek = "SELECT * FROM kota";
$cek_data = mysqli_query($dbc,$cek);
$data = mysqli_fetch_array($cek_data);
// var_dump($data);

    if(in_array(ucfirst($_POST['nama_kota']),$data))
    {
        echo "<script>alert('Data sudah ada! silahkan input data yg lain!');window.location='add_kota.php';</script>";
    }
    else
    {
        $sql = mysqli_query($dbc,$query);
        echo "<script>alert('Data berhasil tersimpan!');window.location='kota.php';</script>";
    }



?>