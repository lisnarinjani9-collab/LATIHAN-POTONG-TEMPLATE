<!-- from file update_form_language.php -->

<?php
include "connection.php";

// $vnama untuk penyimpanan sedangkan $_POST menerima inputan name="nama" dr
// update_form_language.php
$id_language = $_POST['id_language'];
$vlanguage = $_POST['bahasa'];
$vlevel = $_POST['level'];
$flagimage = time() . ".jpg";

// utk menyimpan file foto yg nanti kita tambahkan dari form_language
$path = "fotobende/";

// update tanpa foto. Yg mau di update adlh keterangan saja selain foto.
if (empty($_FILES['flag']['name'])) {

    $sql_update_language_no_image = mysqli_query(
        $koneksi,
        "UPDATE language SET
        bahasa='$vlanguage',
        level='$vlevel' WHERE id_language='$id_language'");
        header("Location:tabel_language.php");
} else {

    // update menggunakan foto

    // upload foto baru yg dimasukkan dari update_form_portfolio.php
    move_uploaded_file($_FILES['flag']['tmp_name'], $path . $flagimage);

    // hapus foto lama start
    $fotobendera = mysqli_query(
        $koneksi,
        "SELECT * FROM language WHERE 
        id_language IN ('$id_language')");

    // tampilkan foto
    $vflag = mysqli_fetch_object($fotobendera);
    $path = "fotobende/";

    // is_file gunanya utk mengecek terlebih dahulu file di folder foto sblm dihapus
    // unlink gunanya utk menghapus fotonya
    if (is_file($path . $vflag->flag)) {
    unlink($path . $vflag->flag);
}

// hapus foto lama end

// update dgn menggunakan foto dgn menambahkan img='$namimage'
    $sql_update_language_image = mysqli_query(
    $koneksi,
    "UPDATE language SET
    bahasa='$vlanguage',
    level='$vlevel',
    flag='$flagimage'
    WHERE id_language='$id_language'");

    header("Location:tabel_language.php");
    }
?>