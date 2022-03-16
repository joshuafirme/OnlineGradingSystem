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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`DEPT_ID`,`DEPARTMENT_NAME`,`DEPARTMENT_DESC`,`STATUS`) values 
(4,'COE','College of Education',1),
(5,'QWEQWEQW','213V12V32',0),
(6,'QWEQWEQWZXCZXC','213V12V32ZXCZXC',0),
(7,'COENG','College of Engineering',1),
(8,'COS','College Science',1),
(9,'COAF','College of Agriculture and Forestry',1),
(10,'HRM','Human Recourses Management ',1),
(11,'COAF','qweqw',0);

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
(5,'qweqweZXCZXCZXCXZ','qweqwewXZZXCZXC',1),
(6,'Room 201','ABCOM - 112',1),
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
) ENGINE=InnoDB AUTO_INCREMENT=486 DEFAULT CHARSET=latin1;

/*Data for the table `subject` */

insert  into `subject`(`SUBJ_ID`,`SUBJ_CODE`,`SUBJ_DESCRIPTION`,`UNIT`,`PRE_REQUISITE`,`COURSE_ID`,`AY`,`SEMESTER`,`YEARLEVEL`,`STATUS`) values 
(478,'FILIPINO','STORY OF JOSE RIZAL',3,'None',0,'2021-2022','','1',1),
(479,'MATHEMATICS','LEARN THE BASIC PRINCIPLES OF MATH',3,'None',0,'2021-2022','','1',1),
(480,'ENGLISH','Adverbs. Adverbs modify adjectives, verbs, or other adverbs',3,'None',0,'2021-2022','','1',1),
(481,'SCIENCE','STUDY OF HUMAN BEHAVIOR ',3,'None',0,'2021-2022','','1',1),
(482,'MAPEH','Music, Art, Physical Education ',3,'None',0,'2021-2022','','2',1),
(483,'BIOLOGY','LIVING THINGS ORGANISM',3,'None',0,'2021-2022','','2',1),
(484,'WEBPROG','INTRODUCTION OF HTML, PHP,CSS',3,'None',0,'2021-2022','','2',1),
(485,'JAVA','INTRODUCTION OF JAVA',3,'None',0,'2021-2022','','2',1);

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
(10,'TTH / SAT',1,'Thursday and Saturday');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_erecords` */

insert  into `tbl_erecords`(`ENROLLED_ID`,`SEMESTER`,`DEPT_ID`,`USERID`,`DATE_ENROLLED`,`YR_ID`,`AC_YR`,`AWARD`,`STATUS`) values 
(1,'First','4','ACCOUNTNO-000002','2022-01-08 10:08:33','1','2020-2021',NULL,1),
(2,'First','4','ACCOUNTNO-000023','2022-01-08 14:27:09','1','2020-2021',NULL,1),
(4,'Second','4','ACCOUNTNO-000002','2022-01-10 16:26:21','1','2020-2021',NULL,1),
(5,'Second','4','ACCOUNTNO-000009','2022-02-17 15:48:18','1','2020-2021',NULL,1),
(6,'Second','4','ACCOUNTNO-000009','2022-02-17 16:01:40','1','2020-2021',NULL,1);

/*Table structure for table `tbl_highestpossible_score` */

DROP TABLE IF EXISTS `tbl_highestpossible_score`;

CREATE TABLE `tbl_highestpossible_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SUBJ_ID` varchar(30) DEFAULT NULL,
  `INSTRUCTOR_ID` varchar(30) DEFAULT NULL,
  `yearlevel` varchar(50) DEFAULT NULL,
  `academicyear` varchar(50) DEFAULT NULL,
  `section` varchar(50) DEFAULT NULL,
  `written_works_1` int(6) DEFAULT 0,
  `written_works_2` int(6) DEFAULT 0,
  `written_works_3` int(6) DEFAULT 0,
  `written_works_4` int(6) DEFAULT 0,
  `written_works_5` int(6) DEFAULT 0,
  `written_works_6` int(6) DEFAULT 0,
  `written_works_7` int(6) DEFAULT 0,
  `written_works_8` int(6) DEFAULT 0,
  `written_works_9` int(6) DEFAULT 0,
  `written_works_10` int(6) DEFAULT 0,
  `written_works_total` int(6) DEFAULT 0,
  `written_works_ps` int(6) DEFAULT 0,
  `written_works_ws` int(6) DEFAULT 0,
  `performance_task_1` int(6) DEFAULT 0,
  `performance_task_2` int(6) DEFAULT 0,
  `performance_task_3` int(6) DEFAULT 0,
  `performance_task_4` int(6) DEFAULT 0,
  `performance_task_5` int(6) DEFAULT 0,
  `performance_task_6` int(6) DEFAULT 0,
  `performance_task_7` int(6) DEFAULT 0,
  `performance_task_8` int(6) DEFAULT 0,
  `performance_task_9` int(6) DEFAULT 0,
  `performance_task_10` int(6) DEFAULT 0,
  `performance_task_total` int(6) DEFAULT 0,
  `performance_task_ps` int(6) DEFAULT 100,
  `performance_task_ws` int(6) DEFAULT 0,
  `quarterly_task_1` int(6) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_highestpossible_score` */

insert  into `tbl_highestpossible_score`(`id`,`SUBJ_ID`,`INSTRUCTOR_ID`,`yearlevel`,`academicyear`,`section`,`written_works_1`,`written_works_2`,`written_works_3`,`written_works_4`,`written_works_5`,`written_works_6`,`written_works_7`,`written_works_8`,`written_works_9`,`written_works_10`,`written_works_total`,`written_works_ps`,`written_works_ws`,`performance_task_1`,`performance_task_2`,`performance_task_3`,`performance_task_4`,`performance_task_5`,`performance_task_6`,`performance_task_7`,`performance_task_8`,`performance_task_9`,`performance_task_10`,`performance_task_total`,`performance_task_ps`,`performance_task_ws`,`quarterly_task_1`) values 
(1,'478','ACCOUNTNO-000003','1','2020-2021','BSIT 211',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0),
(2,'481','ACCOUNTNO-000004','1','2020-2021','BSIT 223',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0),
(3,'482','ACCOUNTNO-000006','2','2020-2021','BSIT 211',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0),
(4,'479','ACCOUNTNO-000007','1','2020-2021','BSIT 211',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0);

/*Table structure for table `tbl_highestpossible_score_2` */

DROP TABLE IF EXISTS `tbl_highestpossible_score_2`;

CREATE TABLE `tbl_highestpossible_score_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SUBJ_ID` varchar(30) DEFAULT NULL,
  `INSTRUCTOR_ID` varchar(30) DEFAULT NULL,
  `yearlevel` varchar(50) DEFAULT NULL,
  `academicyear` varchar(50) DEFAULT NULL,
  `section` varchar(50) DEFAULT NULL,
  `written_works_1` int(6) DEFAULT 0,
  `written_works_2` int(6) DEFAULT 0,
  `written_works_3` int(6) DEFAULT 0,
  `written_works_4` int(6) DEFAULT 0,
  `written_works_5` int(6) DEFAULT 0,
  `written_works_6` int(6) DEFAULT 0,
  `written_works_7` int(6) DEFAULT 0,
  `written_works_8` int(6) DEFAULT 0,
  `written_works_9` int(6) DEFAULT 0,
  `written_works_10` int(6) DEFAULT 0,
  `written_works_total` int(11) DEFAULT 0,
  `written_works_ps` int(6) DEFAULT 100,
  `written_works_ws` int(6) DEFAULT 0,
  `performance_task_1` int(6) DEFAULT 0,
  `performance_task_2` int(6) DEFAULT 0,
  `performance_task_3` int(6) DEFAULT 0,
  `performance_task_4` int(6) DEFAULT 0,
  `performance_task_5` int(6) DEFAULT 0,
  `performance_task_6` int(6) DEFAULT 0,
  `performance_task_7` int(6) DEFAULT 0,
  `performance_task_8` int(6) DEFAULT 0,
  `performance_task_9` int(6) DEFAULT 0,
  `performance_task_10` int(6) DEFAULT 0,
  `performance_task_total` int(6) DEFAULT 0,
  `performance_task_ps` int(6) DEFAULT 100,
  `performance_task_ws` int(6) DEFAULT 0,
  `quarterly_task_1` int(6) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_highestpossible_score_2` */

insert  into `tbl_highestpossible_score_2`(`id`,`SUBJ_ID`,`INSTRUCTOR_ID`,`yearlevel`,`academicyear`,`section`,`written_works_1`,`written_works_2`,`written_works_3`,`written_works_4`,`written_works_5`,`written_works_6`,`written_works_7`,`written_works_8`,`written_works_9`,`written_works_10`,`written_works_total`,`written_works_ps`,`written_works_ws`,`performance_task_1`,`performance_task_2`,`performance_task_3`,`performance_task_4`,`performance_task_5`,`performance_task_6`,`performance_task_7`,`performance_task_8`,`performance_task_9`,`performance_task_10`,`performance_task_total`,`performance_task_ps`,`performance_task_ws`,`quarterly_task_1`) values 
(1,'478','ACCOUNTNO-000003','1','2020-2021','BSIT 211',0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0),
(2,'481','ACCOUNTNO-000004','1','2020-2021','BSIT 223',0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0),
(3,'482','ACCOUNTNO-000006','2','2020-2021','BSIT 211',0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0),
(4,'479','ACCOUNTNO-000007','1','2020-2021','BSIT 211',0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0);

/*Table structure for table `tbl_highestpossible_score_3` */

DROP TABLE IF EXISTS `tbl_highestpossible_score_3`;

CREATE TABLE `tbl_highestpossible_score_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SUBJ_ID` varchar(30) DEFAULT NULL,
  `INSTRUCTOR_ID` varchar(30) DEFAULT NULL,
  `yearlevel` varchar(50) DEFAULT NULL,
  `academicyear` varchar(50) DEFAULT NULL,
  `section` varchar(50) DEFAULT NULL,
  `written_works_1` int(6) DEFAULT 0,
  `written_works_2` int(6) DEFAULT 0,
  `written_works_3` int(6) DEFAULT 0,
  `written_works_4` int(6) DEFAULT 0,
  `written_works_5` int(6) DEFAULT 0,
  `written_works_6` int(6) DEFAULT 0,
  `written_works_7` int(6) DEFAULT 0,
  `written_works_8` int(6) DEFAULT 0,
  `written_works_9` int(6) DEFAULT 0,
  `written_works_10` int(6) DEFAULT 0,
  `written_works_total` int(6) DEFAULT 0,
  `written_works_ps` int(6) DEFAULT 100,
  `written_works_ws` int(6) DEFAULT 0,
  `performance_task_1` int(6) DEFAULT 0,
  `performance_task_2` int(6) DEFAULT 0,
  `performance_task_3` int(6) DEFAULT 0,
  `performance_task_4` int(11) DEFAULT 0,
  `performance_task_5` int(6) DEFAULT 0,
  `performance_task_6` int(6) DEFAULT 0,
  `performance_task_7` int(6) DEFAULT 0,
  `performance_task_8` int(6) DEFAULT 0,
  `performance_task_9` int(6) DEFAULT 0,
  `performance_task_10` int(6) DEFAULT 0,
  `performance_task_total` int(6) DEFAULT 0,
  `performance_task_ps` int(6) DEFAULT 100,
  `performance_task_ws` int(6) DEFAULT 0,
  `quarterly_task_1` int(6) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_highestpossible_score_3` */

