<?php
include "connection.php";

$select_training = mysqli_query(
    $koneksi,
    "SELECT * FROM training ORDER BY id_training DESC");
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
                        <h1 class="h3 mb-0 text-gray-800">Training</h1>
                    </div>

                    <a href="form_training.php" class="btn btn-info mb-2">Add</a>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Subject</th>
                                <th scope="col">Year</th>
                                <th scope="col">Place</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        <?php
                        while ($tampil = mysqli_fetch_object($select_training)) :
                        ?>

                        <tr>
                            <th scope="row"><?php echo $tampil->nama_training; ?></th>
                            <td><?php echo $tampil->tahun_training; ?></td>
                            <td><?php echo $tampil->tempat_training; ?></td>
                            <td><?php echo $tampil->deskripsi; ?></td>

                            <td>
                                <a href="delete_training.php?id_training=<?php echo $tampil->id_training; ?>" class="btn btn-danger" onclick="return confirm('Confirm to delete?')">DELETE</a>

                                <a href="update_form_training.php?id_training=<?php echo $tampil->id_training; ?>" class="btn btn-success">UPDATE</a>
                            </td>
                        </tr>

                        <?php endwhile ?>

                        </tbody>
                    </table>

                </div>

            </div>

            <?php include "footer.php" ?>

        </div>

    </div>

    <?php include "bottom.php" ?>