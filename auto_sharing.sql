-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 06:31 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auto_sharing`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

CREATE TABLE `auto` (
  `targa` varchar(7) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modello` varchar(30) NOT NULL,
  `costo_giornaliero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`targa`, `marca`, `modello`, `costo_giornaliero`) VALUES
('BB255CK', 'Land Rover', 'Freelander', 40),
('DF486TY', 'Renault', 'Clio', 25),
('FP215QW', 'Fiat', 'Panda 2015', 25),
('FP789CI', 'Fiat', 'Panda 2000', 15),
('HU178DP', 'Vwagen', 'Golf', 36),
('HY852AQ', 'Audi', 'R8', 119),
('JD200WW', 'Peugeot', '206', 21),
('JF651KD', 'Ford', 'Fiesta', 30),
('KH871QA', 'Mercedes', 'CLS', 69),
('MD196JD', 'Ford', 'Focus', 30),
('MI513PW', 'Peugeot', '308', 23),
('MK248QW', 'Audi', 'Q7', 39),
('PL512SW', 'Vwagen', 'Polo', 29),
('RM684MG', 'Renault', 'Megane', 29),
('SD158AZ', 'Audi', 'A3', 26),
('SN369ER', 'Dacia', 'Sandero', 31),
('WV147HU', 'Dacia', 'Logan', 28),
('ZS321FR', 'Dacia', 'Duster', 28);

-- --------------------------------------------------------

--
-- Table structure for table `noleggi`
--

CREATE TABLE `noleggi` (
  `auto` varchar(7) NOT NULL,
  `socio` varchar(16) NOT NULL,
  `inizio` date NOT NULL,
  `fine` date NOT NULL,
  `auto_restituita` tinyint(1) NOT NULL,
  `codice_noleggio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soci`
--

CREATE TABLE `soci` (
  `CF` varchar(16) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `indirizzo` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `citta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soci`
--

INSERT INTO `soci` (`CF`, `cognome`, `nome`, `indirizzo`, `telefono`, `citta`) VALUES
('FM32231566', 'Zetticci', 'Vinicio ', 'Via Venezia, 98', '0312 4150144', 'Marina Di Belvedere Marittimo'),
('GT76139765', 'De Luca', 'Lodovica', 'Via Alfredo Fusco, 34', '0333 9444803', 'Sant''Agata Di Esaro'),
('IJ10822348', 'Padovesi', 'Tolomeo  ', 'Via San Domenico, 109', '0340 5281590', 'Glorenza'),
('IU49049114', 'Fallaci', 'Deodato', 'Via Catullo, 93', '0330 3853266', 'Roccacinquemiglia'),
('JL40356514', 'Palerma', 'Dionisia ', 'Via Santa Lucia, 67', '0316 4958755', 'Costacciaro'),
('KH94139765', 'De Luca', 'Lodovica', 'Via Alfredo Fusco, 34', '0333 9444803', 'Sant''Agata Di Esaro  '),
('OF71837218', 'Trevisano', 'Macario ', 'Via Callicratide, 44', '0311 65096134', 'Anghiari '),
('PG61186750', 'Arcuri', 'Ettore', 'Via Firenze, 31', '0325 6425324', 'Roverino '),
('PY72909082', 'Lori', 'Oberto  ', 'Corso Vittorio Emanuele, 138', '0337 9082713', 'Marroneto '),
('PZ49327618', 'Trevisani', 'Geraldo', 'Via delle Coste, 134', '0378 8626437', 'Monte Santa Maria'),
('SQ29726187', 'Genovese', 'Alice', 'Via Galvani, 92', '0372 3826752', 'Santa Maria Delle Mole'),
('SZ18459357', 'Colombo', 'Ernesto', 'Via del Caggio, 2', '0356 6752751', 'Acquaviva Picena'),
('VK67270241', 'Padovano', 'Alfio', 'Via Nuova Agnano, 30', '0344 3959628', 'San Godenzo'),
('WQ15965592', 'Mancini', 'Furio ', 'Piazzetta Scalette Rubiani, 15', '0343 2359069', 'Santa Marina'),
('ZQ2861837', 'Iadanza', 'Marino', 'Via Zannoni, 30', '0317 7769134', 'Albina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`targa`);

--
-- Indexes for table `noleggi`
--
ALTER TABLE `noleggi`
  ADD PRIMARY KEY (`codice_noleggio`),
  ADD KEY `auto` (`auto`),
  ADD KEY `socio` (`socio`);

--
-- Indexes for table `soci`
--
ALTER TABLE `soci`
  ADD PRIMARY KEY (`CF`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noleggi`
--
ALTER TABLE `noleggi`
  MODIFY `codice_noleggio` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `noleggi`
--
ALTER TABLE `noleggi`
  ADD CONSTRAINT `noleggi_ibfk_1` FOREIGN KEY (`auto`) REFERENCES `auto` (`targa`),
  ADD CONSTRAINT `noleggi_ibfk_2` FOREIGN KEY (`socio`) REFERENCES `soci` (`CF`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
