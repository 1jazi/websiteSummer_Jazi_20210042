-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2022 at 04:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`email`, `first_name`, `last_name`, `phone`, `time`) VALUES
('idkjazi02@gmail.com', 'jazi', 'almghariz', '07898209016', '2022-09-08 12:00:00.000000'),
('osama@gamil.com', 'osama', 'hussien', '248451', '2022-09-21 16:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`email`, `first_name`, `last_name`, `password`, `username`) VALUES
('4e@gmail.com', 'niugfyudsf', 'ghlyugvi', 'e4a7edcf8951363f3773c4f6c5196042', '8'),
('7@gmail.com', '7', '7', '8f14e45fceea167a5a36dedd4bea2543', '7'),
('abdallah.alattal.1@gmail.com', '3bood', '3taal', '0000', '3bood'),
('aeqwagrt43as@gmail.com', 'jazii', 'jazii', '1234', 'jazii'),
('g@n', 'g', 'g', '0000', 'rami'),
('jazi@gmail.com', 'jaz', 'jz', '81dc9bdb52d04dc20036dbd8313ed055', 'jaziii'),
('jaziabaadi2@icloud.com', 'jazi', 'Almghariz', '4ba29b9f9e5732ed33761840f4ba6c53', '1jazii'),
('jazji@gmail.com', 'j', 'j', 'c4ca4238a0b923820dcc509a6f75849b', 'j'),
('new@gmail.com', 'new', 'new', '1234', 'new'),
('qq@gmail.com', 'q', 'q', '098f6bcd4621d373cade4e832627b4f6', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
