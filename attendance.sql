-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 11:18 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--
CREATE DATABASE IF NOT EXISTS `attendance` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `attendance`;

-- --------------------------------------------------------

--
-- Table structure for table `psh_raw`
--

DROP TABLE IF EXISTS `psh_raw`;
CREATE TABLE IF NOT EXISTS `psh_raw` (
  `rid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Row unique id',
  `fk_user` int(11) NOT NULL COMMENT 'Reference to user table',
  `date` date NOT NULL,
  `time` time NOT NULL,
  `direct` int(11) NOT NULL COMMENT 'Enter = 1; Leave = 0',
  `type` int(11) NOT NULL COMMENT 'Type of leave: General = 1;Vacation = 2;\r\n\r\nDoctor = 3...',
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=163 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `psh_raw`
--

INSERT INTO `psh_raw` (`rid`, `fk_user`, `date`, `time`, `direct`, `type`) VALUES
(1, 1, '2016-04-11', '10:16:39', 1, 1),
(2, 1, '2016-04-11', '19:38:30', 0, 1),
(3, 1, '2016-04-11', '21:09:07', 1, 1),
(4, 1, '2016-04-12', '03:15:00', 0, 1),
(5, 1, '2016-04-12', '09:07:05', 1, 1),
(6, 1, '2016-04-12', '20:19:10', 0, 1),
(7, 2, '2015-11-05', '06:00:00', 1, 1),
(8, 2, '2015-11-05', '17:12:06', 0, 1),
(9, 2, '2016-11-06', '10:16:39', 1, 1),
(10, 2, '2016-11-06', '19:38:30', 0, 1),
(11, 2, '2016-11-07', '08:09:07', 1, 1),
(12, 2, '2016-11-07', '17:15:00', 0, 1),
(13, 1, '2016-04-13', '09:07:05', 1, 1),
(14, 1, '2016-04-13', '20:05:10', 0, 1),
(15, 1, '2015-04-14', '06:00:00', 1, 1),
(16, 1, '2015-04-14', '17:12:06', 0, 1),
(17, 1, '2016-05-11', '05:16:39', 1, 1),
(18, 1, '2016-05-11', '14:38:30', 0, 1),
(19, 1, '2016-05-11', '18:09:07', 1, 1),
(20, 1, '2016-05-11', '22:15:00', 0, 1),
(21, 1, '2016-05-12', '08:07:05', 1, 1),
(22, 1, '2016-05-12', '16:19:10', 0, 1),
(23, 2, '2015-12-05', '09:40:00', 1, 1),
(24, 2, '2015-12-05', '17:22:06', 0, 1),
(25, 2, '2016-12-06', '11:16:39', 1, 1),
(26, 2, '2016-12-06', '20:48:30', 0, 1),
(27, 2, '2016-12-07', '06:09:07', 1, 1),
(28, 2, '2016-12-07', '15:15:00', 0, 1),
(29, 1, '2016-05-13', '06:07:05', 1, 1),
(30, 1, '2016-05-13', '15:45:10', 0, 1),
(31, 1, '2015-05-14', '07:00:24', 1, 1),
(32, 1, '2015-05-14', '15:12:06', 0, 1),
(33, 2, '2016-03-03', '12:17:16', 1, 1),
(34, 2, '2016-03-03', '22:20:22', 0, 1),
(35, 3, '2016-03-02', '12:19:19', 1, 1),
(36, 3, '2016-03-02', '20:03:43', 0, 1),
(37, 3, '2016-05-13', '08:20:13', 1, 1),
(38, 3, '2016-05-13', '16:55:34', 0, 1),
(39, 3, '2016-08-01', '08:28:29', 1, 1),
(40, 3, '2016-08-01', '19:48:55', 0, 1),
(41, 3, '2016-08-01', '08:28:29', 1, 1),
(42, 3, '2016-08-01', '19:48:55', 0, 1),
(43, 4, '2016-03-21', '09:33:15', 1, 1),
(44, 4, '2016-03-21', '17:33:15', 0, 1),
(45, 4, '2016-06-14', '07:45:15', 1, 1),
(46, 4, '2016-06-14', '15:22:11', 0, 1),
(47, 3, '2016-04-13', '09:19:15', 1, 1),
(48, 3, '2016-04-13', '16:17:29', 0, 1),
(151, 4, '2017-01-04', '14:38:35', 1, 0),
(150, 2, '2017-01-04', '13:22:22', 0, 0),
(148, 2, '2017-01-03', '11:58:32', 0, 0),
(149, 2, '2017-01-04', '13:22:14', 1, 0),
(147, 2, '2017-01-03', '11:58:19', 1, 0),
(146, 1, '2017-01-03', '06:30:55', 1, 0),
(145, 3, '2017-01-02', '23:24:05', 0, 0),
(144, 3, '2017-01-02', '23:23:46', 1, 0),
(156, 2, '2017-01-23', '03:41:42', 0, 1),
(157, 3, '2017-01-23', '03:48:00', 1, 0),
(143, 1, '2017-01-02', '23:15:26', 0, 1),
(159, 4, '2017-01-23', '04:03:00', 1, 0),
(158, 3, '2017-01-23', '03:48:13', 0, 1),
(160, 4, '2017-01-23', '04:03:10', 0, 0),
(162, 1, '2017-02-08', '14:07:59', 0, 0),
(161, 1, '2017-02-08', '14:07:47', 1, 0),
(155, 2, '2017-01-23', '03:41:31', 1, 0),
(154, 1, '2017-01-23', '03:35:54', 0, 0),
(153, 1, '2017-01-23', '03:35:44', 1, 0),
(152, 4, '2017-01-04', '14:38:49', 0, 0),
(142, 1, '2017-01-02', '23:14:55', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_time`
--

DROP TABLE IF EXISTS `user_time`;
CREATE TABLE IF NOT EXISTS `user_time` (
  `rid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Reference to psh_raw table',
  `id_user` int(11) NOT NULL COMMENT 'Reference to user table',
  `date` date NOT NULL,
  `whours` time NOT NULL,
  PRIMARY KEY (`rid`,`id_user`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_time`
--

INSERT INTO `user_time` (`rid`, `id_user`, `date`, `whours`) VALUES
(1, 1, '2016-04-11', '09:21:51'),
(2, 1, '2016-04-12', '06:05:53'),
(3, 1, '2016-04-12', '11:12:05'),
(4, 1, '2015-11-05', '11:12:06'),
(5, 1, '2016-11-06', '09:21:51'),
(6, 1, '2016-11-07', '09:05:53'),
(7, 1, '2016-04-13', '10:58:05'),
(8, 1, '2015-04-14', '11:12:06'),
(9, 1, '2016-05-11', '09:21:51'),
(10, 1, '2016-05-11', '04:05:53'),
(11, 1, '2016-05-12', '08:12:05'),
(12, 2, '2016-05-05', '08:00:00'),
(13, 2, '2016-02-09', '08:08:20'),
(14, 3, '2016-04-04', '09:11:08'),
(15, 4, '2016-04-11', '08:07:16'),
(16, 3, '2016-03-21', '07:35:11'),
(17, 4, '2015-12-09', '10:10:11'),
(18, 2, '2016-05-04', '06:09:27'),
(19, 2, '2016-03-30', '05:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`) VALUES
(1, 'Cedric', '12345', 'ALIBERT'),
(2, 'Daniel', '12345', 'ARNALIS'),
(3, 'Romain', '12345', 'STEF'),
(4, 'PanNik', '12345', 'PANAGIOTIS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
