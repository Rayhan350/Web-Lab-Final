-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 06, 2021 at 02:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `WebLabFinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `dress`
--

CREATE TABLE `dress` (
  `id` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `seller` varchar(55) NOT NULL,
  `price` int(55) NOT NULL,
  `available` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dress`
--

INSERT INTO `dress` (`id`, `name`, `seller`, `price`, `available`) VALUES
('01', 'shirt', 'rayhan', 1000, 20),
('02', 'panjabi', 'rayhan', 1000, 100),
('03', 'troujar', 'rayhan', 1000, 200);

-- --------------------------------------------------------

--
-- Table structure for table `electronic`
--

CREATE TABLE `electronic` (
  `id` varchar(20) NOT NULL,
  `name` varchar(55) NOT NULL,
  `seller` varchar(55) NOT NULL,
  `price` int(55) NOT NULL,
  `available` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electronic`
--

INSERT INTO `electronic` (`id`, `name`, `seller`, `price`, `available`) VALUES
('01', 'mobile', 'rayhan', 20000, 20),
('02', 'pc', 'rayhan', 50000, 20),
('03', 'Laptop', 'rayhan', 50000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `grocery`
--

CREATE TABLE `grocery` (
  `id` varchar(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `seller` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  `available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grocery`
--

INSERT INTO `grocery` (`id`, `name`, `seller`, `price`, `available`) VALUES
('01', 'Sugar', 'rayhan', 60, 20),
('02', 'noddles', 'rayhan', 20, 100),
('03', 'chanachur', 'rayhan', 100, 200);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `seller` varchar(50) NOT NULL,
  `price` int(15) NOT NULL,
  `available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `seller`, `price`, `available`) VALUES
('01', 'mobile', 'rayhan', 20000, 10),
('02', 'pc', 'rayhan', 50000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(20) NOT NULL,
  `name2` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `name2`, `email`, `user`, `password`) VALUES
('rayhan', 'kabir', 'rayhan@gmail.com', '1557', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
