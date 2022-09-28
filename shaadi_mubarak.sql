-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 28, 2022 at 12:59 PM
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
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `food_id` int(2) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(500) NOT NULL,
  `food_price` int(4) NOT NULL,
  `type` varchar(500) NOT NULL,
  PRIMARY KEY (`food_id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `food_price`, `type`) VALUES
(1, 'Kurkuri Amchoori Bhindi Chaat', 200, 'Appetizer'),
(2, 'Beetroot and Feta Tikki', 180, 'Appetizers'),
(3, 'Stuffed Tandoori Platter', 170, 'Appetizers'),
(4, 'Assorted Vegetable Pakoras', 165, 'Appetizers'),
(5, 'Paneer Chandini Seekh', 170, 'Appetizers'),
(6, 'Amravati Kozhi Varuval', 195, 'Appetizers'),
(7, 'Tawa Shrimp Roast', 180, 'Appetizers'),
(8, 'Amritsari Fish Fry', 180, 'Appetizers'),
(9, 'Mughlai Paneer Tikka', 175, 'Tandoori and Grills'),
(10, 'Peshwari Bharwan Aloo', 170, 'Tandoori and Grills'),
(11, 'Tandoori Subzi Platter', 180, 'Tandoori and Grills'),
(12, 'Tandoori Chicken', 210, 'Tandoori and Grills'),
(13, 'Chicken Chops Afghani', 165, 'Tandoori and Grills'),
(14, 'Murg Makhan Malai', 160, 'Tandoori and Grills'),
(15, 'Classic Chicken Tikka', 170, 'Tandoori and Grills'),
(16, 'Murgh Reshmi Kabab', 180, 'Tandoori and Grills'),
(17, 'Tandoori Shrimp', 200, 'Tandoori and Grills'),
(18, 'Moghul Signature Malai Kofta', 210, 'Main Course'),
(19, 'Chukunder Sham Savera', 200, 'Main Course'),
(20, 'Paneer Jalfrezi', 220, 'Main Course'),
(21, 'Old Delhi Butter Paneer', 180, 'Main Course'),
(22, 'Paneer Mirch Ka Salan', 190, 'Main Course'),
(23, 'Methi Malai Mattar', 190, 'Main Course'),
(24, 'Channa Amritsari', 185, 'Main Course'),
(25, 'Subzi Diwani Handi', 180, 'Main Course'),
(26, 'Classic Bhindi Masala', 175, 'Main Course'),
(27, 'Old Delhi Butter Chicken', 200, 'Main Course'),
(28, 'Murg Tikka Masala', 210, 'Main Course'),
(29, 'Badshai Murgh ka Salan', 200, 'Main Course'),
(30, 'Murgh Hyderabadi Curry', 220, 'Main Course'),
(31, 'Naan/Butter Naan/Roti', 25, 'Rotis'),
(32, 'Aloo Paratha/Pudina Paratha/ Kabuli Paratha', 30, 'Rotis'),
(33, 'Kandhari Naan', 25, 'Rotis'),
(34, 'Chilli Cheese Naan/Kheema Naan', 30, 'Rotis'),
(35, 'Bullet Naan', 35, 'Rotis'),
(36, 'Chapati', 20, 'Rotis'),
(37, 'Plain Basmati', 140, 'Rice'),
(38, 'Kashmiri Pulao', 170, 'Rice'),
(39, 'Veg Biryani', 180, 'Rice'),
(40, 'Lachnawi Veg Dum Biryani', 185, 'Rice'),
(41, 'Lachnawi Murgh Dum Biryani', 200, 'Rice'),
(42, 'Shrimp Biryani', 240, 'Rice'),
(43, 'Goat Dum Biryani', 280, 'Rice'),
(44, 'Raita', 120, 'Accompaniments'),
(45, 'Dahi Bhalla', 130, 'Accompaniments'),
(46, 'Green Salad', 125, 'Accompaniments'),
(47, 'Masala Papad', 80, 'Accompaniments'),
(48, 'Kulfi Falooda', 90, 'Desserts'),
(49, 'Gulab Jamun', 90, 'Desserts'),
(50, 'Ice Creams', 100, 'Desserts'),
(51, 'Gajjar Halwa', 110, 'Desserts'),
(52, 'Lava Cake', 140, 'Desserts'),
(53, 'Casata Ice Cream', 140, 'Desserts');

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
