-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 01:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

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
(9, 11, 186),
(12, 7, 199);

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
(47, 8, 186, 1),
(48, 51, 186, 1),
(54, 7, 199, 3),
(55, 41, 199, 1),
(56, 58, 199, 1);

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
(186, 'ismail Hosenn', '1', '11', '01521332422', '2019-04-23', 'Male', 'Kuril Dhaka', 'dp.jpg', '2019-04-27 16:40:28'),
(187, 'Robi Ullah', '2', '2', '01833013355', '07-04-1996', 'Male', 'Dhanmondhi', '48588.jpg', '2019-04-27 16:40:28'),
(188, 'type type', 'type@gm.com', '@type', '01521332411', '2019-04-08', 'Male', 'Kuril Dhaka type', '', '2019-04-27 16:40:28'),
(189, 'Seller Vaiiiiii', '3', '3', '01833013355', '', 'Male', 'Dhanmondhi, Seller', 'ProfileImage.jpg', '2019-04-27 16:40:28'),
(190, 'ism hosenbuyer', 'buyer1@gm.com', '1@345', '01521332411', '2019-04-07', 'Male', 'asdasd', '', '2019-04-27 16:40:28'),
(191, 'ism hosenseller', 'seller1@gm.com', '1@345', '01521332411', '2019-03-31', 'Male', 'asdasd', '', '2019-04-27 16:40:28'),
(192, 'seller vai 2', '4', '4', '01541332419', '2019-04-07', 'Male', 'asdasdf\';asd;asd', '', '2019-04-27 16:40:28'),
(193, 'ism hosenseller', 'sdfsellernow@gm.com', '1@345', '01521332411', '2019-04-01', 'Male', 'asdasd', '', '2019-04-27 16:40:28'),
(194, 'new buyer', 'bewbuyer@gmail.com', '1@345', '01521332456', '2019-04-09', 'Male', 'new Buyer', '', '2019-04-27 16:40:28'),
(195, 'new seller me', 'newseller@gmail.com', '1@345', '0152133c454', '2019-03-31', 'Male', 'new seller me', '', '2019-04-27 16:40:28'),
(196, 'search user', 'searchuser@gmail.com', '1@345', '01521338767', '2019-04-08', 'Male', 'searc address', 'search.png', '2019-04-27 22:23:28'),
(197, 'new one', 'newone123@gmail.com', '12', '01521332454', '2019-03-31', 'Male', 'new Buyer', 'logo.png', '2019-04-27 23:25:35'),
(198, 'nishan akib', 'tnishan7@gmail.com', '1@345', '01521332454', '2019-03-31', 'Male', 'new Buyer', 'laptop4.png', '2019-04-28 00:33:34'),
(199, 'thrr thrf', 'image@gmail.com', '12', '01521332454', '2020-05-29', 'Male', 'fgujgh fgh', '10BLACKHOLEPHOTO-articleLarge-v3.jpg.webp', '2019-04-28 00:49:15'),
(200, 'banana banana', 'banana@gmail.com', '1@345', '01521332456', '2019-04-08', 'Male', 'new seller', '_87563457_231fe8a0-020e-4b60-84b7-0fca26a1623c.jpg', '2019-04-28 01:00:46'),
(201, 'ashik ismail', 'ask@gmail.com', '1@345', '01521332456', '2019-04-01', 'Male', 'new Buyer', '_87563457_231fe8a0-020e-4b60-84b7-0fca26a1623c.jpg', '2019-04-28 03:32:19');

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
(1, 'ismail', '2', 'dsgdfgd'),
(2, 'ismail hosen', 'skdjfsijkef', 'sdfnskldfhwof,dnflsdhf'),
(3, 'ismail', '2', 'dgdfgdfgdfg'),
(4, 'kjsd', 'kj;fdhgs', 'lkjhs skdjfhskf dgdfg'),
(5, 'dfgdfgdfgdg', 'ddfgdfgd', 'dg'),
(6, 'ismail', '2', 'fsdfs sdfsdf'),
(7, 'ismail', 'sdfs', 'sdfsf sdfsdf'),
(9, 'log in', 'sdfsd', 'fsdfs'),
(10, 'hello', 'sfsds', 'sdfsdf'),
(11, 'ZxZ', 'ZXZ', 'XZXZxZXZX'),
(12, 'dfgdfgdfgdg', 'zxczxc', 'zxcz zxczxcz zdcz '),
(13, 'new comment', 'new comment email', 'new comment comment');

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `id` int(11) NOT NULL,
  `owner_id` int(50) NOT NULL,
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
(37, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '2019-04-25 04:22:08', 0, 0),
(40, 4, 'brand', 'model NOW sdsdf', 'header', 'processor', 'gen', 'clock_speed', 'cache', 'd_type', 'd_size', 'd_res', 'touch', 'r_type', 'ram', '128GB SATA SSD', 'g_chipset', '6GB', 'networking', 'd_port', 'a_port', 'u_port', 'battery', 'weight', 'color', 'os', 'others', 'part_no', 'origin', 'assemble', 'warranty', 'upcoming', 'gifts', '', 0, 0, 0, '2019-04-25 04:23:54', 0, 1),
(41, 3, 'new1', 'new1', 'new1', 'new1', 'new1', 'new1', 'new1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'preview.jpg', 0, 0, 0, '2019-04-27 12:10:37', 0, 0),
(42, 3, 'Asus', 'HP PROBOOK 450 G55fghfgh', 'ASUS i5ZenBook 15 Ultra-Slim Compact Laptop 15.6ï¿½ FHD 4-Way Narrow Bezel, Intel Core i7-8565U', 'Intel Core i5 8250U', '8th', '1.60-3.40GHz', '6mb', 'HD LED', '15.6', '1366x768 (WxH) HD', 'No', 'DDR4 2400MHz', '4GB', '1TB HDD', 'Intel UHD Graphics 620', 'Shared', 'LAN, WiFi, Bluetooth, Card Reader, WebCam', 'HDMI, VGA', 'Combo', '1 x USB3.1 Type-C Gen 1, 2 x USB3.0, 1 x USB2.0', '3 Cell Li-Ion', '2.10Kg', 'Silver', 'Free-Dos', '1 x M.2 Slot', '3MC70PA', 'USA', 'usa', '2 year (Battery, Adapter 1 year)', 'No', 'Yes', '', 10000, 20000, 10, '2019-04-27 13:51:45', 100, 1),
(46, 3, 'new new new newnew n', 'new new new newnew new new new new ', 'new new new newnew new new new new ', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', 'new new new newnew', '2.png', 12131, 234234, 23423, '2019-04-28 01:37:54', 12, 0),
(48, 200, 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'new seller laptop', 'laptop4.png', 0, 2342, 234, '2019-04-28 01:41:15', 2342, 12),
(50, 0, 'new new new newnewas', 'new new newnew new new new newasdas', 'asnew new newnew new new new new', 'new new newnew new new new new', 'new new newnew new new new new', 'asd', 'asd', 'new new newnew new new new new', 'new new newnew new new new new', 'new new newnew new new new new', 'new new newnew new new new new', 'asdasd', 'asnew new newnew new new new new', 'new new newnew new new new new', 'asdasd', 'asdasd', 'asdas', 'new seller laptop', 'new new newnew new new new new', 'asd', 'asda', 'asdasd', 'dfgdfg', 'new', 'dfgdfg', 'dfgdfg', 'dfgdf', 'gdfgdfg', 'dfgdf', 'gdfgdf', 'gdfgdf', 'laptop4.png', 23234, 2342, 234234, '2019-04-28 01:52:53', 343, 0),
(51, 0, 'new new nudfgdfg', 'new new newnew new newdfgdfdfgdfg', 'new new newnew new new nnupdated', 'new new newnew newnupdated', 'new new newnew new new new new', 'new new newnew new new new new', 'sdf', 'sdf', 'new new newnew new new new new', 'new new newnew new new new new', 'new new newnew new new new new', 'new new newnew new new new new', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdfsdf', 'new new newnew new new new newsd', 'sdfsdf', 'new new newnew new new new newsdf', 'sdfsdf', 'new new newnew new new new new', 'new new newnew new new new new', 'new new newnew new new new new', 'new new newnew new new new new', 'new new newnew new new new new', 'new new newnew new new new new', 'new new newnew new new new new', 'new new newnew new new new new', 'new new newnew new new new new', 'new new newnew new new new new', 'new new newnew new new new new', 'laptop4.png', 34534, 345, 34, '2019-04-28 01:54:47', 12, 0),
(53, 200, 'oka oka up dated', 'oka oka updated fghfgh', 'updated oka oka fgfghfg', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'laptop2.png', 0, 0, 0, '2019-04-28 02:43:14', 122, 0),
(55, 0, 'oka oka up dated', 'oka oka updated ok', 'updated oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', '', 0, 0, 0, '2019-04-28 02:51:50', 122, 0),
(57, 200, 'oka oka up dated', 'oka oka updated okok ok', 'updated oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', 'oka oka', '', 0, 0, 0, '2019-04-28 02:58:55', 122, 0),
(58, 201, 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismail', 'ashik ismailashik ismail', 'ashik ismail', 'laptop2.png', 123123, 1231313, 12312, '2019-04-28 03:33:53', 12, 12);

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
(120, 7, 4, 186, 1800000, 2, 'ismail Hosenn', 'Kuril Dhaka', 1521332422, '1', ''),
(121, 51, 186, 186, 345, 1, 'ismail Hosenn', 'Kuril Dhaka', 1521332422, '1', 'sdfsd'),
(122, 8, 3, 199, 345345, 1, 'thrr thrf', 'fgujgh fgh', 1521332454, 'image@gmail.com', 'ami new'),
(123, 57, 200, 199, 0, 1, 'thrr thrf', 'fgujgh fgh', 1521332454, 'image@gmail.com', 'new 2'),
(124, 58, 201, 199, 1231313, 1, 'thrr thrf', 'fgujgh fgh', 1521332454, 'image@gmail.com', 'new order new new');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
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
(234, 'sdfsellernow@gm.com', '1@345', 'seller', ''),
(235, 'bewbuyer@gmail.com', '1@345', 'buyer', ''),
(236, 'newseller@gmail.com', '1@345', 'seller', ''),
(237, 'searchuser@gmail.com', '1@345', 'buyer', ''),
(238, 'newone123@gmail.com', '1@345', 'seller', ''),
(239, 'tnishan7@gmail.com', '1@345', 'seller', ''),
(240, 'image@gmail.com', '1@234', 'buyer', ''),
(241, 'banana@gmail.com', '1@345', 'seller', ''),
(242, 'ask@gmail.com', '1@345', 'seller', '');

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
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `laptops`
--
ALTER TABLE `laptops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
