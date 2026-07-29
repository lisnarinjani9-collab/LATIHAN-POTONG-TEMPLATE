<?php
include "connection.php";

session_start();

// $vnama utk penyimpanan sedangkan  $_POST menerima inputan name="nama" dr form_profile.php
$vemail = $_POST['email'];
$vpassword = $_POST['password'];

// mysqli_query adlh perintah utk menyatukan koneksi database dg query tabel 
// (nama, about, website)

$sql_login = mysqli_query($koneksi,"SELECT*FROM login WHERE email='$vemail' AND
password='$vpassword'");
$cek = mysqli_num_rows($sql_login);
if($cek != 0){

    $_SESSION['email']= $email;
    $_SESSION['status']= "login";

    header("Location:index.php");

}else{
    header("Location:login.php?pesan=gagal");
}
