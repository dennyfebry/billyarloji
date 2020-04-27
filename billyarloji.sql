-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Apr 2020 pada 17.21
-- Versi server: 10.1.43-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bilk5464_billyarloji`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `name`, `username`, `password`, `last_login`, `role`) VALUES
(1, 'Super Admin', 'super.admin', 'cf18e01abec026e46d848b53d6084a6944c206ce', '2020-04-17 11:17:30', 1),
(2, 'Admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2020-04-16 00:04:05', 2),
(3, 'Denny', '1', '356a192b7913b04c54574d18c28d46e6395428ab', '2020-04-27 11:43:07', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_brand`
--

CREATE TABLE `tb_brand` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_brand`
--

INSERT INTO `tb_brand` (`id`, `category_id`, `brand`, `created_date`, `created_by`, `updated_date`, `updated_by`) VALUES
(1, 1, 'ALEXANDER', '2020-04-19 11:16:47', 3, '2020-04-19 11:22:57', 3),
(2, 2, 'BVLGARI', '2020-04-19 11:24:41', 3, '2020-04-19 11:24:41', 3),
(3, 2, 'CASIO', '2020-04-19 11:25:13', 3, '2020-04-19 11:25:13', 3),
(4, 2, 'ROLEX', '2020-04-19 11:25:27', 3, '2020-04-19 11:25:27', 3),
(5, 1, 'ROLEX', '2020-04-19 11:25:34', 3, '2020-04-19 11:25:34', 3),
(6, 2, 'ALEXANDER', '2020-04-19 11:25:44', 3, '2020-04-19 11:25:44', 3),
(7, 1, 'GLASHUTTES MUHLE', '2020-04-19 23:01:22', 3, '2020-04-19 23:01:22', 3),
(8, 1, 'CASIO', '2020-04-19 23:03:15', 3, '2020-04-19 23:03:15', 3),
(9, 2, 'ROBERGE', '2020-04-19 23:16:10', 3, '2020-04-19 23:16:10', 3),
(10, 1, 'GUESS', '2020-04-20 10:04:15', 3, '2020-04-20 10:04:15', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`id`, `category`, `created_date`, `created_by`, `updated_date`, `updated_by`) VALUES
(1, 'MEN', '2020-04-19 08:43:30', 3, '2020-04-19 09:08:05', 3),
(2, 'LADIES', '2020-04-19 09:09:52', 3, '2020-04-19 09:09:52', 3),
(3, 'COUPLE WATCH', '2020-04-19 09:09:57', 3, '2020-04-19 09:09:57', 3),
(4, 'JEWELRY', '2020-04-19 09:10:02', 3, '2020-04-19 09:10:02', 3),
(5, 'ACCESORIES', '2020-04-19 09:10:15', 3, '2020-04-19 09:10:15', 3),
(6, 'STRAP', '2020-04-19 09:10:21', 3, '2020-04-19 09:10:21', 3),
(7, 'WATCH BOX', '2020-04-19 09:10:33', 3, '2020-04-19 09:10:33', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_footer`
--

