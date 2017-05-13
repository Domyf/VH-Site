-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 02:57 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carsharing`
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
  `telefono` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
