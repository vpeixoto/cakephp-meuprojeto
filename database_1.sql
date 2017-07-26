DROP DATABASE `projeto1`;
CREATE DATABASE `projeto1`;

use `projeto1`;

DROP TABLE IF EXISTS `functions`;

CREATE TABLE `setors`(
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`setor_name` varchar(100) NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`setor_id` int(11) NOT NULL,
	`username` varchar(100) NOT NULL,
	`email` varchar(100) NOT NULL,
	`password` varchar(100) NOT NULL,
	`obs` varchar(100) NOT NULL,
	`actived` varchar(100) NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;