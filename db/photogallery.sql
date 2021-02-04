-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 05:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photogallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `rainbow`
--

CREATE TABLE `rainbow` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(255) DEFAULT NULL,
  `img_type` varchar(255) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `img_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tagmaster`
--

CREATE TABLE `tagmaster` (
  `Tag` varchar(40) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tagmaster`
--

INSERT INTO `tagmaster` (`Tag`, `path`) VALUES
('rainbow', '../cover/tem.jpg'),
('test', '../cover/2020-12-26.png');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(255) DEFAULT NULL,
  `img_type` varchar(255) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `img_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`img_id`, `img_name`, `img_type`, `img_path`, `img_title`) VALUES
(5, 'tem.jpg', 'image/jpeg', '../img/test/tem.jpg', 'Yes'),
(6, 'c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg', 'image/jpeg', '../img/test/c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg', 'aaaa'),
(7, 'c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg', 'image/jpeg', '../img/test/c573bf41-6a7c-4927-845c-4ca0260aad6b-760x400.jpeg', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Access` varchar(10) NOT NULL,
  `LoginStatus` int(1) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`, `Access`, `LoginStatus`, `LastUpdate`) VALUES
('Jeerachon', '123456', 'user', 1, '2021-02-04 09:11:32'),
('Sirichai', '654321', 'admin', 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rainbow`
--
ALTER TABLE `rainbow`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `tagmaster`
--
ALTER TABLE `tagmaster`
  ADD PRIMARY KEY (`Tag`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rainbow`
--
ALTER TABLE `rainbow`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
