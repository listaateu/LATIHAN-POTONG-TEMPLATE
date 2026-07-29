<?php
include "connection.php";

$vemail = $_POST['email'];
$vpassword = $_POST['password'];

$sql_insert = mysqli_query($koneksi, "
    INSERT INTO login(email, password)
    VALUES ('$vemail', '$vpassword')
");

header("Location: tabel_login.php");
exit;
?>