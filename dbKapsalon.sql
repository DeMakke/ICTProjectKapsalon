-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 mei 2016 om 09:29
-- Serverversie: 10.1.13-MariaDB
-- PHP-versie: 7.0.5

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
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE `login` (
  `id_user` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `login`
--

INSERT INTO `login` (`id_user`, `username`, `user_email`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblafspraak`
--

CREATE TABLE `tblafspraak` (
  `AfspraakID` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `KapsterID` int(5) NOT NULL,
  `Tijd` date NOT NULL,
  `BehandelingID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblbehandeling`
--

CREATE TABLE `tblbehandeling` (
  `BehandelingID` int(5) NOT NULL,
  `Type` text NOT NULL,
  `Tijd` time NOT NULL,
  `Prijs` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `tblklant` (
  `id_user` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `Achternaam` text NOT NULL,
  `Voornaam` text NOT NULL,
  `Telefoonnr` int(9) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `Geslacht` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblpersoneel`
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
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `tblafspraak`
--
ALTER TABLE `tblafspraak`
  MODIFY `AfspraakID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `tblbehandeling`
--
ALTER TABLE `tblbehandeling`
  MODIFY `BehandelingID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `tblklant`
--
ALTER TABLE `tblklant`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `tblpersoneel`
--
ALTER TABLE `tblpersoneel`
  MODIFY `KapsterID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
