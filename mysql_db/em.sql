-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 11:37 AM
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
-- Table structure for table `add_farmer`
--

CREATE TABLE `add_farmer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `unit_name` varchar(255) NOT NULL,
  `loc` varchar(255) NOT NULL,
  `mem_since` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_farmer`
--

INSERT INTO `add_farmer` (`id`, `name`, `unit_name`, `loc`, `mem_since`) VALUES
(1, '0', '0', '0', '0000-00-00 00:00:00'),
(2, '0', '0', '0', '0000-00-00 00:00:00'),
(3, '0', '0', '0', '0000-00-00 00:00:00'),
(4, '0', '0', '0', '0000-00-00 00:00:00'),
(5, '0', '0', '0', '0000-00-00 00:00:00'),
(6, 'wer', 'ioj', 'ssssss', '0000-00-00 00:00:00'),
(7, 'demo', 'ginger', 'pnbe', '0000-00-00 00:00:00'),
(8, 'test1', 'kumar', 'ssssss', '0000-00-00 00:00:00'),
(9, 'ddd', 'dddd', 'pnbe', '0000-00-00 00:00:00'),
(10, 'aaa', 'sss', 'wqe', '2022-08-24 19:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `add_staff`
--

CREATE TABLE `add_staff` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` int(255) NOT NULL,
  `phone_num` int(10) NOT NULL,
  `email` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_staff`
--

INSERT INTO `add_staff` (`id`, `f_name`, `l_name`, `phone_num`, `email`) VALUES
(1, 'RAJESH', 0, 0, 0),
(2, 'ks', 1, 0, 0),
(3, 'ksr', 200, 2147483647, 0),
(4, 'RAJESH', 0, 2147483647, 0),
(5, 'RAJESH', 0, 2147483647, 0),
(6, 'RAJESH', 0, 2147483647, 0),
(7, 'hari', 12, 2222, 0),
(8, 'asa', 0, 0, 0),
(9, 'asa', 0, 0, 0),
(10, 'asa', 0, 0, 0),
(11, 'asa', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `add_unit`
--

CREATE TABLE `add_unit` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `phone_num` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `unit_loc` varchar(255) NOT NULL,
  `num_farmer` varchar(255) NOT NULL,
  `mem_since` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_unit`
--

INSERT INTO `add_unit` (`id`, `f_name`, `l_name`, `phone_num`, `email`, `unit_loc`, `num_farmer`, `mem_since`) VALUES
(1, 'RAJESH', 'YADAV', 0, '', '', '', '2022-08-24 17:43:35'),
(2, 'RAJESH', 'YADAV', 0, '', '', '', '2022-08-24 18:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `gen_info`
--

CREATE TABLE `gen_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pin` int(10) NOT NULL,
  `acreage_add` varchar(255) NOT NULL,
  `sec_cont` varchar(10) NOT NULL,
  `phone_sec` varchar(10) NOT NULL,
  `email_sec` varchar(255) NOT NULL,
  `farm_name` varchar(255) NOT NULL,
  `farm_web` varchar(255) NOT NULL,
  `farm_fb` varchar(255) NOT NULL,
  `farm_insta` varchar(255) NOT NULL,
  `num_acres` varchar(255) NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gen_info`
--

INSERT INTO `gen_info` (`id`, `name`, `phone_num`, `email`, `address`, `country`, `state`, `city`, `pin`, `acreage_add`, `sec_cont`, `phone_sec`, `email_sec`, `farm_name`, `farm_web`, `farm_fb`, `farm_insta`, `num_acres`, `user_id`) VALUES
(1, 'Rajesh', '778966666', 'rajesh.ya2017@gmail.com', 'Australian National Maritime Museum, Murray Street, Sydney NSW, Australia', '', '', '', 0, 'test area', '222222', '2222222222', 'ad@gmail.com', 'earth', 'earth', 'earth', ' earth', '34', 19),
(2, 'final', '25896352', 'adminfinal@gmail.com', 'Sydney NSW, Australia', '', '', '', 0, 's', '', '', '', '', '', '', '                    ', '', 22),
(22, 'Rajesh kumar', '1111222', 'admin@gmail.com', 'Sydney NSW, Australia', '', '', '', 0, 's', '', '', '', '', '', '', '                  ', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `operation_data`
--

CREATE TABLE `operation_data` (
  `id` int(11) NOT NULL,
  `erosion` varchar(50) NOT NULL,
  `Pest` varchar(50) NOT NULL,
  `Costs_Water` varchar(50) NOT NULL,
  `Costs_Electric` varchar(50) NOT NULL,
  `Costs_average` varchar(50) NOT NULL,
  `Costs_overall` varchar(50) NOT NULL,
  `Equipment` varchar(50) NOT NULL,
  `Custom_equip` varchar(50) NOT NULL,
  `facility` varchar(50) NOT NULL,
  `wifi` varchar(50) NOT NULL,
  `Cell_Service` varchar(50) NOT NULL,
  `radio` set('1','0') NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operation_data`
--

INSERT INTO `operation_data` (`id`, `erosion`, `Pest`, `Costs_Water`, `Costs_Electric`, `Costs_average`, `Costs_overall`, `Equipment`, `Custom_equip`, `facility`, `wifi`, `Cell_Service`, `radio`, `user_id`) VALUES
(1, 'test', 'test1', 'test2', 'test3', 'test4', 'test5', '1', 'test7', '', '', '', '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `soil_data`
--

CREATE TABLE `soil_data` (
  `id` int(11) NOT NULL,
  `dt_rec` date NOT NULL,
  `dt_rep` date NOT NULL,
  `lab_num` varchar(50) NOT NULL,
  `Organic` varchar(50) NOT NULL,
  `Soluble` varchar(50) NOT NULL,
  `ph` varchar(10) NOT NULL,
  `Nitrate_ppm` varchar(50) NOT NULL,
  `Phosphorus_ppm` varchar(50) NOT NULL,
  `Potassium_ppm` varchar(50) NOT NULL,
  `Sulfur_ppm` varchar(50) NOT NULL,
  `Zinc_ppm` varchar(50) NOT NULL,
  `Iron_ppm` varchar(50) NOT NULL,
  `Manganese_ppm` varchar(50) NOT NULL,
  `Copper_ppm` varchar(50) NOT NULL,
  `Boron_ppm` varchar(50) NOT NULL,
  `Calcium_ppm` varchar(50) NOT NULL,
  `Magnesium_ppm` varchar(50) NOT NULL,
  `crop_planted` varchar(50) NOT NULL,
  `Landscape` varchar(50) NOT NULL,
  `Current_crop` varchar(50) NOT NULL,
  `States_Region` varchar(50) NOT NULL,
  `Well` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Pump_type` varchar(50) NOT NULL,
  `Water_Ditch` varchar(50) NOT NULL,
  `Irrigation_Type` varchar(50) NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soil_data`
--

INSERT INTO `soil_data` (`id`, `dt_rec`, `dt_rep`, `lab_num`, `Organic`, `Soluble`, `ph`, `Nitrate_ppm`, `Phosphorus_ppm`, `Potassium_ppm`, `Sulfur_ppm`, `Zinc_ppm`, `Iron_ppm`, `Manganese_ppm`, `Copper_ppm`, `Boron_ppm`, `Calcium_ppm`, `Magnesium_ppm`, `crop_planted`, `Landscape`, `Current_crop`, `States_Region`, `Well`, `City`, `Pump_type`, `Water_Ditch`, `Irrigation_Type`, `user_id`) VALUES
(1, '2022-09-02', '2022-09-03', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 19),
(2, '2022-09-03', '2022-09-03', '20', '10', '7', '8', '5', '53', '2', '25', '33', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 22);

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
(1, 'admin', 'admin1@gmail.com', '12', '', 2, '2022-09-07 17:21:28'),
(19, 'mike11', 'rajesh.ya2017@gmail.com', '11', '11', 1, '2022-08-31 08:25:41'),
(22, 'farmer', 'farmer@gmail.com', '12', '12', 1, '2022-09-07 08:49:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_farmer`
--
ALTER TABLE `add_farmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_staff`
--
ALTER TABLE `add_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_unit`
--
ALTER TABLE `add_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gen_info`
--
ALTER TABLE `gen_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operation_data`
--
ALTER TABLE `operation_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soil_data`
--
ALTER TABLE `soil_data`
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
-- AUTO_INCREMENT for table `add_farmer`
--
ALTER TABLE `add_farmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `add_staff`
--
ALTER TABLE `add_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `add_unit`
--
ALTER TABLE `add_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gen_info`
--
ALTER TABLE `gen_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `operation_data`
--
ALTER TABLE `operation_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `soil_data`
--
ALTER TABLE `soil_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
