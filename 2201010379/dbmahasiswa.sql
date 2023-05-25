/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.1.16-MariaDB : Database - dbmahasiswa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbmahasiswa` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbmahasiswa`;

/*Table structure for table `tb_mhs` */

DROP TABLE IF EXISTS `tb_mhs`;

CREATE TABLE `tb_mhs` (
  `id_mhs` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `no_tlp` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `prodi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tb_mhs` */

insert  into `tb_mhs`(`id_mhs`,`nama`,`nim`,`no_tlp`,`email`,`alamat`,`jurusan`,`prodi`) values 
(1,'Julian Murphy','220101001','03611234','leomurphy@gmail.com','Jakarta','DKV','DKV'),
(2,'Eldhin Rahadian Putra','220101002','03612451','celiboy@gmail.com','Bekasi','Sistem Komputer','Sistem Komputer'),
(3,'Rafly Alvareza Sudrajat','220101003','03612459','pai@gmail.com','Jawa Barat','Sistem Informasi','Sistem Informasi'),
(4,'Ahmad Abdurrahman','220101004','03612348','maungzy@gmail.com','Pontianak','Sistem Komputer','Sistem Komputer'),
(5,'Kharisma Cahaya Putri','220101005','03610321','kayes@gmail.com','Bandung','KAB','Teknik Informatika'),
(6,'Muhhamad Julian Ardiansyah','220101006','03614785','udilsurbakti@gmail.com','Bandung','MTI','Teknik Informatika'),
(7,'Vivi Indrawaty','220101007','03614561','vivian@gmail.com','Depok','DKV','DKV'),
(8,'Melinda Rohita','220101008','03614571','meyden@gmail.com','Jambi','KAB','Teknik Informatika'),
(9,'Hengky Gunawan','220101009','03615427','kyy@gmail.com','Pontianak','MTI','Teknik Informatika'),
(10,'Vonny Felicia','220101010','03612487','vonzy@gmail.com','Bogor','KAB','Teknik Informatika'),
(11,'Muhammad Ridwa','220101011','03614754','wannn@gmail.com','Pontianak','Sistem Komputer','Sistem Komputer'),
(12,'Gebrielle Ann','220101012','03612301','gebiann@gmail.com','Jakarta','KAB','Teknik Informatika'),
(14,'Syauki Fauzan Sumarno','220101013','03618724','ninonino@gmail.com','Sukabumi','MTI','Teknik Informatika'),
(16,'Viorenita Sutanto','220101014','03614579','vior@gmail.com','Jakarta','KAB','Teknik Informatika');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `passkey` varchar(255) DEFAULT NULL,
  `iduser` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id`,`nama`,`email`,`username`,`passkey`,`iduser`) values 
(1,'Julian Murphy','leomurphy@gmail.com','Leomurphy','202cb962ac59075b964b07152d234b70','673b268d234e78681617a1b6b8459822'),
(2,'Melinda Rohita','meyden@gmail.com','meyden','202cb962ac59075b964b07152d234b70','5c09162a3a868c2442efce9c1341820b');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
