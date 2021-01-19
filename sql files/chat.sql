-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 12:17 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 0, 4, 'hii', '2020-10-14 10:31:04', 1),
(2, 1, 4, 'how are youu', '2020-10-14 10:31:20', 1),
(3, 0, 4, 'helloooooooooooooooooooooo', '2020-10-14 17:24:29', 1),
(4, 0, 4, 'How You all doing??', '2020-10-15 20:08:08', 1),
(5, 0, 5, 'All Well Broooo<div><br></div>', '2020-10-15 20:14:54', 1),
(6, 0, 5, 'What ABout you?<div><br></div>', '2020-10-15 20:15:10', 1),
(7, 5, 4, 'helloo', '2020-10-28 11:35:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(2, 'peterParker', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(3, 'davidMoore', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(4, 'tariq', '$2y$10$6gcyx1q5eGjBpohVRTcUbe49CEwqmzXRJLWXBbSWC/HqrcuxoJ1o6'),
(5, 'Dhyey', '$2y$10$DY7HwiJpDpWsnp0IMwOl4.OumekKXWxU/JNXbNlMKr4GwOp7Nea.u');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 4, '2020-10-14 10:32:07', 'no'),
(2, 4, '2020-10-14 10:37:49', 'no'),
(3, 4, '2020-10-14 10:49:41', 'no'),
(4, 4, '2020-10-14 11:11:46', 'no'),
(5, 4, '2020-10-14 11:15:06', 'no'),
(6, 4, '2020-10-14 17:37:40', 'no'),
(7, 4, '2020-10-15 20:10:34', 'no'),
(8, 5, '2020-10-15 20:16:09', 'no'),
(9, 4, '2020-10-17 06:26:55', 'no'),
(10, 4, '2020-10-17 06:27:22', 'no'),
(11, 4, '2020-10-17 06:30:40', 'no'),
(12, 4, '2020-10-17 06:31:30', 'no'),
(13, 4, '2020-10-17 06:31:38', 'no'),
(14, 4, '2020-10-17 06:31:46', 'no'),
(15, 4, '2020-10-28 10:53:14', 'no'),
(16, 4, '2020-10-28 11:35:40', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
