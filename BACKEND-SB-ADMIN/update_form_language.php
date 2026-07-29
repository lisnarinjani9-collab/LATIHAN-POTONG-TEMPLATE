<?php
include "connection.php";

// menyimpan sementara id_profile dari tombol UPDATE tabel_profile.php sebelum
// dieksekusi ke bawah berikut ini
// $_GET['id_profile']; yg menerima id_profile dr tombol UPDATE tabel_profile.php
$id_language = $_GET['id_language'];

// menampilkan data profile yg didapat atau dikirim dari tombol UPDATE
// tabel_profile.php di atas
$select_id = mysqli_query(
    $koneksi,
    "SELECT * FROM language WHERE id_language='$id_language'"
);

// fungsi untuk menampilkan isi tabel menggunakan mysqli_fetch_object (->)
// selanjutnya menuju form bawah dengan menggunakan value untuk inputan setiap data
$language = mysqli_fetch_object($select_id);

?>

<?php include "header.php" ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php" ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php" ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">

                        <h1 class="h3 mb-0 text-gray-800">
                            language
                        </h1>

                    </div>

                    <!-- Content Start -->

            <form action="action_update_language.php" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="language" class="form-label">Language</label>
                    <input type="text" class="form-control"
                    id="language" name="bahasa" value="<?php echo $language->bahasa ?>" required>
                </div>

                <div class="mb-3">
                    <label for="level" class="form-label">Level</label>
                    <select class="form-control" id="level" name="level" required>
                        <option value="Pemula" <?php if ($language->level == 'Pemula') echo 'selected'; ?>>Pemula</option>
                        <option value="Menengah" <?php if ($language->level == 'Menengah') echo 'selected'; ?>>Menengah</option>
                        <option value="Mahir" <?php if ($language->level == 'Mahir') echo 'selected'; ?>>Mahir</option>
                        <option value="Sangat lancar" <?php if ($language->level == 'Sangat lancar') echo 'selected'; ?>>Sangat Lancar</option>
                    </select>
                </div>
              
                <div class="mb-3">
                    <label for="flag" class="form-label">Flag</label>
                    <input type="file" class="form-control" id="flag"
                    name="flag" value="<?php echo $language->flag ?>">
                </div>
                <input type="hidden" value="<?php echo
                $language->id_language ?>" name="id_language">
                <button type="submit" class="btn btn-primary">Submit
                </button>
            </form>


                    <!-- Content End -->

                </div>

            </div>

            <!-- Footer -->
            <?php include "footer.php" ?>

        </div>

    </div>

    <!-- Scroll to Top Button -->
    <?php include "bottom.php" ?>

</body>

</html>