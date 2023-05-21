-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 03:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leon_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `name`, `email`, `message`) VALUES
(1, 'ahmed', 'a@gmail.com', 'aaaaaaaaaah ah aaaaaaaaaaaaa'),
(2, 'mohamed', 'm@gmail.com', 'adsssss dddddddddd assssssssss'),
(3, 'khaled', 'k@gmail.com', 'hellooooooooooooooooooo'),
(4, 'ziad', 'ziad@gmail.com', 'iam very angry fix the issue'),
(5, 'ahmed', 'ahmed@gmail.com', 'help me plsssssssss!!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `productName`, `description`) VALUES
(1, 'images/portfolio-1.jpg', 'Project Name', 'My creative ability is very difficult to measure because it can manifest in so many surprising and.'),
(2, 'images/portfolio-2.jpg', 'Project Name', 'My creative ability is very difficult to measure because it can manifest in so many surprising and.'),
(3, 'images/portfolio-3.jpg', 'Project Name', 'My creative ability is very difficult to measure because it can manifest in so many surprising and.'),
(4, 'images/portfolio-4.jpg', 'Project Name', 'My creative ability is very difficult to measure because it can manifest in so many surprising and.'),
(5, 'images/portfolio-5.jpg', 'Project Name', 'My creative ability is very difficult to measure because it can manifest in so many surprising and.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'ahmed', 'ahmed@gmail.com', '123'),
(3, 'mohamed', 'mohamed@gmail.com', '123'),
(4, 'raghda', 'raghda@gmail.com', '123'),
(5, 'philopater', 'philopater@gmail.com', '123'),
(6, 'ahmed ali', 'ahmedali@gmail.com', '123'),
(7, 'mohamed ashraf', 'ma@gmail.com', '123'),
(8, 'sara', 's@gmail.com', '123'),
(9, 'samir', 'samir@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
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
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
