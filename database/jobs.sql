-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 11:11 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` bigint(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `msg`, `date`) VALUES
(1, 'Ravikesh Yadav', 'ravikeshyadav4@gmail.com', 'test msg', '2019-07-12 06:28:28');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `eid` int(10) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `person_name` varchar(60) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `address` text NOT NULL,
  `time` varchar(20) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`eid`, `company_name`, `email`, `pwd`, `person_name`, `mobile`, `designation`, `address`, `time`) VALUES
(1, 'google', 'ravikeshyadav20@gmail.com', '1234', 'Ravikesh', '7411966489', 'Developer', 'bangalore', '2019-07-11 13:33:14'),
(2, 'Evineon', 'shiba@gmail.com', 'shiba', 'Shiba', '7417417417', 'Developer', 'bangalore', '2019-07-11 14:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `pid` bigint(10) NOT NULL,
  `key_role` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `experience` int(2) NOT NULL,
  `address` text NOT NULL,
  `salary` bigint(10) NOT NULL,
  `emp_type` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `job_description` text NOT NULL,
  `company_profile` text NOT NULL,
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`pid`, `key_role`, `company_name`, `experience`, `address`, `salary`, `emp_type`, `email`, `job_description`, `company_profile`, `time`) VALUES
(1, 'web developer', 'Evineon', 1, 'Bangalore', 5, 'Full Time', 'ravikeshyadav20@gmail.com', 'For BE, B.Tech \r\nbranches : CSE, ISE\r\nEstablished in 2015, we are India\'s first retail consulting & process outsourcing company. We have a team of passionate, well-groomed & skilled personnel with over 200 years of combined experience in retail transformations across domains. Our solutions are bespoke & based on our deep insights using data analysis. We launch change management projects at our client businesses for achieving turnarounds through an outcome-based revenue model. Our goal is to help our clients achieve a business model that adds value, is sustainable & eventually scalable as well.\r\n', 'Evineon', '2019-07-11'),
(3, 'TEACHING', 'Evineon', 0, 'bangalore', 5, 'Full Time', 'shiba@gmail.com', 'kjhmnbvc', 'IOLJKHMBN ', '2019-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` bigint(10) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `exp_year` int(2) NOT NULL,
  `exp_month` int(2) NOT NULL,
  `resume` varchar(300) NOT NULL,
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `lname`, `email`, `pwd`, `exp_year`, `exp_month`, `resume`, `time`) VALUES
(1, 'RAVIKESH', 'YADAV', 'ravikeshyadav4@gmail.com', '1234', 0, 0, '', '2019-07-11'),
(2, 'Shiba', 'Prasad', 'shiba@gmail.com', 'shiba', 0, 0, '', '2019-07-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `eid` (`eid`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `pid` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
