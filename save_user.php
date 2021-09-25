<?php
include 'connect.php';
session_start();
$username = $_POST['username'];
$nama = $_POST['nama'];
$password = md5($_POST['password']);
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];


    $query = "INSERT INTO user (username,password,nama,no_hp,alamat) values ('$username','$password','$nama','$no_hp','$alamat')";
    mysqli_query($dbc,$query) or die(mysqli_error($dbc));

    if($query)
    {
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $nama;
            echo "<script>alert('Pendaftaran Berhasil');window.location='index.php'</script>";
    }
    else
    {
        echo "gagal";
    }
?>