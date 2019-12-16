-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 16, 2019 at 01:03 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `product_panel` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `product_push` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `product_users` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `product_lang` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `product_content` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `product_storage` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `product_transfer` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `product_email_support` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `product_plugins` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `product_phone_support` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_panel`, `product_push`, `product_users`, `product_lang`, `product_content`, `product_storage`, `product_transfer`, `product_email_support`, `product_plugins`, `product_phone_support`, `product_price`) VALUES
(1, 'Medium', 'Dashboard', 'Push', 'Ubegrænset antal brugere', 'Understøtter 1 sprog', 'Op til 3 content typer', '1 GB data storage', '1 GB data transfer', 'Email support', '', '', '1.000'),
(2, 'Medium', 'Dashboard', 'Push', 'Ubegrænset antal brugere', 'Understøtter 3 sprog', 'Op til 5 content typer', '5 GB data storage', '5 GB data transfer', 'Email support', 'Mulighed for custom plugins', '', '2.000'),
(3, 'Large', 'Dashboard', 'Push', 'Ubegrænset antal brugere', 'Understøtter 5 sprog', 'Op til 10 content typer', '25 GB data storage', '25 GB data transfer', 'Email support', 'Mulighed for custom plugins', 'Telefon support', '5.000'),
(4, 'Enterprice', 'Dashboard', 'Push', 'Ubegrænset antal brugere', 'Ubegrænset antal sprog', 'Ubegrænset content typer', 'Ubegrænset data storage', 'Ubegrænset data transfer', 'Email support', 'Mulighed for custom plugins', 'Telefon support', 'Fra 10.000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
