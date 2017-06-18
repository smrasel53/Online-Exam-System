-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2017 at 10:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminUser` varchar(50) NOT NULL,
  `adminPass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminUser`, `adminPass`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ans`
--

CREATE TABLE `tbl_ans` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `rightAns` int(11) NOT NULL DEFAULT '0',
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ans`
--

INSERT INTO `tbl_ans` (`id`, `quesNo`, `rightAns`, `ans`) VALUES
(37, 1, 1, 'icttrends.com'),
(38, 1, 0, ' psexam.com'),
(39, 1, 0, 'prepare.icttrends.com'),
(40, 1, 0, 'mcqsets.com'),
(41, 2, 1, ' visited link'),
(42, 2, 0, 'virtual link'),
(43, 2, 0, ' very good link'),
(44, 2, 0, ' active link');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ques`
--

CREATE TABLE `tbl_ques` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `ques` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ques`
--

INSERT INTO `tbl_ques` (`id`, `quesNo`, `ques`) VALUES
(10, 1, 'Where can you find best quality multiple choice questions?'),
(11, 2, 'What doesvlink attribute mean?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `name`, `username`, `password`, `email`, `status`) VALUES
(3, 'Jason Roy', 'roy', '202cb962ac59075b964b07152d234b70', 'jason@gmail.com', 0),
(4, 'Jahir Kahn', 'jahir', '202cb962ac59075b964b07152d234b70', 'jasonroy@gmail.com', 0),
(5, 'Alex Hales', 'alex', '202cb962ac59075b964b07152d234b70', 'alex@yahoo.com', 0),
(6, 'Saiful Islam', 'saiful', '202cb962ac59075b964b07152d234b70', 'saiful@gmail.com', 0),
(7, 'Abu Sofian', 'rasel23', '202cb962ac59075b964b07152d234b70', 'liveonrasel@gmail.cpom', 0),
(8, 'Milon Mahmud', 'milon', '202cb962ac59075b964b07152d234b70', 'milon@hotmail.com', 0),
(9, 'Abdur Rahman', 'rahman', '202cb962ac59075b964b07152d234b70', 'rahman@hotmail.com', 1),
(10, 'Sohel Rana', 'rana34', '202cb962ac59075b964b07152d234b70', 'sohel234@gmail.com', 0),
(11, 'Jibon Mia', 'mia', '202cb962ac59075b964b07152d234b70', 'jibon@yahoo.com', 0),
(12, 'Abul Kalam', 'kalam', '202cb962ac59075b964b07152d234b70', 'abulkalam@gmail.com', 0),
(13, 'Rahim Uddin', 'rahim', '81dc9bdb52d04dc20036dbd8313ed055', 'rahim@gmail.com', 0),
(14, 'Saiful Rana', 'saiful', '202cb962ac59075b964b07152d234b70', 'saifulrana@gmail.com', 0),
(16, 'Rahim Uddin', 'rahim', '202cb962ac59075b964b07152d234b70', 'rahim56@yahoo.com', 0),
(17, 'Salman Khan', 'salman', '202cb962ac59075b964b07152d234b70', 'salman123@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ques`
--
ALTER TABLE `tbl_ques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `tbl_ques`
--
ALTER TABLE `tbl_ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
