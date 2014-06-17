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
-- Table structure for table `komentare`
--

CREATE TABLE IF NOT EXISTS `komentare` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Tovar_ID` int(11) NOT NULL,
  `Cas` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Komentar` text CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `autor` varchar(50) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `komentare`
--

INSERT INTO `komentare` (`ID`, `Tovar_ID`, `Cas`, `Komentar`, `autor`) VALUES
(2, 12, '2014-01-06 12:24:39', 'Veľmi výkonný a spoľahlivý notebook, trošku tažší na nosenie ale skutočný hráč vie prečo tá váha. Úplne spokojný :)', 'nanakon'),
(3, 4, '2014-01-06 20:55:30', 'Packard Bell? WTF to si už nikdy nekúpim', 'nanakon'),
(4, 4, '2014-01-06 20:56:01', 'Ale zase take zle tie PB nie su', 'guest');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
