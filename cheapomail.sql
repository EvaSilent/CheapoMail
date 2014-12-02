-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2014 at 05:50 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cheapomail`
--
CREATE DATABASE IF NOT EXISTS `cheapomail` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cheapomail`;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  `subject` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `recipient_ids` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `body`, `subject`, `user_id`, `recipient_ids`) VALUES
(1, '€i‰ýÑå·CúaeÃ·Èó2', '€Ü¢ýÖ.¹å`', 325, 872323),
(2, '€ì6åüþ1? ¦|w{i°U‚Ñ¡ZýXÿÐ±¯0±Ç;ir·¾+´ç', '€Ü¢ýÖ.¹å`', 872323, 325);

-- --------------------------------------------------------

--
-- Table structure for table `message_read`
--

DROP TABLE IF EXISTS `message_read`;
CREATE TABLE IF NOT EXISTS `message_read` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `message_id` int(11) NOT NULL,
  `reader_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `message_read`
--

INSERT INTO `message_read` (`ID`, `message_id`, `reader_id`, `date`) VALUES
(76, 1, 872323, '2014-11-28'),
(77, 2, 325, '2014-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `password` text NOT NULL,
  `username` text NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=872324 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `password`, `username`, `ID`) VALUES
('Kareen', 'Gorden', 'abc123', 'Stargirl_Kay', 124),
('Randy', 'Gaston', '€AYìâÎþ}XQ’¾®!’', 'WildLife', 325),
('Sanjay', 'Lewis', '€•çG½fYL÷Â±UW“dák', 'Admin', 326),
('Tameka', 'Watson', '€_Õü­´CVü”ïài', 'OntheRock', 437),
('Tenevia', 'Thomas', '€w>d¢:AíÂ9tAÎb¥', 'TrapStar', 875),
('Shanice', 'Dunn', '€ú~l|ISµÞ¹', 'DunnDeal', 265790),
('Chrisabel', 'Hobbs', '€H3kT_¾º:7õ~žøo9', 'Shakera', 872323);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
