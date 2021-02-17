-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2020 at 03:00 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `date` timestamp NOT NULL,
  `status` varchar(11) NOT NULL,
  `deleted` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date`, `status`, `deleted`) VALUES
(1, 'admin', 'admin', '2020-02-14 15:44:12', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

DROP TABLE IF EXISTS `lecturer`;
CREATE TABLE IF NOT EXISTS `lecturer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(222) NOT NULL,
  `lastname` varchar(222) NOT NULL,
  `role` varchar(222) NOT NULL,
  `photo` varchar(212) NOT NULL,
  `path` varchar(222) NOT NULL,
  `date` timestamp NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`id`, `firstname`, `lastname`, `role`, `photo`, `path`, `date`, `status`) VALUES
(1, 'kola', 'jide', 'lecturer', 'two.PNG', '/file/two.PNG', '2020-02-14 16:07:47', '0'),
(2, 'john ', 'meals', 'lecturer', '2.PNG', './file/2.PNG', '2020-02-14 16:34:03', '0'),
(3, 'General', 'Zunday', 'lecturer', 'tm-img-03-tn.jpg', './file/tm-img-03-tn.jpg', '2020-02-19 02:57:06', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rater` varchar(222) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `rates` varchar(222) NOT NULL,
  `date` timestamp NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rater`, `lecturer_id`, `rates`, `date`, `status`) VALUES
(1, 'not disclosed', 1, '3', '2020-02-14 16:14:46', '0'),
(2, 'ali', 1, '1', '2020-02-14 17:34:42', '0'),
(3, 'ali', 1, '3', '2020-02-14 17:35:47', '0'),
(4, 'ali', 3, '3', '2020-02-19 02:57:36', '0'),
(5, 'ali', 1, '4', '2020-02-19 02:59:24', '0'),
(6, 'ali', 3, '2', '2020-02-19 02:59:40', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
