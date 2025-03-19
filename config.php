<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "db_sekolah";

$db = new mysqli($host, $username, $password, $database);

if ($db) {
    echo "Koneksi Berhasil!";
} else {
    echo "Koneksi Gagal! : " . mysqli_connect_error();
}
?>