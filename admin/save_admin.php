<?php
include '../connect.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

    $query = "INSERT INTO user (username,password,nama,alamat,no_hp,type_user) values ('$username','$password','$nama','$alamat','$no_hp','admin')";
    mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    
    if($query)
    {
        echo "<script>alert('Berhasil menambah data!');window.location='admin.php'</script>";
    }
    else
    {
        echo "<script>alert('Upload gagal! Pastikan nama tidak salah!');window.location='add_admin.php'</script>";
    }
?>