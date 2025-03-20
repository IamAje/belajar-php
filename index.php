<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Navbar</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Produksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Tipe Tool</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">History</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- JUDUL KONTEN -->
    <div class="container-fluid mt-2">

        <!-- Greeting -->
        <figure class=" align-content-center text-center bg-secondary" style="height: 100px; border-radius:20px">
            <blockquote class="blockquote text-white">
                <p>Data Siswa SMAN 1 Babakan</p>
            </blockquote>
            <figcaption class="blockquote-footer text-white">
                Tahun ajaran 2025-2026
            </figcaption>
        </figure>
        <!-- End Greeting -->

        <!-- Content Card -->
        <div class="card">
            <div class="card-header">
                PRODUKSI SEDANG BERLANGSUNG
            </div>
            <div class="card-body">
                <div class="">
                    <!-- Container Mesin -->
                    <div class="container-fluid">
                        <div class="card text-bg-light mb-3" style="max-width: 15rem;">
                            <div class="card-header">Mesin 1</div>
                            <div class="card-body text-center">
                                <h5 class="card-title">TM-608ZZ1S-B</h5>
                                <p class="card-text">30</p>
                            </div>
                        </div>
                        <button type="button" class="btn btn-dark mt-0" style="width: 15rem;">Finish</button>
                    </div>
                    <!-- End Container -->
                    <!-- Container Mesin -->
                    <div class="container-fluid">
                        <div class="card text-bg-light mb-3" style="max-width: 15rem;">
                            <div class="card-header">Mesin 1</div>
                            <div class="card-body text-center">
                                <h5 class="card-title">TM-608ZZ1S-B</h5>
                                <p class="card-text">30</p>
                            </div>
                        </div>
                        <button type="button" class="btn btn-dark mt-0" style="width: 15rem;">Finish</button>
                    </div>
                    <!-- End Container -->
                    <!-- Container Mesin -->
                    <div class="container-fluid">
                        <div class="card text-bg-light mb-3" style="max-width: 15rem;">
                            <div class="card-header">Mesin 1</div>
                            <div class="card-body text-center">
                                <h5 class="card-title">TM-608ZZ1S-B</h5>
                                <p class="card-text">30</p>
                            </div>
                        </div>
                        <button type="button" class="btn btn-dark mt-0" style="width: 15rem;">Finish</button>
                    </div>
                    <!-- End Container -->
                    <!-- Container Mesin -->
                    <div class="container-fluid">
                        <div class="card text-bg-light mb-3" style="max-width: 15rem;">
                            <div class="card-header">Mesin 1</div>
                            <div class="card-body text-center">
                                <h5 class="card-title">TM-608ZZ1S-B</h5>
                                <p class="card-text">30</p>
                            </div>
                        </div>
                        <button type="button" class="btn btn-dark mt-0" style="width: 15rem;">Finish</button>
                    </div>
                    <!-- End Container -->
                    <!-- Container Mesin -->
                    <div class="container-fluid">
                        <div class="card text-bg-light mb-3" style="max-width: 15rem;">
                            <div class="card-header">Mesin 1</div>
                            <div class="card-body text-center">
                                <h5 class="card-title">TM-608ZZ1S-B</h5>
                                <p class="card-text">30</p>
                            </div>
                        </div>
                        <button type="button" class="btn btn-dark mt-0" style="width: 15rem;">Finish</button>
                    </div>
                    <!-- End Container -->
                </div>
            </div>
        </div>
        <a href=" add_data.php" type="button" class="btn btn-primary">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Tambah Data
        </a>



        <div class="table-responsive col-9 mt-5">
            <table class="table table-bordered table-hover align-middle">
                <thead>
                    <tr>
                        <th>
                            <center>No</center>
                        </th>
                        <th>NISN</th>
                        <th>NAMA SISWA</th>
                        <th>JENIS KELAMIN</th>
                        <th>FOTO SISWA</th>
                        <th>ALAMAT</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM tb_siswa";
                    $query = mysqli_query($db, $sql);

                    while ($siswa = mysqli_fetch_array($query)) {

                        echo "<tr>";
                        echo "<td>" . $siswa['id_siswa'] . "</td>";
                        echo "<td>" . $siswa['nisn'] . "</td>";
                        echo "<td>" . $siswa['nama_siswa'] . "</td>";
                        echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                        echo "<td>" . $siswa['foto_siswa'] . "</td>";
                        echo "<td>" . $siswa['alamat'] . "</td>";
                        echo "<td>";
                        echo "<a href='form-edit.php?id_siswa=" . $siswa['id_siswa'] . "'>Edit</a> | ";
                        echo "<a href='hapus.php?id_siswa=" . $siswa['id_siswa'] . "'>Hapus</a>";
                        "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <p>Total: <?php echo mysqli_num_rows($query) ?></p>
        </div>
    </div>


</body>

</html>