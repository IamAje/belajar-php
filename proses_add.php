<?php 
include("config.php");

// Jika tombol tambah di klik

if(isset($_POST['tambah'])){
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama_siswa'];
    $kelamin = $_POST['kelamin'];
    $foto = $_POST['foto_siswa'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO tb_siswa (nisn, nama_siswa, jenis_kelamin, foto_siswa, alamat)
            VALUE ('$nisn', '$nama', '$kelamin', '$foto', '$alamat')";
    $query = mysqli_query($db, $sql);

    // Jika data berhasil di input
    if ($query) {
        header('Location:index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die ("Akses Dilarang");
}
?>