<?php
include "connection.php";
$select_sidebar_photo = mysqli_query($koneksi, "SELECT * FROM sidebar_photo ORDER BY id_sidebar_photo DESC");
?>

<?php include "header.php"; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>
        <!-- End of Sidebar -->
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">SIDEBAR PHOTO</h1>
                    </div>

                    <!-- Content Start -->
                    <a href="form_sidebar_photo.php" class="btn btn-info mb-3">Add Photo</a>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Sidebar Photo</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            while ($tampil = mysqli_fetch_object($select_sidebar_photo)): 
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++; ?></th>
                                    <td>
                                        <!-- PERBAIKAN: Memanggil kolom gambar yang benar dan merapikan tag img -->
                                        <img src="fotobende/<?php echo $tampil->sidebar_photo; ?>" width="100" alt="Sidebar Photo">
                                    </td>
                                    <td>
                                        <!-- PERBAIKAN: Parameter ID disesuaikan ke id_sidebar_photo -->
                                        <a href="delete_sidebar_photo.php?id_sidebar_photo=<?php echo $tampil->id_sidebar_photo; ?>"
                                           class="btn btn-danger" 
                                           onclick="return confirm('Confirm to delete?')">Delete</a>
                                           
                                        <a href="update_form_sidebar_photo.php?id_sidebar_photo=<?php echo $tampil->id_sidebar_photo; ?>" 
                                           class="btn btn-success">Update</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    <!-- Content End -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "footer.php"; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php include "bottom.php"; ?>