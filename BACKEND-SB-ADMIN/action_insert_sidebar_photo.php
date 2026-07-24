<?php 
include "connection.php";
$nama_image = time() . ".jpg";
$vpath       = "fotobende/";
move_uploaded_file($_FILES['sidebar_photo']['tmp_name'], $vpath . $nama_image);
$sql_insert = mysqli_query($koneksi, "INSERT INTO sidebar_photo (sidebar_photo) VALUES ('$nama_image')");

header("Location: tabel_sidebar_photo.php");
?>