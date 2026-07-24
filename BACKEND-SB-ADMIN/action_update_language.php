<?php
include "connection.php";

// $vnama utk penyimpanan sedangkan $_POST menerima inputan name="nama" dr form_language,php
$id_language = $_POST['language'];
$vlanguage=$_POST['bahasa'];
$flagimage=time() . ".jpg";

// utk pnyimpanan file foto yg nanti tambahkn file form_language
$path = "fotobende/";

//mysqli adlh perintah utk menytukan koneksi dataabase dg query tabel

if (empty($_FILES ['flag']['name'])) {
    $sql_update_language_no_image = mysqli_query($koneksi, "UPDATE language SET
    bahasa='$vlanguage WHERE id_language='$id_language'");
    header("Location:tabel_language.php");
} else {
    // update mnggunakan foto

    // upload foto baru yg dimasukn dr file_update_form_language.php
    move_uploaded_file($_FILES['flag']['tmp_name'], $path . $flagimage);

    // hapus foto lama start
    $fotobendera = mysqli_query($koneksi, "SELECT * FROM language WHERE
    id_language IN ('$id_language')");

    // tampilkan foto
    $vflag = mysqli_fetch_object($fotobendera);
    $vpath = "fotobende/";

    // is_file gunany untuk mengecek terlbh dahulu file di folder foto sblm dihps 
    // unlink gunanya untuk menghapus fotonya
    if (is_file($path . $vflag->flag)) {
        unlink($path . $vflag->flag);
    }

    // update dg menggunakan foto dg menambahkan img='$namimage'
    $sql_update_language_image = mysqli_query($koneksi,"UPDATE language SET
    bahasa='$vlanguage', flag='$flagimage' WHERE id_language='$id_language'");

    header("Location:tabel_language.php");
}
?>