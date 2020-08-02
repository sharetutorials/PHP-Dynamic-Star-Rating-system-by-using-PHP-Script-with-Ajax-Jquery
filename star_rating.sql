-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2020 at 10:56 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `star_rating`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `company` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `company`) VALUES
(1, 'Samsung Smart TV 55inch', 'Samsung'),
(2, 'Macbook Pro 16inch 2020', 'Apple'),
(3, 'Galaxy Smart Watch 3', 'Samsung'),
(4, 'Mi Band 3', 'Xiaomi'),
(5, 'Hp Pavilion dv2117tx', 'HP Iindia'),
(6, 'iPad Pro 12inch', 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `product_id`, `rating`) VALUES
(1, 6, 3),
(2, 6, 1),
(3, 6, 5),
(4, 6, 5),
(5, 6, 5),
(6, 5, 4),
(7, 5, 1),
(8, 5, 5),
(9, 4, 3),
(10, 5, 5),
(11, 5, 5),
(12, 4, 5),
(13, 3, 3),
(14, 6, 1),
(15, 3, 5),
(16, 3, 1),
(17, 3, 1),
(18, 3, 1),
(19, 4, 1),
(20, 5, 1),
(21, 5, 2),
(22, 6, 5),
(23, 2, 2),
(24, 2, 5),
(25, 2, 1),
(26, 6, 3),
(27, 1, 3),
(28, 2, 2),
(29, 2, 2),
(30, 4, 1),
(31, 4, 1),
(32, 4, 1),
(33, 5, 2),
(34, 1, 1),
(35, 1, 1),
(36, 1, 1),
(37, 1, 1),
(38, 1, 5),
(39, 1, 5),
(40, 1, 5),
(41, 6, 5),
(42, 6, 5),
(43, 6, 5),
(44, 6, 5),
(45, 6, 5),
(46, 6, 5),
(47, 6, 5),
(48, 6, 5),
(49, 6, 4),
(50, 4, 4),
(51, 2, 4),
(52, 1, 4),
(53, 6, 1),
(54, 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
