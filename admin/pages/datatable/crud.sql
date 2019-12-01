-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 11:48 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `monuments`
--

CREATE TABLE `monuments` (
  `id` int(11) NOT NULL,
  `monuments_name` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL,
  `date` varchar(150) NOT NULL,
  `ticket_price` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monuments`
--

INSERT INTO `monuments` (`id`, `monuments_name`, `description`, `date`, `ticket_price`, `image`) VALUES
(18, 'Joseph', 'Harman', '', '', '1.jpg'),
(19, 'John', 'Moss', '', '', '4.jpg'),
(20, 'Lillie', 'Ferrarium', '', '', '3.jpg'),
(21, 'Yolanda', 'Green', '', '', '5.jpg'),
(22, 'Cara', 'Gariepy', '', '', '7.jpg'),
(23, 'Christine', 'Johnson', '', '', '11.jpg'),
(24, 'Alana', 'Decruze', '', '', '12.jpg'),
(25, 'Krista', 'Correa', '', '', '13.jpg'),
(26, 'Charles', 'Martin', '', '', '14.jpg'),
(70, 'Cindy', 'Canady', '', '', '18211.jpg'),
(73, 'Daphne', 'Frost', '', '', '8288.jpg'),
(69, 'Frank', 'Lemons', '', '', '22610.jpg'),
(66, 'Margaret', 'Ault', '', '', '14365.jpg'),
(71, 'Christina', 'Wilke', '', '', '9248.jpg'),
(68, 'Roy', 'Newton', '', '', '27282.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL,
  `cast` varchar(150) NOT NULL,
  `crew` varchar(150) NOT NULL,
  `trailer_link` varchar(150) NOT NULL,
  `rating` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `description`, `cast`, `crew`, `trailer_link`, `rating`, `image`) VALUES
(18, 'Joseph', 'Harman', '', '', '', '', '1.jpg'),
(19, 'John', 'Moss', '', '', '', '', '4.jpg'),
(20, 'Lillie', 'Ferrarium', '', '', '', '', '3.jpg'),
(21, 'Yolanda', 'Green', '', '', '', '', '5.jpg'),
(22, 'Cara', 'Gariepy', '', '', '', '', '7.jpg'),
(23, 'Christine', 'Johnson', '', '', '', '', '11.jpg'),
(24, 'Alana', 'Decruze', '', '', '', '', '12.jpg'),
(25, 'Krista', 'Correa', '', '', '', '', '13.jpg'),
(26, 'Charles', 'Martin', '', '', '', '', '14.jpg'),
(70, 'Cindy', 'Canady', '', '', '', '', '18211.jpg'),
(73, 'Daphne', 'Frost', '', '', '', '', '8288.jpg'),
(69, 'Frank', 'Lemons', '', '', '', '', '22610.jpg'),
(66, 'Margaret', 'Ault', '', '', '', '', '14365.jpg'),
(71, 'Christina', 'Wilke', '', '', '', '', '9248.jpg'),
(68, 'Roy', 'Newton', '', '', '', '', '27282.jpg'),
(74, 'sad', 'asd', 'asd', 'das', 'asd', '', '12560584.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `sports_name` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL,
  `date` varchar(150) NOT NULL,
  `ticket_price` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `sports_name`, `description`, `date`, `ticket_price`, `image`) VALUES
(18, 'Joseph', 'Harman', '', '', '1.jpg'),
(19, 'John', 'Moss', '', '', '4.jpg'),
(20, 'Lillie', 'Ferrarium', '', '', '3.jpg'),
(21, 'Yolanda', 'Green', '', '', '5.jpg'),
(22, 'Cara', 'Gariepy', '', '', '7.jpg'),
(23, 'Christine', 'Johnson', '', '', '11.jpg'),
(24, 'Alana', 'Decruze', '', '', '12.jpg'),
(25, 'Krista', 'Correa', '', '', '13.jpg'),
(26, 'Charles', 'Martin', '', '', '14.jpg'),
(70, 'Cindy', 'Canady', '', '', '18211.jpg'),
(73, 'Daphne', 'Frost', '', '', '8288.jpg'),
(69, 'Frank', 'Lemons', '', '', '22610.jpg'),
(66, 'Margaret', 'Ault', '', '', '14365.jpg'),
(71, 'Christina', 'Wilke', '', '', '9248.jpg'),
(68, 'Roy', 'Newton', '', '', '27282.jpg'),
(74, 'ds', 'sd', 'sd', 'sdasd', '1460087457.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `contact_no` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `contact_no`, `email`, `pass`, `image`) VALUES
(18, 'Joseph', 'Harman', '', '', '', '1.jpg'),
(19, 'John', 'Moss', '', '', '', '4.jpg'),
(20, 'Lillie', 'Ferrarium', '', '', '', '3.jpg'),
(21, 'Yolanda', 'Green', '', '', '', '5.jpg'),
(22, 'Cara', 'Gariepy', '', '', '', '7.jpg'),
(23, 'Christine', 'Johnson', '', '', '', '11.jpg'),
(24, 'Alana', 'Decruze', '', '', '', '12.jpg'),
(25, 'Krista', 'Correa', '', '', '', '13.jpg'),
(26, 'Charles', 'Martin', '', '', '', '14.jpg'),
(70, 'Cindy', 'Canady', '', '', '', '18211.jpg'),
(73, 'Daphne', 'Frost', '', '', '', '8288.jpg'),
(69, 'Frank', 'Lemons', '', '', '', '22610.jpg'),
(66, 'Margaret', 'Ault', '', '', '', '14365.jpg'),
(71, 'Christina', 'Wilke', '', '', '', '9248.jpg'),
(68, 'Roy', 'Newton', '', '', '', '27282.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monuments`
--
ALTER TABLE `monuments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
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
-- AUTO_INCREMENT for table `monuments`
--
ALTER TABLE `monuments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
