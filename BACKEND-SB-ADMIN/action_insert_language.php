<!-- Ini adalah langkah kedua setelah dari FORM_LANGUAGE.PHP -->
<!-- selanjutnya ke tabel_language -->

<?php
include "connection.php";

// $vnama untuk penyimpanan sedangkan $_POST menerima inputan name="nama" dr form_language.php
$vlanguage = $_POST['bahasa'];
$vlevel = $_POST['level'];
$flagimage = time() . ".jpg";

// untuk menyimpan file foto yang nanti tambahkan dari file form_portfolio
$path = "fotobende/";

// mysqli_query adalah perintah utk menyatukan koneksi database dengan query tabel.
// (bahasa) adalah nama2 kolom database
// ('$vlanguage') adalah variabel di atas yang sudah kita bikin sebelumnya.

// untuk meng upload foto digunakan fungsi move_uploaded_file
move_uploaded_file($_FILES['flag']['tmp_name'], $path . $flagimage);

$sql_insert = mysqli_query(
    $koneksi,
    "INSERT INTO language(bahasa, flag, level)
    VALUES ('$vlanguage', '$flagimage', '$vlevel')"
);

// header location untuk mengarahkan halaman ke tabel_language
header("Location:tabel_language.php");
exit;
?>