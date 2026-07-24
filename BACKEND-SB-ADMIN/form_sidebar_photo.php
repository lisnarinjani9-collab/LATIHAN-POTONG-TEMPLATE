<?php
include "connection.php";
$select_language = mysqli_query($koneksi, "SELECT * FROM language ORDER BY id_language DESC");
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
                    <!-- PERBAIKAN 1: Tambahkan enctype="multipart/form-data" -->
                    <form action="action_insert_sidebar_photo.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="sidebar_photo" class="form-label">Sidebar Photo</label>
                            
                            <!-- PERBAIKAN 2 & 3: Ubah name="sidebar_photo" dan tambahkan 'required' -->
                            <input type="file" class="form-control" id="sidebar_photo" name="sidebar_photo" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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