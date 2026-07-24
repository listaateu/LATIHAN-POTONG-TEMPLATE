<!-- we are from tabel_profile -->

<?php
include "connection.php";

// utk menerima id_profile yang dibawa dari tombol DELETE dari TABEL PROFILE menggunakan $id_profile
// $_GET['id_profile]; menyimpan sementara id yang nanti akan digunakan pada perintah DELETE di bawahnya.
$id_portfolio=$_GET['id_portfolio'];

$imgportfolio = mysqli_query($koneksi, "SELECT * FROM portfolio WHERE id_portfolio='$id_portfolio'");

$vimg = mysqli_fetch_object($imgportfolio);
$path = "foto/";

// is_file urk mengecek dulu file di folder foto sblm dihapus
// unlink utk mengahapus fotonya
if (is_file($path . $vimg->img)) {
    unlink($path . $vimg->img);
}

// ini perintah sql untuk mendelete data mendasarkan id_profile yang dibawa
$sql_delete = mysqli_query($koneksi, "DELETE FROM portfolio WHERE id_portfolio='$id_portfolio'");

// setelah proses delete dijalankan, maka akan kembali ke file tabel_profile.php
header("location: tabel_portfolio.php");
