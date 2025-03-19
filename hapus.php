<?php 
include ("config.php");

if (isset($_GET['id_siswa'])) {
    
    $id = $_GET['id_siswa'];

    $sql = "DELETE FROM tb_siswa WHERE id_siswa=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php');
    } else{
        die('Gagal Menghapus');
    }
} else {
    die('Akses Dilarang');
}
?>