-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2015 at 05:21 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `canvas`
--

-- --------------------------------------------------------

--
-- Table structure for table `canvases`
--

CREATE TABLE IF NOT EXISTS `canvases` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `KeyPartners` varchar(250) NOT NULL,
  `KeyActivities` varchar(250) NOT NULL,
  `KeyResources` varchar(250) NOT NULL,
  `ValueProposition` varchar(250) NOT NULL,
  `CustomerRelationships` varchar(250) NOT NULL,
  `Channels` varchar(250) NOT NULL,
  `CustomerSegments` varchar(250) NOT NULL,
  `CostStructure` varchar(250) NOT NULL,
  `RevenueStreams` varchar(250) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `canvases`
--

INSERT INTO `canvases` (`id`, `name`, `KeyPartners`, `KeyActivities`, `KeyResources`, `ValueProposition`, `CustomerRelationships`, `Channels`, `CustomerSegments`, `CostStructure`, `RevenueStreams`, `user_id`) VALUES
(1, 'The name', 'Shit', 'Fuck', 'Damn', 'Ass', 'Idiot', 'Twat', 'Stupid', 'AssAgain', 'Dummy', 3),
(2, 'The name', 'Shit', 'Fuck', 'Damn', 'Ass', 'Idiot', 'Twat', 'Stupid', 'AssAgain', 'Dummy', 3),
(3, 'The name', 'Shit', 'Fuck', 'Damn', 'Ass', 'Idiot', 'Twat', 'Stupid', 'AssAgain', 'Dummy', 3),
(4, 'The name', 'Shit', 'Fuck', 'Damn', 'Ass', 'Idiot', 'Twat', 'Stupid', 'AssAgain', 'Dummy', 3),
(5, 'Ajnlsd', 'ds n', 'dvnsd k', 'dljsd', 'ks vs', 'skv sd', 'sdlns', 'ksdjnlsd', 'ksld', 'sdk\r\n', 3),
(6, 'Name', 'Test', 'Hello', 'Hi There', 'Good', 'Bye Bye', 'Damn', 'tooooooooooot', 'Fuck', 'Ass', 3),
(7, 'The name', 'Shit', 'Fuck', 'Damn', 'Ass', 'Idiot', 'Twat', 'Stupid', 'AssAgain', 'Dummy', 3),
(8, 'The name', 'Shit', 'Fuck', 'Damn', 'Ass', 'Idiot', 'Twat', 'Stupid', 'AssAgain', 'Dummy', 3);

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE IF NOT EXISTS `confirm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(128) NOT NULL DEFAULT '',
  `key` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

-- --------------------------------------------------------

--
-- Table structure for table `sitedata`
--

CREATE TABLE IF NOT EXISTS `sitedata` (
  `url` text,
  `title` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sitedata`
--

INSERT INTO `sitedata` (`url`, `title`) VALUES
('http://localhost', 'BMC');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `active` binary(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `active`) VALUES
(2, 'Mohammad Karam', 'm_karam', '$2y$10$8pnsoIiSJhkqdxnxN1uH8udi.6ZsHQ6Hkb.ysZcfErtiabjIRGbAi', 'm_karam@a-studio.me', '0'),
(3, 'Mohammad Karam', 'muhakh', '$2y$10$cj7KMoym8VPFbztylnkMJeL09edUvbxqjUpiMfAlKZm/8xuV0sXtu', 'muhakh2@gmail.com', '0'),
(4, 'Mohmmad Helmy', 'm_helmy', '$2y$10$IDkhzY442uArp3SgvZ3D6u2ronNEdvmaT5JN3aNrPiDhdBU1en/xG', 'muhakh02@yahoo.com', '0'),
(5, 'Ahmad', 'a_7elmy', '$2y$10$HzbPyz/cPQy/MoQd7D9kA.J0EmNtNfkg.IZL86Dhm6aBkiuTUgkGK', '7elmy@a-studio.me', '0'),
(6, 'Mohmmad Helmy', 'aaa', '$2y$10$QKPhODK11bz6cHO6eo9T3OdhcPHK9HTqpjioPvLrFUyRVHQOVW7sG', 'aaa@moo.com', '0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `canvases`
--
ALTER TABLE `canvases`
  ADD CONSTRAINT `canvases_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
