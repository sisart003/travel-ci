-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 20, 2025 at 03:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `uusers`
--

CREATE TABLE `uusers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uusers`
--

INSERT INTO `uusers` (`id`, `email`, `password`, `image`, `is_admin`) VALUES
(1, 'stoyang.1996@gmail.com', '25f9e794323b453885f5181f1b624d0b', '1739726576_download_(3).jpg', 0),
(3, 'chrishartzz.estrada@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1739810654_bright-mina.jpg', 0),
(4, 'sgorek.watcher@twitch.tv', 'e10adc3949ba59abbe56e057f20f883e', '1739812403_440202361_943832561081648_2457058894368608638_n.jpg', 1),
(10, 'dionela.marilag@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'download.jpg', 0),
(11, 'vanda.notebook@manila.com', 'e10adc3949ba59abbe56e057f20f883e', '1740018259_download_(1).jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uusers`
--
ALTER TABLE `uusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uusers`
--
ALTER TABLE `uusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
