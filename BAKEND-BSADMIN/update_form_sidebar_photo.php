<?php
include "connection.php";

$id_sidebar_photo = $_GET['id_sidebar_photo'];

$select_id = mysqli_query($koneksi, "SELECT * FROM sidebar_photo WHERE id_sidebar_photo='$id_sidebar_photo'");

$id_sidebar_photo = mysqli_fetch_object($select_id);

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
                        <h1 class="h3 mb-0 text-gray-800">Sidebar Photo</h1>
                       <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- content start -->

                     <form action="action_update_sidebar_photo.php" method="post"
                     enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="sidebar_photo" class="form-label"> Sidebar Photo
                            </label>
                            <input type="file" class="form-control" id="img" name="sidebar_photo"
                            value="<?php echo $id_sidebar_photo->sidebar_photo; ?>">
                        </div>
                       
                        <input type="hidden" name="id_sidebar_photo"
                        value="<?php echo $id_sidebar_photo->id_sidebar_photo; ?>">

                       <button type="submit"  class="btn btn-primary">Submit</button>
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