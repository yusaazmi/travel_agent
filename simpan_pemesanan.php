<?php
include 'connect.php';
session_start();
$id_user = $_SESSION['id_user'];
$id_bus = $_POST['id_bus'];
$no_kursi = $_POST['no_kursi'];
$total_bayar = $_POST['total_bayar'];
$jumlah = 1;
$tgl = date("Y-m-d");

    $query = "INSERT INTO pemesanan (id_user,id_bus,no_kursi,jumlah,tgl_pemesanan,total_bayar) values ('$id_user','$id_bus','$no_kursi',1,'$tgl','$total_bayar')";
    mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    
    if($query)
    {
        echo "<script>alert('Berhasil memesan data!');window.location='index.php'</script>";
    }
?>