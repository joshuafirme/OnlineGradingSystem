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

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `DEPT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DEPARTMENT_NAME` varchar(30) NOT NULL,
  `DEPARTMENT_DESC` varchar(50) NOT NULL,
  `STATUS` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`DEPT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`DEPT_ID`,`DEPARTMENT_NAME`,`DEPARTMENT_DESC`,`STATUS`) values 
(4,'COE','College of Education',1),
(5,'QWEQWEQW','213V12V32',0),
(6,'QWEQWEQWZXCZXC','213V12V32ZXCZXC',0),
(7,'COENG','College of Engineering',1),
(8,'COS','College Science',1),
(9,'COAF','College of Agriculture and Forestry',1),
(10,'HRM','Human Recourses Management ',1);

/*Table structure for table `level` */

DROP TABLE IF EXISTS `level`;

CREATE TABLE `level` (
  `YR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LEVEL` varchar(30) NOT NULL DEFAULT '',
  `LEVEL_DESCRIPTION` varchar(255) NOT NULL DEFAULT '',
  `STATUS` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`YR_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `level` */

insert  into `level`(`YR_ID`,`LEVEL`,`LEVEL_DESCRIPTION`,`STATUS`) values 
(1,'Grade 11','First year SHS',1),
(2,'Grade 12','2nd year SHS',1),
(3,'Grade 13','1st year College',0),
(4,'Grade 14','2nd year College',0);

/*Table structure for table `room` */

DROP TABLE IF EXISTS `room`;

