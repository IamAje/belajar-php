<?php 
$host = "localhost";
$username = "root";
$password = "root";
$database = "db_sekolah";

$db = mysqli_connect($host, $username, $password, $database);

if ($db) {
    
} else {
    echo "Koneksi Gagal! : " . mysqli_connect_error();
}
?>