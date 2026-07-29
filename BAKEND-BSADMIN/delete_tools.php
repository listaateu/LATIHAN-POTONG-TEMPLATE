<!-- we are from tabel_profile -->

<?php
include "connection.php";

// utk menerima id_profile yang dibawa dari tombol DELETE dari TABEL PROFILE menggunakan $id_profile
// $_GET['id_profile]; menyimpan sementara id yang nanti akan digunakan pada perintah DELETE di bawahnya.
$id_tools=$_GET['id_tools'];

// ini perintah sql untuk mendelete data mendasarkan id_profile yang dibawa
$delete = mysqli_query($koneksi, "DELETE FROM tools WHERE id_tools='$id_tools'");

// setelah proses delete dijalankan, maka akan kembali ke file tabel_profile.php
header("location: tabel_tools.php");
