<!-- ini adalah langkah kedua setalah dari form_education.php -->
 <!-- selanjutanya ke tabel_education -->

<?php 
include "connection.php";

// $vnama penyimpanan sedangkan $_POST menerima inputan name="nama" dr form_education.php
$vlanguage = $_POST['bahasa'];
$vflagimage = time() . ".jpg";

$path= "fotobende/" ;


move_uploaded_file($_FILES['flag']['tmp_name'], $path . $vflagimage);



// mysqli_query adlh perintah utk menyatukan koneksi database dg query tabel.
// (nama_jurusan, tahun_belajar, tempat_belajar, deskripsi) adalah nama2 kolom databse
//
$sql_insert = mysqli_query($koneksi,"INSERT INTO language (bahasa, flag)
VALUES ('$vlanguage','$vflagimage')");

// header location utk mengahrahkan halam ke tabel_education
header("location:tabel_language.php");