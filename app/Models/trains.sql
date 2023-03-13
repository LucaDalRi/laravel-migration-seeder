-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2023 at 04:55 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trains_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `nome_azienda` varchar(60) NOT NULL,
  `stazione_partenza` varchar(100) NOT NULL,
  `stazione_arrivo` varchar(100) NOT NULL,
  `codice_treno` mediumint(9) NOT NULL,
  `numero_carrozze` tinyint(4) NOT NULL,
  `in_orario` tinyint(1) NOT NULL,
  `cancellato` tinyint(1) NOT NULL,
  `orario_partenza` datetime NOT NULL,
  `orario_arrivo` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`nome_azienda`, `stazione_partenza`, `stazione_arrivo`, `codice_treno`, `numero_carrozze`, `in_orario`, `cancellato`, `orario_partenza`, `orario_arrivo`) VALUES
('Trenitalia', 'Roma', 'Milano', 123, 9, 1, 0, '2023-03-13 06:00:00', '2023-03-13 09:30:00'),
('Italo', 'Milano', 'Venezia', 134, 11, 1, 0, '2023-03-14 10:00:00', '2023-03-14 14:00:00'),
('Trenitalia', 'Trieste', 'Catanzaro', 145, 5, 0, 1, '2023-03-15 15:15:00', '2023-03-15 21:23:00'),
('Italo', 'Firenze', 'Genova', 157, 4, 0, 0, '2023-03-16 10:00:00', '2023-03-16 12:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`codice_treno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
