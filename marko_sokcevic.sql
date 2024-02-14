-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 11:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marko_sokcevic`
--

-- --------------------------------------------------------

--
-- Table structure for table `klijent`
--

CREATE TABLE `klijent` (
  `id` int(3) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `prezime` varchar(20) NOT NULL,
  `datum_vrijeme` datetime NOT NULL,
  `email` varchar(50) NOT NULL,
  `broj_mobitela` varchar(20) DEFAULT NULL,
  `adresa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `klijent`
--

INSERT INTO `klijent` (`id`, `ime`, `prezime`, `datum_vrijeme`, `email`, `broj_mobitela`, `adresa`) VALUES
(87, 'Neda', 'Ukraden', '2023-08-14 18:50:00', 'ukradena.neda@srbija.rs', '387', 'Sarajevo'),
(88, 'Petar', 'Jeleč', '2023-07-26 18:59:00', 'petar.nogomet@gmail.com', '099', 'Livana'),
(89, 'Mihael', 'Golubov', '2023-08-20 18:02:00', 'mgolubov88@gmail.com', '091', 'Višnjevac'),
(90, 'Jurko', 'Jurendić', '2023-09-13 10:09:00', 'jurkan.kralj.bosna@yahoo.com', '097', 'Briješće-Pećnik'),
(91, 'Luka', 'Proletar', '2023-05-07 20:01:00', 'prolijoli@gmail.com', '0997867890', 'Bizovac'),
(92, 'David', 'Kučić', '2023-08-07 10:47:00', 'david.kucic@gmail.com', '091', 'Podgorač');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klijent`
--
ALTER TABLE `klijent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_unique_key` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klijent`
--
ALTER TABLE `klijent`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
