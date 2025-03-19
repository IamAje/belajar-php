<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                Aplikasi Sekolah
            </a>
        </div>
    </nav>
    <div class="container mt-5">
            <div class="mb-3 row">
                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nisn">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nama_siswa" class="col-sm-2 col-form-label">NAMA SISWA</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_siswa">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="kelamin" class="col-sm-2 col-form-label">
                    JENIS KELAMIN
                </label>
                <div class="col-sm-6">
                    <select id="kelamin" class="form-select" >
                        <option selected>Silahkan pilih</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
        
            <div class="mb-3 row">
                <label for="foto_siswa" class="col-sm-2 col-form-label">
                    FOTO SISWA
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="file" id="foto_siswa">
                </div>
                
            </div>

            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">ALAMAT</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="alamat" rows="3"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col">
                <button type="button" class="btn btn-primary">
                    <i class="fa fa-floppy-o" aria-hidden="true"> Tambah</i>
                </button>
                <button type="button" class="btn btn-danger">
                    <i class="fa fa-reply" aria-hidden="true"></i>
                    Batal
                </button>
            </div>
            </div>
    </div>
</body>

</html>