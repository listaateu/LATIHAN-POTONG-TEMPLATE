<?php
include "connection.php";
// kedua buat perintah sql/query ke database utk menampilkan data
$select_sidebar_photo = mysqli_query($koneksi, "SELECT * FROM sidebar_photo ORDER BY id_sidebar_photo DESC");
// ketiga buat perulangan di dalam <tbody> di bawah ini

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
<!-- keempat, tambahkan tombol Tambah utk mengerahkan ke file form_language.php -->
 <a href ="form_sidebar_photo.php" class="btn btn-info mb-2">Tambah</a>
                    <!-- content start -->

             <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Sidebar Photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead> 
                <tbody> 
                    <!-- perulangan -->
                    <?php
                    // mysqli_fetch_object menggunakan <?php $tampil->nama;
                    // mysqli_fetch_array menggunakan <?php $tampil['nama']
                    while($tampil =mysqli_fetch_object ($select_sidebar_photo)):
                    ?>   
                    <tr> 

                        <td>
                            <img src="foto/<?php echo $tampil->sidebar_photo; ?>" alt="" width="200">
                        </td>
                        <td>
                            <!-- step two: -->
                            <!-- DELETE_PROFILE.php?
                            membutuhkan id_profile yg didapatkan dari
                            $tampil->id_profile di atas --> 
                            <!-- step three: --> 
                            <!-- onclick="return comfirm ('confirm to delete')" adalah
                            utk konfirmasi hapus ketika click tombol DELETE --> 
                            <!-- step four: create delete_profile.php --> 
                            <!-- step five: let's go to file delete_profile.php --> 
                            <a href="delete_sidebar_photo.php?id_sidebar_photo=<?php echo 
                            $tampil->id_sidebar_photo;?>" class="btn btn-danger"
                            onclick="return confirm ('Confirm to delete?')">DELETE</a>

                            <!-- dari sini kita kemudian bikin file update_form_profile.php -->
                            <!-- di file tsb, kita copy data file form_profile dan di paste di
                            file "update_form_profile.php-->
                            <!-- dari sini skrng kita ke file update_form_profile.php-->
                            <a href="update_form_sidebar_photo.php?id_sidebar_photo=<?php echo $tampil->id_sidebar_photo;?>"
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