-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 feb 2021 om 21:18
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garage`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `auto`
--

CREATE TABLE `auto` (
  `autokenteken` varchar(45) NOT NULL,
  `automerk` varchar(45) NOT NULL,
  `autotype` varchar(45) NOT NULL,
  `autokmstand` int(45) NOT NULL,
  `klantid` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `auto`
--

INSERT INTO `auto` (`autokenteken`, `automerk`, `autotype`, `autokmstand`, `klantid`) VALUES
('01-RVC-0', 'Audi', 'A3 s-line', 4087, 1),
('8-SFR-88', 'BMW', '520d MSPORT', 143989, 5),
('NN-037-G', 'Audi', 'A3', 309872, 3),
('PK-020-R', 'Volkswagen', 'Polo', 2043439, 4),
('SS-010-L', 'Volkswagen', 'GTI', 80544, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE `klant` (
  `id` int(11) NOT NULL,
  `klantnaam` varchar(45) NOT NULL,
  `klantadres` varchar(45) NOT NULL,
  `klantpostcode` varchar(45) NOT NULL,
  `klantplaats` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `klant`
--

INSERT INTO `klant` (`id`, `klantnaam`, `klantadres`, `klantpostcode`, `klantplaats`) VALUES
(1, 'Ryan Choennie', 'nelsonmandelastraat 12', '3021 VH', 'rotterdam'),
(2, 'Shivano Choennie', 'binnenweg 229', '3045 HG', 'Schiedam'),
(3, 'Avi Choennie', 'keizerswaard 10', '3079 HH', 'Amsterdam'),
(4, 'Pavan Randjitsingh', 'zwartjanstraat 30', '3039 PJ', 'Utrecht');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`autokenteken`);

--
-- Indexen voor tabel `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `klant`
--
ALTER TABLE `klant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
