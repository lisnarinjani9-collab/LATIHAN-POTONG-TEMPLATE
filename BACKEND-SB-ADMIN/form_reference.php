<!-- ini adalah langkah pertama setelah memotong template index.php yaitu membuat form_profile.php -->
<!-- ditengah2 halaman ini selanjutnya dibuat action_insert_profile.php dari action="action_insert_profile.php" method="post" -->
<!-- next kita ke file="action_insert_profile.php" method="post" -->
<!-- lanjutkan utk membuat file berikutnya yaitu form_training.php,language.php, form_portofolio.php, form_education.php, form_reference.php dg cara berulang yg sama -->

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
                        <h1 class="h3 mb-0 text-gray-800">Reference</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- content start -->
                    <form action="action_insert_reference.php" method="post"
                    enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama" class="form-label"> Nama
                            </label>
                            <input type="text" class="form-control" id="nama" name="nama">

                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Designation</label>
                            <input type="text" class="form-control"id="jabatan"
                        name="jabatan">

                        </div>
                        <div class="mb-3">
                            <label for="company" class="form-label">
                                Company </label>
                            <input type="text" class="form-control" id="company" name="perusahaan">

                        </div> 
                        
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label"> Email Addres</label>
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"> We'll never share your
                                email with anyone else.</div>
                        </div>                       

                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
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