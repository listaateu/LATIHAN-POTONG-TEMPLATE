<?php
include "connection.php";

$vjob = $_POST['nama_pekerjaan'];
$vwork = $_POST['tahun_bekerja'];   // <-- diperbaiki
$vplace = $_POST['tempat_bekerja'];
$vdeskripsi = $_POST['deskripsi'];

mysqli_query($koneksi,"INSERT INTO job
(nama_pekerjaan,tahun_bekerja,tempat_bekerja,deskripsi)
VALUES
('$vjob','$vwork','$vplace','$vdeskripsi')");

header("location:tabel_job.php");