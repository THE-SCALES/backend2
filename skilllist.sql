-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `newskilllist` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `newskilllist`;

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
  `comment` varchar(40) NOT NULL,
  UNIQUE KEY `id` (`id`,`music`,`difficulty`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `skilllist` (`id`, `pid`, `music`, `difficulty`, `skillrate`, `skillpoint`, `score`, `scorerate`, `max`, `comment`) VALUES
(0,	1,	'Agony for Glory',	'HARD',	76,	674.2,	4409,	100,	-522.2,	''),
(22,	15,	'Agony for Glory',	'W-HARD',	74,	138.3,	5000,	93.48,	9.7,	''),
(22,	2,	'Emblem of the Moon',	'HARD',	78,	155.3,	5352,	99.55,	0.7,	''),
(22,	1,	'Emblem of the Moon',	'W-HARD',	78,	155.5,	5438,	99.67,	0.5,	''),
(22,	3,	'Oh My Jam',	'W-HARD',	77,	153.7,	4933,	99.8,	0.3,	''),
(22,	12,	'アネモイティエライ',	'HARD',	71,	141.8,	4270,	99.86,	0.2,	''),
(22,	13,	'アネモイティエライ',	'W-HARD',	71,	141.3,	4695,	99.53,	0.7,	''),
(22,	8,	'Apocalypse',	'HARD',	75,	149.9,	5619,	99.93,	0.1,	''),
(22,	4,	'Apocalypse',	'W-HARD',	76,	152,	5861,	100,	0,	''),
(22,	6,	'Towards The Horizon',	'HARD',	76,	151.3,	5025,	99.52,	0.7,	''),
(22,	11,	'Towards The Horizon',	'W-HARD',	72,	142.6,	4196,	99.06,	1.4,	''),
(22,	9,	'DAWN OF FALCON',	'HARD',	74,	147.2,	4538,	99.47,	0.8,	''),
(22,	10,	'Myth Collapse',	'HARD',	73,	145.9,	5109,	99.92,	0.1,	''),
(22,	14,	'Requiem of Lament',	'W-HARD',	70,	140,	3956,	100,	0,	'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(22,	16,	'Nostalgic Magica',	'HARD',	59,	118,	3963,	100,	0,	''),
(22,	7,	'DAWN OF FALCON',	'W-HARD',	75,	150,	4765,	100,	0,	''),
(22,	5,	'Agony for Glory',	'HARD',	76,	152,	4409,	100,	0,	''),
(22,	18,	'風詠之舞～カゼヨミノマイ',	'W-HARD',	48,	71.9,	2000,	74.93,	24.1,	''),
(22,	17,	'黒紅掬い',	'HARD',	43,	86,	2284,	100,	0,	'');

-- 2016-12-13 21:45:56
