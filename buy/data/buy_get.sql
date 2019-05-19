-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 08:22 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

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
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `b_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`b_id`, `product_id`, `customer_id`) VALUES
(1, 1, 1),
(5, 8, 186);

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
(2, 4, 2, 1),
(4, 1, 2, 1),
(13, 6, 6, 1),
(14, 6, 0, 1),
(17, 1, 187, 2),
(19, 7, 187, 2),
(43, 7, 186, 2);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(10) NOT NULL,
  `sender` int(10) NOT NULL,
  `receiver` int(10) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender`, `receiver`, `message`) VALUES
(1, 207, 210, 'hello'),
(2, 210, 207, 'I am fine.'),
(3, 211, 210, 'Hello from t@gmail.com'),
(4, 211, 210, 'I am fine.'),
(5, 211, 210, 'hi'),
(6, 210, 211, 'shdjsd');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `imgname` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `phone`, `dob`, `gender`, `address`, `imgname`, `date`) VALUES
(182, 'updated me', '19sdf@gm.com', '123', '015213333', '2019-03-11', 'Male', 'add', '1.png', '2019-04-27 16:40:28'),
(183, 'ism hosen', '119sdf@gm.com', '1@345', '01521332411', '2019-03-11', 'Male', 'asdasdf\';asd;asd', '2.png', '2019-04-27 16:40:28'),
(184, 'ism hosen', '1119sdf@gm.com', '1@345', '01521332411', '2019-03-11', 'Male', 'asdasdf\';asd;asd', '3.png', '2019-04-27 16:40:28'),
(185, 'ism hosen', '11199sdf@gm.com', '1@345', '01521332411', '2019-03-11', 'Male', 'asdasdf\';asd;asd', '', '2019-04-27 16:40:28'),
(186, 'ismail Hosen', '1', '1@245', '01521332423', '2019-04-23', 'Male', 'Kuril Dhakads', 'dp.jpg', '2019-04-27 16:40:28'),
(187, 'Robi Ullah', '2', '2', '01833013355', '07-04-1996', 'Male', 'Dhanmondhi', '48588.jpg', '2019-04-27 16:40:28'),
(188, 'type type', 'type@gm.com', '@type', '01521332411', '2019-04-08', 'Male', 'Kuril Dhaka type', '', '2019-04-27 16:40:28'),
(189, 'Seller Vaiiiiii', '3', '3', '01833013355', '', 'Male', 'Dhanmondhi, Seller', 'ProfileImage.jpg', '2019-04-27 16:40:28'),
(190, 'ism hosenbuyer', 'buyer1@gm.com', '1@345', '01521332411', '2019-04-07', 'Male', 'asdasd', '', '2019-04-27 16:40:28'),
(191, 'ism hosenseller', 'seller1@gm.com', '1@345', '01521332411', '2019-03-31', 'Male', 'asdasd', '', '2019-04-27 16:40:28'),
(192, 'seller vai 2', '4', '4', '01541332419', '2019-04-07', 'Male', 'asdasdf\';asd;asd', '', '2019-04-27 16:40:28'),
(193, 'ism hosenseller', 'sdfsellernow@gm.com', '1@345', '01521332411', '2019-04-01', 'Male', 'asdasd', '', '2019-04-27 16:40:28'),
(194, 'new buyer', 'bewbuyer@gmail.com', '1@345', '01521332456', '2019-04-09', 'Male', 'new Buyer', '', '2019-04-27 16:40:28'),
(195, 'new seller', 'newseller@gmail.com', '1@345', '01521332454', '2019-03-31', 'Male', 'new seller', '', '2019-04-27 16:40:28'),
(196, 'Tohfa Akib', 'tohfaakib@gmail.com', '1234@', '88758747432', '1996-05-20', 'Male', '11/17, Bailey Square', '', '2019-04-28 22:10:42'),
(200, 'tohfa nishan', 'tnishan7@gmail.com', '1234@', '34574367859', '2019-02-01', 'Male', '11/17, Bailey Square', 'Tohfa Akib.jpg', '2019-04-29 00:24:33'),
(201, 'tohfa nishan', 'petergsalmon12@gmail.om', '1234@', '34574367859', '2019-01-01', 'Male', '11/17, Bailey Square', 'Tohfa Akib.jpg', '2019-04-29 00:34:49'),
(207, 'Nishan Tohfa', 'nishan_akib@hotmail.com', '2119eb59afc81b22cf8a4298047f9723', '01915707222', '2019-01-01', 'Male', '11/17, Bailey Square, ramna, Dhaka', 'Tohfa Akib.jpg', '2019-04-29 02:41:21'),
(210, 'Tohfa Akib', 'petergsalmon12@gmail.com', '2119eb59afc81b22cf8a4298047f9723', '01915707222', '2019-01-01', 'Male', '11/17, Bailey Square, ramna', 'Tohfa Akib.jpg', '2019-04-29 06:31:13'),
(211, 'Nishan Akib', 't@gmail.com', '2119eb59afc81b22cf8a4298047f9723', '01915707222', '2019-03-03', 'Male', '11/17, Bailey Square, ramna, Dhaka', 'Tohfa Akib.jpg', '2019-04-29 11:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `comment`) VALUES
(4, 'kjsd', 'kj;fdhgs', 'lkjhs skdjfhskf dgdfg'),
(5, 'dfgdfgdfgdg', 'ddfgdfgd', 'dg'),
(7, 'ismail', 'sdfs', 'sdfsf sdfsdf'),
(9, 'log in', 'sdfsd', 'fsdfs'),
(10, 'hello', 'sfsds', 'sdfsdf'),
(11, 'ZxZ', 'ZXZ', 'XZXZxZXZX'),
(12, 'dfgdfgdfgdg', 'zxczxc', 'zxcz zxczxcz zdcz '),
(14, 'Tohfa Akib', 'nishan_akib@hotmail.com', 'Site valo na');

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
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

INSERT INTO `laptops` (`id`, `owner_id`, `brand`, `model`, `header`, `processor`, `generation`, `clock_speed`, `cache`, `display_type`, `display_size`, `display_resolution`, `touch`, `ram_type`, `ram`, `storage`, `graphics_chipset`, `graphics_memory`, `networking`, `display_port`, `audio_port`, `usb_port`, `battery`, `weight`, `color`, `operating_system`, `others`, `part_no`, `origin`, `assemble`, `warranty`, `upcoming`, `gifts`, `main_image`, `regular_price`, `special_price`, `discount_price`, `date`, `quantity`, `status`) VALUES
(1, 3, 'Asus', 'HP PROBOOK 450 G55', 'ASUS i5ZenBook 15 Ultra-Slim Compact Laptop 15.6ï¿½ FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'Intel Core i5 8250U', '8th', '1.60-3.40GHz', '6mb', 'HD LED', '15.6', '1366x768 (WxH) HD', 'No', 'DDR4 2400MHz', '4GB', '1TB HDD', 'Intel UHD Graphics 620', 'Shared', 'LAN, WiFi, Bluetooth, Card Reader, WebCam', 'HDMI, VGA', 'Combo', '1 x USB3.1 Type-C Gen 1, 2 x USB3.0, 1 x USB2.0', '3 Cell Li-Ion', '2.10Kg', 'Silver', 'Free-Dos', '1 x M.2 Slot', '3MC70PA', 'USA', 'usa', '2 year (Battery, Adapter 1 year)', 'No', 'Yes', 'laptop%203.png', 10000, 20000, 10, '2019-01-04 00:30:37', 100, 1),
(6, 3, 'Asus', 'PROBOOK 450 G5', 'ZenBook i5 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'Intel Core i5 8250U', '8th', '1.60-3.40GHz', '6mb', 'HD LED', '15.6\"', '1366x768 (WxH) HD', 'No', 'DDR4 2400MHz', '4GB', '1TB HDD', 'Intel UHD Graphics 620', 'Shared', 'LAN, WiFi, Bluetooth, Card Reader, WebCam', 'HDMI, VGA', 'Combo', '1 x USB3.1 Type-C Gen 1, 2 x USB3.0, 1 x USB2.0', '3 Cell Li-Ion', '2.10Kg', 'Silver', 'Free-Dos', '1 x M.2 Slot', '3MC70PA', 'USA', '', '2 year (Battery, Adapter 1 year)', 'No', 'Yes', 'laptop%203.png', 10000, 40000, 0, '2019-05-04 00:30:37', 0, 1),
(7, 4, 'Accer', 'LenevoZenBook 15', 'Dyel ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'sdfs', '5th', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '8GB', '512GB SATA SSD', 'sdf', '8GB', 'sdf', 'sdf', 'sdferghet', 'ret', 'ert', 'ertertt', 'dfg43t', '5tw45t', '54t45', '45t', 'ert4', '', '34t4', '34t3', '4t3', 'laptop%203.png', 797800, 900000, 0, '2019-04-16 00:30:37', 0, 1),
(8, 3, 'lenevo', 'lenevo updated updated', 'lenevo updated', 'lenevo updated', '6th', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevo updated', '8GB', '512GB SSD', 'lenevo updated', '2GB', 'lenevo updated', 'lenevo updated', 'lenevo updated', 'lenevot updated', 'lenevo updated', 'weight updated', 'color updated', 'os updated', 'others updated', 'part_no updated', 'origin updated', 'ssemble updated', 'warranty updated', 'upcoming updated', 'lenevo updated', 'laptop%203.png', 34534, 345345, 34534, '2019-02-04 00:30:37', 34, 1),
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
(35, 3, 'f 45dfggd dfg', 'gg3td erfgeg34', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Untitled-222.jpg', 0, 0, 0, '2019-04-19 16:27:56', 0, 0),
(36, 4, 'brand', 'model NOW', 'header', 'processor', 'gen', 'clock_speed', 'cache', 'd_type', 'd_size', 'd_res', 'touch', 'r_type', 'ram', '128GB SATA SSD', 'g_chipset', '6GB', 'networking', 'd_port', 'a_port', 'u_port', 'battery', 'weight', 'color', 'os', 'others', 'part_no', 'origin', 'assemble', 'warranty', 'upcoming', 'gifts', '', 0, 0, 0, '2019-04-22 06:12:57', 0, 1),
(40, 4, 'brand', 'model NOW sdsdf', 'header', 'processor', 'gen', 'clock_speed', 'cache', 'd_type', 'd_size', 'd_res', 'touch', 'r_type', 'ram', '128GB SATA SSD', 'g_chipset', '6GB', 'networking', 'd_port', 'a_port', 'u_port', 'battery', 'weight', 'color', 'os', 'others', 'part_no', 'origin', 'assemble', 'warranty', 'upcoming', 'gifts', '', 0, 0, 0, '2019-04-25 04:23:54', 0, 1),
(41, 3, 'new1', 'new1', 'new1', 'new1', 'new1', 'new1', 'new1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'preview.jpg', 0, 0, 0, '2019-04-27 12:10:37', 0, 0),
(42, 3, 'Asus', 'HP PROBOOK 450 G55fghfgh', 'ASUS i5ZenBook 15 Ultra-Slim Compact Laptop 15.6ï¿½ FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'Intel Core i5 8250U', '8th', '1.60-3.40GHz', '6mb', 'HD LED', '15.6', '1366x768 (WxH) HD', 'No', 'DDR4 2400MHz', '4GB', '1TB HDD', 'Intel UHD Graphics 620', 'Shared', 'LAN, WiFi, Bluetooth, Card Reader, WebCam', 'HDMI, VGA', 'Combo', '1 x USB3.1 Type-C Gen 1, 2 x USB3.0, 1 x USB2.0', '3 Cell Li-Ion', '2.10Kg', 'Silver', 'Free-Dos', '1 x M.2 Slot', '3MC70PA', 'USA', 'usa', '2 year (Battery, Adapter 1 year)', 'No', 'Yes', '', 10000, 20000, 10, '2019-04-27 13:51:45', 100, 1),
(43, 0, 'I dont know gfhgh', 'never gonna tell u ghgf', 'My laptop hfjhj', 'onek hfjhjgh', '6th', 'bolbo na', '6 mb', 'vga', '15 inch', '1080 x 1960', 'yes', 'jani na', 'jani na', 'nai', 'nai', 'nai', 'vcbcv', 'gbhgh', 'ghgfhg', 'fhggf', 'ghfgh', 'gfhgfh', 'ghgfhd', 'dghdg', 'fjjhjghk', 'dfhghh', 'hgjgjhg', 'hfjfjfgj', 'fghgh', 'fghgfh', 'gfhgfh', 'Capture.PNG', 120, 110, 100, '2019-04-29 02:58:27', 5, 0),
(44, 210, 'I dont knowskjdhk', 'hgsjdksjdhksjdh', 'kjshdjsdjhgjhsdhjgjhfgh', 'ksdjhkjsdh', 'skdjhkjsdhks', 'kjhkjh', 'jhgjhg', 'jhghjf', 'tfhg', 'fhfg', 'hfghf', 'gf', 'ghfh', 'gf', 'ghf', 'hgf', 'hg', 'fgh', 'f', '', '', '', '', '', '', '', '', '', '', '', '', 'balsal.jpg', 0, 0, 0, '2019-04-29 06:41:05', 0, 0),
(47, 210, 'I dont knowskjdhk', 'hgsjdksjdhksjdh kjfgjfhjg', 'kjshdjsdjhgjhsdhjgjhfgh', 'ksdjhkjsdh', 'skdjhkjsdhks', 'kjhkjh', 'jhgjhg', 'jhghjf', 'tfhg', 'fhfg', 'hfghf', 'gf', 'ghfh', 'gf', 'ghf', 'hgf', 'hg', 'fgh', 'f', '', '', '', '', '', '', '', '', '', '', '', '', 'balsal.jpg', 0, 0, 0, '2019-04-29 07:03:19', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `owner_id` int(50) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `owner_id`, `customer_id`, `price`, `quantity`, `name`, `address`, `mobile`, `email`, `comment`) VALUES
(116, 7, 4, 186, 1800000, 2, 'ismail Hosenn', 'Kuril Dhaka', 1521332422, '1', 'vxzvxcvx'),
(117, 1, 3, 187, 40000, 2, 'Robi Ullah', 'Dhanmondhi', 1833013355, '2', 'cfbcvb'),
(118, 41, 3, 186, 0, 1, 'ismail Hosenn', 'Kuril Dhaka', 1521332422, '1', 'new one'),
(119, 7, 4, 186, 900000, 1, 'ismail Hosenn', 'Kuril Dhaka', 1521332422, '1', 'gfgfghfghf'),
(120, 7, 4, 186, 1800000, 2, 'ismail Hosenn', 'Kuril Dhaka', 1521332422, '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `validity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `validity`) VALUES
(8, '1', '1', 'buyer', ''),
(9, '2', '2', 'buyer', ''),
(224, '19sdf@gm.com', '1@345', 'buyer', ''),
(225, '119sdf@gm.com', '1@345', 'seller', ''),
(226, '1119sdf@gm.com', '1@345', 'buyer', ''),
(227, '11199sdf@gm.com', '1@345', 'buyer', ''),
(228, 'type@gm.com', '@type', 'buyer', ''),
(229, '3', '3', 'seller', ''),
(230, 'admin', 'admin', 'admin', ''),
(231, 'buyer1@gm.com', '1@345', 'buyer', ''),
(232, 'seller1@gm.com', '1@345', 'seller', ''),
(233, '4', '4', 'seller', ''),
(234, 'sdfsellernow@gm.com', '1@345', 'Seller', ''),
(235, 'bewbuyer@gmail.com', '1@345', 'buyer', ''),
(236, 'newseller@gmail.com', '1@345', 'Seller', ''),
(237, 'tohfaakib@gmail.com', '1234@', 'Seller', ''),
(241, 'tnishan7@gmail.com', '1234@', 'Seller', ''),
(242, 'petergsalmon12@gmail.om', '1234@', 'Seller', ''),
(243, 'tohfa@gmail.com', '1234@', 'seller', ''),
(248, 'nishan_akib@hotmail.com', '2119eb59afc81b22cf8a4298047f9723', 'buyer', ''),
(251, 'petergsalmon12@gmail.com', '2119eb59afc81b22cf8a4298047f9723', 'seller', ''),
(252, 't@gmail.com', '2119eb59afc81b22cf8a4298047f9723', 'buyer', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `model` (`model`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `laptops`
--
ALTER TABLE `laptops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
