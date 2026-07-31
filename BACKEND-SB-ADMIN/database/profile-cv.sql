-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2026 at 02:19 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile-cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id_education` int NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `tahun_belajar` varchar(50) NOT NULL,
  `tempat_belajar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id_education`, `nama_jurusan`, `tahun_belajar`, `tempat_belajar`, `deskripsi`) VALUES
(1, 'Teknik Informatika', '2023', 'Universitas Gadjah Mada', '1. Dasar Pemrograman & Komputasi\r\n2. Rekayasa Perangkat Lunak (Software Engineering)\r\n3. Kecerdasan Buatan (Artificial Intelligence) '),
(6, 'Sistem Informasi', '2023', 'Universitas Brawijaya', '1. Pengembangan Perangkat Lunak: Pemrograman web/mobile, basis data (database), dan rekayasa perangkat lunak.\r\n2. Analisis & Manajemen Bisnis: Systems Analysis & Design, manajemen proyek IT, analisis proses bisnis, dan enterprise resource planning (ERP).\r\n3.Data & Strategi: Data analytics, keamanan informasi, tata kelola IT (IT governance), dan strategi bisnis berbasis teknologi'),
(7, 'Teknik Industri', '2024', 'ITB', '1. Jurusan yang mengombinasikan rekayasa teknik dengan manajemen sistem terpadu.\r\n2. Mengoptimalkan interaksi antara manusia, mesin, bahan baku, informasi, dan energi.\r\n3. Meningkatkan efisiensi proses kerja, merancang rantai pasok (supply chain), dan menjaga kualitas produksi.');

-- --------------------------------------------------------

--
-- Table structure for table `familiar`
--

CREATE TABLE `familiar` (
  `id_familiar` int NOT NULL,
  `nama` varchar(300) NOT NULL,
  `icon` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `familiar`
--

INSERT INTO `familiar` (`id_familiar`, `nama`, `icon`) VALUES
(1, 'PHP', 'devicon-php-plain'),
(2, 'Laravel', 'devicon-laravel-plain'),
(3, 'JavaScript', 'devicon-javascript-plain'),
(4, 'HTML', 'devicon-html5-plain'),
(5, 'CSS', 'devicon-css3-plain'),
(6, 'Bootstrap', 'devicon-bootstrap-plain');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id_job` int NOT NULL,
  `nama_pekerjaan` varchar(300) NOT NULL,
  `tahun_bekerja` varchar(300) NOT NULL,
  `tempat_bekerja` varchar(300) NOT NULL,
  `deskripsi` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id_job`, `nama_pekerjaan`, `tahun_bekerja`, `tempat_bekerja`, `deskripsi`) VALUES
(1, 'Software developer', '2022', 'PT Lauwba Techno', 0x4d656e67656d62616e676b616e2061706c696b6173692c206d656e756c69732064616e206d656e67756a69206b6f64652070726f6772616d2c206d656d7065726261696b69206275672c207365727461206d656c616b756b616e2070656d656c6968617261616e2073697374656d),
(2, 'Network administrator', '2024', 'PT Ceo Dracin', 0x4d656e67656c6f6c61206b6f6e6669677572617369206a6172696e67616e2c206d656c616b756b616e206d6f6e69746f72696e67207365727665722064616e206a6172696e67616e2c207365727461206d656e6761746173692067616e676775616e206b6f6e656b73692e),
(4, 'Network engineer', '2025', 'PT Ceo Dracin', 0x4d6572616e63616e672c206d656e67656c6f6c612c2064616e206d656c616b756b616e2070656d656c6968617261616e20696e667261737472756b747572206a6172696e67616e207065727573616861616e207365727461206d656d617374696b616e206a6172696e67616e206265726a616c616e2064656e67616e2073746162696c2e);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id_language` int NOT NULL,
  `bahasa` varchar(300) NOT NULL,
  `level` enum('Pemula','Menengah','Mahir','Sangat Lancar') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `flag` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id_language`, `bahasa`, `level`, `flag`) VALUES
(2, 'England', 'Mahir', 'england.jpg'),
(3, 'Indonesia', 'Pemula', 'indoflag.webp'),
(12, 'Japan', 'Sangat Lancar', '1785204185.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `email`, `password`) VALUES
(1, 'lisnarinjani9@gmail.com', 'lisnaimut'),
(2, 'rajiann@gmail.com', 'apaaja');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id_mobile` int NOT NULL,
  `nama` varchar(300) NOT NULL,
  `icon` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id_mobile`, `nama`, `icon`) VALUES
(1, 'android', 'devicon-android-plain'),
(2, 'Kotlin', 'devicon-kotlin-plain'),
(3, 'Java', 'devicon-java-plain');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int NOT NULL,
  `judul_portfolio` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `judul_portfolio`, `img`, `link`, `deskripsi`, `jenis`) VALUES
(2, 'Kasir Web', '1785207332.jpg', 'https://figma.com/kasirweb', 'Website Kasir merupakan aplikasi berbasis web yang digunakan untuk membantu proses pencatatan penjualan, pengelolaan data karyawan dan menu, serta pembuatan laporan transaksi secara lebih mudah, cepat, dan efisien.', 'Web'),
(3, 'APM Pengaduan Masyarakat', '1785207323.jpg', 'http://www.tiktok.com/@rinjanidoang', 'APM,aplikasi pengaduan masyarakat yang di rancang untuk menerima laporan dari masyarakat.', 'Web');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_profile` int NOT NULL,
  `nama` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `addres` text NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  `nationality` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_profile`, `nama`, `about`, `website`, `phone`, `email`, `addres`, `linkedin`, `nationality`) VALUES
(2, 'Lisna Rinjani', 'Pelajar SMKN 3 BANJAR yang sedang melakukan PKL di LAUWBA ACADEMY', 'https://github.com/lisnarinjani9-collab/LATIHAN-POTONG-TEMPLATE', '083170955109', 'lisnarinjaniiii@gmail.com', 'Yogyakarta, Sleman, Gamping, Ambarketawang. Patukan.gg.jambu No.09', 'http://instagram.com/narrinjani', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `id_reference` int NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `perusahaan` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`id_reference`, `nama`, `jabatan`, `perusahaan`, `phone`, `email`) VALUES
(1, 'Lisna Rinjani', 'CEO', 'PT Sukses Selalu', '083170955019', 'lisnacantik@gmail.com'),
(2, 'Rajian Santriazi', 'Engineering ', 'PT Industri Jaya', '08318909273', 'rajiannw@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_photo`
--

