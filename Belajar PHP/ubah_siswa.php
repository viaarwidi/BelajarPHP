<!DOCTYPE html>
    <html>
         <head>
            <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous">
              <title></title>
                 </head>
            <body><nav class="navbar navbar-expand-lg navbar-light bg-light"
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
     <?php
        include "koneksi.php";
         $qry_get_siswa=mysqli_query($conn,"select * from siswa where id_siswa = '".$_GET['id_siswa']."'");
         $dt_siswa=mysqli_fetch_array($qry_get_siswa);
     ?>
         <h3 align="center">Ubah Siswa</h3>
            <form action="proses_ubah_siswa.php" method="post">
                <input type="hidden" name="id_siswa" value=
                "<?=$dt_siswa['id_siswa']?>">
                    nama siswa :
                        <input type="text" name="nama_siswa" value=" 
                        <?=$dt_siswa['nama_siswa']?>" class="form-control">
                    Tanggal Lahir :
                        <input type="date" name="tanggal_lahir"
                         value="<?=$dt_siswa['tanggal_lahir']?>" class="form-control">
                     Gender :
                <?php
                    $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
                ?>
                    <select name="gender" class="form-control">
                    <option></option>
                <?php foreach 
                ($arr_gender as $key_gender => $val_gender):
                    if($key_gender==$dt_siswa['gender']){
                        $selek="selected";
                     } else {
                          $selek="";
                     }
            ?>
            <option value="<?=$key_gender?>"
            <?=$selek?>><?=$val_gender?></option>
        <?php 
            endforeach 
        ?>
            </select>
                 Alamat :
                     <textarea name="alamat" class="form-control"
                     rows="4"><?=$dt_siswa['alamat']?></textarea>
                Kelas :
                    <select name="id_kelas" class="form-control">
                     <option></option>
         <?php
                include "koneksi.php";
                $qry_kelas=mysqli_query($conn,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                if($data_kelas['id_kelas']==$dt_siswa['id_kelas']){
                    $selek="selected";
                 } else {
                    $selek="";
            }

            echo '<option value="'.$data_kelas['id_kelas'].'"
            '.$selek.'>'.$data_kelas['nama_kelas'].'</option>';
                }
         ?>
                </select>
                Username :
                    <input type="text" name="username" value="<?=$dt_siswa['username']?>" class="form-control">
                Password :
                    <input type="password" name="password" value=""
                        class="form-control">
                    <input type="submit" name="simpan" value="Ubah Siswa"
                        class="btn btn-primary">
            </form>
                <script
                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
                    crossorigin="anonymous"></script>
        </body>
</html>