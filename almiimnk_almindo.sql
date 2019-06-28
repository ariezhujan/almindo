-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2019 at 04:16 AM
-- Server version: 10.1.38-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `almiimnk_almindo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar_stock`
--

CREATE TABLE `barang_keluar_stock` (
  `po` varchar(50) NOT NULL,
  `nopol` varchar(50) NOT NULL,
  `surat_jalan` varchar(225) NOT NULL,
  `calories` varchar(20) NOT NULL,
  `size` varchar(50) NOT NULL,
  `tonase` int(50) NOT NULL,
  `tujuan` varchar(225) NOT NULL,
  `tanggal_keluar` varchar(50) NOT NULL,
  `id` bigint(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_keluar_stock`
--

INSERT INTO `barang_keluar_stock` (`po`, `nopol`, `surat_jalan`, `calories`, `size`, `tonase`, `tujuan`, `tanggal_keluar`, `id`) VALUES
('1234567898', 'H3577TR', '001-contoh-invoice-dalam-bahasa-inggris-template.jpg', 'High', 'Fine', 10000, 'Jl.Anumerta', 'Apr 30, 2019', 1),
('879898', 'HT4647TY', '011-contohinvoicepembayarandownpayment-contoh-invoice.jpg', 'High', 'Asalan', 50000, 'Pt.Samudera Pasifik', 'Apr 30, 2019', 2);

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk_stock`
--

CREATE TABLE `barang_masuk_stock` (
  `id` bigint(225) NOT NULL,
  `po` varchar(225) NOT NULL,
  `nopol` varchar(100) NOT NULL,
  `surat_jalan` varchar(225) NOT NULL,
  `calories` varchar(10) NOT NULL,
  `size` varchar(20) NOT NULL,
  `asalbarang` varchar(225) NOT NULL,
  `tonase` int(225) NOT NULL,
  `tanggal_masuk` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk_stock`
--

INSERT INTO `barang_masuk_stock` (`id`, `po`, `nopol`, `surat_jalan`, `calories`, `size`, `asalbarang`, `tonase`, `tanggal_masuk`) VALUES
(1, '1234567898', 'H3577TR', 'Contoh-Surat-Pesanan.jpg', 'High', 'Asalan', 'Tongkang', 50000, 'Apr 30, 2019'),
(2, '1898981', 'TR934983OY', 'purchase_preview_11.png', 'High', 'Fine', 'PT.Begundal Raya', 500000, 'Apr 02, 2019');

-- --------------------------------------------------------

--
-- Table structure for table `date_delivery`
--

CREATE TABLE `date_delivery` (
  `no_order` bigint(225) NOT NULL,
  `id` bigint(225) DEFAULT NULL,
  `po` varchar(225) DEFAULT NULL,
  `delivery_date` varchar(225) DEFAULT NULL,
  `qtypart` bigint(225) DEFAULT NULL,
  `delivery_status` tinyint(200) DEFAULT NULL,
  `paid_status` int(10) DEFAULT NULL,
  `date_request` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date_delivery`
--

INSERT INTO `date_delivery` (`no_order`, `id`, `po`, `delivery_date`, `qtypart`, `delivery_status`, `paid_status`, `date_request`) VALUES
(1, 7, '1234567898', 'Apr 05, 2019', 2000000, NULL, NULL, '2019-04-05 13:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `role` tinyint(2) NOT NULL,
  `id` bigint(225) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_owner` varchar(50) NOT NULL,
  `company_phone_number` bigint(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `no_pic` bigint(225) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `branch_bank` varchar(225) NOT NULL,
  `account_number` bigint(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `doj` datetime NOT NULL,
  `status` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`role`, `id`, `company_name`, `company_owner`, `company_phone_number`, `address`, `pic`, `no_pic`, `bank`, `branch_bank`, `account_number`, `email`, `password`, `doj`, `status`) VALUES
(1, 1, 'Almindo Jaya Abadi', 'Mack Jagger', 899098767009, 'Jl.MT haryono No.47 Semarang', 'Mack Jagger', 898767654542, 'Mandiri', 'Mt Haryono Semarang ', 987777655435, 'admin@admin.com', 'admin', '0000-00-00 00:00:00', 0),
(4, 6, 'Niopon Company', 'Fahujan', 248476383, 'Kawasan Industri Wijaya Kusuma Blok D No.340B Semarang', 'Aris Charge', 8973622376, 'Mandiri', 'Mandiri Ngalian Semarang', 983248132813, 'ariezhujan@ariezhujan.com', 'fahujan', '2019-03-11 10:10:55', 2),
(4, 7, 'User Company', 'User Owner', 2484784747, 'Jl.MT haryono No.47 Semarang', 'User Charge', 8967363736, 'DBS', 'Dbs Pekojan Semarang', 93839393, 'user@user.com', 'user', '2019-03-11 10:11:14', 2),
(4, 8, 'Nuclear', 'Roni', 893736373783, 'Kawasan Industri Wijaya Kusuma Blok D No.340B Semarang', 'Roni', 8987678678, 'Mandiri', 'Dbs Pekojan Semarang', 494848834, 'ernatriwahyuni15@gmail.com', 'nuclear', '2019-03-19 15:18:58', 2),
(4, 9, 'Profiter Company', 'Salmon Kutub', 2462715271623, 'Jl.kaba Raya Selatan Semarang', 'Salmon Atlantik', 738492323, 'BNI', 'Mt Haryono Semarang ', 970234232, 'salmon@salmon.com', 'P@ssword123', '2019-03-28 14:09:13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_goods`
--

CREATE TABLE `order_goods` (
  `no` bigint(225) NOT NULL,
  `id` bigint(225) DEFAULT NULL,
  `po` varchar(225) NOT NULL,
  `calories` varchar(10) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `tujuan` varchar(225) DEFAULT NULL,
  `qtygoods` int(225) DEFAULT NULL,
  `qtydelivery` smallint(25) DEFAULT NULL,
  `tanggal_order` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_goods`
--

INSERT INTO `order_goods` (`no`, `id`, `po`, `calories`, `size`, `tujuan`, `qtygoods`, `qtydelivery`, `tanggal_order`) VALUES
(1, 7, '1234567898', '1', '1', 'Jl.Mataram No.7 Semarang', 200000, 1, '2019-04-05 13:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(225) NOT NULL,
  `po` int(225) NOT NULL,
  `status` tinyint(10) NOT NULL,
  `date_payment` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `no` bigint(225) NOT NULL,
  `id` varchar(225) NOT NULL,
  `company_name` varchar(225) NOT NULL,
  `calories` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `pricing` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`no`, `id`, `company_name`, `calories`, `size`, `pricing`) VALUES
(1, '6', 'Aris Company', '1', '1', '50.000'),
(2, '6', 'Aris Company', '1', '2', '4,500'),
(3, '6', 'Aris Company', '1', '3', '3,500'),
(4, '6', 'Aris Company', '1', '4', '2,000'),
(5, '7', 'User Company', '1', '1', '3.000'),
(6, '7', 'User Company', '1', '2', '2,000'),
(7, '7', 'User Company', '1', '3', '1,000'),
(8, '7', 'User Company', '1', '4', '500'),
(9, '8', 'Nuclear', '1', '1', '3.000'),
(10, '8', 'Nuclear', '1', '2', '2,500'),
(11, '8', 'Nuclear', '2', '2', '1,000');

-- --------------------------------------------------------

--
-- Table structure for table `prospective_member`
--

CREATE TABLE `prospective_member` (
  `id` bigint(200) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_owner` varchar(50) NOT NULL,
  `company_phone_number` bigint(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `no_pic` bigint(225) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `account_number` bigint(100) NOT NULL,
  `branch_bank` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dor` datetime NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prospective_member`
--

INSERT INTO `prospective_member` (`id`, `company_name`, `company_owner`, `company_phone_number`, `address`, `pic`, `no_pic`, `bank`, `account_number`, `branch_bank`, `email`, `dor`, `status`) VALUES
(1, 'User Company', 'User Owner', 2484784747, 'Jl.MT haryono No.47 Semarang', 'User Charge', 8967363736, 'DBS', 93839393, 'Dbs Pekojan Semarang', 'user@user.com', '2019-03-11 10:05:59', 2),
(2, 'Aris Company', 'Aris Owner', 248476383, 'Kawasan Industri Wijaya Kusuma Blok D No.340B Semarang', 'Aris Charge', 8973622376, 'Mandiri', 983248132813, 'Mandiri Ngalian Semarang', 'ariezhujan@gmail.com', '2019-03-11 10:07:38', 2),
(3, 'Profiter Company', 'Salmon Kutub', 2462715271623, 'Jl.kaba Raya Selatan Semarang', 'Salmon Atlantik', 738492323, 'BNI', 970234232, 'Mt Haryono Semarang ', 'salmon@salmon.com', '2019-03-11 10:10:27', 2),
(4, 'Nuclear', 'Roni', 893736373783, 'Kawasan Industri Wijaya Kusuma Blok D No.340B Semarang', 'Roni', 8987678678, 'Mandiri', 494848834, 'Dbs Pekojan Semarang', 'ernatriwahyuni15@gmail.com', '2019-03-19 15:17:06', 2),
(5, 'Saka Production', 'Sakamura', 23423432, 'Jl.kaba Raya Selatan', 'Sakamura', 23423234, 'DBS', 234234234234, 'Dbs Pekojan Semarang', 'saka@saka.com', '2019-03-28 13:05:17', 3),
(6, '3464634634', 'Dodid Wijaya', 23636728, 'Jl.MT haryono No.47 Semarang', 'Dodid Wijaya', 789676778, 'Mandiri', 9765829830942, 'Mandiri Ngalian Semarang', 'dodid@dodid.com', '2019-04-03 21:07:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `receivable`
--

CREATE TABLE `receivable` (
  `tgl_kirim` varchar(225) DEFAULT NULL,
  `tgl_nota` varchar(225) DEFAULT NULL,
  `remarks` varchar(225) DEFAULT NULL,
  `debet` varchar(225) DEFAULT NULL,
  `kredit` varchar(225) DEFAULT NULL,
  `saldo` varchar(225) DEFAULT NULL,
  `bulan` varchar(50) DEFAULT NULL,
  `id` int(225) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `role` tinyint(5) NOT NULL,
  `nik` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(50) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `profile` int(10) DEFAULT NULL,
  `client` int(10) DEFAULT NULL,
  `vieworder` int(10) DEFAULT NULL,
  `statusorder` int(10) DEFAULT NULL,
  `payment` int(10) DEFAULT NULL,
  `receivable` int(10) DEFAULT NULL,
  `req_new_client` int(10) NOT NULL,
  `log_dec_client` int(10) NOT NULL,
  `barang_masuk_stockpile` int(10) NOT NULL,
  `barang_keluar_stockpile` int(10) NOT NULL,
  `pricing` int(10) NOT NULL,
  `history` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`role`, `nik`, `nama`, `username`, `divisi`, `email`, `password`, `profile`, `client`, `vieworder`, `statusorder`, `payment`, `receivable`, `req_new_client`, `log_dec_client`, `barang_masuk_stockpile`, `barang_keluar_stockpile`, `pricing`, `history`) VALUES
(2, '123456', 'Satriani', 'Satriani', 'Stock Pile', 'satriani@satriani.com', 'satriani', 1, 1, 1, NULL, 1, 1, 1, 1, 1, 1, 1, 1),
(2, '756454', 'pompom', 'pompom', 'Finance', 'pom@pom.com', 'pompom', 1, 1, 1, NULL, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `type_charcoal_calories`
--

CREATE TABLE `type_charcoal_calories` (
  `no` int(11) NOT NULL,
  `caloriesme` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_charcoal_calories`
--

INSERT INTO `type_charcoal_calories` (`no`, `caloriesme`) VALUES
(1, 'HIGH'),
(2, 'MEDIUM'),
(3, 'LOW');

-- --------------------------------------------------------

--
-- Table structure for table `type_charcoal_size`
--

CREATE TABLE `type_charcoal_size` (
  `no` int(11) NOT NULL,
  `sizing` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_charcoal_size`
--

INSERT INTO `type_charcoal_size` (`no`, `sizing`) VALUES
(1, 'FINE'),
(2, 'ROM'),
(3, 'ASALAN'),
(4, 'NUT'),
(5, 'LAMPIE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_keluar_stock`
--
ALTER TABLE `barang_keluar_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_masuk_stock`
--
ALTER TABLE `barang_masuk_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `date_delivery`
--
ALTER TABLE `date_delivery`
  ADD PRIMARY KEY (`no_order`),
  ADD KEY `id` (`id`),
  ADD KEY `po` (`po`),
  ADD KEY `date` (`delivery_date`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`) USING HASH,
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_pic_2` (`no_pic`),
  ADD UNIQUE KEY `account_number` (`account_number`),
  ADD UNIQUE KEY `no_pic_3` (`no_pic`),
  ADD UNIQUE KEY `company_name_2` (`company_name`),
  ADD KEY `company_name` (`company_name`),
  ADD KEY `company_owner` (`company_owner`),
  ADD KEY `no_pic` (`no_pic`),
  ADD KEY `bank` (`bank`),
  ADD KEY `password` (`password`),
  ADD KEY `role` (`role`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `order_goods`
--
ALTER TABLE `order_goods`
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `id` (`id`),
  ADD KEY `calories` (`calories`),
  ADD KEY `po` (`po`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD KEY `id` (`id`),
  ADD KEY `po` (`po`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `prospective_member`
--
ALTER TABLE `prospective_member`
  ADD PRIMARY KEY (`id`) USING HASH,
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_pic_2` (`no_pic`),
  ADD UNIQUE KEY `account_number` (`account_number`),
  ADD UNIQUE KEY `company_number` (`company_phone_number`),
  ADD UNIQUE KEY `no_pic_3` (`no_pic`),
  ADD UNIQUE KEY `company_name_2` (`company_name`),
  ADD KEY `company_name` (`company_name`),
  ADD KEY `company_owner` (`company_owner`),
  ADD KEY `no_pic` (`no_pic`),
  ADD KEY `phone_number` (`branch_bank`),
  ADD KEY `bank` (`bank`),
  ADD KEY `status` (`status`),
  ADD KEY `dor` (`dor`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `type_charcoal_calories`
--
ALTER TABLE `type_charcoal_calories`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `calories` (`caloriesme`);

--
-- Indexes for table `type_charcoal_size`
--
ALTER TABLE `type_charcoal_size`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `size` (`sizing`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_keluar_stock`
--
ALTER TABLE `barang_keluar_stock`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `barang_masuk_stock`
--
ALTER TABLE `barang_masuk_stock`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `date_delivery`
--
ALTER TABLE `date_delivery`
  MODIFY `no_order` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_goods`
--
ALTER TABLE `order_goods`
  MODIFY `no` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `no` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `prospective_member`
--
ALTER TABLE `prospective_member`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
