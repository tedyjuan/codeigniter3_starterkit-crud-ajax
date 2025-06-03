/*
SQLyog Ultimate v10.42 
MySQL - 8.0.30 : Database - crud_ajax
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `tbl_agama` */

CREATE TABLE `tbl_agama` (
  `incr` int NOT NULL AUTO_INCREMENT,
  `id_agama` varchar(10) DEFAULT NULL,
  `nama_agama` varchar(300) DEFAULT NULL,
  `dtm_create` datetime DEFAULT NULL,
  `dtm_update` datetime DEFAULT NULL,
  PRIMARY KEY (`incr`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tbl_agama` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
