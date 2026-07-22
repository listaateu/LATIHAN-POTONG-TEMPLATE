<!-- ini adalah langkah kedua setalah dari form_education.php -->
 <!-- selanjutanya ke tabel_education -->

<?php 
include "connection.php";

// $vnama penyimpanan sedangkan $_POST menerima inputan name="nama" dr form_education.php
$vnama=$_POST['nama'];
$vicon=$_POST['icon'];


// mysqli_query adlh perintah utk menyatukan koneksi database dg query tabel.
// (nama_jurusan, tahun_belajar, tempat_belajar, deskripsi) adalah nama2 kolom databse
//
$sql_insert = mysqli_query($koneksi,"INSERT INTO familiar
(nama, icon) 
VALUES ('$vnama','$vicon')");

// header location utk mengahrahkan halam ke tabel_education
header("location:tabel_familiar.php");