CREATE TABLE `sidebar_photo` (
  `id_sidebar_photo` int NOT NULL,
  `sidebar_photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sidebar_photo`
--

INSERT INTO `sidebar_photo` (`id_sidebar_photo`, `sidebar_photo`) VALUES
(7, '1785072019.jpg'),
(10, '1785290487.jpg'),
(11, '1785290505.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id_skill` int NOT NULL,
  `nama_skill` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id_skill`, `nama_skill`) VALUES
(1, 'Laravel'),
(2, 'PHP'),
(3, 'JavaScript'),
(4, 'HTML'),
(5, 'UI & UX');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id_tools` int NOT NULL,
  `nama` varchar(300) NOT NULL,
  `icon` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id_tools`, `nama`, `icon`) VALUES
(1, 'VSCode', 'devicon-vscode-plain'),
(2, 'MySQL', 'devicon-mysql-plain'),
(3, 'Firebase', 'devicon-firebase-plain'),
(4, 'Canva', 'devicon-canva-plain'),
(5, 'Android', 'devicon-androidstudio-plain'),
(6, 'Composer', 'devicon-composer-plain'),
(7, 'PHP', 'devicon-php-plain');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id_training` int NOT NULL,
  `nama_training` varchar(300) NOT NULL,
  `tahun_training` varchar(300) NOT NULL,
  `tempat_training` varchar(300) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id_training`, `nama_training`, `tahun_training`, `tempat_training`, `deskripsi`) VALUES
(1, 'PHP', '2023', 'PT Bahagia Sekali', 'PHP (Hypertext Preprocessor) adalah bahasa pemrograman sisi server (server-side scripting) yang digunakan untuk mengembangkan aplikasi web dinamis. PHP mampu mengolah data, berinteraksi dengan database, mengelola sesi pengguna, serta menghasilkan halaman web yang dapat berubah sesuai kebutuhan pengguna.'),
(2, 'Laravel', '2025', 'PT Mencari Cinta Sejati', 'Laravel adalah framework PHP yang menerapkan konsep MVC (Model-View-Controller) untuk mempermudah pengembangan aplikasi web. Laravel menyediakan berbagai fitur seperti routing, autentikasi, migrasi database, ORM (Eloquent), dan sistem keamanan sehingga proses pengembangan menjadi lebih cepat, terstruktur, dan efisien.'),
(4, 'JavaScript', '2029', 'PT Abadi Jaya', 'JavaScript adalah bahasa pemrograman yang digunakan untuk membuat halaman web menjadi lebih interaktif dan dinamis. JavaScript dapat digunakan untuk mengatur tampilan, memproses data, menangani event pengguna, serta berkomunikasi dengan server tanpa perlu memuat ulang halaman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_education`);

--
-- Indexes for table `familiar`
--
ALTER TABLE `familiar`
  ADD PRIMARY KEY (`id_familiar`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id_job`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id_language`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id_mobile`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id_reference`);

--
-- Indexes for table `sidebar_photo`
--
ALTER TABLE `sidebar_photo`
  ADD PRIMARY KEY (`id_sidebar_photo`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id_tools`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id_training`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id_education` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `familiar`
--
ALTER TABLE `familiar`
  MODIFY `id_familiar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id_language` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id_mobile` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `id_reference` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sidebar_photo`
--
ALTER TABLE `sidebar_photo`
  MODIFY `id_sidebar_photo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id_tools` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id_training` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
