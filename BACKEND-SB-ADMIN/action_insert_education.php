<!-- ini adlh lngkah kedua stlh dari FORM_EDUCATION.PHP
<1-- selanjutnya ke tabel_education -->
<?php
include "connection.php";

//$vnama utk penyimpanan sedangkan $_POST menerima inputan name="nama" dr from_education.php
$vjurusan=$_POST['nama_jurusan'];
$vbelajar=$_POST['tahun_belajar'];
$vtempat=$_POST['tempat_belajar'];
$vdeskripsi=$_POST['deskripsi'];

// mysqli query adlh perinth utk menyatukan koneksi database dg query tabel


$sql_insert = mysqli_query($koneksi,"INSERT INTO education
(nama_jurusan,tahun_belajar,tempat_belajar,deskripsi)
values ('$vjurusan','$vbelajar','$vtempat','$vdeskripsi')");

// header location mengarahkan halaman ke tabel_education
header("Location:tabel_education.php");