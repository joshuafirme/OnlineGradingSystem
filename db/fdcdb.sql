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

/*Table structure for table `tbl_logs` */

DROP TABLE IF EXISTS `tbl_logs`;

CREATE TABLE `tbl_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mainID` varchar(90) DEFAULT '',
  `logID` varchar(90) DEFAULT '',
  `userid` varchar(90) DEFAULT '',
  `email` varchar(150) DEFAULT '',
  `name` varchar(100) DEFAULT '',
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `module` varchar(90) DEFAULT '',
  `remarks` text DEFAULT NULL,
  `info` text DEFAULT NULL,
  `attach` text DEFAULT NULL,
  `action` text DEFAULT NULL,
  `browser` text DEFAULT NULL,
  `datejim` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ipaddress` varchar(50) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=851 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_logs` */

/*Table structure for table `tbl_user_role` */

DROP TABLE IF EXISTS `tbl_user_role`;

CREATE TABLE `tbl_user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` varchar(30) NOT NULL,
  `role_name` varchar(30) NOT NULL,
  `viewdashboard` tinyint(1) DEFAULT 0,
  `dashboard_total_boc` tinyint(1) DEFAULT 0,
  `dashboard_total_user` tinyint(1) DEFAULT 0,
  `dashboard_announcement` tinyint(1) DEFAULT 0,
  `dashboard_add_announcement` tinyint(1) DEFAULT 0,
  `dashboard_update_announcement` tinyint(1) DEFAULT 0,
  `viewadminaccess` tinyint(1) DEFAULT 0,
  `auditlog` tinyint(1) DEFAULT 0,
  `account` tinyint(1) DEFAULT 0,
  `addnewUser` tinyint(1) DEFAULT 0,
  `deleteUser` tinyint(1) DEFAULT 0,
  `user_role` tinyint(1) DEFAULT 0,
  `addnewRole` tinyint(1) DEFAULT 0,
  `editRole` tinyint(1) DEFAULT 0,
  `viewPermissionRole` tinyint(1) DEFAULT 0,
  `status` tinyint(1) DEFAULT 1 COMMENT '1 - active / 0 - inActive',
  `datecreated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_user_role` */

insert  into `tbl_user_role`(`id`,`role_id`,`role_name`,`viewdashboard`,`dashboard_total_boc`,`dashboard_total_user`,`dashboard_announcement`,`dashboard_add_announcement`,`dashboard_update_announcement`,`viewadminaccess`,`auditlog`,`account`,`addnewUser`,`deleteUser`,`user_role`,`addnewRole`,`editRole`,`viewPermissionRole`,`status`,`datecreated`) values 
(13,'RID-000001','ADMIN',1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'2021-10-04 09:49:52');

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` varchar(30) NOT NULL,
  `email` varchar(150) DEFAULT '',
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(150) DEFAULT '',
  `fname` varchar(50) DEFAULT '',
  `mname` varchar(30) DEFAULT '',
  `lname` varchar(50) DEFAULT '',
  `contact` varchar(30) DEFAULT '',
  `birthdate` date DEFAULT NULL,
  `address` varchar(255) DEFAULT '',
  `user_role` varchar(30) DEFAULT '',
  `user_avatar` varchar(255) DEFAULT 'default_profile.png',
  `datecreated` date DEFAULT NULL,
  `lost_login` timestamp NULL DEFAULT current_timestamp(),
  `status` tinyint(1) DEFAULT NULL,
  `account_type` varchar(30) DEFAULT '' COMMENT 'origin or valuation',
  PRIMARY KEY (`id`,`userID`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`userID`,`email`,`username`,`password`,`fname`,`mname`,`lname`,`contact`,`birthdate`,`address`,`user_role`,`user_avatar`,`datecreated`,`lost_login`,`status`,`account_type`) values 
(12,'UID-000001','johnmichaelcapistrano092032@gmail.com','adminzxc123','$2y$10$L9k.7YYnhR8AxfOP3UR9VOkdQNlMWRy58HL9I67DQaHv31VnPF6iu','John Michael','R.','Capistrano','12312312312','2021-10-04','','RID-000001','default_profile.png',NULL,'2021-10-04 09:48:42',1,'admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
