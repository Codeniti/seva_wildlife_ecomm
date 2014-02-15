-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2014 at 12:48 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seva`
--

-- --------------------------------------------------------

--
-- Table structure for table `seva_product`
--

CREATE TABLE IF NOT EXISTS `seva_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `web_page_no` int(20) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `sku_code` varchar(50) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `length` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `width` varchar(50) NOT NULL,
  `freebies` varchar(50) NOT NULL,
  `wash_care` varchar(255) NOT NULL,
  `other_features` varchar(255) NOT NULL,
  `disclamer` varchar(500) NOT NULL,
  `sleeves` varchar(255) NOT NULL,
  `neck` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `wearability` varchar(255) NOT NULL,
  `fabric` varchar(255) NOT NULL,
  `mrp` int(255) NOT NULL,
  `s_price` int(255) NOT NULL,
  `f_mode` varchar(255) NOT NULL,
  `courier_type` varchar(255) NOT NULL,
  `wooden_packaging` varchar(255) NOT NULL,
  `vol_weight` varchar(255) NOT NULL,
  `inventory` varchar(255) NOT NULL,
  `shipping_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
