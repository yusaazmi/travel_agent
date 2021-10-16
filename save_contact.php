<?php
include 'connect.php';

$email = $_POST['email'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$pesan = $_POST['pesan'];


    $query = "INSERT INTO kontak (email,nama,no_hp,pesan) values ('$email','$nama','$no_hp','$pesan')";
    mysqli_query($dbc,$query) or die(mysqli_error($dbc));

    if($query)
    {
            echo "<script>alert('Pesan berhasil terkirim! Admin akan membalas melalui email/no handpone anda!');window.location='contact.php'</script>";
    }
    else
    {
        echo "gagal";
    }
?>