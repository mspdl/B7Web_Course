CREATE DATABASE `project_classified` /*!40100 DEFAULT CHARACTER SET utf8 */


CREATE TABLE `adverts` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `id_user` int(11) NOT NULL,
 `id_category` int(11) NOT NULL,
 `title` varchar(100) NOT NULL,
 `description` text NOT NULL,
 `value` float NOT NULL,
 `status` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8


CREATE TABLE `categories` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(100) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8


users	CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8	
