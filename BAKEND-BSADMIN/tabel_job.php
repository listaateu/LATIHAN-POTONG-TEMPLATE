<?php

include "connection.php";

$select_job = mysqli_query(
    $koneksi,
    "SELECT * FROM job ORDER BY id_job DESC");
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
                        <h1 class="h3 mb-0 text-gray-800">Job</h1>

                    </div>
                    <a href="form_job.php" class="btn btn-info mb-2">Add</a>

                    <!-- content start -->
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Profession</th>
                                <th scope="col">Year</th>
                                <th scope="col">Place</th>
                                <th scope="col">Responsibilities</th>

                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        while ($tampil = mysqli_fetch_object ($select_job)) :
                        ?>
                          <tr>
                            <th scope="row"><?php echo
                            $tampil->nama_pekerjaan; ?></th>
                            <td><?php echo $tampil->tahun_bekerja; ?></th>
                            <td><?php echo $tampil->tempat_bekerja; ?></th>
                            <td><?php echo $tampil->deskripsi; ?></th>

                           <td>
                            <a href="delete_job.php?id_job=<?php echo $tampil->id_job; ?>" class="btn btn-danger" onlick="return confirm('Confirm to delete?')">DELETE</a> 
                        <a href="update_form_job.php?id_job=<?php echo $tampil->id_job; ?>" class="btn btn-success">UPDATE</a>
                           </td>
                           </tr>
        <?php endwhile ?>
                        </tbody>
                        </table>

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