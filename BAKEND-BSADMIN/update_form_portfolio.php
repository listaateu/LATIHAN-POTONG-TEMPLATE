<!-- kita dari tabel_portfolio -->
 <!--   selanjutnya copy dari data form_portfolio -->
<?php
include "connection.php";

// menyimpan sementara id_PORTFOLIO DARI TOMBOL UPDATE TABEL_PORTFOLIO.PHP SEBELUM DIEKSEKUSI kebawah berikut ini
// $_GET['id_portfolio]; yang menerima id_portflio  dari tombol update tabel_porfolio.php

$id_portfolio = $_GET['id_portfolio'];

// menampilkan data portfolio yg didapat atau dirikim dari tombol update tabel_portfolio.php diatas 
$select_id = mysqli_query($koneksi, "SELECT * FROM portfolio WHERE id_portfolio='$id_portfolio'");

// fumngsi utk menampilkann isi tabel menggunakan mysqli_fetch_object (->)
// selanjutnya menuju form bawah dg menggunakan value utk inputan setiap data
$portfolio = mysqli_fetch_object($select_id);

// dibawah ini adalahg isi asli dari formZ_portfolio
?>


<?php include "header.php" ?>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php" ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Portfolio</h1>
                       <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- content start -->

                      <form action="action_update_portfolio.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="portfolio" class="form-label"> Portfolio
                            </label>
                            <input type="text" class="form-control" id="judul" name="judul_portfolio"
                            value="<?php echo $portfolio->judul_portfolio ?>">
                        </div>

                        <div class="mb-3">
                            <label for="img" class="form-label"> Img
                            </label>
                            <input type="file" class="form-control" id="img" name="img"
                            value="<?php echo $portfolio->img ?>">
                        </div>

                        <div class="mb-3">
                            <label for="link" class="form-label"> Link
                            </label>
                            <input type="text" class="form-control" id="link" name="link"
                            value="<?php echo $portfolio->link ?>">
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label"> Description
                            </label>
                            <textarea name="deskripsi" id="deskripsi" cols="30" 
                            class="form-control" rows="10"><?php echo $portfolio->deskripsi ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="jenis" class="form-label"> Category
                            </label>
                            <input type="text" class="form-control" id="jenis" name="jenis"
                            value="<?php echo $portfolio->jenis ?>">
                        </div>

                         <input type="hidden" value="<?php echo $portfolio->id_portfolio ?>" name="id_portfolio">
                        

                        <button type="submit" class="btn btn-primary">Submit</button>

                      </form>

                    <!-- content end -->

                    </div>
                    <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "footer.php" ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php include "bottom.php" ?>