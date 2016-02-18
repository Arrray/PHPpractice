-- MySQL dump 10.11
--
-- Host: localhost    Database: db_forum
-- ------------------------------------------------------
-- Server version	5.0.51b-community-nt-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `db_forum`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `db_forum` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_forum`;

--
-- Table structure for table `tb_forum_affiche`
--

DROP TABLE IF EXISTS `tb_forum_affiche`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tb_forum_affiche` (
  `tb_affiche_id` int(10) NOT NULL auto_increment,
  `tb_affiche_subject` varchar(50) NOT NULL,
  `tb_affiche_content` mediumtext NOT NULL,
  `tb_affiche_user` varchar(50) NOT NULL,
  `tb_affiche_date` date NOT NULL,
  `tb_affiche_type` varchar(50) NOT NULL,
  `tb_affiche_counts` varchar(50) NOT NULL,
  PRIMARY KEY  (`tb_affiche_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gb2312;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tb_forum_affiche`
--

LOCK TABLES `tb_forum_affiche` WRITE;
/*!40000 ALTER TABLE `tb_forum_affiche` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_forum_affiche` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_forum_big_type`
--

DROP TABLE IF EXISTS `tb_forum_big_type`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tb_forum_big_type` (
  `tb_big_type_id` int(10) NOT NULL auto_increment,
  `tb_big_type_content` varchar(50) NOT NULL,
  `tb_big_type_date` date NOT NULL,
  PRIMARY KEY  (`tb_big_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gb2312;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tb_forum_big_type`
--

LOCK TABLES `tb_forum_big_type` WRITE;
/*!40000 ALTER TABLE `tb_forum_big_type` DISABLE KEYS */;
INSERT INTO `tb_forum_big_type` VALUES (1,'美工设计','2008-03-18'),(2,'软件开发','2008-03-18'),(3,'图书开发','2008-03-28'),(4,'硬件维护','2008-03-28'),(5,'综合社区','2008-03-28'),(6,'操作系统','2008-03-28'),(10,'','2011-05-30');
/*!40000 ALTER TABLE `tb_forum_big_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_forum_restore`
--

DROP TABLE IF EXISTS `tb_forum_restore`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tb_forum_restore` (
  `tb_restore_id` int(10) NOT NULL auto_increment,
  `tb_restore_subject` varchar(50) NOT NULL,
  `tb_restore_content` mediumtext NOT NULL,
  `tb_restore_user` varchar(50) NOT NULL,
  `tb_send_id` int(10) NOT NULL,
  `tb_restore_date` datetime NOT NULL,
  `tb_forum_counts` varchar(50) NOT NULL,
  `tb_restore_accessories` varchar(80) NOT NULL,
  `tb_restore_tag` int(10) NOT NULL,
  PRIMARY KEY  (`tb_restore_id`)
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=gb2312;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tb_forum_restore`
--

LOCK TABLES `tb_forum_restore` WRITE;
/*!40000 ALTER TABLE `tb_forum_restore` DISABLE KEYS */;
INSERT INTO `tb_forum_restore` VALUES (123,'摘自（mr）：PHP5与PHP6的区别','111111','mr',114,'2011-05-30 11:19:34','3','',0),(122,'摘自（wmz）：什么是Flash？','<font color=#FF0000>呵呵！</font>','wmz',107,'2011-05-14 09:12:09','4','./file/130533552913053342511.txt',0),(124,'摘自（mr）：PHOTO shop的版本问题','123123132','mr',113,'2011-05-30 11:28:06','2','',0);
/*!40000 ALTER TABLE `tb_forum_restore` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_forum_send`
--

DROP TABLE IF EXISTS `tb_forum_send`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tb_forum_send` (
  `tb_send_id` int(10) NOT NULL auto_increment,
  `tb_send_subject` varchar(50) NOT NULL,
  `tb_send_content` mediumtext NOT NULL,
  `tb_send_user` varchar(50) NOT NULL,
  `tb_send_date` datetime NOT NULL,
  `tb_send_picture` varchar(70) NOT NULL,
  `tb_send_type` varchar(50) NOT NULL,
  `tb_send_types` varchar(50) NOT NULL,
  `tb_send_small_type` varchar(50) NOT NULL,
  `tb_send_type_distillate` varchar(50) NOT NULL,
  `tb_send_type_hotspot` varchar(50) NOT NULL,
  `tb_send_accessories` varchar(80) NOT NULL,
  `tb_forum_end` int(10) NOT NULL,
  `tb_send_count` bigint(11) NOT NULL default '0',
  `tb_send_author` varchar(200) NOT NULL,
  `tb_send_ltime` varchar(50) NOT NULL,
  PRIMARY KEY  (`tb_send_id`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=gb2312;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tb_forum_send`
--

LOCK TABLES `tb_forum_send` WRITE;
/*!40000 ALTER TABLE `tb_forum_send` DISABLE KEYS */;
INSERT INTO `tb_forum_send` VALUES (107,'什么是Flash？','<div align=\"justify\"><strong><em><u><font style=\"background-color: #ffff00\" face=\"SimHei color=\"#0000ff\" size=\"5\"><sub>谁能告诉我？谁能告诉我？</div><sup>\r\n<hr width=\"100%\" color=\"#ff0000\" size=\"1\" />\r\n</sup></sub></font></u></em></strong>','wmz','2011-06-02 14:43:25','images/inchoative/face2.gif','1','1','FLASH设计','1','1','./file/13053342511.txt',1,42,'wmz','2011-05-14 09:12:09'),(105,'在关闭全局变量之后应用date()函数警告问题','如题，请问如何解决？','多蒙','2011-02-26 10:36:32','images/inchoative/face23.gif','0','0','PHP','','','',0,7,'多蒙','2011-02-26 10:36:32'),(108,'dfvxdfvd','bnnmbmnbncxfvxdsdsf','wmz','2011-06-02 14:42:48','images/inchoative/face0.gif','0','0','DEL','','','./file/13053367231.txt',1,8,'wmz','2011-05-14 09:32:03'),(109,'dfgd','fdfdggfdg','wmz','2011-05-14 09:33:37','images/inchoative/face0.gif','0','0','DEL','','','',1,23,'wmz','2011-05-14 09:33:37'),(110,'fghfgh','hgfhgh','wmz','2011-05-14 09:37:49','images/inchoative/face0.gif','0','0','PHOTO设计','','1','',1,4,'wmz','2011-05-14 09:37:49'),(111,'hfgf','ghgfhh','wmz','2011-05-14 09:37:58','images/inchoative/face12.gif','0','0','PHOTO设计','','','',1,10,'wmz','2011-05-14 09:37:58'),(113,'PHOTO shop的版本问题','<div>什么都没有</div>','mr','2011-05-30 11:14:17','images/inchoative/face6.gif','0','1','PHP','','','./file/1306725061{D4C06FD3-F7BB-40E6-8C10-2E04967CEC96}.gif',1,36,'mr','2011-05-30 11:33:37'),(114,'PHP5与PHP6的区别','<div>不道啊 有知道的没</div>','mr','2011-05-30 11:17:09','images/inchoative/face0.gif','0','1','PHP','','','',0,29,'mr','2011-05-30 11:19:34'),(115,'5454545','<div>45646655656</div>','wmz','2011-06-02 15:29:51','images/inchoative/face0.gif','0','0','FLASH设计','','','./file/1306999791009.jpg',1,2,'wmz','2011-06-2 15:29:51');
/*!40000 ALTER TABLE `tb_forum_send` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_forum_small_type`
--

DROP TABLE IF EXISTS `tb_forum_small_type`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tb_forum_small_type` (
  `tb_small_type_id` int(10) NOT NULL auto_increment,
  `tb_small_type_content` varchar(50) NOT NULL,
  `tb_big_type_content` varchar(50) NOT NULL,
  `tb_small_type_date` date NOT NULL,
  PRIMARY KEY  (`tb_small_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gb2312;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tb_forum_small_type`
--

LOCK TABLES `tb_forum_small_type` WRITE;
/*!40000 ALTER TABLE `tb_forum_small_type` DISABLE KEYS */;
INSERT INTO `tb_forum_small_type` VALUES (3,'FLASH设计','美工设计','2008-03-31'),(4,'DEL','软件开发','2008-03-31'),(5,'PHP','软件开发','2008-03-31'),(7,'PHOTO设计','美工设计','2008-04-11');
/*!40000 ALTER TABLE `tb_forum_small_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_forum_user`
--

DROP TABLE IF EXISTS `tb_forum_user`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tb_forum_user` (
  `tb_forum_id` int(10) NOT NULL auto_increment,
  `tb_forum_user` varchar(50) NOT NULL,
  `tb_forum_pass` varchar(50) NOT NULL,
  `tb_forum_type` varchar(50) NOT NULL,
  `tb_forum_email` varchar(50) NOT NULL,
  `tb_forum_truepass` varchar(50) NOT NULL,
  `tb_forum_date` datetime NOT NULL,
  `tb_forum_picture` varchar(80) NOT NULL,
  `tb_forum_grade` varchar(50) NOT NULL,
  `tb_forum_pass_problem` varchar(50) NOT NULL,
  `tb_forum_pass_result` varchar(50) NOT NULL,
  `tb_forum_qq` varchar(50) NOT NULL,
  `tb_forum_speciality` text NOT NULL,
  PRIMARY KEY  (`tb_forum_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=gb2312;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tb_forum_user`
--

LOCK TABLES `tb_forum_user` WRITE;
/*!40000 ALTER TABLE `tb_forum_user` DISABLE KEYS */;
INSERT INTO `tb_forum_user` VALUES (23,'www','698d51a19d8a121ce581499d7b701668','1','111@qq.com','111','2011-05-14 10:32:05','images/face/0.gif','25','我最喜欢的食物？','面条','111','运动'),(21,'mr','fdb390e945559e74475ed8c8bbb48ca5','2','mrsoft@mr.com','mrsoft','2011-05-30 11:08:31','images/face/{34986658-ED40-4897-90D4-F67F1FFC6ACA}.gif','25','我最喜欢的食物？','food','123456','nothing1111'),(22,'wmz','698d51a19d8a121ce581499d7b701668','1','wmz@111.com','111','2011-06-02 02:38:34','images/face/011.jpg','15','我妈妈的生日？','我知道你不知道','111','打排球、看书');
/*!40000 ALTER TABLE `tb_forum_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_mail_box`
--

DROP TABLE IF EXISTS `tb_mail_box`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tb_mail_box` (
  `tb_mail_id` int(10) NOT NULL auto_increment,
  `tb_receiving_person` varchar(50) NOT NULL,
  `tb_mail_sender` varchar(50) NOT NULL,
  `tb_mail_date` date NOT NULL,
  `tb_mail_subject` varchar(80) NOT NULL,
  `tb_mail_content` mediumtext NOT NULL,
  `tb_mail_type` varchar(50) NOT NULL,
  `yanzheng` int(1) NOT NULL default '0' COMMENT '是否为好友验证信息',
  PRIMARY KEY  (`tb_mail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=gb2312;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tb_mail_box`
--

LOCK TABLES `tb_mail_box` WRITE;
/*!40000 ALTER TABLE `tb_mail_box` DISABLE KEYS */;
INSERT INTO `tb_mail_box` VALUES (113,'mr','wmz','2011-05-14','你好，mr','hh ','1',3),(114,'www','wmz','2011-05-14','你好，www','你好','1',3),(115,'wmz','系统信息','2011-05-14','mr已经通过好友申请验证','mr已经通过了您的好友申请!','1',0),(112,'wmz','wmz','2011-05-14','你好！','你好！','1',2),(111,'www','wmz','2011-05-14','你好，www','nihao','1',3),(109,'wmz','www','2011-05-14','回复主题:[你好]','hello\r\nhello','1',2),(110,'leonsk','wmz','2011-05-14','你好，leonsk','你好','',1),(105,'www','wmz','2011-05-14','你好','你好','1',2),(106,'www','wmz','2011-05-14','我来了','我来了','1',2),(108,'wmz','www','2011-05-14','我也来了','呵呵','1',2),(117,'wmz','系统信息','2011-05-14','www已经通过好友申请验证','www已经通过了您的好友申请!','1',0),(119,'wmz','wmz','2011-05-14','回复主题:[你好！]','hao hehe!','1',2);
/*!40000 ALTER TABLE `tb_mail_box` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_my_collection`
--

DROP TABLE IF EXISTS `tb_my_collection`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tb_my_collection` (
  `tb_collection_id` int(10) NOT NULL auto_increment,
  `tb_collection_subject` varchar(50) NOT NULL,
  `tb_collection_address` varchar(150) NOT NULL,
  `tb_collection_label` varchar(50) NOT NULL,
  `tb_collection_summary` mediumtext NOT NULL,
  `tb_collection_user` varchar(50) NOT NULL,
  `tb_collection_date` datetime NOT NULL,
  PRIMARY KEY  (`tb_collection_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=gb2312;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tb_my_collection`
--

LOCK TABLES `tb_my_collection` WRITE;
/*!40000 ALTER TABLE `tb_my_collection` DISABLE KEYS */;
INSERT INTO `tb_my_collection` VALUES (22,'什么是Flash？','http://localhost/soft/10/send_forum_content.php?send_big_type=美工设计&&send_small_type=FLASH设计&&send_id=107&&cite=122','mm','mm','wmz','2011-05-14 09:20:05');
/*!40000 ALTER TABLE `tb_my_collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_my_friend`
--

DROP TABLE IF EXISTS `tb_my_friend`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tb_my_friend` (
  `tb_friend_id` int(10) NOT NULL auto_increment,
  `tb_my` varchar(50) NOT NULL,
  `tb_friend` varchar(50) NOT NULL,
  `tb_date` date NOT NULL,
  PRIMARY KEY  (`tb_friend_id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=gb2312;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tb_my_friend`
--

LOCK TABLES `tb_my_friend` WRITE;
/*!40000 ALTER TABLE `tb_my_friend` DISABLE KEYS */;
INSERT INTO `tb_my_friend` VALUES (43,'mr','wmz','2011-05-14'),(42,'wmz','www','2011-05-14'),(41,'wmz','mr','2011-05-14'),(44,'www','wmz','2011-05-14'),(45,'www','wmz','2011-05-14');
/*!40000 ALTER TABLE `tb_my_friend` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-06-10  8:39:04
