<?php
include "connection.php";

$vjurusan=$_POST['nama_training'];
$vbelajar=$_POST['tahun_training'];
$vtempat=$_POST['tempat_training'];
$vdeskripsi=$_POST['deskripsi'];

$sql_insert = mysqli_query($koneksi, "INSERT INTO training(nama_training, tahun_training, tempat_training, deskripsi) values ('$vjurusan', '$vbelajar', '$vtempat', '$vdeskripsi')");
header("Location:tabel_training.php");