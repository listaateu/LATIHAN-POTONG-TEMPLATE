-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 31 Jul 2026 pada 02.20
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Basis data: `profile-cv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `id_education` int NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `tahun_belajar` varchar(40) NOT NULL,
  `tempat_belajar` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`id_education`, `nama_jurusan`, `tahun_belajar`, `tempat_belajar`, `deskripsi`) VALUES
(1, 'PPLG(pengembangan perangkat lunak dan gim)', '2024', 'SMKN 3 Banjar', 'UI UX, Basis Data, Pemograman Web'),
(2, 'OTOMOTIF', '2026', 'SMKN 3 BANJAR', '                            B INGGRIS\r\nB JEPANG'),
(3, 'AKL', '2008', 'SMK 2 BANJAR', '                                                        SENI BUDAYA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `familiar`
--

CREATE TABLE `familiar` (
  `id_familiar` int NOT NULL,
  `nama` varchar(256) NOT NULL,
  `icon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `familiar`
--

INSERT INTO `familiar` (`id_familiar`, `nama`, `icon`) VALUES
(2, 'JAVSCRIPT', 'devicon-javascript-plain'),
(4, 'CSS', 'devicon-css3-plain'),
(5, 'HTML', 'devicon-html5-plain'),
(8, 'laravel', 'devicon-laravel-plain'),
(11, 'PHP', 'devicon-php-plain'),
(12, 'MYSQL', 'devicon-mysql-plain'),
(14, 'bootstrap', 'devicon-bootstrap-plain'),
(15, 'JAVA', 'devicon-java-plain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `job`
--

CREATE TABLE `job` (
  `id_job` int NOT NULL,
  `nama_pekerjaan` varchar(200) NOT NULL,
  `tahun_bekerja` varchar(250) NOT NULL,
  `tempat_bekerja` varchar(100) NOT NULL,
  `deskripsi` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `job`
--

INSERT INTO `job` (`id_job`, `nama_pekerjaan`, `tahun_bekerja`, `tempat_bekerja`, `deskripsi`) VALUES
(2, 'Student Intern (PKL)', '2020', 'PT Lauwba Techno', 0x4d656d70656c616a6172692070656e67656d62616e67616e2061706c696b617369206265726261736973207765622c206d656e67656c6f6c612064617461626173652c207365727461206d656d6275617420666974757220435255442e),
(7, 'Pelajar', '2026', 'SMKN 3 BANJAR', 0x7361796120736564616e67206d656c616b73616e616b616e20504b4c206469205054204c617577626120546563686e6f2e);

-- --------------------------------------------------------

--
-- Struktur dari tabel `language`
--

CREATE TABLE `language` (
  `id_language` int NOT NULL,
  `bahasa` varchar(100) NOT NULL,
  `flag` varchar(250) NOT NULL,
  `level` enum('pemula','menengah','mahir','sangat lancar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `language`
--

INSERT INTO `language` (`id_language`, `bahasa`, `flag`, `level`) VALUES
(3, 'INGGRIS', '1784816124.jpg', 'pemula'),
(5, 'JEPANG', '1784815706.jpg', 'pemula'),
(6, 'INDONESIA', '1784818324.jpg', 'pemula');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `email`, `password`) VALUES
(1, 'lista@gmail.com', 'listacantik123'),
(5, 'listaambarianti@gmail.com', '11111'),
(6, 'listaambarianti@gmail.com', 'vguygfuyfyujfyuj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobile`
--

CREATE TABLE `mobile` (
  `id_mobile` int NOT NULL,
  `nama` varchar(256) NOT NULL,
  `icon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `mobile`
--

INSERT INTO `mobile` (`id_mobile`, `nama`, `icon`) VALUES
(1, 'java', 'devicon-java-plain'),
(2, 'kotlin', 'devicon-kotlin-plain'),
(5, 'android', 'devicon-android-plain'),
(6, 'php', 'devicon-php-plain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int NOT NULL,
  `judul_portfolio` varchar(256) NOT NULL,
  `img` varchar(256) NOT NULL,
  `link` varchar(256) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `judul_portfolio`, `img`, `link`, `deskripsi`, `jenis`) VALUES
(13, 'fashionshow', '1785067908.jpg', '#', 'Mengikuti fashion show bertema budaya dengan menampilkan busana tradisional. Kegiatan ini menjadi pengalaman untuk mengembangkan kepercayaan diri, kemampuan berekspresi, dan penampilan di atas panggung.', 'fashion'),
(14, 'acara baracuda', '1785067761.jpg', 'https://www.instagram.com/lista.ateu/p/DR5eSTzE8Qz7kY78kPvJiY5x4j0-GnGN5xA5800/', 'Berpartisipasi dalam acara Baracuda dengan menampilkan tarian jaipong sebagai bentuk pelestarian budaya serta meningkatkan pengalaman tampil di depan umum.', 'kesenian'),
(16, 'lomba nari ditasik', '1784867105.jpg', 'http://instagram.com/lista.ateu', 'Mengikuti lomba tari sebagai bentuk pengembangan bakat, kreativitas, dan kemampuan bekerja sama dalam tim. Kegiatan ini memberikan pengalaman berharga serta meningkatkan rasa percaya diri.\r\n', 'prestasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id_profile` int NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `about` text COLLATE utf8mb4_general_ci NOT NULL,
  `website` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `linkedin` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `nationality` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id_profile`, `nama`, `about`, `website`, `phone`, `email`, `address`, `linkedin`, `nationality`) VALUES
(2, 'lista ateu ambarianti', 'Halo, saya **Lista**, seseorang yang memiliki semangat untuk terus belajar dan berkembang. Saya dikenal sebagai pribadi yang bertanggung jawab, disiplin, mudah beradaptasi, dan senang bekerja sama dengan orang lain. Saya selalu berusaha memberikan yang terbaik dalam setiap kesempatan serta terbuka terhadap pengalaman dan tantangan baru untuk terus meningkatkan kemampuan diri.\r\n', 'https://github.com/listaateu/LATIHAN-POTONG-TEMPLATE', '0877-0895-0844', 'listaateu@gmail.com', 'Jl. Kaliurang Km. 5 No. 15, RT 03/RW 05, Caturtunggal, Kec. Depok, Kab. Sleman, Daerah Istimewa Yogyakarta 55281', 'http://instagram.com/lista.ateu', 'indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reference`
--

CREATE TABLE `reference` (
  `id_reference` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `reference`
--

INSERT INTO `reference` (`id_reference`, `nama`, `jabatan`, `perusahaan`, `phone`, `email`) VALUES
(1, 'lista ateu ambarianti \r\n', 'kepala sekolah ', 'PT.Maju Jaya', '0877-0895-0844', 'lista@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sidebar_photo`
--

CREATE TABLE `sidebar_photo` (
  `id_sidebar_photo` int NOT NULL,
  `sidebar_photo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `sidebar_photo`
--

INSERT INTO `sidebar_photo` (`id_sidebar_photo`, `sidebar_photo`) VALUES
(10, '1785042069.jpg'),
(14, '1785073800.jpg'),
(15, '1785073807.jpg'),
(18, '1785117771.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill`
--

CREATE TABLE `skill` (
  `id_skill` int NOT NULL,
  `nama_skill` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `skill`
--

INSERT INTO `skill` (`id_skill`, `nama_skill`) VALUES
(6, 'coding'),
(7, 'PHP'),
(8, 'MYSQL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tools`
--

CREATE TABLE `tools` (
  `id_tools` int NOT NULL,
  `nama` varchar(256) NOT NULL,
  `icon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tools`
--

INSERT INTO `tools` (`id_tools`, `nama`, `icon`) VALUES
(1, 'VSCode', 'devicon-vscode-plain'),
(2, 'MYySQL', 'devicon-mysql-plain'),
(3, 'FIREBASE', 'devicon-firebase-plain'),
(4, 'CANVA', 'devicon-canva-plain'),
(5, 'ANDROID STUDIO', 'devicon-androidstudio-plain'),
(6, 'COMPOSER', 'devicon-composer-plain'),
(7, 'PHP', 'devicon-php-plain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `training`
--

CREATE TABLE `training` (
  `id_training` int NOT NULL,
  `nama_training` varchar(256) NOT NULL,
  `tahun_training` varchar(256) NOT NULL,
  `tempat_training` varchar(256) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `training`
--

INSERT INTO `training` (`id_training`, `nama_training`, `tahun_training`, `tempat_training`, `deskripsi`) VALUES
(6, 'UI/UX Framework', '2025', 'SMKN 3 BANJAR', 'Belajar membangun aplikasi web menggunakan framework Laravel dan database MySQL.\r\n'),
(7, 'ANDROID PROGRAMING', '2024', 'PT Lauwba Techno', 'mengikuti pelatihan pengembangan aplikasi Android menggunakan Java dan Android Studio.'),
(8, 'PHP Web Development', '2024', 'PT Lauwba Techno', 'mempelajari dasar hingga pembuatan website dinamis menggunakan PHP dan MySQL.'),
(10, 'PHP', '2025', 'PT Lauwba Techno', 'Membuat profile cv dengan CRUD'),
(11, 'masuk eskul kesenian', '2024', 'SMKN 3 BANJAR', 'mengikuti unjuk bakat sebelum masuk ke dalam eskul seni tari');

--
-- Indeks untuk tabel yang dibuang
--

--
-- Indeks untuk tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_education`);

--
-- Indeks untuk tabel `familiar`
--
ALTER TABLE `familiar`
  ADD PRIMARY KEY (`id_familiar`);

--
-- Indeks untuk tabel `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id_job`);

--
-- Indeks untuk tabel `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id_language`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id_mobile`);

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indeks untuk tabel `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id_reference`);

--
-- Indeks untuk tabel `sidebar_photo`
--
ALTER TABLE `sidebar_photo`
  ADD PRIMARY KEY (`id_sidebar_photo`);

--
-- Indeks untuk tabel `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Indeks untuk tabel `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id_tools`);

--
-- Indeks untuk tabel `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id_training`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `education`
--
ALTER TABLE `education`
  MODIFY `id_education` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `familiar`
--
ALTER TABLE `familiar`
  MODIFY `id_familiar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `language`
--
ALTER TABLE `language`
  MODIFY `id_language` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id_mobile` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `reference`
--
ALTER TABLE `reference`
  MODIFY `id_reference` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sidebar_photo`
--
ALTER TABLE `sidebar_photo`
  MODIFY `id_sidebar_photo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tools`
--
ALTER TABLE `tools`
  MODIFY `id_tools` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `training`
--
ALTER TABLE `training`
  MODIFY `id_training` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
