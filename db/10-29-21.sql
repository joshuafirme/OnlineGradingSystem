/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.18-MariaDB : Database - fdc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`fdc` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `fdc`;

/*Table structure for table `tbl_form` */

DROP TABLE IF EXISTS `tbl_form`;

CREATE TABLE `tbl_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `btransid` varchar(30) DEFAULT '',
  `ctransid` varchar(30) DEFAULT '',
  `fname` varchar(50) DEFAULT '',
  `mname` varchar(50) DEFAULT '',
  `lname` varchar(50) DEFAULT '',
  `gender` varchar(6) DEFAULT '',
  `birthdate` date DEFAULT NULL,
  `citizenship` varchar(50) DEFAULT '',
  `passportno` varchar(50) DEFAULT '',
  `placeissued` varchar(200) DEFAULT '',
  `dateissued` date DEFAULT NULL,
  `occupation` varchar(50) DEFAULT '',
  `contactno` varchar(30) DEFAULT '',
  `addressph` varchar(200) DEFAULT '',
  `dateofdeparture` date DEFAULT NULL,
  `countryorigin` varchar(200) DEFAULT '',
  `dateofarrival` date DEFAULT NULL,
  `airlineflightno` varchar(50) DEFAULT '',
  `fambelow18` varchar(30) DEFAULT NULL,
  `famabove18` varchar(30) DEFAULT '',
  `baggagecheckin` varchar(30) DEFAULT '',
  `baggagehandcarried` varchar(30) DEFAULT '',
  `typeoftravelers` varchar(30) DEFAULT '',
  `purposeoftravel` varchar(100) DEFAULT '',
  `purposeother` varchar(200) DEFAULT '',
  `question1` varchar(3) DEFAULT '',
  `question2` varchar(3) DEFAULT '',
  `question3` varchar(3) DEFAULT '',
  `question4` varchar(3) DEFAULT '',
  `question5` varchar(3) DEFAULT '',
  `question6` varchar(3) DEFAULT '',
  `question7` varchar(3) DEFAULT '',
  `question8` varchar(3) DEFAULT '',
  `question9` varchar(3) DEFAULT '',
  `question10` varchar(3) DEFAULT '',
  `question11` varchar(3) DEFAULT '',
  `question12` varchar(3) DEFAULT '',
  `enumerateq12` varchar(100) DEFAULT '',
  `port_entry` date DEFAULT NULL,
  `port_departure` date DEFAULT NULL,
  `destination` varchar(100) DEFAULT '',
  `billno` varchar(100) DEFAULT '',
  `owner_lname` varchar(50) DEFAULT '',
  `owner_fname` varchar(50) DEFAULT '',
  `owner_mname` varchar(50) DEFAULT '',
  `owner_address` varchar(100) DEFAULT '',
  `owner_occupation` varchar(50) DEFAULT '',
  `owner_civil` varchar(50) DEFAULT '',
  `owner_country` varchar(30) DEFAULT '',
  `owner_postal` varchar(30) DEFAULT '',
  `recipient_lname` varchar(50) DEFAULT '',
  `recipient_fname` varchar(50) DEFAULT '',
  `recipient_mname` varchar(50) DEFAULT '',
  `recepient_address` varchar(100) DEFAULT '',
  `recepient_occupation` varchar(50) DEFAULT '',
  `recepient_civil` varchar(30) DEFAULT '',
  `recepient_country` varchar(30) DEFAULT '',
  `recepient_postal` varchar(30) DEFAULT '',
  `monetary_instrument` varchar(100) DEFAULT '',
  `monetary_country` varchar(100) DEFAULT '',
  `monetary_amount` varchar(30) DEFAULT '',
  `monetary_sources_instrument` varchar(30) DEFAULT '',
  `purposeoftransport` varchar(100) DEFAULT '',
  `signature` varchar(255) DEFAULT '',
  `datecreated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_form` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
