<?php
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
    ?>
<!DOCTYPE html>
    <html>
        <head>
            <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous">
            <title></title>
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
<div class="container bg-light rounded" style="margin-top:10px">
</div>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bund
le.min.js" integrity="sha384-
gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
</html>