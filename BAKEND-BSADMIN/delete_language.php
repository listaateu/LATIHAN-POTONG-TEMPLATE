

<?php
include "connection.php";

$id_language = $_GET['id_language'];

$delete = mysqli_query($koneksi, "DELETE FROM language WHERE id_language=$id_language");

header("Location: tabel_language.php");
?>