-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `users` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `pass` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `name`, `pass`) VALUES
(1,	'N.E.X.T.',	'5d2d698acd0009635427b62244a17c5adb574dde'),
(2,	'A',	'51abb9636078defbf888d8457a7c76f85c8f114c'),
(11,	'ito',	'198d1cf31b5d436561135048098e519f3d8646e9'),
(12,	'ia',	'198d1cf31b5d436561135048098e519f3d8646e9'),
(13,	'ut',	'f09d30ff3c97f900661aa6c62a70501fd9049b92'),
(14,	'moimoi',	'51abb9636078defbf888d8457a7c76f85c8f114c'),
(15,	'yeah',	'51abb9636078defbf888d8457a7c76f85c8f114c'),
(16,	'it',	'51abb9636078defbf888d8457a7c76f85c8f114c'),
(17,	'meme',	'51abb9636078defbf888d8457a7c76f85c8f114c'),
(18,	'hiho',	'51abb9636078defbf888d8457a7c76f85c8f114c'),
(19,	'didi',	'51abb9636078defbf888d8457a7c76f85c8f114c'),
(20,	'hiho',	'51abb9636078defbf888d8457a7c76f85c8f114c'),
(21,	'yaya',	'51abb9636078defbf888d8457a7c76f85c8f114c'),
(22,	'end_time7',	'7159d7f9d30b14607a459d1683177731d07736de'),
(23,	'test_trial',	'1767ffc360a0c64d5ddf32bad8972f3a5ded574e');

-- 2016-12-13 21:47:09
