CREATE DATABASE `soultanieh-prod` DEFAULT CHARACTER SET utf8;

USE `soultanieh-prod`;

CREATE TABLE IF NOT EXISTS `user` (
  `email` char(50) NOT NULL,
  `creation_timestamp` datetime NOT NULL,
  `name` char(50) NOT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB;
