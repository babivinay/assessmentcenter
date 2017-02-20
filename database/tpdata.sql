-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2017 at 04:30 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tpdata`
--
CREATE DATABASE `tpdata` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tpdata`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `slno` int(11) NOT NULL,
  `username` char(60) DEFAULT NULL,
  `password` char(60) DEFAULT NULL,
  `phno` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`slno`, `username`, `password`, `phno`) VALUES
(0, 'admin', 'test', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE IF NOT EXISTS `assessments` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` char(40) DEFAULT NULL,
  `adate` char(20) NOT NULL,
  PRIMARY KEY (`aid`),
  UNIQUE KEY `aname` (`aname`),
  KEY `aid` (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `assessments`
--

INSERT INTO `assessments` (`aid`, `aname`, `adate`) VALUES
(5, 'abcd', '2014-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `att`
--

CREATE TABLE IF NOT EXISTS `att` (
  `regno` char(15) NOT NULL DEFAULT '',
  `af1` char(5) DEFAULT NULL,
  `af2` char(5) DEFAULT NULL,
  `as1` char(5) DEFAULT NULL,
  `as2` char(5) DEFAULT NULL,
  `at1` char(5) DEFAULT NULL,
  `at2` char(5) DEFAULT NULL,
  `afo1` char(5) DEFAULT NULL,
  `afo2` char(5) DEFAULT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `att`
--

INSERT INTO `att` (`regno`, `af1`, `af2`, `as1`, `as2`, `at1`, `at2`, `afo1`, `afo2`) VALUES
('1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('313175710198', '80', '75', '74', '85', '74', '75', '85', '84');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `batchname` char(20) DEFAULT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`bid`, `batchname`) VALUES
(1, '2013-2017'),
(2, '2014-2018'),
(3, '2015-2019'),
(4, '2016-2020'),
(5, '2017-2021');

-- --------------------------------------------------------

--
-- Table structure for table `crt`
--

CREATE TABLE IF NOT EXISTS `crt` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` char(30) DEFAULT NULL,
  `cdate` char(15) DEFAULT NULL,
  `conductedby` char(40) DEFAULT NULL,
  PRIMARY KEY (`cid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `crt`
--

INSERT INTO `crt` (`cid`, `cname`, `cdate`, `conductedby`) VALUES
(2, 'abcd', '2014-01-01', 'sdasd');

-- --------------------------------------------------------

--
-- Table structure for table `fassessment`
--

CREATE TABLE IF NOT EXISTS `fassessment` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `regno` char(15) NOT NULL DEFAULT '',
  `aid` int(11) NOT NULL DEFAULT '0',
  `year` char(25) DEFAULT NULL,
  `marks` char(5) DEFAULT NULL,
  `result` char(20) DEFAULT NULL,
  PRIMARY KEY (`slno`,`regno`,`aid`),
  KEY `regno` (`regno`),
  KEY `aid` (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `fassessment`
--

INSERT INTO `fassessment` (`slno`, `regno`, `aid`, `year`, `marks`, `result`) VALUES
(3, '313175710198', 5, '1 st year (SEM-I)', '70', 'Good'),
(4, '313175710198', 5, '2 nd year (SEM-I)', '56.25', 'Average'),
(5, '313175710198', 5, '3 rd year (SEM-I)', '97.5', 'Very Good');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `regno` char(15) NOT NULL DEFAULT '',
  `obtained1` char(6) DEFAULT '0',
  `total1` char(6) DEFAULT '0',
  `f1` char(6) DEFAULT 'NA',
  `b1` int(11) NOT NULL DEFAULT '0',
  `obtained2` char(6) NOT NULL DEFAULT '0',
  `total2` char(6) NOT NULL DEFAULT '0',
  `f2` char(6) NOT NULL DEFAULT 'NA',
  `b2` char(3) NOT NULL DEFAULT '0',
  `obtained3` char(6) NOT NULL DEFAULT '0',
  `total3` char(6) NOT NULL DEFAULT '0',
  `f3` char(6) NOT NULL DEFAULT 'NA',
  `b3` char(6) NOT NULL DEFAULT '0',
  `obtained4` char(6) NOT NULL DEFAULT '0',
  `total4` char(6) NOT NULL DEFAULT '0',
  `f4` char(6) NOT NULL DEFAULT 'NA',
  `b4` char(3) NOT NULL DEFAULT '0',
  `obtained5` char(6) NOT NULL DEFAULT '0',
  `total5` char(6) NOT NULL DEFAULT '0',
  `f5` char(6) NOT NULL DEFAULT 'NA',
  `b5` char(3) NOT NULL DEFAULT '0',
  `obtained6` char(6) NOT NULL DEFAULT '0',
  `total6` char(6) NOT NULL DEFAULT '0',
  `f6` char(6) NOT NULL DEFAULT 'NA',
  `b6` char(3) NOT NULL DEFAULT '0',
  `obtained7` char(6) NOT NULL DEFAULT '0',
  `total7` char(6) NOT NULL DEFAULT '0',
  `f7` char(6) NOT NULL DEFAULT 'NA',
  `b7` char(3) NOT NULL DEFAULT '0',
  `obtained8` char(6) NOT NULL DEFAULT '0',
  `total8` char(6) NOT NULL DEFAULT '0',
  `f8` char(6) NOT NULL DEFAULT 'NA',
  `b8` char(3) NOT NULL DEFAULT '0',
  `cgpa` char(6) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`regno`, `obtained1`, `total1`, `f1`, `b1`, `obtained2`, `total2`, `f2`, `b2`, `obtained3`, `total3`, `f3`, `b3`, `obtained4`, `total4`, `f4`, `b4`, `obtained5`, `total5`, `f5`, `b5`, `obtained6`, `total6`, `f6`, `b6`, `obtained7`, `total7`, `f7`, `b7`, `obtained8`, `total8`, `f8`, `b8`, `cgpa`) VALUES
('1234', '0', '0', NULL, 0, '0', '0', '0.00', '0', '0', '0', '0.00', '0', '0', '0', '0.00', '0', '0', '0', '0.00', '0', '0', '0', '0.00', '0', '0', '0', '0.00', '0', '0', '0', '0.00', '0', ''),
('313175710198', '230', '29', '8.28', 0, '250', '28', '8.93', '0', '230', '29', '7.93', '0', '240', '26', '9.23', '0', '230', '29', '7.93', '0', '240', '26', '9.23', '0', '230', '29', '7.93', '0', '240', '26', '9.23', '0', '8.51');

-- --------------------------------------------------------

--
-- Table structure for table `placementinfo`
--

CREATE TABLE IF NOT EXISTS `placementinfo` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `regno` char(15) NOT NULL DEFAULT '',
  `comid` int(11) NOT NULL DEFAULT '0',
  `year` char(25) NOT NULL,
  `roundsconducted` char(4) DEFAULT NULL,
  `roundsqualified` char(4) DEFAULT NULL,
  `sfeedback` text,
  PRIMARY KEY (`slno`,`regno`,`comid`),
  KEY `regno` (`regno`),
  KEY `comid` (`comid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `placementinfo`
--


-- --------------------------------------------------------

--
-- Table structure for table `placements`
--

CREATE TABLE IF NOT EXISTS `placements` (
  `comid` int(11) NOT NULL AUTO_INCREMENT,
  `companyname` char(50) DEFAULT NULL,
  `totalrounds` char(3) DEFAULT NULL,
  `visiteddate` char(20) DEFAULT NULL,
  PRIMARY KEY (`comid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `placements`
--

INSERT INTO `placements` (`comid`, `companyname`, `totalrounds`, `visiteddate`) VALUES
(1, 'abcd', '3', '2014-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `riasec`
--

CREATE TABLE IF NOT EXISTS `riasec` (
  `regno` char(15) NOT NULL DEFAULT '',
  `s1` char(20) DEFAULT NULL,
  `s2` char(20) DEFAULT NULL,
  `s3` char(20) DEFAULT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riasec`
--

INSERT INTO `riasec` (`regno`, `s1`, `s2`, `s3`) VALUES
('1234', NULL, NULL, NULL),
('313175710198', 'Realistic', 'Investigative', 'Enterprising');

-- --------------------------------------------------------

--
-- Table structure for table `scrt`
--

CREATE TABLE IF NOT EXISTS `scrt` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `regno` char(15) NOT NULL DEFAULT '',
  `cid` int(11) NOT NULL DEFAULT '0',
  `year` char(25) DEFAULT NULL,
  `marks` char(5) DEFAULT NULL,
  `result` char(20) DEFAULT NULL,
  PRIMARY KEY (`slno`,`regno`,`cid`),
  KEY `regno` (`regno`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `scrt`
--


-- --------------------------------------------------------

--
-- Table structure for table `sdata`
--

CREATE TABLE IF NOT EXISTS `sdata` (
  `regno` char(15) NOT NULL DEFAULT '',
  `name` char(100) DEFAULT NULL,
  `lastname` char(50) NOT NULL,
  `foccupation` char(40) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `mobile` char(12) DEFAULT NULL,
  `gender` char(7) DEFAULT NULL,
  `atype` char(15) DEFAULT NULL,
  `email` char(80) DEFAULT NULL,
  `branch` char(10) DEFAULT NULL,
  `year` char(10) DEFAULT NULL,
  `section` char(5) NOT NULL,
  `sscper` char(10) DEFAULT NULL,
  `interper` char(10) DEFAULT NULL,
  `eamcetrank` char(10) DEFAULT NULL,
  `flag` int(11) NOT NULL DEFAULT '0',
  `image` longblob NOT NULL,
  `batch` char(20) NOT NULL,
  `sscname` char(80) NOT NULL,
  `fname` char(80) NOT NULL,
  `aincome` char(15) NOT NULL,
  `fmobile` char(15) NOT NULL,
  `title` char(20) NOT NULL,
  `mname` char(60) NOT NULL,
  `mmaidenname` char(40) NOT NULL,
  `rmobile` char(15) NOT NULL,
  `district` char(40) NOT NULL,
  `pcode` char(10) NOT NULL,
  `nationality` char(30) NOT NULL,
  `dob` date NOT NULL,
  `aadhar` char(18) NOT NULL,
  `caste` char(10) NOT NULL,
  `subcaste` char(40) NOT NULL,
  `reservation` char(10) NOT NULL,
  `sscschool` char(100) NOT NULL,
  `sscpassyear` char(10) NOT NULL,
  `intername` char(100) NOT NULL,
  `interpassyear` char(10) NOT NULL,
  `admissiontype` char(20) NOT NULL,
  `religion` char(25) NOT NULL,
  `bgroup` char(10) NOT NULL,
  `ph` char(10) NOT NULL,
  `gap` char(5) NOT NULL,
  `gapreason` text NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdata`
--

INSERT INTO `sdata` (`regno`, `name`, `lastname`, `foccupation`, `age`, `mobile`, `gender`, `atype`, `email`, `branch`, `year`, `section`, `sscper`, `interper`, `eamcetrank`, `flag`, `image`, `batch`, `sscname`, `fname`, `aincome`, `fmobile`, `title`, `mname`, `mmaidenname`, `rmobile`, `district`, `pcode`, `nationality`, `dob`, `aadhar`, `caste`, `subcaste`, `reservation`, `sscschool`, `sscpassyear`, `intername`, `interpassyear`, `admissiontype`, `religion`, `bgroup`, `ph`, `gap`, `gapreason`) VALUES
('1234', 'vinay', '', NULL, NULL, '9640874054', NULL, NULL, 'vinaynarayana99@gmail.com', NULL, NULL, '', NULL, NULL, NULL, 0, 0x696d616765732f70726f66696c652e706e67, '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('313175710198', 'Vinay', 'Narayana', 'Business', 21, '9640874054', 'Male', 'Hostel', 'vinaynarayana99@gmail.com', 'CSE', '4thyear', 'C', '80.7', '80.23', '228', 1, 0x696d616765732f73747564656e74732f333133313735373130313938393634303837343035342831292e4a5047, '2013-2017', 'Narayana Vinay', 'Venkateswara Rao Narayana', '400000', '9030347951', 'Mr', 'Nagamani', 'Bhuma', '9393039196', 'west godavari', '534447', 'Indian', '1995-09-27', '222388276454', 'OC', 'Arya Vysya', 'No', 'Loyola English Medium High School,Jangareddygudem', '2011', 'Sri Vasavi Engineering College ,Tadepalligudem', '2014', 'NRI', 'Hindu', 'O+ve', 'No', 'no', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `sdiscovery`
--

CREATE TABLE IF NOT EXISTS `sdiscovery` (
  `regno` char(15) NOT NULL DEFAULT '',
  `purpose` char(30) DEFAULT NULL,
  `i1` char(50) DEFAULT NULL,
  `i2` char(50) DEFAULT NULL,
  `i3` char(50) DEFAULT NULL,
  `im1` char(50) DEFAULT NULL,
  `im2` char(50) DEFAULT NULL,
  `im3` char(50) DEFAULT NULL,
  `crate` char(40) NOT NULL,
  `lessconfident` char(30) NOT NULL,
  `cm1` char(50) NOT NULL,
  `cm2` char(50) NOT NULL,
  `cm3` char(50) NOT NULL,
  `langskillsrate` char(20) NOT NULL,
  `writeskillsrate` char(50) NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdiscovery`
--

INSERT INTO `sdiscovery` (`regno`, `purpose`, `i1`, `i2`, `i3`, `im1`, `im2`, `im3`, `crate`, `lessconfident`, `cm1`, `cm2`, `cm3`, `langskillsrate`, `writeskillsrate`) VALUES
('1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', ''),
('313175710198', 'Software job', '1234', 'Communication Skills', 'managing skills', 'Vocabulary', 'Team Work', 'Core knowledge', 'Confident', 'Stage-Fear', 'sdas', 'asdasd', 'asdasd', 'Very Good', 'Very Good');

-- --------------------------------------------------------

--
-- Table structure for table `secretkeys`
--

CREATE TABLE IF NOT EXISTS `secretkeys` (
  `loginkey` char(15) DEFAULT NULL,
  `registerkey` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secretkeys`
--

INSERT INTO `secretkeys` (`loginkey`, `registerkey`) VALUES
('test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tat`
--

CREATE TABLE IF NOT EXISTS `tat` (
  `regno` char(15) NOT NULL DEFAULT '',
  `tatdata` text,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tat`
--

INSERT INTO `tat` (`regno`, `tatdata`) VALUES
('1234', NULL),
('313175710198', 'Be sure and examine the picture for several seconds before clicking the button below. Once you push the button, you will have 10 minutes to write whatever story comes into your mind. You should write continuously the entire 10 minutes. If you need more than 10 minutes, feel free to continue writing until you are finished.\r\nBe sure and examine the picture for several seconds before clicking the button below. Once you push the button, you will have 10 minutes to write whatever story comes into your mind. You should write continuously the entire 10 minutes. If you need more than 10 minutes, feel free to continue writing until you are finished.\r\nBe sure and examine the picture for several seconds before clicking the button below. Once you push the button, you will have 10 minutes to write whatever story comes into your mind. You should write continuously the entire 10 minutes. If you need more than 10 minutes, feel free to continue writing until you are finished.');

-- --------------------------------------------------------

--
-- Table structure for table `tatscores`
--

CREATE TABLE IF NOT EXISTS `tatscores` (
  `regno` char(15) NOT NULL DEFAULT '',
  `ac1` char(6) DEFAULT NULL,
  `ac2` char(6) DEFAULT NULL,
  `ac3` char(6) DEFAULT NULL,
  `af1` char(6) DEFAULT NULL,
  `af2` char(6) DEFAULT NULL,
  `af3` char(6) DEFAULT NULL,
  `po1` char(6) DEFAULT NULL,
  `po2` char(6) DEFAULT NULL,
  `po3` char(6) DEFAULT NULL,
  `sr1` char(6) DEFAULT NULL,
  `sr2` char(6) DEFAULT NULL,
  `sr3` char(6) DEFAULT NULL,
  `so1` char(6) DEFAULT NULL,
  `so2` char(6) DEFAULT NULL,
  `so3` char(6) DEFAULT NULL,
  `pos1` char(6) DEFAULT NULL,
  `pos2` char(6) DEFAULT NULL,
  `pos3` char(6) DEFAULT NULL,
  `neg1` char(6) DEFAULT NULL,
  `neg2` char(6) DEFAULT NULL,
  `neg3` char(6) DEFAULT NULL,
  `big1` char(6) DEFAULT NULL,
  `big2` char(6) DEFAULT NULL,
  `big3` char(6) DEFAULT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tatscores`
--

INSERT INTO `tatscores` (`regno`, `ac1`, `ac2`, `ac3`, `af1`, `af2`, `af3`, `po1`, `po2`, `po3`, `sr1`, `sr2`, `sr3`, `so1`, `so2`, `so3`, `pos1`, `pos2`, `pos3`, `neg1`, `neg2`, `neg3`, `big1`, `big2`, `big3`) VALUES
('1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('313175710198', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `att`
--
ALTER TABLE `att`
  ADD CONSTRAINT `a2` FOREIGN KEY (`regno`) REFERENCES `sdata` (`regno`) ON DELETE CASCADE;

--
-- Constraints for table `fassessment`
--
ALTER TABLE `fassessment`
  ADD CONSTRAINT `fassessment_ibfk_1` FOREIGN KEY (`regno`) REFERENCES `sdata` (`regno`) ON DELETE CASCADE,
  ADD CONSTRAINT `fassessment_ibfk_2` FOREIGN KEY (`aid`) REFERENCES `assessments` (`aid`) ON DELETE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `m2` FOREIGN KEY (`regno`) REFERENCES `sdata` (`regno`) ON DELETE CASCADE;

--
-- Constraints for table `placementinfo`
--
ALTER TABLE `placementinfo`
  ADD CONSTRAINT `placementinfo_ibfk_1` FOREIGN KEY (`regno`) REFERENCES `sdata` (`regno`) ON DELETE CASCADE,
  ADD CONSTRAINT `placementinfo_ibfk_2` FOREIGN KEY (`comid`) REFERENCES `placements` (`comid`) ON DELETE CASCADE;

--
-- Constraints for table `riasec`
--
ALTER TABLE `riasec`
  ADD CONSTRAINT `riasec_ibfk_1` FOREIGN KEY (`regno`) REFERENCES `sdata` (`regno`) ON DELETE CASCADE;

--
-- Constraints for table `scrt`
--
ALTER TABLE `scrt`
  ADD CONSTRAINT `scrt_ibfk_1` FOREIGN KEY (`regno`) REFERENCES `sdata` (`regno`) ON DELETE CASCADE,
  ADD CONSTRAINT `scrt_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `crt` (`cid`) ON DELETE CASCADE;

--
-- Constraints for table `sdiscovery`
--
ALTER TABLE `sdiscovery`
  ADD CONSTRAINT `sd2` FOREIGN KEY (`regno`) REFERENCES `sdata` (`regno`) ON DELETE CASCADE;

--
-- Constraints for table `tat`
--
ALTER TABLE `tat`
  ADD CONSTRAINT `tat_ibfk_1` FOREIGN KEY (`regno`) REFERENCES `sdata` (`regno`) ON DELETE CASCADE;

--
-- Constraints for table `tatscores`
--
ALTER TABLE `tatscores`
  ADD CONSTRAINT `ta2` FOREIGN KEY (`regno`) REFERENCES `sdata` (`regno`) ON DELETE CASCADE;
