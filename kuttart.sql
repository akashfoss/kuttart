-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2018 at 03:12 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuttart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `category`) VALUES
(1, 'Samsung J2 Pro', 'images/d4.jpg', 100.00, 'Electronics'),
(11, 'frok', 'images/k1.jpg', 100.00, 'Kids'),
(7, 'bags', 'images/w2.jpg', 55.00, 'Women'),
(4, 'hat', 'images/k2.jpeg', 10.00, 'Kids'),
(5, 't-shirt', 'images/men5.jpg', 50.00, 'Mens'),
(6, 'captain ', 'images/t1.jpeg', 10.00, 'Toys'),
(12, 'boy wear', 'images/k3.jpeg', 100.00, 'Kids'),
(13, 'k cap', 'images/k4.jpeg', 100.00, 'Kids'),
(14, 'k wear', 'images/k5.jpeg', 100.00, 'Kids'),
(15, 'girl wear', 'images/k6.jpeg', 100.00, 'Kids'),
(16, 'puma pants', 'images/men1.jpg', 100.00, 'Mens'),
(17, 'watch', 'images/men2.jpg', 800.00, 'Mens'),
(18, 'shirt', 'images/men6.jpg', 400.00, 'Mens'),
(19, 'G Cap', 'images/men4.jpg', 10.00, 'Mens'),
(20, 'web cam', 'images/e1.jpeg', 600.00, 'Electronics'),
(21, 'charger', 'images/e3.jpeg', 60.00, 'Electronics'),
(22, 'plug', 'images/e4.jpeg', 20.00, 'Electronics'),
(23, 'speaker', 'images/e7.jpeg', 10.00, 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(155) DEFAULT NULL,
  `city` varchar(155) DEFAULT NULL,
  `country` varchar(155) DEFAULT NULL,
  `pin` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `username_3` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
