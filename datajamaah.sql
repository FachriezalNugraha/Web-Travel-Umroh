-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2018 at 01:48 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datajamaah`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `paket` varchar(30) NOT NULL,
  `noid` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kode` int(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `no` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nopaspor` varchar(30) NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`paket`, `noid`, `nama`, `alamat`, `kota`, `kode`, `tempat`, `ttl`, `jenis`, `no`, `email`, `nopaspor`, `deadline`) VALUES
('Paket Mina', 123456777, 'Annisa Reza', 'Tempel Bakungan Karangdowo ', 'klaten', 57464, 'Klatem', '2018-12-03', 'Perempuan', 2147483647, '11111111111', '54333221234', '2018-11-10'),
('Paket Arofah', 674686743, 'saskia', 'karangdowo', 'subang', 76878998, 'sukabumi', '2018-11-26', 'Perempuan', 2147483647, 'saskisaski', '6666762544', '2018-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `data_paket`
--

CREATE TABLE `data_paket` (
  `id_paket` varchar(5) NOT NULL,
  `nama_paket` varchar(25) NOT NULL,
  `durasi` varchar(10) NOT NULL,
  `keberangkatan` date NOT NULL,
  `hotel_mekkah` varchar(25) NOT NULL,
  `hotel_madinah` varchar(25) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_paket`
--

INSERT INTO `data_paket` (`id_paket`, `nama_paket`, `durasi`, `keberangkatan`, `hotel_mekkah`, `hotel_madinah`, `biaya`) VALUES
('1', 'Paket Mina', '12 Hari', '2018-12-20', 'Olayan Ajyad', 'Mirat Salam', 28000000),
('2', 'Paket Safa', '12 Hari', '2019-01-01', 'Rayana Ajyad', 'Salahiya', 23000000),
('3', 'Paket Safa', '9 Hari', '2019-02-14', 'Final Rehab', 'Assalam', 27500000),
('4', 'Paket Muzdalifah', '9 Hari', '2019-04-11', 'Olayan Ajyad', 'Mirat Salam', 25000000),
('5', 'Paket Jiroyah', '12 Hari', '2019-05-28', 'Assaalam', 'Zamzam Tower', 30000000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('ica', 'ica');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`noid`);

--
-- Indexes for table `data_paket`
--
ALTER TABLE `data_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
