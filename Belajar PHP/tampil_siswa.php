<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
    <br><h3 align="center">Tampil Siswa</h3>
        <table class="table table-hover table-striped">
        <thead>
        <tr>
        <th>NO</th><th>NAMA SISWA</th><th>TANGGAL LAHIR</th>
        <th>ALAMAT</th><th>GENDER</th>
        <th>USERNAME</th><th>KELAS</th><th>KELOMPOK</th><th>AKSI</th>
        </tr>
    </thead>
    <tbody>
<?php
include "koneksi.php";

$qry_siswa=mysqli_query($conn,"select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
 
$no=0;
while($data_siswa=mysqli_fetch_array($qry_siswa)){
    $no++;?>
    <tr>
    <td><?=$no?></td><td><?=$data_siswa['nama_siswa']?></td>
    <td><?=$data_siswa['tanggal_lahir']?></td>
    <td><?=$data_siswa['alamat']?></td>
    <td><?=$data_siswa['gender']?></td> 
    <td><?=$data_siswa['username']?></td>
    <td><?=$data_siswa['nama_kelas']?></td> 
    <td><?=$data_siswa['kelompok']?></td> 
    <td><a href="ubah_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" class="btn btn-success">Ubah</a> 
    <a href="hapus.php?id_siswa=<?=$data_siswa['id_siswa']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
    </tr>
<?php
}
?>
<td><a href="tambah_siswa.php" class="btn btn-success">Tambah Siswa</a></td>
<?php
?>  
    </tbody>
</table>
    <script src=<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</body>
</html>