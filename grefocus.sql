-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 11:35 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grefocus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `a_uid` int(11) NOT NULL,
  `a_id` varchar(256) NOT NULL,
  `a_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`a_uid`, `a_id`, `a_pwd`) VALUES
(1, 'vaibhav', 'asdfg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Yash Mahajan', 'ymahajan67@gmail.com', 'Website', 'Best'),
(0, 'vaibhav patil', 'vaibhavpp98@gmail.com', 'Website', 'Informative');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `rank` int(11) NOT NULL,
  `name` text NOT NULL,
  `verbal` int(11) NOT NULL,
  `quant` int(11) NOT NULL,
  `image` text NOT NULL,
  `website` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`rank`, `name`, `verbal`, `quant`, `image`, `website`) VALUES
(1, 'Carnegie Mellon University', 159, 161, 'images/uni/1.jpg', 'https://www.scs.cmu.edu/'),
(2, 'Massachusetts Institute of Technology', 157, 162, 'images/uni/2.jpg', 'https://www.eecs.mit.edu/'),
(3, 'Stanford University', 158, 163, 'images/uni/3.jpg', 'https://cs.stanford.edu/'),
(4, 'University of California Berkeley', 155, 161, 'images/uni/4.jpg', 'https://eecs.berkeley.edu/'),
(5, 'University of Illinois Urbana Champaign', 155, 163, 'images/uni/5.png', 'https://cs.illinois.edu/'),
(6, 'Cornell University', 160, 162, 'images/uni/6.jpg', 'https://www.cs.cornell.edu/'),
(7, 'University of Washington', 156, 159, 'images/uni/7.jpg', 'https://www.cs.washington.edu/'),
(8, 'Princeton University', 158, 163, 'images/uni/8.jpg', 'https://www.cs.princeton.edu/'),
(9, 'Georgia Institute of Technology ', 155, 161, 'images/uni/9.jpg', 'https://www.cc.gatech.edu/future/masters/mscs'),
(10, 'University of Texas Austin', 155, 160, 'images/uni/10.jpg', 'https://www.cs.utexas.edu/graduate-program/masters-program'),
(11, 'California Institute of Technology', 156, 161, 'images/uni/11.jpg', 'http://www.cms.caltech.edu/'),
(12, 'University of Wisconsin Madison', 157, 163, 'images/uni/12.jpg', 'https://www.cs.wisc.edu/academics/graduate-programs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, 'Yash', 'Mahajan', 'abc@gmail.com', 'Zero', '$2y$10$Ifrmdga2IeB.YP5mpEpKlO.3hMv5watVLZufj9IpktPIvNPXzpZx2'),
(2, 'vaibhav', 'patil', 'vaibhavpp98@gmail.com', 'vaibhav', '$2y$10$UzeBswWUvd8F3foCylz5pOL8ctKS5M0otvCRtF6xTVGT9fdCVgXYa');

-- --------------------------------------------------------

--
-- Table structure for table `vocab`
--

CREATE TABLE `vocab` (
  `id` int(11) NOT NULL,
  `word` varchar(255) NOT NULL,
  `synonym` varchar(255) NOT NULL,
  `antonym` varchar(255) NOT NULL,
  `sentence` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vocab`
--

INSERT INTO `vocab` (`id`, `word`, `synonym`, `antonym`, `sentence`) VALUES
(1, 'Abate', 'Subside', 'Alienate', 'Rather than leave immediately, they waited for the storm to abate.'),
(2, 'Aberrant', 'Abnormal', '--', 'Given the aberrant nature of the data, we came to doubt the validity of the entire experiment.'),
(3, 'Abeyance', 'Suspended Action', 'Continuance', 'The deal was held in abeyance untill her arrival.'),
(4, 'Abscond', 'Depart Secretly', 'Appear', 'The teller absconded with the bonds and was not found.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`a_uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vocab`
--
ALTER TABLE `vocab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `a_uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vocab`
--
ALTER TABLE `vocab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
