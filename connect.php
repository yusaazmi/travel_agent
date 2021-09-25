<?php
define('db_user', 'root');
define('db_password','');
define('db_host','localhost');
define('db_name','travel');

$dbc=mysqli_connect(db_host, db_user, db_password, db_name);
mysqli_set_charset($dbc, 'utf8');

function escape_data($data)
{
    global $dbc;
    if (get_magic_quotes_gpc()) $data = stripslashes($data);
    return mysql_real_escape_string(trim($data), $dbc);
}//end of the escape_data ( ) function.

// check connection
if (mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}
?>