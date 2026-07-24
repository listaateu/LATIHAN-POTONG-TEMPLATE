<!-- ini adalah langkah kedua setalah dari form_education.php -->
 <!-- selanjutanya ke tabel_education -->

<?php 
include "connection.php";

// $vnama penyimpanan sedangkan $_POST menerima inputan name="nama" dr form_job.php
$id_job = $_POST['id_job'];
$vjob = $_POST['nama_pekerjaan'];
$vwork = $_POST['tahun_bekerja'];
$vplace = $_POST['tempat_bekerja'];
$vdeskripsi = $_POST['deskripsi'];


// mysqli_query adlh perintah utk menyatukan koneksi database dg query tabel.
// (nama_jurusan, tahun_belajar, tempat_belajar, deskripsi) adalah nama2 kolom databse
//
$update_job = mysqli_query($koneksi,"UPDATE job SET nama_pekerjaan='$vjob',
tahun_bekerja='$vwork',tempat_bekerja='$vplace',deskripsi='$vdeskripsi' WHERE
id_job='$id_job'");

// header location utk mengahrahkan halam ke tabel_education
header("location:tabel_job.php");