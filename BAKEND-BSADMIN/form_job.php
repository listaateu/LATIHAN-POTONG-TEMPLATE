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
                        <h1 class="h3 mb-0 text-gray-800">Job</h1>
                       <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- content start -->

                      <form action="action_insert_job.php" method="post">
                        <div class="mb-3">
                            <label for="job" class="form-label"> Profession
                            </label>
                            <input type="text" class="form-control" id="job" name="nama_pekerjaan">
                        </div>

                        <div class="mb-3">
                            <label for="work" class="form-label"> Year
                            </label>
                            <input type="text" class="form-control" id="text" name="tahun_bekerja">
                        </div>

                        <div class="mb-3">
                            <label for="place" class="form-label"> Place
                            </label>
                            <input type="text" class="form-control" id="place" name="tempat_bekerja">
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label"> Responsibilities
                            </label>
                            <textarea name="deskripsi" id="deskripsi" cols="30" 
                            class="form-control" rows="10"></textarea>
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