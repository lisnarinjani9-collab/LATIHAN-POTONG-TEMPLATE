<?php
include "connection.php";
// $vnama untuk penyimpanan sedangkan  $_POST menerima inputan name="nama" dr update_form_refence.php

$id_portfolio = $_POST['id_portfolio'];
$vjudul = $_POST['judul_portfolio'];

// untuk menyimpan naa random menggunakan time(); dan ekstensi ".jpg"
$namaimg = time() . ".jpg";
$vlink = $_POST['link'];
$vdeskripsi = $_POST['deskripsi'];
$vtype = $_POST['jenis'];

// utk menyimpan file foto yang nanti kita tambahkan dari form_portfolio
$path = "fotobende/";

//
if (empty($_FILES['img']['name'])) {
    $sql_update_portfolio_no_img = mysqli_query($koneksi, "UPDATE portfolio SET
    judul_portfolio='$vjudul', link='$vlink', deskripsi='$vdeskripsi',
    jenis='$vtype' WHERE id_portfolio='$id_portfolio' ");

    header("location:tabel_portfolio.php");
} else {

      move_uploaded_file($_FILES['img']['tmp_name'], $path . $namaimg);

      // hapus foto lama start
      $imgportfolio = mysqli_query($koneksi, "SELECT * FROM portfolio WHERE
      id_portfolio IN ('$id_portfolio')");

      // tampilkan foto
      $img = mysqli_fetch_object($imgportfolio);

      $path = "foto/";

      if (is_file($path . $img->img)) {
        unlink($path . $img->img);
      }
      // hapus foto lama end

// update dg menggunakan foto dg menambhakan img='$namaimg'
$update_portfolio_no_img = mysqli_query($koneksi, "UPDATE portfolio SET
judul_portfolio='$vjudul',
link='$vlink',
deskripsi='$vdeskripsi',
jenis='$vtype',
img='$namaimg'
WHERE id_portfolio='$id_portfolio'");

header("Location:tabel_portfolio.php");

}