-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 12. Feb 2016 um 11:39
-- Server Version: 5.6.21
-- PHP-Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `muenzen`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gewicht`
--

CREATE TABLE IF NOT EXISTS `gewicht` (
`g_ID` int(11) NOT NULL,
  `gewicht` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `gewicht`
--

INSERT INTO `gewicht` (`g_ID`, `gewicht`) VALUES
(2, 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `laender`
--

CREATE TABLE IF NOT EXISTS `laender` (
`l_ID` int(11) NOT NULL,
  `land` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `laender`
--

INSERT INTO `laender` (`l_ID`, `land`) VALUES
(2, 'iuoiuo'),
(3, 'wqewqewqe');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `material`
--

CREATE TABLE IF NOT EXISTS `material` (
`ma_ID` int(11) NOT NULL,
  `material` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `material`
--

INSERT INTO `material` (`ma_ID`, `material`) VALUES
(2, 'neu'),
(3, 'fdsfsdf'),
(4, 'gfdfgfdgfdgretretretre'),
(5, 'fdfdf');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `muenzen`
--

CREATE TABLE IF NOT EXISTS `muenzen` (
`m_ID` int(10) NOT NULL,
  `bezeichnung` varchar(50) NOT NULL,
  `preis` double NOT NULL,
  `wert` double NOT NULL,
  `datum` date NOT NULL,
  `ms_ID` int(11) NOT NULL,
  `g_ID` int(11) NOT NULL,
  `l_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `muenzen`
--

INSERT INTO `muenzen` (`m_ID`, `bezeichnung`, `preis`, `wert`, `datum`, `ms_ID`, `g_ID`, `l_ID`) VALUES
(17, 'Ã¼', 1, 456546, '2016-01-06', 4, 2, 2),
(18, 'sadasd', 1, 2, '2001-01-01', 2, 1, 2),
(19, 'asdsadsadsad', 123, 2, '2001-01-01', 17, 123, 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `muenzserien`
--

CREATE TABLE IF NOT EXISTS `muenzserien` (
`ms_ID` int(11) NOT NULL,
  `muenzserie` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `muenzserien`
--

INSERT INTO `muenzserien` (`ms_ID`, `muenzserie`) VALUES
(4, 'Ã¤Ã¶Ã¼Ã¤Ã¶Ã¤Ã¶Ã¼Ã¤'),
(6, 'fdgdfg'),
(7, 'iiopiop'),
(8, 'oiuoiuo'),
(9, 'Ã¼Ã¼Ã¼'),
(10, 'iuouio'),
(11, 'asdsadsad');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ver_ma`
--

CREATE TABLE IF NOT EXISTS `ver_ma` (
`v_ma_id` int(11) NOT NULL,
  `ma_ID` int(11) NOT NULL,
  `m_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `ver_ma`
--

INSERT INTO `ver_ma` (`v_ma_id`, `ma_ID`, `m_ID`) VALUES
(6, 1, 17),
(7, 2, 16),
(11, 5, 17),
(12, 11, 17);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `gewicht`
--
ALTER TABLE `gewicht`
 ADD PRIMARY KEY (`g_ID`);

--
-- Indizes für die Tabelle `laender`
--
ALTER TABLE `laender`
 ADD PRIMARY KEY (`l_ID`);

--
-- Indizes für die Tabelle `material`
--
ALTER TABLE `material`
 ADD PRIMARY KEY (`ma_ID`);

--
-- Indizes für die Tabelle `muenzen`
--
ALTER TABLE `muenzen`
 ADD PRIMARY KEY (`m_ID`);

--
-- Indizes für die Tabelle `muenzserien`
--
ALTER TABLE `muenzserien`
 ADD PRIMARY KEY (`ms_ID`);

--
-- Indizes für die Tabelle `ver_ma`
--
ALTER TABLE `ver_ma`
 ADD PRIMARY KEY (`v_ma_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `gewicht`
--
ALTER TABLE `gewicht`
MODIFY `g_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `laender`
--
ALTER TABLE `laender`
MODIFY `l_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `material`
--
ALTER TABLE `material`
MODIFY `ma_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `muenzen`
--
ALTER TABLE `muenzen`
MODIFY `m_ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT für Tabelle `muenzserien`
--
ALTER TABLE `muenzserien`
MODIFY `ms_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT für Tabelle `ver_ma`
--
ALTER TABLE `ver_ma`
MODIFY `v_ma_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
