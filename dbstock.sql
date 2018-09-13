-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `dbstock`;

SET NAMES utf8mb4;

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

INSERT INTO `stockholders` (`stock_id`, `stock_name`, `stock_location`, `stock_description`, `stock_quantity`, `stock_price`, `stock_brand`, `stock_year`, `time_added`, `date_added`) VALUES
(11,	'S26',	'Murcia',	'Gatas',	250,	989.95,	'S26',	'2018',	'14:12:56',	'2018-02-04'),
(12,	'Nido',	'Bacolod',	'Gatas',	100,	50,	'Nido',	'1995',	'14:41:14',	'2018-02-04')
ON DUPLICATE KEY UPDATE `stock_id` = VALUES(`stock_id`), `stock_name` = VALUES(`stock_name`), `stock_location` = VALUES(`stock_location`), `stock_description` = VALUES(`stock_description`), `stock_quantity` = VALUES(`stock_quantity`), `stock_price` = VALUES(`stock_price`), `stock_brand` = VALUES(`stock_brand`), `stock_year` = VALUES(`stock_year`), `time_added` = VALUES(`time_added`), `date_added` = VALUES(`date_added`);

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(150) NOT NULL,
  `mname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `position` varchar(150) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_users` (`user_id`, `fname`, `mname`, `lname`, `email`, `password`, `position`) VALUES
(1,	'John',	'Delfin',	'Doe',	'admin@inventory.dev',	'21232f297a57a5a743894a0e4a801fc3',	'admin'),
(2,	'Jane',	'Delfin',	'Doe',	'user@inventory.dev',	'21232f297a57a5a743894a0e4a801fc3',	'user'),
(3,	'James',	'Delfin',	'Doe',	'company@inventory.dev',	'21232f297a57a5a743894a0e4a801fc3',	'company'),
(6,	'test',	'test',	'test',	'test@inventory.dev',	'21232f297a57a5a743894a0e4a801fc3',	'admin'),
(7,	'test1',	'1test',	'test',	'tes1t@inventory.dev',	'21232f297a57a5a743894a0e4a801fc3',	'company')
ON DUPLICATE KEY UPDATE `user_id` = VALUES(`user_id`), `fname` = VALUES(`fname`), `mname` = VALUES(`mname`), `lname` = VALUES(`lname`), `email` = VALUES(`email`), `password` = VALUES(`password`), `position` = VALUES(`position`);

-- 2018-09-13 16:49:40
