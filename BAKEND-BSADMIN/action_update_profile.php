<?php
include "connection.php";

// $vnama utk penyimpanan sedangkan $_POST menerima inputan
// nama="nama" di form_profile.php

$vid_profile = $_POST['id_profile'];
$vnama = $_POST['nama'];
$vdeskripsi = $_POST['about'];
$vwebsite = $_POST['website'];
$vphone = $_POST['phone'];
$vemail = $_POST['email'];
$vcity = $_POST['address'];
$vlinkedin = $_POST['linkedin'];
$Vnationality = $_POST['nationality'];

$update_profile = mysqli_query($koneksi, "UPDATE profile SET nama='$vnama',about='$vdeskripsi',website='$vwebsite',
phone='$vphone',email='$vemail',address='$vcity',linkedin='$vlinkedin',nationality='$Vnationality' WHERE id_profile='$vid_profile'");


header("location:tabel_profile.php");
?>