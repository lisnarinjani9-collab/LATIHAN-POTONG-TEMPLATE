<?php
include "connection.php";

$id_login = $_GET['id_login'];

$delete = mysqli_query($koneksi, "DELETE FROM login WHERE
id_login= '$id_login'");

header("Location: tabel_login.php");   