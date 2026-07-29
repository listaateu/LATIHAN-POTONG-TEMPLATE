

<?php
include "connection.php";

$vnama_skill = $_POST['nama_skill'];

$sql_insert = mysqli_query($koneksi, "
    INSERT INTO skill(nama_skill)
    VALUES('$vnama_skill')
");

header("Location: tabel_skill.php");
