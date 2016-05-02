-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 02 mei 2016 om 19:09
-- Serverversie: 5.6.26
-- PHP-versie: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbKapsalon`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Login`
--

CREATE TABLE IF NOT EXISTS `Login` (
  `id_user` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Login`
--

INSERT INTO `Login` (`id_user`, `username`, `user_email`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(11, 'Niels', 'niels_bekkers_9@hotmail.com', '9b9824df65f716b71db9f51299346088'),
(12, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6'),
(42, 'hallo', 'hallo', '598d4c200461b81522a3328565c25f7c'),
(44, 'test1', 'test1', '5a105e8b9d40e1329780d62ea2265d8a'),
(45, 'test3', 'test3', '8ad8757baa8564dc136c1e07507f4a98');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblAfspraak`
--

CREATE TABLE IF NOT EXISTS `tblAfspraak` (
  `voornaam` varchar(30) NOT NULL,
  `KapsterID` int(5) NOT NULL,
  `BehandelingID` int(5) NOT NULL,
  `AfspraakID` int(10) NOT NULL,
  `Datum` date DEFAULT NULL,
  `Tijd` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblAfspraak`
--

INSERT INTO `tblAfspraak` (`voornaam`, `KapsterID`, `BehandelingID`, `AfspraakID`, `Datum`, `Tijd`) VALUES
('1', 1, 1, 1, '2016-05-19', '16:30:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblBehandeling`
--

CREATE TABLE IF NOT EXISTS `tblBehandeling` (
  `BehandelingID` int(5) NOT NULL,
  `Type` text NOT NULL,
  `Tijd` time NOT NULL,
  `Prijs` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblBehandeling`
--

INSERT INTO `tblBehandeling` (`BehandelingID`, `Type`, `Tijd`, `Prijs`) VALUES
(1, 'Knippen', '00:15:00', '15');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblKlant`
--

CREATE TABLE IF NOT EXISTS `tblKlant` (
  `id_user` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `Achternaam` text NOT NULL,
  `Voornaam` text NOT NULL,
  `Telefoonnr` int(9) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `Geslacht` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblKlant`
--

INSERT INTO `tblKlant` (`id_user`, `username`, `Achternaam`, `Voornaam`, `Telefoonnr`, `user_email`, `Geslacht`) VALUES
(1, 'Jos', 'Voorbeeld', 'Dorpstraat', 11234567, 'jos@example.com', 'Man'),
(12, 'test', 'test', 'test', 457463748, 'testblablabla', 'man'),
(45, 'test3', 'test3', 'test3', 2147483647, 'testblablabla', 'man');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblPersoneel`
--

CREATE TABLE IF NOT EXISTS `tblPersoneel` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblPersoneel`
--

INSERT INTO `tblPersoneel` (`KapsterID`, `Voornaam`, `Achternaam`, `Straat`, `Nr`, `Plaats`, `Postcode`, `Telefoonnr`, `Gsmnr`, `Email`, `Geboortedatum`, `Geslacht`) VALUES
(1, 'Tom', 'Herten', 'Hertenstraat', 3, 'Hasselt', 3500, '011356783', '0474569345', 'tomherten@gmail.com', '2015-05-05', 'Man');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Login`
--
ALTER TABLE `Login`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`user_email`);

--
-- Indexen voor tabel `tblAfspraak`
--
ALTER TABLE `tblAfspraak`
  ADD PRIMARY KEY (`AfspraakID`);

--
-- Indexen voor tabel `tblBehandeling`
--
ALTER TABLE `tblBehandeling`
  ADD PRIMARY KEY (`BehandelingID`);

--
-- Indexen voor tabel `tblKlant`
--
ALTER TABLE `tblKlant`
  ADD PRIMARY KEY (`id_user`,`username`);

--
-- Indexen voor tabel `tblPersoneel`
--
ALTER TABLE `tblPersoneel`
  ADD PRIMARY KEY (`KapsterID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Login`
--
ALTER TABLE `Login`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT voor een tabel `tblBehandeling`
--
ALTER TABLE `tblBehandeling`
  MODIFY `BehandelingID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `tblKlant`
--
ALTER TABLE `tblKlant`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT voor een tabel `tblPersoneel`
--
ALTER TABLE `tblPersoneel`
  MODIFY `KapsterID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
