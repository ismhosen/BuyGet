-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 10:30 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buy&get`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(5) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `imgname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `phone`, `dob`, `gender`, `address`, `imgname`) VALUES
(182, 'updated me', '19sdf@gm.com', '123', '015213333', '2019-03-11', 'Male', 'add', '1.png'),
(183, 'ism hosen', '119sdf@gm.com', '1@345', '01521332411', '2019-03-11', 'Male', 'asdasdf\';asd;asd', '2.png'),
(184, 'ism hosen', '1119sdf@gm.com', '1@345', '01521332411', '2019-03-11', 'Male', 'asdasdf\';asd;asd', '3.png'),
(185, 'ism hosen', '11199sdf@gm.com', '1@345', '01521332411', '2019-03-11', 'Male', 'asdasdf\';asd;asd', ''),
(186, 'ismail Hosen', '1', '1@245', '01521332422', '2019-04-23', 'Male', 'Kuril Dhaka', 'dp.jpg'),
(187, 'Robi Ullah', '2', '2', '01833013355', '07-04-1996', 'Male', 'Dhanmondhi', '48588.jpg'),
(188, 'type type', 'type@gm.com', '@type', '01521332411', '2019-04-08', 'Male', 'Kuril Dhaka type', ''),
(189, 'Seller Vai', '3', '3', '01833013355', '03-04-1996', 'Male', 'Dhanmondhi, Seller', 'ProfileImage.jpg'),
(190, 'ism hosenbuyer', 'buyer1@gm.com', '1@345', '01521332411', '2019-04-07', 'Male', 'asdasd', ''),
(191, 'ism hosenseller', 'seller1@gm.com', '1@345', '01521332411', '2019-03-31', 'Male', 'asdasd', '');

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `id` int(11) NOT NULL,
  `owner_email` int(11) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(50) NOT NULL,
  `header` varchar(100) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `generation` varchar(50) NOT NULL,
  `clock_speed` varchar(50) NOT NULL,
  `cache` varchar(50) NOT NULL,
  `display_type` varchar(50) NOT NULL,
  `display_size` varchar(50) NOT NULL,
  `display_resolution` varchar(50) NOT NULL,
  `touch` varchar(50) NOT NULL,
  `ram_type` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `storage` varchar(50) NOT NULL,
  `graphics_chipset` varchar(50) NOT NULL,
  `graphics_memory` varchar(50) NOT NULL,
  `networking` varchar(50) NOT NULL,
  `display_port` varchar(50) NOT NULL,
  `audio_port` varchar(50) NOT NULL,
  `usb_port` varchar(50) NOT NULL,
  `battery` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `operating_system` varchar(50) NOT NULL,
  `others` varchar(50) NOT NULL,
  `part_no` varchar(50) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `assemble` varchar(50) NOT NULL,
  `warranty` varchar(50) NOT NULL,
  `upcoming` varchar(50) NOT NULL,
  `Gifts` varchar(50) NOT NULL,
  `main_image` varchar(50) NOT NULL,
  `regular_price` int(20) NOT NULL,
  `special_price` int(20) NOT NULL,
  `discount_price` int(10) NOT NULL,
  `datee` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `quantity` int(100) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`id`, `owner_email`, `brand`, `model`, `header`, `processor`, `generation`, `clock_speed`, `cache`, `display_type`, `display_size`, `display_resolution`, `touch`, `ram_type`, `ram`, `storage`, `graphics_chipset`, `graphics_memory`, `networking`, `display_port`, `audio_port`, `usb_port`, `battery`, `weight`, `color`, `operating_system`, `others`, `part_no`, `origin`, `assemble`, `warranty`, `upcoming`, `Gifts`, `main_image`, `regular_price`, `special_price`, `discount_price`, `datee`, `quantity`, `status`) VALUES
