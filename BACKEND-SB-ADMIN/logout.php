<?php
session_start();

// mengahapus session login menggunakan session_destory();
session_destroy();

// setelah dihapus, akan diarahkan ke page login.php
header("location:login.php?pesan=logout");