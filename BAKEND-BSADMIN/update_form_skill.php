<?php
include "connection.php";

$id_skill = $_GET['id_skill'];

$select_id = mysqli_query($koneksi, "SELECT * FROM skill WHERE
id_skill = '$id_skill'");

$m = mysqli_fetch_object($select_id);

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
                        <h1 class="h3 mb-0 text-gray-800">ADD</h1>
                       <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- content start -->
                     <form action="action_update_skill.php" method="post" >
                        <div class="mb-3">
                            <label for="skill" class="form_label"> skill </label>
                            <input type="text" class="form-control" id="skill" name="nama_skill"
                            value="<?php echo $m->nama_skill ?>">
                        </div>
                        
                        

                        <input type="hidden" value="<?php echo $m->id_skill ?>"
                        name="id_skill">
                        

                        <button type="submit" class="btn btn-primary">Submit</button>

                        <button type="reset" class="btn btn-primary">Reset</button>
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