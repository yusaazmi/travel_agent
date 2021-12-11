<?php
include '../connect.php';


if($_FILES['foto_bus']['size'] == 0)
{
    $query = "UPDATE bus SET kendaraan = '$_POST[kendaraan]',plat_nomor='$_POST[plat_nomor]',dari='$_POST[dari]',tujuan=$_POST[tujuan],jumlah_kursi=$_POST[jumlah_kursi],harga='$_POST[harga]' WHERE id_bus = '$_POST[id]'";
    $sql = mysqli_query($dbc,$query);

    echo "<script>alert('Data berhasil terupdate!');window.location='bus.php'</script>";
}
else
{
    $foto_bus = $_FILES['foto_bus']['name'];
    $tmp = $_FILES['foto_bus']['tmp_name'];

    $gambar = date('dmYHis').$foto_bus;
    $path = '../assets/bus/'.$gambar;
    if(move_uploaded_file($tmp,$path))
    {

        $query = "UPDATE bus SET kendaraan = '$_POST[kendaraan]',plat_nomor='$_POST[plat_nomor]',dari='$_POST[dari]',tujuan=$_POST[tujuan],jumlah_kursi=$_POST[jumlah_kursi],harga='$_POST[harga]',foto_bus='$gambar' WHERE id_bus = '$_POST[id]'";
        $sql = mysqli_query($dbc,$query);
        
        echo "<script>alert('Data berhasil terupdate!');window.location='bus.php'</script>";
    }
}

?>