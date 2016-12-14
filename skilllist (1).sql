-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `skilllist` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `skilllist`;

CREATE TABLE `skilllist` (
  `id` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '1',
  `music` varchar(50) DEFAULT NULL,
  `difficulty` varchar(7) DEFAULT NULL,
  `skillrate` tinyint(2) DEFAULT '1',
  `skillpoint` float DEFAULT '1',
  `score` smallint(4) DEFAULT '1',
  `scorerate` float DEFAULT '1',
  `max` float DEFAULT '1',
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `skilllist` (`id`, `pid`, `music`, `difficulty`, `skillrate`, `skillpoint`, `score`, `scorerate`, `max`, `comment`) VALUES
(0,	1,	'Ignited Night',	'HARD',	79,	7786.7,	2200,	98.57,	113.3,	''),
(0,	1,	'伐折羅 -vajra-',	'HARD',	88,	8702.4,	3300,	98.89,	97.6,	''),
(22,	9,	'アイネクライネ',	'HARD',	59,	117.9,	3795,	99.95,	0.1,	''),
(22,	1,	'黒点',	'HARD',	78,	155.4,	5400,	99.63,	0.6,	''),
(22,	2,	'アルストロメリア',	'W-HARD',	74,	147.4,	5002,	99.56,	0.6,	''),
(22,	4,	'アルストロメリア',	'HARD',	71,	141.9,	4650,	99.96,	0.1,	''),
(22,	5,	'KOROBUSHKA (Ryu☆Remix)',	'W-HARD',	70,	138.8,	4305,	99.17,	1.2,	''),
(22,	8,	'KOROBUSHKA (Ryu☆Remix)',	'HARD',	60,	119.9,	3568,	99.94,	0.1,	''),
(22,	10,	'ラクガキスト',	'HARD',	62,	105.4,	4000,	85.03,	18.6,	''),
(22,	6,	'ガラクタネバーランド',	'HARD',	62,	124,	4107,	100,	0,	''),
(22,	7,	'Preserved Roses',	'W-HARD',	61,	122,	3154,	100,	0,	''),
(22,	3,	'DRAGON KILLER',	'HARD',	72,	144,	3652,	100,	0,	'');

-- 2016-12-13 21:46:48
