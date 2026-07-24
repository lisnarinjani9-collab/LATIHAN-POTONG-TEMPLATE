<!-- ini adlh langkah kedua stlh FORM_MOBILE>PHP -->
<!-- selnajutnya ke tabel_mobie -->

<?php
include "connection.php";

// $vnama utk penyimpanan sedangkan  $_POST menerima inputan name="nama" dr form_profile.php
$vnama = $_POST['nama'];
$vicon = $_POST['icon'];

// mysqli_query adlh perintah utk menyatukan koneksi database dg query tabel 
// (nama, about, website)

$sql_insert = mysqli_query($koneksi,"INSERT INTO mobile (nama, icon)
values ('$vnama', '$vicon')");

header("Location:tabel_mobile.php");