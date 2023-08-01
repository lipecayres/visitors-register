-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 09:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curiousgame`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagestest`
--

CREATE TABLE `imagestest` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imagestest`
--

INSERT INTO `imagestest` (`id`, `name`, `image`) VALUES
(1, 'gym.png', './uploads/gym.png');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `fname`, `city`) VALUES
(1, 'Felipe', 'Toronto'),
(2, 'Peter Parker', 'New York'),
(3, 'Batman', 'Gotham'),
(4, 'Black Panther', 'Wakanda'),
(5, 'Harry Potter', 'Hogsmeade'),
(6, 'Superman', 'Metropolis'),
(7, 'Shrek', 'Far Far Away Kingdom '),
(33, 'Shikamaru', 'Hidden Leaf Village'),
(37, 'Ichigo', 'Soul Society');

-- --------------------------------------------------------

--
-- Table structure for table `phpadmins`
--

CREATE TABLE `phpadmins` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phpadmins`
--

INSERT INTO `phpadmins` (`user_id`, `first_name`, `last_name`, `username`, `password`) VALUES
(2, 'Felipe', 'Cayres', 'lipe', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db'),
(6, 'test', 'test', 'test_', 'c6001d5b2ac3df314204a8f9d7a00e1503c9aba0fd4538645de4bf4cc7e2555cfe9ff9d0236bf327ed3e907849a98df4d330c4bea551017d465b4c1d9b80bcb0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagestest`
--
ALTER TABLE `imagestest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phpadmins`
--
ALTER TABLE `phpadmins`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagestest`
--
ALTER TABLE `imagestest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `phpadmins`
--
ALTER TABLE `phpadmins`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
