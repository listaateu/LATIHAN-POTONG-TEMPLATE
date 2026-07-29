<?php
include "connection.php";

$id_tools = $_POST['id_tools'];
$vnama = $_POST['nama'];
$vicon =$_POST['icon'];

$update_tools=mysqli_query($koneksi, "UPDATE tools SET nama='$vnama',
icon='$vicon' WHERE id_tools='$id_tools'");

header("location:tabel_tools.php");