(1, 3, 'Asus', 'HP PROBOOK 450 G5', 'ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'Intel Core i5 8250U', '8th', '1.60-3.40GHz', '6mb', 'HD LED', '15.6\"', '1366x768 (WxH) HD', 'No', 'DDR4 2400MHz', '4GB', '1TB HDD', 'Intel UHD Graphics 620', 'Shared', 'LAN, WiFi, Bluetooth, Card Reader, WebCam', 'HDMI, VGA', 'Combo', '1 x USB3.1 Type-C Gen 1, 2 x USB3.0, 1 x USB2.0', '3 Cell Li-Ion', '2.10Kg', 'Silver', 'Free-Dos', '1 x M.2 Slot', '3MC70PA', 'USA', '', '2 year (Battery, Adapter 1 year)', 'No', 'Yes', 'laptop%203.png', 10000, 20000, 0, '2019-01-04 00:30:37', 0, 1),
(2, 0, 'HP', 'sdfdf', 'HP ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'sdfs', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdferghet', 'ret', 'ert', 'ertertt', 'dfg43t', '5tw45t', '54t45', '45t', 'ert4', '', '34t4', '34t3', '4t3', 'laptop%203.png', 40000, 60000, 0, '2019-04-04 00:30:37', 0, 1),
(3, 0, 'Lenovo', '', 'Lenovo ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'aksdjhfgwf', 'asdfawlejfna', 'sdf34ekjfa', 'asdfawe4faefawefaw', 'fsdfasdf', 'ewfaw4efrawef', 'sdfaf', 'awerfwae', 'vzdv', 'tyud', 'asdf', 'yift', 'asdf', 'tyyf', 'asdfds', 'hj67', 'awerf', 'dsfas', 'hfhfg', 'hj', '', 'sdf', '', '', '', '', '', '', 'laptop%203.png', 80000, 90000, 0, '2019-07-04 00:30:37', 0, 1),
(4, 0, 'Macbook', 'ASUS ZenBook 15', 'MAc ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 25000, 40000, 0, '2019-01-01 00:30:37', 0, 1),
(6, 0, 'Asus', 'PROBOOK 450 G5', 'ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'Intel Core i5 8250U', '8th', '1.60-3.40GHz', '6mb', 'HD LED', '15.6\"', '1366x768 (WxH) HD', 'No', 'DDR4 2400MHz', '4GB', '1TB HDD', 'Intel UHD Graphics 620', 'Shared', 'LAN, WiFi, Bluetooth, Card Reader, WebCam', 'HDMI, VGA', 'Combo', '1 x USB3.1 Type-C Gen 1, 2 x USB3.0, 1 x USB2.0', '3 Cell Li-Ion', '2.10Kg', 'Silver', 'Free-Dos', '1 x M.2 Slot', '3MC70PA', 'USA', '', '2 year (Battery, Adapter 1 year)', 'No', 'Yes', 'laptop%203.png', 10000, 40000, 0, '2019-05-04 00:30:37', 0, 1),
(7, 0, 'Accer', 'LenevoZenBook 15', 'Dyel ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'sdfs', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdferghet', 'ret', 'ert', 'ertertt', 'dfg43t', '5tw45t', '54t45', '45t', 'ert4', '', '34t4', '34t3', '4t3', 'laptop%203.png', 797800, 900000, 0, '2019-04-16 00:30:37', 0, 1),
(8, 3, 'Lenovo', 'LenevoZenBook 16', 'lenovo 2 ZenBook i3 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'core i3', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdferghet', 'ret', 'ert', 'ertertt', 'dfg43t', '5tw45t', '54t45', '45t', 'ert4', '', '34t4', '34t3', '4t3', 'laptop%203.png', 5000, 10000, 0, '2019-02-04 00:30:37', 0, 1),
(10, 0, 'Microsoft', 'LenevoZenBook 30', 'Doyel ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'sdfs', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdferghet', 'ret', 'ert', 'ertertt', 'dfg43t', '5tw45t', '54t45', '45t', 'ert4', '', '34t4', '34t3', '4t3', 'laptop%203.png', 797800, 900000, 0, '2019-04-02 00:30:37', 0, 1),
(11, 0, 'ASus', 'Asus ZenBook 100', 'Asus ZenBook i3 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'i3', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdferghet', 'ret', 'ert', 'ertertt', 'dfg43t', '5tw45t', '54t45', '45t', 'ert4', '', '34t4', '34t3', '4t3', 'laptop%203.png', 797800, 900000, 0, '2019-04-02 00:30:37', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`) VALUES
(8, '1', '1', 'buyer'),
(9, '2', '2', 'buyer'),
(224, '19sdf@gm.com', '1@345', ''),
(225, '119sdf@gm.com', '1@345', ''),
(226, '1119sdf@gm.com', '1@345', ''),
(227, '11199sdf@gm.com', '1@345', ''),
(228, 'type@gm.com', '@type', 'Become a buyer'),
(229, '3', '3', 'seller'),
(230, 'admin', 'admin', 'admin'),
(231, 'buyer1@gm.com', '1@345', 'buyer'),
(232, 'seller1@gm.com', '1@345', 'Seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `model` (`model`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `laptops`
--
ALTER TABLE `laptops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
