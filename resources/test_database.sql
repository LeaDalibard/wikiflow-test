# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: localhost (MySQL 5.6.38)
# Base de données: test_emploi
# Temps de génération: 2019-11-06 08:38:45 +0000
# ************************************************************

# Affichage de la table address
# ------------------------------------------------------------

DROP TABLE IF EXISTS `address`;

CREATE TABLE `address` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `street` varchar(255) DEFAULT NULL,
  `number` varchar(25) DEFAULT NULL,
  `city` varchar(125) DEFAULT NULL,
  `postal_code` varchar(25) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;

INSERT INTO `address` (`id`, `street`, `number`, `city`, `postal_code`, `country`)
VALUES
	(1,'Avenue de la couronne','236B','Brussels','1050','Belgium'),
	(2,'Rue de la fleur des champs','24','Waterloo','1410','Belgium'),
	(3,'Rue de la montagne','42','Forest','1190','Belgium');

/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(120) DEFAULT NULL,
  `lastname` varchar(120) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `age_range` varchar(30) DEFAULT NULL,
  `age_range_max` varchar(30) DEFAULT NULL,
  `locale` varchar(30) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `birthday` varchar(60) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `role` varchar(50) NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `address_id` int(11) DEFAULT NULL,
  `is_beta` tinyint(4) NOT NULL DEFAULT '0',
  `tutorial` tinyint(1) NOT NULL DEFAULT '0',
  `tutorial_mobile` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(255) NOT NULL,
  `has_custom_avatar` tinyint(1) DEFAULT NULL,
  `email_new_follower` tinyint(1) NOT NULL DEFAULT '1',
  `email_new_recommendation` tinyint(1) NOT NULL DEFAULT '1',
  `notifications_all` tinyint(1) NOT NULL DEFAULT '1',
  `notifications_wisdoc` tinyint(1) NOT NULL DEFAULT '1',
  `notifications_requests` tinyint(1) NOT NULL DEFAULT '1',
  `notifications_invitations` tinyint(1) NOT NULL DEFAULT '1',
  `password` varchar(60) NOT NULL,
  `facebook_user_id` varchar(255) NOT NULL,
  `google_id` varchar(150) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `validation_token` varchar(50) DEFAULT NULL,
  `validated` tinyint(4) NOT NULL DEFAULT '0',
  `last_default_language` char(5) NOT NULL DEFAULT 'en',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  FULLTEXT KEY `name` (`name`,`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `firstname`, `lastname`, `gender`, `age_range`, `age_range_max`, `locale`, `location`, `birthday`, `type`, `role`, `email`, `address_id`, `is_beta`, `tutorial`, `tutorial_mobile`, `avatar`, `has_custom_avatar`, `email_new_follower`, `email_new_recommendation`, `notifications_all`, `notifications_wisdoc`, `notifications_requests`, `notifications_invitations`, `password`, `facebook_user_id`, `google_id`, `remember_token`, `validation_token`, `validated`, `last_default_language`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	(1,'Chris Redaelli','Chris','Redaelli','male','{\"min\":21}',NULL,'en_US','{\"id\":\"107743905912365\",\"name\":\"Ixelles\"}','1991-05-15 00:00:00',0,'admin','email1@gmail.com',1,1,0,1,'597b477014992.jpg',NULL,1,1,1,0,1,1,'$2y$10$en.yyaO0bk0wBk7RqP/d1eZmKMlwtTNd2.ifZGgOiwrRg1VJZ22g.','10208434259801011','116538161960466528745','ZfWAS2kMlwtFqwgzcIGmfMSoefY4ge3sNxVg6AFCoAwY1Um5G3YOm5KhxB5h',NULL,1,'en',NULL,'2015-10-19 10:28:33','2017-07-28 12:17:21'),
	(2,'Maxime Dewelle','Maxime','Dewelle','male','{\"min\":21}',NULL,'en_US','{\"id\":\"110765315613548\",\"name\":\"Bousval, Brabant, Belgium\"}','1983-10-27 00:00:00',1,'admin','email18@gmail.com',2,1,1,1,'59afc906678e0.jpg',NULL,1,1,1,1,1,1,'$2y$10$3CO3cKEjiV1L9YeZt3iIqOYRJlCYngz6vnKPdGbyA10oCG0dDr3pi','','100809309458451892662','PI2cQ4YbENZYMMrKxgaN1FlVNc2X0ukgpb6KhepHTNknrjJ8K3baT7SqPSjR',NULL,1,'en',NULL,'2015-10-19 10:29:44','2017-09-06 10:08:06'),
	(3,'Laurent Pirard','Laurent','Pirard','male','{\"min\":21}',NULL,'en_GB',NULL,NULL,1,'admin','email2@wisdoc.com',1,1,1,1,'3.JPEG',1,1,1,1,1,1,1,'','10153855296529455',NULL,'MsM8CEgCnLIE7kxvn8qMJycxlnZl1DzuQYibvyXwd7fxcqWEAbz0wxMly6bd',NULL,1,'en',NULL,'2016-02-18 15:48:55','2017-07-26 06:28:20'),
	(4,'Sofie Vanderhasselt','Sofie','Vanderhasselt','female','{\"min\":21}',NULL,'en_GB',NULL,NULL,0,'admin','email3@gmail.com',3,1,1,1,'597b318274867.jpg',NULL,1,1,1,1,1,1,'','10208082135917154',NULL,'sT19jLDIhRxxphi23OouxeuPu9dDHpQ0CGir74KlVpZfizNvdv9pWRbiXM0X',NULL,1,'nl',NULL,'2016-02-18 18:49:54','2017-07-28 10:43:47'),
	(5,'Marie Van Cauter','Marie','Van Cauter','female','{\"min\":21}',NULL,'fr_FR',NULL,NULL,0,'user','email4@hotmail.com',1,1,1,1,'582f570794353.jpg',NULL,1,1,1,1,1,1,'','10153800996796893',NULL,'kpcoArFvukcMn3HyHjBGG8s6wHU2LjcfiVbaCXxISZWvIQRXs0WTHiSlphk3',NULL,1,'en',NULL,'2016-02-20 13:43:59','2016-11-18 18:31:19'),
	(6,'Bogdan Laskowski','Bogdan','Laskowski','male','{\"min\":21}',NULL,'en_US',NULL,NULL,0,'user','email16@gmail.com',1,1,1,1,'1476371554.jpg',NULL,1,1,1,1,1,1,'$2y$10$RLB5T1As06RYVxMZ.XU0v.O.2dNQz8DJ7NSBV76A.JuyGyl3PxNuK','968642083200949',NULL,'bIkJ9DiKVxUTTUsmyV08COOnOaPSpXeVguWtEWJ0WmUnkOqJPJ5D5MetXPw2',NULL,1,'fr',NULL,'2016-02-22 13:06:25','2016-10-13 13:12:43'),
	(7,'Simon Biebuyck','Simon','Biebuyck','male',NULL,NULL,NULL,NULL,NULL,0,'user','email15@hotmail.com',1,1,0,0,'',NULL,1,1,1,1,1,1,'','10207761552692490',NULL,NULL,NULL,1,'en',NULL,'2016-02-22 13:06:44','2016-05-24 13:13:42'),
	(8,'Jérôme François','Jérôme','François','male','{\"min\":21}',NULL,'en_US',NULL,NULL,0,'user','salukistre@gmail.com',2,1,1,1,'5835b8181d858.jpg',NULL,1,1,1,1,1,1,'','10156508633660710',NULL,NULL,NULL,1,'en',NULL,'2016-02-23 07:58:52','2016-11-23 14:39:05'),
	(9,'Denis Franchimont','Denis','Franchimont','male','{\"min\":21}',NULL,'fr_FR',NULL,NULL,1,'admin','email5@erasme.ulb.ac.be',1,1,1,1,'59623347a0330.jpg',NULL,1,1,1,1,1,1,'$2y$10$fpVqFQ94J9rs6DYWdAM5dulf8E8blqZJyOjpM1.cHgK7i.dfAQB.a','937124319728914',NULL,'dJRaUC1tAFMAZLPl7B9kLa55zoh5UgZc9jSjqoiiWAynufCb4YzrDmurDvLP',NULL,1,'en',NULL,'2016-02-25 14:10:11','2017-07-09 11:44:40'),
	(10,'Xavier De Poorter','Xavier','De Poorter','male',NULL,NULL,NULL,NULL,NULL,0,'user','email6@skynet.be',1,1,1,0,'1456844769.jpg',NULL,1,1,1,1,1,1,'$2y$10$hYt0jMPbB8QPkbGSNNopieCzbb7DXx7oZcB5KNLirDDNzCeZSRJ5y','1113190938726156',NULL,NULL,NULL,1,'fr',NULL,'2016-03-01 14:06:09','2016-05-19 05:27:34'),
	(11,'Dolores Sobrino','Dolores','Sobrino','female','{\"min\":21}',NULL,'fr_FR',NULL,NULL,0,'user','email7@hotmail.com',2,1,1,1,'58f752498866b.jpg',NULL,1,1,1,1,1,1,'$2y$10$jyeTAuuUJXb4t/2AmymFsegRw3J3iAXySZW1w4FV5yPA4aGsauNMC','10153408955251439',NULL,'0JnlrzyqdvE7Dtks13jo0ZXItA5HAaBfYmkKgehpSxtinBxYhoeDwiOAA1xS',NULL,1,'fr',NULL,'2016-03-04 09:50:14','2017-04-19 10:04:25'),
	(12,'Hugo Franchimont','Hugo','Franchimont','male','{\"min\":21}',NULL,'fr_FR',NULL,NULL,0,'user','email17@gmail.com',1,1,1,0,'58f60d730e06c.jpg',NULL,1,1,1,1,1,1,'$2y$10$izgdydjnm6rMjy4KQffnfu5TK5oX2Rmv6zhve/Gh4EMcnAM/KTzv6','1677770235823332',NULL,'Pi5tgVoVj3eIoLLYnPwVO0OPAjVqSRvwu98UEcNFfupEK9CpidSyAwF6H8RJ',NULL,1,'fr',NULL,'2016-03-08 21:39:15','2017-04-18 10:58:27'),
	(15,'Christian Dewelle','Christian','Dewelle','male','{\"min\":21}',NULL,'fr_FR',NULL,NULL,0,'user','email8@cpwat.org',3,1,1,1,'587519a2c9ff3.jpg',NULL,1,1,1,1,1,1,'$2y$10$0/tV7hsSFeMURNcwBT0aPuMOdLh6hpUDX5ciOEaegd6eAJY0E3juW','10208964487409773',NULL,'FSjxJL78aWPfL5cEhUDyz9NQeuBogq5rE0p8nlIBNra0iD183wV2aXjmWt93',NULL,1,'en',NULL,'2016-03-15 06:17:35','2017-05-31 12:08:35'),
	(16,'Frédéric Pouchain','Frédéric','Pouchain','male',NULL,NULL,NULL,NULL,NULL,0,'user','email9@whitestone.lu',1,1,0,0,'',NULL,1,1,1,1,1,1,'$2y$10$uOxa2j48jVCB0ruqIMmoju.jOJqxHYa3yYvlDofljBSGIVHWn37v.','',NULL,NULL,NULL,1,'en',NULL,'2016-03-16 08:42:57','2016-03-16 08:45:31'),
	(17,'Frank Delruelle','Frank','Delruelle','male',NULL,NULL,NULL,NULL,NULL,0,'user','email10@wisdoc.co',1,1,1,0,'',NULL,1,1,1,1,1,1,'$2y$10$3CO3cKEjiV1L9YeZt3iIqOYRJlCYngz6vnKPdGbyA10oCG0dDr3pi','',NULL,NULL,NULL,1,'en',NULL,'2016-03-18 11:36:30','2016-06-12 05:43:20'),
	(18,'Brigitte Delabie ','Brigitte','Delabie','female',NULL,NULL,NULL,NULL,NULL,0,'user','email11@hotmail.com',1,1,1,1,'58809e498b7bb.jpg',NULL,1,1,1,1,1,1,'$2y$10$p2J5DGNizLjl1mbXVR53E.XU8Orhw3iQgY4fiulBl3KjHbtct1W02','10208909719050132',NULL,'tX8Dm7hHcXwqZWPXrOPELmHgviSO8gThV4uRp1s1Qyjx5VJdPbpq5T9Fh00W',NULL,1,'en',NULL,'2016-03-20 15:24:11','2017-01-19 10:08:57'),
	(20,'Fabrice Schröder','Fabrice','Schröder','male','{\"min\":21}',NULL,'nl_NL',NULL,NULL,0,'user','email12@skynet.be',1,1,1,0,'1473104268.jpg',NULL,1,1,1,1,1,1,'$2y$10$f3WHIt/.n0t45w9Q/6u7WOE0yb7DzbeeITRxplGck/1lVusrNrQdC','10208927988342988',NULL,'BM0H8BICixfj9EfKt3MW2y1S89TxFeqOe9JwG0BWKu7LpNTGBkwicB9vMZxc',NULL,1,'nl',NULL,'2016-03-21 08:16:22','2016-09-05 18:18:57'),
	(21,'Sean McKenzie','Sean','McKenzie','male',NULL,NULL,NULL,NULL,NULL,0,'user','email14@gmail.com',3,0,0,0,'',NULL,1,1,1,1,1,1,'$2y$10$8XWodXQDMaNRPhUs/.E4F.4xbpv8RZ2k8FNzikkpy/WYVcGoKuCrS','',NULL,NULL,NULL,1,'en',NULL,'2016-03-22 08:25:41','2016-03-22 08:25:41'),
	(22,'olivier lohest','Lohest','Olivier','male','{\"min\":21}',NULL,'fr_FR',NULL,NULL,0,'user','email13@hotmail.com',1,1,1,1,'59620edca36ac.jpg',NULL,1,1,1,1,1,1,'$2y$10$BPO954BSgmpQEv2tFtMXhOW9H2R1C6BorZ2K5k3YA0Poz/oSEt1SC','10153879469640625',NULL,'K4117TswMDvNbZZ3VZn91l6LEtzGPa5FtunRMeL07nYC2vfFWZBtwDK0rzhx',NULL,1,'en',NULL,'2016-03-22 11:26:51','2017-07-09 09:09:17');
	

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

