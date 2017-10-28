-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2017 at 04:55 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std_info_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_std`
--

CREATE TABLE `tbl_std` (
  `std_id` int(11) NOT NULL,
  `std_name` varchar(100) NOT NULL,
  `std_dob` varchar(100) NOT NULL,
  `std_gender` varchar(50) NOT NULL,
  `std_email` varchar(100) NOT NULL,
  `std_address` varchar(255) NOT NULL,
  `std_phone` varchar(15) NOT NULL,
  `std_school` varchar(100) NOT NULL,
  `std_mname` varchar(100) NOT NULL,
  `std_fname` varchar(100) NOT NULL,
  `std_img` varchar(154) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_std`
--

INSERT INTO `tbl_std` (`std_id`, `std_name`, `std_dob`, `std_gender`, `std_email`, `std_address`, `std_phone`, `std_school`, `std_mname`, `std_fname`, `std_img`) VALUES
(1, 'S.M.Imtiaz Hussain', '23/03/1993', '1', 'smimtiaz.cse@gmail.com', '20agrani', '01711111111', 'scholarshome', 'Ismat Ara khanam', 'S.M.Iqbal Hussain Pir', '../uploads/1e8b16d26e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_std`
--
ALTER TABLE `tbl_std`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_std`
--
ALTER TABLE `tbl_std`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
