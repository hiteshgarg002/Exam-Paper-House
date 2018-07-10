-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.33-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema indianuniversities
--

CREATE DATABASE IF NOT EXISTS indianuniversities;
USE indianuniversities;

--
-- Definition of table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `aid` int(10) unsigned NOT NULL auto_increment,
  `aname` varchar(45) NOT NULL,
  `pwd` varchar(45) NOT NULL,
  PRIMARY KEY  (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`aid`,`aname`,`pwd`) VALUES 
 (100,'Mahi','123'),
 (200,'Yogi','123');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


--
-- Definition of table `branch`
--

DROP TABLE IF EXISTS `branch`;
CREATE TABLE `branch` (
  `uid` varchar(45) NOT NULL,
  `bid` int(10) unsigned NOT NULL auto_increment,
  `bname` varchar(45) NOT NULL,
  `bicon` varchar(45) NOT NULL,
  `totalsem` varchar(45) NOT NULL,
  PRIMARY KEY  (`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
INSERT INTO `branch` (`uid`,`bid`,`bname`,`bicon`,`totalsem`) VALUES 
 ('101',1,'CS','cs.png','10'),
 ('101',2,'MCA','mca.jpg','6'),
 ('102',3,'Civil','civil.png','8'),
 ('103',4,'Mechanical','mechanical.png','8'),
 ('5',5,'MCA','cs.png','6'),
 ('5',6,'BCA','mca.jpg','6');
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;


--
-- Definition of table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE `cities` (
  `stateid` int(10) unsigned NOT NULL,
  `cityid` int(10) unsigned NOT NULL,
  `cityname` varchar(45) NOT NULL,
  PRIMARY KEY  USING BTREE (`cityid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` (`stateid`,`cityid`,`cityname`) VALUES 
 (100,1,'Gwalior'),
 (100,2,'Indore'),
 (100,3,'Bhopal'),
 (200,4,'Lucknow'),
 (200,5,'Gorakhpur'),
 (200,6,'Kanpur'),
 (300,7,'Jaipur'),
 (300,8,'Jodhpur'),
 (300,9,'Jaisalmer'),
 (400,10,'Gurugram'),
 (400,11,'Panipat'),
 (400,12,'Ballabgarh');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;


--
-- Definition of table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `clientid` int(10) unsigned NOT NULL auto_increment,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mobileno` varchar(45) NOT NULL,
  `dob` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY  (`clientid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`clientid`,`firstname`,`lastname`,`email`,`mobileno`,`dob`,`gender`,`address`,`state`,`city`,`password`) VALUES 
 (1,'Mahendra','Pratap','m@gmail.com','9111118330','03/10/1994','Male','Campoo','100','1','123');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;


--
-- Definition of table `papers`
--

DROP TABLE IF EXISTS `papers`;
CREATE TABLE `papers` (
  `paperid` int(10) unsigned NOT NULL auto_increment,
  `sid` varchar(45) NOT NULL,
  `year` varchar(45) NOT NULL,
  `unit` varchar(45) NOT NULL,
  `qno` varchar(45) NOT NULL,
  `q1` varchar(45) NOT NULL,
  `q2` varchar(45) NOT NULL,
  PRIMARY KEY  (`paperid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `papers`
--

/*!40000 ALTER TABLE `papers` DISABLE KEYS */;
INSERT INTO `papers` (`paperid`,`sid`,`year`,`unit`,`qno`,`q1`,`q2`) VALUES 
 (1,'1004','2017','1','1','bjkg','hbkgl'),
 (2,'1004','2018','1','1','Bkjwgldgwgduyuwdjhvdjb','dqhwkdsgdsqgudqkl');
/*!40000 ALTER TABLE `papers` ENABLE KEYS */;


--
-- Definition of table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE `state` (
  `stateid` int(10) unsigned NOT NULL auto_increment,
  `statename` varchar(45) NOT NULL,
  PRIMARY KEY  USING BTREE (`stateid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

/*!40000 ALTER TABLE `state` DISABLE KEYS */;
INSERT INTO `state` (`stateid`,`statename`) VALUES 
 (100,'Madhya Pradesh'),
 (200,'Uttar Pradesh'),
 (300,'Rajasthan'),
 (400,'Haryana');
/*!40000 ALTER TABLE `state` ENABLE KEYS */;


--
-- Definition of table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE `subjects` (
  `bid` int(10) unsigned NOT NULL,
  `sid` int(10) unsigned NOT NULL auto_increment,
  `sem` varchar(45) NOT NULL,
  `sname` varchar(45) NOT NULL,
  `descr` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `uid` varchar(45) NOT NULL,
  PRIMARY KEY  (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` (`bid`,`sid`,`sem`,`sname`,`descr`,`status`,`uid`) VALUES 
 (3,1004,'8','Maths','cdcac','Theory','102'),
 (4,1005,'8','ED','mdcgkjwglfw','Theory','103'),
 (5,1006,'6','AI','fjhff','Theory','5'),
 (5,1007,'6','AI','fjhff','Theory','5');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;


--
-- Definition of table `universities`
--

DROP TABLE IF EXISTS `universities`;
CREATE TABLE `universities` (
  `uid` int(10) unsigned NOT NULL auto_increment,
  `uname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `landline` varchar(45) NOT NULL,
  `addr` varchar(45) NOT NULL,
  `st` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `pin` int(10) unsigned NOT NULL,
  `desc` varchar(45) NOT NULL,
  `logo` varchar(45) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universities`
--

/*!40000 ALTER TABLE `universities` DISABLE KEYS */;
INSERT INTO `universities` (`uid`,`uname`,`email`,`contact`,`mobile`,`landline`,`addr`,`st`,`city`,`pin`,`desc`,`logo`) VALUES 
 (5,'ITM UNIVERSITY','itmu@gmail.com','Shyam','33883020--021','823199901230','kjxlahdajd','100','1',30307371,'ldhsdflsn','itm.png'),
 (101,'ITM UNIVERSITY','itmu@gmail.com','Neeraj','9111118330','0751470222','        Gwalior\r\n','200','4',474001,'Celebrating Dreams','itm.png'),
 (102,'Amity University','amity@gmail.com','Shashank','9111118330','0751470111','MaharajPura','100','2',474001,'We are dreamers.','amity.jpg'),
 (103,'Lovely Professional University','lpu@gmail.com','Sameer','9112098838','0711737778','Vivek Vihar','200','4',87873,'hkhod;','lovely.png');
/*!40000 ALTER TABLE `universities` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
