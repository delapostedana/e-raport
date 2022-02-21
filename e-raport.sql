-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2022 at 05:53 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-raport`
--

-- --------------------------------------------------------

--
-- Table structure for table `eskuls`
--

CREATE TABLE `eskuls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eskuls`
--

INSERT INTO `eskuls` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Menari', NULL, NULL),
(2, 'Menggambar', NULL, NULL),
(3, 'Komputer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eskul_details`
--

CREATE TABLE `eskul_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `eskul_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eskul_details`
--

INSERT INTO `eskul_details` (`id`, `eskul_id`, `nama`, `created_at`, `updated_at`) VALUES
(2, 3, 'Pengetahuan Hardware', NULL, NULL),
(3, 1, 'Gerak', NULL, NULL),
(4, 1, 'Ritme', NULL, NULL),
(5, 1, 'Keluwesan', NULL, NULL),
(6, 2, 'Kreatifitas', NULL, NULL),
(7, 2, 'Komposisi', NULL, NULL),
(8, 2, 'Warna', NULL, NULL),
(9, 2, 'Bentuk', NULL, NULL),
(10, 2, 'Kebersihan', NULL, NULL),
(11, 2, 'Kerapihan', NULL, NULL),
(12, 3, 'Penyelesaian Aktivitas', NULL, NULL),
(13, 3, 'Keterampilan', NULL, NULL),
(14, 3, 'Edutainment', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurus`
--

