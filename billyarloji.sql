-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 06:20 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billyarloji`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
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
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `name`, `username`, `password`, `last_login`, `role`) VALUES
(1, 'Super Admin', 'super.admin', 'cf18e01abec026e46d848b53d6084a6944c206ce', '2020-04-17 11:17:30', 1),
(2, 'Admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2020-04-16 00:04:05', 2),
(3, 'Denny', '1', '356a192b7913b04c54574d18c28d46e6395428ab', '2020-04-19 21:07:51', 1),
(4, '2', '2', 'da4b9237bacccdf19c0760cab7aec4a8359010b0', '0000-00-00 00:00:00', 2),
(5, '3', '3', '77de68daecd823babbb58edb1c8e14d7106e83bb', '0000-00-00 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_brand`
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
-- Dumping data for table `tb_brand`
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
(9, 2, 'ROBERGE', '2020-04-19 23:16:10', 3, '2020-04-19 23:16:10', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
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
-- Dumping data for table `tb_category`
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
-- Table structure for table `tb_footer`
--

CREATE TABLE `tb_footer` (
  `id` int(11) NOT NULL,
  `mark` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_footer`
--

INSERT INTO `tb_footer` (`id`, `mark`, `title`, `description`, `updated_date`, `updated_by`) VALUES
(1, 'about', 'About Us', 'about1', '2020-04-19 12:29:44', 3),
(2, 'store', 'Our Store', 'store1', '2020-04-19 12:37:35', 3),
(3, 'buy', 'How To Buy', 'buy1', '2020-04-19 12:37:43', 3),
(4, 'social', 'Instagram', 'https://www.instagram.com/', '2020-04-19 12:54:01', 3),
(5, 'social', 'Twitter', 'https://twitter.com/', '2020-04-19 12:54:22', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
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
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `category_id`, `brand_id`, `name`, `model`, `type`, `diameter`, `movement`, `material`, `condition_product`, `completeness`, `price`, `discount`, `images`, `images_front`, `images_side`, `images_top`, `images_detail`, `url`, `created_date`, `created_by`, `updated_date`, `updated_by`, `status`) VALUES
(1, 1, 7, 'Glashuttes Muhle', '-', '-', '-', 'Automatic', 'Stainless Steel', '95% (2nd)', 'Watches Only', '5500000', '0', '1.jpg', '1_front.jpg', '1_side.jpg', '1_top.jpg', '1_detail.jpg', 'https://www.instagram.com/p/B7lPoqNArdN/?utm_source=ig_web_button_share_sheet', '2020-04-04 13:28:16', 3, '2020-04-19 23:11:29', 3, 1),
(2, 1, 8, 'G-Shock GULFMASTER', '-', 'GN - 1000B - 1BDR', '55mm', 'Quartz', 'Resin / Rubber / Karet', '95% (2nd)', 'Watches Only', '3000000', '0', '2.jpg', '2_front.jpg', '2_side.jpg', '2_top.jpg', '.jpg', 'https://www.instagram.com/p/B7lPcE5AMiD/?utm_source=ig_web_button_share_sheet', '2020-04-19 23:11:38', 3, '2020-04-19 23:14:30', 3, 1),
(3, 2, 9, 'Geneve Automatic', '-', 'N°00424 - 10212100', '-', 'Automatic', 'Stainless Steel', '95% (2nd)', 'Watches Only', '10000000', '0', '.jpg', '3_front.jpg', '3_side.jpg', '3_top.jpg', '3_detail.jpg', 'https://www.instagram.com/p/B7lPFQ4g2j2/?utm_source=ig_web_button_share_sheet', '2020-04-19 23:16:22', 3, '2020-04-19 23:18:08', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
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
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id`, `title`, `description`, `images`, `updated_date`, `updated_by`, `status`) VALUES
(1, 'Slider 1', '<p>Slider 1</p>', '1.jpg', '2020-04-04 13:09:03', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_testimoni`
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
-- Dumping data for table `tb_testimoni`
--

INSERT INTO `tb_testimoni` (`id`, `title`, `description`, `created_date`, `created_by`, `updated_date`, `updated_by`) VALUES
(1, 'test', '<p>Cobain <b>dulu </b><u style=\"\">deh</u>&nbsp;<i>pokoknya </i><span style=\"font-family: \" arial=\"\" black\";\"=\"\">okay<font color=\"#ffff00\"> </font></span><span style=\"font-family: \" comic=\"\" sans=\"\" ms\";=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 0);\"=\"\"><font color=\"#ffff00\">deh</font></span></p><hr><p><span style=\"font-family: \" comic=\"\" sans=\"\" ms\";=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 0);\"=\"\"><br></span></p>', '2020-04-03 09:58:46', 1, '2020-04-03 10:21:13', 1),
(2, 'test 2', '<p><u>coba</u> <b>aja</b> <i>deh</i></p>', '0000-00-00 00:00:00', 0, '2020-04-03 23:19:02', 1),
(3, 'Coba', '<p>lagi deh<span style=\"background-color: rgb(255, 255, 0);\"><font color=\"#0000ff\"> pokoknya</font></span></p>', '0000-00-00 00:00:00', 0, '2020-04-03 23:23:27', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_brand`
--
ALTER TABLE `tb_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_footer`
--
ALTER TABLE `tb_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_brand`
--
ALTER TABLE `tb_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_footer`
--
ALTER TABLE `tb_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
