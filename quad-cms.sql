-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.41-log - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.2.0.4972
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных quad-cms
CREATE DATABASE IF NOT EXISTS `quad-cms` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `quad-cms`;


-- Дамп структуры для таблица quad-cms.quad_im
CREATE TABLE IF NOT EXISTS `quad_im` (
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `date_time` datetime NOT NULL,
  `unread` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы quad-cms.quad_im: ~3 rows (приблизительно)
DELETE FROM `quad_im`;
/*!40000 ALTER TABLE `quad_im` DISABLE KEYS */;
INSERT INTO `quad_im` (`from_id`, `to_id`, `text`, `date_time`, `unread`) VALUES
	(2, 1, 'test', '2015-06-25 11:17:30', 1),
	(2, 1, 'eqweqweqe', '2015-06-25 11:18:01', 0),
	(1, 2, 'wqeqeqe', '2015-06-25 11:19:05', 1),
	(2, 1, 'asfasfffff', '2015-06-25 11:18:00', 1);
/*!40000 ALTER TABLE `quad_im` ENABLE KEYS */;


-- Дамп структуры для таблица quad-cms.quad_platoon
CREATE TABLE IF NOT EXISTS `quad_platoon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `class` int(1) NOT NULL DEFAULT '1',
  `tech` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы quad-cms.quad_platoon: 9 rows
DELETE FROM `quad_platoon`;
/*!40000 ALTER TABLE `quad_platoon` DISABLE KEYS */;
INSERT INTO `quad_platoon` (`id`, `username`, `class`, `tech`) VALUES
	(1, 'ss0snaa', 1, 1),
	(2, 'user', 2, 2),
	(3, 'user2', 3, 3),
	(4, 'user3', 4, 4),
	(5, 'user4', 1, 5),
	(6, 'user5', 2, 6),
	(7, 'user6', 3, 7),
	(8, 'user7', 4, 8),
	(9, 'user8', 1, 9);
/*!40000 ALTER TABLE `quad_platoon` ENABLE KEYS */;


-- Дамп структуры для таблица quad-cms.quad_platoon_bak
CREATE TABLE IF NOT EXISTS `quad_platoon_bak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `class` int(1) NOT NULL DEFAULT '1',
  `tech` varchar(50) NOT NULL DEFAULT 'tank',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Дамп данных таблицы quad-cms.quad_platoon_bak: 73 rows
DELETE FROM `quad_platoon_bak`;
/*!40000 ALTER TABLE `quad_platoon_bak` DISABLE KEYS */;
INSERT INTO `quad_platoon_bak` (`id`, `username`, `class`, `tech`) VALUES
	(1, 'MagicalGirI', 1, 'tank'),
	(2, 'MrFosbery', 1, 'tank'),
	(3, 'V4DYA', 1, 'tank'),
	(4, 'delprofile', 1, 'tank'),
	(5, 'Schemov', 1, 'tank'),
	(6, 'iDeadlySlayer', 1, 'tank'),
	(7, 'KeyMag', 1, 'tank'),
	(8, 'He_Cola', 1, 'tank'),
	(9, 'yodamustdie', 1, 'tank'),
	(10, 'Dimasdv', 1, 'tank'),
	(11, 'maletinseregy', 1, 'tank'),
	(12, 'Sobatieren', 1, 'tank'),
	(13, 'v_UnreaL_MaN_v', 1, 'tank'),
	(14, 'oops_Roxrite', 1, 'tank'),
	(15, 'Spiyck', 1, 'tank'),
	(16, 'romanntic', 1, 'tank'),
	(17, 'Suokat', 1, 'tank'),
	(18, 'Zombyachok', 1, 'tank'),
	(19, 'TheAciDouS', 1, 'tank'),
	(20, 'Frame53YY', 1, 'tank'),
	(21, 'StenlyMarsh', 1, 'tank'),
	(22, 'ChopaBird', 1, 'tank'),
	(23, 'rR_Kirill_Rr', 1, 'tank'),
	(24, 'll-Mandel-ll', 1, 'tank'),
	(25, 'Vovan4235', 1, 'tank'),
	(26, 'InVibeMe', 1, 'tank'),
	(27, 'oops_Tranqulity-', 1, 'tank'),
	(28, 'Wlyhout', 1, 'tank'),
	(29, 'LightingBullet', 1, 'tank'),
	(30, 'Necromancer_Al', 1, 'tank'),
	(31, 'BattleTimScampi', 1, 'tank'),
	(32, 'Toll_RouT', 1, 'tank'),
	(33, 'GreshnikDmitry', 1, 'tank'),
	(34, 'ExtonArts', 1, 'tank'),
	(35, 'ss0snaa', 1, 'tank'),
	(36, 'Electro_Pad_51', 1, 'tank'),
	(37, 'pycckiy_zver', 1, 'tank'),
	(38, 'Sosok_Kozi', 1, 'tank'),
	(39, 'HuntStarted', 1, 'tank'),
	(40, 'GroudBoX', 1, 'tank'),
	(41, 'ARHAIL', 1, 'tank'),
	(42, 'Serlanselap', 1, 'tank'),
	(43, 'AinexID', 1, 'tank'),
	(44, 'AZOXA1', 1, 'tank'),
	(45, 'iGADs', 1, 'tank'),
	(46, 'Xa3e58RuS', 1, 'tank'),
	(47, 'REND3ZOOK', 1, 'tank'),
	(48, 'fedot_k1lla', 1, 'tank'),
	(49, 'uNFixed_007', 1, 'tank'),
	(50, 'triadskiy', 1, 'tank'),
	(51, 'Potaikin', 1, 'tank'),
	(52, '0-Drova-0', 1, 'tank'),
	(53, 'Preevatir', 1, 'tank'),
	(54, 'VR0Tkompot', 1, 'tank'),
	(55, 'Dzeu13', 1, 'tank'),
	(56, 'Rasl37', 1, 'tank'),
	(57, 'Krabotron', 1, 'tank'),
	(58, 'iKouga89', 1, 'tank'),
	(59, 'Epicmello', 1, 'tank'),
	(60, 'TheAngryNazar', 1, 'tank'),
	(61, 'PoloteI-Ichik', 1, 'tank'),
	(62, 'NerSeven', 1, 'tank'),
	(63, 'Bumshine', 1, 'tank'),
	(64, 'RUSSNATOR', 1, 'tank'),
	(65, 'IZPro_93', 1, 'tank'),
	(66, 'Metall_play', 1, 'tank'),
	(67, 'DeadlyRider43', 1, 'tank'),
	(68, 'bakub2012', 1, 'tank'),
	(69, 'Shad0wl_lSnIpeR', 1, 'tank'),
	(70, 'DsvMisa', 1, 'tank'),
	(71, 'mag_BLR', 1, 'tank'),
	(72, 'holzt1k', 1, 'tank'),
	(73, 'Vasylitch', 1, 'tank');
/*!40000 ALTER TABLE `quad_platoon_bak` ENABLE KEYS */;


-- Дамп структуры для таблица quad-cms.quad_role
CREATE TABLE IF NOT EXISTS `quad_role` (
  `id` tinyint(1) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Дамп данных таблицы quad-cms.quad_role: 3 rows
DELETE FROM `quad_role`;
/*!40000 ALTER TABLE `quad_role` DISABLE KEYS */;
INSERT INTO `quad_role` (`id`, `role`) VALUES
	(1, 'user'),
	(2, 'administartor'),
	(3, 'moderator');
/*!40000 ALTER TABLE `quad_role` ENABLE KEYS */;


-- Дамп структуры для таблица quad-cms.quad_servers
CREATE TABLE IF NOT EXISTS `quad_servers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `server_name` varchar(250) NOT NULL,
  `server_link` text NOT NULL,
  `game` varchar(50) NOT NULL DEFAULT 'bf4',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы quad-cms.quad_servers: 2 rows
DELETE FROM `quad_servers`;
/*!40000 ALTER TABLE `quad_servers` DISABLE KEYS */;
INSERT INTO `quad_servers` (`id`, `server_name`, `server_link`, `game`) VALUES
	(1, 'QuaD Server | AllMaps | Conquest', 'http://battlelog.battlefield.com/bf4/ru/servers/show/pc/be271728-bf83-49db-8ba1-2d2eef357c02/QuaD-server-AllMaps-Conquest/', 'bf4'),
	(2, 'QuaD-Server-Domination', 'http://battlelog.battlefield.com/bf4/ru/servers/show/pc/34ab7171-f450-4212-9d6b-d30822a9fbf8/QuaD-Server-Domination/', 'bf4');
/*!40000 ALTER TABLE `quad_servers` ENABLE KEYS */;


-- Дамп структуры для таблица quad-cms.quad_tech
CREATE TABLE IF NOT EXISTS `quad_tech` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL DEFAULT '0',
  `model` varchar(50) NOT NULL DEFAULT '0',
  `icon` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `model` (`model`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы quad-cms.quad_tech: 9 rows
DELETE FROM `quad_tech`;
/*!40000 ALTER TABLE `quad_tech` DISABLE KEYS */;
INSERT INTO `quad_tech` (`id`, `type`, `model`, `icon`) VALUES
	(1, 'Ударный вертолет', 'AH-1Z VIPER', '<img src="../../img/tech/ah-1z_viper.png" alt="AH-1Z VIPER" width="70px">'),
	(2, 'Вертолет разведки', 'Z-11W', '<img src="../../img/tech/z-11w.png" alt="Z-11W" width="70px">'),
	(3, 'Самолет-невидимка', 'F-35', '<img src="../../img/tech/f-35.png" alt="F-35" width="70px">'),
	(4, 'Ударный самолет', 'Q-5 FANTAN', '<img src="../../img/tech/q-5_fantan.png" alt="Q-5 FANTAN" width="70px">'),
	(5, 'ПВО', '9К22 «ТУНГУСКА-М»', '<img src="../../img/tech/9k22_tunguska-m.png" alt="9К22 «ТУНГУСКА-М»" width="70px">'),
	(6, 'Водный транспорт', 'DV-15', '<img src="../../img/tech/dv-15.png" alt="DV-15" width="70px">'),
	(7, 'БМП', 'LAV-25M', '<img src="../../img/tech/lav-25m.png" alt="LAV-25M" width="70px">'),
	(8, 'Основные танки', 'Т-90А', '<img src="../../img/tech/t-90a.png" alt="Т-90А" width="70px">'),
	(9, 'Транспортный вертолет', 'UH-1Y «ВЕНОМ»', '<img src="../../img/tech/uh-1y_venom.png" alt="UH-1Y «ВЕНОМ»" width="70px">');
/*!40000 ALTER TABLE `quad_tech` ENABLE KEYS */;


-- Дамп структуры для таблица quad-cms.quad_users
CREATE TABLE IF NOT EXISTS `quad_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '1',
  `battlelog_link` varchar(500) DEFAULT NULL,
  `vk_link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы quad-cms.quad_users: 9 rows
DELETE FROM `quad_users`;
/*!40000 ALTER TABLE `quad_users` DISABLE KEYS */;
INSERT INTO `quad_users` (`id`, `username`, `password`, `email`, `role`, `battlelog_link`, `vk_link`) VALUES
	(1, 'ss0snaa', '5ca56bb94962d942e51a2964a392365079b556ecq1p3w5o7a9ls0k8z6m4x2n', 'victorsosnovskiy@gmail.com', 2, 'http://battlelog.battlefield.com/bf4/ru/soldier/ss0snaa/stats/842816043/pc/', 'http://vk.com/ss0snaa'),
	(2, 'user', 'b1b5fef02c57de0cacfa694ecfa56251b1dce488q1p3w5o7a9ls0k8z6m4x2n', 'user@user.com', 3, 'http://battlelog.battlefield.com/bf4/ru/soldier/ss0snaa/stats/842816043/pc/', NULL),
	(3, 'user2', 'b1b5fef02c57de0cacfa694ecfa56251b1dce488q1p3w5o7a9ls0k8z6m4x2n', 'user2@user.com', 1, 'http://battlelog.battlefield.com/bf4/ru/soldier/ss0snaa/stats/842816043/pc/', NULL),
	(4, 'user3', 'b1b5fef02c57de0cacfa694ecfa56251b1dce488q1p3w5o7a9ls0k8z6m4x2n', 'user3@user.com', 1, 'http://battlelog.battlefield.com/bf4/ru/soldier/ss0snaa/stats/842816043/pc/', NULL),
	(5, 'user4', 'b1b5fef02c57de0cacfa694ecfa56251b1dce488q1p3w5o7a9ls0k8z6m4x2n', 'user4@user.com', 1, 'http://battlelog.battlefield.com/bf4/ru/soldier/ss0snaa/stats/842816043/pc/', NULL),
	(6, 'user5', 'b1b5fef02c57de0cacfa694ecfa56251b1dce488q1p3w5o7a9ls0k8z6m4x2n', 'user5@user.com', 1, 'http://battlelog.battlefield.com/bf4/ru/soldier/ss0snaa/stats/842816043/pc/', NULL),
	(7, 'user6', 'b1b5fef02c57de0cacfa694ecfa56251b1dce488q1p3w5o7a9ls0k8z6m4x2n', 'user6@user.com', 1, 'http://battlelog.battlefield.com/bf4/ru/soldier/ss0snaa/stats/842816043/pc/', NULL),
	(8, 'user7', 'b1b5fef02c57de0cacfa694ecfa56251b1dce488q1p3w5o7a9ls0k8z6m4x2n', 'user7@user.com', 1, 'http://battlelog.battlefield.com/bf4/ru/soldier/ss0snaa/stats/842816043/pc/', NULL),
	(9, 'user8', 'b1b5fef02c57de0cacfa694ecfa56251b1dce488q1p3w5o7a9ls0k8z6m4x2n', 'user8@user.com', 1, 'http://battlelog.battlefield.com/bf4/ru/soldier/ss0snaa/stats/842816043/pc/', NULL);
/*!40000 ALTER TABLE `quad_users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
