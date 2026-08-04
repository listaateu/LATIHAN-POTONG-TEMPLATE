<!-- ini adalah lankgah ketiga setelah dr file_action_insert_portfolio.php -->
 <!-- daisini adalah langkah untuk menampilkan data dr database ke tamp[ilan versi web -->
  <!-- pertama panggil koneksi database -->

<?php
include "connection.php";
// kedua buat perintah sql/query ke database utk menampilkan data 
$select_portfolio = mysqli_query($koneksi,"SELECT * FROM portfolio ORDER BY id_portfolio DESC");
// ketiga buat perulangan di dqalam <tbody> dibawah ini

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
                        <h1 class="h3 mb-0 text-gray-800">Portfolio</h1>
                    </div>
                    <!-- keempat tambahkan tombol tambah atau add utk mengarahkan ke file form_portfolio.php -->
                    <a href="form_portfolio.php" class="btn btn-info mb-2">Add</a>

                    <!-- content start -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Portfolio Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Link</th>
                                <th scope="col">Description</th>
                                <th scope="col">Category</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                       <tbody>
    <?php while ($tampil = mysqli_fetch_object($select_portfolio)) : ?>
        <tr>
            <th scope="row">
                <?php echo $tampil->judul_portfolio; ?>
            </th>

            <td>
                <img src="foto/<?php echo $tampil->img; ?>" width="150" height="100" style="object-fit: cover;">
            </td>

            <td>
                <a href="<?php echo $tampil->link; ?>" target="_blank">
                    <?php echo $tampil->link; ?>
                </a>
            </td>

            <td>
                <?php echo $tampil->deskripsi; ?>
            </td>

            <td>
                <?php echo $tampil->jenis; ?>
            </td>

            <td>
                <a href="delete_portfolio.php?id_portfolio=<?php echo $tampil->id_portfolio; ?>" 
                   class="btn btn-danger" 
                   onclick="return confirm('Confirm to delete?')">
                    DELETE
                </a>

                <a href="update_form_portfolio.php?id_portfolio=<?php echo $tampil->id_portfolio; ?>" 
                   class="btn btn-success">
                    UPDATE
                </a>
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