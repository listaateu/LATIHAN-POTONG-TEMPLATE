<?php
include "connection.php";

$select_language = mysqli_query(
    $koneksi,
    "SELECT * FROM language ORDER BY id_language DESC");
?>

<?php
session_start();

if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("location: login.php?pesan=belum_login");
    exit();
}
?>

<?php include "header.php" ?>

<body id="page-top">

<div id="wrapper">

<?php include "sidebar.php" ?>

<div id="content-wrapper" class="d-flex flex-column">

<div id="content">

<?php include "topbar.php" ?>

<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Language</h1>
</div>

<a href="form_language.php" class="btn btn-info mb-2">Add</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Language</th>
            <th>Flag</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

    <?php while ($tampil = mysqli_fetch_object($select_language)) : ?>

    <tr>
        <td><?php echo $tampil->bahasa; ?></td>

        <td>
            <img src="fotobende/<?php echo $tampil->flag; ?>" width="100">
        </td>

        <td>
            <a href="delete_language.php?id_language=<?php echo $tampil->id_language; ?>"
            class="btn btn-danger"
            onclick="return confirm('Confirm to delete?')">DELETE</a>

            <a href="update_form_language.php?id_language=<?php echo $tampil->id_language; ?>"
            class="btn btn-success">UPDATE</a>
        </td>
    </tr>

    <?php endwhile; ?>

    </tbody>
</table>

</div>

</div>

<?php include "footer.php" ?>

</div>

</div>

<?php include "bottom.php" ?>