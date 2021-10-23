<?php
include '../connect.php';
$id = $_GET['id'];

$query = "DELETE FROM bus WHERE id_bus = $id";
$sql = mysqli_query($dbc,$query);

if($sql)
{
    echo "<script>alert('Bus berhasil dihapus!');window.location='bus.php'</script>";
}

?>