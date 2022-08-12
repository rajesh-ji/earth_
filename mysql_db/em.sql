-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 02:50 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `em`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_pass` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `confirm_pass`, `role_id`, `created_at`) VALUES
(1, '', 'admin@gmail.com', '123456', '', 1, '2022-07-28 07:16:46'),
(3, '', 'rajesh.ya2017@gmail.com', '111111', '', 0, '2022-07-29 17:38:07'),
(4, '', 'mike@gmail.com', '123456', '123456', 0, '2022-07-31 17:40:49'),
(5, '', 'rahul@gmail.com', '123456', '123456', 0, '2022-07-31 17:42:37'),
(6, '', 'demo@gmail.com', '123456', '123456', 0, '2022-07-31 17:44:30'),
(7, '', 'github@gmail.com', '123456', '123456', 0, '2022-07-31 17:49:39'),
(8, 'linux', 'linux@gmail.com', '123456', '123456', 0, '2022-07-31 17:50:55'),
(9, 'admin', 'rajesh.ya2017@gmail.com', '123456', '123456', 0, '2022-07-31 17:56:54'),
(10, 'thomas', 'thomas@gmail.com', '12345678', '12345678', 0, '2022-07-31 17:58:26'),
(11, 'hemp', 'hemp@gmail.com', '111111', '111111', 0, '2022-07-31 17:59:24'),
(12, 'demo1', 'demo@gmail.com', '123456', '123456', 0, '2022-07-31 18:00:14');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
