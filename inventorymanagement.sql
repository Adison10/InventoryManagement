-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 29, 2022 at 04:33 PM
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
-- Database: `inventorymanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `distribution`
--

DROP TABLE IF EXISTS `distribution`;
CREATE TABLE IF NOT EXISTS `distribution` (
  `Sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `E_name` text NOT NULL,
  `Department` varchar(50) NOT NULL,
  `ID_no` varchar(20) NOT NULL,
  `Item` varchar(30) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Date_of_issue` date NOT NULL,
  PRIMARY KEY (`Sl_no`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribution`
--

INSERT INTO `distribution` (`Sl_no`, `E_name`, `Department`, `ID_no`, `Item`, `Quantity`, `Date_of_issue`) VALUES
(1, 'Ram', 'IT', 'E101', 'Laptop', 1, '2022-06-29'),
(2, 'Shyam', 'IT', 'E102', 'Laptop', 1, '2022-06-29'),
(3, 'Kumar', 'MBA', 'E103', 'Laptop', 1, '2022-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `Sl_No` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `po_no` varchar(100) NOT NULL,
  `r_date` date NOT NULL,
  `remark` varchar(200) NOT NULL,
  PRIMARY KEY (`Sl_No`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Sl_No`, `item`, `qty`, `po_no`, `r_date`, `remark`) VALUES
(1, 'aaa', 111, 'asdasf', '2021-01-01', 'sasffsdf'),
(2, 'bb', 12, 'gfdgfd', '2021-08-09', 'gfhhfh'),
(3, 'bb', 12, 'gfdgfd', '2021-08-09', 'gfhhfh'),
(4, 'bb', 12, 'gfdgfd', '2021-08-09', 'gfhhfh'),
(5, 'bb', 12, 'gfdgfd', '2021-08-09', 'gfhhfh'),
(6, 'bb', 12, 'gfdgfd', '2021-08-09', 'gfhhfh'),
(7, 'we', 12, '23', '2021-08-09', 'et45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(155) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `password` varchar(555) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=user, 2=admin',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Deactive',
  `date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `password`, `role`, `status`, `date`, `updated_date`) VALUES
(1, 'admin', 'admin@nic.com', '9d012110a6bb4d14bc9a8c5e219f37b3', 2, 1, '2015-05-15 04:09:18', '2015-05-15 04:09:18'),
(2, 'test', 'test@test.com', 'e99a18c428cb38d5f260853678922e03', 1, 1, '2015-06-01 10:34:06', '2015-06-01 11:06:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
