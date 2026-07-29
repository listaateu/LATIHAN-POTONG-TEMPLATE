<?php
include "connection.php";

$select_profile = mysqli_query($koneksi, "SELECT*FROM profile");
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
                        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                       <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- content start -->

             <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Overview</th>
                        <th scope="col">Website</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>    
                        <th scope="col">Address</th>
                        <th scope="col">Sosmed</th>
                        <th scope="col">Nationality</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead> 
               <tbody> 
<?php while($tampil = mysqli_fetch_object($select_profile)): ?>   
<tr> 
    <th scope="row"><?php echo $tampil->nama; ?></th>

    <td><?php echo $tampil->about; ?></td>

    <!--  WEBSITE JADI LINK -->
    <td>
        <a href="<?php echo $tampil->website; ?>" target="_blank">
            <?php echo $tampil->website; ?>
        </a>
    </td>

    <td><?php echo $tampil->phone; ?></td>
    <td><?php echo $tampil->email; ?></td>
    <td><?php echo $tampil->address; ?></td>

    <!--  SOSMED JADI LINK -->
    <td>
        <a href="<?php echo $tampil->linkedin; ?>" target="_blank">
            <?php echo $tampil->linkedin; ?>
        </a>
    </td>

    <td><?php echo $tampil->nationality; ?></td>

    <td>
        <a href="update_form_profile.php?id_profile=<?php echo $tampil->id_profile;?>"
        class="btn btn-success">Update</a> 
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