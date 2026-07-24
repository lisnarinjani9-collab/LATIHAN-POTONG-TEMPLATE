<!-- ini adlh langkah ketiga after dr file action_insert_portfolio.php --->
<!-- disini adlh langkah utk menampilkan data dr database ke tampilaan versi web -->


<!--pertama2 panggil koneksi database -->
<?php
include "connection.php";
// kedua, buat perintah sql/query ke database utk menampilkan data 
$select_portfolio = mysqli_query($koneksi, "SELECT*FROM portfolio ORDER BY id_portfolio DESC");

?>

<?php include "header.php" ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php" ?>
        <!-- End of Sidebar -->
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Portfolio</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

<!-- keempat, tambahkan tombol TAMBAH utk mengarahkan ke file form_portfolio.php -->
                    <a href="form_portfolio.php" class="btn btn-info mb-2">Add</a>
                    <!-- content start -->
                    <table class="table table-striped"> 
                        <thead>
                            <tr>
                                <th scope="col">Portfolio</th>
                                <th scope="col">Image</th>
                                <th scope="col">Url</th>
                                <th scope="col">Description</th>
                                <th scope="col">Type</th>

                                <th scope="col">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <!-- perulangan -->
                            <?php
                            // mysqli_fetch_object mnggunakan <?php $tampil;
                            // myqli_fetch_array mnggunakan <?php $tampil ['nama'];
                while ($tampil = mysqli_fetch_object($select_portfolio)):
                        ?>
                    <tr>
                                <th scope="row"><?php echo
                                $tampil->judul_portfolio; ?></th>
                                <td>
                                    <img src="fotobende/<?php echo $tampil->img; ?>"
                                    alt="" width="100">
                                </td>
                                <td><?php echo $tampil->link; ?></td>
                                <td><?php echo $tampil->deskripsi; ?></td>
                                <td><?php echo $tampil->jenis; ?></td>


                        <td>
                                <a href="delete_portfolio.php?id_portfolio=<?php
                                echo $tampil->id_portfolio;?>" class="btn
                                btn-danger" onclick="return confirm
                                ('confirm to delete?')">DELETE</a>
                                <a href="update_form_portfolio.php?id_portfolio=<?php
                                echo $tampil->id_portfolio;?>" class="btn
                                btn-success">UPDATE</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                        </tbody>
                    </table>
                    <!-- content end -->

                    <!--/.container-fluid -->
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "footer.php" ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php include "bottom.php" ?>