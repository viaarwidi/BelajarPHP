<!DOCTYPE html>
    <html>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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

        <br><h3 align="center">Tambah Siswa</h3><br>
            <form action="proses_tambah_siswa.php" method="post">
           
                nama siswa :
                    <input type="text" name="nama_siswa" value="" class="form-control">

                Tanggal Lahir :
                    <input type="date" name="tanggal_lahir" value="" class="form-control">

                Gender :
                    <select name="gender" class="form-control">
                        <option></option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                Alamat :
                    <textarea name="alamat" class="form-control"
                    rows="4"></textarea>
                 Kelas :
                    <select name="id_kelas" class="form-control">
                    <option></option>
<?php
        include "koneksi.php";
            $qry_kelas = mysqli_query($conn,"select * from kelas");
        while($data_kelas = mysqli_fetch_array($qry_kelas)){
             echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';
        }
 ?>
                </select>
             Username :
                <input type="text" name="username" value="" class="form-control">

             Password :
                <input type="password" name="password" value="" class="form-control">
                <input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary">
        </form>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>