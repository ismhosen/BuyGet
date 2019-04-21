-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 09:47 AM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_id`, `product_id`, `customer_id`, `quantity`) VALUES
(1, 1, 186, 2),
(2, 4, 2, 1),
(3, 6, 186, 1),
(4, 1, 2, 1);

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
(186, 'ismail Hosenn', '1', '1@245', '01521332422', '2019-04-23', 'Male', 'Kuril Dhaka', 'dp.jpg'),
(187, 'Robi Ullah', '2', '2', '01833013355', '07-04-1996', 'Male', 'Dhanmondhi', '48588.jpg'),
(188, 'type type', 'type@gm.com', '@type', '01521332411', '2019-04-08', 'Male', 'Kuril Dhaka type', ''),
(189, 'Seller Vaiiiiii', '3', '3', '01833013355', '', 'Male', 'Dhanmondhi, Seller', 'ProfileImage.jpg'),
(190, 'ism hosenbuyer', 'buyer1@gm.com', '1@345', '01521332411', '2019-04-07', 'Male', 'asdasd', ''),
(191, 'ism hosenseller', 'seller1@gm.com', '1@345', '01521332411', '2019-03-31', 'Male', 'asdasd', ''),
(192, 'seller vai 2', '4', '4', '01541332419', '2019-04-07', 'Male', 'asdasdf\';asd;asd', ''),
(193, 'ism hosenseller', 'sdfsellernow@gm.com', '1@345', '01521332411', '2019-04-01', 'Male', 'asdasd', '');

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
  `gifts` varchar(50) NOT NULL,
  `main_image` varchar(50) NOT NULL,
  `regular_price` int(20) NOT NULL,
  `special_price` int(20) NOT NULL,
  `discount_price` int(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `quantity` int(100) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`id`, `owner_email`, `brand`, `model`, `header`, `processor`, `generation`, `clock_speed`, `cache`, `display_type`, `display_size`, `display_resolution`, `touch`, `ram_type`, `ram`, `storage`, `graphics_chipset`, `graphics_memory`, `networking`, `display_port`, `audio_port`, `usb_port`, `battery`, `weight`, `color`, `operating_system`, `others`, `part_no`, `origin`, `assemble`, `warranty`, `upcoming`, `gifts`, `main_image`, `regular_price`, `special_price`, `discount_price`, `date`, `quantity`, `status`) VALUES
(1, 3, 'Asus', 'HP PROBOOK 450 G55', 'ASUS i5ZenBook 15 Ultra-Slim Compact Laptop 15.6ï¿½ FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'Intel Core i5 8250U', '8th', '1.60-3.40GHz', '6mb', 'HD LED', '15.6', '1366x768 (WxH) HD', 'No', 'DDR4 2400MHz', '4GB', '1TB HDD', 'Intel UHD Graphics 620', 'Shared', 'LAN, WiFi, Bluetooth, Card Reader, WebCam', 'HDMI, VGA', 'Combo', '1 x USB3.1 Type-C Gen 1, 2 x USB3.0, 1 x USB2.0', '3 Cell Li-Ion', '2.10Kg', 'Silver', 'Free-Dos', '1 x M.2 Slot', '3MC70PA', 'USA', 'usa', '2 year (Battery, Adapter 1 year)', 'No', 'Yes', 'laptop%203.png', 10000, 20000, 10, '2019-01-04 00:30:37', 100, 1),
(2, 4, 'HP', 'sdfdf', 'HP i3 ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'i3', '5th', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '2GB', '256GB SATA ssd', 'sdf', '2GB', 'sdf', 'sdf', 'sdferghet', 'ret', 'ert', 'ertertt', 'dfg43t', '5tw45t', '54t45', '45t', 'ert4', '', '34t4', '34t3', '4t3', 'laptop%203.png', 40000, 60000, 0, '2019-04-04 00:30:37', 0, 1),
(3, 4, 'Lenovo', '', 'Lenovo ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'aksdjhfgwf', '6th', 'sdf34ekjfa', 'asdfawe4faefawefaw', 'fsdfasdf', 'ewfaw4efrawef', 'sdfaf', 'awerfwae', 'vzdv', '6GB', '2TB HDD', 'yift', '4GB', 'tyyf', 'asdfds', 'hj67', 'awerf', 'dsfas', 'hfhfg', 'hj', '', 'sdf', '', '', '', '', '', '', 'laptop%203.png', 80000, 90000, 0, '2019-07-04 00:30:37', 0, 1),
(4, 4, 'Macbook', 'ASUS ZenBook 15', 'MAc i7 ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565', 'i7', '7th', '', '', '', '', '', '', '', '', '', '', '6GB', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 25000, 40000, 0, '2019-01-01 00:30:37', 0, 1),
(6, 3, 'Asus', 'PROBOOK 450 G5', 'ZenBook i5 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'Intel Core i5 8250U', '8th', '1.60-3.40GHz', '6mb', 'HD LED', '15.6\"', '1366x768 (WxH) HD', 'No', 'DDR4 2400MHz', '4GB', '1TB HDD', 'Intel UHD Graphics 620', 'Shared', 'LAN, WiFi, Bluetooth, Card Reader, WebCam', 'HDMI, VGA', 'Combo', '1 x USB3.1 Type-C Gen 1, 2 x USB3.0, 1 x USB2.0', '3 Cell Li-Ion', '2.10Kg', 'Silver', 'Free-Dos', '1 x M.2 Slot', '3MC70PA', 'USA', '', '2 year (Battery, Adapter 1 year)', 'No', 'Yes', 'laptop%203.png', 10000, 40000, 0, '2019-05-04 00:30:37', 0, 1),
(7, 4, 'Accer', 'LenevoZenBook 15', 'Dyel ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'sdfs', '5th', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '8GB', '512GB SATA SSD', 'sdf', '8GB', 'sdf', 'sdf', 'sdferghet', 'ret', 'ert', 'ertertt', 'dfg43t', '5tw45t', '54t45', '45t', 'ert4', '', '34t4', '34t3', '4t3', 'laptop%203.png', 797800, 900000, 0, '2019-04-16 00:30:37', 0, 1),
(8, 3, 'lenevo', 'lenevo updated', 'lenevo updated', 'lenevo updated', '6th', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', '8GB', '512GB SSD', 'lenevo updated', '2GB', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevot updated', 'lenevo updated', 'weight updated', 'color updated', 'os updated', 'others updated', 'part_no updated', 'origin updated', 'ssemble updated', 'warranty updated', 'upcoming updated', 'lenevo updated', 'laptop%203.png', 34534, 345345, 34534, '2019-02-04 00:30:37', 34, 1),
(10, 4, 'Microsoft', 'LenevoZenBook 30', 'Doyel ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'sdfs', '5th', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '2GB', '256GB SSD', 'sdf', '8GB', 'sdf', 'sdf', 'sdferghet', 'ret', 'ert', 'ertertt', 'dfg43t', '5tw45t', '54t45', '45t', 'ert4', '', '34t4', '34t3', '4t3', 'laptop%203.png', 797800, 900000, 0, '2019-04-02 00:30:37', 0, 1),
(11, 4, 'ASus', 'Asus ZenBook 100', 'Asus ZenBook i3 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'i3', '5th', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '4GB', '64GB eMMC', 'sdf', '4GB', 'sdf', 'sdf', 'sdferghet', 'ret', 'ert', 'ertertt', 'dfg43t', '5tw45t', '54t45', '45t', 'ert4', '', '34t4', '34t3', '4t3', 'laptop%203.png', 797800, 900000, 0, '2019-04-02 00:30:37', 0, 1),
(12, 4, 'brand', 'model', 'header', 'processor', 'gen', 'clock_speed', 'cache', 'd_type', 'd_size', 'd_res', 'touch', 'r_type', 'ram', '128GB SATA SSD', 'g_chipset', '6GB', 'networking', 'd_port', 'a_port', 'u_port', 'battery', 'weight', 'color', 'os', 'others', 'part_no', 'origin', 'assemble', 'warranty', 'upcoming', 'gifts', '', 0, 0, 0, '2019-04-19 02:49:21', 0, 1),
(13, 3, 'lenevo', 'lenevo updatedasdasd', 'lenevo i5updatedasdasd', 'i5', '8th', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', '8GB', '128GB SSD', 'lenevo updated', '2GB', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevot updated', 'lenevo updated', 'weight updated', 'color updated', 'os updated', 'others updated', 'part_no updated', 'origin updated', 'ssemble updated', 'warranty updated', 'upcoming updated', 'lenevo updated', '', 34534, 345345, 34534, '2019-04-19 02:52:07', 34, 1),
(18, 3, 'lenevo', 'lenevo ismail', 'lenevo updatedasdasd', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', '8GB', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevot updated', 'lenevo updated', 'weight updated', 'color updated', 'os updated', 'others updated', 'part_no updated', 'origin updated', 'ssemble updated', 'warranty updated', 'upcoming updated', 'lenevo updated', '', 34534, 345345, 34534, '2019-04-19 03:10:42', 34, 1),
(20, 3, 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', '4GB', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'new', 'newnew', 'new', 'new', '', 123, 1231, 121, '2019-04-19 15:49:16', 12, 1),
(21, 3, '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '4GB', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', '$imgname', 'Untitled-2.jpg', 34, 34, 34534, '2019-04-19 15:56:01', 111, 1),
(22, 3, 'image test', 'image test', 'image test', 'image test', 'image test', 'image test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Untitled-222.jpg', 34, 343, 43, '2019-04-19 16:13:07', 121, 1),
(24, 3, 'dfgdfg', 'dfg', 'dgd', 'dfgdf', 'gdfgd', 'fgdfgdfg', 'dfg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Untitled-222.jpg', 0, 0, 0, '2019-04-19 16:16:06', 0, 1),
(25, 3, 'dfgdfgdfg', 'dfgdfgdfgdfg', 'dfgdfgdfgdfg', 'dfgdfgdfgd', 'fgdfgdfgdfgdfg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Untitled-222.jpg', 0, 0, 0, '2019-04-19 16:17:25', 0, 1),
(26, 3, 'sdfsdfsdfyutut', 'sdsdfstyutyu', 'dfsdfsdthf', 'h yjyjftu', ' er', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Untitled-222.jpg', 0, 0, 0, '2019-04-19 16:17:57', 0, 0),
(27, 3, 'dsfjklig', 'sdfserte45t', 'ert354t3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Untitled-222.jpg', 0, 0, 0, '2019-04-19 16:19:05', 0, 0),
(28, 3, 'sdfsdfsdfaf43', 'fsdfsdfsd', 'fsdfsd', 'fsdfsdfsdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'key-ring.jpg', 0, 0, 0, '2019-04-19 16:19:41', 0, 0),
(29, 3, 'sdfsdfsdiopiopiopi', 'sdfsdf', 'sdfsdf', 'sdfsf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Untitled-222.jpg', 0, 0, 0, '2019-04-19 16:20:50', 0, 0),
(30, 3, '954kjnkefg', '3445yrgf', '45ty45t4w', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'key-ring.jpg', 0, 0, 0, '2019-04-19 16:21:42', 0, 0),
(31, 3, '532168434dfdcgd', 'dfgdfg', 'dfgdfg', 'dgdfgdfg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'wristband.jpg', 0, 0, 0, '2019-04-19 16:23:49', 0, 0),
(32, 3, 'onoac n', 'xcvdfgerv ergeg', 'dfvdfvergeg ergegf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Untitled-222.jpg', 0, 0, 0, '2019-04-19 16:25:36', 0, 0),
(33, 3, 'sad sdf asaedf', ' sdf sdf sfwef wef', 'wefwef', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Untitled-222.jpg', 0, 0, 0, '2019-04-19 16:26:09', 0, 0),
(34, 3, 'dfgdfg', 'fdfgdfg', 'dfgd', 'dfgdfg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Untitled-222.jpg', 0, 0, 0, '2019-04-19 16:27:18', 0, 0),
(35, 3, 'f 45dfggd dfg', 'gg3td erfgeg34', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Untitled-222.jpg', 0, 0, 0, '2019-04-19 16:27:56', 0, 0);

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
(232, 'seller1@gm.com', '1@345', 'seller'),
(233, '4', '4', 'seller'),
(234, 'sdfsellernow@gm.com', '1@345', 'Seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `laptops`
--
ALTER TABLE `laptops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