insert  into `tbl_highestpossible_score_3`(`id`,`SUBJ_ID`,`INSTRUCTOR_ID`,`yearlevel`,`academicyear`,`section`,`written_works_1`,`written_works_2`,`written_works_3`,`written_works_4`,`written_works_5`,`written_works_6`,`written_works_7`,`written_works_8`,`written_works_9`,`written_works_10`,`written_works_total`,`written_works_ps`,`written_works_ws`,`performance_task_1`,`performance_task_2`,`performance_task_3`,`performance_task_4`,`performance_task_5`,`performance_task_6`,`performance_task_7`,`performance_task_8`,`performance_task_9`,`performance_task_10`,`performance_task_total`,`performance_task_ps`,`performance_task_ws`,`quarterly_task_1`) values 
(1,'478','ACCOUNTNO-000003','1','2020-2021','BSIT 211',0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0),
(2,'481','ACCOUNTNO-000004','1','2020-2021','BSIT 223',0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0),
(3,'482','ACCOUNTNO-000006','2','2020-2021','BSIT 211',0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0),
(4,'479','ACCOUNTNO-000007','1','2020-2021','BSIT 211',0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0);

/*Table structure for table `tbl_highestpossible_score_4` */

DROP TABLE IF EXISTS `tbl_highestpossible_score_4`;

CREATE TABLE `tbl_highestpossible_score_4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SUBJ_ID` varchar(30) DEFAULT NULL,
  `INSTRUCTOR_ID` varchar(30) DEFAULT NULL,
  `yearlevel` varchar(50) DEFAULT NULL,
  `academicyear` varchar(50) DEFAULT NULL,
  `section` varchar(50) DEFAULT NULL,
  `written_works_1` int(6) DEFAULT 0,
  `written_works_2` int(6) DEFAULT 0,
  `written_works_3` int(6) DEFAULT 0,
  `written_works_4` int(6) DEFAULT 0,
  `written_works_5` int(6) DEFAULT 0,
  `written_works_6` int(6) DEFAULT 0,
  `written_works_7` int(6) DEFAULT 0,
  `written_works_8` int(6) DEFAULT 0,
  `written_works_9` int(6) DEFAULT 0,
  `written_works_10` int(6) DEFAULT 0,
  `written_works_total` int(6) DEFAULT 0,
  `written_works_ps` int(6) DEFAULT 100,
  `written_works_ws` int(6) DEFAULT 0,
  `performance_task_1` int(6) DEFAULT 0,
  `performance_task_2` int(6) DEFAULT 0,
  `performance_task_3` int(6) DEFAULT 0,
  `performance_task_4` int(6) DEFAULT 0,
  `performance_task_5` int(6) DEFAULT 0,
  `performance_task_6` int(6) DEFAULT 0,
  `performance_task_7` int(6) DEFAULT 0,
  `performance_task_8` int(6) DEFAULT 0,
  `performance_task_9` int(6) DEFAULT 0,
  `performance_task_10` int(6) DEFAULT 0,
  `performance_task_total` int(6) DEFAULT 0,
  `performance_task_ps` int(6) DEFAULT 100,
  `performance_task_ws` int(6) DEFAULT 0,
  `quarterly_task_1` int(6) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_highestpossible_score_4` */

insert  into `tbl_highestpossible_score_4`(`id`,`SUBJ_ID`,`INSTRUCTOR_ID`,`yearlevel`,`academicyear`,`section`,`written_works_1`,`written_works_2`,`written_works_3`,`written_works_4`,`written_works_5`,`written_works_6`,`written_works_7`,`written_works_8`,`written_works_9`,`written_works_10`,`written_works_total`,`written_works_ps`,`written_works_ws`,`performance_task_1`,`performance_task_2`,`performance_task_3`,`performance_task_4`,`performance_task_5`,`performance_task_6`,`performance_task_7`,`performance_task_8`,`performance_task_9`,`performance_task_10`,`performance_task_total`,`performance_task_ps`,`performance_task_ws`,`quarterly_task_1`) values 
(1,'478','ACCOUNTNO-000003','1','2020-2021','BSIT 211',0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0),
(2,'481','ACCOUNTNO-000004','1','2020-2021','BSIT 223',0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0),
(3,'482','ACCOUNTNO-000006','2','2020-2021','BSIT 211',0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0),
(4,'479','ACCOUNTNO-000007','1','2020-2021','BSIT 211',0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0);

/*Table structure for table `tbl_instructor` */

DROP TABLE IF EXISTS `tbl_instructor`;

CREATE TABLE `tbl_instructor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(30) DEFAULT NULL,
  `specialization` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_instructor` */

insert  into `tbl_instructor`(`id`,`userId`,`specialization`,`status`) values 
(1,'ACCOUNTNO-000003','English',1),
(2,'ACCOUNTNO-000004','Science',1),
(3,'ACCOUNTNO-000005','Filipino',1),
(4,'ACCOUNTNO-000006','P.E',1),
(5,'ACCOUNTNO-000007','MATH',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_loads` */

