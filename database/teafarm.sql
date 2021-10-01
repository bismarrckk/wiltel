-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 12:35 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teafarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` int(11) NOT NULL,
  `company_no` int(11) NOT NULL,
  `quantity` decimal(8,2) NOT NULL,
  `reg_date` int(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `for_date` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`card_id`, `company_no`, `quantity`, `reg_date`, `user_id`, `for_date`) VALUES
(3, 2, '544.40', 1599217182, 2, 1599084000),
(5, 1, '367.00', 1600019013, 2, 1599170400),
(6, 5, '251.00', 1600019054, 2, 1598911200),
(7, 5, '343.00', 1600019069, 2, 1598997600),
(8, 2, '311.00', 1600022338, 2, 1599256800),
(9, 2, '478.00', 1600022886, 2, 1599429600),
(10, 4, '627.80', 1600023509, 2, 1599516000),
(11, 4, '415.10', 1600024016, 2, 1599602400),
(12, 4, '477.00', 1600024521, 2, 1599688800),
(13, 1, '9.00', 1600024684, 2, 1599688800),
(14, 5, '403.00', 1600079891, 2, 1599775200);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `reg_number` int(15) NOT NULL,
  `user_id` int(11) NOT NULL,
  `farm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `name`, `reg_number`, `user_id`, `farm_id`) VALUES
