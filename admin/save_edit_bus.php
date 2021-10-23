<?php
include '../connect.php';


if($_FILES['foto_bus']['size'] == 0)
{
    $query = "UPDATE bus SET kendaraan = '$_POST[kendaraan]',plat_nomor='$_POST[plat_nomor]',dari='$_POST[dari]',tujuan=$_POST[tujuan],jumlah_kursi=$_POST[jumlah_kursi],harga='$_POST[harga]' WHERE id_bus = '$_POST[id]'";
    $sql = mysqli_query($dbc,$query);

    echo "<script>alert('Data berhasil terupdate!');window.location='bus.php'</script>";
}


?>