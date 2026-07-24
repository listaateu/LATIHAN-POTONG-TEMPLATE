<!-- ini adalah langkah pertama setelah memotong  temaplate index.php yaitu mmbuat form_profile.php -->
<!-- di tengah2 halaman ini selanjutnya dibuat action_insert_profile.php dari action="acction_insert_profile.php" method="php" -->
<!-- next kita ke file action_insert_profile.php -->
<!-- lanjutkan utk mmbuat file berikutnya yaitu form_job.php, form_language.php, 
form_portfolio.php form_skill.php, form_education.php, form_reference.php, dengan cara yg berulang yg sama -->
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
                        <h1 class="h3 mb-0 text-gray-800">Language</h1>
                       <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- content start -->

                      <form action="action_insert_language.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="language" class="form-label"> Language
                            </label>
                            <input type="text" class="form-control" id="language" name="bahasa">
                        </div>

                        <div class="mb-3">
                            <label for="flag" class="form-label"> Flag
                            </label>
                            <input type="file" class="form-control" id="flag" name="flag">
                        </div>

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