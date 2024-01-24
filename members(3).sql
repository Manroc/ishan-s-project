-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 03:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `Approve` tinyint(1) NOT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fullname`, `contact`, `email`, `address`, `join_date`, `gender`, `Approve`, `price`) VALUES
(3, 'Priyanka Karki', '1234567890', 'Priyanka@karkigmail.com', 'Baneshwor', '2021-01-09', 'female', 1, ''),
(5, 'Dipesh Gharti', '9861124693', 'dipesh@yahoo.com', 'Satungal', '1999-01-21', 'male', 1, ''),
(6, 'Firoz Maharjan', '9988443311', 'firoz445@gmail.com', 'Balambu', '2022-12-23', 'male', 1, ''),
(7, 'Nikesh Dangol', '9841554413', 'Nikesh@gmail.com', 'Dallu', '2020-11-01', 'male', 1, ''),
(8, 'Neymar Thapa', '1234567899', 'Ney@gmail.com', 'Dharan', '2023-12-04', 'male', 1, ''),
(9, 'Ajay Singh', '2233445510', 'ajaysingh@gmail.com', 'Chitwan', '2024-01-01', 'male', 1, ''),
(10, 'Kaji Thakur', '1234567890', 'kaji@gmail.com', 'Janakpur', '2023-07-05', 'male', 1, ''),
(15, 'Jenish Khadgi', '9860238500', 'khadgi010@gmail.com', 'sitapaila', '2024-01-23', 'male', 1, 'Rs.5000'),
(16, 'Jenish Khadgi', '9860238500', 'jenish01p@gmail.com', 'sitapaila', '2024-01-23', 'male', 1, 'Rs.5000'),
(17, 'Jenish Khadgi', '9860238500', 'jenish01p@gmail.com', 'sitapaila', '2024-01-23', 'male', 1, 'Rs.5000'),
(18, 'Jenish Khadgi', '9860238500', 'khadgi010@gmail.com', 'sitapaila', '2024-01-23', 'other', 1, 'Rs.5000'),
(19, 'Jenish Khadgi', '9860238500', 'khadgi010@gmail.com', 'sitapaila', '2024-01-23', 'other', 1, 'Rs.5000'),
(20, 'Test man', '9861584526', 'bla12@gmail.com', 'ktm', '2024-01-15', 'male', 0, 'Rs.2000/month'),
(21, 'Test man 2', '9861584528', 'bla12@gmail.com', 'ktm', '2024-01-15', 'male', 0, 'Rs.2000/month'),
(22, 'Test man 2', '9861584585', 'bla12@gmail.com', 'ktm', '2024-01-15', 'male', 0, 'Rs.2000/month'),
(23, 'Test man 3', '9861584594', 'bla12@gmail.com', 'ktm', '2024-01-15', 'male', 0, 'Rs.2000/month'),
(24, 'Test man 3', '9865584597', 'bla12@gmail.com', 'ktm', '2024-01-15', 'male', 0, 'Rs.2000/month'),
(25, 'Test man 3', '9865584592', 'bla12@gmail.com', 'ktm', '2024-01-15', 'male', 0, 'Rs.2000/month');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
