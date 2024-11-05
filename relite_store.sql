-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 07:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relite_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Nama` varchar(100) NOT NULL,
  `Username` varchar(12) NOT NULL,
  `Password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Nama`, `Username`, `Password`) VALUES
('Muhammad Rifqi', 'muhmmdrifq1', 'muhmmdrifq1');

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE `app` (
  `id_app` varchar(100) NOT NULL,
  `nama_app` varchar(100) NOT NULL,
  `dev_app` varchar(100) NOT NULL,
  `icon_app` varchar(100) NOT NULL,
  `bg_app` varchar(100) NOT NULL,
  `route` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_login`
--

CREATE TABLE `data_login` (
  `id_game` int(100) NOT NULL,
  `nama_game` varchar(100) NOT NULL,
  `data_login` varchar(100) NOT NULL,
  `placeholder` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_login`
--

INSERT INTO `data_login` (`id_game`, `nama_game`, `data_login`, `placeholder`) VALUES
(1, 'Mobile Legends', 'ID', 'Masukkan ID'),
(1, 'Mobile Legends', 'SERVER', 'Masukkan Server'),
(2, 'Free Fire', 'ID', 'Masukkan ID'),
(3, 'Genshin Impact', 'ID', 'Masukkan ID'),
(3, 'Genshin Impact', 'SERVER', 'Masukkan Server (Asia/Europe/America/TW)'),
(4, 'Metal Slug Awakening', 'ID', 'Masukkan ID'),
(5, 'Call Of Duty', 'ID', 'Masukkan Player ID'),
(6, 'Arena Of Valor', 'ID', 'Masukkan ID'),
(7, 'Valorant', 'ID', 'Masukkan Riot ID'),
(8, 'Undawn', 'ID', 'Masukkan ID'),
(9, 'Wildrift', 'ID', 'Masukkan Tag ID'),
(10, 'Honkai Impact 3', 'ID', 'Masukkan ID'),
(11, 'Honkai Star Rail', 'ID', 'Masukkan ID'),
(11, 'Honkai Star Rail', 'SERVER', 'Masukkan Server (Asia/Europe/America/TW)'),
(12, 'Fifa Mobile', 'ID', 'Masukkan ID');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id_game` int(100) NOT NULL,
  `nama_game` varchar(100) DEFAULT NULL,
  `dev_game` varchar(100) DEFAULT NULL,
  `icon_game` varchar(100) DEFAULT NULL,
  `bg_game` varchar(100) NOT NULL,
  `route` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id_game`, `nama_game`, `dev_game`, `icon_game`, `bg_game`, `route`) VALUES
(1, 'Mobile Legends', 'Moonton', 'mlbb.jpg', 'bg-mlbb.jpg', 'mlbb'),
(2, 'Free Fire', 'Garena', 'freefire.jpg', 'bg-ff.jpg', 'freefire'),
(3, 'Genshin Impact', 'Hoyoverse', 'genshin.jpg', 'bg-genshin.jpg', 'genshin'),
(4, 'Metal Slug Awakening', 'VNG Games', 'metalslug.jpg', 'bg-metalslug.jpg', 'metalslug'),
(5, 'Call Of Duty', 'Garena', 'codm.jpg', 'bg-codm.jpg', 'codm'),
(6, 'Arena Of Valor', 'Garena', 'aov.jpg', 'bg-aov.jpg', 'aov'),
(7, 'Valorant', 'Riot Games', 'valorant.jpg', 'bg-valorant.jpg', 'valorant'),
(8, 'Undawn', 'Garena', 'undawn.jpg', 'bg-undawn.jpg', 'undawn'),
(9, 'Wildrift', 'Riot Games', 'wildrift.jpg', 'bg-wildrift.jpg', 'wildrift'),
(10, 'Honkai Impact 3', 'Hoyoverse', 'hi3.jpg', 'bg-hi3.jpg', 'hi3'),
(11, 'Honkai Star Rail', 'Hoyoverse', 'hsr.jpg', 'bg-hsr.jpg', 'hsr'),
(12, 'Fifa Mobile', 'Electronic Arts', 'fifa.jpg', 'bg-fifa.jpg', 'fifa');

-- --------------------------------------------------------

--
-- Table structure for table `gamestore`
--

CREATE TABLE `gamestore` (
  `nama_game` varchar(100) NOT NULL,
  `id_akun` varchar(100) NOT NULL,
  `deskripsi_akun` varchar(100) NOT NULL,
  `harga_akun` decimal(10,2) NOT NULL,
  `foto_akun` varchar(100) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id_game` int(100) NOT NULL,
  `nama_game` varchar(100) NOT NULL,
  `id_item` int(100) NOT NULL,
  `nama_item` varchar(100) NOT NULL,
  `harga_awal` decimal(10,2) NOT NULL,
  `promo` decimal(10,2) NOT NULL,
  `harga_final` decimal(10,2) NOT NULL DEFAULT 0.00,
  `tipe_item` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id_game`, `nama_game`, `id_item`, `nama_item`, `harga_awal`, `promo`, `harga_final`, `tipe_item`) VALUES
(1, 'Mobile Legends', 100001, '1x Weekly Diamond Pass', 26000.00, 2.00, 25480.00, 'Membership'),
(1, 'Mobile Legends', 100002, '2x Weekly Diamond Pass', 50000.00, 1.00, 49500.00, 'Membership'),
(1, 'Mobile Legends', 100003, '3x Weekly Diamond Pass', 72000.00, 0.00, 72000.00, 'Membership'),
(1, 'Mobile Legends', 100004, '11 Diamond', 3000.00, 0.00, 3000.00, 'Diamond'),
(1, 'Mobile Legends', 100005, '56 Diamond', 15000.00, 0.00, 15000.00, 'Diamond'),
(1, 'Mobile Legends', 100008, '85 Diamond', 23000.00, 0.00, 23000.00, 'Diamond'),
(1, 'Mobile Legends', 100009, '110 Diamond', 30000.00, 0.00, 30000.00, 'Diamond'),
(1, 'Mobile Legends', 100010, '170 Diamond', 46000.00, 0.00, 46000.00, 'Diamond'),
(1, 'Mobile Legends', 100011, '240 Diamond', 65000.00, 0.00, 65000.00, 'Diamond'),
(1, 'Mobile Legends', 100012, '277 Diamond', 75000.00, 1.25, 74062.50, 'Diamond'),
(1, 'Mobile Legends', 100013, '296 Diamond', 80000.00, 0.00, 80000.00, 'Diamond'),
(1, 'Mobile Legends', 100014, '384 Diamond', 104000.00, 0.00, 104000.00, 'Diamond'),
(1, 'Mobile Legends', 100015, '408 Diamond', 110000.00, 0.00, 110000.00, 'Diamond'),
(1, 'Mobile Legends', 100016, '518 Diamond', 140000.00, 1.10, 138460.00, 'Diamond'),
(1, 'Mobile Legends', 100017, '568 Diamond', 150000.00, 0.00, 150000.00, 'Diamond'),
(1, 'Mobile Legends', 100018, '716 Diamond', 190000.00, 0.00, 190000.00, 'Diamond'),
(1, 'Mobile Legends', 100019, '1048 Diamond', 280000.00, 0.00, 280000.00, 'Diamond'),
(1, 'Mobile Legends', 100020, '1136 Diamond', 300000.00, 0.00, 300000.00, 'Diamond'),
(2, 'Free Fire', 200001, 'Level Up Pass', 14000.00, 0.00, 14000.00, 'Membership'),
(2, 'Free Fire', 200002, 'BP Card', 43000.00, 1.70, 42269.00, 'Membership'),
(2, 'Free Fire', 200003, 'Member Mingguan', 29000.00, 2.00, 28420.00, 'Membership'),
(2, 'Free Fire', 200004, 'Member Bulanan', 85000.00, 0.00, 85000.00, 'Membership'),
(2, 'Free Fire', 200005, '5 Diamond', 900.00, 0.00, 900.00, 'Diamond'),
(2, 'Free Fire', 200006, '10 Diamond', 1800.00, 0.00, 1800.00, 'Diamond'),
(2, 'Free Fire', 200007, '20 Diamond', 3600.00, 0.00, 3600.00, 'Diamond'),
(2, 'Free Fire', 200009, '25 Diamond', 4500.00, 0.00, 4500.00, 'Diamond'),
(2, 'Free Fire', 200010, '30 Diamond', 5400.00, 0.00, 5400.00, 'Diamond'),
(2, 'Free Fire', 200011, '50 Diamond', 6900.00, 0.00, 6900.00, 'Diamond'),
(2, 'Free Fire', 200012, '70 Diamond', 10400.00, 0.00, 10400.00, 'Diamond'),
(2, 'Free Fire', 200013, '90 Diamond', 13500.00, 0.00, 13500.00, 'Diamond'),
(2, 'Free Fire', 200014, '100 Diamond', 14000.00, 0.00, 14000.00, 'Diamond'),
(2, 'Free Fire', 200015, '120 Diamond', 16500.00, 0.00, 16500.00, 'Diamond'),
(2, 'Free Fire', 200016, '170 Diamond', 24500.00, 0.00, 24500.00, 'Diamond'),
(2, 'Free Fire', 200017, '210 Diamond', 28500.00, 0.00, 28500.00, 'Diamond'),
(2, 'Free Fire', 200018, '280 Diamond', 38000.00, 0.00, 38000.00, 'Diamond'),
(2, 'Free Fire', 200019, '300 Diamond', 42000.00, 0.00, 42000.00, 'Diamond'),
(2, 'Free Fire', 200020, '355 Diamond', 48000.00, 0.00, 48000.00, 'Diamond'),
(2, 'Free Fire', 200021, '500 Diamond', 68000.00, 1.40, 67048.00, 'Diamond'),
(2, 'Free Fire', 200022, '635 Diamond', 86000.00, 0.00, 86000.00, 'Diamond'),
(2, 'Free Fire', 200023, '720 Diamond', 95000.00, 1.50, 93575.00, 'Diamond'),
(3, 'Genshin Impact', 300001, 'Blessing of the Welkin Moon', 60000.00, 1.20, 59280.00, 'Membership'),
(3, 'Genshin Impact', 300002, '2x Blessing of the Welkin Moon', 120000.00, 1.20, 118560.00, 'Membership'),
(3, 'Genshin Impact', 300003, '3x Blessing of the Welkin Moon', 180000.00, 1.20, 177840.00, 'Membership'),
(3, 'Genshin Impact', 300005, '60 Genesis', 12000.00, 0.00, 12000.00, 'Diamond'),
(3, 'Genshin Impact', 300006, '330 Genesis', 60000.00, 0.00, 60000.00, 'Diamond'),
(3, 'Genshin Impact', 300007, '1090 Genesis', 180000.00, 0.00, 180000.00, 'Diamond'),
(3, 'Genshin Impact', 300008, '2240 Genesis', 390000.00, 0.00, 390000.00, 'Diamond'),
(3, 'Genshin Impact', 300009, '3880 Genesis', 600000.00, 0.00, 600000.00, 'Diamond'),
(3, 'Genshin Impact', 300010, '8080 Genesis', 1200000.00, 0.00, 1200000.00, 'Diamond'),
(4, 'Metal Slug Awakening', 400001, 'Kartu Bulanan', 64000.00, 0.00, 64000.00, 'Membership'),
(4, 'Metal Slug Awakening', 400002, 'Kartu Bulanan Premium', 123000.00, 0.00, 123000.00, 'Membership'),
(4, 'Metal Slug Awakening', 400003, 'Support Pass', 68000.00, 0.00, 68000.00, 'Membership'),
(4, 'Metal Slug Awakening', 400004, 'Premium Support Pass', 130000.00, 0.00, 130000.00, 'Membership'),
(4, 'Metal Slug Awakening', 400005, '60 Ruby', 13500.00, 0.00, 13500.00, 'Diamond'),
(4, 'Metal Slug Awakening', 400006, '310 Ruby', 64000.00, 0.00, 64000.00, 'Diamond'),
(4, 'Metal Slug Awakening', 400007, '630 Ruby', 123000.00, 0.00, 123000.00, 'Diamond'),
(4, 'Metal Slug Awakening', 400008, '1300 Ruby', 246000.00, 0.00, 246000.00, 'Diamond'),
(4, 'Metal Slug Awakening', 400009, '3200 Ruby', 678000.00, 0.00, 678000.00, 'Diamond'),
(4, 'Metal Slug Awakening', 400010, '6500 Ruby', 1230000.00, 0.00, 1230000.00, 'Diamond'),
(5, 'Call Of Duty', 500001, '31 CP', 5000.00, 0.00, 5000.00, 'Diamond'),
(5, 'Call Of Duty', 500002, '63 CP', 9500.00, 0.00, 9500.00, 'Diamond'),
(5, 'Call Of Duty', 500003, '128 CP', 19000.00, 0.00, 19000.00, 'Diamond'),
(5, 'Call Of Duty', 500004, '321 CP', 47500.00, 0.00, 47500.00, 'Diamond'),
(5, 'Call Of Duty', 500005, '645 CP', 95000.00, 0.00, 95000.00, 'Diamond'),
(5, 'Call Of Duty', 500006, '800 CP', 114000.00, 0.00, 114000.00, 'Diamond'),
(5, 'Call Of Duty', 500007, '1373 CP', 190000.00, 0.00, 190000.00, 'Diamond'),
(5, 'Call Of Duty', 500008, '2060 CP', 285000.00, 0.00, 285000.00, 'Diamond'),
(6, 'Arena Of Valor', 600001, '40 Voucher', 9500.00, 0.00, 9500.00, 'Diamond'),
(6, 'Arena Of Valor', 600002, '90 Voucher', 19000.00, 0.00, 19000.00, 'Diamond'),
(6, 'Arena Of Valor', 600003, '230 Voucher', 47500.00, 0.00, 47500.00, 'Diamond'),
(6, 'Arena Of Valor', 600004, '470 Voucher', 95000.00, 0.00, 95000.00, 'Diamond'),
(6, 'Arena Of Valor', 600006, '950 Voucher', 190000.00, 0.00, 190000.00, 'Diamond'),
(6, 'Arena Of Valor', 600007, '1430 Voucher', 285000.00, 0.00, 285000.00, 'Diamond'),
(6, 'Arena Of Valor', 600008, '2390 Voucher', 475000.00, 0.00, 475000.00, 'Diamond'),
(6, 'Arena Of Valor', 600009, '4800 Voucher', 950000.00, 0.00, 950000.00, 'Diamond'),
(1, 'Mobile Legends', 45627391, 'paket mythic', 124000.00, 1.20, 122512.00, 'Diamond'),
(3, 'Genshin Impact', 45627394, 'blessing seumur hidup', 120000.00, 1.60, 118080.00, 'membership'),
(9, 'Wildrift', 45627396, 'wleolwoee', 12918.00, 0.00, 12918.00, 'Other');

--
-- Triggers `item`
--
DELIMITER $$
CREATE TRIGGER `set_harga_final` BEFORE INSERT ON `item` FOR EACH ROW SET NEW.harga_final = NEW.harga_awal - (NEW.harga_awal * NEW.promo / 100)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `set_id_game` BEFORE INSERT ON `item` FOR EACH ROW BEGIN
    DECLARE v_id_game INT;
    SELECT id_game INTO v_id_game FROM game WHERE nama_game = NEW.nama_game;
    SET NEW.id_game = v_id_game;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_harga_final_trigge` BEFORE UPDATE ON `item` FOR EACH ROW SET NEW.harga_final = NEW.harga_awal - (NEW.harga_awal * NEW.promo / 100)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `isi_komentar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`isi_komentar`, `nama`) VALUES
('Restu Gacor', 'Restu Nuhidin'),
('Supri', 'Restu Nuhidin'),
('Keren', 'rapip'),
('Aman Dan Murah', 'Sipuer');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(100) NOT NULL,
  `payment_name` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL DEFAULT 'Otomatis',
  `payment_tax` double NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `payment_icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_name`, `payment_method`, `payment_tax`, `payment_type`, `payment_icon`) VALUES
(1, 'Dana', 'Otomatis', 0.002, 'E-Wallet', 'dana.png'),
(4, 'Gopay', 'Otomatis', 0.002, 'E-Wallet', 'gopay.png'),
(5, 'Qriss', 'Otomatis', 0.005, 'E-Wallet', 'qriss.png'),
(8, 'ShopeePay', 'Otomatis', 0.003, 'E-Wallet', 'shopeepay.png'),
(9, 'Bca', 'Otomatis', 0.004, 'Transfer Bank', 'bca.png'),
(10, 'Bri', 'Otomatis', 0.004, 'Transfer Bank', 'bri.png'),
(11, 'Mandiri', 'Otomatis', 0.0045, 'Transfer Bank', 'mandiri.png');

-- --------------------------------------------------------

--
-- Table structure for table `total_pendapatan`
--

CREATE TABLE `total_pendapatan` (
  `kode_transaksi` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `total_pendapatan`
--

INSERT INTO `total_pendapatan` (`kode_transaksi`, `harga_jual`, `harga_beli`) VALUES
(93834271, 10000, 8000),
(5434, 16000, 13000),
(4325231, 190000, 179000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_transaksi` varchar(100) NOT NULL,
  `nama_game` varchar(50) NOT NULL,
  `nama_item` varchar(100) NOT NULL,
  `total_harga` int(100) NOT NULL,
  `tanggal_transaksi` varchar(100) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL,
  `username_pembeli` varchar(50) NOT NULL,
  `data_akun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kode_transaksi`, `nama_game`, `nama_item`, `total_harga`, `tanggal_transaksi`, `metode_pembayaran`, `status_pembayaran`, `username_pembeli`, `data_akun`) VALUES
