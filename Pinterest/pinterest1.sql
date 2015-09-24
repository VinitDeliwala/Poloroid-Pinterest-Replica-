-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2015 at 12:16 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pinterest1`
--

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE IF NOT EXISTS `board` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `bname` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `secret` varchar(255) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`bid`, `bname`, `tag`, `type`, `secret`) VALUES
(1, 'cricket', 'awesome', 'sports', 'N'),
(2, 'iphone', 'expensive,apple', 'tech', 'N'),
(3, 'heater', 'winter', 'household', 'N'),
(4, 'mac', 'apple', 'tech', 'N'),
(5, 'federer', 'legend', 'sports', 'N'),
(6, 'hershey', 'chocolate', 'food', 'Y'),
(7, 'fridge', 'expensive', 'household', 'N'),
(8, 'nike', 'awesome,sports', 'clothes,sports', 'N'),
(9, 'london', 'nice,expensive', 'travel', 'Y'),
(10, 'Love', 'SRK', 'Romance', 'N'),
(11, 'Sid & Alisha', 'Love', 'Love', 'Y'),
(15, 'Sachin', 'Sachin', 'c', 'N'),
(16, 'Vinit', 'Awesome', 'Love', 'N'),
(18, 'Sexy', 'wowwowo', 'wowow', 'Y'),
(19, 'Random', 'Wowowowowwoowowowow.....!!', 'cool', 'N'),
(20, 'Mix', 'Everything in one.', 'all', 'N'),
(21, 'Awesome', 'I am Awesome', 'maki kirir', 'N'),
(22, 'Sexxxyyy', 'a fand', 'slfd', 'N'),
(23, 'Hum', 'HUm', 'Hum', 'N'),
(24, 'Ultra', 'lnlsdm', 'dsfmsl', 'N'),
(25, 'Pingle', 'Its good', 'dsj', 'N'),
(26, 'Myboard', 'sfmv sl', 'sfl', 'Y'),
(27, 'sabkaboard', 'sfc l', 'msldmf', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `sid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `chat` varchar(255) NOT NULL,
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sid`,`rid`,`chat`,`ctime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`sid`, `rid`, `chat`, `ctime`) VALUES
(1, 2, 'Heading Gym !!', '2015-05-08 00:22:15'),
(1, 2, 'Heading Gym !!', '2015-05-08 00:27:02'),
(1, 2, 'Heading Gym !!', '2015-05-08 00:27:53'),
(1, 2, 'i am good', '2015-05-07 22:22:28'),
(1, 2, 'What about you !!', '2015-05-08 00:30:51'),
(1, 3, 'Hi Sid...!!', '2015-05-08 00:34:51'),
(1, 12, 'I am good\r\n', '2015-05-08 00:47:24'),
(2, 1, 'hi...how r u?', '2015-05-07 22:21:58'),
(2, 1, 'Near to hear that', '2015-05-08 00:20:26'),
(2, 1, 'So whats the plan for today ??\r\n', '2015-05-08 00:20:41'),
(3, 6, 'i l0ve u', '2015-05-07 23:55:44'),
(11, 1, 'Hi Vinit....Kaisa hai ??', '2015-05-07 23:50:04'),
(12, 1, 'Hi ssup !!', '2015-05-08 00:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `cid` varchar(255) NOT NULL,
  `bid` varchar(255) NOT NULL,
  `mid` varchar(255) NOT NULL,
  `ctext` varchar(255) NOT NULL,
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cid`,`bid`,`mid`,`ctext`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cid`, `bid`, `mid`, `ctext`, `ctime`) VALUES
('1', '1', '1', 'How are You !!....', '2015-05-06 02:41:31'),
('1', '1', '1', 'It Awesme.... its working\r\n', '2015-05-06 02:41:19'),
('1', '1', '10', 'I wantto visit this place !!', '2015-05-06 10:03:15'),
('1', '1', '2', '12', '2015-05-06 02:27:32'),
('1', '2', '26', 'This is good !!', '2015-05-06 22:49:48'),
('1', '2', '26', 'Yea i trust you\r\n', '2015-05-06 20:54:53'),
('1', '20', '28', 'This apple is goood !!', '2015-05-07 18:47:39'),
('1', '21', '30', 'Yea bitch... u r !!', '2015-05-07 18:07:48'),
('1', '3', '6', 'Nonsense', '2015-05-06 02:02:41'),
('1', '4', '2', 'Chorr !!', '2015-05-06 10:00:32'),
('1', '5', '10', 'Awaiting', '2015-05-06 02:02:41'),
('1', '8', '12', 'buying', '2015-05-06 02:02:41'),
('1', '9', '16', 'lovely', '2015-05-06 02:02:41'),
('2', '1', '1', 'Fuckkkk U mamn..... I did it !!', '2015-05-06 02:51:39'),
('2', '1', '1', 'Legend', '2015-05-06 02:02:41'),
('2', '1', '1', 'This is fabulous\r\n', '2015-05-07 16:21:17'),
('2', '1', '1', 'Wbu...??', '2015-05-06 02:42:26'),
('2', '2', '2', 'Aeeee.....', '2015-05-06 07:39:02'),
('2', '2', '26', 'This is really goood...', '2015-05-06 20:54:15'),
('2', '20', '28', 'ea i knoo !!', '2015-05-07 18:47:59'),
('2', '3', '18', 'Nonesense !!', '2015-05-06 02:02:41'),
('2', '5', '1', 'nujij', '2015-05-06 15:07:34'),
('3', '1', '2', 'Chor', '2015-05-06 02:02:41'),
('3', '10', '18', 'Cute pic!!', '2015-05-06 02:02:41'),
('4', '2', '5', 'Awesom', '2015-05-06 02:02:41'),
('4', '4', '7', 'Gooooood', '2015-05-06 02:02:41'),
('4', '8', '10', 'going', '2015-05-06 02:02:41'),
('6', '1', '1', 'hahahhahhaa', '2015-05-06 02:06:04'),
('6', '1', '1', 'Sid....', '2015-05-06 02:02:41'),
('6', '1', '1', 'Sid.... Sunn... I loVe ...', '2015-05-06 02:02:41'),
('6', '1', '1', 'Swapnil... :p\r\n', '2015-05-06 02:02:41'),
('8', '1', '3', 'i LIKE HiM!!', '2015-05-08 05:50:59'),
('9', '21', '30', 'I am cute... !! Aint i?? ', '2015-05-07 18:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `createboard`
--

CREATE TABLE IF NOT EXISTS `createboard` (
  `uid` varchar(255) NOT NULL DEFAULT '0',
  `fbid` varchar(255) NOT NULL DEFAULT '0',
  `bid` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`,`fbid`,`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createboard`
--

INSERT INTO `createboard` (`uid`, `fbid`, `bid`) VALUES
('', '3', '1'),
('0', '11', '1'),
('0', '12', '3'),
('0', '3', '1'),
('0', '6', '3'),
('0', '8', '1'),
('0', '8', '19'),
('0', '8', '4'),
('0', '9', '1'),
('1', '0', '1'),
('1', '1', '17'),
('1', '1', '18'),
('1', '1', '19'),
('1', '1', '20'),
('1', '2', '1'),
('1', '2', '6'),
('1', '5', '6'),
('11', '0', '25'),
('2', '1', '2'),
('2', '2', '19'),
('2', '2', '20'),
('2', '2', '3'),
('2', '3', '2'),
('2', '4', '5'),
('2', '5', '2'),
('3', '1', '4'),
('3', '2', '4'),
('3', '3', '19'),
('3', '5', '3'),
('3', '6', '4'),
('4', '1', '8'),
('4', '2', '8'),
('5', '1', '9'),
('5', '2', '9'),
('5', '3', '7'),
('5', '3', '9'),
('5', '4', '9'),
('6', '', '10'),
('8', '0', '26'),
('8', '0', '27');

-- --------------------------------------------------------

--
-- Table structure for table `follower`
--

CREATE TABLE IF NOT EXISTS `follower` (
  `uid` varchar(255) NOT NULL DEFAULT '-',
  `fid` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`,`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follower`
--

INSERT INTO `follower` (`uid`, `fid`) VALUES
('1', '12'),
('1', '2'),
('1', '3'),
('1', '5'),
('12', '5'),
('2', '1'),
('2', '3'),
('2', '4'),
('2', '5'),
('3', '1'),
('3', '2'),
('5', '1'),
('5', '2'),
('5', '3'),
('6', '3'),
('8', '2');

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
  `uid` varchar(255) NOT NULL,
  `friendid` varchar(255) NOT NULL,
  `secret` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`,`friendid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`uid`, `friendid`, `secret`) VALUES
('1', '12', 1),
('1', '2', 1),
('1', '3', 1),
('1', '5', 1),
('11', '1', 1),
('12', '1', 1),
('2', '1', 1),
('2', '3', 1),
('2', '5', 1),
('2', '6', 1),
('3', '1', 0),
('3', '6', 1),
('4', '1', 1),
('4', '5', 1),
('5', '1', 1),
('5', '2', 1),
('8', '1', 0),
('8', '4', 0),
('9', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `gname` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`gid`,`gname`,`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`gid`, `gname`, `uid`) VALUES
(1, 'Sports', 1),
(2, 'Apple', 2),
(3, 'Home', 3),
(5, 'Copy', 5),
(6, 'Vinit', 1),
(7, 'Pingle', 11),
(8, 'Mygroup', 8);

-- --------------------------------------------------------

--
-- Table structure for table `grouphas`
--

CREATE TABLE IF NOT EXISTS `grouphas` (
  `gid` varchar(255) NOT NULL,
  `bid` varchar(255) NOT NULL,
  PRIMARY KEY (`gid`,`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grouphas`
--

INSERT INTO `grouphas` (`gid`, `bid`) VALUES
('1', '4'),
('1', '5'),
('1', '8'),
('2', '1'),
('2', '2'),
('2', '3'),
('3', '3'),
('3', '4'),
('3', '7'),
('5', '1'),
('6', '20'),
('6', '3'),
('7', '19'),
('8', '2');

-- --------------------------------------------------------

--
-- Table structure for table `likecreate`
--

CREATE TABLE IF NOT EXISTS `likecreate` (
  `lid` varchar(255) NOT NULL DEFAULT '',
  `mid` varchar(255) NOT NULL,
  `uid` varchar(255) NOT NULL,
  PRIMARY KEY (`lid`,`mid`,`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likecreate`
--

INSERT INTO `likecreate` (`lid`, `mid`, `uid`) VALUES
('', '1', '1'),
('', '10', '2'),
('', '11', '4'),
('', '12', '4'),
('', '13', '5'),
('', '14', '5'),
('', '16', '5'),
('', '17', '1'),
('', '18', '6'),
('', '2', '1'),
('', '3', '1'),
('', '4', '2'),
('', '5', '2'),
('', '6', '3'),
('', '7', '3'),
('', '8', '3'),
('', '9', '2'),
('1', '1', '0'),
('1', '1', '1'),
('1', '10', '1'),
('1', '10', '2'),
('1', '2', '0'),
('1', '28', '1'),
('1', '4', '2'),
('12', '1', '12'),
('2', '1', '2'),
('2', '12', '4'),
('2', '14', '5'),
('2', '15', '5'),
('2', '17', '1'),
('2', '28', '2'),
('6', '18', '6'),
('8', '3', '8'),
('8', '39', '8'),
('9', '1', '9'),
('p3', 'm1', '0'),
('p3', 'm18', 'p6'),
('p4', 'm1', 'p1'),
('p4', 'm10', 'p2'),
('p4', 'm16', 'p5'),
('p5', 'm9', 'p2');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `mname` varchar(255) DEFAULT NULL,
  `mtag` varchar(255) NOT NULL,
  `mtype` varchar(255) DEFAULT NULL,
  `mdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`mid`, `mname`, `mtag`, `mtype`, `mdate`) VALUES
(1, 'sachin', 'god', 'sports', '2015-05-06 09:46:31'),
(2, 'sreesanth', 'banned', 'sports', '2015-05-06 09:46:31'),
(3, 'malinga', 'highest wicket taker', 'sports', '2015-05-06 09:46:31'),
(5, 'cover', 'design,goood-looking', 'design', '2015-05-06 09:46:31'),
(6, 'lasko', 'comfortable', 'house', '2015-05-06 09:46:31'),
(7, 'Skin cover', 'awesome', 'creativity', '2015-05-06 09:46:31'),
(9, 'Idol', 'inspiration', 'port', '2015-05-06 09:46:31'),
(10, 'wimbeldon', 'event', 'sports', '2015-05-06 09:46:31'),
(12, 'jersey', 'teams', 'country', '2015-05-06 09:46:31'),
(13, 'watch tower', 'huge', 'historic', '2015-05-06 09:46:31'),
(14, 'london eye', 'round', 'amusement', '2015-05-06 09:46:31'),
(15, 'sherlock', 'intresting', 'series', '2015-05-06 09:46:31'),
(16, 'scenic', 'beauty', 'travel', '2015-05-06 09:46:31'),
(17, 'coco', 'taste', 'food', '2015-05-06 09:46:31'),
(18, 'SRK', 'Wow,HAndsome', 'movies', '2015-05-06 09:46:31'),
(19, 'cadbury', 'chocolate', 'sweet', '2015-05-06 09:46:31'),
(20, 'fathu', 'sdkfnsd', 'slkdm', '2015-05-06 10:44:50'),
(26, 'Quarter', 'I want this ....!!', 'money', '2015-05-06 17:46:24'),
(27, 'Cat', 'Cat', 'cat', '2015-05-06 17:46:48'),
(28, 'Apple', 'Apple a day', 'apple', '2015-05-06 20:39:58'),
(29, 'Anish', 'bal bka', 'sport', '2015-05-07 16:22:34'),
(30, 'MySelf', 'I lookHandsome', 'personal', '2015-05-07 18:06:40'),
(31, 'Vinit', 'Vinit', 'Vinit', '2015-05-07 19:42:46'),
(32, 'Vinit123', '123', 'vinit123', '2015-05-07 19:57:16'),
(33, 'Vinitxyz', 'sf v', 'sdfd', '2015-05-07 19:58:03'),
(34, 'Wasssupp', 'hu', 'hu', '2015-05-07 20:25:48'),
(35, 'Wasssupp', 'hu', 'hu', '2015-05-07 20:25:48'),
(36, 'Wasssupp', 'hu', 'hu', '2015-05-07 20:25:48'),
(37, 'Wasssupp', 'hu', 'hu', '2015-05-07 20:25:48'),
(38, 'Wasssupp', 'hu', 'hu', '2015-05-07 20:25:48'),
(39, 'Wasssupp', 'hu', 'hu', '2015-05-07 20:25:48'),
(40, 'Wasssupp', 'hu', 'hu', '2015-05-07 20:25:48'),
(41, 'Wasssupp', 'hu', 'hu', '2015-05-07 20:25:48'),
(42, 'Wasssupp', 'hu', 'hu', '2015-05-07 20:25:48'),
(43, 'Wasssupp', 'hu', 'hu', '2015-05-07 20:25:49'),
(44, 'huuuuu', 'hu', 'hu', '2015-05-07 20:27:47'),
(45, 'Yu', 'Yu', 'yu', '2015-05-07 21:37:16'),
(46, 'Yu', 'yu', 'yu', '2015-05-07 21:37:37'),
(47, 'ping', 'ping', 'ping', '2015-05-07 23:47:42'),
(48, 'Pingle', 'pingzklv', 'svds', '2015-05-07 23:48:37'),
(49, 'gjb', 'hjvj', 'bkjb', '2015-05-07 23:58:21'),
(50, 'sexxyyyy', 'xsjmks', 'sdlfsd', '2015-05-08 00:00:35'),
(51, 'Djfsos', 'sdmfkmwesdl', 'sdmfklsmd', '2015-05-08 00:01:31'),
(52, 'sexyyy car', 'fs dsm', 'm;wefl', '2015-05-08 00:03:43'),
(53, 'x', 'x', 'x', '2015-05-08 00:04:11'),
(54, 'mid', 'mid', 'md', '2015-05-08 05:46:42'),
(55, 'xyz', 'mldsmf', 'dacz', '2015-05-08 05:46:59'),
(56, 'xyz', 'mlae', 'lsdmlc', '2015-05-08 05:47:24'),
(57, 'xyz', 'scd', 'sc', '2015-05-08 05:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `repinboard`
--

CREATE TABLE IF NOT EXISTS `repinboard` (
  `bid` varchar(255) NOT NULL DEFAULT '',
  `mid` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`bid`,`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repinboard`
--

INSERT INTO `repinboard` (`bid`, `mid`) VALUES
('1', '1'),
('1', '10'),
('1', '2'),
('1', '3'),
('1', '35'),
('1', '36'),
('1', '37'),
('1', '38'),
('1', '39'),
('1', '40'),
('1', '42'),
('1', '43'),
('1', '44'),
('1', '6'),
('10', '18'),
('10', '19'),
('10', '5'),
('19', '26'),
('19', '27'),
('19', '45'),
('2', '26'),
('2', '29'),
('2', '31'),
('2', '32'),
('2', '33'),
('2', '4'),
('2', '49'),
('2', '5'),
('20', '28'),
('20', '46'),
('21', '30'),
('25', '47'),
('25', '48'),
('26', '54'),
('26', '55'),
('26', '56'),
('26', '57'),
('27', '2'),
('27', '26'),
('27', '3'),
('27', '7'),
('3', '1'),
('3', '18'),
('3', '5'),
('3', '6'),
('4', '2'),
('4', '7'),
('5', '1'),
('5', '10'),
('5', '14'),
('5', '17'),
('5', '50'),
('5', '51'),
('5', '52'),
('5', '53'),
('5', '9'),
('6', '12'),
('6', '17'),
('6', '19'),
('8', '10'),
('8', '12'),
('9', '13'),
('9', '14'),
('9', '15'),
('9', '16'),
('b1', 'm15\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `DOB` date NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `email`, `DOB`, `password`) VALUES
(1, 'Vinit Delwala', 'vinitdeliwala@nyu.edu', '0000-00-00', '1'),
(2, 'Manan Gogri', 'manan@nyu.edu', '2015-05-03', '2'),
(3, 'Siddhant ', 'sid@nyu.edu', '1992-03-03', '3'),
(4, 'Shwet', 'shwet@nyu.edu', '1992-05-24', '4'),
(5, 'Ekta Kamchor !!... Dagebaaaaazzzzz', 'ekta@nyu.edu', '2015-05-05', '5'),
(6, 'alishaa', 'alishaa@nyu.edu', '1992-05-04', '6'),
(7, 'Shalin', 'ss@nyu.edu', '2015-05-04', 'ss'),
(8, 'Anish Gupta', 'a@nyu.edu', '2015-05-05', 'a'),
(9, 'Harish... I am dude', 'h@nyu.edu', '2015-08-25', 'h'),
(10, 'Lu', 'lu@nyu.edu', '2015-05-12', 'lu'),
(11, 'Saahil Pingle', 'sa@nyu.edu', '2015-05-11', 'sa'),
(12, 'Asha', 'aa@nyu.edu', '2015-05-11', 'aa'),
(13, 'test', 't@nyu.edu', '2015-05-04', 't');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
