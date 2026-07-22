<!-- we are dr file tabel_profile -->
<!-- next: copy the data from form_profile -->

<?php 
include "connection.php";

// menyimpan sementara id_
// 
$id_profile = $_GET['id_profile'];

// menampilkan
$select_id = mysqli_query($koneksi, "SELECT * FROM profile WHERE id_profile='$id_profile'");

//
//
$profile = mysqli_fetch_object($select_id);

//
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
                        <h1 class="h3 mb-0 text-gray-800">Update</h1>
                       <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- content start -->

                      <form action="action_update_profile.php" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label"> Name
                            </label>
                            <!-- value $profile-> nama utk menampilkan data yg di klik dari 
                             table profile dihalaman database -->
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $profile->nama ?>">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label"> Overview
                            </label>
                            <!-- khusus TAXTAREA letak php echo $profile->deskripsi ?> diantara tag penutup dan pembuka -->
                            <textarea name="about" id="deskripsi" cols="30" class="form-control" rows="10"><?php echo $profile->about ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="website" class="form-label"> Website
                            </label>
                            <input type="text" class="form-control" id="website" name="website" value="<?php echo $profile->website ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label"> Phone
                            </label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $profile->phone ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label"> Email Address
                            </label>
                            <input type="email" class="form-control" id="email" name="email" aria-described="emailHelp" value="<?php echo $profile->email ?>">
                            <div id="emailHelp" class="form-text"> we'll never share your email with anyone else.</div>
                        <div class="mb-3">
                            <label for="nama" class="form-label"> Address
                            </label>
                            <textarea name="address" id="address" cols="20" class="form-control" rows="5"><?php echo $profile->address ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="linkedin" class="form-label"> Linkedin
                            </label>
                            <input type="linkedin" class="form-control" id="linkedin" name="linkedin" value="<?php echo $profile->linkedin ?>">
                        </div> 
                        <div class="mb-3">
                            <label for="nationality" class="form-label"> Nationality
                            </label>
                            <input type="text" class="form-control" id="nationality" name="nationality" value="<?php echo $profile->nationality ?>">
                        </div>

                        <!-- step -->
                         <input type="hidden" value="<?php echo $profile->id_profile ?>" name="id_profile">

                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

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