-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2025 at 06:15 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `image`) VALUES
(2, 'Gorek', 'Watcher', 'toyang.1996@gmail.com', '$2y$10$r99.Bt6Xt4etuO.lQKJ8..Q91jlv.a8DFXLIvzxvnGXSdG5vdMsk2', '1739519438_sisart003.jpg'),
(3, 'Andrew', 'Worldwide', 'femslasher@email.com', '$2y$10$iNv2KN8N4owkjAupriB5G./9GApqsZ8ZeMMaeJFA3IoNBB0YXt4uu', '1739519589_⌗.jpg'),
(4, 'json', 'server', 'json.server@npm.com', '$2y$10$IdWzCm0ix2dlVpQ8j55MNeop68VRq53FnvHiOgLziCP0G1OPEFmaO', 'default.jpg'),
(5, 'autopy', 'boringstuff', 'auto.boring@python.com', '$2y$10$dZapHE/aZQ63g1dWvOhs2.dLP8UZCD8HUiTU.ZdrvQHSB0JuTwN/S', 'default.jpg'),
(6, 'Forsen', 'Vtuber', 'forsen.vtube@gmail.com', '$2y$10$hJco0vtVL730YmgbAtINhOMCCikLYgiupRdGz17MJLXyLGUpVyrQe', '1739529996_download_(1).jpg'),
(7, 'Fecomi', 'Outlet', 'fecomi.outlet@space.com', '$2y$10$Iw0tVSyE5tiVizXisFguBeh3k7hizuRZxTyYjqgXYNxxwN8g0fO9.', '1739530081_download.jpg'),
(8, 'Marilag', 'Kinamada', 'tangina.mo@dionela.com', '$2y$10$o5LqD/HfD.lj/tVSPRwxBOKfd7EM7GxIs4PBfrgoGZ6E/a31koKXG', '1739533082_440202361_943832561081648_2457058894368608638_n.jpg'),
(9, 'caicailun', 'yolee', 'cai.yolee@twitch.com', '$2y$10$fHh.910621dlmO2xnmBqCOt23HASw3P7Y/rfMjstNnct8m8ihjnUO', '1739536497_download_(2).jpg'),
(10, 'Yakult', 'Brothers', 'yakul.bro@gmail.com', '$2y$10$Lyb2CsNqFeqkL2c4ocu0i.XBwtLMpf8E/fuqIuj.lm8aN4ALKMita', 'default.jpg'),
(11, 'Kevin', 'Durant', 'kevin.durant@nba.com', '$2y$10$xH9ioUIy8ObbhJRNox3hKupoUnefRKethzSD7Wm6CYoDSITgDzKle', '1739592891_338319020_160255543625833_2498117708309366043_n.jpg'),
(12, 'Taylor', 'Swift', 'taylor.swift@tickets.com', '$2y$10$v3hOX9lyQ/ek3/M1GH9HGOc77II8eVM9i/7ABCFnJK4m2d8NQW50.', '123456.jpg'),
(13, 'Minari', 'Twice', 'mina.twice@jyp.com', '$2y$10$unW1HiMZvbNxUg5e1Vro2uPTN/d544JkO2j5ugOADuILcU68mhrtu', '1739593144_download_(3).jpg'),
(14, 'toyang', 'bartolome', 'toyang.bars@gmail.com', '$2y$10$e800DgB.80.6FXDv7L8ATeKOLzjcFYQzGKlDXTQ3STfKrZJavcHEy', '1739594862.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
