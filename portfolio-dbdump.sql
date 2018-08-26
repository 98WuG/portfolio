-- MySQL dump 10.16  Distrib 10.3.9-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: portfolio
-- ------------------------------------------------------
-- Server version	10.3.9-MariaDB

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
-- Table structure for table `aboutme`
--

DROP TABLE IF EXISTS `aboutme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aboutme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `subtitle` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aboutme`
--

LOCK TABLES `aboutme` WRITE;
/*!40000 ALTER TABLE `aboutme` DISABLE KEYS */;
INSERT INTO `aboutme` VALUES (1,'Software Development','Java, Scala, C','I\'m a developer primarily focused in Object-Oriented Programming, with a working knowledge of Functional Programming. I\'m most familiar with the Java, Scala, and C languages. Most of my past projects/internships used these.<br>I also have experience in C++, C#, Python, Processing, and other assorted languages.<br>\r\nIf you want to see some of my more notable projects, please visit the <a href=\"#projects\">projects</a> section. Or, visit my <a href=\"https://github.com/98WuG\">GitHub</a> to take a look at all of them.','code'),(2,'Web Development','Linux/Apache/MySQL/PHP','On the web development side, I\'m most familiar with the <b>L</b>inux <b>A</b>pache <b>M</b>ySQL <b>P</b>HP stack. <br>In fact, this website is self-hosted on a LAMP stack! All the text on this site is being pulled from a MariaDB (MySQL) instance and rendered through dynamic PHP. Think of it like a homemade content management system (CMS).<br>Don\'t believe me? You can view the source code <a href=\"https://github.com/98WuG/geraldwu.com\">here</a> and the database structure <a href=\"https://geraldwu.com/structure.pdf\">here</a> (NOTE: this is not WordPress <i class=\"em em-slightly_smiling_face\"></i>).','html5'),(3,'Information Technology','Red Hat Enterprise Linux 7','I\'m primarily a Linux systems administrator, specializing in Red Hat Enterprise Linux 7.<br>The website you\'re looking at is located on a 100%, fully self-hosted CentOS 7 instance, running both a LAMP stack and a Dovecot/Sendmail mail server, setup manually and entirely from scratch. I also have experience setting up/managing LDAP, NFS, SELinux, LVM, and Linux systems in general.<br>I currently have my RHCSA certification, and am working on getting my RHCE and CCNA.','desktop');
/*!40000 ALTER TABLE `aboutme` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form`
--

DROP TABLE IF EXISTS `form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `htmlID` varchar(20) DEFAULT NULL,
  `icon` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `field` varchar(20) DEFAULT NULL,
  `label` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form`
--

LOCK TABLES `form` WRITE;
/*!40000 ALTER TABLE `form` DISABLE KEYS */;
INSERT INTO `form` VALUES (1,'name','user','text','input','Name'),(2,'email','envelope','email','input','Email'),(3,'subject','tag','text','input','Subject');
/*!40000 ALTER TABLE `form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lg` int(11) DEFAULT NULL,
  `md` int(11) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `subtitle` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,4,12,'https://github.com/98WuG/QuantumEvolution','quantum.jpg','Quantum Mechanical Wave Function Propagation','Processing','A program to evolve arbitrary initial states through time for the one-dimensional Schrodinger Equation and Wave Equation in the absence of a potential field. Highly optimized to run in <b>real time</b>. No pre-rendering. Accurate to millions of timesteps before noticeable error propagation. Written in Processing (a fork of Java with a focus on real-time graphing), with a small shell script launcher.'),(2,4,6,'https://github.com/98WuG/SeniorResearch','packing.jpg','An Approximate Solution to the Packing Problem','C++ / Shell','This program provides an approximate, polynomial time solution to the classic NP-hard packing problem. Implemented using the sorting-first greedy approach to packing. Includes a detailed report showcasing results (typeset in LaTeX). Written in C++, with a shell script helper for initialization and final visualization.'),(3,4,6,'https://github.com/98WuG/Authorize.Net-Web','payment.jpg','PHP Implementation of Authorize.Net Payments','PHP / JQuery','An implementation of Authorize.Net\'s API in PHP that allows merchants to store payment methods without any sensitive information hitting the merchant\'s database, thereby exempting them from tedious PCI compliance. These may also be charged at a later date. Responsive front-end design with mdbootstrap and flexible backend written in PHP.');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `htmlID` varchar(20) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `subtitle` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES (1,'about','Hi, I\'m Gerald!','Here\'s a little bit about me <i class=\"em em-smiley\"></i>'),(2,'projects','My Projects','Just a few projects I\'ve worked on. Click on any image to learn more.'),(3,'blog','My Blog','I also run a blog! It\'s mostly about tinkering with electronics. Interested?'),(4,'contact','Contact Me','Let me know you\'re interested!');
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `self`
--

DROP TABLE IF EXISTS `self`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `self` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `subtitle` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `self`
--

LOCK TABLES `self` WRITE;
/*!40000 ALTER TABLE `self` DISABLE KEYS */;
INSERT INTO `self` VALUES (1,'Gerald Wu\'s Blog','Musings of a Tech Enthusiast','Just another blog for technological tinkering. Focused on custom-built keyboards, hardware mods, Linux setups, and more.<br>\r\nI like spending hours to improve my workflow by seconds.','images/blog.jpg','https://blog.geraldwu.com');
/*!40000 ALTER TABLE `self` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-26  2:28:00
