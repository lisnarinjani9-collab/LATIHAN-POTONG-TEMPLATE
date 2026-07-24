<?php
include "connection.php";

$id_training = $_GET['id_training'];

$delete = mysqli_query($koneksi, "DELETE FROM training WHERE id_training='$id_training'");

header("Location: tabel_training.php");