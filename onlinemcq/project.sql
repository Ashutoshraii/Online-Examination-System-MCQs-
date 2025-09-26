-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 02:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(2, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('642d3e9f7d06f', '642d3e9f7d58b'),
('642d3e9f7f912', '642d3e9f7fe18'),
('642d3e9f814d3', '642d3e9f81fce'),
('642d3e9f83406', '642d3e9f83853'),
('642d4012c037a', '642d4012c0ba4'),
('642d4012c2d37', '642d4012c3280'),
('642d4012c524b', '642d4012c5755'),
('642d43ac66a1c', '642d43ac6743d'),
('642d43ac68eb4', '642d43ac692b5'),
('642d43ac6af38', '642d43ac6ba8e'),
('642d43ac6cf12', '642d43ac6d3fe'),
('642d46dd89557', '642d46dd8a04a'),
('642d46dd8b6df', '642d46dd8c18f'),
('6433d2853ce2e', '6433d2853df99'),
('6433d28540b5a', '6433d28541475'),
('6433d28544cbb', '6433d28545494');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('63f1e02cb12b7', 'Eswar', 'eswarjo2003@gmail.com', 'php', 'this is not nice keep it simple to use', '2023-02-19', '09:39:08am');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('arvind@gmail.com', '642d46822a20c', 4, 2, 2, 0, '2023-04-10 08:47:14'),
('arvind@gmail.com', '642d3dcb01506', 4, 4, 4, 0, '2023-04-10 08:47:33'),
('admin@admin.com', '6433d2194187f', 2, 3, 2, 1, '2023-04-10 09:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('642d3e9f7d06f', 'PHP is an open-source programming language', '642d3e9f7d588'),
('642d3e9f7d06f', 'PHP is used to develop dynamic and interactive websites', '642d3e9f7d589'),
('642d3e9f7d06f', 'PHP is a server-side scripting language', '642d3e9f7d58a'),
('642d3e9f7d06f', 'All of the mentioned', '642d3e9f7d58b'),
('642d3e9f7f912', 'PHP stands for Preprocessor Home Page', '642d3e9f7fe15'),
('642d3e9f7f912', 'PHP stands for Pretext Hypertext Processor', '642d3e9f7fe17'),
('642d3e9f7f912', 'PHP stands for Hypertext Preprocessor', '642d3e9f7fe18'),
('642d3e9f7f912', 'PHP stands for Personal Hyper Processor', '642d3e9f7fe19'),
('642d3e9f814d3', '<?php ?>', '642d3e9f81fcb'),
('642d3e9f814d3', ' < php >', '642d3e9f81fcc'),
('642d3e9f814d3', '< ? php ?>', '642d3e9f81fcd'),
('642d3e9f814d3', '<? ?>', '642d3e9f81fce'),
('642d3e9f83406', '#', '642d3e9f83852'),
('642d3e9f83406', '/* */', '642d3e9f83853'),
('642d3e9f83406', '$', '642d3e9f83854'),
('642d3e9f83406', '&', '642d3e9f83855'),
('642d4012c037a', 'Fault tolerance', '642d4012c0b8f'),
('642d4012c037a', 'Durability', '642d4012c0ba2'),
('642d4012c037a', 'Scalability', '642d4012c0ba3'),
('642d4012c037a', 'Reliability', '642d4012c0ba4'),
('642d4012c2d37', 'Applets', '642d4012c3280'),
('642d4012c2d37', 'Web Services', '642d4012c3283'),
('642d4012c2d37', ' Servlets', '642d4012c3284'),
('642d4012c2d37', 'Java Server Pages', '642d4012c3285'),
('642d4012c524b', 'session', '642d4012c5755'),
('642d4012c524b', 'connection', '642d4012c5757'),
('642d4012c524b', 'destination', '642d4012c5758'),
('642d4012c524b', 'industry', '642d4012c5759'),
('642d43ac66a1c', 'ASCII', '642d43ac67438'),
('642d43ac66a1c', 'RS232C', '642d43ac6743d'),
('642d43ac66a1c', '2', '642d43ac6743e'),
('642d43ac66a1c', 'Centronics', '642d43ac6743f'),
('642d43ac68eb4', 'Half Duplex', '642d43ac692b0'),
('642d43ac68eb4', 'Simplex', '642d43ac692b3'),
('642d43ac68eb4', 'Full Duplex', '642d43ac692b4'),
('642d43ac68eb4', 'Double Duplex', '642d43ac692b5'),
('642d43ac6af38', 'Encryption of data', '642d43ac6ba8c'),
('642d43ac6af38', 'To transmit faster', '642d43ac6ba8d'),
('642d43ac6af38', 'To detect errors', '642d43ac6ba8e'),
('642d43ac6af38', 'To identify the user', '642d43ac6ba8f'),
('642d43ac6cf12', 'Protocol', '642d43ac6d3fc'),
('642d43ac6cf12', 'URL', '642d43ac6d3fe'),
('642d43ac6cf12', 'E-mail address', '642d43ac6d3ff'),
('642d43ac6cf12', 'ICQ', '642d43ac6d400'),
('642d46dd89557', 'an operating system', '642d46dd8a04a'),
('642d46dd89557', 'a web browser', '642d46dd8a04d'),
('642d46dd89557', 'a web server', '642d46dd8a04e'),
('642d46dd89557', 'None of the above', '642d46dd8a04f'),
('642d46dd8b6df', 'OSS', '642d46dd8c18d'),
('642d46dd8b6df', 'Sourceforge', '642d46dd8c18e'),
('642d46dd8b6df', 'Apache/MIT', '642d46dd8c18f'),
('642d46dd8b6df', 'None of the above', '642d46dd8c190'),
('6433d2853ce2e', ' Ctrl + U', '6433d2853df92'),
('6433d2853ce2e', 'Ctrl + Z', '6433d2853df99'),
('6433d2853ce2e', 'Ctrl + X', '6433d2853df9b'),
('6433d2853ce2e', 'Ctrl + Y', '6433d2853df9c'),
('6433d28540b5a', 'Ctrl + C', '6433d2854146f'),
('6433d28540b5a', 'Ctrl + V', '6433d28541474'),
('6433d28540b5a', 'Ctrl + X', '6433d28541475'),
('6433d28540b5a', 'Ctrl + P', '6433d28541477'),
('6433d28544cbb', 'Ctrl + Shift + Esc', '6433d28545494'),
('6433d28544cbb', ' Ctrl + Alt + Del', '6433d28545497'),
('6433d28544cbb', 'Alt + F4', '6433d28545499'),
('6433d28544cbb', 'Win + E', '6433d2854549a');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('642d3dcb01506', '642d3e9f7d06f', 'What is PHP?', 4, 1),
('642d3dcb01506', '642d3e9f7f912', 'What does PHP stand for?', 4, 2),
('642d3dcb01506', '642d3e9f814d3', 'Which of the following is the correct syntax to write a PHP code?', 4, 3),
('642d3dcb01506', '642d3e9f83406', 'Which of the following is the correct way to add a comment in PHP code?', 4, 4),
('642d3f71ec9d2', '642d4012c037a', 'Which of the following is a challenge in a J2EE?', 4, 1),
('642d3f71ec9d2', '642d4012c2d37', 'Which of the following is not a web centric component?', 4, 2),
('642d3f71ec9d2', '642d4012c524b', 'A JMS message producer is created by', 4, 3),
('642d4058cb785', '642d43ac66a1c', 'Which of these is a standard interface for serial data transmission?', 4, 1),
('642d4058cb785', '642d43ac68eb4', 'Which of the following transmission directions listed is not a legitimate channel?', 4, 2),
('642d4058cb785', '642d43ac6af38', '\"Parity bits\" are used for which of the following purposes?', 4, 3),
('642d4058cb785', '642d43ac6cf12', ' The location of a resource on the internet is given by its?', 4, 4),
('642d46822a20c', '642d46dd89557', 'Android is -', 4, 1),
('642d46822a20c', '642d46dd8b6df', 'Under which of the following Android is licensed?', 4, 2),
('6433d2194187f', '6433d2853ce2e', 'What is the shortcut to undo the last action on a computer?', 4, 1),
('6433d2194187f', '6433d28540b5a', 'What is the shortcut to copy selected text or files on a computer?', 4, 2),
('6433d2194187f', '6433d28544cbb', 'What is the shortcut to open the Task Manager on a Windows computer?', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('642d3dcb01506', 'Lean Php', 1, 0, 4, 1, 'Learn and develop php skilss', 'php', '2023-04-05 09:22:19'),
('642d3f71ec9d2', 'Learn J2ee', 1, 0, 3, 3, 'Develop skills in J2EE\r\n', 'j2ee', '2023-04-05 09:29:21'),
('642d4058cb785', 'Computer Networks', 1, 0, 4, 3, 'CN MCQ', 'CN', '2023-04-05 09:33:12'),
('642d46822a20c', 'Android Programming', 2, 0, 2, 1, 'skills develop in android', 'android', '2023-04-05 09:59:30'),
('6433d2194187f', 'Computer Shortcuts', 1, 0, 3, 1, 'computer shortcuts are taken as a serious notes ', 'computer shorcuts', '2023-04-10 09:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('arvind@gmail.com', 18, '2023-04-10 08:47:33'),
('abishek@gmail.com', 8, '2023-04-10 08:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `secq` varchar(50) NOT NULL,
  `seca` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Abishek Samuel', 'M', 'St.Xaviers College', 'abishek@gmail.com', 7200607280, '850633661e947aff2ed9211ecef5e1cf'),
('Arvind', 'M', 'St.Xaviers College', 'arvind@gmail.com', 8550307280, 'd05bce0514491445d44a11bab7bffe9c'),
('Eswar', 'M', 'St.Xaviers College', 'eswarjo2003@gmail.com', 6381013150, '30b6b6a9f80f6c3d6108146ca72f0572'),
('Jerwin', 'M', 'St.Xaviers College', 'jerwin@gmail.com', 8610328504, '69de95c2ca82ff51bf7c2c9eb4273a8f'),
('Maharaja', 'M', 'St.Xaviers College', 'maharaja@gmail.com', 7895432900, 'b972b0f9d05113f1675964f9bc8998e7'),
('Maris Mukesh', 'M', 'St.Xaviers College', 'marish@gmail.com', 7708778559, '8e17288f95527355dbdfa0db4b852cef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
