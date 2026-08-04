<?php
include "connection.php";
// kedua buat perintah sql 
$select_education = mysqli_query($koneksi, "SELECT*FROM education ORDER BY id_education DESC");
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
                        <h1 class="h3 mb-0 text-gray-800">Education</h1>
                       <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
<!-- keempat, tambahkan tombol Tambah utk mengerahkan ke file form_profile.php -->
 <a href ="form_education.php" class="btn btn-info mb-2">ADD</a>
                    <!-- content start -->

             <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Major</th>
                        <th scope="col">Year</th>
                        <th scope="col">Place</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>    
                    </tr>
                </thead> 
                <tbody> 
                    <!-- perulangan -->
                    <?php
                    // mysqli_fetch_object menggunakan <?php $tampil->nama;
                    // mysqli_fetch_array menggunakan <?php $tampil['nama']
                    while($tampil =mysqli_fetch_object ($select_education)):
                    ?>   
                    <tr> 
                        <th scope="row"><?php echo 
                        $tampil->nama_jurusan; ?></th>
                        <td><?php echo $tampil->tahun_belajar; ?></td>
                        <td><?php echo $tampil->tempat_belajar; ?></td>
                        <td><?php echo $tampil->deskripsi; ?></td>
                        <td>
                            <!-- step two: -->
                            <!-- DELETE_EDUCATION.php?
                            membutuhkan id_profile yg didapatkan dari
                            $tampil->id_profile di atas --> 
                            <!-- step three: --> 
                            <!-- onclick="return comfirm ('confirm to delete')" adalah
                            utk konfirmasi hapus ketika click tombol DELETE --> 
                            <!-- step four: create delete_profile.php --> 
                            <!-- step five: let's go to file delete_profile.php --> 
                            <a href="delete_education.php?id_education=<?php echo 
                            $tampil->id_education;?>" class="btn btn-danger"
                            onclick="return confirm ('Confirm to delete?')">DELETE</a>

                            <!-- dari sini kita kemudian bikin file update_form_profile.php -->
                            <!-- di file tsb, kita copy data file form_profile dan di paste di
                            file "update_form_profile.php-->
                            <!-- dari sini skrng kita ke file update_form_profile.php-->
                            <a href="update_form_education.php?id_education=<?php echo $tampil->id_education;?>"
                            class="btn btn-success" >Update</a> 
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