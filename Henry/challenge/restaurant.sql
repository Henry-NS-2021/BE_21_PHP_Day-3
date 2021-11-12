-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2021 at 04:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--
CREATE DATABASE IF NOT EXISTS `restaurant` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `restaurant`;

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `dishID` tinyint(4) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` float NOT NULL,
  `meal_description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dishID`, `image`, `name`, `price`, `meal_description`) VALUES
(1, 'img/burek.jpg', 'burek', 3.25, 'Fried doe with white cheese filling'),
(2, 'img/durum.jpg', 'durum', 3.99, 'Flat wrap with veal, cabage salad, onions and pickles'),
(3, 'img/kebab.jpg', 'kebab', 3.7, 'Flat bread with chicken, tomatoes, onions, mixed salad, filled with a yoghurt sauce and chili spices'),
(5, 'https://www.scattidigusto.it/wp-content/uploads/2020/09/pizza-margherita-Diametro-33-Napoli.jpg', 'Henry', 10, 'Pizza with fresh mozzarella, tomatoes, basil leaves, oregano, and olive oil'),
(6, 'https://www.brunswick.ca/wp-content/uploads/2019/08/CSK_0701_1083-large.jpg', 'Pizza Hawai', 11.25, 'Hawaiian-style pizza topped with tomato sauce, cheese, ham and pineapple');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dishID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `dishID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
