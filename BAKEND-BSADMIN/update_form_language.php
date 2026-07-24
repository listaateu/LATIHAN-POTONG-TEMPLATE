<?php
include "connection.php";

$id_language = $_GET['id_language'];

$select_id = mysqli_query($koneksi, "SELECT * FROM language WHERE id_language='$id_language'");

$language = mysqli_fetch_object($select_id);

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
                        <h1 class="h3 mb-0 text-gray-800">Update Language</h1>
                    </div>

                    <!-- Content Start -->
                    <form action="action_update_language.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="language" class="form-label"> Language
                            </label>
                            <input type="text" class="form-control" id="language" name="bahasa"
                            value="<?php echo $language->bahasa ?>">
                        </div>

                        <div class="mb-3">
                            <label for="flag" class="form-label"> Flag
                            </label>
                            <input type="file" class="form-control" id="flag" name="flag"
                            value="<?php echo $language->flag ?>">
                        </div>

                        <input type="hidden" name="id_language" value="<?php echo $language->id_language?>">

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