/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.18-MariaDB : Database - gradingdb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gradingdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `gradingdb`;

/*Table structure for table `tbl_announcement` */

DROP TABLE IF EXISTS `tbl_announcement`;

CREATE TABLE `tbl_announcement` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `date` timestamp NULL DEFAULT NULL,
  `message` text DEFAULT NULL,
  `title` varchar(100) DEFAULT '',
  `announceby` varchar(20) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_announcement` */

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
) ENGINE=InnoDB AUTO_INCREMENT=818 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_logs` */

insert  into `tbl_logs`(`id`,`mainID`,`logID`,`userid`,`email`,`name`,`date`,`time`,`module`,`remarks`,`info`,`attach`,`action`,`browser`,`datejim`,`ipaddress`) values 
(779,'','LOG-000001','','',' ','2021-09-24','10:38:07','LOGIN',' 213123123 , username is not registered','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 10:38:07','::1'),
(780,'','LOG-000780','UID-000001','','Michael Capistrano','2021-09-24','10:47:17','LOGIN',' adminzxc has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 10:47:17','::1'),
(781,'','LOG-000781','UID-000001','','Michael Capistrano','2021-09-24','10:48:55','LOGIN',' adminzxc , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 10:48:55','::1'),
(782,'','LOG-000782','UID-000001','','Michael Capistrano','2021-09-24','10:48:57','LOGIN',' adminzxc has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 10:48:57','::1'),
(783,'','LOG-000783','UID-000001','','Michael Capistrano','2021-09-24','11:24:57','LOGIN',' adminzxc has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 11:24:57','::1'),
(784,'','LOG-000784','UID-000001','','Michael Capistrano','2021-09-24','11:58:46','USER ROLE',' has insert roleStudent','Sucessfully Added Student',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 11:58:46','::1'),
(785,'','LOG-000785','UID-000001','','Michael Capistrano','2021-09-24','12:06:35','USER ROLE',' has insert role Student','Sucessfully Added RID-000008',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 12:06:35','::1'),
(786,'','LOG-000786','UID-000001','','Michael Capistrano','2021-09-24','12:07:04','USER ROLE',' has insert role Studemt','Sucessfully Added RID-000008',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 12:07:04','::1'),
(787,'','LOG-000787','UID-000001','','Michael Capistrano','2021-09-24','12:07:05','USER ROLE',' has insert role Studemt','Sucessfully Added RID-000008',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 12:07:05','::1'),
(788,'','LOG-000788','UID-000001','','Michael Capistrano','2021-09-24','12:08:27','USER ROLE',' has insert role Studemt','Sucessfully Added RID-000008',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 12:08:27','::1'),
(789,'','LOG-000789','UID-000001','','Michael Capistrano','2021-09-24','12:08:58','USER ROLE',' has insert role Student','Sucessfully Added RID-000008',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 12:08:58','::1'),
(790,'','LOG-000790','UID-000001','','Michael Capistrano','2021-09-24','12:09:17','USER ROLE',' has insert role Teacher','Sucessfully Added RID-000010',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 12:09:17','::1'),
(791,'','LOG-000791','UID-000001','','Michael Capistrano','2021-09-24','12:36:00','USER ROLE',' has Update From  to adminzxc','Sucessfully UPDATE RID-000001',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 12:36:00','::1'),
(792,'','LOG-000792','UID-000001','','Michael Capistrano','2021-09-24','12:38:12','USER ROLE',' has Update From adminzxc to admin','Sucessfully UPDATE RID-000001',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 12:38:12','::1'),
(793,'','LOG-000793','','',' ','2021-09-24','14:28:54','LOGIN',' adminzxc , studentno is not registered','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 14:28:54','::1'),
(794,'','LOG-000794','','',' ','2021-09-24','14:28:55','LOGIN',' adminzxc , studentno is not registered','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 14:28:55','::1'),
(795,'','LOG-000795','','',' ','2021-09-24','14:29:01','LOGIN',' adminzxc , studentno is not registered','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 14:29:01','::1'),
(796,'','LOG-000796','','',' ','2021-09-24','14:29:29','LOGIN',' adminzxc , studentno is not registered','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 14:29:29','::1'),
(797,'','LOG-000797','UID-000001','','Michael Capistrano','2021-09-24','14:31:22','LOGIN',' adminzxc has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 14:31:22','::1'),
(798,'','LOG-000798','UID-000001','adminzxc','Michael Capistrano','2021-09-24','15:08:04','USER ACCOUNT','adminzxc has created account:UID-000002, Type:teacher, Role:RID-000008','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 15:08:04','::1'),
(799,'','LOG-000799','UID-000001','adminzxc','Michael Capistrano','2021-09-24','15:08:37','USER ACCOUNT','adminzxc has created account:UID-000003, Type:teacher, Role:RID-000008','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 15:08:37','::1'),
(800,'','LOG-000800','UID-000001','adminzxc','Michael Capistrano','2021-09-24','15:11:27','USER ACCOUNT','adminzxc has created account:UID-000004, Type:teacher, Role:RID-000008','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 15:11:27','::1'),
(801,'','LOG-000801','UID-000001','adminzxc','Michael Capistrano','2021-09-24','15:14:20','USER ACCOUNT','adminzxc has created account:UID-000005, Type:teacher, Role:RID-000008','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 15:14:20','::1'),
(802,'','LOG-000802','UID-000001','adminzxc','Michael Capistrano','2021-09-24','15:14:22','USER ACCOUNT','adminzxc has created account:UID-000006, Type:teacher, Role:RID-000008','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 15:14:22','::1'),
(803,'','LOG-000803','UID-000001','adminzxc','Michael Capistrano','2021-09-24','15:14:49','USER ACCOUNT','adminzxc has created account:UID-000007, Type:teacher, Role:RID-000008','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 15:14:49','::1'),
(804,'','LOG-000804','UID-000001','adminzxc','Michael Capistrano','2021-09-24','15:14:51','USER ACCOUNT','adminzxc has created account:UID-000008, Type:teacher, Role:RID-000008','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 15:14:51','::1'),
(805,'','LOG-000805','UID-000001','adminzxc','Michael Capistrano','2021-09-24','15:16:01','USER ACCOUNT','adminzxc has created account:UID-000009, Type:teacher, Role:RID-000001','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 15:16:01','::1'),
(806,'','LOG-000806','UID-000001','adminzxc','Michael Capistrano','2021-09-24','15:20:47','USER ACCOUNT','adminzxc has created account:UID-000010, Type:teacher, Role:RID-000008','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 15:20:47','::1'),
(807,'','LOG-000807','UID-000001','adminzxc','Michael Capistrano','2021-09-24','17:09:45','USER ACCOUNT','adminzxc Update user account <font color=\"blue\">UID-000003</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\"> 1</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">1</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">1</font><br>User Role: <font color=\"red\">2021-09-24</font> To: <font color=\"green\">2021-09-24</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">1</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">1</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">akatskiakatski@yahoo.com</font> To: <font color=\"green\">akatskiakatski@yahoo.com</font><br>User Role: <font color=\"red\">RID-000008</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">1</font><br>Account Type: <font color=\"red\">teacher</font> To: <font color=\"green\">teacher</font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 17:09:45','::1'),
(808,'','LOG-000808','UID-000001','adminzxc','Michael Capistrano','2021-09-24','17:10:11','USER ACCOUNT','adminzxc Update user account <font color=\"blue\">UID-000003</font><br>User Role: <font color=\"red\"> 1</font> To: <font color=\"green\">john michael</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">ramos</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">capistrano</font><br>User Role: <font color=\"red\">2021-09-24</font> To: <font color=\"green\">2021-09-24</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">219318293</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">Tanay, Rizal</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">akatskiakatski@yahoo.com</font> To: <font color=\"green\">akatskiakatski@yahoo.com</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">1</font><br>Account Type: <font color=\"red\">teacher</font> To: <font color=\"green\">teacher</font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 17:10:11','::1'),
(809,'','LOG-000809','UID-000001','adminzxc','Michael Capistrano','2021-09-24','17:12:20','USER ACCOUNT','adminzxc Update user account <font color=\"blue\">UID-000003</font><br>User Role: <font color=\"red\">john michael</font> To: <font color=\"green\"> john michael</font><br>User Role: <font color=\"red\">ramos</font> To: <font color=\"green\">ramos</font><br>User Role: <font color=\"red\">capistrano</font> To: <font color=\"green\">capistrano</font><br>User Role: <font color=\"red\">2021-09-24</font> To: <font color=\"green\">2021-09-24</font><br>User Role: <font color=\"red\">219318293</font> To: <font color=\"green\">219318293</font><br>User Role: <font color=\"red\">Tanay, Rizal</font> To: <font color=\"green\">Tanay, Rizal</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">akatskiakatski@yahoo.com</font> To: <font color=\"green\">akatskiakatski@yahoo.com</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">RID-000010</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">1</font><br>Account Type: <font color=\"red\">teacher</font> To: <font color=\"green\">teacher</font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 17:12:20','::1'),
(810,'','LOG-000810','UID-000001','adminzxc','Michael Capistrano','2021-09-24','17:13:29','USER ACCOUNT','adminzxc Update user account <font color=\"blue\">UID-000003</font><br>User Role: <font color=\"red\"> john michael</font> To: <font color=\"green\">  john michael</font><br>User Role: <font color=\"red\">ramos</font> To: <font color=\"green\">ramos</font><br>User Role: <font color=\"red\">capistrano</font> To: <font color=\"green\">capistrano</font><br>User Role: <font color=\"red\">2021-09-24</font> To: <font color=\"green\">2021-09-24</font><br>User Role: <font color=\"red\">219318293</font> To: <font color=\"green\">219318293</font><br>User Role: <font color=\"red\">Tanay, Rizal</font> To: <font color=\"green\">Tanay, Rizal</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">akatskiakatski@yahoo.com</font> To: <font color=\"green\">akatskiakatski@yahoo.com</font><br>User Role: <font color=\"red\">RID-000010</font> To: <font color=\"green\">RID-000010</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">1</font><br>Account Type: <font color=\"red\">teacher</font> To: <font color=\"green\">teacher</font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 17:13:29','::1'),
(811,'','LOG-000811','UID-000001','adminzxc','Michael Capistrano','2021-09-24','17:14:40','USER ACCOUNT','adminzxc has deleted account userID: UID-000003','Successfully Delete User',NULL,'DELETE','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 17:14:40','::1'),
(812,'','LOG-000812','UID-000001','adminzxc','Michael Capistrano','2021-09-24','17:14:44','USER ACCOUNT','adminzxc has deleted account userID: UID-000003','Successfully Delete User',NULL,'DELETE','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 17:14:44','::1'),
(813,'','LOG-000813','UID-000001','adminzxc','Michael Capistrano','2021-09-24','17:33:05','USER ACCOUNT','adminzxc Update user account <font color=\"blue\">UID-000004</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">john michael</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">r</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">capistrano</font><br>User Role: <font color=\"red\">2021-09-24</font> To: <font color=\"green\">2021-09-24</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">121312312</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">13123213213</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">akatskiakats2ki@yahoo.com</font> To: <font color=\"green\">akatskiakats2ki@yahoo.com</font><br>User Role: <font color=\"red\">RID-000008</font> To: <font color=\"green\">RID-000008</font><br>User Role: <font color=\"red\">1</font> To: <font color=\"green\">1123213213123</font><br>Account Type: <font color=\"red\">teacher</font> To: <font color=\"green\">teacher</font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 17:33:05','::1'),
(814,'','LOG-000814','UID-000001','adminzxc','Michael Capistrano','2021-09-24','17:34:20','USER ROLE','adminzxc has insert role test','Sucessfully Added RID-000011',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 17:34:20','::1'),
(815,'','LOG-000815','UID-000001','adminzxc','Michael Capistrano','2021-09-24','18:12:10','USER ROLE','adminzxc has Update From admin to admin','Sucessfully UPDATE RID-000001',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 18:12:10','::1'),
(816,'','LOG-000816','UID-000001','johnmichaelcapistrano092032@gmail.com','Michael Capistrano','2021-09-24','18:50:24','USER ACCOUNT','johnmichaelcapistrano092032@gmail.com Update user account <font color=\"blue\">UID-000001</font><br>User Role: <font color=\"red\">Michael</font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\">Rsaaa</font> To: <font color=\"green\">Rsaaa</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">2021-09-14</font> To: <font color=\"green\">2021-09-14</font><br>User Role: <font color=\"red\">111111111</font> To: <font color=\"green\">111111111</font><br>User Role: <font color=\"red\">tanasy</font> To: <font color=\"green\">tanasy</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">johnmichaelcapistrano092032@gmail.com</font> To: <font color=\"green\">johnmichaelcapistrano092032@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12345678</font> To: <font color=\"green\">12345678</font><br>Account Type: <font color=\"red\">admin</font> To: <font color=\"green\">student</font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 18:50:24','::1'),
(817,'','LOG-000817','UID-000001','johnmichaelcapistrano092032@gmail.com','Michael Capistrano','2021-09-24','18:57:03','USER ACCOUNT','johnmichaelcapistrano092032@gmail.com has deleted account userID: UID-000002','Successfully Delete User',NULL,'DELETE','Browser: <font color=\"green\">Google Chrome 93.0.4577.82</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36</font><br> IP Address: ::1','2021-09-24 18:57:03','::1');

/*Table structure for table `tbl_user_role` */

DROP TABLE IF EXISTS `tbl_user_role`;

CREATE TABLE `tbl_user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` varchar(30) NOT NULL,
  `role_name` varchar(30) NOT NULL,
  `viewdashboard` tinyint(1) DEFAULT 0,
  `dashboard_total_student` tinyint(1) DEFAULT 0,
  `dashboard_total_teacher` tinyint(1) DEFAULT 0,
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_user_role` */

insert  into `tbl_user_role`(`id`,`role_id`,`role_name`,`viewdashboard`,`dashboard_total_student`,`dashboard_total_teacher`,`dashboard_announcement`,`dashboard_add_announcement`,`dashboard_update_announcement`,`viewadminaccess`,`auditlog`,`account`,`addnewUser`,`deleteUser`,`user_role`,`addnewRole`,`editRole`,`viewPermissionRole`,`status`,`datecreated`) values 
(7,'RID-000001','admin',1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,NULL),
(9,'RID-000008','Student',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'2021-09-24 12:08:58'),
(10,'RID-000010','Teacher',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'2021-09-24 12:09:17'),
(11,'RID-000011','test',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'2021-09-24 17:34:20');

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` varchar(30) NOT NULL,
  `email` varchar(150) DEFAULT '',
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
  `yearlevel` tinyint(1) DEFAULT NULL,
  `account_type` varchar(30) DEFAULT '' COMMENT 'origin or valuation',
  `accountno` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`,`userID`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`userID`,`email`,`password`,`fname`,`mname`,`lname`,`contact`,`birthdate`,`address`,`user_role`,`user_avatar`,`datecreated`,`lost_login`,`status`,`yearlevel`,`account_type`,`accountno`) values 
(1,'UID-000001','johnmichaelcapistrano092032@gmail.com','$2y$10$Osq9KaL/amL9HHfgvcSBXu4R2eaod9e7XFYQoVFKb1/qCrmI9Hi7i','Michael','Rsaaa','Capistrano','111111111','2021-09-14','tanasy','RID-000001','576990675614da3daa55ed.jpg','2021-09-24','2021-09-24 10:42:44',1,4,'student','12345678'),
(2,'UID-000002','','','1','1','1','1','2021-09-24','1','RID-000008','default_profile.png',NULL,'2021-09-24 15:08:04',0,1,'teacher','1'),
(3,'UID-000003','akatskiakatski@yahoo.com','','  john michael','ramos','capistrano','219318293','2021-09-24','Tanay, Rizal','RID-000010','default_profile.png',NULL,'2021-09-24 15:08:37',0,4,'teacher','1'),
(4,'UID-000004','akatskiakats2ki@yahoo.com','$2y$10$6IEr5RtuvJNGWsICp9xrBuOHgBF2Td8bMfhrP24FlyFCLzzZVTJvC','john michael','r','capistrano','121312312','2021-09-24','13123213213','RID-000008','default_profile.png',NULL,'2021-09-24 15:11:27',1,1,'teacher','1123213213123'),
(5,'UID-000005','akatskiakats2ki@yahoo.com','$2y$10$.7bepFFtSP2SDSVWRqfy..p/j3wA25Ak1i.XPTsNvHIA.1V.DsPvG','1','1','1','1','2021-09-24','1','RID-000008','default_profile.png',NULL,'2021-09-24 15:14:20',1,1,'teacher','1'),
(6,'UID-000006','akatskiakats2ki@yahoo.com','$2y$10$.sOv/ZcWDvOi4TpF1ulyxeBsMnVox7lPPoGCMkN4smqxcqmtr7HZq','1','1','1','1','2021-09-24','1','RID-000008','default_profile.png',NULL,'2021-09-24 15:14:22',1,1,'teacher','1'),
(7,'UID-000007','akatskiakats2ki@yahoo.com','$2y$10$3cARLJGRDsqEoFcgqqzg.uJsptYyAD3LBdWQsjYmtXVuSXi8.YocC','1','1','1','1','2021-09-24','1','RID-000008','default_profile.png',NULL,'2021-09-24 15:14:49',1,1,'teacher','112312321'),
(8,'UID-000008','akatskiakats2ki@yahoo.com','$2y$10$bjO.Vl1I1wNvDHEizUGfueilcYxoq8jckyv2UiDK.eLInmsiTwAZG','1','1','1','1','2021-09-24','1','RID-000008','default_profile.png',NULL,'2021-09-24 15:14:51',1,1,'teacher','112312321'),
(9,'UID-000009','akatskiakatski@yahoo.com','$2y$10$8XIqoQEymzY0wT./XfCgYeXJJ9BxnYq6pSDX28tcqmV3nFYg5ZjZW','213q','12321','312312','312321','2021-09-24','321321','RID-000001','default_profile.png',NULL,'2021-09-24 15:16:01',1,1,'teacher','12321321'),
(10,'UID-000010','akatskiakatski@yahoo.com','$2y$10$HTlsmmpyOKQ2jK7trZKi/eIlRbm2WhT/nlabeHA6/K8ZiTn88htuO','3123','12312','3123','123213','2021-09-24','123213','RID-000008','default_profile.png',NULL,'2021-09-24 15:20:47',1,2,'teacher','123123123123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
