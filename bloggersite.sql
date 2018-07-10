-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 07:40 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bloggersite`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`aid` int(20) NOT NULL,
  `uid` int(20) DEFAULT NULL,
  `title` varchar(20) NOT NULL,
  `date1` date NOT NULL,
  `category` varchar(20) NOT NULL,
  `blog` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`aid`, `uid`, `title`, `date1`, `category`, `blog`) VALUES
(1, 1, 'msd', '2017-11-10', 'sports', 'Mahendra Singh Dhoni commonly known as MS Dhoni; born 7 July 1981 is an Indian cricketer who captained the Indian team in limited-overs\r\nformats from 2007 to 2016 and in Test cricket from 2008 to 2014. An attacking right-handed middle-order batsman and wicket-keeper, \r\nhe is widely regarded as one of the greatest finishers in limited-overs cricket.He is also regarded to be one of the best wicket-keepers \r\nin world cricket and is known to have very fast hands. He made his One Day International (ODI) debut in December 2004 against Bangladesh, and \r\nplayed his first Test a year later against Sri Lanka.'),
(5, 1, 'mee', '2017-11-11', 'sports', 'hey'),
(6, 1, 'mee2', '2017-11-11', 'sports', 'try2'),
(7, 1, 'try1', '2017-11-11', 'sports', 'sdsads'),
(8, 1, 'try2', '2017-11-11', 'sports', 'HOPE IT WORKS'),
(10, 2, 'ABOUT', '2017-11-12', 'poetry', 'I AM A ASS BITCH');

-- --------------------------------------------------------

--
-- Table structure for table `articletag`
--

CREATE TABLE IF NOT EXISTS `articletag` (
  `aid` int(20) NOT NULL DEFAULT '0',
  `tid` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articletag`
--

INSERT INTO `articletag` (`aid`, `tid`) VALUES
(1, 1),
(8, 1),
(8, 2),
(10, 2),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat`) VALUES
('poetry'),
('project'),
('sports');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `uid` int(20) NOT NULL DEFAULT '0',
  `aid` int(20) NOT NULL DEFAULT '0',
  `text1` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`uid`, `aid`, `text1`) VALUES
(1, 1, 'greatest player'),
(1, 1, 'Lord of cricket'),
(1, 5, 'dumb'),
(1, 5, 'What shit is this?'),
(2, 1, 'hey'),
(2, 5, 'dumb shit'),
(2, 5, 'hey'),
(2, 5, 'hope'),
(2, 5, 'yeah'),
(2, 6, 'great'),
(3, 5, 'Hey');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `uid` int(20) NOT NULL DEFAULT '0',
  `aid` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`uid`, `aid`) VALUES
(1, 1),
(2, 1),
(3, 1),
(1, 5),
(2, 5),
(3, 5),
(4, 5),
(8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `tid` int(20) NOT NULL,
  `tagname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tid`, `tagname`) VALUES
(1, 'cricket'),
(2, 'football'),
(3, 'south indian');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`uid` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` text,
  `admin` varchar(3) NOT NULL DEFAULT 'no' COMMENT 'priveleges',
  `PP` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `lname`, `uname`, `password`, `email`, `mobile`, `admin`, `PP`) VALUES
(1, 'pavan', 'hoysal', 'paoone', 'pavan', 'pavan@gmail.com', NULL, 'yes', '.\\profile\\5.jpg'),
(2, 'preetham', 'thikavarasu', 'preethu', 'nandhini', 'preethu88@gmail.com', NULL, 'no', '.\\profile\\preetham.jpg'),
(3, 'manja', 'mani', 'mjj', 'manoj', 'manja@gmail.com', NULL, 'no', '.\\profile\\2.jpg'),
(4, 'nikhil', 'ae', 'nikkh', 'bbb', 'nikhil@gmail.com', '7204185636', 'no', '.\\profile\\'),
(5, 'Db', 'ar', 'dabba', 'dabba', 'dabba@gmail.com', NULL, 'no', '.\\profile\\'),
(6, 'nikhil', 'ar', 'nikhil123', 'abcd', 'arnikhil12@gmail.com', NULL, 'no', '.\\profile\\'),
(7, 'nikhil', 'ar', 'nikkhil', 'nnn', 'arnikhil0@gmail.com', '9480358940', 'no', '.\\profile\\'),
(8, 'raja', 'ar', 'raj', 'rajashekar', 'arr1969n@gmail.com', '7204185635', 'no', '.\\profile\\');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`aid`), ADD KEY `category` (`category`), ADD KEY `uid` (`uid`);

--
-- Indexes for table `articletag`
--
ALTER TABLE `articletag`
 ADD PRIMARY KEY (`aid`,`tid`), ADD KEY `tid` (`tid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`cat`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`uid`,`aid`,`text1`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
 ADD PRIMARY KEY (`uid`,`aid`), ADD KEY `aid` (`aid`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
 ADD PRIMARY KEY (`tid`), ADD UNIQUE KEY `tid` (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `uname` (`uname`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`cat`),
ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `articletag`
--
ALTER TABLE `articletag`
ADD CONSTRAINT `articletag_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `articles` (`aid`),
ADD CONSTRAINT `articletag_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `tag` (`tid`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`),
ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`aid`) REFERENCES `articles` (`aid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
