-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2014 at 01:08 PM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'seva', 'seva', 'demo@demo.com', 'fe01ce2a7fbac8fafaed7c982a04e229');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `seva_product`
--

INSERT INTO `seva_product` (`id`, `web_page_no`, `brand`, `sku_code`, `product_name`, `description`, `weight`, `length`, `height`, `width`, `freebies`, `wash_care`, `other_features`, `disclamer`, `sleeves`, `neck`, `color`, `size`, `wearability`, `fabric`, `mrp`, `s_price`, `f_mode`, `courier_type`, `wooden_packaging`, `vol_weight`, `inventory`, `shipping_time`) VALUES
(1, 1, '', 'as', 'as', 'as', '12', '12', '12', '12', 'no', 'no', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 700, 500, 'as', 'as', 'as', 'as', 'as', '7'),
(2, 1, '', 'as', 'as', 'as', '12', '12', '12', '12', 'no', 'no', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 700, 500, 'as', 'as', 'as', 'as', 'as', '7'),
(3, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', ''),
(4, 1, '', 'as', 'as', 'as', '12', '12', '12', '12', 'no', 'no', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 'as', 700, 500, 'as', 'as', 'as', 'as', 'as', '7'),
(5, 1, 'as', 'as', 'as', 'as', '1112', '12', '12', '12', 'no', 'as', 'as', 'as', 'as', 'as', 'as', 'sa', 'sa', 'sa', 500, 400, 'sa', 'sa', 'sa', 'as', 'sa', '7');

-- --------------------------------------------------------

--
-- Table structure for table `seva_security_q`
--

CREATE TABLE IF NOT EXISTS `seva_security_q` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `seva_security_q`
--

INSERT INTO `seva_security_q` (`id`, `question`) VALUES
(1, 'Who is your childhood friend ?'),
(2, 'What is your mother name ?'),
(5, 'What is your first mobile no ?');

-- --------------------------------------------------------

--
-- Table structure for table `seva_user`
--

CREATE TABLE IF NOT EXISTS `seva_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `security_question` varchar(120) NOT NULL,
  `secure_answer` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `contact` bigint(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `pincode` int(11) NOT NULL,
  `billingaddress` text NOT NULL,
  `shippingaddress` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `seva_user`
--

INSERT INTO `seva_user` (`id`, `firstname`, `lastname`, `gender`, `email`, `password`, `security_question`, `secure_answer`, `dob`, `contact`, `mobile`, `address`, `state`, `city`, `country`, `pincode`, `billingaddress`, `shippingaddress`) VALUES
(1, 'vikas', 'ambekar', 'm', 'demo1@demo.com', 'asasasas', '', '', '0000-00-00', 12121212, 12121212, 'asasas asasas', 'Maharashtra', 'mumbai', '', 400060, 'jog', 'jog');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `comp_name` varchar(255) NOT NULL,
  `co_fname` varchar(255) NOT NULL,
  `co_lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `comp_add` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `comp_name`, `co_fname`, `co_lname`, `email`, `contact_no`, `comp_add`, `city`, `state`, `pincode`) VALUES
(1, 'demo', 'd', 'd', 'd', 'd', 'd d', 'd', 'DE', 'd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
