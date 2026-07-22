<!-- from file update_from_education.php -->
<?php
include "connection.php";

// $vnama utk penyimpanan sedangkan $_POST menrima inputan name="nama" dari update_form_familiar.php
$id_familiar = $_POST['id_familiar'];
$vnama=$_POST['nama'];
$vicon=$_POST['icon'];


$update_familiar=mysqli_query($koneksi, "UPDATE familiar SET 
nama='$vnama',icon='$vicon' WHERE id_familiar='$id_familiar'");

header ("location:tabel_familiar.php");