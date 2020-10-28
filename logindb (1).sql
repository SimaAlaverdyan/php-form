-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 09:14 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(100) NOT NULL,
  `post_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`) VALUES
(77, 9, 30, 'hi'),
(78, 10, 30, 'cool!'),
(79, 10, 30, 'nice'),
(80, 8, 31, 'happy'),
(81, 8, 32, 'happy birthday!'),
(82, 8, 30, ':D');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `title` text NOT NULL,
  `content` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `date`) VALUES
(8, 33, 'Congratulations', 'Happy Birthday!', '2020-10-07'),
(9, 27, 'Hello World!', 'Hi guyzz!', '2020-10-07'),
(10, 32, 'mood', 'feeling great', '2020-10-07'),
(11, 30, 'Welcome', 'Hey, how are u?', '2020-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `date` date NOT NULL,
  `phone` text NOT NULL,
  `message` varchar(60) NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL DEFAULT 'avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `date`, `phone`, `message`, `gender`, `image`) VALUES
(27, 'John', 'Smith', 'john@gmail.com', '527bd5b5d689e2c32ae974c6229ff785', '2020-08-03', '55646494', 'macho', 'male', 'av1.jpg'),
(30, 'Dean', 'Winchester', 'dean@gmail.com', '48767461cb09465362c687ae0c44753b', '2020-09-06', '25252525', 'supernatural', 'male', 'av3.jpg'),
(31, 'Anna', 'Frank', 'anna@gmail.com', 'a70f9e38ff015afaa9ab0aacabee2e13', '2020-08-16', '91919191', '', 'female', 'avatar.png'),
(32, 'Jane', 'Eyre', 'jane@gmail.com', '5844a15e76563fedd11840fd6f40ea7b', '2020-09-12', '88448844', 'hhh', 'female', 'av5.png'),
(33, 'Jack', 'Brown', 'jack@gmail.com', '4ff9fc6e4e5d5f590c4f2134a8cc96d1', '2020-07-26', '48574821', 'hello world', 'male', 'av4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
