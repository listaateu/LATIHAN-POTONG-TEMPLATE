<?php
include "connection.php";

$id_skill = $_POST['id_skill'];
$vnama_skill = $_POST['nama_skill'];


$update_skill=mysqli_query($koneksi, "UPDATE skill SET nama_skill='$vnama_skill'
WHERE id_skill='$id_skill'");

header("location:tabel_skill.php");