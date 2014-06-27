-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 27 jun 2014 om 13:12
-- Serverversie: 5.6.16
-- PHP-versie: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `toetjesboek`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `eenheid`
--


CREATE TABLE IF NOT EXISTS `eenheid` (
  `eenheidsnaam` varchar(50) NOT NULL,
  PRIMARY KEY (`eenheidsnaam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `eenheid`
--

INSERT INTO `eenheid` (`eenheidsnaam`) VALUES
('decliter'),
('eetlepel'),
('gram'),
('kilogram'),
('stuks'),
('theelepel');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE IF NOT EXISTS `gebruiker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gebruikersnaam` varchar(20) NOT NULL,
  `wachtwoord` varchar(100) NOT NULL,
  `voornaam` varchar(20) NOT NULL,
  `tussenvoegsel` varchar(20) NOT NULL,
  `achternaam` varchar(20) NOT NULL,
  `datum_aangemaakt` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `gebruiker`
--

INSERT INTO `gebruiker` (`id`, `gebruikersnaam`, `wachtwoord`, `voornaam`, `tussenvoegsel`, `achternaam`, `datum_aangemaakt`) VALUES
(1, 'yo', 'yo', 'yo', 'yo', 'yo', '2014-06-03');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gerecht`
--

CREATE TABLE IF NOT EXISTS `gerecht` (
  `gerechtnaam` varchar(50) NOT NULL,
  `energiePP` varchar(50) NOT NULL,
  `bereidingstijd` varchar(50) NOT NULL,
  `bereidingswijze` varchar(50) NOT NULL,
  PRIMARY KEY (`gerechtnaam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `gerecht`
--

INSERT INTO `gerecht` (`gerechtnaam`, `energiePP`, `bereidingstijd`, `bereidingswijze`) VALUES
('Coupe_kiwano', '431', '20', 'schil'),
('Glace_Terrace', '403', '5', 'neem'),
('Mango_Plus_Plus', '131', '8', 'snijd');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ingrediënt`
--

CREATE TABLE IF NOT EXISTS `ingrediënt` (
  `gerechtnaam` varchar(50) NOT NULL,
  `productnaam` varchar(50) NOT NULL,
  `hoeveelheidPP` varchar(50) NOT NULL,
  PRIMARY KEY (`gerechtnaam`,`productnaam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `ingrediënt`
--

INSERT INTO `ingrediënt` (`gerechtnaam`, `productnaam`, `hoeveelheidPP`) VALUES
('coupe_kiwano', 'ijs', '0,15'),
('coupe_kiwano', 'kiwano', '0,5'),
('coupe_kiwano', 'slagroom', '0,3'),
('coupe_kiwano', 'suiker', '10'),
('coupe_kiwano', 'tequila', '1'),
('glace terrace', 'aardbeien', '50'),
('glace terrace', 'ijs', '0,2'),
('glace terrace', 'peper', ''),
('glace terrace', 'pernod', '2'),
('mango_plus_plus', 'aardbeien', '50'),
('mango_plus_plus', 'mango_plus_plus', '0,5'),
('mango_plus_plus', 'zure-room', '0,4');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `productnaam` varchar(50) NOT NULL,
  `eenheidsnaam` varchar(50) NOT NULL,
  `energiePE` varchar(50) NOT NULL,
  PRIMARY KEY (`productnaam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `product`
--

INSERT INTO `product` (`productnaam`, `eenheidsnaam`, `energiePE`) VALUES
('aardbeien', 'gram', '0,25'),
('ijs', 'liter', '1600'),
('kiwano', 'stuks', '40'),
('mango', 'stuks', '80'),
('peper', '', ''),
('permod', 'eetlepel', '35'),
('slagroom', 'deciliter', '336'),
('suiker', 'gram', '4'),
('tequila', 'eetlepel', '30'),
('zure_room', 'decliter', '195');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
