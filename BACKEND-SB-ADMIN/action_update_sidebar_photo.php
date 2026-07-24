<?php
include "connection.php";

$id_sidebar_photo = $_POST['id_sidebar_photo'];
$nama_image = time() . ".jpg";
$path ="fotobende/";
if(is_file($path . $img->sidebar_photo)){
    unlink($path . $img->sidebar_photo);
}
move_uploaded_file($_FILES['sidebar_photo']['tmp_name'], $path . $nama_image);
$select = mysqli_query($koneksi, "UPDATE sidebar_photo SET sidebar_photo 
='$nama_image' WHERE id_sidebar_photo='$id_sidebar_photo'");

header("Location:tabel_sidebar_photo.php");