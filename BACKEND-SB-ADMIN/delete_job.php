<?php
include "connection.php";

$id_job = $_GET['id_job'];

$delete = mysqli_query($koneksi, "DELETE FROM job WHERE id_job='$id_job'");

header("Location: tabel_job.php");