insert  into `tbl_loads`(`id`,`SUBJ_ID`,`userID`,`days`,`time`,`room`,`section`,`yearlevel`,`academicyear`,`semester`,`status`,`request`,`remarks`) values 
(1,480,'ACCOUNTNO-000003','TTH / SAT','9:30-10:30 AM','7','BSIT 211','1','2020-2021',NULL,1,NULL,NULL),
(2,478,'ACCOUNTNO-000003','MWF','7:30-8:30 AM','8','BSIT 211','1','2021-2022',NULL,1,'APPROVED',NULL),
(3,483,'ACCOUNTNO-000003','Monday','2:30-3:30 PM','7','BSIT 211','2','2020-2021',NULL,1,NULL,NULL),
(4,482,'ACCOUNTNO-000003','Monday','11:30-12:30 PM','9','BSIT 222','2','2020-2021',NULL,1,NULL,NULL),
(5,481,'ACCOUNTNO-000004','TTH / SAT','4:30-5:30 PM','8','BSIT 223','1','2020-2021',NULL,1,NULL,NULL),
(6,483,'ACCOUNTNO-000004','TTH / SAT','8:30-9:30 AM','9','BSIT 222','2','2020-2021',NULL,1,NULL,NULL),
(7,485,'ACCOUNTNO-000004','TTH / SAT','5:30-6:30 PM','10','BSIT 223','2','2020-2021',NULL,1,NULL,NULL),
(8,484,'ACCOUNTNO-000004','Monday','10:30-11:30 AM','10','BSIT 223','2','2020-2021',NULL,1,NULL,NULL),
(9,478,'ACCOUNTNO-000005','MWF','10:30-11:30 AM','9','BSIT 211','1','2020-2021',NULL,1,NULL,NULL),
(10,482,'ACCOUNTNO-000005','MWF','4:30-5:30 PM','6','BSIT 222','2','2020-2021',NULL,1,NULL,NULL),
(11,482,'ACCOUNTNO-000006','Monday','9:30-10:30 AM','9','BSIT 211','2','2020-2021',NULL,1,NULL,NULL),
(12,479,'ACCOUNTNO-000007','Monday','4:30-5:30 PM','6','BSIT 211','1','2021-2022',NULL,1,NULL,NULL),
(13,481,'ACCOUNTNO-000007','TTH / SAT','1:30-2:30 PM','8','BSIT 223','1','2020-2021',NULL,1,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_logs` */

insert  into `tbl_logs`(`id`,`mainID`,`logID`,`userid`,`email`,`name`,`date`,`time`,`module`,`remarks`,`info`,`attach`,`action`,`browser`,`datejim`,`ipaddress`) values 
(1,'','LOG-000001','UID-000001','','Michael Capistrano','2022-01-07','09:25:42','LOGIN',' qweqwe123 has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-07 09:25:42','::1'),
(2,'','LOG-000002','UID-000001','qweqwe123','Michael Capistrano','2022-01-07','11:53:45','USER ACCOUNT','qweqwe123 has created account:UID-000014, Type:Principal, Role:RID-000001','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-07 11:53:45','::1'),
(3,'','LOG-000003','UID-000001','qweqwe123','Michael Capistrano','2022-01-08','08:46:17','USER ACCOUNT','qweqwe123 has created account:ACCOUNTNO-000015, Type:, Role:undefined','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 08:46:17','::1'),
(4,'','LOG-000004','UID-000001','qweqwe123','Michael Capistrano','2022-01-08','08:46:53','USER ACCOUNT','qweqwe123 has created account:ACCOUNTNO-000016, Type:, Role:undefined','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 08:46:53','::1'),
(5,'','LOG-000005','ACCOUNTNO-000001','','Michael Capistrano','2022-01-08','08:52:14','LOGIN',' qweqwe123 has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 08:52:14','::1'),
(6,'','LOG-000006','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','08:56:42','USER ACCOUNT','qweqwe123 has created account:ACCOUNTNO-000017, Type:, Role:undefined','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 08:56:42','::1'),
(7,'','LOG-000007','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','09:12:54','USER ACCOUNT','qweqwe123 has created account:ACCOUNTNO-000018, Type:, Role:undefined','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:12:54','::1'),
(8,'','LOG-000008','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','09:16:27','USER ACCOUNT','qweqwe123 has created account:ACCOUNTNO-000019, Type:, Role:RID-000003','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:16:27','::1'),
(9,'','LOG-000009','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','09:25:26','USER ACCOUNT','qweqwe123 Update user account <font color=\"blue\">undefined</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">JOHN MICHAEL</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">R</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">CAPISTRANO</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">2022-01-08</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">12312312312321</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">TANAY, RIZAL</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">johnmichaelcapistrano092032@gmail.com</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">RID-000005</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">undefined</font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:25:26','::1'),
(10,'','LOG-000010','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','09:25:50','USER ACCOUNT','qweqwe123 Update user account <font color=\"blue\">undefined</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">qqqqqqqqqqqqqqJOHN MICHAEL</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">R</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">qqqqqqqqqqqqqqqCAPISTRANO</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">2022-01-08</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">12312312312321</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">TANAY, RIZAL</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">qweqweqweqwjohnmichaelcapistrano092032@gmail.com</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">RID-000005</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">undefined</font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:25:50','::1'),
(11,'','LOG-000011','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','09:28:34','USER ACCOUNT','qweqwe123 Update user account <font color=\"blue\">undefined</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">tanasyasdasdasdas</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:28:34','::1'),
(12,'','LOG-000012','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','09:30:28','USER ACCOUNT','qweqwe123 Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michael</font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasy</font> To: <font color=\"green\">tanasy</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:30:28','::1'),
(13,'','LOG-000013','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','09:31:25','USER ACCOUNT','qweqwe123 Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michael</font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasy</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123@gmail.com</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:31:25','::1'),
(14,'','LOG-000014','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','09:31:26','USER ACCOUNT','qweqwe123 Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michael</font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123@gmail.com</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:31:26','::1'),
(15,'','LOG-000015','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','09:31:26','USER ACCOUNT','qweqwe123 Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michael</font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123@gmail.com</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:31:26','::1'),
(16,'','LOG-000016','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','09:31:27','USER ACCOUNT','qweqwe123 Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michael</font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123@gmail.com</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:31:27','::1'),
(17,'','LOG-000017','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','09:31:32','USER ACCOUNT','qweqwe123 Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michael</font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123@gmail.com</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:31:32','::1'),
(18,'','LOG-000018','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','09:31:48','USER ACCOUNT','qweqwe123 Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michael</font> To: <font color=\"green\">Michaelzxczxczxcxz</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123@gmail.com</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:31:48','::1'),
(19,'','LOG-000019','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','09:33:07','USER ACCOUNT','qweqwe123 Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michaelzxczxczxcxz</font> To: <font color=\"green\">Michaelzxczxczxcxz</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123@gmail.com</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:33:07','::1'),
(20,'','LOG-000020','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','09:33:11','USER ACCOUNT','qweqwe123 Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michaelzxczxczxcxz</font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123@gmail.com</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:33:11','::1'),
(21,'','LOG-000021','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','09:36:34','USER ACCOUNT','qweqwe123 Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michael</font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123@gmail.com</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:36:34','::1'),
(22,'','LOG-000022','ACCOUNTNO-000001','qweqwe123','Michael Capistrano','2022-01-08','09:36:54','USER ACCOUNT','qweqwe123 Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michael</font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123@gmail.com</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:36:54','::1'),
(23,'','LOG-000023','','',' ','2022-01-08','09:37:04','LOGIN',' qweqwe123@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:37:04','::1'),
(24,'','LOG-000024','','',' ','2022-01-08','09:37:06','LOGIN',' qweqwe123@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:37:06','::1'),
(25,'','LOG-000025','','',' ','2022-01-08','09:37:07','LOGIN',' qweqwe123@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:37:07','::1'),
(26,'','LOG-000026','','',' ','2022-01-08','09:37:08','LOGIN',' qweqwe123@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:37:08','::1'),
(27,'','LOG-000027','','',' ','2022-01-08','09:37:08','LOGIN',' qweqwe123@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:37:08','::1'),
(28,'','LOG-000028','','',' ','2022-01-08','09:37:08','LOGIN',' qweqwe123@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:37:08','::1'),
(29,'','LOG-000029','','',' ','2022-01-08','09:37:22','LOGIN',' qweqwe123@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:37:22','::1'),
(30,'','LOG-000030','','',' ','2022-01-08','09:37:23','LOGIN',' qweqwe123@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:37:23','::1'),
(31,'','LOG-000031','','',' ','2022-01-08','09:37:23','LOGIN',' qweqwe123@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:37:23','::1'),
(32,'','LOG-000032','','',' ','2022-01-08','09:37:26','LOGIN',' qweqwe123@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:37:26','::1'),
(33,'','LOG-000033','','',' ','2022-01-08','09:37:27','LOGIN',' qweqwe123@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:37:27','::1'),
(34,'','LOG-000034','','',' ','2022-01-08','09:37:27','LOGIN',' qweqwe123@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:37:27','::1'),
(35,'','LOG-000035','','',' ','2022-01-08','09:37:50','LOGIN',' qweqwe123@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:37:50','::1'),
(36,'','LOG-000036','','',' ','2022-01-08','09:37:51','LOGIN',' qweqwe123@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:37:51','::1'),
(37,'','LOG-000037','','',' ','2022-01-08','09:37:51','LOGIN',' qweqwe123@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:37:51','::1'),
(38,'','LOG-000038','ACCOUNTNO-000001','','Michael Capistrano','2022-01-08','09:38:26','LOGIN',' qweqwe123@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:38:26','::1'),
(39,'','LOG-000039','ACCOUNTNO-000001','qweqwe123@gmail.com','Michael Capistrano','2022-01-08','09:39:42','USER ACCOUNT','qweqwe123@gmail.com Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michael</font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123@gmail.com</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:39:42','::1'),
(40,'','LOG-000040','ACCOUNTNO-000001','qweqwe123@gmail.com','Michael Capistrano','2022-01-08','09:40:37','USER ACCOUNT','qweqwe123@gmail.com Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michael</font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123@gmail.com</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:40:37','::1'),
(41,'','LOG-000041','ACCOUNTNO-000001','qweqwe123@gmail.com','Michael Capistrano','2022-01-08','09:40:45','USER ACCOUNT','qweqwe123@gmail.com Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michael</font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123@gmail.com</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:40:45','::1'),
(42,'','LOG-000042','ACCOUNTNO-000001','qweqwe123@gmail.com','Michael Capistrano','2022-01-08','09:42:29','USER ACCOUNT','qweqwe123@gmail.com Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michael</font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123@gmail.com</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:42:29','::1'),
(43,'','LOG-000043','ACCOUNTNO-000001','qweqwe123@gmail.com','Michael Capistrano','2022-01-08','09:42:35','USER ACCOUNT','qweqwe123@gmail.com Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michael</font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123@gmail.com</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000004</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:42:35','::1'),
(44,'','LOG-000044','ACCOUNTNO-000001','qweqwe123@gmail.com','Michael Capistrano','2022-01-08','09:42:41','USER ACCOUNT','qweqwe123@gmail.com Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Michael</font> To: <font color=\"green\">Michael</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Capistrano</font> To: <font color=\"green\">Capistrano</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">qweqwe123@gmail.com</font> To: <font color=\"green\">qweqwe123@gmail.com</font><br>User Role: <font color=\"red\">RID-000004</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:42:41','::1'),
(45,'','LOG-000045','ACCOUNTNO-000001','qweqwe123@gmail.com','Michael Capistrano','2022-01-08','09:46:14','USER ACCOUNT','qweqwe123@gmail.com has created account:ACCOUNTNO-000002, Type:, Role:RID-000003','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:46:14','::1'),
(46,'','LOG-000046','ACCOUNTNO-000001','qweqwe123@gmail.com','Michael Capistrano','2022-01-08','09:46:36','USER ACCOUNT','qweqwe123@gmail.com Update user account <font color=\"blue\">ACCOUNTNO-000002</font><br>User Role: <font color=\"red\">JOHN MICHAEL</font> To: <font color=\"green\">Naruto</font><br>User Role: <font color=\"red\">R</font> To: <font color=\"green\">R</font><br>User Role: <font color=\"red\">CAPISTRANO</font> To: <font color=\"green\">Uzumaki</font><br>User Role: <font color=\"red\">1995-11-22</font> To: <font color=\"green\">1995-11-22</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">TANAY, RIZAL</font> To: <font color=\"green\">TANAY, RIZAL</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">johnmichaelcapistrano092032@gmail.com</font> To: <font color=\"green\">johnmichaelcapistrano092032@gmail.com</font><br>User Role: <font color=\"red\">RID-000003</font> To: <font color=\"green\">RID-000003</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:46:36','::1'),
(47,'','LOG-000047','ACCOUNTNO-000001','qweqwe123@gmail.com','Michael Capistrano','2022-01-08','09:47:48','USER ACCOUNT','qweqwe123@gmail.com has created account:ACCOUNTNO-000021, Type:, Role:RID-000002','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:47:48','::1'),
(48,'','LOG-000048','ACCOUNTNO-000001','qweqwe123@gmail.com','Michael Capistrano','2022-01-08','09:48:43','USER ACCOUNT','qweqwe123@gmail.com has created account:ACCOUNTNO-000022, Type:, Role:RID-000004','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:48:43','::1'),
(49,'','LOG-000049','ACCOUNTNO-000001','qweqwe123@gmail.com','Michael Capistrano','2022-01-08','09:49:24','USER ACCOUNT','qweqwe123@gmail.com has created account:ACCOUNTNO-000023, Type:, Role:RID-000005','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:49:24','::1'),
(50,'','LOG-000050','ACCOUNTNO-000022','','jayson Boruto','2022-01-08','09:51:13','LOGIN',' jayson@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:51:13','::1'),
(51,'','LOG-000051','ACCOUNTNO-000022','','jayson Boruto','2022-01-08','09:52:17','LOGIN',' jayson@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:52:17','::1'),
(52,'','LOG-000052','ACCOUNTNO-000001','','Jimwell Inchan','2022-01-08','09:55:43','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:55:43','::1'),
(53,'','LOG-000053','ACCOUNTNO-000022','','jayson Boruto','2022-01-08','09:56:57','LOGIN',' jayson@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:56:57','::1'),
(54,'','LOG-000054','ACCOUNTNO-000021','','Madam Laine','2022-01-08','09:59:23','LOGIN',' lane@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 09:59:23','::1'),
(55,'','LOG-000055','ACCOUNTNO-000023','','Alexandra Secret','2022-01-08','10:10:32','LOGIN',' principal@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 10:10:32','::1'),
(56,'','LOG-000056','ACCOUNTNO-000001','','Jimwell Inchan','2022-01-08','10:12:04','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 10:12:04','::1'),
(57,'','LOG-000057','ACCOUNTNO-000022','','jayson Boruto','2022-01-08','10:24:40','LOGIN',' jayson@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 10:24:40','::1'),
(58,'','LOG-000058','ACCOUNTNO-000001','','Jimwell Inchan','2022-01-08','14:26:47','USER ACCOUNT',' Update user account <font color=\"blue\">ACCOUNTNO-000023</font><br>User Role: <font color=\"red\">Alexandra</font> To: <font color=\"green\">Alexandra</font><br>User Role: <font color=\"red\">V</font> To: <font color=\"green\">V</font><br>User Role: <font color=\"red\">Secret</font> To: <font color=\"green\">Secret</font><br>User Role: <font color=\"red\">1998-01-04</font> To: <font color=\"green\">1998-01-04</font><br>User Role: <font color=\"red\">12312312312</font> To: <font color=\"green\">12312312312</font><br>User Role: <font color=\"red\">TANAY, RIZAL</font> To: <font color=\"green\">TANAY, RIZAL</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">principal@gmail.com</font> To: <font color=\"green\">principal@gmail.com</font><br>User Role: <font color=\"red\">RID-000005</font> To: <font color=\"green\">RID-000003</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 14:26:47','::1'),
(59,'','LOG-000059','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchan','2022-01-08','21:54:01','Room','admin@gmail.com Room: <font color=\"red\">112</font> To: <font color=\"green\">Room 201</font><br>Room: <font color=\"red\">ABCOM - 112</font> To: <font color=\"green\">ABCOM - 112</font><br>','Successfully Update Room',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-08 21:54:01','::1'),
(60,'','LOG-000060','ACCOUNTNO-000001','','Jimwell Inchan','2022-01-09','01:36:04','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-09 01:36:04','::1'),
(61,'','LOG-000061','ACCOUNTNO-000001','','Jimwell Inchan','2022-01-10','16:17:39','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-10 16:17:39','::1'),
(62,'','LOG-000062','ACCOUNTNO-000022','','jayson Boruto','2022-01-10','16:37:33','LOGIN',' jayson@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 96.0.4664.110</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</font><br> IP Address: ::1','2022-01-10 16:37:33','::1'),
(63,'','LOG-000063','ACCOUNTNO-000001','','Jimwell Inchan','2022-01-12','17:23:31','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 17:23:31','::1'),
(64,'','LOG-000064','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchan','2022-01-12','17:29:53','Room','admin@gmail.com Room: <font color=\"red\">Room 201</font> To: <font color=\"green\">Room 201</font><br>Room: <font color=\"red\">ABCOM - 112</font> To: <font color=\"green\">ABCOM - 112</font><br>','Successfully Update Room',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 17:29:53','::1'),
(65,'','LOG-000065','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchan','2022-01-12','17:29:58','Department','admin@gmail.com Department: <font color=\"red\">HRM</font> To: <font color=\"green\">HRM</font><br>Department: <font color=\"red\">Human Recourses Management </font> To: <font color=\"green\">Human Recourses Management </font><br>','Successfully Update Department',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 17:29:58','::1'),
(66,'','LOG-000066','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchan','2022-01-12','17:31:59','USER ACCOUNT','admin@gmail.com Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Jimwell</font> To: <font color=\"green\">Jimwell</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Inchan</font> To: <font color=\"green\">Inchanzxc</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">admin@gmail.com</font> To: <font color=\"green\">admin@gmail.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 17:31:59','::1'),
(67,'','LOG-000067','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchan','2022-01-12','17:57:10','USER ACCOUNT','admin@gmail.com has created account:ACCOUNTNO-000024, Type:, Role:RID-000004','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 17:57:10','::1'),
(68,'','LOG-000068','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchan','2022-01-12','17:59:54','USER ACCOUNT','admin@gmail.com has created account:ACCOUNTNO-000025, Type:, Role:RID-000004','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 17:59:54','::1'),
(69,'','LOG-000069','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchan','2022-01-12','18:11:46','INSTRUCTOR','admin@gmail.com has deleted account Instructor: 3','Successfully Delete Instructor',NULL,'DELETE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 18:11:46','::1'),
(70,'','LOG-000070','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchan','2022-01-12','18:12:30','INSTRUCTOR','admin@gmail.com has deleted account Instructor: 1','Successfully Delete Instructor',NULL,'DELETE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 18:12:30','::1'),
(71,'','LOG-000071','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchan','2022-01-12','18:13:22','USER ACCOUNT','admin@gmail.com has deleted account userID: ACCOUNTNO-000025','Successfully Delete User',NULL,'DELETE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 18:13:22','::1'),
(72,'','LOG-000072','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchan','2022-01-12','18:13:26','USER ACCOUNT','admin@gmail.com has deleted account userID: ACCOUNTNO-000025','Successfully Delete User',NULL,'DELETE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 18:13:26','::1'),
(73,'','LOG-000073','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchan','2022-01-12','18:13:56','USER ACCOUNT','admin@gmail.com has deleted account userID: ACCOUNTNO-000024','Successfully Delete User',NULL,'DELETE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 18:13:56','::1'),
(74,'','LOG-000074','ACCOUNTNO-000023','','Alexandra Secret','2022-01-12','19:25:51','LOGIN',' principal@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 19:25:51','::1'),
(75,'','LOG-000075','ACCOUNTNO-000021','','Madam Laine','2022-01-12','19:26:22','LOGIN',' lane@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 19:26:22','::1'),
(76,'','LOG-000076','ACCOUNTNO-000023','','Alexandra Secret','2022-01-12','19:30:05','LOGIN',' principal@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 19:30:05','::1'),
(77,'','LOG-000077','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-01-12','19:40:34','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 19:40:34','::1'),
(78,'','LOG-000078','ACCOUNTNO-000022','','jayson Boruto','2022-01-12','19:59:58','LOGIN',' jayson@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 19:59:58','::1'),
(79,'','LOG-000079','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-01-12','20:20:36','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:20:36','::1'),
(80,'','LOG-000080','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-12','20:36:40','Subject','admin@gmail.com Grade Level: <font color=\"red\"></font> To: <font color=\"green\">ALGEBRA</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">BORN TO BE GENIUS</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:36:40','::1'),
(81,'','LOG-000081','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-12','20:36:43','Subject','admin@gmail.com Grade Level: <font color=\"red\"></font> To: <font color=\"green\">ENG</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">LEARN TO SPEAK</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:36:43','::1'),
(82,'','LOG-000082','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-12','20:36:47','Subject','admin@gmail.com Grade Level: <font color=\"red\"></font> To: <font color=\"green\">BIOLOGY</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">THE STUDY OF SCIENCE</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:36:47','::1'),
(83,'','LOG-000083','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-12','20:37:19','Subject','admin@gmail.com ','',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:37:19','::1'),
(84,'','LOG-000084','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-12','20:38:11','Subject','admin@gmail.com ','',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:38:11','::1'),
(85,'','LOG-000085','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-12','20:38:45','Subject','admin@gmail.com ','',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:38:45','::1'),
(86,'','LOG-000086','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-12','20:39:29','Subject','admin@gmail.com ','',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:39:29','::1'),
(87,'','LOG-000087','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-12','20:40:05','Subject','admin@gmail.com Grade Level: <font color=\"red\"></font> To: <font color=\"green\">HISTORY</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">123v12</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:40:05','::1'),
(88,'','LOG-000088','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-12','20:40:18','Subject','admin@gmail.com Grade Level: <font color=\"red\"></font> To: <font color=\"green\">WEBPROG</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">123f123</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">12</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:40:18','::1'),
(89,'','LOG-000089','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-12','20:40:24','Subject','admin@gmail.com Grade Level: <font color=\"red\"></font> To: <font color=\"green\">JAVA</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">v312v321</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">0</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:40:24','::1'),
(90,'','LOG-000090','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-12','20:40:28','Subject','admin@gmail.com Grade Level: <font color=\"red\"></font> To: <font color=\"green\">JAVA</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">v312v321</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:40:28','::1'),
(91,'','LOG-000091','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-12','20:40:32','Subject','admin@gmail.com Grade Level: <font color=\"red\"></font> To: <font color=\"green\">WEBPROG</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">123f123</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:40:32','::1'),
(92,'','LOG-000092','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-12','20:40:37','Subject','admin@gmail.com Grade Level: <font color=\"red\"></font> To: <font color=\"green\">HISTORY</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">123v12</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:40:37','::1'),
(93,'','LOG-000093','','',' ','2022-01-12','20:51:53','LOGIN',' jayson@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:51:53','::1'),
(94,'','LOG-000094','ACCOUNTNO-000022','','jayson Boruto','2022-01-12','20:51:56','LOGIN',' jayson@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:51:56','::1'),
(95,'','LOG-000095','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-01-12','20:52:12','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:52:12','::1'),
(96,'','LOG-000096','ACCOUNTNO-000022','','jayson Boruto','2022-01-12','20:54:33','LOGIN',' jayson@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 20:54:33','::1'),
(97,'','LOG-000097','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-01-12','21:45:11','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 21:45:11','::1'),
(98,'','LOG-000098','ACCOUNTNO-000022','','jayson Boruto','2022-01-12','21:48:07','LOGIN',' jayson@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-12 21:48:07','::1'),
(99,'','LOG-000099','ACCOUNTNO-000022','','jayson Boruto','2022-01-14','19:16:37','LOGIN',' jayson@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-14 19:16:37','::1'),
(100,'','LOG-000100','ACCOUNTNO-000022','','jayson Boruto','2022-01-15','02:01:08','LOGIN',' admin@admin.com , accountno is not registered','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-15 02:01:08','::1'),
(101,'','LOG-000101','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-01-15','02:01:38','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.71</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36</font><br> IP Address: ::1','2022-01-15 02:01:38','::1'),
(102,'','LOG-000102','','',' ','2022-01-20','14:09:11','LOGIN',' admin@admin.com , accountno is not registered','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-20 14:09:11','::1'),
(103,'','LOG-000103','','',' ','2022-01-20','14:09:14','LOGIN',' admin@admin.com , accountno is not registered','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-20 14:09:14','::1'),
(104,'','LOG-000104','','',' ','2022-01-20','14:09:15','LOGIN',' admin@admin.com , accountno is not registered','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-20 14:09:15','::1'),
(105,'','LOG-000105','','',' ','2022-01-20','14:09:15','LOGIN',' admin@admin.com , accountno is not registered','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-20 14:09:15','::1'),
(106,'','LOG-000106','','',' ','2022-01-20','14:09:15','LOGIN',' admin@admin.com , accountno is not registered','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-20 14:09:15','::1'),
(107,'','LOG-000107','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-01-20','14:09:34','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-20 14:09:34','::1'),
(108,'','LOG-000108','','',' ','2022-01-20','21:30:46','LOGIN',' admin@admin.com , accountno is not registered','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-20 21:30:46','::1'),
(109,'','LOG-000109','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-01-20','21:30:48','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-20 21:30:48','::1'),
(110,'','LOG-000110','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-01-21','15:21:04','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 15:21:04','::1'),
(111,'','LOG-000111','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-21','17:51:04','Department','admin@gmail.com ','',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 17:51:04','::1'),
(112,'','LOG-000112','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-21','17:51:11','Department','admin@gmail.com has deleted ','Successfully Delete Department',NULL,'DELETE','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 17:51:11','::1'),
(113,'','LOG-000113','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-21','18:23:02','USER ACCOUNT','admin@gmail.com has deleted account userID: ACCOUNTNO-000021','Successfully Delete User',NULL,'DELETE','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 18:23:02','::1'),
(114,'','LOG-000114','ACCOUNTNO-000001','admin@gmail.com','Jimwell Inchanzxc','2022-01-21','18:24:38','USER ACCOUNT','admin@gmail.com has deleted account userID: ACCOUNTNO-000025','Successfully Delete User',NULL,'DELETE','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 18:24:38','::1'),
(115,'','LOG-000115','ACCOUNTNO-000002','','Naruto Uzumaki','2022-01-21','19:01:26','LOGIN',' johnmichaelcapistrano092032@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 19:01:26','::1'),
(116,'','LOG-000116','ACCOUNTNO-000021','','Madam Laine','2022-01-21','19:02:57','LOGIN',' lane@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 19:02:57','::1'),
(117,'','LOG-000117','ACCOUNTNO-000022','','jayson Boruto','2022-01-21','19:03:06','LOGIN',' jayson@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 19:03:06','::1'),
(118,'','LOG-000118','ACCOUNTNO-000025','','Maria Ozawa','2022-01-21','19:03:19','LOGIN',' maria@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 19:03:19','::1'),
(119,'','LOG-000119','','',' ','2022-01-21','19:03:33','LOGIN',' laine@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 19:03:33','::1'),
(120,'','LOG-000120','','',' ','2022-01-21','19:03:37','LOGIN',' laine@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 19:03:37','::1'),
(121,'','LOG-000121','','',' ','2022-01-21','19:03:37','LOGIN',' laine@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 19:03:37','::1'),
(122,'','LOG-000122','','',' ','2022-01-21','19:03:38','LOGIN',' laine@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 19:03:38','::1'),
(123,'','LOG-000123','ACCOUNTNO-000024','','Laine Jee','2022-01-21','19:03:48','LOGIN',' laine@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 19:03:48','::1'),
(124,'','LOG-000124','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-01-21','19:04:11','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 19:04:11','::1'),
(125,'','LOG-000125','ACCOUNTNO-000002','','Naruto Uzumaki','2022-01-21','19:04:21','LOGIN',' johnmichaelcapistrano092032@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 19:04:21','::1'),
(126,'','LOG-000126','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-01-21','19:05:37','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 19:05:37','::1'),
(127,'','LOG-000127','ACCOUNTNO-000022','','jayson Boruto','2022-01-21','19:06:08','LOGIN',' jayson@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 97.0.4692.99</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</font><br> IP Address: ::1','2022-01-21 19:06:08','::1'),
(128,'','LOG-000128','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-02-17','12:15:03','LOGIN',' admin@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 12:15:03','::1'),
(129,'','LOG-000129','ACCOUNTNO-000002','','Naruto Uzumaki','2022-02-17','12:18:25','LOGIN',' teacher@.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 12:18:25','::1'),
(130,'','LOG-000130','','',' ','2022-02-17','12:41:53','LOGIN',' jayson@gmail.com , incorrect Password','Failed to Login | Redirecting to login page',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 12:41:53','::1'),
(131,'','LOG-000131','ACCOUNTNO-000022','','jayson Boruto','2022-02-17','12:41:56','LOGIN',' jayson@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 12:41:56','::1'),
(132,'','LOG-000132','ACCOUNTNO-000021','','Madam Laine','2022-02-17','12:56:32','LOGIN',' principal@.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 12:56:32','::1'),
(133,'','LOG-000133','ACCOUNTNO-000022','','jayson Boruto','2022-02-17','13:00:14','LOGIN',' jayson@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:00:14','::1'),
(134,'','LOG-000134','ACCOUNTNO-000023','','Alexandra Secret','2022-02-17','13:01:13','LOGIN',' principal@admin.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:01:13','::1'),
(135,'','LOG-000135','ACCOUNTNO-000021','','Madam Laine','2022-02-17','13:02:35','LOGIN',' registrar@admin.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:02:35','::1'),
(136,'','LOG-000136','ACCOUNTNO-000022','','jayson Boruto','2022-02-17','13:02:43','LOGIN',' teacher@admin.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:02:43','::1'),
(137,'','LOG-000137','ACCOUNTNO-000023','','Nancy Momoland','2022-02-17','13:02:54','LOGIN',' student1@admin.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:02:54','::1'),
(138,'','LOG-000138','ACCOUNTNO-000024','','Hyuna Wondergirls','2022-02-17','13:03:05','LOGIN',' student2@admin.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:03:05','::1'),
(139,'','LOG-000139','ACCOUNTNO-000025','','Maria Ozawa','2022-02-17','13:09:03','LOGIN',' student3@admin.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:09:03','::1'),
(140,'','LOG-000140','ACCOUNTNO-000023','','Nancy Momoland','2022-02-17','13:09:37','LOGIN',' student1@admin.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:09:37','::1'),
(141,'','LOG-000141','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-02-17','13:12:45','LOGIN',' admin@admin.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:12:45','::1'),
(142,'','LOG-000142','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-02-17','13:13:14','USER ACCOUNT',' Update user account <font color=\"blue\">ACCOUNTNO-000001</font><br>User Role: <font color=\"red\">Jimwell</font> To: <font color=\"green\">Jimwell</font><br>User Role: <font color=\"red\">C</font> To: <font color=\"green\">C</font><br>User Role: <font color=\"red\">Inchanzxc</font> To: <font color=\"green\">Inchanzxc</font><br>User Role: <font color=\"red\">1994-09-14</font> To: <font color=\"green\">1994-09-14</font><br>User Role: <font color=\"red\">09669142294</font> To: <font color=\"green\">09669142294</font><br>User Role: <font color=\"red\">tanasywqeqweqwewq</font> To: <font color=\"green\">tanasywqeqweqwewq</font><br>User Role: <font color=\"red\">0</font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">admin@admin.com</font> To: <font color=\"green\">admin@admin.com</font><br>User Role: <font color=\"red\">RID-000001</font> To: <font color=\"green\">RID-000001</font><br>User Role: <font color=\"red\">12312f312</font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:13:14','::1'),
(143,'','LOG-000143','ACCOUNTNO-000002','','Naruto Uzumaki','2022-02-17','13:25:49','LOGIN',' teacher@.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:25:49','::1'),
(144,'','LOG-000144','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-02-17','13:34:05','USER ACCOUNT',' has created account:ACCOUNTNO-000001, Type:, Role:RID-000001','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:34:05','::1'),
(145,'','LOG-000145','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-02-17','13:35:13','USER ACCOUNT',' has created account:ACCOUNTNO-000002, Type:, Role:RID-000002','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:35:13','::1'),
(146,'','LOG-000146','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-02-17','13:37:23','USER ACCOUNT',' has created account:ACCOUNTNO-000003, Type:, Role:RID-000004','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:37:23','::1'),
(147,'','LOG-000147','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-02-17','13:38:31','USER ACCOUNT',' has created account:ACCOUNTNO-000004, Type:, Role:RID-000004','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:38:31','::1'),
(148,'','LOG-000148','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-02-17','13:39:01','USER ACCOUNT',' has created account:ACCOUNTNO-000005, Type:, Role:RID-000004','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:39:01','::1'),
(149,'','LOG-000149','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-02-17','13:39:12','USER ACCOUNT',' Update user account <font color=\"blue\">ACCOUNTNO-000005</font><br>User Role: <font color=\"red\">Momo</font> To: <font color=\"green\">Teacher</font><br>User Role: <font color=\"red\"> </font> To: <font color=\"green\"> </font><br>User Role: <font color=\"red\">Teacher</font> To: <font color=\"green\">Momo</font><br>User Role: <font color=\"red\">2022-02-17</font> To: <font color=\"green\">2022-02-17</font><br>User Role: <font color=\"red\">41241241</font> To: <font color=\"green\">41241241</font><br>User Role: <font color=\"red\">TANAY, RIZAL</font> To: <font color=\"green\">TANAY, RIZAL</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\"></font><br>User Role: <font color=\"red\">johnmichaelcapistrano092032@gmail.com</font> To: <font color=\"green\">johnmichaelcapistrano092032@gmail.com</font><br>User Role: <font color=\"red\">RID-000004</font> To: <font color=\"green\">RID-000004</font><br>User Role: <font color=\"red\"></font> To: <font color=\"green\"></font><br>','Successfully Update User',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:39:12','::1'),
(150,'','LOG-000150','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-02-17','13:39:38','USER ACCOUNT',' has created account:ACCOUNTNO-000006, Type:, Role:RID-000004','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:39:38','::1'),
(151,'','LOG-000151','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-02-17','13:50:28','USER ACCOUNT',' has created account:ACCOUNTNO-000007, Type:, Role:RID-000004','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:50:28','::1'),
(152,'','LOG-000152','ACCOUNTNO-000001','','Jimwell Inchanzxc','2022-02-17','13:50:52','USER ACCOUNT',' has created account:ACCOUNTNO-000008, Type:, Role:RID-000005','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:50:52','::1'),
(153,'','LOG-000153','ACCOUNTNO-000002','','Registrar Inchan','2022-02-17','13:52:43','LOGIN',' registrar@admin.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:52:43','::1'),
(154,'','LOG-000154','ACCOUNTNO-000002','','Registrar Inchan','2022-02-17','13:54:57','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">MATHEMATICS</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">LEARN THE BASIC PRINCIPLES OF MATH</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:54:57','::1'),
(155,'','LOG-000155','ACCOUNTNO-000002','','Registrar Inchan','2022-02-17','13:55:52','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">ENGLISH</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">Adverbs. Adverbs modify adjectives, verbs, or other adverbs</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:55:52','::1'),
(156,'','LOG-000156','ACCOUNTNO-000002','','Registrar Inchan','2022-02-17','13:56:36','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">FILIPINO</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">STORY OF JOSE RIZAL</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:56:36','::1'),
(157,'','LOG-000157','ACCOUNTNO-000002','','Registrar Inchan','2022-02-17','13:56:59','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">SCIENCE</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">STUDY OF HUMAN BEHAVIOR </font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:56:59','::1'),
(158,'','LOG-000158','ACCOUNTNO-000002','','Registrar Inchan','2022-02-17','13:57:42','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">MAPEH</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">Music, Art, Physical Education </font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:57:42','::1'),
(159,'','LOG-000159','ACCOUNTNO-000002','','Registrar Inchan','2022-02-17','13:58:07','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">WEBPROG</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">INTRODUCTION OF HTML, PHP,CSS</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:58:07','::1'),
(160,'','LOG-000160','ACCOUNTNO-000002','','Registrar Inchan','2022-02-17','13:58:22','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">JAVA</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">INTRODUCTION OF JAVA</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:58:22','::1'),
(161,'','LOG-000161','ACCOUNTNO-000002','','Registrar Inchan','2022-02-17','13:58:31','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">JAVA</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">INTRODUCTION OF JAVA</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:58:31','::1'),
(162,'','LOG-000162','ACCOUNTNO-000002','','Registrar Inchan','2022-02-17','13:59:26','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">BIOLOGY</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">Biology encompasses diverse fields, including botany, conservation, ecology, evolution, genetics, marine biology, medicine, microbiology, molecular biology, physiology, and zoology</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 13:59:26','::1'),
(163,'','LOG-000163','ACCOUNTNO-000002','','Registrar Inchan','2022-02-17','14:20:44','USER ACCOUNT',' has created account:ACCOUNTNO-000009, Type:, Role:RID-000003','Successfully Create New User',NULL,'INSERT','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 14:20:44','::1'),
(164,'','LOG-000164','ACCOUNTNO-000002','','Registrar Inchan','2022-02-17','15:45:21','USER ACCOUNT',' has deleted account userID: ACCOUNTNO-000009','Successfully Delete User',NULL,'DELETE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:45:21','::1'),
(165,'','LOG-000165','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:46:41','LOGIN',' johnmichaelcapistrano092032@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:46:41','::1'),
(166,'','LOG-000166','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:54:42','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">BIOLOGY</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">LIVING THINGS ORGANISM</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:54:42','::1'),
(167,'','LOG-000167','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:54:47','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">MATHEMATICS</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">LEARN THE BASIC PRINCIPLES OF MATH</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:54:47','::1'),
(168,'','LOG-000168','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:54:51','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">ENGLISH</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">Adverbs. Adverbs modify adjectives, verbs, or other adverbs</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:54:51','::1'),
(169,'','LOG-000169','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:54:56','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">SCIENCE</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">STUDY OF HUMAN BEHAVIOR </font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:54:56','::1'),
(170,'','LOG-000170','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:55:00','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">MAPEH</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">Music, Art, Physical Education </font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:55:00','::1'),
(171,'','LOG-000171','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:55:06','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">WEBPROG</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">INTRODUCTION OF HTML, PHP,CSS</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:55:06','::1'),
(172,'','LOG-000172','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:55:10','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">JAVA</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">INTRODUCTION OF JAVA</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:55:10','::1'),
(173,'','LOG-000173','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:55:15','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">FILIPINO</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">STORY OF JOSE RIZAL</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:55:15','::1'),
(174,'','LOG-000174','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:55:21','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">MATHEMATICS</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">LEARN THE BASIC PRINCIPLES OF MATH</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:55:21','::1'),
(175,'','LOG-000175','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:55:40','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">BIOLOGY</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">LIVING THINGS ORGANISM</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">linux</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Mobile Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:55:40','::1'),
(176,'','LOG-000176','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:57:12','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">FILIPINO</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">STORY OF JOSE RIZAL</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">linux</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Mobile Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:57:12','::1'),
(177,'','LOG-000177','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:57:19','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">FILIPINO</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">STORY OF JOSE RIZAL</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">linux</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Mobile Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:57:19','::1'),
(178,'','LOG-000178','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:57:36','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">FILIPINO</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">STORY OF JOSE RIZAL</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">linux</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Mobile Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:57:36','::1'),
(179,'','LOG-000179','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:57:58','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">BIOLOGY</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">LIVING THINGS ORGANISM</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:57:58','::1'),
(180,'','LOG-000180','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:58:04','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">FILIPINO</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">STORY OF JOSE RIZAL</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2020-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:58:04','::1'),
(181,'','LOG-000181','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:58:24','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">BIOLOGY</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">LIVING THINGS ORGANISM</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2021-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:58:24','::1'),
(182,'','LOG-000182','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:58:29','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">FILIPINO</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">STORY OF JOSE RIZAL</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2021-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:58:29','::1'),
(183,'','LOG-000183','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:58:49','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">ENGLISH</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">Adverbs. Adverbs modify adjectives, verbs, or other adverbs</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2021-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:58:49','::1'),
(184,'','LOG-000184','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:58:57','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">JAVA</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">INTRODUCTION OF JAVA</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2021-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:58:57','::1'),
(185,'','LOG-000185','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:59:01','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">WEBPROG</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">INTRODUCTION OF HTML, PHP,CSS</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2021-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:59:01','::1'),
(186,'','LOG-000186','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:59:05','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">FILIPINO</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">STORY OF JOSE RIZAL</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2021-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:59:05','::1'),
(187,'','LOG-000187','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:59:08','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">MATHEMATICS</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">LEARN THE BASIC PRINCIPLES OF MATH</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2021-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:59:08','::1'),
(188,'','LOG-000188','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:59:12','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">ENGLISH</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">Adverbs. Adverbs modify adjectives, verbs, or other adverbs</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2021-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:59:12','::1'),
(189,'','LOG-000189','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:59:16','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">SCIENCE</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">STUDY OF HUMAN BEHAVIOR </font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">1</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2021-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:59:16','::1'),
(190,'','LOG-000190','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:59:22','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">MAPEH</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">Music, Art, Physical Education </font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2021-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:59:22','::1'),
(191,'','LOG-000191','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:59:29','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">BIOLOGY</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">LIVING THINGS ORGANISM</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2021-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:59:29','::1'),
(192,'','LOG-000192','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:59:33','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">WEBPROG</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">INTRODUCTION OF HTML, PHP,CSS</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2021-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:59:33','::1'),
(193,'','LOG-000193','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','15:59:37','Subject',' Grade Level: <font color=\"red\"></font> To: <font color=\"green\">JAVA</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">INTRODUCTION OF JAVA</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">3</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2</font><br>Grade Level: <font color=\"red\"></font> To: <font color=\"green\">2021-2021</font><br>','Successfully Update Subject',NULL,'UPDATE','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 15:59:37','::1'),
(194,'','LOG-000194','ACCOUNTNO-000003','','Teacher  Nayeon','2022-02-17','16:29:41','LOGIN',' teacher1@admin.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 16:29:41','::1'),
(195,'','LOG-000195','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','16:30:32','LOGIN',' johnmichaelcapistrano092032@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 16:30:32','::1'),
(196,'','LOG-000196','ACCOUNTNO-000001','','JOHN MICHAEL CAPISTRANO','2022-02-17','16:43:06','LOGIN',' johnmichaelcapistrano092032@gmail.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 16:43:06','::1'),
(197,'','LOG-000197','ACCOUNTNO-000003','','Teacher  Nayeon','2022-02-17','16:43:29','LOGIN',' teacher1@admin.com has been connected','Successfully Login | Redirecting to Dashboard',NULL,'LOGIN','Browser: <font color=\"green\">Google Chrome 98.0.4758.102</font> on <font color=\"blue\">windows</font><br> Reports: <font color=\"orange\">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36</font><br> IP Address: ::1','2022-02-17 16:43:29','::1');

/*Table structure for table `tbl_studload_qt1` */

DROP TABLE IF EXISTS `tbl_studload_qt1`;

CREATE TABLE `tbl_studload_qt1` (
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
  `written_grade_1` int(6) DEFAULT 0,
  `written_grade_2` int(6) DEFAULT 0,
  `written_grade_3` int(6) DEFAULT 0,
  `written_grade_4` int(6) DEFAULT 0,
  `written_grade_5` int(6) DEFAULT 0,
  `written_grade_6` int(6) DEFAULT 0,
  `written_grade_7` int(6) DEFAULT 0,
  `written_grade_8` int(6) DEFAULT 0,
  `written_grade_9` int(6) DEFAULT 0,
  `written_grade_10` int(6) DEFAULT 0,
  `written_grade_total` int(6) DEFAULT 0,
  `written_grade_ps` int(6) DEFAULT 0,
  `written_grade_ws` int(6) DEFAULT 0,
  `performance_grade_1` int(6) DEFAULT 0,
  `performance_grade_2` int(6) DEFAULT 0,
  `performance_grade_3` int(6) DEFAULT 0,
  `performance_grade_4` int(6) DEFAULT 0,
  `performance_grade_5` int(6) DEFAULT 0,
  `performance_grade_6` int(6) DEFAULT 0,
  `performance_grade_7` int(6) DEFAULT 0,
  `performance_grade_8` int(6) DEFAULT 0,
  `performance_grade_9` int(6) DEFAULT 0,
  `performance_grade_10` int(6) DEFAULT 0,
  `performance_grade_total` int(6) DEFAULT 0,
  `performance_grade_ps` int(6) DEFAULT 0,
  `performance_grade_ws` int(6) DEFAULT 0,
  `quarterly_grade_1` int(6) DEFAULT 0,
  `quarterly_grade_ps` int(6) DEFAULT 100,
  `quarterly_grade_ws` int(6) DEFAULT 0,
  `initial_grade` int(6) DEFAULT 0,
  `quaterly_final` int(6) DEFAULT 0,
  `datecreated` date DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `request` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ST_SUBJID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_studload_qt1` */

insert  into `tbl_studload_qt1`(`ST_SUBJID`,`ENROLLED_ID`,`SUBJ_ID`,`INSTRUCTOR_ID`,`USERID`,`room`,`section`,`yearlevel`,`academicyear`,`days`,`time`,`written_grade_1`,`written_grade_2`,`written_grade_3`,`written_grade_4`,`written_grade_5`,`written_grade_6`,`written_grade_7`,`written_grade_8`,`written_grade_9`,`written_grade_10`,`written_grade_total`,`written_grade_ps`,`written_grade_ws`,`performance_grade_1`,`performance_grade_2`,`performance_grade_3`,`performance_grade_4`,`performance_grade_5`,`performance_grade_6`,`performance_grade_7`,`performance_grade_8`,`performance_grade_9`,`performance_grade_10`,`performance_grade_total`,`performance_grade_ps`,`performance_grade_ws`,`quarterly_grade_1`,`quarterly_grade_ps`,`quarterly_grade_ws`,`initial_grade`,`quaterly_final`,`datecreated`,`remarks`,`status`,`request`) values 
(1,'5','478','ACCOUNTNO-000003','ACCOUNTNO-000009','6','BSIT 211','1','2020-2021','MWF','7:30-8:30 AM',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,'2022-02-17',NULL,1,NULL),
(2,'5','481','ACCOUNTNO-000004','ACCOUNTNO-000009','8','BSIT 223','1','2020-2021','TTH / SAT','4:30-5:30 PM',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,'2022-02-17',NULL,1,NULL),
(3,'5','482','ACCOUNTNO-000006','ACCOUNTNO-000009','9','BSIT 211','2','2020-2021','Monday','9:30-10:30 AM',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,'2022-02-17',NULL,1,NULL),
(4,'5','479','ACCOUNTNO-000007','ACCOUNTNO-000009','9','BSIT 211','1','2020-2021','TTH / SAT','9:30-10:30 AM',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,'2022-02-17',NULL,1,NULL);

/*Table structure for table `tbl_studload_qt2` */

DROP TABLE IF EXISTS `tbl_studload_qt2`;

CREATE TABLE `tbl_studload_qt2` (
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
  `written_grade_1` int(6) DEFAULT 0,
  `written_grade_2` int(6) DEFAULT 0,
  `written_grade_3` int(6) DEFAULT 0,
  `written_grade_4` int(6) DEFAULT 0,
  `written_grade_5` int(6) DEFAULT 0,
  `written_grade_6` int(6) DEFAULT 0,
  `written_grade_7` int(6) DEFAULT 0,
  `written_grade_8` int(6) DEFAULT 0,
  `written_grade_9` int(6) DEFAULT 0,
  `written_grade_10` int(6) DEFAULT 0,
  `written_grade_total` int(6) DEFAULT 0,
  `written_grade_ps` int(6) DEFAULT 0,
  `written_grade_ws` int(6) DEFAULT 0,
  `performance_grade_1` int(6) DEFAULT 0,
  `performance_grade_2` int(6) DEFAULT 0,
  `performance_grade_3` int(6) DEFAULT 0,
  `performance_grade_4` int(6) DEFAULT 0,
  `performance_grade_5` int(6) DEFAULT 0,
  `performance_grade_6` int(6) DEFAULT 0,
  `performance_grade_7` int(6) DEFAULT 0,
  `performance_grade_8` int(6) DEFAULT 0,
  `performance_grade_9` int(6) DEFAULT 0,
  `performance_grade_10` int(6) DEFAULT 0,
  `performance_grade_total` int(6) DEFAULT 0,
  `performance_grade_ps` int(6) DEFAULT 0,
  `performance_grade_ws` int(6) DEFAULT 0,
  `quarterly_grade_1` int(6) DEFAULT 0,
  `quarterly_grade_ps` int(6) DEFAULT 100,
  `quarterly_grade_ws` int(6) DEFAULT 0,
  `initial_grade` int(6) DEFAULT 0,
  `quaterly_final` int(6) DEFAULT 0,
  `datecreated` date DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `request` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ST_SUBJID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_studload_qt2` */

insert  into `tbl_studload_qt2`(`ST_SUBJID`,`ENROLLED_ID`,`SUBJ_ID`,`INSTRUCTOR_ID`,`USERID`,`room`,`section`,`yearlevel`,`academicyear`,`days`,`time`,`written_grade_1`,`written_grade_2`,`written_grade_3`,`written_grade_4`,`written_grade_5`,`written_grade_6`,`written_grade_7`,`written_grade_8`,`written_grade_9`,`written_grade_10`,`written_grade_total`,`written_grade_ps`,`written_grade_ws`,`performance_grade_1`,`performance_grade_2`,`performance_grade_3`,`performance_grade_4`,`performance_grade_5`,`performance_grade_6`,`performance_grade_7`,`performance_grade_8`,`performance_grade_9`,`performance_grade_10`,`performance_grade_total`,`performance_grade_ps`,`performance_grade_ws`,`quarterly_grade_1`,`quarterly_grade_ps`,`quarterly_grade_ws`,`initial_grade`,`quaterly_final`,`datecreated`,`remarks`,`status`,`request`) values 
(1,'5','478','ACCOUNTNO-000003','ACCOUNTNO-000009','6','BSIT 211','1','2020-2021','MWF','7:30-8:30 AM',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,'2022-02-17',NULL,1,NULL),
(2,'5','481','ACCOUNTNO-000004','ACCOUNTNO-000009','8','BSIT 223','1','2020-2021','TTH / SAT','4:30-5:30 PM',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,'2022-02-17',NULL,1,NULL),
(3,'5','482','ACCOUNTNO-000006','ACCOUNTNO-000009','9','BSIT 211','2','2020-2021','Monday','9:30-10:30 AM',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,'2022-02-17',NULL,1,NULL),
(4,'5','479','ACCOUNTNO-000007','ACCOUNTNO-000009','9','BSIT 211','1','2020-2021','TTH / SAT','9:30-10:30 AM',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,'2022-02-17',NULL,1,NULL);

/*Table structure for table `tbl_studload_qt3` */

DROP TABLE IF EXISTS `tbl_studload_qt3`;

CREATE TABLE `tbl_studload_qt3` (
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
  `written_grade_1` int(6) DEFAULT 0,
  `written_grade_2` int(6) DEFAULT 0,
  `written_grade_3` int(6) DEFAULT 0,
  `written_grade_4` int(6) DEFAULT 0,
  `written_grade_5` int(6) DEFAULT 0,
  `written_grade_6` int(6) DEFAULT 0,
  `written_grade_7` int(6) DEFAULT 0,
  `written_grade_8` int(6) DEFAULT 0,
  `written_grade_9` int(6) DEFAULT 0,
  `written_grade_10` int(6) DEFAULT 0,
  `written_grade_total` int(6) DEFAULT 0,
  `written_grade_ps` int(6) DEFAULT 0,
  `written_grade_ws` int(6) DEFAULT 0,
  `performance_grade_1` int(6) DEFAULT 0,
  `performance_grade_2` int(6) DEFAULT 0,
  `performance_grade_3` int(6) DEFAULT 0,
  `performance_grade_4` int(6) DEFAULT 0,
  `performance_grade_5` int(6) DEFAULT 0,
  `performance_grade_6` int(6) DEFAULT 0,
  `performance_grade_7` int(6) DEFAULT 0,
  `performance_grade_8` int(6) DEFAULT 0,
  `performance_grade_9` int(6) DEFAULT 0,
  `performance_grade_10` int(6) DEFAULT 0,
  `performance_grade_total` int(6) DEFAULT 0,
  `performance_grade_ps` int(6) DEFAULT 0,
  `performance_grade_ws` int(6) DEFAULT 0,
  `quarterly_grade_1` int(6) DEFAULT 0,
  `quarterly_grade_ps` int(6) DEFAULT 100,
  `quarterly_grade_ws` int(6) DEFAULT 0,
  `initial_grade` int(6) DEFAULT 0,
  `quaterly_final` int(6) DEFAULT 0,
  `datecreated` date DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `request` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ST_SUBJID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_studload_qt3` */

insert  into `tbl_studload_qt3`(`ST_SUBJID`,`ENROLLED_ID`,`SUBJ_ID`,`INSTRUCTOR_ID`,`USERID`,`room`,`section`,`yearlevel`,`academicyear`,`days`,`time`,`written_grade_1`,`written_grade_2`,`written_grade_3`,`written_grade_4`,`written_grade_5`,`written_grade_6`,`written_grade_7`,`written_grade_8`,`written_grade_9`,`written_grade_10`,`written_grade_total`,`written_grade_ps`,`written_grade_ws`,`performance_grade_1`,`performance_grade_2`,`performance_grade_3`,`performance_grade_4`,`performance_grade_5`,`performance_grade_6`,`performance_grade_7`,`performance_grade_8`,`performance_grade_9`,`performance_grade_10`,`performance_grade_total`,`performance_grade_ps`,`performance_grade_ws`,`quarterly_grade_1`,`quarterly_grade_ps`,`quarterly_grade_ws`,`initial_grade`,`quaterly_final`,`datecreated`,`remarks`,`status`,`request`) values 
(1,'5','478','ACCOUNTNO-000003','ACCOUNTNO-000009','6','BSIT 211','1','2020-2021','MWF','7:30-8:30 AM',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,'2022-02-17',NULL,1,NULL),
(2,'5','481','ACCOUNTNO-000004','ACCOUNTNO-000009','8','BSIT 223','1','2020-2021','TTH / SAT','4:30-5:30 PM',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,'2022-02-17',NULL,1,NULL),
(3,'5','482','ACCOUNTNO-000006','ACCOUNTNO-000009','9','BSIT 211','2','2020-2021','Monday','9:30-10:30 AM',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,'2022-02-17',NULL,1,NULL),
(4,'5','479','ACCOUNTNO-000007','ACCOUNTNO-000009','9','BSIT 211','1','2020-2021','TTH / SAT','9:30-10:30 AM',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,'2022-02-17',NULL,1,NULL);

/*Table structure for table `tbl_studload_qt4` */

DROP TABLE IF EXISTS `tbl_studload_qt4`;

CREATE TABLE `tbl_studload_qt4` (
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
  `written_grade_1` int(6) DEFAULT 0,
  `written_grade_2` int(6) DEFAULT 0,
  `written_grade_3` int(6) DEFAULT 0,
  `written_grade_4` int(6) DEFAULT 0,
  `written_grade_5` int(6) DEFAULT 0,
  `written_grade_6` int(6) DEFAULT 0,
  `written_grade_7` int(6) DEFAULT 0,
  `written_grade_8` int(6) DEFAULT 0,
  `written_grade_9` int(6) DEFAULT 0,
  `written_grade_10` int(6) DEFAULT 0,
  `written_grade_total` int(6) DEFAULT 0,
  `written_grade_ps` int(6) DEFAULT 0,
  `written_grade_ws` int(6) DEFAULT 0,
  `performance_grade_1` int(6) DEFAULT 0,
  `performance_grade_2` int(6) DEFAULT 0,
  `performance_grade_3` int(6) DEFAULT 0,
  `performance_grade_4` int(6) DEFAULT 0,
  `performance_grade_5` int(6) DEFAULT 0,
  `performance_grade_6` int(6) DEFAULT 0,
  `performance_grade_7` int(6) DEFAULT 0,
  `performance_grade_8` int(6) DEFAULT 0,
  `performance_grade_9` int(6) DEFAULT 0,
  `performance_grade_10` int(6) DEFAULT 0,
  `performance_grade_total` int(6) DEFAULT 0,
  `performance_grade_ps` int(6) DEFAULT 0,
  `performance_grade_ws` int(6) DEFAULT 0,
  `quarterly_grade_1` int(6) DEFAULT 0,
  `quarterly_grade_ps` int(6) DEFAULT 100,
  `quarterly_grade_ws` int(6) DEFAULT 0,
  `initial_grade` int(6) DEFAULT 0,
  `quaterly_final` int(6) DEFAULT 0,
  `datecreated` date DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `request` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ST_SUBJID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_studload_qt4` */

insert  into `tbl_studload_qt4`(`ST_SUBJID`,`ENROLLED_ID`,`SUBJ_ID`,`INSTRUCTOR_ID`,`USERID`,`room`,`section`,`yearlevel`,`academicyear`,`days`,`time`,`written_grade_1`,`written_grade_2`,`written_grade_3`,`written_grade_4`,`written_grade_5`,`written_grade_6`,`written_grade_7`,`written_grade_8`,`written_grade_9`,`written_grade_10`,`written_grade_total`,`written_grade_ps`,`written_grade_ws`,`performance_grade_1`,`performance_grade_2`,`performance_grade_3`,`performance_grade_4`,`performance_grade_5`,`performance_grade_6`,`performance_grade_7`,`performance_grade_8`,`performance_grade_9`,`performance_grade_10`,`performance_grade_total`,`performance_grade_ps`,`performance_grade_ws`,`quarterly_grade_1`,`quarterly_grade_ps`,`quarterly_grade_ws`,`initial_grade`,`quaterly_final`,`datecreated`,`remarks`,`status`,`request`) values 
(1,'5','478','ACCOUNTNO-000003','ACCOUNTNO-000009','6','BSIT 211','1','2020-2021','MWF','7:30-8:30 AM',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,'2022-02-17',NULL,1,NULL),
(2,'5','481','ACCOUNTNO-000004','ACCOUNTNO-000009','8','BSIT 223','1','2020-2021','TTH / SAT','4:30-5:30 PM',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,'2022-02-17',NULL,1,NULL),
(3,'5','482','ACCOUNTNO-000006','ACCOUNTNO-000009','9','BSIT 211','2','2020-2021','Monday','9:30-10:30 AM',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,'2022-02-17',NULL,1,NULL),
(4,'5','479','ACCOUNTNO-000007','ACCOUNTNO-000009','9','BSIT 211','1','2020-2021','TTH / SAT','9:30-10:30 AM',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,0,0,0,'2022-02-17',NULL,1,NULL);

/*Table structure for table `tbl_user_role` */

DROP TABLE IF EXISTS `tbl_user_role`;

CREATE TABLE `tbl_user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` varchar(30) NOT NULL,
  `role_name` varchar(30) NOT NULL,
  `view_dashboard` tinyint(1) DEFAULT 0,
  `view_incomming_request` tinyint(1) DEFAULT 0,
  `view_referentials` tinyint(1) DEFAULT 0,
  `view_grades` tinyint(1) DEFAULT 0,
  `view_myrecords` tinyint(1) DEFAULT 0,
  `view_awards` tinyint(1) DEFAULT 0,
  `view_instructor` tinyint(1) DEFAULT 0,
  `view_manage_class` tinyint(1) DEFAULT 0,
  `view_student_record` tinyint(1) DEFAULT 0,
  `view_user_role` tinyint(1) DEFAULT 0,
  `view_manage_users` tinyint(1) DEFAULT 0,
  `view_pendings` tinyint(1) DEFAULT 0,
  `status` tinyint(1) DEFAULT 1 COMMENT '1 - active / 0 - inActive',
  `datecreated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_user_role` */

insert  into `tbl_user_role`(`id`,`role_id`,`role_name`,`view_dashboard`,`view_incomming_request`,`view_referentials`,`view_grades`,`view_myrecords`,`view_awards`,`view_instructor`,`view_manage_class`,`view_student_record`,`view_user_role`,`view_manage_users`,`view_pendings`,`status`,`datecreated`) values 
(7,'RID-000001','admin',1,1,1,1,1,1,1,1,1,1,1,1,1,'2021-09-24 12:08:58'),
(9,'RID-000002','registrar',0,0,1,0,0,1,1,1,1,0,1,0,1,'2021-09-24 12:08:58'),
(10,'RID-000003','student',0,0,0,0,1,0,0,0,0,0,0,0,1,'2021-09-24 12:09:17'),
(11,'RID-000004','teacher',0,1,0,1,0,0,0,0,0,0,0,0,1,'2021-09-24 17:34:20'),
(12,'RID-000005','principal',0,1,0,0,0,0,0,0,0,0,0,1,1,'2021-10-01 10:58:30');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`userID`,`email`,`password`,`fname`,`mname`,`lname`,`contact`,`birthdate`,`address`,`user_role`,`user_avatar`,`datecreated`,`lost_login`,`status`,`yearlevel`,`account_type`,`accountno`,`civilstatus`,`employmentStatus`,`gender`) values 
(1,'ACCOUNTNO-000001','johnmichaelcapistrano092032@gmail.com','$2y$10$JtNQrr9DsDAW7y0Q0Bwdh.0gh/VP/ZwutxJiiDe466/aex1OeEC42','JOHN MICHAEL','R','CAPISTRANO','09669142294','2022-02-17','TANAY, RIZAL','RID-000001','default_profile.png',NULL,'2022-02-17 13:34:05',1,NULL,'',NULL,NULL,NULL,NULL),
(2,'ACCOUNTNO-000002','registrar@admin.com','$2y$10$CHbAhrRyUgEfZgvR83wVq.eDUdKa.7fZ2u7MVv/dsu7mhMcAUZBZe','Registrar','Jimwell','Inchan','541231221','2022-02-17','Batangas, Calaca','RID-000002','1584903349620de2b15e70a.jpg',NULL,'2022-02-17 13:35:13',1,NULL,'',NULL,NULL,NULL,NULL),
(3,'ACCOUNTNO-000003','teacher1@admin.com','$2y$10$zTlHo5hzovLKE.kjkg9VAelRch7HWxlBbV0Y3R9JSn0JtvJGv3U22','Teacher ','','Nayeon','5412412412','2022-02-17','TANAY, RIZAL','RID-000004','default_profile.png',NULL,'2022-02-17 13:37:23',1,NULL,'',NULL,NULL,NULL,NULL),
(4,'ACCOUNTNO-000004','teacher2@admin.com','$2y$10$rLRPu/hPqYbEAEFS5g5OFetZsGFa9Ih6cqD551LxUsE.ou3LGPwny','Teacher','','Jeongyeon','4124124','2022-02-17','TANAY, RIZAL','RID-000004','default_profile.png',NULL,'2022-02-17 13:38:31',1,NULL,'',NULL,NULL,NULL,NULL),
(5,'ACCOUNTNO-000005','teacher3@admin.com','$2y$10$CS8T7VCKgTbLYEZgfpITKe5.KtRcybUCMU8fyfcsHCKS4xVIcKVDS','Teacher','','Momo','41241241','2022-02-17','TANAY, RIZAL','RID-000004','default_profile.png',NULL,'2022-02-17 13:39:01',1,NULL,'',NULL,NULL,NULL,NULL),
(6,'ACCOUNTNO-000006','teacher4@admin.com','$2y$10$LpYbhUdTBQVt71KncOF.Au/6xtmEqu7Z5mFEm0Dm6ThQBY1qecqt2','Teacher','','Sana','5124124','2022-02-17','TANAY, RIZAL','RID-000004','default_profile.png',NULL,'2022-02-17 13:39:38',1,NULL,'',NULL,NULL,NULL,NULL),
(7,'ACCOUNTNO-000007','teacher5@admin.com','$2y$10$v6x.mlDe3Blw6QAnTIWvu.yAXH/BUoKX7o7Potloa/mk/qsqXwH5a','Teacher','','Jihyo','4124124','2022-02-17','TANAY, RIZAL','RID-000004','default_profile.png',NULL,'2022-02-17 13:50:28',1,NULL,'',NULL,NULL,NULL,NULL),
(8,'ACCOUNTNO-000008','principal@admin.com','$2y$10$X31jGZ9YcDgBohL8v81V6ufPhTASmQR9CXbuisgeD8SmLySgQksfC','Principal','','Chaeyoung','12312412','2022-02-17','TANAY, RIZAL','RID-000005','default_profile.png',NULL,'2022-02-17 13:50:52',1,NULL,'',NULL,NULL,NULL,NULL),
(9,'ACCOUNTNO-000009','student1@admin.com','$2y$10$JrLQJ0E8wzoy2ZFGMhfzKObZUsG78LoiBlov.CKOPNFjxAqjJvP0e','Naruto','R','Student','1412412421','2022-02-17','TANAY, RIZAL','RID-000003','default_profile.png',NULL,'2022-02-17 14:20:44',1,NULL,'',NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
