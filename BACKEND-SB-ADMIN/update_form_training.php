<?php
include "connection.php";

$id_training = $_GET['id_training'];

$select_id = mysqli_query($koneksi, "SELECT*FROM training WHERE
id_training='$id_training'");

$training = mysqli_fetch_object($select_id);
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
                        <h1 class="h3 mb-0 text-gray-800">Training</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- content start -->
                    <form action="action_update_training.php" method="post">
                        <div class="mb-3">
                            <label for="jurusan" class="form-label"> Subject</label>
                        <input type="text" class="form-control" id="jurusan"
                        name="nama_training" value="<?php echo $training->nama_training ?>">

                        </div>

                        <div class="mb-3">
                            <label for="belajar" class="form-label"> Year</label>
                        <input type="text" class="form-control" id="belajar"
                        name="tahun_training" value="<?php echo $training->tahun_training?>">

                        </div>

                        <div class="mb-3">
                            <label for="tempat" class="form-label"> Place</label>
                        <input type="text" class="form-control" id="tempat"
                        name="tempat_training" value="<?php echo $training->tempat_training?>">

                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label"> Description</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30"
                        class="form-control" rows="10"><?php echo
                            $training->deskripsi ?></textarea>
                        </div>

                        <input type="hidden" value="<?php echo $training->id_training?>"
                        name="id_training">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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