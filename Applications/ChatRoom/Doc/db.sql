CREATE DATABASE `chatroom` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE chatroom;

//用户信息表
Create Table: CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `sex` tinyint(4) DEFAULT '0',
  `mobile` varchar(18) DEFAULT '',
  `username` varchar(100) DEFAULT '',
  `created_time` datetime DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8