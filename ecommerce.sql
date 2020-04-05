-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 05, 2020 at 05:51 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) NOT NULL,
  `pass` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`) VALUES
(1, 'admin', '12kunal');

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

DROP TABLE IF EXISTS `myguests`;
CREATE TABLE IF NOT EXISTS `myguests` (
  `item_id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`item_id`, `user_id`, `quantity`) VALUES
(13, '', 0),
(21, '', 0),
(22, '', 0),
(3, '', 0),
(21, 'p998@gmail.com', 0),
(23, 'p998@gmail.com', 0),
(24, 'p998@gmail.com', 0),
(16, '', 0),
(3, '', 17),
(4, 'tt@gmail.com', 5),
(18, '', 6),
(3, '', 5),
(4, '', 5),
(3, 'tt@gmail.com', 3),
(17, '', 5),
(13, 'ypp@gmail.com', 5),
(7, '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orderp`
--

DROP TABLE IF EXISTS `orderp`;
CREATE TABLE IF NOT EXISTS `orderp` (
  `item_id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderp`
--

INSERT INTO `orderp` (`item_id`, `user_id`, `quantity`) VALUES
(21, 'yp@gmail.com', 0),
(22, 'yp@gmail.com', 0),
(25, 'yp@gmail.com', 0),
(23, 'yp@gmail.com', 0),
(24, 'yp@gmail.com', 0),
(21, 'yp@gmail.com', 0),
(22, 'yp@gmail.com', 0),
(21, 'yp@gmail.com', 0),
(21, 'yp@gmail.com', 0),
(21, 'yp@gmail.com', 0),
(21, 'yp@gmail.com', 0),
(3, 'yp@gmail.com', 0),
(3, 'yp@gmail.com', 0),
(4, 'yp@gmail.com', 0),
(3, 'yp@gmail.com', 0),
(5, 'yp@gmail.com', 0),
(4, 'yp@gmail.com', 0),
(3, 'yp@gmail.com', 0),
(9, 'yp@gmail.com', 0),
(4, 'yp@gmail.com', 0),
(3, 'yp@gmail.com', 0),
(4, 'yp@gmail.com', 0),
(3, 'yp@gmail.com', 0),
(4, 'yp@gmail.com', 0),
(15, 'yp@gmail.com', 0),
(4, 'yp@gmail.com', 0),
(16, 'yp@gmail.com', 0),
(9, 'yp@gmail.com', 0),
(7, 'yp@gmail.com', 0),
(17, 'yp@gmail.com', 0),
(3, 'yp@gmail.com', 0),
(3, 'yp@gmail.com', 0),
(5, 'yp@gmail.com', 0),
(16, 'yp@gmail.com', 0),
(4, 'yp@gmail.com', 0),
(4, 'yp@gmail.com', 17),
(3, 'yp@gmail.com', 2),
(4, 'yp@gmail.com', 45),
(3, 'yp@gmail.com', 5),
(5, 'yp@gmail.com', 8),
(4, 'yp@gmail.com', 5),
(4, 'yp@gmail.com', 8),
(4, 'yp@gmail.com', 5),
(4, 'yp@gmail.com', 5),
(3, 'yp@gmail.com', 5),
(3, 'yp@gmail.com', 5),
(4, 'yp@gmail.com', 5),
(3, 'yp@gmail.com', 5),
(3, 'yp@gmail.com', 5),
(3, 'yp@gmail.com', 5),
(3, 'yp@gmail.com', 1),
(3, 'yp@gmail.com', 5),
(4, 'yp@gmail.com', 5),
(16, 'yp@gmail.com', 5),
(9, 'yp@gmail.com', 5),
(3, 'yp@gmail.com', 6),
(5, 'yp@gmail.com', 9),
(4, 'yp@gmail.com', 17),
(3, 'yogi@gmail.com', 5),
(6, 'yogeshsingh@gmail.com', 5),
(18, 'yogeshsingh@gmail.com', 3),
(4, 'yog@gmail.com', 5),
(3, 'yog@gmail.com', 5),
(4, 'py27091998@gmail.com', 5),
(3, 'py27091998@gmail.com', 5),
(7, 'py27091998@gmail.com', 6),
(4, 'py27091998@gmail.com', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pr`
--

DROP TABLE IF EXISTS `pr`;
CREATE TABLE IF NOT EXISTS `pr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr`
--

INSERT INTO `pr` (`id`, `image`, `price`, `name`, `quantity`, `discription`, `category`) VALUES
(1, 'download (2).jpg', '1000', 'jeans', 2, 'best', 'gents_clothes'),
(2, 'download (2).jpg', '1000', 'jeans', 2, 'best', 'gents_clothes'),
(3, 'download.jpg', '1000', 'jeans', 2, 'best', 'jeans'),
(4, 'c8fa8e1831f541aced3d1cbe80c965d83621a6fc2854ed8e1b34af382daadaabdownload (1).jpg', '1000', 'jeans', 3, 'this is best', 'jeans'),
(5, '0d9269b52972fd2728e119f11e9588b6download (2).jpg', '1000', 'jeans', 2, 'best is here', 'jeans'),
(6, 'download (1).jpg', '1000', 'jeans', 2, 'good is best', 'jeans'),
(7, 'download.jpg', '1000', 'jeans', 2, 'this is best', 'jeans'),
(11, 'images (1).jpg', '1000', 'shirts', 2, 'best shirts is here', 'shirts'),
(9, 'download (2).jpg', '1000', 'shirts', 2, 'best is here', 'jeans'),
(19, 'download (2).jpg', '2', 'ewewqeqe', 2, 'dsdsadsa', 'shirts'),
(12, 'download (3).jpg', '1000', 'shirts', 2, 'best is here', 'shirts'),
(13, 'download (5).jpg', '1000', 'pents', 2, 'best is here', 'pents'),
(14, 'download (5).jpg', '1000', 'pent', 2, 'best is here', 'pents'),
(15, 'download (4).jpg', '1000', 'pent', 2, 'best is here', 'pents'),
(16, 'download (6).jpg', '1000', 'shoes', 2, 'best is here', 'shoes'),
(17, 'download (8).jpg', '1000', 'shoes', 2, 'best is here', 'shoes'),
(20, 'download (8).jpg', '50', 'yogi', 5, 'this is it', 'jeans'),
(21, 'download (8).jpg', '50', 'yogi', 5, 'this is it', 'jeans');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'watch1', 10000),
(2, 'watch2', 100000),
(3, 'watch3', 10000),
(4, 'watch4', 10000),
(5, 'camera1', 20000),
(6, 'camera2', 100000),
(7, 'camera3', 10000),
(8, 'camera4', 30000),
(9, 'camera5', 40000),
(10, 'camera6', 800000),
(11, 'camera7', 90000),
(12, 'camera8', 70000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(53, 'yogi ', 'py27091998@gmail.com', '6b207d7509d8909a1534030c05296eaa', '7503201418', 'new delhi', '7503201418');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
