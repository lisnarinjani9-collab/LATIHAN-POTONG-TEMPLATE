<?php
include "connection.php";

$vnama = $_POST['nama'];
$vdeskripsi = $_POST['about'];
$vwebsite = $_POST['website'];
$vphone = $_POST['phone'];
$vemail = $_POST['email'];
$vcity = $_POST['addres'];
$vlinkedin = $_POST['linkedin'];
$vnationality = $_POST['nationality'];

$sql_insert =mysqli_query($koneksi, "INSERT INTO profile
(nama, about, website, phone, email, addres, linkedin, nationality)
VALUES
('$vnama','$vdeskripsi','$vwebsite','$vphone','$vemail','$vcity','$vlinkedin','$vnationality')");

header("Location: tabel_profile.php");   