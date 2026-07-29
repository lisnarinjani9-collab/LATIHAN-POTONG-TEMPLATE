<?php
include "connection.php";

$id_skill = $_GET['id_skill'];

$delete = mysqli_query($koneksi, "DELETE FROM skill WHERE
id_skill= '$id_skill'");

header("Location: tabel_skill.php");   