INSERT INTO `gurus` (`id`, `nama`, `alamat`, `no_hp`, `kelas`, `created_at`, `updated_at`) VALUES
(1, 'Dana Dela Poste', 'Pamulang, Tangerang Selatan', '0987654', 123, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hafalans`
--

CREATE TABLE `hafalans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hafalans`
--

INSERT INTO `hafalans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Doa-doa Harian', NULL, NULL),
(2, 'Ayat-ayat Pilihan dan Juz Amma', NULL, NULL),
(3, 'Hadits-hadits Pilihan', NULL, NULL),
(4, 'Bacaan Shalat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hafalan_details`
--

CREATE TABLE `hafalan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hafalan_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hafalan_details`
--

INSERT INTO `hafalan_details` (`id`, `hafalan_id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 1, 'Doa Mau Makan', NULL, NULL),
(2, 1, 'Doa Sesudah Makan', NULL, NULL),
(3, 1, 'Doa Mau Tidur', NULL, NULL),
(4, 1, 'Doa Bangun Tidur', NULL, NULL),
(5, 1, 'Doa Untuk Kedua Orang Tua', NULL, NULL),
(6, 1, 'Doa Mau Belajar', NULL, NULL),
(7, 1, 'Doa Naik Kendaraan', NULL, NULL),
(8, 1, 'Doa Masuk Kelas', NULL, NULL),
(9, 1, 'Doa Keluar Kelas', NULL, NULL),
(10, 1, 'Doa Sebelum Wudhu', NULL, NULL),
(11, 1, 'Doa Sesudah Wudhu', NULL, NULL),
(12, 1, 'Doa Keluar Rumah', NULL, NULL),
(13, 1, 'Doa Masuk WC', NULL, NULL),
(14, 1, 'Doa Keluar WC', NULL, NULL),
(15, 1, 'Doa Keselamatan Dunia Akhirat', NULL, NULL),
(16, 2, 'Ayat Kursi', NULL, NULL),
(17, 2, 'Surat Al Fatihah', NULL, NULL),
(18, 2, 'Surat An Naas', NULL, NULL),
(19, 2, 'Surat Al Falaq', NULL, NULL),
(20, 2, 'Surat Al Ikhlas', NULL, NULL),
(21, 2, 'Surat Al Lahab', NULL, NULL),
(22, 2, 'Surat An Nashr', NULL, NULL),
(23, 2, 'Surat Al Kafirun', NULL, NULL),
(24, 2, 'Surat Al Kautsar', NULL, NULL),
(25, 2, 'Surat Al Maun', NULL, NULL),
(26, 2, 'Surat Al Quraisy', NULL, NULL),
(27, 2, 'Surat Al Fiil', NULL, NULL),
(28, 2, 'Surat Al Humazah', NULL, NULL),
(29, 2, 'Surat Al Asr', NULL, NULL),
(30, 2, 'Surat At Takasur', NULL, NULL),
(31, 3, 'Hadits Shalat', NULL, NULL),
(32, 3, 'Hadits Kebersihan', NULL, NULL),
(33, 3, 'Hadits Keutamaan Tersenyum', NULL, NULL),
(34, 3, 'Hadits Menuntut Ilmu', NULL, NULL),
(35, 3, 'Hadits Syurga Dibawah Telapak Kaki Ibu', NULL, NULL),
(36, 3, 'Hadits Kasih Sayang', NULL, NULL),
(37, 3, 'Hadits Jangan Marah', NULL, NULL),
(39, 4, 'Niat Shalat Dhuha', NULL, NULL),
(40, 4, 'Niat Shalat Lima Waktu', NULL, NULL),
(41, 4, 'Doa Iftitah', NULL, NULL),
(42, 4, 'Bacaan Ruku', NULL, NULL),
(43, 4, 'Bacaan I\'tidal', NULL, NULL),
(44, 4, 'Bacaan Sujud', NULL, NULL),
(45, 4, 'Bacaan Duduk Diantara Dua Sujud', NULL, NULL),
(46, 4, 'Bacaan Tasyahud Awal', NULL, NULL),
(47, 4, 'Bacaan Tasyahud Akhir', NULL, NULL),
(48, 4, 'Doa Shalat Dhuha', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, '1A', NULL, NULL),
(2, '1B', NULL, NULL),
(3, '1C', NULL, NULL),
(4, '1D', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2021_05_30_142723_create_eskuls_table', 1),
(22, '2021_05_30_143215_create_eskul_details_table', 1),
(23, '2021_05_31_113442_create_perkembangans_table', 1),
(24, '2021_05_31_113623_create_perkembangan_details_table', 1),
(25, '2021_05_31_114001_create_hafalans_table', 1),
(26, '2021_05_31_114036_create_hafalan_details_table', 1),
(27, '2021_07_06_073847_create_gurus_table', 1),
(28, '2021_07_10_164943_create_kelas_table', 1),
(32, '2021_07_20_051326_create_siswas_table', 2),
(36, '2021_10_09_135643_create_raports_table', 4),
(46, '2014_10_12_000000_create_users_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perkembangans`
--

CREATE TABLE `perkembangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perkembangans`
--

INSERT INTO `perkembangans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Perkembangan Nilai Agama dan Moral', NULL, NULL),
(2, 'Perkembangan Nilai Sosial Emosional', NULL, NULL),
(3, 'Perkembangan Nilai Bahasa', NULL, NULL),
(4, 'Perkembangan Nilai Kognitif', NULL, NULL),
(5, 'Perkembangan Nilai Fisik Motorik', NULL, NULL),
(6, 'Perkembangan Nilai Seni', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perkembangan_details`
--

CREATE TABLE `perkembangan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `perkembangan_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perkembangan_details`
--

INSERT INTO `perkembangan_details` (`id`, `perkembangan_id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mengenal Agama yang di Anut', NULL, NULL),
(2, 1, 'Mengerjakan Ibadah', NULL, NULL),
(3, 1, 'Berperilaku Jujur, Menolong, Sopan, Hormat, Sportif dsb', NULL, NULL),
(4, 1, 'Menjaga Kebersihan Diri dan Lingkungan', NULL, NULL),
(5, 1, 'Mengetahui Hari Besar Agama', NULL, NULL),
(6, 1, 'Menghormati (Toleransi) Agama Orang Lain', NULL, NULL),
(7, 2, 'Memperlihatkan Kemampuan Diri untuk Menyesuaikan dengan Situasi', NULL, NULL),
(8, 2, 'Memperlihatkan Kehati-hatian Kepada Orang yang Belum Dikenal (Menumbuhkan Kepercayaan pada Orang Dewasa yang Tepat)', NULL, NULL),
(9, 2, 'Mengenal Perasaan Sendiri dan Mengelolanya Secara Wajar (Mengendalikan Diri Secara Wajar)', NULL, NULL),
(10, 2, 'Tahu Akan Haknya', NULL, NULL),
(11, 2, 'Mentaati Aturan Kelas (Kegiatan, Aturan)', NULL, NULL),
(12, 2, 'Mengatur Diri Sendiri', NULL, NULL),
(13, 2, 'Bertanggung Jawab Atas Perilakunya Untuk Kebaikan Diri Sendiri', NULL, NULL),
(14, 2, 'Bermain dengan Teman Sebaya', NULL, NULL),
(15, 2, 'Mengetahui Perasaan Temannya dan Merespon Secara Wajar', NULL, NULL),
(16, 2, 'Berbagi dengan Orang Lain', NULL, NULL),
(17, 2, 'Menghargai Hak / Pendapat / Karya Orang Lain', NULL, NULL),
(18, 2, 'Menggunakan Cara yang Diterima Secara Sosial dalam Menyelesaikan Masalah (Menggunakan Fikiran untuk Menyelesaikan Masalah)', NULL, NULL),
(19, 2, 'Bersikap Kooperatif dengan Teman', NULL, NULL),
(20, 2, 'Menunjukan Sikap Toleran', NULL, NULL),
(21, 2, 'Mengekspresikan Emosi yang Sesuai dengan Kondisi yang Ada (Senang - Sedih - Antusias dsb)', NULL, NULL),
(22, 2, 'Mengenal Tata Krama dan Sopan Santun sesuai dengan Nilai Sosial Budaya Setempat', NULL, NULL),
(23, 3, 'Mengerti beberapa perintah secara bersamaan', NULL, NULL),
(24, 3, 'Mengulang kalimat yang lebih kompleks', NULL, NULL),
(25, 3, 'Memahami aturan dalam suatu permainan', NULL, NULL),
(26, 3, 'Senang dan menghargai bacaan', NULL, NULL),
(27, 3, 'Menjawab pertanyaan yang lebih kompleks', NULL, NULL),
(28, 3, 'Menyebutkan kelompok gambar yang memiliki bunyi yang sama', NULL, NULL),
(29, 3, 'Berkomunikasi secara lisan, memiliki perbendaharaan kata, serta mengenal simbol-simbol untuk persiapan membaca, menulis dan berhitung', NULL, NULL),
(30, 3, 'Menyusun kalimat sederhana dalam struktur lengkap (pokok kalimat-predikat-keterangan)', NULL, NULL),
(31, 3, 'Memiliki lebih banyak kata-kata untuk mengekspresikan ide pada orang lain', NULL, NULL),
(32, 3, 'Melanjutkan sebagian cerita/dongeng yang telah diperdengarkan', NULL, NULL),
(33, 3, 'Menunjukan pemahaman konsep-konsep dalam buku cerita', NULL, NULL),
(34, 3, 'Menyebutkan simbol-simbol huruf yang dikenal', NULL, NULL),
(35, 3, 'Mengenal suara huruf awal dari nama benda -benda yang ada disekitarnya', NULL, NULL),
(36, 3, 'Menyebutkan kelompok gambar yang memiliki bunyi/huruf awal yang sama', NULL, NULL),
(37, 3, 'Memahami hubungan antara bunyi dan bentuk huruf', NULL, NULL),
(38, 3, 'Membaca nama sendiri', NULL, NULL),
(39, 3, 'Menuliskan nama sendiri', NULL, NULL),
(40, 3, 'Memahami arti kata dalam cerita', NULL, NULL),
(41, 4, 'Menunjukan aktivitas yang bersifat eksploratif dan menyelidik (seperti: apa yang terjadi ketika air ditumpahkan)', NULL, NULL),
(42, 4, 'Memecahkan masalah sederhana dalam kehidupan sehari-hari dengan cara yang fleksibel dan diterima sosial', NULL, NULL),
(43, 4, 'Menerapkan pengetahuan atau pengalaman dalam konteks yang baru', NULL, NULL),
(44, 4, 'Menunjukan sikap kreatif dalam menyelesaikan masalah (ide, gagasan dilluar kebiasaan)', NULL, NULL),
(45, 4, 'Mengenal perbedaan berdasarkan ukuran: \"lebih dari\"; \"kurang dari\"; dan \"paling/ter\"', NULL, NULL),
(46, 4, 'Menunjukkan inisiatif dalam memilih tema permainan (seperti: \"ayo kita bermain pura-pura seperti burung\")', NULL, NULL),
(47, 4, 'Menyusun perencanaan kegiatan yang akan dilakukan', NULL, NULL),
(48, 4, 'Mengenal sebab-akibat tentang lingkungannya (angin bertiup menyebabkan daun bergerak, air dapat menyebabkan sesuatu menjadi basah)', NULL, NULL),
(49, 4, 'Mengklasifikasikan benda berdasarkan warna, bentuk, dan ukuran (3 variasi)', NULL, NULL),
(50, 4, 'Mengklasifikasikan benda yang lebih banyak kedalam kelompok yang sama atau kelompok yang sejenis, atau kelompok berpasangan yang lebih dari 2 variasi', NULL, NULL),
(51, 4, 'Mengenal pola ABCD-ABCD', NULL, NULL),
(52, 4, 'Mengurutkan benda berdasarkan ukuran dari paling kecil ke paling besar atau sebaliknya', NULL, NULL),
(53, 4, 'Menyebutkan lambang bilangan 1-10', NULL, NULL),
(54, 4, 'Menggunakan lambang bilangan untuk menghitung', NULL, NULL),
(55, 4, 'Mencocokkan bilangan dengan lambang bilangan', NULL, NULL),
(56, 4, 'Mengenal berbagai macam lambang huruf vokal dan konsonan', NULL, NULL),
(57, 4, 'Merepresentasikan berbagai macam benda dalam bentuk gambar atau tulisan (ada benda pensil yang diikuti tulisan dan gambar pensil)', NULL, NULL),
(58, 5, 'Melakukan gerakan tubuh secara terkoordinasi untuk melatih kelenturan, keseimbangan, dan kelincahan', NULL, NULL),
(59, 5, 'Melakukan koordinasi gerakan mata-kaki-tangan-kepala dalam menirukan tarian atau senam', NULL, NULL),
(60, 5, 'Melakukan permainan fisik dengan aturan', NULL, NULL),
(61, 5, 'Terampil menggunakan tangan kanan dan kiri', NULL, NULL),
(62, 5, 'Melakukan kegiatan kebersihan diri', NULL, NULL),
(63, 5, 'Menggambar sesuai gagasannya', NULL, NULL),
(64, 5, 'Meniru bentuk', NULL, NULL),
(65, 5, 'Melakukan eksplorasi dengan berbagai media dan kegiatan', NULL, NULL),
(66, 5, 'Menggunakan alat tulis dan alat makan dengan benar', NULL, NULL),
(67, 5, 'Menggunting sesuai dengan pola', NULL, NULL),
(68, 5, 'Menempel gambar dengan tepat', NULL, NULL),
(69, 5, 'Mengekspresikan diri melalui gerakan menggambar secara rinci', NULL, NULL),
(70, 5, 'Berat badan sesuai tingkat usia', NULL, NULL),
(71, 5, 'Tinggi badan sesuai standar usia', NULL, NULL),
(72, 5, 'Berat badan sesuai dengan standar tinggi badan', NULL, NULL),
(73, 5, 'Lingkar kepala sesuai dengan tingkat usia', NULL, NULL),
(74, 5, 'Menutup hidung dan mulut (misal, ketika batuk dan bersin)', NULL, NULL),
(75, 5, 'Membersihkan dan membereskan tempat bermain', NULL, NULL),
(76, 5, 'Mengetahui situasi yang membahayakan diri', NULL, NULL),
(77, 5, 'Memahami tata cara menyebrang', NULL, NULL),
(78, 5, 'Mengenal kebiasaan buruk bagi kesehatan (rokok, minuman keras)', NULL, NULL),
(79, 6, 'Anak bersenandung atau bernyanyi sambil mengerjakan sesuatu', NULL, NULL),
(80, 6, 'Memainkan alat musik/instrumen/benda bersama teman', NULL, NULL),
(81, 6, 'Menyanyikan lagu dengan sikap yang benar', NULL, NULL),
(82, 6, 'Menyanyikan lagu dengan sikap yang benar', NULL, NULL),
(83, 6, 'Menggunakan berbagai macam alat musik tradisional maupun alat musik lain untk menirukan suatu irama atau lagu tertentu', NULL, NULL),
(84, 6, 'Bermain drama sederhana', NULL, NULL),
(85, 6, 'Menggambar berbagai bentuk yang beragam', NULL, NULL),
(86, 6, 'Melukis dengan berbagai cara dan objek', NULL, NULL),
(87, 6, 'Membuat karya seperti bentuk sesungguhnya dengan berbagai bahan (kertas, plastisin, balok dll)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `raports`
--

CREATE TABLE `raports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guru_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `raportable_id` int(11) NOT NULL,
  `raportable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `raports`
--

INSERT INTO `raports` (`id`, `guru_id`, `siswa_id`, `raportable_id`, `raportable_type`, `nilai`, `created_at`, `updated_at`) VALUES
(679, 1, 3, 3, 'App\\EskulDetail', 'D', '2021-10-29 20:00:10', '2021-10-29 20:00:10'),
(680, 1, 3, 4, 'App\\EskulDetail', 'D', '2021-10-29 20:00:10', '2021-10-29 20:00:10'),
(681, 1, 3, 5, 'App\\EskulDetail', 'D', '2021-10-29 20:00:10', '2021-10-29 20:00:10'),
(682, 1, 3, 6, 'App\\EskulDetail', 'D', '2021-10-29 20:00:10', '2021-10-29 20:00:10'),
(683, 1, 3, 7, 'App\\EskulDetail', 'D', '2021-10-29 20:00:10', '2021-10-29 20:00:10'),
(684, 1, 3, 8, 'App\\EskulDetail', 'D', '2021-10-29 20:00:10', '2021-10-29 20:00:10'),
(685, 1, 3, 9, 'App\\EskulDetail', 'D', '2021-10-29 20:00:10', '2021-10-29 20:00:10'),
(686, 1, 3, 10, 'App\\EskulDetail', 'D', '2021-10-29 20:00:11', '2021-10-29 20:00:11'),
(687, 1, 3, 11, 'App\\EskulDetail', 'D', '2021-10-29 20:00:11', '2021-10-29 20:00:11'),
(688, 1, 3, 2, 'App\\EskulDetail', 'D', '2021-10-29 20:00:11', '2021-10-29 20:00:11'),
(689, 1, 3, 12, 'App\\EskulDetail', 'D', '2021-10-29 20:00:11', '2021-10-29 20:00:11'),
(690, 1, 3, 13, 'App\\EskulDetail', 'D', '2021-10-29 20:00:11', '2021-10-29 20:00:11'),
(691, 1, 3, 14, 'App\\EskulDetail', 'D', '2021-10-29 20:00:11', '2021-10-29 20:00:11'),
(692, 1, 3, 1, 'App\\Hafalan_detail', 'Belum Hafal', '2021-10-29 20:00:11', '2021-10-29 20:00:11'),
(693, 1, 3, 2, 'App\\Hafalan_detail', 'Belum Hafal', '2021-10-29 20:00:11', '2021-10-29 20:00:11'),
(694, 1, 3, 3, 'App\\Hafalan_detail', 'Belum Hafal', '2021-10-29 20:00:11', '2021-10-29 20:00:11'),
(695, 1, 3, 4, 'App\\Hafalan_detail', 'Belum Hafal', '2021-10-29 20:00:11', '2021-10-29 20:00:11'),
(696, 1, 3, 5, 'App\\Hafalan_detail', 'Belum Hafal', '2021-10-29 20:00:11', '2021-10-29 20:00:11'),
(697, 1, 3, 6, 'App\\Hafalan_detail', 'Belum Hafal', '2021-10-29 20:00:11', '2021-10-29 20:00:11'),
(698, 1, 3, 7, 'App\\Hafalan_detail', 'Belum Hafal', '2021-10-29 20:00:11', '2021-10-29 20:00:11'),
(699, 1, 3, 8, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:00:12', '2021-10-29 20:00:12'),
(700, 1, 3, 9, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:00:12', '2021-10-29 20:00:12'),
(701, 1, 3, 10, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:00:12', '2021-10-29 20:00:12'),
(702, 1, 3, 11, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:00:12', '2021-10-29 20:00:12'),
(703, 1, 3, 12, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:00:12', '2021-10-29 20:00:12'),
(704, 1, 3, 13, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:00:12', '2021-10-29 20:00:12'),
(705, 1, 3, 14, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:00:12', '2021-10-29 20:00:12'),
(706, 1, 3, 15, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:00:12', '2021-10-29 20:00:12'),
(707, 1, 3, 16, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:12', '2021-10-29 20:00:12'),
(708, 1, 3, 17, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:12', '2021-10-29 20:00:12'),
(709, 1, 3, 18, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:12', '2021-10-29 20:00:12'),
(710, 1, 3, 19, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:13', '2021-10-29 20:00:13'),
(711, 1, 3, 20, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:13', '2021-10-29 20:00:13'),
(712, 1, 3, 21, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:13', '2021-10-29 20:00:13'),
(713, 1, 3, 22, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:13', '2021-10-29 20:00:13'),
(714, 1, 3, 23, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:13', '2021-10-29 20:00:13'),
(715, 1, 3, 24, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:13', '2021-10-29 20:00:13'),
(716, 1, 3, 25, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:13', '2021-10-29 20:00:13'),
(717, 1, 3, 26, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:13', '2021-10-29 20:00:13'),
(718, 1, 3, 27, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:13', '2021-10-29 20:00:13'),
(719, 1, 3, 28, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:13', '2021-10-29 20:00:13'),
(720, 1, 3, 29, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:13', '2021-10-29 20:00:13'),
(721, 1, 3, 30, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:13', '2021-10-29 20:00:13'),
(722, 1, 3, 31, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:13', '2021-10-29 20:00:13'),
(723, 1, 3, 32, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:13', '2021-10-29 20:00:13'),
(724, 1, 3, 33, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:13', '2021-10-29 20:00:13'),
(725, 1, 3, 34, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(726, 1, 3, 35, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(727, 1, 3, 36, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(728, 1, 3, 37, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(729, 1, 3, 39, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(730, 1, 3, 40, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(731, 1, 3, 41, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(732, 1, 3, 42, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(733, 1, 3, 43, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(734, 1, 3, 44, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(735, 1, 3, 45, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(736, 1, 3, 46, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(737, 1, 3, 47, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(738, 1, 3, 48, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(739, 1, 3, 1, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(740, 1, 3, 2, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(741, 1, 3, 3, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(742, 1, 3, 4, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(743, 1, 3, 5, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:14', '2021-10-29 20:00:14'),
(744, 1, 3, 6, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(745, 1, 3, 7, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(746, 1, 3, 8, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(747, 1, 3, 9, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(748, 1, 3, 10, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(749, 1, 3, 11, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(750, 1, 3, 12, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(751, 1, 3, 13, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(752, 1, 3, 14, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(753, 1, 3, 15, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(754, 1, 3, 16, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(755, 1, 3, 17, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(756, 1, 3, 18, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(757, 1, 3, 19, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(758, 1, 3, 20, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(759, 1, 3, 21, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(760, 1, 3, 22, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(761, 1, 3, 23, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(762, 1, 3, 24, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(763, 1, 3, 25, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(764, 1, 3, 26, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(765, 1, 3, 27, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(766, 1, 3, 28, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:00:15', '2021-10-29 20:00:15'),
(767, 1, 3, 29, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(768, 1, 3, 30, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(769, 1, 3, 31, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(770, 1, 3, 32, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(771, 1, 3, 33, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(772, 1, 3, 34, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(773, 1, 3, 35, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(774, 1, 3, 36, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(775, 1, 3, 37, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(776, 1, 3, 38, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(777, 1, 3, 39, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(778, 1, 3, 40, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(779, 1, 3, 41, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(780, 1, 3, 42, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(781, 1, 3, 43, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(782, 1, 3, 44, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(783, 1, 3, 45, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(784, 1, 3, 46, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(785, 1, 3, 47, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(786, 1, 3, 48, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(787, 1, 3, 49, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(788, 1, 3, 50, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(789, 1, 3, 51, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(790, 1, 3, 52, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:00:16', '2021-10-29 20:00:16'),
(791, 1, 3, 53, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(792, 1, 3, 54, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(793, 1, 3, 55, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(794, 1, 3, 56, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(795, 1, 3, 57, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(796, 1, 3, 58, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(797, 1, 3, 59, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(798, 1, 3, 60, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(799, 1, 3, 61, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(800, 1, 3, 62, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(801, 1, 3, 63, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(802, 1, 3, 64, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(803, 1, 3, 65, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(804, 1, 3, 66, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(805, 1, 3, 67, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(806, 1, 3, 68, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(807, 1, 3, 69, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(808, 1, 3, 70, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(809, 1, 3, 71, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(810, 1, 3, 72, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:17', '2021-10-29 20:00:17'),
(811, 1, 3, 73, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:00:18', '2021-10-29 20:00:18'),
(812, 1, 3, 74, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:18', '2021-10-29 20:00:18'),
(813, 1, 3, 75, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:18', '2021-10-29 20:00:18'),
(814, 1, 3, 76, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:00:18', '2021-10-29 20:00:18'),
(815, 1, 3, 77, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:18', '2021-10-29 20:00:18'),
(816, 1, 3, 78, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:18', '2021-10-29 20:00:18'),
(817, 1, 3, 79, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:00:18', '2021-10-29 20:00:18'),
(818, 1, 3, 80, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:18', '2021-10-29 20:00:18'),
(819, 1, 3, 81, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:18', '2021-10-29 20:00:18'),
(820, 1, 3, 82, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:00:18', '2021-10-29 20:00:18'),
(821, 1, 3, 83, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:18', '2021-10-29 20:00:18'),
(822, 1, 3, 84, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:18', '2021-10-29 20:00:18'),
(823, 1, 3, 85, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:00:18', '2021-10-29 20:00:18'),
(824, 1, 3, 86, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:00:18', '2021-10-29 20:00:18'),
(825, 1, 3, 87, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:00:18', '2021-10-29 20:00:18'),
(826, 1, 9, 3, 'App\\EskulDetail', 'A', '2021-10-29 20:33:28', '2021-10-29 20:33:28'),
(827, 1, 9, 4, 'App\\EskulDetail', 'A', '2021-10-29 20:33:28', '2021-10-29 20:33:28'),
(828, 1, 9, 5, 'App\\EskulDetail', 'A', '2021-10-29 20:33:28', '2021-10-29 20:33:28'),
(829, 1, 9, 6, 'App\\EskulDetail', 'A', '2021-10-29 20:33:28', '2021-10-29 20:33:28'),
(830, 1, 9, 7, 'App\\EskulDetail', 'A', '2021-10-29 20:33:28', '2021-10-29 20:33:28'),
(831, 1, 9, 8, 'App\\EskulDetail', 'A', '2021-10-29 20:33:28', '2021-10-29 20:33:28'),
(832, 1, 9, 9, 'App\\EskulDetail', 'A', '2021-10-29 20:33:28', '2021-10-29 20:33:28'),
(833, 1, 9, 10, 'App\\EskulDetail', 'A', '2021-10-29 20:33:28', '2021-10-29 20:33:28'),
(834, 1, 9, 11, 'App\\EskulDetail', 'A', '2021-10-29 20:33:28', '2021-10-29 20:33:28'),
(835, 1, 9, 2, 'App\\EskulDetail', 'B', '2021-10-29 20:33:29', '2021-10-29 20:33:29'),
(836, 1, 9, 12, 'App\\EskulDetail', 'B', '2021-10-29 20:33:29', '2021-10-29 20:33:29'),
(837, 1, 9, 13, 'App\\EskulDetail', 'B', '2021-10-29 20:33:29', '2021-10-29 20:33:29'),
(838, 1, 9, 14, 'App\\EskulDetail', 'B', '2021-10-29 20:33:29', '2021-10-29 20:33:29'),
(839, 1, 9, 1, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:29', '2021-10-29 20:33:29'),
(840, 1, 9, 2, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:29', '2021-10-29 20:33:29'),
(841, 1, 9, 3, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:29', '2021-10-29 20:33:29'),
(842, 1, 9, 4, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:29', '2021-10-29 20:33:29'),
(843, 1, 9, 5, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:29', '2021-10-29 20:33:29'),
(844, 1, 9, 6, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:29', '2021-10-29 20:33:29'),
(845, 1, 9, 7, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:29', '2021-10-29 20:33:29'),
(846, 1, 9, 8, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:29', '2021-10-29 20:33:29'),
(847, 1, 9, 9, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:29', '2021-10-29 20:33:29'),
(848, 1, 9, 10, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(849, 1, 9, 11, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(850, 1, 9, 12, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(851, 1, 9, 13, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(852, 1, 9, 14, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(853, 1, 9, 15, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(854, 1, 9, 16, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(855, 1, 9, 17, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(856, 1, 9, 18, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(857, 1, 9, 19, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(858, 1, 9, 20, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(859, 1, 9, 21, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(860, 1, 9, 22, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(861, 1, 9, 23, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(862, 1, 9, 24, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(863, 1, 9, 25, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(864, 1, 9, 26, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(865, 1, 9, 27, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(866, 1, 9, 28, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(867, 1, 9, 29, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(868, 1, 9, 30, 'App\\Hafalan_detail', 'Mulai Hafal', '2021-10-29 20:33:30', '2021-10-29 20:33:30'),
(869, 1, 9, 31, 'App\\Hafalan_detail', 'Belum Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(870, 1, 9, 32, 'App\\Hafalan_detail', 'Belum Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(871, 1, 9, 33, 'App\\Hafalan_detail', 'Belum Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(872, 1, 9, 34, 'App\\Hafalan_detail', 'Belum Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(873, 1, 9, 35, 'App\\Hafalan_detail', 'Belum Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(874, 1, 9, 36, 'App\\Hafalan_detail', 'Belum Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(875, 1, 9, 37, 'App\\Hafalan_detail', 'Belum Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(876, 1, 9, 39, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(877, 1, 9, 40, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(878, 1, 9, 41, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(879, 1, 9, 42, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(880, 1, 9, 43, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(881, 1, 9, 44, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(882, 1, 9, 45, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(883, 1, 9, 46, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(884, 1, 9, 47, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(885, 1, 9, 48, 'App\\Hafalan_detail', 'Sudah Hafal', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(886, 1, 9, 1, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(887, 1, 9, 2, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(888, 1, 9, 3, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(889, 1, 9, 4, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:31', '2021-10-29 20:33:31'),
(890, 1, 9, 5, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(891, 1, 9, 6, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(892, 1, 9, 7, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(893, 1, 9, 8, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(894, 1, 9, 9, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(895, 1, 9, 10, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(896, 1, 9, 11, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(897, 1, 9, 12, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(898, 1, 9, 13, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(899, 1, 9, 14, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(900, 1, 9, 15, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(901, 1, 9, 16, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(902, 1, 9, 17, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(903, 1, 9, 18, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(904, 1, 9, 19, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(905, 1, 9, 20, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(906, 1, 9, 21, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(907, 1, 9, 22, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(908, 1, 9, 23, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(909, 1, 9, 24, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(910, 1, 9, 25, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(911, 1, 9, 26, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(912, 1, 9, 27, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:32', '2021-10-29 20:33:32'),
(913, 1, 9, 28, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(914, 1, 9, 29, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(915, 1, 9, 30, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(916, 1, 9, 31, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(917, 1, 9, 32, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(918, 1, 9, 33, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(919, 1, 9, 34, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(920, 1, 9, 35, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(921, 1, 9, 36, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(922, 1, 9, 37, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(923, 1, 9, 38, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(924, 1, 9, 39, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(925, 1, 9, 40, 'App\\Perkembangan_detail', 'BSB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(926, 1, 9, 41, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(927, 1, 9, 42, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(928, 1, 9, 43, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(929, 1, 9, 44, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(930, 1, 9, 45, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(931, 1, 9, 46, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(932, 1, 9, 47, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(933, 1, 9, 48, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:33', '2021-10-29 20:33:33'),
(934, 1, 9, 49, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:34', '2021-10-29 20:33:34'),
(935, 1, 9, 50, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:34', '2021-10-29 20:33:34'),
(936, 1, 9, 51, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:34', '2021-10-29 20:33:34'),
(937, 1, 9, 52, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:34', '2021-10-29 20:33:34'),
(938, 1, 9, 53, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:34', '2021-10-29 20:33:34'),
(939, 1, 9, 54, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:34', '2021-10-29 20:33:34'),
(940, 1, 9, 55, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:34', '2021-10-29 20:33:34'),
(941, 1, 9, 56, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:34', '2021-10-29 20:33:34'),
(942, 1, 9, 57, 'App\\Perkembangan_detail', 'BB', '2021-10-29 20:33:34', '2021-10-29 20:33:34'),
(943, 1, 9, 58, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:34', '2021-10-29 20:33:34'),
(944, 1, 9, 59, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:34', '2021-10-29 20:33:34'),
(945, 1, 9, 60, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:34', '2021-10-29 20:33:34'),
(946, 1, 9, 61, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:34', '2021-10-29 20:33:34'),
(947, 1, 9, 62, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:35', '2021-10-29 20:33:35'),
(948, 1, 9, 63, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:35', '2021-10-29 20:33:35'),
(949, 1, 9, 64, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:35', '2021-10-29 20:33:35'),
(950, 1, 9, 65, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:35', '2021-10-29 20:33:35'),
(951, 1, 9, 66, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:35', '2021-10-29 20:33:35'),
(952, 1, 9, 67, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:35', '2021-10-29 20:33:35'),
(953, 1, 9, 68, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:35', '2021-10-29 20:33:35'),
(954, 1, 9, 69, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:35', '2021-10-29 20:33:35'),
(955, 1, 9, 70, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:35', '2021-10-29 20:33:35'),
(956, 1, 9, 71, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:35', '2021-10-29 20:33:35'),
(957, 1, 9, 72, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:35', '2021-10-29 20:33:35'),
(958, 1, 9, 73, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:36', '2021-10-29 20:33:36'),
(959, 1, 9, 74, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:36', '2021-10-29 20:33:36'),
(960, 1, 9, 75, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:36', '2021-10-29 20:33:36'),
(961, 1, 9, 76, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:36', '2021-10-29 20:33:36'),
(962, 1, 9, 77, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:36', '2021-10-29 20:33:36'),
(963, 1, 9, 78, 'App\\Perkembangan_detail', 'MB', '2021-10-29 20:33:36', '2021-10-29 20:33:36'),
(964, 1, 9, 79, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:36', '2021-10-29 20:33:36'),
(965, 1, 9, 80, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:36', '2021-10-29 20:33:36'),
(966, 1, 9, 81, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:36', '2021-10-29 20:33:36'),
(967, 1, 9, 82, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:36', '2021-10-29 20:33:36'),
(968, 1, 9, 83, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:36', '2021-10-29 20:33:36'),
(969, 1, 9, 84, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:36', '2021-10-29 20:33:36'),
(970, 1, 9, 85, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:36', '2021-10-29 20:33:36'),
(971, 1, 9, 86, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:36', '2021-10-29 20:33:36'),
(972, 1, 9, 87, 'App\\Perkembangan_detail', 'BSH', '2021-10-29 20:33:36', '2021-10-29 20:33:36'),
(973, 1, 6, 3, 'App\\EskulDetail', 'D', '2022-02-11 09:57:37', '2022-02-11 09:57:37'),
(974, 1, 6, 4, 'App\\EskulDetail', 'D', '2022-02-11 09:57:37', '2022-02-11 09:57:37'),
(975, 1, 6, 5, 'App\\EskulDetail', 'D', '2022-02-11 09:57:38', '2022-02-11 09:57:38'),
(976, 1, 6, 6, 'App\\EskulDetail', 'D', '2022-02-11 09:57:38', '2022-02-11 09:57:38'),
(977, 1, 6, 7, 'App\\EskulDetail', 'D', '2022-02-11 09:57:38', '2022-02-11 09:57:38'),
(978, 1, 6, 8, 'App\\EskulDetail', 'D', '2022-02-11 09:57:38', '2022-02-11 09:57:38'),
(979, 1, 6, 9, 'App\\EskulDetail', 'D', '2022-02-11 09:57:38', '2022-02-11 09:57:38'),
(980, 1, 6, 10, 'App\\EskulDetail', 'D', '2022-02-11 09:57:38', '2022-02-11 09:57:38'),
(981, 1, 6, 11, 'App\\EskulDetail', 'D', '2022-02-11 09:57:38', '2022-02-11 09:57:38'),
(982, 1, 6, 2, 'App\\EskulDetail', 'C', '2022-02-11 09:57:38', '2022-02-11 09:57:38'),
(983, 1, 6, 12, 'App\\EskulDetail', 'C', '2022-02-11 09:57:38', '2022-02-11 09:57:38'),
(984, 1, 6, 13, 'App\\EskulDetail', 'C', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(985, 1, 6, 14, 'App\\EskulDetail', 'C', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(986, 1, 6, 1, 'App\\Hafalan_detail', 'Belum Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(987, 1, 6, 2, 'App\\Hafalan_detail', 'Belum Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(988, 1, 6, 3, 'App\\Hafalan_detail', 'Mulai Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(989, 1, 6, 4, 'App\\Hafalan_detail', 'Mulai Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(990, 1, 6, 5, 'App\\Hafalan_detail', 'Mulai Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(991, 1, 6, 6, 'App\\Hafalan_detail', 'Mulai Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(992, 1, 6, 7, 'App\\Hafalan_detail', 'Mulai Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(993, 1, 6, 8, 'App\\Hafalan_detail', 'Mulai Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(994, 1, 6, 9, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(995, 1, 6, 10, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(996, 1, 6, 11, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(997, 1, 6, 12, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(998, 1, 6, 13, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(999, 1, 6, 14, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(1000, 1, 6, 15, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(1001, 1, 6, 16, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(1002, 1, 6, 17, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:39', '2022-02-11 09:57:39'),
(1003, 1, 6, 18, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1004, 1, 6, 19, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1005, 1, 6, 20, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1006, 1, 6, 21, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1007, 1, 6, 22, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1008, 1, 6, 23, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1009, 1, 6, 24, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1010, 1, 6, 25, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1011, 1, 6, 26, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1012, 1, 6, 27, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1013, 1, 6, 28, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1014, 1, 6, 29, 'App\\Hafalan_detail', 'Mulai Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1015, 1, 6, 30, 'App\\Hafalan_detail', 'Mulai Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1016, 1, 6, 31, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1017, 1, 6, 32, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1018, 1, 6, 33, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1019, 1, 6, 34, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1020, 1, 6, 35, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1021, 1, 6, 36, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:40', '2022-02-11 09:57:40'),
(1022, 1, 6, 37, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1023, 1, 6, 39, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1024, 1, 6, 40, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1025, 1, 6, 41, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1026, 1, 6, 42, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1027, 1, 6, 43, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1028, 1, 6, 44, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1029, 1, 6, 45, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1030, 1, 6, 46, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1031, 1, 6, 47, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1032, 1, 6, 48, 'App\\Hafalan_detail', 'Sudah Hafal', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1033, 1, 6, 1, 'App\\Perkembangan_detail', 'BB', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1034, 1, 6, 2, 'App\\Perkembangan_detail', 'BB', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1035, 1, 6, 3, 'App\\Perkembangan_detail', 'BB', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1036, 1, 6, 4, 'App\\Perkembangan_detail', 'BB', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1037, 1, 6, 5, 'App\\Perkembangan_detail', 'BB', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1038, 1, 6, 6, 'App\\Perkembangan_detail', 'BB', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1039, 1, 6, 7, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1040, 1, 6, 8, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1041, 1, 6, 9, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1042, 1, 6, 10, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:41', '2022-02-11 09:57:41'),
(1043, 1, 6, 11, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1044, 1, 6, 12, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1045, 1, 6, 13, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1046, 1, 6, 14, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1047, 1, 6, 15, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1048, 1, 6, 16, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1049, 1, 6, 17, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1050, 1, 6, 18, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1051, 1, 6, 19, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1052, 1, 6, 20, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1053, 1, 6, 21, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1054, 1, 6, 22, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1055, 1, 6, 23, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1056, 1, 6, 24, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1057, 1, 6, 25, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1058, 1, 6, 26, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1059, 1, 6, 27, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1060, 1, 6, 28, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:42', '2022-02-11 09:57:42'),
(1061, 1, 6, 29, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1062, 1, 6, 30, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1063, 1, 6, 31, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1064, 1, 6, 32, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1065, 1, 6, 33, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1066, 1, 6, 34, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1067, 1, 6, 35, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1068, 1, 6, 36, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1069, 1, 6, 37, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1070, 1, 6, 38, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1071, 1, 6, 39, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1072, 1, 6, 40, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1073, 1, 6, 41, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1074, 1, 6, 42, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1075, 1, 6, 43, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1076, 1, 6, 44, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1077, 1, 6, 45, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1078, 1, 6, 46, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:43', '2022-02-11 09:57:43'),
(1079, 1, 6, 47, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:44', '2022-02-11 09:57:44'),
(1080, 1, 6, 48, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:44', '2022-02-11 09:57:44'),
(1081, 1, 6, 49, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:44', '2022-02-11 09:57:44'),
(1082, 1, 6, 50, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:44', '2022-02-11 09:57:44'),
(1083, 1, 6, 51, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:44', '2022-02-11 09:57:44'),
(1084, 1, 6, 52, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:44', '2022-02-11 09:57:44'),
(1085, 1, 6, 53, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:44', '2022-02-11 09:57:44'),
(1086, 1, 6, 54, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:44', '2022-02-11 09:57:44'),
(1087, 1, 6, 55, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:44', '2022-02-11 09:57:44'),
(1088, 1, 6, 56, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:44', '2022-02-11 09:57:44'),
(1089, 1, 6, 57, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:44', '2022-02-11 09:57:44'),
(1090, 1, 6, 58, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:44', '2022-02-11 09:57:44'),
(1091, 1, 6, 59, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1092, 1, 6, 60, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1093, 1, 6, 61, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1094, 1, 6, 62, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1095, 1, 6, 63, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1096, 1, 6, 64, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1097, 1, 6, 65, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1098, 1, 6, 66, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1099, 1, 6, 67, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1100, 1, 6, 68, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1101, 1, 6, 69, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1102, 1, 6, 70, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1103, 1, 6, 71, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1104, 1, 6, 72, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1105, 1, 6, 73, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1106, 1, 6, 74, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1107, 1, 6, 75, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:45', '2022-02-11 09:57:45'),
(1108, 1, 6, 76, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:46', '2022-02-11 09:57:46'),
(1109, 1, 6, 77, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:46', '2022-02-11 09:57:46'),
(1110, 1, 6, 78, 'App\\Perkembangan_detail', 'BSB', '2022-02-11 09:57:46', '2022-02-11 09:57:46'),
(1111, 1, 6, 79, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:46', '2022-02-11 09:57:46'),
(1112, 1, 6, 80, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:46', '2022-02-11 09:57:46'),
(1113, 1, 6, 81, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:46', '2022-02-11 09:57:46'),
(1114, 1, 6, 82, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:46', '2022-02-11 09:57:46'),
(1115, 1, 6, 83, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:46', '2022-02-11 09:57:46'),
(1116, 1, 6, 84, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:46', '2022-02-11 09:57:46'),
(1117, 1, 6, 85, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:46', '2022-02-11 09:57:46'),
(1118, 1, 6, 86, 'App\\Perkembangan_detail', 'BSH', '2022-02-11 09:57:46', '2022-02-11 09:57:46'),
(1119, 1, 6, 87, 'App\\Perkembangan_detail', 'MB', '2022-02-11 09:57:46', '2022-02-11 09:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_induk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `asal_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lingkar_kepala` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `nomor_induk`, `password`, `nama`, `alamat`, `nama_ayah`, `nama_ibu`, `no_hp`, `kelas_id`, `tempat_lahir`, `tanggal_lahir`, `asal_sekolah`, `lingkar_kepala`, `role_id`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'A20220212001', '$2y$10$BHlBWCV52I0J8.DhmzoWxe.GPYiGlUysW5LggnDeC5na.ZlBjsLj6', 'Admin', 'Ciputat', NULL, NULL, '08141234567', 0, NULL, NULL, NULL, 'admin@gmail.com', 1, '1644655120.jpg', NULL, '2022-02-11 22:42:49', '2022-02-11 22:42:49'),
(2, 'admin2@gmail.com', 'A20220212002', '$2y$10$S4qKKtSQTgiWrT5GMgyVkuu3vA1WRdFTI5nmHSoGCCUVKWdrGI0U6', 'Admin2', 'Pamulang', NULL, NULL, '10923', 0, NULL, NULL, NULL, NULL, 1, 'default.png', NULL, NULL, NULL),
(3, 'guru@gmail.com', 'G20220212003', '$2y$10$of7l4t.yoPvF/7jx9BATUep3jVSuZMQEtagjGD2h/Lq6ODrlgamNe', 'Ahmad Dahlan Setiawan', 'kebon jeruk', NULL, NULL, '08979800', 1, NULL, NULL, NULL, NULL, 2, 'default.png', NULL, NULL, NULL),
(4, 'guru2@gmail.com', 'G20220212004', '$2y$10$1iy68EZyebmdEcnY.Vh6jOWJ6Vlwt1vRR5f0OHLdkHFT2Q5CA6SMe', 'Muhammad Syarifuddin', 'Kuta Bali', NULL, NULL, '09876666', 2, NULL, NULL, NULL, NULL, 2, 'default.png', NULL, NULL, NULL),
(5, 'siswa@gmail.com', 'S20220212005', '$2y$10$X.Zx0SxNXYa50gw7C6Ro5uTLEsw0ZCmnrGp9R/2yLF0SYlwXh9Uy6', 'Meysha Munaroh', 'qwerty', 'qwqw', 'qwqw', '1212', 1, 'Tangerang', '2022-02-12', 'Daarul Hikmah', '66', 3, '1644655193.jpg', NULL, NULL, NULL),
(6, 'siswa2@gmail.com', 'S20220212006', '$2y$10$W35cCL11N8QDHpdxvN3aw.3d1cDFIcbmSYSeQbMQAEuGGK8KmZt3C', 'Olan', 'pulogadung', 'Bapak', 'Mamah', '34567', 2, 'Cilacap', '2022-02-12', 'Paud Din', '11', 3, 'default.png', NULL, NULL, NULL),
(7, 'siswa3@gmail.com', 'S20220213007', '$2y$10$EUEyx/YDFDHdWCrb3avBXeuGxO3z5CKe7yDsWahrWsP84gvhVSFM6', 'Muhammad Iqbal', 'Tangerang', 'Ayah', 'Ibu', '081212121', 3, 'Balaraja', '2020-12-12', 'SDN Balaraja', '12', 3, 'default.png', NULL, NULL, NULL),
(8, 'siswa4@gmail.com', 'S20220213008', '$2y$10$FZhACMGTKmNxFKRjgV7i6epsIyuyJnNIU.0lh5lsIazuEesfXkYHO', 'Budi Sentosa', '12', '12', '12', '1212', 2, 'Ciater', '2021-12-12', 'MI', '13', 3, 'default.png', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eskuls`
--
ALTER TABLE `eskuls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eskul_details`
--
ALTER TABLE `eskul_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hafalans`
--
ALTER TABLE `hafalans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hafalan_details`
--
ALTER TABLE `hafalan_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `perkembangans`
--
ALTER TABLE `perkembangans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perkembangan_details`
--
ALTER TABLE `perkembangan_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raports`
--
ALTER TABLE `raports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eskuls`
--
ALTER TABLE `eskuls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eskul_details`
--
ALTER TABLE `eskul_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hafalans`
--
ALTER TABLE `hafalans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hafalan_details`
--
ALTER TABLE `hafalan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `perkembangans`
--
ALTER TABLE `perkembangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `perkembangan_details`
--
ALTER TABLE `perkembangan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `raports`
--
ALTER TABLE `raports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1120;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