CREATE TABLE `room` (
  `ROOM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ROOM_NAME` varchar(30) NOT NULL,
  `ROOM_DESC` varchar(30) NOT NULL,
  `STATUS` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`ROOM_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `room` */

insert  into `room`(`ROOM_ID`,`ROOM_NAME`,`ROOM_DESC`,`STATUS`) values 
(5,'qweqweZXCZXCZXCXZ','qweqwewXZZXCZXC',0),
(6,'112','ABCOM - 112',1),
(7,'Room 212','BSIT Section -311 ',1),
(8,'Room 411','Computer Laboratory',1),
(9,'Room 303','Library ',1),
(10,'Room 202','Science Laboratory ',1);

/*Table structure for table `subject` */

DROP TABLE IF EXISTS `subject`;

CREATE TABLE `subject` (
  `SUBJ_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SUBJ_CODE` varchar(30) NOT NULL,
  `SUBJ_DESCRIPTION` varchar(255) NOT NULL,
  `UNIT` int(2) NOT NULL,
  `PRE_REQUISITE` varchar(30) NOT NULL DEFAULT 'None',
  `COURSE_ID` int(11) NOT NULL,
  `AY` varchar(30) NOT NULL,
  `SEMESTER` varchar(20) NOT NULL,
  `YEARLEVEL` varchar(30) DEFAULT NULL,
  `STATUS` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`SUBJ_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=482 DEFAULT CHARSET=latin1;

/*Data for the table `subject` */

insert  into `subject`(`SUBJ_ID`,`SUBJ_CODE`,`SUBJ_DESCRIPTION`,`UNIT`,`PRE_REQUISITE`,`COURSE_ID`,`AY`,`SEMESTER`,`YEARLEVEL`,`STATUS`) values 
(478,'ENG','LEARN TO SPEAK',32,'None',0,'2020-2021','','2',1),
(479,'ALGEBRA','BORN TO BE GENIUS',5,'None',0,'2020-2021','','2',1),
(480,'BIOLOGY','THE STUDY OF SCIENCE',5,'None',0,'2020-2021','','1',1),
(481,'MATH','THE JOURNEY OF MATH',3,'None',0,'2020-2021','','1',1);

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

/*Table structure for table `tbl_award` */

DROP TABLE IF EXISTS `tbl_award`;

CREATE TABLE `tbl_award` (
  `AWARD_ID` int(11) unsigned NOT NULL,
  `AWARD` varchar(30) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`AWARD_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_award` */

insert  into `tbl_award`(`AWARD_ID`,`AWARD`,`description`,`status`) values 
(0,'GENIUS OF MATH','BEST IN MATH this julyzxc',1);

/*Table structure for table `tbl_days` */

DROP TABLE IF EXISTS `tbl_days`;

CREATE TABLE `tbl_days` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `days` varchar(30) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_days` */

insert  into `tbl_days`(`id`,`days`,`status`,`description`) values 
(7,'MWF',1,'Monday , Wednesday, Friday'),
(8,'Monday',1,'Monday'),
(10,'wqeqwe',1,'qweqwe');

/*Table structure for table `tbl_erecords` */

DROP TABLE IF EXISTS `tbl_erecords`;

CREATE TABLE `tbl_erecords` (
  `ENROLLED_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SEMESTER` varchar(30) DEFAULT NULL,
  `DEPT_ID` varchar(30) DEFAULT NULL,
  `USERID` varchar(30) DEFAULT NULL,
  `DATE_ENROLLED` varchar(30) DEFAULT NULL,
  `YR_ID` varchar(30) DEFAULT NULL,
  `AC_YR` varchar(30) DEFAULT NULL,
  `AWARD` varchar(30) DEFAULT NULL,
  `STATUS` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ENROLLED_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_erecords` */

insert  into `tbl_erecords`(`ENROLLED_ID`,`SEMESTER`,`DEPT_ID`,`USERID`,`DATE_ENROLLED`,`YR_ID`,`AC_YR`,`AWARD`,`STATUS`) values 
(7,'First','7','UID-000002','2021-12-08 02:23:01','2','2020-2021',NULL,1),
(8,'First','4','UID-000003','2021-12-08 02:31:17','1','2020-2021',NULL,1),
(9,'Second','4','UID-000002','2021-12-08 02:32:03','1','2021-2022',NULL,1);

/*Table structure for table `tbl_instructor` */

DROP TABLE IF EXISTS `tbl_instructor`;

CREATE TABLE `tbl_instructor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(30) DEFAULT NULL,
  `specialization` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_instructor` */

insert  into `tbl_instructor`(`id`,`userId`,`specialization`,`status`) values 
(1,'UID-000012','English Teacher',1),
(2,'UID-000010','English',1),
(3,'UID-000001','English Teacher',1);

/*Table structure for table `tbl_loads` */

DROP TABLE IF EXISTS `tbl_loads`;

CREATE TABLE `tbl_loads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SUBJ_ID` int(11) DEFAULT NULL,
  `userID` varchar(30) DEFAULT NULL,
  `days` varchar(30) DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL,
  `room` varchar(30) DEFAULT NULL,
  `section` varchar(30) DEFAULT NULL,
  `yearlevel` varchar(30) DEFAULT NULL,
  `academicyear` varchar(30) DEFAULT NULL,
  `semester` varchar(30) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `request` varchar(30) DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_loads` */

insert  into `tbl_loads`(`id`,`SUBJ_ID`,`userID`,`days`,`time`,`room`,`section`,`yearlevel`,`academicyear`,`semester`,`status`,`request`,`remarks`) values 
(1,478,'UID-000001','MWF','10:30-11:30 AM','6','BSIT 311','2','2020-2021',NULL,1,'DECLINED','Declined'),
(2,479,'UID-000010','TTH','4:30-5:30 PM','9','BSIT 213','3','2020-2021',NULL,1,'',''),
(3,478,'UID-000012','MWF','8:30-9:30 AM','6','BSIT 411','4','2020-2021',NULL,1,'',''),
(4,479,'UID-000012','MWF','12:30-1:30 PM','10','BSIT 111','3','2020-2021',NULL,1,'',''),
(5,480,'UID-000012','TTH','4:30-5:30 PM','10','BSIT 211','1','2020-2021',NULL,1,'',''),
(6,481,'UID-000012','S','11:30-12:30 PM','9','BSIT 212','1','2020-2021',NULL,1,'',''),
(7,481,'UID-000010','TTH','9:30-10:30 AM','8','BSIT 311','1','2020-2021',NULL,1,'',''),
(8,479,'UID-000001','Monday','8:30-9:30 AM','10','BSIT 311','2','2020-2021',NULL,1,NULL,NULL),
(9,480,'UID-000001','MWF','10:30-11:30 AM','8','411','1','2020-2021',NULL,1,NULL,NULL),
(10,481,'UID-000001','Monday','4:30-5:30 PM','8','BSIT 211','1','2020-2021',NULL,1,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_logs` */

insert  into `tbl_logs`(`id`,`mainID`,`logID`,`userid`,`email`,`name`,`date`,`time`,`module`,`remarks`,`info`,`attach`,`action`,`browser`,`datejim`,`ipaddress`) values 
(1,'','LOG-000001','UID-000001','','Michael Capistrano','2021-11-27','20:53:42','LOGIN',' 09832110 has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-11-27 20:53:42','::1'),
(2,'','LOG-000002','UID-000001','','Michael Capistrano','2021-12-05','14:44:28','LOGIN',' 09832110 has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-12-05 14:44:28','::1'),
(3,'','LOG-000003','UID-000001','admin@gmail.com','Michael Capistrano','2021-12-05','16:31:25','Room','admin@gmail.com Room: <font color=\"red\">Room 112</font> To: <font color=\"green\">Room 112</font><br>Room: <font color=\"red\">ABCOM - 112</font> To: <font color=\"green\">ABCOM - 112</font><br>','Successfully Update Room',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-12-05 16:31:25','::1'),
(4,'','LOG-000004','UID-000001','','Michael Capistrano','2021-12-05','21:01:44','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-12-05 21:01:44','::1'),
(5,'','LOG-000005','','',' ','2021-12-05','21:01:49','LOGIN',' admin@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-12-05 21:01:49','::1'),
(6,'','LOG-000006','UID-000001','','Michael Capistrano','2021-12-05','21:01:51','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-12-05 21:01:51','::1'),
(7,'','LOG-000007','UID-000001','','Michael Capistrano','2021-12-06','02:22:57','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-12-06 02:22:57','::1'),
(8,'','LOG-000008','UID-000001','','Michael Capistrano','2021-12-07','13:55:01','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-12-07 13:55:01','::1'),
(9,'','LOG-000009','UID-000001','admin@gmail.com','Michael Capistrano','2021-12-07','17:13:13','Grade Level','admin@gmail.com has deleted account YR ID: ','Successfully Delete Grade Level',NULL,'DELETE','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-12-07 17:13:13','::1'),
(10,'','LOG-000010','UID-000001','admin@gmail.com','Michael Capistrano','2021-12-07','17:13:16','Grade Level','admin@gmail.com has deleted account YR ID: ','Successfully Delete Grade Level',NULL,'DELETE','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-12-07 17:13:16','::1'),
(11,'','LOG-000011','UID-000001','admin@gmail.com','Michael Capistrano','2021-12-07','17:30:00','Room','admin@gmail.com Room: <font color=\"red\">Room 112</font> To: <font color=\"green\">112</font><br>Room: <font color=\"red\">ABCOM - 112</font> To: <font color=\"green\">ABCOM - 112</font><br>','Successfully Update Room',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-12-07 17:30:00','::1'),
(12,'','LOG-000012','UID-000001','admin@gmail.com','Michael Capistrano','2021-12-07','18:19:47','Subject','admin@gmail.com Grade Level: <font color=\"red\"></font> To: <font color=\"green\">ALGEBRA</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">BORN TO BE GENIUS</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">5</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-12-07 18:19:47','::1'),
(13,'','LOG-000013','UID-000001','admin@gmail.com','Michael Capistrano','2021-12-07','18:20:19','Subject','admin@gmail.com Grade Level: <font color=\"red\"></font> To: <font color=\"green\">ALGEBRA</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">BORN TO BE GENIUS</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">5</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-12-07 18:20:19','::1'),
(14,'','LOG-000014','UID-000001','admin@gmail.com','Michael Capistrano','2021-12-07','18:20:33','Subject','admin@gmail.com Grade Level: <font color=\"red\"></font> To: <font color=\"green\">ENG</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">LEARN TO SPEAK</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">32</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-12-07 18:20:33','::1'),
(15,'','LOG-000015','UID-000001','','Michael Capistrano','2021-12-07','18:35:59','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-12-07 18:35:59','::1'),
(16,'','LOG-000016','UID-000001','','Michael Capistrano','2021-12-08','00:34:40','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-12-08 00:34:40','::1'),
(17,'','LOG-000017','UID-000001','admin@gmail.com','Michael Capistrano','2021-12-08','01:10:11','USER ACCOUNT','admin@gmail.com has created account:UID-000013, Type:, Role:RID-000011','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 96.0.4664.45</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36</font><br> IP Address: ::1','2021-12-08 01:10:11','::1');

/*Table structure for table `tbl_studload` */

DROP TABLE IF EXISTS `tbl_studload`;

CREATE TABLE `tbl_studload` (
  `ST_SUBJID` int(11) NOT NULL AUTO_INCREMENT,
  `ENROLLED_ID` varchar(30) DEFAULT NULL,
  `SUBJ_ID` varchar(30) DEFAULT NULL,
  `INSTRUCTOR_ID` varchar(30) DEFAULT NULL,
  `USERID` varchar(30) DEFAULT NULL,
  `room` varchar(1) DEFAULT NULL,
  `section` varchar(30) DEFAULT NULL,
  `yearlevel` varchar(30) DEFAULT NULL,
  `academicyear` varchar(30) DEFAULT NULL,
  `days` varchar(30) DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL,
  `fquiz` int(3) DEFAULT NULL,
  `squiz` int(3) DEFAULT NULL,
  `thrdquiz` int(3) DEFAULT NULL,
  `fthquiz` int(3) DEFAULT NULL,
  `fperformance` int(3) DEFAULT NULL,
  `sperformance` int(3) DEFAULT NULL,
  `thrdperformance` int(3) DEFAULT NULL,
  `fthperformance` int(3) DEFAULT NULL,
  `fhomework` int(3) DEFAULT NULL,
  `shomework` int(3) DEFAULT NULL,
  `thrdhomework` int(3) DEFAULT NULL,
  `fthhomework` int(3) DEFAULT NULL,
  `fexam` int(3) DEFAULT NULL,
  `sexam` int(3) DEFAULT NULL,
  `thrdexam` int(3) DEFAULT NULL,
  `fthexam` int(3) DEFAULT NULL,
  `1G` tinyint(3) DEFAULT NULL,
  `2G` tinyint(3) DEFAULT NULL,
  `3G` tinyint(3) DEFAULT NULL,
  `4G` tinyint(3) DEFAULT NULL,
  `FG` tinyint(3) DEFAULT NULL,
  `datecreated` date DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `request` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ST_SUBJID`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_studload` */

insert  into `tbl_studload`(`ST_SUBJID`,`ENROLLED_ID`,`SUBJ_ID`,`INSTRUCTOR_ID`,`USERID`,`room`,`section`,`yearlevel`,`academicyear`,`days`,`time`,`fquiz`,`squiz`,`thrdquiz`,`fthquiz`,`fperformance`,`sperformance`,`thrdperformance`,`fthperformance`,`fhomework`,`shomework`,`thrdhomework`,`fthhomework`,`fexam`,`sexam`,`thrdexam`,`fthexam`,`1G`,`2G`,`3G`,`4G`,`FG`,`datecreated`,`remarks`,`status`,`request`) values 
(32,'7','478','UID-000001','UID-000002','6','BSIT 311','4','2020-2021','MWF','10:30-11:30 AM',95,90,50,95,100,100,50,90,90,90,50,90,90,90,90,90,94,93,60,91,85,'2021-12-08',NULL,1,NULL),
(33,'7','479','UID-000010','UID-000002','9','BSIT 213','3','2020-2021','TTH','4:30-5:30 PM',90,88,80,81,80,77,90,82,80,66,90,91,77,88,90,88,82,80,88,86,85,'2021-12-08',NULL,1,NULL),
(34,'8','478','UID-000001','UID-000003','6','BSIT 311','4','2020-2021','MWF','10:30-11:30 AM',70,77,50,80,78,75,96,80,70,74,90,80,90,75,90,80,77,75,82,80,79,'2021-12-08',NULL,1,NULL),
(35,'8','479','UID-000010','UID-000003','9','BSIT 213','3','2020-2021','TTH','4:30-5:30 PM',74,90,78,71,77,88,78,55,77,88,71,80,78,88,74,55,77,89,75,65,85,'2021-12-08',NULL,1,NULL),
(36,'7','481','UID-000010','UID-000002','8','BSIT 311','1','2020-2021','TTH','9:30-10:30 AM',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,85,'2021-12-08',NULL,1,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_user_role` */

insert  into `tbl_user_role`(`id`,`role_id`,`role_name`,`viewdashboard`,`dashboard_total_student`,`dashboard_total_teacher`,`dashboard_announcement`,`dashboard_add_announcement`,`dashboard_update_announcement`,`viewadminaccess`,`auditlog`,`account`,`addnewUser`,`deleteUser`,`user_role`,`addnewRole`,`editRole`,`viewPermissionRole`,`status`,`datecreated`) values 
(7,'RID-000001','admin',1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,NULL),
(9,'RID-000008','Student',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'2021-09-24 12:08:58'),
(10,'RID-000010','Teacherzxc',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'2021-09-24 12:09:17'),
(11,'RID-000011','test',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'2021-09-24 17:34:20'),
(12,'RID-000012','MARIA',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,'2021-10-01 10:58:30');

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
  `civilstatus` varchar(30) DEFAULT NULL,
  `employmentStatus` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`,`userID`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`userID`,`email`,`password`,`fname`,`mname`,`lname`,`contact`,`birthdate`,`address`,`user_role`,`user_avatar`,`datecreated`,`lost_login`,`status`,`yearlevel`,`account_type`,`accountno`,`civilstatus`,`employmentStatus`,`gender`) values 
(1,'UID-000001','','$2y$10$VLgY7so92FJxCEYGVklcdeb7oI7KFgsUcHB4d.AdYu3YBqundkhNy','Michael','C','Capistrano','09669142294','1994-09-14','tanasy','','127063728161a09d08115c6.jpg','2021-09-24','2021-09-24 10:42:44',1,0,'','','Single','Regular','M'),
(2,'UID-000002','johnmichaelcapist','$2y$10$Osq9KaL/amL9HHfgvcSBXu4R2eaod9e7XFYQoVFKb1/qCrmI9Hi7i','RYZA','Q','AKAZA','09669142294','1999-09-14','1','RID-000008','default_profile.png',NULL,'2021-09-24 15:08:04',0,1,'student','09832111','Single',NULL,'M'),
(3,'UID-000003','1@yahoo.com','$2y$10$Osq9KaL/amL9HHfgvcSBXu4R2eaod9e7XFYQoVFKb1/qCrmI9Hi7i','DANE','A','BEEL','09669142294','1999-09-14','Tanay, Rizal','RID-000010','default_profile.png',NULL,'2021-09-24 15:08:37',0,4,'student','09832112','Single',NULL,'M'),
(4,'UID-000004','2@yahoo.com','$2y$10$6IEr5RtuvJNGWsICp9xrBuOHgBF2Td8bMfhrP24FlyFCLzzZVTJvC','DONDEE','B','Sangunian','09669142294','1999-09-14','13123213213','RID-000008','default_profile.png',NULL,'2021-09-24 15:11:27',1,1,'student','09832113','Single',NULL,'F'),
(5,'UID-000005','3@yahoo.com','$2y$10$.7bepFFtSP2SDSVWRqfy..p/j3wA25Ak1i.XPTsNvHIA.1V.DsPvG','Maria','Y','Lariosa','09669142294','1999-09-14','1','RID-000008','default_profile.png',NULL,'2021-09-24 15:14:20',1,1,'student','09832114','Single',NULL,'F'),
(6,'UID-000006','4@yahoo.com','$2y$10$.sOv/ZcWDvOi4TpF1ulyxeBsMnVox7lPPoGCMkN4smqxcqmtr7HZq','Doe','S','Devorah','09669142294','2000-06-14','1','RID-000008','default_profile.png',NULL,'2021-09-24 15:14:22',1,1,'student','09832115','Single',NULL,'F'),
(7,'UID-000007','5@yahoo.com','$2y$10$3cARLJGRDsqEoFcgqqzg.uJsptYyAD3LBdWQsjYmtXVuSXi8.YocC','Felipe','C','Quezon','09669142294','2000-06-14','1','RID-000008','default_profile.png',NULL,'2021-09-24 15:14:49',1,1,'student','09832116','Single',NULL,'F'),
(8,'UID-000008','6@yahoo.com','$2y$10$bjO.Vl1I1wNvDHEizUGfueilcYxoq8jckyv2UiDK.eLInmsiTwAZG','Jose','L','Rizal','09669142294','2000-06-14','1','RID-000008','default_profile.png',NULL,'2021-09-24 15:14:51',1,1,'student','09832117','Single',NULL,'F'),
(9,'UID-000009','7@yahoo.com','$2y$10$8XIqoQEymzY0wT./XfCgYeXJJ9BxnYq6pSDX28tcqmV3nFYg5ZjZW','JP','J','Mercado','09669142294','2000-06-14','321321','RID-000001','default_profile.png',NULL,'2021-09-24 15:16:01',1,1,'student','09832118','Single',NULL,'F'),
(10,'UID-000010','8@yahoo.com','$2y$10$HTlsmmpyOKQ2jK7trZKi/eIlRbm2WhT/nlabeHA6/K8ZiTn88htuO','Maria Llane','Diosa','Test','09669142294','2000-06-14','123213','RID-000008','default_profile.png',NULL,'2021-09-24 15:20:47',1,2,'teacher','09832119','Single','Regular','F'),
(11,'UID-000011','9@yahoo.com','$2y$10$zSFksGapjz1A5Dei67sci.iO.I5OZ8UqDmkIAQsqY1W5lOx/Qmoje','jimwell','mandanas','inchan','09669142294','2000-06-14','12312321','RID-000008','default_profile.png',NULL,'2021-10-01 10:34:06',1,1,'student','09832120','Single',NULL,'F'),
(12,'UID-000012','johnmichaelcapistrano092032@gmail.com','$2y$10$O51XGKN34Zzwjd/PfZwaZO.gt0OcOvV5WMm4myrthpTbBp.1IFTLS','Test','R','Capistrano','09669142294','1999-02-02','Tanay, Rizal','RID-000008','default_profile.png',NULL,'2021-10-25 05:07:45',1,4,'teacher','09832121','Single','Regular','M'),
(13,'UID-000013','johnmichaelcapistrano092032@gmail.com','$2y$10$CCktZ4It52tv1sxx6hVQhOpV3LZ5IYuLKEN2jcw/Nh5ri4M9kdpp6','JOHN MICHAEL','R','CAPISTRANO','','2021-12-08','TANAY, RIZAL','RID-000011','default_profile.png',NULL,'2021-12-08 01:10:11',1,0,'','123123123',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
