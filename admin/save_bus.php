<?php
include '../connect.php';

$kendaraan = $_POST['kendaraan'];
$plat_nomor = $_POST['plat_nomor'];
$dari = $_POST['dari'];
$tujuan = $_POST['tujuan'];
$jumlah_kursi = $_POST['jumlah_kursi'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

$foto_bus = $_FILES['foto_bus']['name'];
$tmp = $_FILES['foto_bus']['tmp_name'];

$gambar = date('dmYHis').$foto_bus;
$path = '../assets/bus/'.$gambar;

    if(move_uploaded_file($tmp,$path))
    {      
        $query = "INSERT INTO bus (kendaraan,plat_nomor,dari,tujuan,jumlah_kursi,harga,foto_bus,deskripsi) values ('$kendaraan','$plat_nomor','$dari','$tujuan','$jumlah_kursi','$harga','$gambar','$deskripsi')";
        mysqli_query($dbc,$query) or die(mysqli_error($dbc));
        
        if($query)
        {
            echo "<script>alert('Berhasil menambah data!');window.location='bus.php'</script>";
        }
        else
        {
            echo "gagal";
        }
    }
    else
    {
        echo "<script>alert('Upload gagal! Pastikan file yang anda upload tidak salah!');window.location='add_bus.php'</script>";
    }
?>