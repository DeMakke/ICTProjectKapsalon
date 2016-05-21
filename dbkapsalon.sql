-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2016 at 11:23 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkapsalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `user_email`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'nielsbekkers', 'niels.bekkers@skynet.be', '9b9824df65f716b71db9f51299346088'),
(3, 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Table structure for table `tblafspraak`
--

CREATE TABLE `tblafspraak` (
  `id_user` int(5) NOT NULL,
  `KapsterID` int(5) NOT NULL,
  `Tijd` time NOT NULL,
  `AfspraakDag` date NOT NULL,
  `BehandelingID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblafspraak`
--

INSERT INTO `tblafspraak` (`id_user`, `KapsterID`, `Tijd`, `AfspraakDag`, `BehandelingID`) VALUES
(3, 1, '10:30:00', '2016-05-25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblbehandeling`
--

CREATE TABLE `tblbehandeling` (
  `BehandelingID` int(5) NOT NULL,
  `Type` text NOT NULL,
  `Tijd` time NOT NULL,
  `Prijs` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbehandeling`
--

INSERT INTO `tblbehandeling` (`BehandelingID`, `Type`, `Tijd`, `Prijs`) VALUES
(1, 'Knippen', '00:15:00', '15'),
(2, 'Föhnen', '00:15:00', ''),
(3, 'Brushen', '00:15:00', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tblklant`
--

CREATE TABLE `tblklant` (
  `id_user` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `Achternaam` text NOT NULL,
  `Voornaam` text NOT NULL,
  `Telefoonnr` int(9) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `Geslacht` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblklant`
--

INSERT INTO `tblklant` (`id_user`, `username`, `Achternaam`, `Voornaam`, `Telefoonnr`, `user_email`, `Geslacht`) VALUES
(2, 'nielsbekkers', 'Bekkers', 'Niels', 47596748, 'niels.bekkers@skynet.be', 'Man'),
(3, 'test', 'testing', 'test', 493692343, 'test@gmail.com', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `tblpersoneel`
--

CREATE TABLE `tblpersoneel` (
  `KapsterID` int(5) NOT NULL,
  `Voornaam` text NOT NULL,
  `Achternaam` text NOT NULL,
  `Straat` text NOT NULL,
  `Nr` int(3) NOT NULL,
  `Plaats` text NOT NULL,
  `Postcode` int(4) NOT NULL,
  `Telefoonnr` varchar(9) NOT NULL,
  `Gsmnr` varchar(10) NOT NULL,
  `Email` text NOT NULL,
  `Geboortedatum` date NOT NULL,
  `Geslacht` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpersoneel`
--

INSERT INTO `tblpersoneel` (`KapsterID`, `Voornaam`, `Achternaam`, `Straat`, `Nr`, `Plaats`, `Postcode`, `Telefoonnr`, `Gsmnr`, `Email`, `Geboortedatum`, `Geslacht`) VALUES
(1, 'Kerim', 'Bayramoglu', 'Lupienenstraat', 33, 'genk', 3600, '123456789', '987654321', 'kerim@example.com', '2016-02-19', 'Man');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`user_email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tblafspraak`
--
ALTER TABLE `tblafspraak`
  ADD PRIMARY KEY (`KapsterID`,`Tijd`,`AfspraakDag`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `KapsterID` (`KapsterID`,`BehandelingID`),
  ADD KEY `BehandelingID` (`BehandelingID`);

--
-- Indexes for table `tblbehandeling`
--
ALTER TABLE `tblbehandeling`
  ADD PRIMARY KEY (`BehandelingID`);

--
-- Indexes for table `tblklant`
--
ALTER TABLE `tblklant`
  ADD PRIMARY KEY (`id_user`,`username`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `tblpersoneel`
--
ALTER TABLE `tblpersoneel`
  ADD PRIMARY KEY (`KapsterID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblbehandeling`
--
ALTER TABLE `tblbehandeling`
  MODIFY `BehandelingID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblklant`
--
ALTER TABLE `tblklant`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblpersoneel`
--
ALTER TABLE `tblpersoneel`
  MODIFY `KapsterID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblafspraak`
--
ALTER TABLE `tblafspraak`
  ADD CONSTRAINT `tblafspraak_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tblklant` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblafspraak_ibfk_2` FOREIGN KEY (`BehandelingID`) REFERENCES `tblbehandeling` (`BehandelingID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblafspraak_ibfk_3` FOREIGN KEY (`KapsterID`) REFERENCES `tblpersoneel` (`KapsterID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblklant`
--
ALTER TABLE `tblklant`
  ADD CONSTRAINT `tblklant_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
