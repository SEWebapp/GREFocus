-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 11:00 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
(1, 'Yash Mahajan', 'ymahajan67@gmail.com', 'Website', 'Best');

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
(1, 'Yash', 'Mahajan', 'abc@gmail.com', 'Zero', '$2y$10$Ifrmdga2IeB.YP5mpEpKlO.3hMv5watVLZufj9IpktPIvNPXzpZx2');

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
(4, 'Abscond', 'Depart Secretly', 'Appear', 'The teller absconded with the bonds and was not found.'),
(5, 'Abstemious', 'Temperate in diet', 'intemperate', 'Concerned whether her vegetarian son\'s abstemious diet provided him with sufficient protein, the worried mother pressed food on him.'),
(6, 'Admonish', 'Reprove', 'Acclaim', 'He admonished his listeners to change their wicked ways.'),
(7, 'Adulterate', 'To make impure by adding inferior or tainted substances', 'Purify', 'It is a crime to adulterate foods without informing the buyer.'),
(8, 'Aesthetic', 'Dealing with or capable of appreciating the beautiful', '--', 'The beauty of Tiffany\'s stained glass appealed to Alice\'s aesthetic sense.');

-- --------------------------------------------------------

--
-- Table structure for table `vt1options`
--

CREATE TABLE `vt1options` (
  `id` int(11) NOT NULL,
  `q_no` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vt1options`
--

INSERT INTO `vt1options` (`id`, `q_no`, `is_correct`, `text`) VALUES
(1, 1, 0, 'threatened'),
(2, 1, 1, 'depended on'),
(3, 1, 0, 'promoted'),
(4, 1, 0, 'prevented'),
(5, 2, 1, 'most imposing'),
(6, 2, 0, 'earliest known\r\n'),
(7, 2, 0, 'most irreverent\r\n'),
(8, 2, 0, 'well understood'),
(9, 3, 0, 'regarded'),
(10, 3, 0, 'inspired'),
(11, 3, 0, 'measured'),
(12, 3, 1, 'apportioned'),
(13, 4, 0, 'innovation'),
(14, 4, 1, 'delusion'),
(15, 4, 0, 'dementia'),
(16, 4, 0, 'hysteria'),
(17, 5, 0, 'lascivious'),
(18, 5, 1, 'sophisticated'),
(19, 5, 0, 'foreign'),
(20, 5, 0, 'alienating');

-- --------------------------------------------------------

--
-- Table structure for table `vt1questions`
--

CREATE TABLE `vt1questions` (
  `q_no` int(11) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vt1questions`
--

INSERT INTO `vt1questions` (`q_no`, `question`) VALUES
(1, 'By the mid-1700s the French government had begun a concerted effort to prevent famine and plague, having fully realized that the success of its ambitious state-run building projects ____________ the welfare of its people, particularly the labor-providing lower class.'),
(2, 'The blossoming of India\'s classical period, whose art works are generally marked by their grandiosity, cannot be better represented than by the Simhala Avadana frieze, which is perhaps the ____________ composition in the history of Indian painting.'),
(3, 'In Europe, football, otherwise known as soccer, is the most popular sport by several orders of magnitude, whereas in the United States of America, fandom is fairly evenly __________ among a\r\nfew different sports.'),
(4, 'The astrophysicist argues that our books and films about interstellar space ravel are a form of mass _________ , and that only a miracle on a scale heretofore unseen could allow a human being to voyage to even the closest star in another solar system.'),
(5, 'Even the _________ and alluring charms of Paris were not sufficient to cure the young expatriate of his yearning for the simple and quaint charms of his rural American home.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `vt1options`
--
ALTER TABLE `vt1options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt1questions`
--
ALTER TABLE `vt1questions`
  ADD PRIMARY KEY (`q_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vocab`
--
ALTER TABLE `vocab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vt1options`
--
ALTER TABLE `vt1options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
