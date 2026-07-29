<?php
include "connection.php";

$id_login = $_POST['id_login'];
$vemail = $_POST['email'];
$vpassword = $_POST['password'];

$update_login=mysqli_query($koneksi, "UPDATE login SET email='$vemail',
password='$vpassword' WHERE id_login='$id_login'");

header(location:tabel_login.php);