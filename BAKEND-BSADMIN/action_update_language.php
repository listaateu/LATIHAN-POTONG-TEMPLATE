<?php
include "connection.php";

$id_sidebar_photo = $_POST['id_sidebar_photo'];

$namaimage = time() .".jpg";

$path= "foto/";

// UPDATE  tanpa foto. yg mau di update adlh keterangan saja selain foto. maka kita buat kondisi IF ELSE
// if (empty($_FILES['img']['name'])) {
   // $sql_update_sidebar_photo_no_image = mysqli_query($koneksi, "UPDATE sidebar_photo SET 
   // sidebar_photo='$namaimage' WHERE id_sidebar_photo='$id_sidebar_photo'");
   // header("Location:tabel_sidebar_photo.php");
//  else {
    // UPDATE dengan foto. yg mau di update adlh keterangan dan foto. maka kita buat kondisi IF ELSE
    // untuk mengupload foto digunakan fungsi move_uploaded_file() 
    // upload foto baru yg disesuaikan dari file update_form_portfolio.php
    move_uploaded_file($_FILES['sidebar_photo']['tmp_name'], $path . $namaimage);
    
    // hapus foto lama start
    $imgsidebar_photo = mysqli_query($koneksi, "SELECT * FROM sidebar_photo WHERE
    id_sidebar_photo IN ('$id_sidebar_photo')");
   

    // tampilkan foto
    $img= mysqli_fetch_object($imgsidebar_photo);
    $path = "foto/";

    // is_file gunanya untuk mengecek apakah file ada atau tidak. jika ada maka akan dihapus\
    // is_file() untuk mengecek terlebih dahulu file di folder foto sebelum di hapus
    // unlink() untuk menghapus file foto lama di folder foto
    if (is_file($path . $img->sidebar_photo)) {
        unlink($path . $img->sidebar_photo);
    }
    // hapus foto lama end

    // update dgn menggunakan foto dgn menambahkan img='$namimage'
    $sql_update_sidebar_photo_no_img  = mysqli_query($koneksi, "UPDATE sidebar_photo SET
    sidebar_photo='$namaimage' WHERE id_sidebar_photo='$id_sidebar_photo'");

    header("Location:tabel_language.php");
    
?>