-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `dbstock`;
CREATE DATABASE `dbstock` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `dbstock`;

DROP TABLE IF EXISTS `stockholders`;
CREATE TABLE `stockholders` (
  `stock_id` int(5) NOT NULL AUTO_INCREMENT,
  `stock_name` varchar(250) NOT NULL,
  `stock_location` varchar(250) NOT NULL,
  `stock_description` varchar(250) NOT NULL,
  `stock_quantity` int(50) NOT NULL,
  `stock_price` double NOT NULL,
  `stock_brand` varchar(250) NOT NULL,
  `stock_year` year(4) NOT NULL,
  `time_added` time NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `stockholders` (`stock_id`, `stock_name`, `stock_location`, `stock_description`, `stock_quantity`, `stock_price`, `stock_brand`, `stock_year`, `time_added`, `date_added`) VALUES
(10,	'milo',	'Bacolod',	'milo',	121,	250,	'milo',	'2018',	'06:14:56',	'2018-02-04'),
(11,	'S26',	'Murcia',	'Gatas',	250,	989.95,	'S26',	'2018',	'14:12:56',	'2018-02-04'),
(12,	'Nido',	'Bacolod',	'Gatas',	100,	50,	'Nido',	'1995',	'14:41:14',	'2018-02-04');

-- 2018-02-04 06:46:21

