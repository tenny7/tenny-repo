-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2017 at 02:31 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upliftas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text,
  `password` text,
  `ip` text,
  `lastlogin` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `ip`, `lastlogin`) VALUES
(1, 'admin@gmail.com', 'f034b9f98784a0227e7294ba850de1d7', NULL, NULL),
(2, 'admin@user.com', '1234', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `annoucement`
--

CREATE TABLE `annoucement` (
  `id` int(11) NOT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annoucement`
--

INSERT INTO `annoucement` (`id`, `message`) VALUES
(1, 'welcome to upliftas');

-- --------------------------------------------------------

--
-- Table structure for table `bundle_four`
--

CREATE TABLE `bundle_four` (
  `id` int(11) NOT NULL,
  `package_name` text,
  `matches` text,
  `package_requires` text,
  `package_target` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bundle_four`
--

INSERT INTO `bundle_four` (`id`, `package_name`, `matches`, `package_requires`, `package_target`) VALUES
(1, 'Swift 1', '2', '50000', '100,000'),
(2, 'Swift 2', '3', '50000', '150,000'),
(3, 'Swift 3', '4', '50000', '200,000');

-- --------------------------------------------------------

--
-- Table structure for table `bundle_one`
--

CREATE TABLE `bundle_one` (
  `id` int(11) NOT NULL,
  `package_name` text,
  `matches` text,
  `package_requires` text,
  `package_target` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bundle_one`
--

INSERT INTO `bundle_one` (`id`, `package_name`, `matches`, `package_requires`, `package_target`) VALUES
(1, 'Swift 1', '2', '5000', '10,000'),
(2, 'Swift 2', '3', '5000', '15,000'),
(3, 'Swift 3', '4', '5000', '20,000');

-- --------------------------------------------------------

--
-- Table structure for table `bundle_three`
--

CREATE TABLE `bundle_three` (
  `id` int(11) NOT NULL,
  `package_name` text,
  `matches` text,
  `package_requires` text,
  `package_target` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bundle_three`
--

INSERT INTO `bundle_three` (`id`, `package_name`, `matches`, `package_requires`, `package_target`) VALUES
(1, 'Swift 1', '2', '25000', '50,000'),
(2, 'Swift 2', '3', '25000', '75,000'),
(3, 'Swift 3', '4', '25000', '100,000');

-- --------------------------------------------------------

--
-- Table structure for table `bundle_two`
--

CREATE TABLE `bundle_two` (
  `id` int(11) NOT NULL,
  `package_name` text,
  `matches` text,
  `package_requires` text,
  `package_target` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bundle_two`
--

INSERT INTO `bundle_two` (`id`, `package_name`, `matches`, `package_requires`, `package_target`) VALUES
(1, 'Swift 1', '2', '10000', '20,000'),
(2, 'Swift 2', '3', '10000', '30,000'),
(3, 'Swift 3', '4', '10000', '40,000');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `user` text,
  `donates_to` text,
  `bundle` text,
  `swift` text,
  `amount` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` text,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `number` text NOT NULL,
  `msg_in` text NOT NULL,
  `msg_out` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proofs`
--

CREATE TABLE `proofs` (
  `id` int(11) NOT NULL,
  `user` text,
  `donates_to` text,
  `bundle` text,
  `swift` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `proof` text,
  `amount` text NOT NULL,
  `reject_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spillover`
--

CREATE TABLE `spillover` (
  `id` int(11) NOT NULL,
  `user` text,
  `bundle` text,
  `swift` text,
  `status` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text,
  `location` text,
  `account_name` text,
  `account_number` varchar(255) NOT NULL,
  `bank` text NOT NULL,
  `password` text NOT NULL,
  `verify_code` text,
  `verify_status` int(11) DEFAULT NULL,
  `bundle` text,
  `swift` text,
  `matches` text,
  `spill_status` text NOT NULL,
  `number` text,
  `eligible` text NOT NULL,
  `is_blocked` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `location`, `account_name`, `account_number`, `bank`, `password`, `verify_code`, `verify_status`, `bundle`, `swift`, `matches`, `spill_status`, `number`, `eligible`, `is_blocked`) VALUES
(1, 'A', 'a', 'A', '1111111111', 'A', '86be7afa339d0fc7cfc785e72f578d33', NULL, NULL, 'bundle_one', 'Swift 1', '2', 'false', '11111111111', 'true', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `annoucement`
--
ALTER TABLE `annoucement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bundle_four`
--
ALTER TABLE `bundle_four`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bundle_one`
--
ALTER TABLE `bundle_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bundle_three`
--
ALTER TABLE `bundle_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bundle_two`
--
ALTER TABLE `bundle_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proofs`
--
ALTER TABLE `proofs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spillover`
--
ALTER TABLE `spillover`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_num` (`number`(11));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `annoucement`
--
ALTER TABLE `annoucement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bundle_four`
--
ALTER TABLE `bundle_four`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bundle_one`
--
ALTER TABLE `bundle_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bundle_three`
--
ALTER TABLE `bundle_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bundle_two`
--
ALTER TABLE `bundle_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proofs`
--
ALTER TABLE `proofs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `spillover`
--
ALTER TABLE `spillover`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
