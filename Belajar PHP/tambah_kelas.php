<!DOCTYPE html>
    <html>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"></title>

        </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light"
         style="box-shadow: 4px 4px 5px -4px;">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">PERPUS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link active" aria-current="page"href="home.php">Home</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" aria-current="page"
        href="buku.php">Buku</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" aria-current="page"
        href="keranjang.php">Keranjang</a>
    </li>
    </li>
    <li class="nav-item">
    <a class="nav-link" aria-current="page"
        href="tambah_buku.php">Tambah Buku</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" aria-current="page"
        href="histori_peminjaman.php">Transaksi</a>
    </li>
    </li>
    </li>
    <li class="nav-item">
    <a class="nav-link" aria-current="page"
        href="tampil_siswa.php">Tampil Siswa</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" aria-current="page"
        href="tambah_siswa.php">Tambah Siswa</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" aria-current="page"
        href="tambah_kelas.php">Tambah Kelas</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" aria-current="page"
        href="logout.php">Logout</a>
    </li>
    </ul>
    </div>
    </div>
</nav>
        <br><h3 align="center">Tambah Kelas</h3><br>
            <form action="proses_tambah_kelas.php" method="post">
                Nama kelas :    
            <input type="text" name="nama_kelas" value="" class="form-control">

                Kelompok :
            <input type="text" name="kelompok" value="" class="form-control">
            <input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-outline-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>