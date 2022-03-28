<?php 
include 'koneksi.php';
$nama_buku = $_POST['nama_buku'];
$deskripsi = $_POST['deskripsi'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(empty($nama_buku)){
    echo "<script>alert('nama buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
} else{
    if(!in_array($ext,$ekstensi) ) {
        header("location:tambah_buku.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){		
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'foto_produk/'.$rand.'_'.$filename);
            mysqli_query($conn, "INSERT INTO buku VALUES(NULL,'$nama_buku','$deskripsi', '$xx')");
            echo "<script>alert('Sukses menambahkan buku');location.href='buku.php';</script>";
        }else{
            echo "<script>alert('Ukuran file terlalu besar');location.href='tambah_buku.php';</script>";
        }
    }
}
?>