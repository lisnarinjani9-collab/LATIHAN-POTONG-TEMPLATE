<?php
include "connection.php";
// kedua, buat perintah sql/query ke database utk menampilkan data
$select_profile = mysqli_query($koneksi, "SELECT * FROM `profile` ");
// ketiga
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
                        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- keempat, tambahkan tombol TAMBAH utk mengarahkan ke file
                     form_profile.php -->
                    <a href="form_profile.php" class="btn btn-info mb-2"> Add</a>
                    <!-- content start -->

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Overview</th>
                                <th scope="col">Website</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Addres</th>
                                <th scope="col">Linkedin</th>
                                <th scope="col">Nationality</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- perulangan -->
                            <?php
                            // mysqli_fetch_object menggunakan <?php $tampil-> nama;
                            // mysqli_fetch_array menggunakan <?php $tampil['nama'];
                            while (
                                $tampil = mysqli_fetch_object
                                ($select_profile)
                            ):
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $tampil->nama; ?></th>
                                    <td><?php echo $tampil->about; ?></td>
                                    <td><?php echo $tampil->website; ?></td>
                                    <td><?php echo $tampil->phone; ?></td>
                                    <td><?php echo $tampil->email; ?></td>
                                    <td><?php echo $tampil->addres; ?></td>
                                    <td><?php echo $tampil->linkedin; ?></td>
                                    <td><?php echo $tampil->nationality; ?></td>
                                    <td>
                                        <!-- step two -->
                                        <!-- DELETE_PROFILE.php? membutuhkan id_profile yg didapatkan dari $tampil-> id_profile diatas -->
                                        <!-- step three: -->
                                        <!-- on click "return confirm ('Confirm to delete?')" adalah utk konfirmasi hapus ketika clik tombol DELETE -->
                                        <!-- step four: create delete_profile.php -->
                                        <a href="delete_profile.php? id_profile=<?php echo $tampil->id_profile; ?>"
                                            class="btn btn-danger" onclick="return confirm ('confirm to delete?')">
                                            DELETE</a>
                                        <!-- dari sini kita kemudian bikin file update_form_profile.php -->
                                        <!-- di file tsb, kita copy data file form_profile dan paste di file "update_form_profile.php -->
                                        <!-- dari sini skrg kita ke file update_form_profile.php -->
                                        <a href="update_form_profile.php?id_profile=
                               <?php echo $tampil->id_profile; ?>" class="btn
                               btn-success"> UPDATE</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>

                    <!-- content end -->

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