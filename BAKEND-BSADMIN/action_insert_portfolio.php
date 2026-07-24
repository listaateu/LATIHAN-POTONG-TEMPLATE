<!-- ini adalah langkah kedua setalah dari form_education.php -->
 <!-- selanjutanya ke tabel_education -->

<?php 
include "connection.php";

// $vnama penyimpanan sedangkan $_POST menerima inputan name="nama" dr form_education.php
$vportfolio = $_POST['judul_portfolio'];
// utk nmmbuat nama secara random harus mnggnakan time(); dg ekste3ntsi ".jpg"
$namaimage = time()  .".jpg";
$vurl = $_POST['link'];
$vdeskripsi = $_POST['deskripsi'];
$vcategory = $_POST['jenis'];
// utk menyimpan file foto yg nnti ntambahkan dari fileform_portfolio
$path="foto/";

// utk mengupload foto menggunakan fungsi move_upload_file 
move_uploaded_file($_FILES['img']['tmp_name'], $path . $namaimage);
// mysqli_query adlh perintah utk menyatukan koneksi database dg query tabel.
// (nama_jurusan, tahun_belajar, tempat_belajar, deskripsi) adalah nama2 kolom databse
//
$sql_insert = mysqli_query($koneksi,"INSERT INTO portfolio
(judul_portfolio,img,link,deskripsi,jenis) 
VALUES ('$vportfolio','$namaimage','$vurl','$vdeskripsi','$vcategory')");


// header location utk mengahrahkan halam ke tabel_education
header("location:tabel_portfolio.php");