<!-- ini adlh lngkah kedua stlh dari FORM_EDUCATION.PHP
<1-- selanjutnya ke tabel_education -->
<?php
include "connection.php";

//$vnama utk penyimpanan sedangkan $_POST menerima inputan name="nama" dr from_education.php
$id_education = $_POST['id_education'];
$vjurusan=$_POST['nama_jurusan'];
$vbelajar=$_POST['tahun_belajar'];
$vtempat=$_POST['tempat_belajar'];
$vdeskripsi=$_POST['deskripsi'];

// mysqli query adlh perinth utk menyatukan koneksi database dg query tabel


$update_education = mysqli_query($koneksi,"UPDATE education SET
nama_jurusan='$vjurusan',tahun_belajar='$vbelajar',
tempat_belajar='$vtempat',deskripsi='$vdeskripsi' WHERE
id_education='$id_education'");

// header location mengarahkan halaman ke tabel_education
header("Location:tabel_education.php");