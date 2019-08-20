-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 12:24 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `cmpname` varchar(30) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `empname`, `cmpname`, `contact`, `username`, `password`) VALUES
(2, 'john', 'werwe', '111', 'john', 'e432423'),
(3, 'smith', 'werwe', '1118', 'smith', '12312');

-- --------------------------------------------------------

--
-- Table structure for table `freelancers`
--

CREATE TABLE `freelancers` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `description` varchar(300) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `key_skills` varchar(30) NOT NULL,
  `hourly` int(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancers`
--

INSERT INTO `freelancers` (`id`, `username`, `email`, `type`, `description`, `skills`, `key_skills`, `hourly`, `password`) VALUES
(1, 'Helen', 'helen@gmail.com', 'freelancer', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.randomised words which don\'t look even slightly believable.', 'c#, JavaScript', 'web', 100, '2323'),
(2, 'Jack Smith', 'jack@gmail.com', 'freelancer', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.randomised words which don\'t look even slightly believable.', 'c#, JavaScript, HTML, CSS, PHP', 'web', 200, '1234'),
(3, 'Habsa Arrad', 'arrad@gmail.com', 'freelancer', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.randomised words which don\'t look even slightly believable.', 'Angular JS, C#, CSS, Bootstrap, Python, Java, Android, Illustrator', 'design', 100, '343434');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(30) NOT NULL,
  `category` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `deadline` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'ongoing',
  `hired` varchar(30) NOT NULL DEFAULT 'N/A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `category`, `skills`, `deadline`, `salary`, `status`, `hired`) VALUES
(8, 'web', 'HTML, CSS', '2019-08-31', '$5000', 'ongoing', 'N/A'),
(9, 'writing', 'fluent in english', '2019-08-31', '$300', 'ongoing', 'N/A'),
(10, 'Web', 'HTML, CSS', '2019-08-22', '200000', 'ongoing', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `jobrequest`
--

CREATE TABLE `jobrequest` (
  `id` int(11) NOT NULL,
  `jobID` int(30) NOT NULL,
  `client` int(30) NOT NULL,
  `freelancer` varchar(30) NOT NULL,
  `freelancerName` varchar(30) NOT NULL,
  `decision` varchar(30) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobrequest`
--

INSERT INTO `jobrequest` (`id`, `jobID`, `client`, `freelancer`, `freelancerName`, `decision`) VALUES
(1, 8, 4, '2', 'Jack Smith', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `save`
--

CREATE TABLE `save` (
  `id` int(11) NOT NULL,
  `client` varchar(30) NOT NULL,
  `freelancerEmail` varchar(30) NOT NULL,
  `freelancerName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill` varchar(30) NOT NULL,
  `freelancer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `freelancer`) VALUES
(1, 'web', '1'),
(2, 'web', '2'),
(3, 'design', '3');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(30) NOT NULL,
  `client` varchar(30) NOT NULL,
  `complain` varchar(30) NOT NULL,
  `liable` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `client`, `complain`, `liable`) VALUES
(1, '3', 'Complain', NULL),
(6, '3', 'Another complain', NULL),
(7, '3', 'Another complain', NULL),
(8, '3', 'Another complain', NULL),
(9, '3', 'Another complain', NULL),
(10, '3', 'Another complain', NULL),
(11, '3', 'Another complain', NULL),
(12, '3', 'Another complain', NULL),
(13, '3', 'Another complain', NULL),
(14, '3', 'Another complain', NULL),
(15, '3', 'Another complain', NULL),
(16, '3', 'Another complain', NULL),
(17, '3', 'Another complain', NULL),
(18, '3', 'Another complain', NULL),
(19, '3', 'Another complain', NULL),
(20, '3', 'Another complain', NULL),
(21, '3', 'Another complain', NULL),
(22, '3', 'Another complain', NULL),
(23, '3', 'Another complain', NULL),
(24, '3', 'Another complain', NULL),
(25, '3', 'Another complain', NULL),
(26, '3', 'Another complain', NULL),
(27, '3', 'Another complain', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `company` varchar(30) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `card` varchar(30) NOT NULL,
  `cardnumber` int(200) NOT NULL,
  `cardcvc` int(30) NOT NULL,
  `expire` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'show',
  `plans` varchar(11) NOT NULL DEFAULT 'basic',
  `security` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `company`, `username`, `email`, `dob`, `gender`, `type`, `card`, `cardnumber`, `cardcvc`, `expire`, `password`, `status`, `plans`, `security`) VALUES
(3, 'NorwayWeb', 'Alen Hooman', 'alen@gmail.com', '2010-02-09', 'male', 'client', 'card', 1111111111, 1111, '2019-08-06', '222222', 'hide', 'basic', ''),
(4, NULL, 'Alex Sandar', 'alex@gmail.com', '1990-02-06', 'male', 'client', 'paypal', 1212121212, 2222, '2019-12-19', '333333', 'hide', 'basic', 'maw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelancers`
--
ALTER TABLE `freelancers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobrequest`
--
ALTER TABLE `jobrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save`
--
ALTER TABLE `save`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `freelancers`
--
ALTER TABLE `freelancers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jobrequest`
--
ALTER TABLE `jobrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `save`
--
ALTER TABLE `save`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
