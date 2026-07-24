<?php
include "connection.php";

$vportfolio = $_POST['judul_portfolio'];
$namaimage  = time() . ".jpg";
$vlink      = $_POST['link'];
$vdeskripsi = $_POST['deskripsi'];
$vtype      = $_POST['jenis'];

$path = "fotobende/";

move_uploaded_file($_FILES['img']['tmp_name'], $path . $namaimage);

// PERBAIKAN DI SINI: Sesuaikan $vimg -> $namaimage dan $vcategory -> $vtype
$sql_insert = mysqli_query($koneksi, "INSERT INTO portfolio (judul_portfolio, img, link, deskripsi, jenis)
VALUES ('$vportfolio', '$namaimage', '$vlink', '$vdeskripsi', '$vtype')");

header("Location:tabel_portfolio.php");
?>