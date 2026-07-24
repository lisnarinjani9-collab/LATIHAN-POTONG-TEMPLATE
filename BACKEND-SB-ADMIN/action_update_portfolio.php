<?php
include "connection.php";

//$vnama utk penyimpanan sedangkan $_POST menerima inputan name="nama" dr update_form_portfolio.php"

$id_portfolio = $_POST['id_portfolio'];
$vjudul=$_POST['judul_portfolio'];

// utk membuat nama random mnggunakan time(); dan ekstensi ".jpg"
$namaimage=time() . ".jpg";
$vlink=$_POST['link'];
$vdeskripsi=$_POST['deskripsi'];
$vtype=$_POST['jenis'];

// utk menyimpan file foto yg nantii kita tambahkan dari form_portfolio
$path = "foto/";

// update tanpa foto. yg name di update adlh keterangan saja selain foto 
if (empty($_FILES['img']['name'])){
    $sql_update_portfolio_no_image = mysqli_query($koneksi, "UPDATE portfolio SET
    judul_portfolio='$vjudul', link='$vlink', deskripsi='$vdeskripsi',
    jenis='$vtype' WHERE id_portfolio='$id_portfolio'");

    header("Location:tabel_portfolio.php");
} else {
    // update menggunkan foto

    // upload foto baru yg dimasukan dari update_form_portfolio.php
    move_uploaded_file($_FILES['img']['tmp_name'], $path . $namaimage);

    // hapus foto lama start
    $imgportfolio = mysqli_query($koneksi,"SELECT*FROM portfolio WHERE
    id_portfolio IN ('$id_portfolio')");

    // tampilkan foto
    $img = mysqli_fetch_object($imgportfolio);

    $path = "foto/";

    // is file gunanya utk mengecek terlbih dahulu file di folder foto sblm dihps 
    // unlink gunanya utk menghapus fotonya

    if (is_file($path . $img->img)) {
        unlink($path . $img->img);  
    }

    // hapus foto lama end

    // update dg menggunakan foto dg menambahkan img='$namimage'
    $update_portfolio_no_img = mysqli_query($koneksi, "UPDATE portfolio SET judul_portfolio='$vjudul',
    link='$vurl', deskripsi='$vdeskripsi', jenis='$vtype', img='$namaimage' WHERE
    id_portfolio='$id_portfolio'");

header("Location:tabel_portfolio.php");
}
