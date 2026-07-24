<!-- we are form tabel_portfolio -->
<?php
include "connection.php";

// utk menerima id_portfoliuo yg  dibawa dr tombol DELETE ddr tabel_portfolio mnggunkan $id_portfolio
//
$id_portfolio = $_GET['id_portfolio'];


$imgportfolio = mysqli_query($koneksi, "SELECT*FROM portfolio WHERE id_portfolio
IN ('$id_portfolio')");
$vimg = mysqli_fetch_object($imgportfolio);
$path = "foto/";

// is file utk mengecek dulu file di folder foto sblm dihapus
// unlink utk menghapus fotonya
if (is_file($path . $vimg->img)) {
    unlink($path . $vimg->img);
}

// ini perintah sql utk mendelete data berdasarkan id_portfolio yg dibawa 
$sql = mysqli_query($koneksi,"DELETE FROM portfolio WHERE 
id_portfolio='$id_portfolio'");

// stlh proses delete dijlnkan maka akan kembali ke file tabel_portfolio.php
header("Location: tabel_portfolio.php");