

<?php
include "connection.php";

$id_sidebar_photo = $_GET['id_sidebar_photo'];

$delete = mysqli_query($koneksi, "DELETE FROM sidebar_photo WHERE id_sidebar_photo=$id_sidebar_photo");

header("Location: tabel_sidebar_photo.php");
?>