('TRXaI1a9KtQm4', 'Metal Slug Awakening', 'Premium Support Pass', 130000, '05-06-2024', 'Dana', 'Belum Dibayar', 'USER kdIBzOsZEX', '2532631'),
('TRXJYjzWqKCWg', 'Metal Slug Awakening', 'Kartu Bulanan', 64000, '05-06-2024', 'Dana', 'Belum Dibayar', 'USER 3gT8gZCCWi', '123451456'),
('TRXNMgIvQpmbg', 'Mobile Legends', '2x Weekly Diamond Pass', 49500, '05-06-2024', 'Bri', 'Dibayar', 'rapip', '87152451(12354)'),
('TRXOpRMtE0n9F', 'Arena Of Valor', '230 Voucher', 47500, '05-06-2024', 'Dana', 'Belum Dibayar', 'USER oNOEMPhwgA', '323554334'),
('TRXvNo3w9syoW', 'Genshin Impact', 'Blessing of the Welkin Moon', 59280, '05-06-2024', 'ShopeePay', 'Dibayar', 'mofu', '816252717(ASIA)');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `saldo_akun` int(100) NOT NULL,
  `member` varchar(20) NOT NULL DEFAULT 'silver',
  `total_order` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `saldo_akun`, `member`, `total_order`) VALUES
(2, 'rapip', 'rapip', 'rapip', 0, 'silver', 0),
(7, 'mofu', 'mofu', 'mofu', 200000, 'platinum', 0),
(8, 'edsc', 'sdv', 'vdsx', 0, 'silver', 0),
(9, 'rafif', 'rafif', 'rafif', 0, 'silver', 0),
(10, 'Restu Nuhidin', 'restu', 'restu', 0, 'silver', 0),
(11, 'Sipuer', 'sipur', 'sipur', 0, 'silver', 0),
(12, 'Im Hasan', 'hasan', 'hasan', 0, 'silver', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `data_login`
--
ALTER TABLE `data_login`
  ADD KEY `id_game` (`id_game`),
  ADD KEY `nama_game` (`nama_game`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`),
  ADD UNIQUE KEY `nama_game` (`nama_game`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_game` (`id_game`),
  ADD KEY `nama_game` (`nama_game`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id_game` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45627397;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_login`
--
ALTER TABLE `data_login`
  ADD CONSTRAINT `data_login_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`),
  ADD CONSTRAINT `data_login_ibfk_2` FOREIGN KEY (`nama_game`) REFERENCES `game` (`nama_game`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`nama_game`) REFERENCES `game` (`nama_game`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
