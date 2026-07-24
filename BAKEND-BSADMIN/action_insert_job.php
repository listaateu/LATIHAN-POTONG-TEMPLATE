<!-- ini adalah langkah kedua setalah dari form_education.php -->
 <!-- selanjutanya ke tabel_education -->

<?php 
include "connection.php";

// $vnama penyimpanan sedangkan $_POST menerima inputan name="nama" dr form_education.php
$vjob = $_POST['nama_pekerjaan'];
$vwork = $_POST['tahun_belajar'];
$vplace = $_POST['tempat_bekerja'];
$vdeskripsi = $_POST['deskripsi'];


// mysqli_query adlh perintah utk menyatukan koneksi database dg query tabel.
// (nama_jurusan, tahun_belajar, tempat_belajar, deskripsi) adalah nama2 kolom databse
//
$sql_insert = mysqli_query($koneksi,"INSERT INTO job
(nama_pekerjaan,tahun_bekerja,tempat_bekerja,deskripsi) 
VALUES ('$vjob','$vwork','$vplace','$vdeskripsi')");

// header location utk mengahrahkan halam ke tabel_education
header("location:tabel_job.php");