<?php

include "connection.php";

$select_login = mysqli_query(
    $koneksi,
    "SELECT * FROM login ORDER BY id_login DESC");
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
                        <h1 class="h3 mb-0 text-gray-800">Login</h1>

                    </div>
                    <a href="form_login.php" class="btn btn-info mb-2">Add</a>

                    <!-- content start -->
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">email</th>
                                <th scope="col">password</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        while ($tampil = mysqli_fetch_object ($select_login)) :?>
                          <tr>
                            <th scope="row"><?php echo
                            $tampil->email; ?></th>
                            <td><?php echo $tampil->password; ?></td>

                        </i>
                          
                           <td>
                           <a href="delete_login.php?id_login=<?php echo $tampil->id_login; ?>"
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            DELETE</a>
                                      
                                        
                                    <a href="update_form_login.php?id_login=<?php echo $tampil->id_login; ?>"
                                           class="btn btn-success btn-sm">
                                            UPDATE
                                        </a>
                           </td>
                           </tr>
        <?php endwhile; ?>
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