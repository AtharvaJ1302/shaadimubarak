-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2022 at 03:15 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shaadi_mubarak`
--

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(20) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'maharashtra'),
(2, 'goa'),
(3, 'jammuandkashmir'),
(4, 'delhi'),
(5, 'kerala'),
(6, 'westbengal'),
(7, 'punjab'),
(8, 'gujarat'),
(9, 'telangana'),
(10, 'rajasthan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(14, 'Eeshan Vaidya', 'eeshan.vaidya.professional@gmail.com', '8fc2ec7f679adacbea6398eb0550cf33'),
(13, 'Sakshi Chikorde', 'sakshichikorde16@gmail.com', '45aac7a3110c4b2cd98796bdacddf662'),
(11, 'Huzaifa Faizee', 'huzaifataherfaiz@gmail.com', '42102e50e0add62ec8d9aa459a4006dd'),
(12, 'Aditi Palkar', 'aditipalkar111@gmail.com', '214a4c70683d0aae3e4986d24e161a0f'),
(15, 'Atharva Karkar', 'atharvakarkar@gmail.com', '21d3a1dca28f770145988b339478620e'),
(16, 'Komal Shrimal', 'komalshrimal02@gmail.com', '974bd820a99809d664cfd455ea3d7ad5'),
(17, 'Atharva Joshi', 'atharvaj1302@gmail.com', '29e952e06576e04edf8c5f185c27023b'),
(18, 'Just A Boy', 'justaboy@gmail.com', 'bf14c12f94557bf7dcf2a089e38015c8'),
(50, 'Komal Balan', 'dsinha@yahoo.co.in', '31e819859f87b7b7411c0a19736dac18'),
(48, 'Radha Shetty', 'mutti.nutan@yahoo.com', 'c5b425c9d0ba727c1bbfb0bb00f63272'),
(47, 'Ujwal Mani', 'parminder39@nadig.org', '41a29e53e7f20ea416ef12ad2815ded2'),
(46, 'Anannya Parikh', 'feroz.verma@yahoo.com', 'be818db43d2f5db01a3a04649e12e70b'),
(38, 'Charlie Hayer', 'ubail@rediffmail.com', 'a23369bd115ecf51855b9b3bea43800e'),
(63, 'Robert Davis', 'robertdavis@gmail.com', '684c851af59965b680086b7b4896ff98');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE IF NOT EXISTS `venue` (
  `venue_id` int(11) NOT NULL AUTO_INCREMENT,
  `venue_name` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`venue_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Contains Venue Details';

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `venue_name`, `price`, `description`, `state_id`) VALUES
(1, 'taj hotel', 30000, ';sk;sajcjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjpodjpsdjalsd jdiilasjdkasbd lqwwidqiohdlqwdmqwldihqwid jsdlglmdlasihdbdnLSIPOWUIWDNaslk;ISHvba;kdkagdlsdk', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
