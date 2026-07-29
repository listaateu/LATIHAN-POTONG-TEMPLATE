<!-- we are from tabel_profile -->

<?php
include "connection.php";

// utk menerima id_profile yang dibawa dari tombol DELETE dari TABEL PROFILE menggunakan $id_profile
// $_GET['id_profile]; menyimpan sementara id yang nanti akan digunakan pada perintah DELETE di bawahnya.
$id_skill=$_GET['id_skill'];

// ini perintah sql untuk mendelete data mendasarkan id_profile yang dibawa
$delete = mysqli_query($koneksi, "DELETE FROM skill WHERE id_skill='$id_skill'");

// setelah proses delete dijalankan, maka akan kembali ke file tabel_profile.php
header("location: tabel_skill.php");
