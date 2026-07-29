<!-- we are from tabel_profile -->

<?php
include "connection.php";

// untuk menerima id_profile yang dibawa dari tombol DELETE dari TABEL PROFILE menggunakan $id_profile
// $_GET['id_profile']; menyimpan sementara id yang nanti akan digunakan pada perintah DELETE dibawahnya.
$id_reference = $_GET["id_reference"];

// ini perintah sql untuk mendelete data berdasarkan id_profile yang dibawa
$delete = mysqli_query($koneksi, "DELETE FROM reference WHERE 
id_reference='$id_reference'");

// setelah proses delete dijalankan, maka akan kembali ke file tabel_profile.php
header("Location: tabel_reference.php");