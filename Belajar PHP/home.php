<?php
include "header.php";
?>
<h2><b>Selamat Datang <?=$_SESSION['nama_siswa']?> di Website Perpus Online.</h2>
  

<html>
    <head>
        <style>
          
            body{
                color:black;
                background: url("PERPUS.jpg");
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat; 
            }
            h2{
                /* background-color: lime; */
                text-align: center;

            }
        </style>
    </head>
    <body>
        
    <br><h3 align="center">Ada Beberapa Peraturan yang Harus Kalian Patuhi Mokleters! </h3>

      <h4><ol>
      <li> Dilarang Membawa Jaket/Sweater dalam Ruangan Perpustakaan
      <li> Dilarang Makan dan Minum di Perpustakaan 
      <li> Setiap Pengunjung Wajib Menjaga Ketenangan, Keamanan dan Ketertiban 
      <li> Dilarang Memawa Buku Keluar dari Perpustakaan Tanpa Ijin/Peminjaman 
      <ol>
        </body>
</html>
<?php
include "footer.php";
?>