CREATE TABLE `tb_footer` (
  `id` int(11) NOT NULL,
  `mark` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `link` varchar(150) NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_footer`
--

INSERT INTO `tb_footer` (`id`, `mark`, `title`, `description`, `link`, `updated_date`, `updated_by`) VALUES
(1, 'about', 'About Us', '<p style=\"text-align: left;\">All Original , Branded , 2nd Hand Good Condition</p><ul><li style=\"text-align: left;\">Women\'s Watches @arlojiperempuan<br></li><li style=\"text-align: left;\">Lelang Arloji Original @lelangarlojikita (Coming Soon)</li></ul><p style=\"text-align: left;\"><a class=\"yLUwa\" href=\"https://l.instagram.com/?u=http%3A%2F%2Flinktr.ee%2Farlojilakilaki&e=ATOacX1UB91UmWFWkY6GJwQcP9BOqXROhFjFf59LvE_eDfkyB93kb0N-ziiTFfA4O9agwJXmrKNfxI2K&s=1\" page_id=\"profilePage\" rel=\"me nofollow noopener noreferrer\" target=\"_blank\" style=\"font-size: 1rem; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 600; font-stretch: inherit; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgba(var(--fe0,0,55,107),1); overflow: hidden; text-overflow: ellipsis; white-space: nowrap; background-color: rgb(250, 250, 250); display: inline !important;\">linktr.ee/arlojilakilaki</a></p>', '', '2020-04-27 14:36:15', 3),
(2, 'store', 'Our Store', 'Jakarta', '', '2020-04-27 13:49:14', 3),
(3, 'buy', 'How To Buy', '<ul><li style=\"text-align: left;\">Pilih jam yang kalian suka</li><li style=\"text-align: left;\">Klik linktree yang ada pada bio kita</li><li style=\"text-align: left;\">Pilih salah satu marketplace yang kalian mau</li><li style=\"text-align: left;\">Whatsapp (Chat lalu transfer langsung)</li><li style=\"text-align: left;\">Tokopedia (Melalui proses)</li></ul>', '', '2020-04-27 14:32:41', 3),
(4, 'social', 'Instagram', '@arlojilakilaki', 'https://www.instagram.com/', '2020-04-19 12:54:01', 3),
(5, 'social', 'Twitter', '@arlojilakilaki', 'https://twitter.com/', '2020-04-19 12:54:22', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `model` varchar(250) NOT NULL,
  `type` varchar(100) NOT NULL,
  `diameter` varchar(100) NOT NULL,
  `movement` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `condition_product` varchar(100) NOT NULL,
  `completeness` varchar(100) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `images` varchar(100) NOT NULL,
  `images_front` varchar(100) DEFAULT NULL,
  `images_side` varchar(100) DEFAULT NULL,
  `images_top` varchar(100) DEFAULT NULL,
  `images_detail` varchar(100) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`id`, `category_id`, `brand_id`, `name`, `model`, `type`, `diameter`, `movement`, `material`, `condition_product`, `completeness`, `description`, `price`, `discount`, `images`, `images_front`, `images_side`, `images_top`, `images_detail`, `url`, `created_date`, `created_by`, `updated_date`, `updated_by`, `status`) VALUES
(1, 1, 7, 'Glashuttes Muhle', '-', '-', '-', 'Automatic', 'Stainless Steel', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda.\r\nChronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 5500000, 0, '1.jpg', '1_front.jpg', '1_side.jpg', '1_top.jpg', '1_detail.jpg', 'https://www.instagram.com/p/B7lPoqNArdN/?utm_source=ig_web_button_share_sheet', '2020-04-04 13:28:16', 3, '2020-04-19 23:11:29', 3, 1),
(2, 1, 8, 'G-Shock GULFMASTER', '-', 'GN - 1000B - 1BDR', '55mm', 'Quartz', 'Resin / Rubber / Karet', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 3000000, 10, '2.jpg', '2_front.jpg', '2_side.jpg', '2_top.jpg', '2_detail.jpg', 'https://www.instagram.com/p/B7lPcE5AMiD/?utm_source=ig_web_button_share_sheet', '2020-04-19 23:11:38', 3, '2020-04-19 23:14:30', 3, 1),
(3, 2, 9, 'Geneve Automatic', '-', 'N°00424 - 10212100', '-', 'Automatic', 'Stainless Steel', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 10000000, 35, '3.jpg', '3_front.jpg', '3_side.jpg', '3_top.jpg', '3_detail.jpg', 'https://www.instagram.com/p/B7lPFQ4g2j2/?utm_source=ig_web_button_share_sheet', '2020-04-19 23:16:22', 3, '2020-04-19 23:18:08', 3, 1),
(4, 1, 10, 'Collectionn Ceramic', '-', '-', 'mm', 'Quartz', 'Ceramic', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 2500000, 5, '4.jpg', '4_front.jpg', '4_side.jpg', '4_top.jpg', '4_detail.jpg', 'https://www.instagram.com/p/B7kop7PAeym/?utm_source=ig_web_button_share_sheet', '2020-04-20 10:04:35', 3, '2020-04-20 11:42:12', 3, 2),
(10, 1, 10, 'Collection', '-', '-', 'mm', 'Automatic', 'Stainless Steel', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 5000000, 0, 'Collection_-7.jpg', 'Collection_-1.jpg', 'Collection_-2.jpg', 'Collection_-3.jpg', 'Collection_-8.jpg', 'https://www.instagram.com/p/B7kn9egAHMf/?utm_source=ig_web_button_share_sheet', '2020-04-20 13:29:23', 3, '2020-04-20 13:33:42', 3, 2),
(11, 1, 10, 'Collectionn Ceramic (copy)', '-', '-', 'mm', 'Quartz', 'Ceramic', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 2500000, 5, '4.jpg', '4_front.jpg', '4_side.jpg', '4_top.jpg', '4_detail.jpg', 'https://www.instagram.com/p/B7kop7PAeym/?utm_source=ig_web_button_share_sheet', '2020-04-20 10:04:35', 3, '2020-04-20 11:42:12', 3, 2),
(12, 1, 10, 'Collection (copy)', '-', '-', 'mm', 'Automatic', 'Stainless Steel', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 5000000, 0, 'Collection_-7.jpg', 'Collection_-1.jpg', 'Collection_-2.jpg', 'Collection_-3.jpg', 'Collection_-8.jpg', 'https://www.instagram.com/p/B7kn9egAHMf/?utm_source=ig_web_button_share_sheet', '2020-04-20 13:29:23', 3, '2020-04-20 13:33:42', 3, 2),
(13, 1, 10, 'Collectionn Ceramic (copy)', '-', '-', 'mm', 'Quartz', 'Ceramic', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 2500000, 5, '4.jpg', '4_front.jpg', '4_side.jpg', '4_top.jpg', '4_detail.jpg', 'https://www.instagram.com/p/B7kop7PAeym/?utm_source=ig_web_button_share_sheet', '2020-04-20 10:04:35', 3, '2020-04-20 11:42:12', 3, 2),
(14, 1, 10, 'Collection (copy)', '-', '-', 'mm', 'Automatic', 'Stainless Steel', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 5000000, 0, 'Collection_-7.jpg', 'Collection_-1.jpg', 'Collection_-2.jpg', 'Collection_-3.jpg', 'Collection_-8.jpg', 'https://www.instagram.com/p/B7kn9egAHMf/?utm_source=ig_web_button_share_sheet', '2020-04-20 13:29:23', 3, '2020-04-20 13:33:42', 3, 2),
(15, 1, 10, 'Collectionn Ceramic (copy)', '-', '-', 'mm', 'Quartz', 'Ceramic', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 2500000, 5, '4.jpg', '4_front.jpg', '4_side.jpg', '4_top.jpg', '4_detail.jpg', 'https://www.instagram.com/p/B7kop7PAeym/?utm_source=ig_web_button_share_sheet', '2020-04-20 10:04:35', 3, '2020-04-20 11:42:12', 3, 2),
(16, 1, 10, 'Collection (copy)', '-', '-', 'mm', 'Automatic', 'Stainless Steel', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 5000000, 0, 'Collection_-7.jpg', 'Collection_-1.jpg', 'Collection_-2.jpg', 'Collection_-3.jpg', 'Collection_-8.jpg', 'https://www.instagram.com/p/B7kn9egAHMf/?utm_source=ig_web_button_share_sheet', '2020-04-20 13:29:23', 3, '2020-04-20 13:33:42', 3, 2),
(17, 1, 10, 'Collectionn Ceramic (copy)', '-', '-', 'mm', 'Quartz', 'Ceramic', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 2500000, 5, '4.jpg', '4_front.jpg', '4_side.jpg', '4_top.jpg', '4_detail.jpg', 'https://www.instagram.com/p/B7kop7PAeym/?utm_source=ig_web_button_share_sheet', '2020-04-20 10:04:35', 3, '2020-04-20 11:42:12', 3, 2),
(18, 1, 10, 'Collection (copy)', '-', '-', 'mm', 'Automatic', 'Stainless Steel', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 5000000, 0, 'Collection_-7.jpg', 'Collection_-1.jpg', 'Collection_-2.jpg', 'Collection_-3.jpg', 'Collection_-8.jpg', 'https://www.instagram.com/p/B7kn9egAHMf/?utm_source=ig_web_button_share_sheet', '2020-04-20 13:29:23', 3, '2020-04-20 13:33:42', 3, 2),
(19, 1, 10, 'Collectionn Ceramic (copy)', '-', '-', 'mm', 'Quartz', 'Ceramic', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 2500000, 5, '4.jpg', '4_front.jpg', '4_side.jpg', '4_top.jpg', '4_detail.jpg', 'https://www.instagram.com/p/B7kop7PAeym/?utm_source=ig_web_button_share_sheet', '2020-04-20 10:04:35', 3, '2020-04-20 11:42:12', 3, 2),
(20, 1, 10, 'Collection (copy)', '-', '-', 'mm', 'Automatic', 'Stainless Steel', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 5000000, 0, 'Collection_-7.jpg', 'Collection_-1.jpg', 'Collection_-2.jpg', 'Collection_-3.jpg', 'Collection_-8.jpg', 'https://www.instagram.com/p/B7kn9egAHMf/?utm_source=ig_web_button_share_sheet', '2020-04-20 13:29:23', 3, '2020-04-20 13:33:42', 3, 2),
(21, 1, 10, 'Collectionn Ceramic (copy)', '-', '-', 'mm', 'Quartz', 'Ceramic', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 2500000, 5, '4.jpg', '4_front.jpg', '4_side.jpg', '4_top.jpg', '4_detail.jpg', 'https://www.instagram.com/p/B7kop7PAeym/?utm_source=ig_web_button_share_sheet', '2020-04-20 10:04:35', 3, '2020-04-20 11:42:12', 3, 2),
(22, 1, 10, 'Collection (copy)', '-', '-', 'mm', 'Automatic', 'Stainless Steel', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 5000000, 0, 'Collection_-7.jpg', 'Collection_-1.jpg', 'Collection_-2.jpg', 'Collection_-3.jpg', 'Collection_-8.jpg', 'https://www.instagram.com/p/B7kn9egAHMf/?utm_source=ig_web_button_share_sheet', '2020-04-20 13:29:23', 3, '2020-04-20 13:33:42', 3, 2),
(23, 1, 10, 'Collectionn Ceramic (copy)', '-', '-', 'mm', 'Quartz', 'Ceramic', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 2500000, 5, '4.jpg', '4_front.jpg', '4_side.jpg', '4_top.jpg', '4_detail.jpg', 'https://www.instagram.com/p/B7kop7PAeym/?utm_source=ig_web_button_share_sheet', '2020-04-20 10:04:35', 3, '2020-04-20 11:42:12', 3, 2),
(24, 1, 10, 'Collection (copy)', '-', '-', 'mm', 'Automatic', 'Stainless Steel', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 5000000, 0, 'Collection_-7.jpg', 'Collection_-1.jpg', 'Collection_-2.jpg', 'Collection_-3.jpg', 'Collection_-8.jpg', 'https://www.instagram.com/p/B7kn9egAHMf/?utm_source=ig_web_button_share_sheet', '2020-04-20 13:29:23', 3, '2020-04-20 13:33:42', 3, 2),
(25, 1, 10, 'Collectionn Ceramic (copy)', '-', '-', 'mm', 'Quartz', 'Ceramic', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 2500000, 5, '4.jpg', '4_front.jpg', '4_side.jpg', '4_top.jpg', '4_detail.jpg', 'https://www.instagram.com/p/B7kop7PAeym/?utm_source=ig_web_button_share_sheet', '2020-04-20 10:04:35', 3, '2020-04-20 11:42:12', 3, 2),
(26, 1, 10, 'Collection (copy)', '-', '-', 'mm', 'Automatic', 'Stainless Steel', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 5000000, 0, 'Collection_-7.jpg', 'Collection_-1.jpg', 'Collection_-2.jpg', 'Collection_-3.jpg', 'Collection_-8.jpg', 'https://www.instagram.com/p/B7kn9egAHMf/?utm_source=ig_web_button_share_sheet', '2020-04-20 13:29:23', 3, '2020-04-20 13:33:42', 3, 2),
(27, 1, 10, 'Collectionn Ceramic (copy)', '-', '-', 'mm', 'Quartz', 'Ceramic', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 2500000, 5, '4.jpg', '4_front.jpg', '4_side.jpg', '4_top.jpg', '4_detail.jpg', 'https://www.instagram.com/p/B7kop7PAeym/?utm_source=ig_web_button_share_sheet', '2020-04-20 10:04:35', 3, '2020-04-20 11:42:12', 3, 2),
(28, 1, 10, 'Collection (copy)', '-', '-', 'mm', 'Automatic', 'Stainless Steel', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 5000000, 0, 'Collection_-7.jpg', 'Collection_-1.jpg', 'Collection_-2.jpg', 'Collection_-3.jpg', 'Collection_-8.jpg', 'https://www.instagram.com/p/B7kn9egAHMf/?utm_source=ig_web_button_share_sheet', '2020-04-20 13:29:23', 3, '2020-04-20 13:33:42', 3, 2),
(29, 1, 10, 'Collectionn Ceramic (copy)', '-', '-', 'mm', 'Quartz', 'Ceramic', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 2500000, 5, '4.jpg', '4_front.jpg', '4_side.jpg', '4_top.jpg', '4_detail.jpg', 'https://www.instagram.com/p/B7kop7PAeym/?utm_source=ig_web_button_share_sheet', '2020-04-20 10:04:35', 3, '2020-04-20 11:42:12', 3, 2),
(30, 1, 10, 'Collection (copy)', '-', '-', 'mm', 'Automatic', 'Stainless Steel', '95% (2nd)', 'Watches Only', 'Koleksi jam tangan Orient yang dibuat untuk mengikuti gaya hidup aktif Anda, koleksi ORIENT Sports membawa bentuk dan fungsi bersama dengan desainnya yang menarik. Orient terus membangun gerakan mereka sendiri. Fabrikasi in-house adalah tanda kualitas yang baik karena semua kontrol QC yang diperlukan tetap dengan produsen dan setiap aspek konstruksi dilakukan secara internal. Orient Sport adalah perpaduan dari desain sporty yang elegan yang dipadu dengan movement jam khas orient yang presisi dan berkualitas tinggi. Cocok dipakai untuk segala kegiataan anda baik di dalam maupun diluar ruangan, membuat anda selalu tampil sempurna menemani gaya hidup aktif anda. Chronograph adalah alat hebat yang bisa bertahan sepanjang musim, dan gaya luar biasa membuatnya menjadi jam tangan yang akan anda banggakan. Ini adalah jam yang sangat tampan. Chronograph sub-dial berada di bagian atas dan bawah, dengan sub-dial detik kecil yang berjalan pada jam 9:00. Sub-dial atas mengukur detik ke akurasi 1/20 detik. Sub-dial pada jam 6:00 menampilkan kombinasi penghitung jam dan menit stopwatch. Fungsi stopwatch dapat mengukur hingga 12 jam dalam peningkatan 1/20 detik. Setelah 12 jam, itu akan berhenti secara otomatis. Pengukuran waktu split juga tersedia..', 5000000, 0, 'Collection_-7.jpg', 'Collection_-1.jpg', 'Collection_-2.jpg', 'Collection_-3.jpg', 'Collection_-8.jpg', 'https://www.instagram.com/p/B7kn9egAHMf/?utm_source=ig_web_button_share_sheet', '2020-04-20 13:29:23', 3, '2020-04-20 13:33:42', 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `images` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_slider`
--

INSERT INTO `tb_slider` (`id`, `title`, `description`, `images`, `updated_date`, `updated_by`, `status`) VALUES
(1, 'Slider 1', '<p>Slider 1</p>', '1.jpg', '2020-04-27 12:56:58', 3, 1),
(2, 'Slider 2', '<p>Slider 2<br></p>', '2.jpg', '2020-04-27 12:59:13', 3, 1),
(3, 'Slider 3', '<p>Slider 3<br></p>', '3.jpg', '2020-04-27 12:59:21', 3, 1),
(4, 'Slider 4', '<p>Slider 4</p>', 'Slider_4.jpg', '2020-04-27 13:37:21', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_testimoni`
--

CREATE TABLE `tb_testimoni` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_testimoni`
--

INSERT INTO `tb_testimoni` (`id`, `title`, `description`, `created_date`, `created_by`, `updated_date`, `updated_by`) VALUES
(15, 'Prasetyoadi', '<p><span style=\"font-size: 18px;\">Pengiriman cepat, packing rapi dan aman, kuliatas product oke original, mudah2an aweettt.</span><br></p>', '2020-04-20 00:57:21', 3, '2020-04-27 12:48:47', 3),
(16, 'Jimy', '<p><span style=\"font-size: 18px;\">Ini baru Pertama blanja di situs ini. Barang sampai sesuai deskripsi. Soal qualitas sesuai merk dan harga tentunya. Pilihan bank pembayarannya juga lengkap.</span><br></p>', '2020-04-20 00:57:43', 3, '2020-04-27 12:50:04', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_brand`
--
ALTER TABLE `tb_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_footer`
--
ALTER TABLE `tb_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_brand`
--
ALTER TABLE `tb_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_footer`
--
ALTER TABLE `tb_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
