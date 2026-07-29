<?php
include "connection.php";

$id_tools = $_GET['id_tools'];

$delete = mysqli_query($koneksi, "DELETE FROM tools WHERE
id_tools= '$id_tools'");

header("Location: tabel_tools.php");   