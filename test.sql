-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 03:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` int(11) NOT NULL,
  `Account` varchar(25) NOT NULL,
  `NamaBarang` varchar(50) NOT NULL,
  `SAT` varchar(10) NOT NULL,
  `SaldoAwal` int(11) NOT NULL,
  `LPB` int(11) NOT NULL,
  `BKB` int(11) NOT NULL,
  `SaldoAkhir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id`, `Account`, `NamaBarang`, `SAT`, `SaldoAwal`, `LPB`, `BKB`, `SaldoAkhir`) VALUES
(1, '102505990000001', 'AC SPLIT 1 PK', 'UNIT', 2, 0, 2, 0),
(2, '102505990000190', 'AC SPLIT 1/2 PK ', 'UNIT', 1, 0, 1, 0),
(3, '102505420000001', 'ACCU 50A', 'PCS', 2, 0, 2, 0),
(4, '102505490000224', 'ACCU 70 A', 'UNIT', 6, 0, 1, 5),
(5, '102505410000001', 'AIR CLINER ME017246', 'SET', 47, 40, 6, 81),
(6, '102505790000509', 'AIR PACK HANDLE 3/4', 'PCS', 2, 0, 0, 2),
(7, '102505950000005', 'AMPICILLIN SYR ', 'BTL', 152, 0, 152, 0),
(8, '102505850000175', 'APRON PUPUK (FERTILIZER A', 'PCS', 0, 275, 0, 275),
(9, '102505850000174', 'APRON SEMPROT (SPRAYING A', 'PCS', 0, 150, 0, 150),
(10, '102505400000438', 'ARM L UH 75-34-260A', 'PCS', 4, 0, 0, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
