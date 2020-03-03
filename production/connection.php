<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "test";

$db = new mysqli($server, $user, $password, $nama_database );

if( !$db ){
    die("Gagal terhubung dengan database: " . mysql_error());
}
?>