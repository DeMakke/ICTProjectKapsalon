-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 17 mei 2016 om 12:12
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
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_user` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `login`
--

INSERT INTO `login` (`id_user`, `username`, `user_email`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'nielsbekkers', 'niels.bekkers@skynet.be', '9b9824df65f716b71db9f51299346088');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblafspraak`
--

CREATE TABLE IF NOT EXISTS `tblafspraak` (
  `AfspraakID` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `KapsterID` int(5) NOT NULL,
  `Tijd` time NOT NULL,
  `AfspraakDag` date NOT NULL,
  `BehandelingID` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblafspraak`
--

INSERT INTO `tblafspraak` (`AfspraakID`, `id_user`, `KapsterID`, `Tijd`, `AfspraakDag`, `BehandelingID`) VALUES
(4, 2, 1, '00:00:00', '0000-00-00', 2),
(5, 2, 1, '00:00:00', '0000-00-00', 3),
(6, 2, 1, '00:00:00', '0000-00-00', 2),
(7, 2, 1, '00:00:00', '0000-00-00', 3),
(8, 2, 1, '00:00:00', '0000-00-00', 2),
(9, 2, 1, '00:00:00', '0000-00-00', 1),
(10, 2, 1, '13:00:00', '0000-00-00', 1),
(11, 2, 1, '21:00:00', '0000-00-00', 2),
(12, 2, 1, '00:01:51', '2015-11-30', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblbehandeling`
--

CREATE TABLE IF NOT EXISTS `tblbehandeling` (
  `BehandelingID` int(5) NOT NULL,
  `Type` text NOT NULL,
  `Tijd` time NOT NULL,
  `Prijs` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblbehandeling`
--

INSERT INTO `tblbehandeling` (`BehandelingID`, `Type`, `Tijd`, `Prijs`) VALUES
(1, 'Knippen', '00:15:00', '15'),
(2, 'Föhnen', '00:15:00', ''),
(3, 'Brushen', '00:15:00', '10');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblklant`
--

CREATE TABLE IF NOT EXISTS `tblklant` (
  `id_user` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `Achternaam` text NOT NULL,
  `Voornaam` text NOT NULL,
  `Telefoonnr` int(9) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `Geslacht` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblklant`
--

INSERT INTO `tblklant` (`id_user`, `username`, `Achternaam`, `Voornaam`, `Telefoonnr`, `user_email`, `Geslacht`) VALUES
(2, 'nielsbekkers', 'Bekkers', 'Niels', 47596748, 'niels.bekkers@skynet.be', 'Man');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblpersoneel`
--

CREATE TABLE IF NOT EXISTS `tblpersoneel` (
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
-- Gegevens worden geëxporteerd voor tabel `tblpersoneel`
--

INSERT INTO `tblpersoneel` (`KapsterID`, `Voornaam`, `Achternaam`, `Straat`, `Nr`, `Plaats`, `Postcode`, `Telefoonnr`, `Gsmnr`, `Email`, `Geboortedatum`, `Geslacht`) VALUES
(1, 'Kerim', 'Bayramoglu', 'Lupienenstraat', 33, 'genk', 3600, '123456789', '987654321', 'kerim@example.com', '2016-02-19', 'Man');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`user_email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexen voor tabel `tblafspraak`
--
ALTER TABLE `tblafspraak`
  ADD PRIMARY KEY (`AfspraakID`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `KapsterID` (`KapsterID`,`BehandelingID`),
  ADD KEY `BehandelingID` (`BehandelingID`);

--
-- Indexen voor tabel `tblbehandeling`
--
ALTER TABLE `tblbehandeling`
  ADD PRIMARY KEY (`BehandelingID`);

--
-- Indexen voor tabel `tblklant`
--
ALTER TABLE `tblklant`
  ADD PRIMARY KEY (`id_user`,`username`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexen voor tabel `tblpersoneel`
--
ALTER TABLE `tblpersoneel`
  ADD PRIMARY KEY (`KapsterID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `tblafspraak`
--
ALTER TABLE `tblafspraak`
  MODIFY `AfspraakID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT voor een tabel `tblbehandeling`
--
ALTER TABLE `tblbehandeling`
  MODIFY `BehandelingID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `tblklant`
--
ALTER TABLE `tblklant`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `tblpersoneel`
--
ALTER TABLE `tblpersoneel`
  MODIFY `KapsterID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `tblafspraak`
--
ALTER TABLE `tblafspraak`
  ADD CONSTRAINT `tblafspraak_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tblklant` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblafspraak_ibfk_2` FOREIGN KEY (`BehandelingID`) REFERENCES `tblbehandeling` (`BehandelingID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblafspraak_ibfk_3` FOREIGN KEY (`KapsterID`) REFERENCES `tblpersoneel` (`KapsterID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `tblklant`
--
ALTER TABLE `tblklant`
  ADD CONSTRAINT `tblklant_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
