-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2024 at 01:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lk`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `p_id` int(10) NOT NULL,
  `txt_category` varchar(50) DEFAULT NULL,
  `txt_productname` varchar(50) DEFAULT NULL,
  `txt_image` varchar(500) DEFAULT NULL,
  `txt_price` double DEFAULT NULL,
  `txt_quantity` int(50) DEFAULT NULL,
  `txt_gst` double DEFAULT NULL,
  `txt_total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`p_id`, `txt_category`, `txt_productname`, `txt_image`, `txt_price`, `txt_quantity`, `txt_gst`, `txt_total`) VALUES
(1, 'Kulfi', 'Shahi Malai', '6632319f61fe7_malai.png', 18.6, 2500, 18, 21.948),
(2, 'Kulfi', 'Mango', '6632326a9b448_mango1.png', 24.07, 1907, 18, 28.4026),
(3, 'Kulfi', 'Sitafal', '663232a443fa3_sitafal.png', 31.15, 1868, 18, 36.757),
(4, 'Kulfi', 'Pista', '663232d843ec6_pista.png', 24.07, 2000, 18, 28.4026),
(5, 'Kulfi', 'Jamun', '6632331519310_jamun.png', 31.15, 20000, 18, 36.757),
(6, 'Kulfi', 'Gulkand', '663233676ecbd_gulkand.png', 24.07, 2000, 18, 28.4026),
(7, 'Kulfi', 'chocolate', '663233a071ec5_choklate.png', 31.15, 2000, 18, 36.757),
(8, 'Family Pack', 'strawberry', '66323442955bb_strawberry.png', 186.44, 50, 18, 219.9992),
(9, 'Family Pack', 'Mango', '6632347eec129_mango.png', 216.53, 50, 18, 255.5054),
(10, 'Family Pack', 'Chocochips', '663234c90bcba_chokochips.png', 247.42, 50, 18, 291.9556),
(11, 'Family Pack', 'Green Pista', '66323516e26e8_greenpista.png', 186.44, 50, 18, 219.9992),
(12, 'Cone', 'Butterscotch', '663235baa3d68_butterscotch.png', 25.42, -37, 18, 29.995600000000003),
(13, 'Chakobar', 'Chokobar', '663236c356ae6_chokobar.png', 15.9, 1924, 18, 18.762),
(14, 'Kulfi', 'Matka', '663236f74ab90_matka.png', 38.14, 2000, 18, 45.0052);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `c_payment`
--

