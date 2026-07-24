<?php
include "connection.php";

// $vnama utk penyimpanan sedangkan $_POST menerima inputan name="nama" dr form_language,php
$vlanguage=$_POST['bahasa'];
$flagimage=time() . ".jpg";

// utk pnyimpanan file foto yg nanti tambahkn file form_portfolio
$path = "flag/";

//mysqli adlh perintah utk menytukan koneksi dataabase dg query tabel

move_uploaded_file($_FILES['flag']['tmp_name'], $path . $vflagimage);

$sql_insert = mysqli_query($koneksi,"INSERT INTO language(bahasa, flag)
values ('$vlanguage','$vflagimage')");

header("Location:tabel_language.php");