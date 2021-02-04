-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 10:29 AM
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
-- Table structure for table `humgee`
--

CREATE TABLE `humgee` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(255) DEFAULT NULL,
  `img_type` varchar(255) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `img_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `humgee`
--

INSERT INTO `humgee` (`img_id`, `img_name`, `img_type`, `img_path`, `img_title`) VALUES
(1, 'ersa (1) (1).png', 'image/png', '../img/HUMGEE/ersa (1) (1).png', 'G');

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

--
-- Dumping data for table `rainbow`
--

INSERT INTO `rainbow` (`img_id`, `img_name`, `img_type`, `img_path`, `img_title`) VALUES
(1, '2020-12-26.png', 'image/png', '../img/rainbow/2020-12-26.png', 'Maintag'),
(3, 'ersa (1) (1).png', 'image/png', '../img/rainbow/ersa (1) (1).png', 'Boy');

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
('HUMGEE', '../img/HUMGEE/ersa (1) (1).png'),
('rainbow', '../img/rainbow/2020-12-26.png');

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
('Jeerachon', '123456', 'user', 0, '2021-02-02 14:33:53'),
('Sirichai', '654321', 'admin', 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `humgee`
--
ALTER TABLE `humgee`
  ADD PRIMARY KEY (`img_id`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `humgee`
--
ALTER TABLE `humgee`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rainbow`
--
ALTER TABLE `rainbow`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