CREATE TABLE `c_payment` (
  `c_id` int(10) NOT NULL,
  `txt_cnumber` int(50) DEFAULT NULL,
  `txt_chname` varchar(50) DEFAULT NULL,
  `txt_edate` int(11) DEFAULT NULL,
  `txt_cvv` int(10) DEFAULT NULL,
  `txt_tamount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `bill_date` date DEFAULT NULL,
  `f_id` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `qty` float DEFAULT NULL,
  `gst` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `bill_date`, `f_id`, `amount`, `qty`, `gst`) VALUES
(1, '2024-04-28', 5, 2678.8, 30, NULL),
(2, '2024-04-28', 5, 2678.8, 30, NULL),
(3, '2024-04-28', 2, 657, 15, NULL),
(4, '2024-04-28', 5, 12971.7, 112, NULL),
(5, '2024-04-28', 1, 313.88, 5, NULL),
(6, '2024-04-29', 5, 4751.3, 97, NULL),
(7, '2024-04-29', 6, 29771600, 156777, NULL),
(8, '2024-04-29', 5, 4114.71, 25, NULL),
(9, '2024-04-30', 1, 29775900, 156871, NULL),
(10, '2024-04-30', 1, 252, 12, NULL),
(11, '2024-04-29', 1, 5096, 133, NULL),
(12, '2024-04-30', 1, 210, 10, NULL),
(13, '2024-04-30', 6, 325.64, 5, NULL),
(14, '2024-04-30', 1, 1329.66, 52, NULL),
(15, '2024-04-30', 3, 296, 12, NULL),
(16, '2024-05-01', 6, 225.79, 7, NULL),
(17, '2024-05-02', 6, 223.35, 9, NULL),
(18, '2024-05-02', 3, 1439.6, 44, NULL),
(19, '2024-05-02', 6, 1185.19, 54, NULL),
(20, '2024-05-02', 6, 6506.56, 250, NULL),
(21, '2024-05-02', 6, 223.35, 9, NULL),
(22, '2024-05-02', 6, 223.35, 9, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `id` int(11) NOT NULL,
  `invoice_no` int(11) DEFAULT NULL,
  `f_id` int(11) DEFAULT NULL,
  `bill_date` date DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `p_name` varchar(50) DEFAULT NULL,
  `c_name` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`id`, `invoice_no`, `f_id`, `bill_date`, `p_id`, `p_name`, `c_name`, `price`, `quantity`, `amount`) VALUES
(1, 2, 5, '2024-04-28', 3, 'Vanila', 'Family Pack', 190, 10, 1900),
(2, 2, 5, '2024-04-28', 4, 'study table', 'Kulfi', 38.94, 20, 778.8),
(3, 3, 5, '2024-04-28', 3, 'Vanila', 'Family Pack', 190, 10, 1900),
(4, 3, 5, '2024-04-28', 4, 'study table', 'Kulfi', 38.94, 20, 778.8),
(5, 4, 2, '2024-04-28', 1, 'Shahi Malai', 'Kulfi', 21, 12, 252),
(6, 4, 2, '2024-04-28', 2, 'Butterscotch', 'Cone', 25, 1, 25),
(7, 4, 2, '2024-04-28', 3, 'Vanila', 'Family Pack', 190, 2, 380),
(8, 4, 5, '2024-04-28', 3, 'Vanila', 'Family Pack', 190, 57, 10830),
(9, 4, 5, '2024-04-28', 5, 'study table', 'Kulfi', 38.94, 55, 2141.7),
(10, 5, 1, '2024-04-28', 1, 'Shahi Malai', 'Kulfi', 21, 1, 21),
(11, 5, 1, '2024-04-28', 2, 'Butterscotch', 'Cone', 25, 1, 25),
(12, 5, 1, '2024-04-28', 3, 'Vanila', 'Family Pack', 190, 1, 190),
(13, 5, 1, '2024-04-28', 4, 'study table', 'Kulfi', 38.94, 1, 38.94),
(14, 5, 1, '2024-04-28', 5, 'study table', 'Kulfi', 38.94, 1, 38.94),
(15, 6, 5, '2024-04-29', 1, 'Shahi Malai', 'Kulfi', 21, 29, 609),
(16, 6, 5, '2024-04-29', 2, 'Butterscotch', 'Cone', 25, 12, 300),
(17, 6, 5, '2024-04-29', 3, 'Vanila', 'Family Pack', 190, 11, 2090),
(18, 6, 5, '2024-04-29', 4, 'study table', 'Kulfi', 38.94, 45, 1752.3),
(19, 7, 6, '2024-04-29', 1, 'Shahi Malai', 'Kulfi', 21, 1, 21),
(20, 7, 6, '2024-04-29', 2, 'Butterscotch', 'Cone', 25, 11, 275),
(21, 7, 6, '2024-04-29', 3, 'Vanila', 'Family Pack', 190, 156677, 29768600),
(22, 7, 6, '2024-04-29', 4, 'study table', 'Kulfi', 38.94, 11, 428.34),
(23, 7, 6, '2024-04-29', 5, 'study table', 'Kulfi', 38.94, 33, 1285.02),
(24, 7, 6, '2024-04-29', 6, 'Shahi Malai', 'Kulfi', 21.83, 44, 960.52),
(25, 8, 5, '2024-04-29', 2, 'Butterscotch', 'Cone', 25, 1, 25),
(26, 8, 5, '2024-04-29', 3, 'Vanila', 'Family Pack', 190, 21, 3990),
(27, 8, 5, '2024-04-29', 4, 'study table', 'Kulfi', 38.94, 1, 38.94),
(28, 8, 5, '2024-04-29', 5, 'study table', 'Kulfi', 38.94, 1, 38.94),
(29, 8, 5, '2024-04-29', 6, 'Shahi Malai', 'Kulfi', 21.83, 1, 21.83),
(30, 9, 6, '2024-04-29', 1, 'Shahi Malai', 'Kulfi', 21, 1, 21),
(31, 9, 6, '2024-04-29', 2, 'Butterscotch', 'Cone', 25, 11, 275),
(32, 9, 6, '2024-04-29', 3, 'Vanila', 'Family Pack', 190, 156677, 29768600),
(33, 9, 6, '2024-04-29', 4, 'study table', 'Kulfi', 38.94, 11, 428.34),
(34, 9, 6, '2024-04-29', 5, 'study table', 'Kulfi', 38.94, 33, 1285.02),
(35, 9, 6, '2024-04-29', 6, 'Shahi Malai', 'Kulfi', 21.83, 44, 960.52),
(36, 9, 6, '2024-04-29', 1, 'Shahi Malai', 'Kulfi', 21, 1, 21),
(37, 9, 6, '2024-04-29', 2, 'Butterscotch', 'Cone', 25, 1, 25),
(38, 9, 6, '2024-04-29', 3, 'Vanila', 'Family Pack', 190, 1, 190),
(39, 9, 6, '2024-04-29', 6, 'Shahi Malai', 'Kulfi', 21.83, 1, 21.83),
(40, 9, 6, '2024-04-29', 7, 'redperu', 'Kulfi', 36.757, 1, 36.76),
(41, 9, 6, '2024-04-29', 8, 'rushi', 'Kulfi', 54.78, 1, 54.78),
(42, 9, 6, '2024-04-29', 9, 'CHOCLATE', 'Kulfi', 25.96, 1, 25.96),
(43, 9, 6, '2024-04-29', 10, 'study table', 'Kulfi', 38.94, 1, 38.94),
(44, 9, 1, '2024-04-29', 1, 'Shahi Malai', 'Kulfi', 21, 1, 21),
(45, 9, 1, '2024-04-29', 2, 'Butterscotch', 'Cone', 25, 1, 25),
(46, 9, 1, '2024-04-29', 3, 'Vanila', 'Family Pack', 190, 1, 190),
(47, 9, 1, '2024-04-29', 4, 'study table', 'Kulfi', 38.94, 1, 38.94),
(48, 9, 1, '2024-04-29', 1, 'Shahi Malai', 'Kulfi', 21, 1, 21),
(49, 9, 1, '2024-04-29', 2, 'Butterscotch', 'Cone', 25, 2, 50),
(50, 9, 1, '2024-04-29', 3, 'Vanila', 'Family Pack', 190, 2, 380),
(51, 9, 1, '2024-04-29', 1, 'Shahi Malai', 'Kulfi', 21, 1, 21),
(52, 9, 1, '2024-04-29', 2, 'Butterscotch', 'Cone', 25, 1, 25),
(53, 9, 1, '2024-04-29', 3, 'Vanila', 'Family Pack', 190, 1, 190),
(54, 9, 1, '2024-04-29', 1, 'Shahi Malai', 'Kulfi', 21, 1, 21),
(55, 9, 1, '2024-04-29', 2, 'Butterscotch', 'Cone', 25, 1, 25),
(56, 9, 1, '2024-04-29', 1, 'Shahi Malai', 'Kulfi', 21, 11, 231),
(57, 9, 1, '2024-04-29', 2, 'Butterscotch', 'Cone', 25, 1, 25),
(58, 9, 0, '2024-04-30', 1, 'Shahi Malai', 'Kulfi', 21, 6, 126),
(59, 9, 0, '2024-04-30', 3, 'Vanila', 'Family Pack', 190, 8, 1520),
(60, 9, 1, '2024-04-30', 1, 'Shahi Malai', 'Kulfi', 21, 34, 714),
(61, 9, 1, '2024-04-30', 2, 'Butterscotch', 'Cone', 25, 12, 300),
(62, 10, 1, '2024-04-30', 1, 'Shahi Malai', 'Kulfi', 21, 12, 252),
(63, 11, 1, '2024-04-29', 1, 'Shahi Malai', 'Kulfi', 21, 11, 231),
(64, 11, 1, '2024-04-29', 2, 'Butterscotch', 'Cone', 25, 111, 2775),
(65, 11, 1, '2024-04-29', 3, 'Vanila', 'Family Pack', 190, 11, 2090),
(66, 12, 1, '2024-04-30', 1, 'Shahi Malai', 'Kulfi', 21, 10, 210),
(67, 13, 6, '2024-04-30', 1, 'Shahi Malai', 'Kulfi', 21, 1, 21),
(68, 13, 6, '2024-04-30', 3, 'Vanila', 'Family Pack', 190, 1, 190),
(69, 13, 6, '2024-04-30', 5, 'study table', 'Kulfi', 38.94, 1, 38.94),
(70, 13, 6, '2024-04-30', 7, 'redperu', 'Kulfi', 36.757, 1, 36.76),
(71, 13, 6, '2024-04-30', 10, 'study table', 'Kulfi', 38.94, 1, 38.94),
(72, 14, 1, '2024-04-30', 1, 'Shahi Malai', 'Kulfi', 21, 10, 210),
(73, 14, 1, '2024-04-30', 2, 'Butterscotch', 'Cone', 25, 10, 250),
(74, 14, 1, '2024-04-30', 6, 'Shahi Malai', 'Kulfi', 21.83, 22, 480.26),
(75, 14, 1, '2024-04-30', 10, 'study table', 'Kulfi', 38.94, 10, 389.4),
(76, 15, 3, '2024-04-30', 1, 'Shahi Malai', 'Kulfi', 21, 1, 21),
(77, 15, 3, '2024-04-30', 2, 'Butterscotch', 'Cone', 25, 11, 275),
(78, 16, 6, '2024-05-01', 1, 'Shahi Malai', 'Kulfi', 21.948, 1, 21.95),
(79, 16, 6, '2024-05-01', 2, 'Mango', 'Kulfi', 28.4026, 2, 56.81),
(80, 16, 6, '2024-05-01', 3, 'Sitafal', 'Kulfi', 36.757, 4, 147.03),
(81, 17, 6, '2024-05-02', 1, 'Shahi Malai', 'Kulfi', 21.948, 5, 109.74),
(82, 17, 6, '2024-05-02', 2, 'Mango', 'Kulfi', 28.4026, 4, 113.61),
(83, 18, 3, '2024-05-02', 1, 'Shahi Malai', 'Kulfi', 21.948, 12, 263.38),
(84, 18, 3, '2024-05-02', 3, 'Sitafal', 'Kulfi', 36.757, 32, 1176.22),
(85, 19, 6, '2024-05-02', 1, 'Shahi Malai', 'Kulfi', 21.948, 54, 1185.19),
(86, 20, 6, '2024-05-02', 2, 'Mango', 'Kulfi', 28.4026, 87, 2471.03),
(87, 20, 6, '2024-05-02', 12, 'Butterscotch', 'Cone', 29.9956, 87, 2609.62),
(88, 20, 6, '2024-05-02', 13, 'Chokobar', 'Chakobar', 18.762, 76, 1425.91);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int(11) NOT NULL,
  `o_id` varchar(500) DEFAULT NULL,
  `f_id` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `c_name` varchar(50) DEFAULT NULL,
  `p_name` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `status` varchar(40) DEFAULT 'Placed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `o_id`, `f_id`, `date`, `p_id`, `c_name`, `p_name`, `price`, `quantity`, `amount`, `status`) VALUES
(1, '1', '5', '2024-04-28', 3, 'Family Pack', 'Vanila', 190, 10, 1900, 'Completed'),
(2, '1', '5', '2024-04-28', 4, 'Kulfi', 'study table', 38.94, 20, 778.8, 'Completed'),
(3, '2', '5', '2024-04-28', 3, 'Family Pack', 'Vanila', 190, 57, 10830, 'Completed'),
(4, '2', '5', '2024-04-28', 5, 'Kulfi', 'study table', 38.94, 55, 2141.7, 'Completed'),
(5, '3', '2', '2024-04-28', 1, 'Kulfi', 'Shahi Malai', 21, 12, 252, 'Completed'),
(6, '3', '2', '2024-04-28', 2, 'Cone', 'Butterscotch', 25, 1, 25, 'Completed'),
(7, '3', '2', '2024-04-28', 3, 'Family Pack', 'Vanila', 190, 2, 380, 'Completed'),
(8, '4', '1', '2024-04-28', 1, 'Kulfi', 'Shahi Malai', 21, 1, 21, 'Completed'),
(9, '4', '1', '2024-04-28', 2, 'Cone', 'Butterscotch', 25, 1, 25, 'Completed'),
(10, '4', '1', '2024-04-28', 3, 'Family Pack', 'Vanila', 190, 1, 190, 'Completed'),
(11, '4', '1', '2024-04-28', 4, 'Kulfi', 'study table', 38.94, 1, 38.94, 'Completed'),
(12, '4', '1', '2024-04-28', 5, 'Kulfi', 'study table', 38.94, 1, 38.94, 'Completed'),
(13, '5', '', '2024-04-29', 1, 'Kulfi', 'Shahi Malai', 21, 45, 945, 'Placed'),
(14, '5', '', '2024-04-29', 9, 'Kulfi', 'CHOCLATE', 25.96, 32, 830.72, 'Placed'),
(15, '6', '', '2024-04-29', 2, 'Cone', 'Butterscotch', 25, 10, 250, 'Placed'),
(16, '6', '', '2024-04-29', 3, 'Family Pack', 'Vanila', 190, 20, 3800, 'Placed'),
(17, '6', '', '2024-04-29', 4, 'Kulfi', 'study table', 38.94, 20, 778.8, 'Placed'),
(18, '6', '', '2024-04-29', 5, 'Kulfi', 'study table', 38.94, 34, 1323.96, 'Placed'),
(19, '7', '5', '2024-04-29', 1, 'Kulfi', 'Shahi Malai', 21, 29, 609, 'Completed'),
(20, '7', '5', '2024-04-29', 2, 'Cone', 'Butterscotch', 25, 12, 300, 'Completed'),
(21, '7', '5', '2024-04-29', 3, 'Family Pack', 'Vanila', 190, 11, 2090, 'Completed'),
(22, '7', '5', '2024-04-29', 4, 'Kulfi', 'study table', 38.94, 45, 1752.3, 'Completed'),
(23, '8', '5', '2024-04-29', 2, 'Cone', 'Butterscotch', 25, 1, 25, 'Completed'),
(24, '8', '5', '2024-04-29', 3, 'Family Pack', 'Vanila', 190, 21, 3990, 'Completed'),
(25, '8', '5', '2024-04-29', 4, 'Kulfi', 'study table', 38.94, 1, 38.94, 'Completed'),
(26, '8', '5', '2024-04-29', 5, 'Kulfi', 'study table', 38.94, 1, 38.94, 'Completed'),
(27, '8', '5', '2024-04-29', 6, 'Kulfi', 'Shahi Malai', 21.83, 1, 21.83, 'Completed'),
(28, '9', '1', '2024-04-29', 1, 'Kulfi', 'Shahi Malai', 21, 11, 231, 'Completed'),
(29, '9', '1', '2024-04-29', 2, 'Cone', 'Butterscotch', 25, 111, 2775, 'Completed'),
(30, '9', '1', '2024-04-29', 3, 'Family Pack', 'Vanila', 190, 11, 2090, 'Completed'),
(31, '10', '6', '2024-04-29', 1, 'Kulfi', 'Shahi Malai', 21, 1, 21, 'Completed'),
(32, '10', '6', '2024-04-29', 2, 'Cone', 'Butterscotch', 25, 11, 275, 'Completed'),
(33, '10', '6', '2024-04-29', 3, 'Family Pack', 'Vanila', 190, 156677, 29768600, 'Completed'),
(34, '10', '6', '2024-04-29', 4, 'Kulfi', 'study table', 38.94, 11, 428.34, 'Completed'),
(35, '10', '6', '2024-04-29', 5, 'Kulfi', 'study table', 38.94, 33, 1285.02, 'Completed'),
(36, '10', '6', '2024-04-29', 6, 'Kulfi', 'Shahi Malai', 21.83, 44, 960.52, 'Completed'),
(37, '10', '6', '2024-04-29', 1, 'Kulfi', 'Shahi Malai', 21, 1, 21, 'Completed'),
(38, '10', '6', '2024-04-29', 2, 'Cone', 'Butterscotch', 25, 1, 25, 'Completed'),
(39, '10', '6', '2024-04-29', 3, 'Family Pack', 'Vanila', 190, 1, 190, 'Completed'),
(40, '10', '6', '2024-04-29', 6, 'Kulfi', 'Shahi Malai', 21.83, 1, 21.83, 'Completed'),
(41, '10', '6', '2024-04-29', 7, 'Kulfi', 'redperu', 36.757, 1, 36.76, 'Completed'),
(42, '10', '6', '2024-04-29', 8, 'Kulfi', 'rushi', 54.78, 1, 54.78, 'Completed'),
(43, '10', '6', '2024-04-29', 9, 'Kulfi', 'CHOCLATE', 25.96, 1, 25.96, 'Completed'),
(44, '10', '6', '2024-04-29', 10, 'Kulfi', 'study table', 38.94, 1, 38.94, 'Completed'),
(45, '10', '1', '2024-04-29', 1, 'Kulfi', 'Shahi Malai', 21, 1, 21, 'Completed'),
(46, '10', '1', '2024-04-29', 2, 'Cone', 'Butterscotch', 25, 1, 25, 'Completed'),
(47, '10', '1', '2024-04-29', 3, 'Family Pack', 'Vanila', 190, 1, 190, 'Completed'),
(48, '10', '1', '2024-04-29', 4, 'Kulfi', 'study table', 38.94, 1, 38.94, 'Completed'),
(49, '10', '1', '2024-04-29', 1, 'Kulfi', 'Shahi Malai', 21, 1, 21, 'Completed'),
(50, '10', '1', '2024-04-29', 2, 'Cone', 'Butterscotch', 25, 2, 50, 'Completed'),
(51, '10', '1', '2024-04-29', 3, 'Family Pack', 'Vanila', 190, 2, 380, 'Completed'),
(52, '10', '1', '2024-04-29', 1, 'Kulfi', 'Shahi Malai', 21, 1, 21, 'Completed'),
(53, '10', '1', '2024-04-29', 2, 'Cone', 'Butterscotch', 25, 1, 25, 'Completed'),
(54, '10', '1', '2024-04-29', 3, 'Family Pack', 'Vanila', 190, 1, 190, 'Completed'),
(55, '10', '1', '2024-04-29', 1, 'Kulfi', 'Shahi Malai', 21, 1, 21, 'Completed'),
(56, '10', '1', '2024-04-29', 2, 'Cone', 'Butterscotch', 25, 1, 25, 'Completed'),
(57, '10', '1', '2024-04-29', 1, 'Kulfi', 'Shahi Malai', 21, 11, 231, 'Completed'),
(58, '10', '1', '2024-04-29', 2, 'Cone', 'Butterscotch', 25, 1, 25, 'Completed'),
(59, '10', '', '2024-04-30', 1, 'Kulfi', 'Shahi Malai', 21, 6, 126, 'Completed'),
(60, '10', '', '2024-04-30', 3, 'Family Pack', 'Vanila', 190, 8, 1520, 'Completed'),
(61, '10', '1', '2024-04-30', 1, 'Kulfi', 'Shahi Malai', 21, 34, 714, 'Completed'),
(62, '10', '1', '2024-04-30', 2, 'Cone', 'Butterscotch', 25, 12, 300, 'Completed'),
(63, '11', '1', '2024-04-30', 1, 'Kulfi', 'Shahi Malai', 21, 12, 252, 'Completed'),
(64, '12', '1', '2024-04-30', 1, 'Kulfi', 'Shahi Malai', 21, 10, 210, 'Completed'),
(65, '13', '1', '2024-04-30', 1, 'Kulfi', 'Shahi Malai', 21, 10, 210, 'Completed'),
(66, '13', '1', '2024-04-30', 2, 'Cone', 'Butterscotch', 25, 10, 250, 'Completed'),
(67, '13', '1', '2024-04-30', 6, 'Kulfi', 'Shahi Malai', 21.83, 22, 480.26, 'Completed'),
(68, '13', '1', '2024-04-30', 10, 'Kulfi', 'study table', 38.94, 10, 389.4, 'Completed'),
(69, '14', '6', '2024-04-30', 1, 'Kulfi', 'Shahi Malai', 21, 1, 21, 'Completed'),
(70, '14', '6', '2024-04-30', 3, 'Family Pack', 'Vanila', 190, 1, 190, 'Completed'),
(71, '14', '6', '2024-04-30', 5, 'Kulfi', 'study table', 38.94, 1, 38.94, 'Completed'),
(72, '14', '6', '2024-04-30', 7, 'Kulfi', 'redperu', 36.757, 1, 36.76, 'Completed'),
(73, '14', '6', '2024-04-30', 10, 'Kulfi', 'study table', 38.94, 1, 38.94, 'Completed'),
(74, '15', '3', '2024-04-30', 1, 'Kulfi', 'Shahi Malai', 21, 1, 21, 'Completed'),
(75, '15', '3', '2024-04-30', 2, 'Cone', 'Butterscotch', 25, 11, 275, 'Completed'),
(76, '16', '6', '2024-05-01', 1, 'Kulfi', 'Shahi Malai', 21.948, 1, 21.95, 'Completed'),
(77, '16', '6', '2024-05-01', 2, 'Kulfi', 'Mango', 28.4026, 2, 56.81, 'Completed'),
(78, '16', '6', '2024-05-01', 3, 'Kulfi', 'Sitafal', 36.757, 4, 147.03, 'Completed'),
(79, '17', '3', '2024-05-02', 1, 'Kulfi', 'Shahi Malai', 21.948, 12, 263.38, 'Completed'),
(80, '17', '3', '2024-05-02', 3, 'Kulfi', 'Sitafal', 36.757, 32, 1176.22, 'Completed'),
(81, '18', '6', '2024-05-02', 1, 'Kulfi', 'Shahi Malai', 21.948, 54, 1185.19, 'Completed'),
(82, '19', '6', '2024-05-02', 1, 'Kulfi', 'Shahi Malai', 21.948, 5, 109.74, 'Completed'),
(83, '19', '6', '2024-05-02', 2, 'Kulfi', 'Mango', 28.4026, 4, 113.61, 'Completed'),
(84, '20', '6', '2024-05-02', 2, 'Kulfi', 'Mango', 28.4026, 87, 2471.03, 'Completed'),
(85, '20', '6', '2024-05-02', 12, 'Cone', 'Butterscotch', 29.9956, 87, 2609.62, 'Completed'),
(86, '20', '6', '2024-05-02', 13, 'Chakobar', 'Chokobar', 18.762, 76, 1425.91, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(50) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `firmname` varchar(50) DEFAULT NULL,
  `homeaddress` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `areaname` varchar(50) DEFAULT NULL,
  `countryname` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `taluka` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `m_number` varchar(12) DEFAULT NULL,
  `w_number` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `r_date` date DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `f_model` varchar(50) DEFAULT NULL,
  `pancard` varchar(50) DEFAULT NULL,
  `adharno` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `fullname`, `firmname`, `homeaddress`, `location`, `areaname`, `countryname`, `state`, `district`, `taluka`, `city`, `pincode`, `m_number`, `w_number`, `email`, `date`, `image`, `r_date`, `gender`, `f_model`, `pancard`, `adharno`, `password`) VALUES
(1, 'Rushikesh ', 'rushi 321', 'near kdc bank kine', 'near bus stand', 'bus stand', 'India', 'Maharashtra', 'kolhapur', 'ajara', 'kine', 416504, '7517907051', '89552973615', 'rushikeshgilbile@gmail.com', '2001-07-15', '', '2024-04-01', 'Male', 'Premium Store', 'DAVPG9568K', '367659654613', 'rushi@123'),
(2, 'Rushikesh Rajaram Gilbile', 'rushi_123', 'near kdc bank kine', 'bus stand', 'bus stand', 'India', 'Maharashtra', 'kolhapur', 'ajara', 'kine', 416504, '7517907051', '9821500290', 'rushikeshgilbile@gmail.com', '2024-04-12', '', '2024-04-21', 'Female', 'Premium Store', 'DAVPG9568K', '367659654613', '12345'),
(3, 'Rushikesh Rajaram Gilbile', 'rushi_123', 'near kdc bank kine', 'near bus stand', 'bus stand', 'India', 'Maharashtra', 'jhjjjj', 'ajara', 'kine', 416504, '7517907051', '9821500290', 'rushikeshgilbile@gmail.com', '2024-04-05', '', '2024-04-14', 'Others', 'Startup', 'DAVPG9568K', '367659654613', '123'),
(4, 'Rushikesh Rajaram Gilbile', 'rushi_123', 'near kdc bank kine', 'bus stand', 'bus stand', 'India', 'Maharashtra', 'kolhapur', 'ajara', 'kine', 416504, '7517907051', '9821500290', 'rushikeshgilbile@gmail.com', '2024-04-06', '6623881a7eb8d_n1.jpg', '2024-04-25', 'Female', 'Kulfi Van', 'DAVPG9568K', '1234567898765432', '123456'),
(5, 'Rushikesh Rajaram Gilbile', 'rushi_123', 'near kdc bank kine', 'near bus stand', 'bus stand', 'India', 'Maharashtra', 'kolhapur', 'ajara', 'kine', 416504, '7517907051', '9821500290', 'rushikeshgilbile@gmail.com', '2024-04-04', '662dd2ba2d5a6_662a2607e48fa_6622093589c68_slider-img1.png', '2024-04-26', 'Male', 'Startup', 'DAVPG9568K', '367659654613', '321'),
(6, 'suchit sanjay  gudulkar', 'such', 'near kdc bank kine', 'near bus stand', 'bus stand', 'India', 'Maharashtra', 'kolhapur', 'ajara', 'kine', 416504, '7083061973', '7083061973', 'suchitgudulkar75@gmail.com', '2024-04-18', 'sc1.png', '2024-04-05', 'Male', 'Select Model', 'DAVPG9568K', '685537918018', 'such');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `c_payment`
--
ALTER TABLE `c_payment`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `c_payment`
--
ALTER TABLE `c_payment`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
