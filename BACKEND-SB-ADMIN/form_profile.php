<!-- ini adalah langkah pertama setelah memotong template index.php yaitu membuat form_profile.php -->
<!-- ditengah2 halaman ini selanjutnya dibuat action_insert_profile.php dari action="action_insert_profile.php" method="post" -->
<!-- next kita ke file="action_insert_profile.php" method="post" -->
<!-- lanjutkan utk membuat file berikutnya yaitu form_job.php,language.php, form_portofolio.php, form_education.php, form_reference.php dg cara berulang yg sama -->

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
                        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- content start -->
                    <form action="action_insert_profile.php" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label"> Nama
                            </label>
                            <input type="text" class="form-control" id="nama" name="nama">

                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">About</label>
                               <textarea name="about" id="deskripsi" cols="30" class="form-control" rows="10"></textarea> 
                        </div>
                        <div class="mb-3">
                            <label for="website" class="form-label">
                            Website </label>
                            <input type="text" class="form-control"id="website"
                            name="website">

                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">
                                Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone">

                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"> Email Addres</label>
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"> We'll never share your
                                email with anyone else.</div>
                        </div>

                        <div class="mb-3">
                            <label for="addres" class="form-label">Address</label>
                               <textarea name="addres" id="addres" cols="20" class="form-control" rows="5"></textarea> 
                        </div>

                        <div class="mb-3">
                            <label for="linkedin" class="form-label">
                                Linkedin </label>
                            <input type="text" class="form=control" id="linkedin" name="linkedin">
                        </div>

                        <div class="mb-3">
                            <label for="nationality" class="form-label"> Nationality</label>
                            <input type="text" class="form-control" id="nationality" name="nationality">
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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