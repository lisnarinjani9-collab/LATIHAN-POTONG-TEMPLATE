<!-- ini adlh langkah kedua stlh FORM_MOBILE>PHP -->
<!-- selnajutnya ke tabel_mobie -->

<?php
include "connection.php";

// $vnama utk penyimpanan sedangkan  $_POST menerima inputan name="nama" dr form_profile.php
$id_tools = $_POST['id_tools'];
$vnama = $_POST['nama'];
$vicon = $_POST['icon'];

// mysqli_query adlh perintah utk menyatukan koneksi database dg query tabel 
// (nama, about, website)

$update_tools = mysqli_query($koneksi,"UPDATE tools SET nama='$vnama',
icon='$vicon' WHERE id_tools='$id_tools'");

header("Location:tabel_tools.php");