(1, 'KTDA', 103, 2, 1),
(2, 'KTDA', 24, 4, 1),
(3, 'KTDA', 37, 3, 1),
(4, 'KTDA', 68, 11, 1),
(5, 'SASINI', 17017, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `credit_id` int(11) NOT NULL,
  `commodity` varchar(40) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `emp_reg` int(20) NOT NULL,
  `farm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `fullname`, `role`, `status`, `emp_reg`, `farm_id`) VALUES
(1, 'Daniel  ', 'plucking', 'active', 1599213654, 1),
(2, 'Bogongo  ', 'plucking', 'active', 1599213682, 1),
(3, 'Jane  ', 'plucking', 'active', 1599213702, 1),
(4, 'Kipngeno  ', 'plucking', 'active', 1599213719, 1),
(5, 'Samson  ', 'plucking', 'active', 1599213733, 1),
(6, 'Betty  ', 'plucking', 'active', 1599213771, 1),
(7, 'Susan  ', 'plucking', 'active', 1599213820, 1),
(8, 'Gladys  ', 'plucking', 'active', 1599213839, 1),
(9, 'Kwamboka  ', 'plucking', 'active', 1599213851, 1),
(10, 'Carren  ', 'plucking', 'active', 1599213865, 1),
(11, 'Stephen  ', 'plucking', 'active', 1599213897, 1),
(12, 'Caroline  ', 'plucking', 'active', 1599213909, 1),
(13, 'Dennis  ', 'plucking', 'active', 1599213919, 1),
(14, 'Aska  ', 'plucking', 'active', 1599213931, 1),
(15, 'Hillary  ', 'plucking', 'active', 1599214303, 1),
(16, 'Ratemo  ', 'plucking', 'active', 1599214317, 1),
(19, 'Chepkoech  ', 'plucking', 'active', 1600022633, 1),
(20, 'Sheila  ', 'plucking', 'active', 1600023773, 1),
(21, 'Anna  ', 'plucking', 'active', 1600024276, 1),
(22, 'Everline  ', 'plucking', 'active', 1600024475, 1),
(23, 'Emmanuel  ', 'plucking', 'active', 1600024766, 1);

-- --------------------------------------------------------

--
-- Table structure for table `farm_details`
--

CREATE TABLE `farm_details` (
  `farm_id` int(11) NOT NULL,
  `farm_name` varchar(30) NOT NULL,
  `farm_status` varchar(10) NOT NULL DEFAULT 'active',
  `reg_date` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farm_details`
--

INSERT INTO `farm_details` (`farm_id`, `farm_name`, `farm_status`, `reg_date`) VALUES
(1, 'Isaiah farm', 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user_log` int(20) NOT NULL,
  `role` varchar(10) NOT NULL,
  `user_reg` int(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `farm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `phone`, `password`, `user_log`, `role`, `user_reg`, `status`, `farm_id`) VALUES
(1, 'Benard Onsongo', 799129614, 'e99a18c428cb38d5f260853678922e03', 1600165870, 'manager', 1598902600, 'active', 1),
(2, 'Bismarck Kibet', 718598249, '9a8896ebf2e4a99e4b1c0174504c898a', 1599842392, 'admin', 1599127470, 'active', 1),
(3, 'Linner Metet', 726575161, 'e99a18c428cb38d5f260853678922e03', 0, 'employer', 1599127503, 'active', 1),
(4, 'Isaiah Metet', 713557459, 'e99a18c428cb38d5f260853678922e03', 0, 'employer', 1599127531, 'active', 1),
(5, 'Maureen Chelang\'at', 710516077, 'e99a18c428cb38d5f260853678922e03', 0, 'employer', 1599213182, 'active', 1),
(11, 'Esther Soi', 723075132, 'e99a18c428cb38d5f260853678922e03', 0, 'grower', 1600076783, 'active', 1);

-- --------------------------------------------------------

--
-- Table structure for table `weight`
--

CREATE TABLE `weight` (
  `weight_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  `company_no` int(11) NOT NULL,
  `reg_date` int(20) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `for_date` int(20) NOT NULL,
  `farm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weight`
--

INSERT INTO `weight` (`weight_id`, `quantity`, `company_no`, `reg_date`, `emp_id`, `user_id`, `for_date`, `farm_id`) VALUES
(1, 16, 5, 1599215117, 1, 2, 1598911200, 1),
(2, 18, 5, 1599215133, 2, 2, 1598911200, 1),
(3, 5, 5, 1599215151, 3, 2, 1598911200, 1),
(4, 14, 5, 1599215163, 4, 2, 1598911200, 1),
(5, 11, 5, 1599215192, 5, 2, 1598911200, 1),
(6, 16, 5, 1599215208, 6, 2, 1598911200, 1),
(7, 13, 5, 1599215226, 8, 2, 1598911200, 1),
(8, 23, 5, 1599215242, 9, 2, 1598911200, 1),
(9, 13, 5, 1599215263, 10, 2, 1598911200, 1),
(10, 15, 5, 1599215279, 11, 2, 1598911200, 1),
(11, 14, 5, 1599215295, 12, 2, 1598911200, 1),
(12, 11, 5, 1599215524, 13, 2, 1598911200, 1),
(13, 18, 5, 1599215546, 14, 2, 1598911200, 1),
(14, 9, 5, 1599215564, 15, 2, 1598911200, 1),
(15, 46, 5, 1599215585, 16, 2, 1598911200, 1),
(16, 13, 5, 1599215848, 1, 2, 1598997600, 1),
(17, 13, 5, 1599215864, 13, 2, 1598997600, 1),
(18, 9, 5, 1599215884, 15, 2, 1598997600, 1),
(19, 13, 5, 1599215904, 10, 2, 1598997600, 1),
(20, 28, 5, 1599215922, 2, 2, 1598997600, 1),
(21, 25, 5, 1599215940, 5, 2, 1598997600, 1),
(22, 13, 5, 1599215956, 8, 2, 1598997600, 1),
(23, 23, 5, 1599216016, 6, 2, 1598997600, 1),
(24, 28, 5, 1599216035, 9, 2, 1598997600, 1),
(25, 21, 5, 1599216053, 12, 2, 1598997600, 1),
(26, 16, 5, 1599216074, 11, 2, 1598997600, 1),
(27, 71, 5, 1599216095, 16, 2, 1598997600, 1),
(28, 19, 5, 1599216112, 4, 2, 1598997600, 1),
(29, 18, 5, 1599216138, 14, 2, 1598997600, 1),
(30, 16, 5, 1599216160, 3, 2, 1598997600, 1),
(31, 9, 5, 1599216411, 7, 2, 1598911200, 1),
(32, 17, 5, 1599216435, 7, 2, 1598997600, 1),
(33, 23, 2, 1599216681, 1, 2, 1599084000, 1),
(34, 31, 2, 1599216700, 5, 2, 1599084000, 1),
(35, 26, 2, 1599216717, 13, 2, 1599084000, 1),
(36, 28, 2, 1599216744, 11, 2, 1599084000, 1),
(37, 35, 2, 1599216774, 2, 2, 1599084000, 1),
(38, 89, 2, 1599216795, 16, 2, 1599084000, 1),
(39, 29, 2, 1599216815, 6, 2, 1599084000, 1),
(40, 39, 2, 1599216840, 3, 2, 1599084000, 1),
(41, 26, 2, 1599216861, 9, 2, 1599084000, 1),
(42, 25, 2, 1599216884, 7, 2, 1599084000, 1),
(43, 34, 2, 1599216907, 14, 2, 1599084000, 1),
(44, 30, 2, 1599216925, 12, 2, 1599084000, 1),
(45, 39, 2, 1599216949, 10, 2, 1599084000, 1),
(46, 29, 2, 1599216965, 8, 2, 1599084000, 1),
(47, 16, 2, 1599216986, 15, 2, 1599084000, 1),
(48, 28, 2, 1599217004, 4, 2, 1599084000, 1),
(50, 22, 1, 1600018596, 4, 2, 1599170400, 1),
(51, 8, 1, 1600018609, 1, 2, 1599170400, 1),
(52, 19, 1, 1600018624, 13, 2, 1599170400, 1),
(53, 22, 1, 1600018638, 5, 2, 1599170400, 1),
(54, 17, 1, 1600018654, 8, 2, 1599170400, 1),
(55, 23, 1, 1600018670, 2, 2, 1599170400, 1),
(56, 20, 1, 1600018684, 3, 2, 1599170400, 1),
(57, 54, 1, 1600018701, 16, 2, 1599170400, 1),
(58, 20, 1, 1600018718, 11, 2, 1599170400, 1),
(59, 23, 1, 1600018734, 9, 2, 1599170400, 1),
(60, 22, 1, 1600018747, 6, 2, 1599170400, 1),
(61, 23, 1, 1600018760, 14, 2, 1599170400, 1),
(62, 27, 1, 1600018785, 12, 2, 1599170400, 1),
(63, 25, 1, 1600018802, 10, 2, 1599170400, 1),
(64, 27, 1, 1600018847, 7, 2, 1599170400, 1),
(65, 15, 1, 1600018865, 15, 2, 1599170400, 1),
(66, 20, 2, 1600019273, 4, 2, 1599256800, 1),
(67, 11, 2, 1600019287, 3, 2, 1599256800, 1),
(68, 7, 2, 1600021450, 1, 2, 1599256800, 1),
(69, 26, 2, 1600021497, 9, 2, 1599256800, 1),
(70, 22, 2, 1600021561, 10, 2, 1599256800, 1),
(71, 70, 2, 1600021593, 16, 2, 1599256800, 1),
(72, 13, 2, 1600021630, 15, 2, 1599256800, 1),
(73, 23, 2, 1600021667, 6, 2, 1599256800, 1),
(74, 19, 2, 1600021707, 13, 2, 1599256800, 1),
(75, 22, 2, 1600021750, 14, 2, 1599256800, 1),
(76, 23, 2, 1600021781, 5, 2, 1599256800, 1),
(77, 20, 2, 1600021824, 11, 2, 1599256800, 1),
(78, 21, 2, 1600021888, 12, 2, 1599256800, 1),
(79, 19, 2, 1600022470, 10, 2, 1599429600, 1),
(80, 12, 2, 1600022497, 1, 2, 1599429600, 1),
(81, 16, 2, 1600022547, 3, 2, 1599429600, 1),
(82, 34, 2, 1600022575, 9, 2, 1599429600, 1),
(83, 25, 2, 1600022657, 19, 2, 1599429600, 1),
(84, 31, 2, 1600022672, 4, 2, 1599429600, 1),
(85, 28, 2, 1600022687, 13, 2, 1599429600, 1),
(86, 39, 2, 1600022710, 12, 2, 1599429600, 1),
(87, 12, 2, 1600022723, 15, 2, 1599429600, 1),
(88, 95, 2, 1600022737, 16, 2, 1599429600, 1),
(89, 31, 2, 1600022753, 8, 2, 1599429600, 1),
(90, 37, 2, 1600022769, 11, 2, 1599429600, 1),
(91, 45, 2, 1600022780, 14, 2, 1599429600, 1),
(92, 30, 2, 1600022793, 5, 2, 1599429600, 1),
(93, 7, 2, 1600022804, 2, 2, 1599429600, 1),
(94, 34, 4, 1600023165, 4, 2, 1599516000, 1),
(96, 27, 4, 1600023240, 13, 2, 1599516000, 1),
(97, 35, 4, 1600023253, 9, 2, 1599516000, 1),
(98, 29, 4, 1600023267, 11, 2, 1599516000, 1),
(99, 43, 4, 1600023283, 5, 2, 1599516000, 1),
(100, 26, 4, 1600023294, 19, 2, 1599516000, 1),
(101, 28, 4, 1600023309, 3, 2, 1599516000, 1),
(102, 22, 4, 1600023324, 2, 2, 1599516000, 1),
(103, 21, 4, 1600023337, 8, 2, 1599516000, 1),
(104, 41, 4, 1600023352, 14, 2, 1599516000, 1),
(105, 23, 4, 1600023396, 15, 2, 1599516000, 1),
(106, 33, 4, 1600023410, 1, 2, 1599516000, 1),
(107, 90, 4, 1600023425, 16, 2, 1599516000, 1),
(108, 65, 4, 1600023451, 10, 2, 1599516000, 1),
(109, 39, 4, 1600023462, 12, 2, 1599516000, 1),
(110, 27, 4, 1600023476, 7, 2, 1599516000, 1),
(111, 17, 4, 1600023666, 4, 2, 1599602400, 1),
(112, 17, 4, 1600023681, 13, 2, 1599602400, 1),
(113, 22, 4, 1600023692, 8, 2, 1599602400, 1),
(114, 18, 4, 1600023706, 9, 2, 1599602400, 1),
(115, 18, 4, 1600023719, 5, 2, 1599602400, 1),
(116, 39, 4, 1600023732, 16, 2, 1599602400, 1),
(117, 33, 4, 1600023744, 14, 2, 1599602400, 1),
(118, 8, 4, 1600023794, 20, 2, 1599602400, 1),
(119, 25, 4, 1600023813, 2, 2, 1599602400, 1),
(120, 17, 4, 1600023834, 7, 2, 1599602400, 1),
(121, 12, 4, 1600023856, 15, 2, 1599602400, 1),
(122, 17, 4, 1600023877, 19, 2, 1599602400, 1),
(123, 21, 4, 1600023892, 11, 2, 1599602400, 1),
(124, 56, 4, 1600023907, 10, 2, 1599602400, 1),
(125, 11, 4, 1600023925, 6, 2, 1599602400, 1),
(126, 38, 4, 1600023937, 12, 2, 1599602400, 1),
(127, 29, 4, 1600024099, 3, 2, 1599602400, 1),
(128, 23, 4, 1600024146, 13, 2, 1599688800, 1),
(129, 16, 4, 1600024163, 15, 2, 1599688800, 1),
(130, 9, 4, 1600024181, 6, 2, 1599688800, 1),
(131, 11, 4, 1600024196, 20, 2, 1599688800, 1),
(132, 24, 4, 1600024213, 5, 2, 1599688800, 1),
(133, 16, 4, 1600024224, 19, 2, 1599688800, 1),
(134, 33, 4, 1600024243, 9, 2, 1599688800, 1),
(135, 19, 4, 1600024295, 21, 2, 1599688800, 1),
(136, 18, 4, 1600024310, 11, 2, 1599688800, 1),
(137, 28, 4, 1600024325, 7, 2, 1599688800, 1),
(138, 35, 4, 1600024337, 14, 2, 1599688800, 1),
(139, 50, 4, 1600024349, 10, 2, 1599688800, 1),
(140, 21, 4, 1600024360, 12, 2, 1599688800, 1),
(141, 21, 4, 1600024373, 16, 2, 1599688800, 1),
(142, 42, 4, 1600024386, 3, 2, 1599688800, 1),
(143, 22, 4, 1600024399, 8, 2, 1599688800, 1),
(144, 30, 4, 1600024411, 2, 2, 1599688800, 1),
(145, 37, 4, 1600024494, 22, 2, 1599688800, 1),
(146, 4, 1, 1600024651, 10, 2, 1599688800, 1),
(147, 4, 1, 1600024664, 12, 2, 1599688800, 1),
(148, 13, 5, 1600024742, 15, 2, 1599775200, 1),
(149, 17, 5, 1600024786, 23, 2, 1599775200, 1),
(150, 14, 5, 1600024804, 13, 2, 1599775200, 1),
(151, 25, 5, 1600024817, 11, 2, 1599775200, 1),
(152, 29, 5, 1600024832, 2, 2, 1599775200, 1),
(153, 18, 5, 1600024852, 8, 2, 1599775200, 1),
(154, 32, 5, 1600024867, 10, 2, 1599775200, 1),
(155, 39, 5, 1600024879, 12, 2, 1599775200, 1),
(156, 38, 5, 1600024898, 16, 2, 1599775200, 1),
(157, 14, 5, 1600024910, 21, 2, 1599775200, 1),
(158, 29, 5, 1600024920, 14, 2, 1599775200, 1),
(159, 43, 5, 1600024937, 9, 2, 1599775200, 1),
(160, 19, 5, 1600024950, 20, 2, 1599775200, 1),
(161, 10, 5, 1600024960, 6, 2, 1599775200, 1),
(162, 27, 5, 1600024975, 3, 2, 1599775200, 1),
(163, 17, 5, 1600024985, 19, 2, 1599775200, 1),
(164, 19, 5, 1600025001, 7, 2, 1599775200, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `company_no` (`company_no`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `farm_id` (`farm_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`credit_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `farm_id` (`farm_id`);

--
-- Indexes for table `farm_details`
--
ALTER TABLE `farm_details`
  ADD PRIMARY KEY (`farm_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `farm_id` (`farm_id`);

--
-- Indexes for table `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`weight_id`),
  ADD KEY `farm_id` (`farm_id`),
  ADD KEY `company_no` (`company_no`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `credit`
--
ALTER TABLE `credit`
  MODIFY `credit_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `farm_details`
--
ALTER TABLE `farm_details`
  MODIFY `farm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `weight`
--
ALTER TABLE `weight`
  MODIFY `weight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `card_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `card_ibfk_2` FOREIGN KEY (`company_no`) REFERENCES `companies` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`farm_id`) REFERENCES `farm_details` (`farm_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `companies_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`farm_id`) REFERENCES `farm_details` (`farm_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`farm_id`) REFERENCES `farm_details` (`farm_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `weight`
--
ALTER TABLE `weight`
  ADD CONSTRAINT `weight_ibfk_1` FOREIGN KEY (`farm_id`) REFERENCES `farm_details` (`farm_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `weight_ibfk_2` FOREIGN KEY (`company_no`) REFERENCES `companies` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `weight_ibfk_3` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `weight_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
