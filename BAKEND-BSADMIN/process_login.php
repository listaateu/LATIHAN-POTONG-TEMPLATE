<?php
include "connection.php";

session_start();

$email=$_POST['email'];
$password=$_POST['password'];

$sql_login = mysqli_query($koneksi, "SELECT * FROM login WHERE email='$email' AND
password='$password'");

$cek = mysqli_num_rows($sql_login);
if ($cek >0){

$_SESSION['email']=$email;
$_SESSION['status']="login";

header("location:index.php");


} else{

header("location:login.php?pesan=gagal");
}
?>