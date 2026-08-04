<?php
include "connection.php";

$select_tools = mysqli_query($koneksi, "SELECT*FROM tools ORDER BY id_tools DESC");

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
                        <h1 class="h3 mb-0 text-gray-800">Tools</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
                    <a href="form_tools.php" class="btn btn-info mb-2">Add</a>
                    <!-- content start -->
                    <table class="table table-striped"> 
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Icon</th>

                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                while ($tampil = mysqli_fetch_object($select_tools)):
                        ?>
                    <tr>
                                <th scope="row"><?php echo
                                $tampil->nama; ?></th>

                                <td>
                                    <i style="color:grey;font-size:50px"
                                    class="<?php echo $tampil-> icon; ?>"></i>
                                </td>
                        <td>
                                <a href="delete_tools.php?id_tools=<?php
                                echo $tampil->id_tools;?>" class="btn
                                btn-danger" onclick="return confirm
                                ('confirm to delete?')">DELETE</a>
                                <a href="update_form_tools.php?id_tools=<?php
                                echo $tampil->id_tools;?>" class="btn
                                btn-success">UPDATE</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                        </tbody>
                    </table>
                    <!-- content end -->

                    <!--/.container-fluid -->
                    
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