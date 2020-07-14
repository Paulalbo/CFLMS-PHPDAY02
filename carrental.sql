-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Jul 2020 um 15:10
-- Server-Version: 10.1.39-MariaDB
-- PHP-Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `carrental`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cardetails`
--

CREATE TABLE `cardetails` (
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `available` int(11) NOT NULL,
  `img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `cardetails`
--

INSERT INTO `cardetails` (`brand`, `model`, `price`, `location`, `available`, `img`) VALUES
('BMW', '4er', 40, 'Vienna Hauptbahnhof', 1, 'https://sx-content-labs.sixt.io/Media/8fleet-1050x600/bmw-6er-gt-4d-silber-2018.png'),
('Fiat', '500', 35, 'Vienna Westbahnhof', 0, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/fiat-500-cabrio-2d-weiss-2013.png'),
('Mercedes', 'A-Klasse', 30, 'Vienna Airport', 1, 'https://www.pappas.at/clients/pappas/global/car-model/pkw/mercedes-benz/A-Klasse%20kompakt/2018/basis-set/image-thumb__153277__model-teaser-img/modell.png'),
('Mini', 'Cabrio', 33, 'Vienna Millennium Tower', 0, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/mini-cooper-cabrio-2d-weiss-offen-2018.png'),
('BMW', 'i3', 20, 'Vienna Hauptbahnhof', 1, 'https://sx-content-labs.sixt.io/Media/8fleet-1050x600/bmw-i3-3d-blau-schwarz-2017-elektro.png'),
('Opel', 'insignia', 35, 'Vienna Westbahnhof', 1, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/opel-insignia-grand-sport-4d-weiss-2018.png'),
('Tesla', 'Model 3', 50, 'Vienna Airport', 0, 'https://efahrer-images.chip.de/c7rh6xHQ2bBjXXT4xrR8ENbP61k=/640x400/center/middle/efahrer.chip.de/files/img/autos/tesla/model-3/tesla-model-3-front.png'),
('Mercedes', 'S-Klasse', 60, 'Vienna Westbahnhof', 1, 'https://www.mercedes-benz.at/passengercars/mercedes-benz-cars/models/s-class/saloon-w222/_jcr_content/image.MQ6.2.2x.20191028112354.png');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `cardetails`
--
ALTER TABLE `cardetails`
  ADD PRIMARY KEY (`model`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
