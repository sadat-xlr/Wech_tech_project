-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 03:15 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1038, 'Snacks'),
(1039, 'Meat'),
(1060, 'Vegetable'),
(1088, 'Snacks2'),
(1089, 'Fruits'),
(1091, 'Fish');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `e_name` varchar(30) NOT NULL,
  `e_email` varchar(40) NOT NULL,
  `e_phone` int(30) NOT NULL,
  `e_type` varchar(30) NOT NULL,
  `e_bloodgrp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `e_name`, `e_email`, `e_phone`, `e_type`, `e_bloodgrp`) VALUES
(4, 'pikachuy', 'pkemon@gamil.com', 233, 'Staff', 'AB-'),
(5, 'pikachu', 'sadat430@gmail.com', 11111111, 'Manager', 'B+'),
(10, 'asda', 'sadat430@gmail.com', 11111111, 'Admin', 'O+'),
(11, 'uuuuuuu', 'sadat430@gmail.com', 11111111, 'Staff', 'A+'),
(12, 'jjjjjjjjjjjjjj', 'sadat430@gmail.com', 11111111, 'Manager', 'A+'),
(13, 'new', 'sadat430@gmail.com', 11111111, 'Manager', 'A-');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `product` varchar(20) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `discount` decimal(3,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `product`, `price`, `discount`) VALUES
(1, 'Meat', 'Goat', '11.00', '0'),
(13, 'Vegetable', 'Tomato', '11.00', '0'),
(14, 'Fish', 'Crab', '800.00', '6'),
(20, 'Fruit', 'Apple', '600.00', '0'),
(21, 'Meat', 'Goat', '20.00', '1'),
(22, 'Fruit', 'Lichi', '0.00', '0'),
(23, 'Meat', 'Duck', '160.00', '0'),
(24, 'Vegetable', 'Tomato', '5.00', '0'),
(25, 'snacks', 'chips', '30.00', '10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `details` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `details`, `filename`) VALUES
(434, 'Beef', 600, 'Meat', 'sdhfkdfkfgfgf', '282849178.jpg'),
(438, 'Fool kopi', 500, 'Fruits', 'fresh vegetable', 'broccoli.jpg'),
(443, 'birani', 220, 'Snacks', 'aaaaaaaaaaa', 'Dinosour.jpg'),
(444, 'apple', 220, 'Fruits', 'fruits', '_109228504_apples1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `phoneno`, `type`) VALUES
(68, 'Snacks', 'emp', '12', 'asdasd', 23123, 'staff'),
(69, 'asdas', 'mgr', '12', 'asdasd', 23123, 'manager'),
(71, 'sdas', 'humaun', 'sdfsdf', 'vxcvxcvxc@gmailc,o', 23123, 'user'),
(72, 'Snacksy', 'user', '12', 'h@hy.goo', 23123, 'user'),
(73, 'Fool kopi', 'admin', '12', 'vxcvxcvxc@gmailc,o', 23123, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1092;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=445;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
