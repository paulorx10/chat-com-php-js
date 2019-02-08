-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2018 at 05:56 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `keylist`
--

DROP TABLE IF EXISTS `keylist`;
CREATE TABLE IF NOT EXISTS `keylist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsend` varchar(11) COLLATE utf8_bin NOT NULL,
  `idreceive` varchar(11) COLLATE utf8_bin NOT NULL,
  `keysms` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `keylist`
--

INSERT INTO `keylist` (`id`, `idsend`, `idreceive`, `keysms`) VALUES
(36, '1', '2', 5735),
(37, '1', '4', 4969),
(38, '4', '2', 2622),
(39, '2', '2', 4918);

-- --------------------------------------------------------

--
-- Table structure for table `smslist`
--

DROP TABLE IF EXISTS `smslist`;
CREATE TABLE IF NOT EXISTS `smslist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sms` varchar(150) COLLATE utf8_bin NOT NULL,
  `idsend` varchar(11) COLLATE utf8_bin NOT NULL,
  `idreceive` varchar(11) COLLATE utf8_bin NOT NULL,
  `keysms` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `smslist`
--

INSERT INTO `smslist` (`id`, `sms`, `idsend`, `idreceive`, `keysms`) VALUES
(49, 'DOTORA SATO SUA LINDA', '1', '2', '5735'),
(50, 'TKS <3', '2', '1', '5735'),
(51, 'PYTHO NOVO DEUS EGIPICIO ???', '1', '4', '4969'),
(52, 'KKK NUNCA VI NEM COMI, BY SILVIO...', '4', '1', '4969'),
(53, 'MAH OOOOEH QUEM QUER DINHER000', '4', '1', '4969'),
(54, '......', '1', '4', '4969'),
(55, 'sms', '4', '2', '2622'),
(56, 'sms user 1', '2', '2', '4918');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(16) COLLATE utf8_bin NOT NULL,
  `passwd` varchar(16) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `passwd`) VALUES
(1, 'user1', '123123'),
(2, 'user2', '123123'),
(3, 'user3', '123123'),
(4, 'user4', '123123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
