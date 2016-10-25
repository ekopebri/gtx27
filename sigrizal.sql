-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2016 at 04:10 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigrizal`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_06_152054_create_info_table', 2),
('2016_10_06_152120_create_kecamatan_table', 2),
('2016_10_06_152140_create_kategori_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_info`
--

CREATE TABLE `tb_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `jalan` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `kordinat_x` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `kordinat_y` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_info`
--

INSERT INTO `tb_info` (`id`, `nama`, `jalan`, `kordinat_x`, `kordinat_y`, `id_kecamatan`, `id_kategori`) VALUES
(1, 'Aisyah Massage', 'Jl. Siradj Salman', '-0.491490', '117.134277', 4, 2),
(2, 'AKPER FARMASI', 'Jl. Wahab Syahrani Samarinda', '-0.457626', '117.139585', 4, 3),
(3, 'AKPER MUHAMMADIYAH SAMARINDA', 'Jl. Juanda', '-0.474743', '117.138540', 4, 3),
(4, 'Kantor Perwakilan Bank Indonesia Provinsi Kaltim', 'Jl. Gadjah Mada', '-0.501267', '117.138380', 4, 2),
(5, 'BANK MANDIRI CAB. MULAWARMAN', 'Jl. Mulawarman', '-0.504122', '117.154090', 3, 7),
(6, 'Bank Mandiri juanda', 'Jl. Juanda', '-0.503748', '117.155795', 3, 7),
(7, 'Cafe Gamelan', 'Jl. Gamelan', '-0.486487', '117.149312', 4, 1),
(8, 'CAFE JAWSIKA', 'Jl. Pramuka', '-0.462805', '117.152800', 1, 1),
(9, 'Happy Puppy', 'Jl. Pangeran Antasari', '-0.492824', '117.127213', 4, 8),
(10, 'Harry Food''s', 'Jl. Pahlawan', '-0.485314', '117.148301', 4, 6),
(11, 'Islamic Center', 'Jl. Slamet Riyadi', '-0.5018664', '117.118612', 4, 9),
(12, 'Juffe cafe', 'Jl. Juanda', '-0.481051', '117.134852', 4, 1),
(13, 'Kantor PLN', 'Jl. Gadjah Mada', '-0.500537', '117.137551', 4, 2),
(14, 'Kantor POS', 'Jl. Gadjah Mada', '-0.502179', '117.143270', 3, 2),
(15, 'KPU KOTA SAMARINDA', 'Jl. Juanda No.18', '-0.483744', '117.129884', 4, 2),
(16, 'LPJK', 'Jl. Sirajd Salman', '-0.492315', '117.134452', 4, 2),
(17, 'MAN 1 SAMARINDA', 'Jl. Pangeran Suryanata', '-0.479257', '117.125531', 4, 5),
(18, 'BPJS', 'Jl. Juanda', '-0.481182', '117.134841', 4, 2),
(19, 'NAV Karaoke', 'Jl. R.E Martadinata', '-0.499922', '117.132592', 4, 8),
(20, 'Perpusda Lantai II & III ', 'Jl. Juanda', '-0.472949', '117.137874', 4, 10),
(21, 'Plasa Mulia Lantai GF', 'Jl. Bhayangkara', '-0.490885', '117.145795', 4, 11),
(22, 'Plaza Telkom', 'Jl. A.W. Long', '-0.501679', '117.143365', 3, 4),
(23, 'Puskesmas Remaja', 'Jl. Remaja', '-0.476975', '117.165423', 5, 2),
(24, 'Wifi.id Suryanata', 'Jl. Pangeran Suryanata', '-0.461725', '117.114614', 4, 4),
(25, 'SAMARINDA CENTRAL PLAZA LT.1', 'Jl. Pulau Irian', '-0.503435', '117.154807', 3, 11),
(26, 'SAMARINDA SQUARE ', 'Jl. M Yamin', '-0.470004', '117.147312', 4, 11),
(27, 'SMA 3', 'Jl. Juanda', '-0.485230', '117.128540', 4, 5),
(28, 'SMAN 2 SAMARINDA', 'Jl. Kemakmuran No.27', '-0.480195', '117.162961', 5, 5),
(29, 'SMK TI AIRLANGGA SAMARINDA', 'Jl. Pahlawan', '-0.485170', '117.148304', 4, 5),
(30, 'SMP IT CORDOVA SAMARINDA', 'Jl. Kadrie Oening', '-0.468309', '117.129932', 4, 5),
(31, 'SMPN 1 SAMARINDA', 'Jl. Kadrie Oening', '-0.467351', '117.129940', 4, 5),
(32, 'SMPN 4 SAMARINDA', 'Jl. Juanda', '-0.484176', '117.129037', 4, 5),
(33, 'SMPN 5 SAMARINDA ', 'Jl. Juanda', '-0.485327', '117.129354', 4, 5),
(34, 'STMIK Widya Cipta Dharma - Gedung Utama Perpustakaan', 'Jl. M Yamin', '-0.463846', '117.149673', 4, 3),
(35, 'Wifi.id Sambutan', 'Jl. Otto Iskandar Dinata', '-0.507345', '117.165990', 2, 4),
(36, 'Wifi.id Sempaja', 'Jl. Wahid Hasyim II', '-0.440452', '117.153789', 1, 4),
(37, 'SMPN 2 SAMARINDA', 'Jl. KH Ahmad Dahlan No.1', '-0.496094', '117.153882', 3, 5),
(38, 'UNMUL FISIPOL', 'Jl. Tanah Grogot', '-0.467496', '117.153853', 1, 3),
(39, 'UNMUL HUKUM SAMARINDA ', 'Jl. Sambaliung', '-0.468827', '117.159531', 1, 3),
(40, 'FKIP UNMUL PAHLAWAN ', 'Jl. Harmonika', '-0.488901', '117.147337', 4, 3),
(41, 'Giant Alaya', 'Jl. Bukit Alaya', '-0.503585', '117.155015', 3, 12),
(42, 'Pura Jagat Hita Karana ', 'Jl. Sentosa', '-0.476560', '117.167201', 5, 9),
(43, 'Taman Budaya', 'Jl. Kemakmuran', '-0.478700', '117.163521', 5, 13),
(44, 'TELKOM DAHLIA', 'Jl. Dahlia', '-0.494560', '117.147968', 4, 4),
(45, 'Hotel Harmoni 2 ', 'Jl. A.W. Long', '-0.499995', '117.143768', 3, 14),
(46, 'Kantor Catatan Sipil', 'Jl. Milono SMR', '-0.496727', '117.142975', 4, 2),
(47, 'BAPPEDA', 'Jl. Dahlia Samarinda', '-0.493914', '117.146600', 4, 2),
(48, 'Telkom Anggur', 'Jl. DR. Wahidin Sudiro Husodo', '-0.489256', '117.141363', 3, 4),
(49, 'Perpustakaan Unmul Lt 2', 'Jl. Kuaro Kampus', '-0.468318', '117.155197', 4, 10),
(50, 'hjhjkjhkj', 'JL.Siradj Salman', '-0.491490', '117.134277', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `nama_kategori`, `keterangan`) VALUES
(1, 'Cafe', ''),
(2, 'Kantor', ''),
(3, 'Universitas', ''),
(4, 'Corner', ''),
(5, 'Sekolah', ''),
(6, 'Warung Makan', ''),
(7, 'Bank', ''),
(8, 'Karaoke', ''),
(9, 'Tempat Ibadah', ''),
(10, 'Perpustakaan', ''),
(11, 'Mall', ''),
(12, 'Supermarket', ''),
(13, 'Gedung', ''),
(14, 'Hotel', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kecamatan` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id`, `nama_kecamatan`) VALUES
(1, 'Samarinda Utara'),
(2, 'Samarinda Ilir'),
(3, 'Samarinda Kota'),
(4, 'Samarinda Ulu'),
(5, 'Sungai Pinang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `email`, `password`) VALUES
(1, 'username', 'username@mail.com', '$2y$10$uFHAe7hRkHCwv8.aaolIr.jsCstfbskIvWuPUA5HCUNLbA5w8RMYq'),
(2, 'Eko Pebrisulistiyo', 'eko.pebrisulistiyo@gmail.com', '$2y$10$uFHAe7hRkHCwv8.aaolIr.jsCstfbskIvWuPUA5HCUNLbA5w8RMYq');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'username', 'username@mail.com', '$2y$10$aLqimu4dJ1bu12eMxuy/ae5ZO2UHlEDrUque.qtxd/BtYUgP02d1O', 'VeRivovt3DH92rjnJebYAAmhH7KUCbqcn0vmuCtFgbwKNwY41u65LooqCIJT', '2016-09-19 08:29:15', '2016-10-23 06:46:08'),
(2, 'Eko Pebrisulistiyo', 'eko.pebrisulistiyo@gmail.com', '$2y$10$JpCmvoQ6qzjK9wzIBBG34uRz5SwozQPLKU5SrxQGBACRUL6JzReii', 'xuy8wwQUKmPtLnc1TV009qvXX2VdQT9THnhMitkrgpVkEeJ1RohpXkQFvbAH', '2016-10-23 03:35:14', '2016-10-23 04:26:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
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
-- AUTO_INCREMENT for table `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
