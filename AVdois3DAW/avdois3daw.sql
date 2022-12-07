-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 02:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avdois3daw`
--

-- --------------------------------------------------------

--
-- Table structure for table `veiculos`
--

CREATE TABLE `veiculos` (
  `id` int(11) NOT NULL,
  `grupo` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `localizacao` varchar(100) NOT NULL,
  `estadoDeAluguel` varchar(100) NOT NULL,
  `valor` varchar(100) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `aluguel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `veiculos`
--

INSERT INTO `veiculos` (`id`, `grupo`, `modelo`, `localizacao`, `estadoDeAluguel`, `valor`, `cliente`, `aluguel`) VALUES
(13, 'grupo B', 'carro2', 'SP', 'Livre', '323232', 'Nenhum', '0'),
(14, 'grupo B', 'carro3', 'MG', 'Livre', '323232312', 'Nenhum', '0'),
(15, 'grupo AM', '12345', 'RJ', 'Livre', '12312', 'Nenhum', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
