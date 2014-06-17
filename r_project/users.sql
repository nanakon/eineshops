-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2014 at 03:23 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eine`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(25) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `fname` varchar(20) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `lname` varchar(20) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `mail` varchar(25) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `city` varchar(25) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `street` varchar(25) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `hnumber` varchar(20) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT '0',
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `fname`, `lname`, `mail`, `city`, `street`, `hnumber`, `phone`, `admin`, `ID`) VALUES
('nanakon', 'ba83b7e2438de1cf80dbcf69cc44d3e2', 'Martin', 'Straka', 'doyukotoda@gmail.com', 'Nová Ľubovňa', 'Hlavná', '603', 904055364, 2, 3),
('guest', '084e0343a0486ff05530df6c705c8bb4', 'Testovaci', 'Subjekt', 'guest@guest.com', 'Bratislava', 'Staré Grunty', '36', 909099099, 0, 4),
('KagaChi', '4bd7c25e0f86225f0d522af3beb870c1', 'Kouko', 'Kaga', 'kaga.kouko@gmail.com', 'Chiba', 'Akihabara 1', '12345', 0, 0, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
