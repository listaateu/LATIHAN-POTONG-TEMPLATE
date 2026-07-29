<!-- from file update_form_language.php, we copy the form and paste it here in action_update_language.php -->
<?php
include "connection.php";

// $vnama utk menyimpan data sedangkan $_POST['nama'] utk menerima inputan dari form_language.php
$id_language = $_POST['id_language'];
$Vlanguage = $_POST['bahasa'];
$vflagimage = time() .".jpg";

// untuk menyimpan file foto yang nanti ditambahkan dari form_language.php
$path = "fotobende/";

// UPDATE  tanpa foto. yg mau di update adlh keterangan saja selain foto. maka kita buat kondisi IF ELSE
if (empty($_FILES['flag']['name'])) {
    $sql_update_language_no_image = mysqli_query($koneksi, "UPDATE language SET 
    bahasa='$Vlanguage' WHERE id_language='$id_language'");
    header("Location:tabel_language.php");
} else {
    // UPDATE dengan foto. yg mau di update adlh keterangan dan foto. maka kita buat kondisi IF ELSE
    // untuk mengupload foto digunakan fungsi move_uploaded_file() 
    // upload foto baru yg disesuaikan dari file update_form_portfolio.php
    move_uploaded_file($_FILES['flag']['tmp_name'], $path . $vflagimage);
    
    // hapus foto lama start
    $fotobendera = mysqli_query($koneksi, "SELECT * FROM language WHERE id_language IN ('$id_language')");

    // tampilkan foto
    $vflag = mysqli_fetch_object($fotobendera);
    $path = "fotobende/";

    // is_file gunanya untuk mengecek apakah file ada atau tidak. jika ada maka akan dihapus\
    // is_file() untuk mengecek terlebih dahulu file di folder foto sebelum di hapus
    // unlink() untuk menghapus file foto lama di folder foto
    if (is_file($path . $vflag->flag)) {
        unlink($path . $vflag->flag);
    }
    // hapus foto lama end

    // update dgn menggunakan foto dgn menambahkan img='$namimage'
    $sql_update_language_image = mysqli_query(
    $koneksi,
    "UPDATE language SET
    bahasa='$Vlanguage',
    flag='$vflagimage'
    WHERE id_language='$id_language'");

    header("Location:tabel_language.php");
    }
?>