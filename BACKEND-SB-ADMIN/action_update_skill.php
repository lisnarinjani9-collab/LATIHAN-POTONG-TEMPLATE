<?php
include "connection.php";

$id_skill = $_POST['id_skill'];
$vnama = $_POST['nama'];

$update_skill=mysqli_query($koneksi, "UPDATE skill 
SET nama_skill='$vnama' WHERE id_skill='$id_skill'");

header("location:tabel_skill.php");