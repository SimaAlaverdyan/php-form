-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 10:57 AM
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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `content` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `firstname`, `lastname`, `image`, `title`, `content`, `date`) VALUES
(3, 'Jack', 'Brown', 'av4.jpg', 'Congratulations', 'Happy Birthday!', '2020-10-05'),
(4, 'John', 'Smith', 'av1.jpg', 'Hello World!', 'Hey there, how are u?', '2020-10-05'),
(5, 'Jane', 'Eyre', 'av5.png', 'Welcome', 'Hi guyzz!', '2020-10-05'),
(7, 'Anna', 'Frank', 'avatar.png', 'mood', 'feeling great', '2020-10-05');

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
  `image` text NOT NULL DEFAULT 'avatar.png',
  `postTitle` text NOT NULL,
  `postContent` varchar(400) NOT NULL,
  `postDate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `date`, `phone`, `message`, `gender`, `image`, `postTitle`, `postContent`, `postDate`) VALUES
(27, 'John', 'Smith', 'john@gmail.com', '527bd5b5d689e2c32ae974c6229ff785', '2020-08-03', '55646494', 'macho', 'male', 'av1.jpg', '', '', ''),
(30, 'Dean', 'Winchester', 'dean@gmail.com', '48767461cb09465362c687ae0c44753b', '2020-09-06', '25252525', 'supernatural', 'male', 'av4.jpg', '', '', ''),
(31, 'Anna', 'Frank', 'anna@gmail.com', 'a70f9e38ff015afaa9ab0aacabee2e13', '2020-08-16', '91919191', '', 'female', 'avatar.png', '', '', ''),
(32, 'Jane', 'Eyre', 'jane@gmail.com', '5844a15e76563fedd11840fd6f40ea7b', '2020-09-12', '88448844', 'hhh', 'female', 'av5.png', '', '', ''),
(33, 'Jack', 'Brown', 'jack@gmail.com', '4ff9fc6e4e5d5f590c4f2134a8cc96d1', '2020-07-26', '48574821', 'hello world', 'male', 'av4.jpg', '', '', '');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
