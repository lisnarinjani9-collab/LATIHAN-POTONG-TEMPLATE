<?php
include "connection.php";

$vjob=$_POST['nama_pekerjaan'];
$vwork=$_POST['tahun_bekerja'];
$vplace=$_POST['tempat_bekerja'];
$vdeskripsi=$_POST['deskripsi'];

$sql_insert = mysqli_query($koneksi,"INSERT INTO job (nama_pekerjaan,
tahun_bekerja,tempat_bekerja,deskripsi)
values ('$vjob','$vwork','$vplace','$vdeskripsi')");

header("Location:tabel_job.php");