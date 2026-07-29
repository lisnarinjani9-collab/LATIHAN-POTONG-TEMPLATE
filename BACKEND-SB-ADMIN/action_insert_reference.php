<?php
include "connection.php";

$vnama=$_POST['nama'];
$vjabatan=$_POST['jabatan'];
$vcompany=$_POST['perusahaan'];
$vphonee=$_POST['phone'];
$vemail=$_POST['email'];

$sql_insert = mysqli_query($koneksi,"INSERT INTO reference(nama,jabatan,perusahaan,
phone,email)
values ('$vnama','$vjabatan','$vcompany','$vphonee','$vemail')");

header("Location:tabel_reference.php");