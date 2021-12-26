<?php
session_start();
include 'connect.php';
if (isset($_POST['username']) AND isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = md5($_POST['password']);   
    $login = mysqli_query($dbc, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($login);
    if($cek > 0)
    {
        $data = mysqli_fetch_array($login);
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama'] = $data['nama'];
        // // var_dump($data);
            echo "<script>alert('berhasil login');window.location='index.php'</script>";
    }
    else
    {
        echo "<script>alert('login gagal');window.location='index.php'</script>";
    }
}
?>