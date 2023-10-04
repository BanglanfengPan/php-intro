-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2019 at 05:09 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `employee_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(5) NOT NULL,
  `name` varchar(15) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `joined_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `phone`, `joined_at`) VALUES
(1, 'John Wick', '889977889', '2019-06-21 11:30:00.000000'),
(2, 'John Dalton', '889922889', '2019-06-26 10:34:00.000000'),
(3, 'Harry Potter', '229977889', '2019-06-20 12:31:00.000000'),
(4, 'Walter Red', '889922889', '2019-06-26 10:30:00.000000'),
(5, 'Flynn Wick', '843977889', '2019-06-22 10:30:00.000000'),
(6, 'Skyler Dalton', '889922189', '2019-06-13 15:30:00.000000'),
(7, 'Rameshwar Panda', '229944889', '2019-06-20 10:30:00.000000'),
(8, 'Shahrukh Khan', '889922389', '2019-06-26 10:30:00.000000'),
(17, 'Adesh Khana', '189977889', '2019-07-03 10:30:00.000000'),
(18, 'Hari Prasad', '889921889', '2019-07-04 10:30:00.000000'),
(19, 'Srinivas Gupta', '229377889', '2019-07-11 10:30:00.000000'),
(20, 'Jiya Raj', '889122889', '2019-07-20 10:30:00.000000'),
(21, 'Radhika Kumar', '843971889', '2019-07-13 12:40:00.000000'),
(22, 'Shilpi Hari', '889923189', '2019-07-27 15:30:00.000000'),
(23, 'Rajiv Panda', '229914889', '2019-07-20 10:30:00.000000'),
(24, 'Sherly Khan', '889922189', '2019-07-31 15:30:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
