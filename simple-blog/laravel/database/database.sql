create database `simple-blog`;
use `simple-blog`;

CREATE TABLE `user` (
 `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
 `username` varchar(32),
 `password` char(64) NOT NULL,
 `name` varchar(64) NOT NULL,
 `email` varchar(64) NOT NULL,
 `remember_token` varchar(100),
 `created_by` int(11) unsigned,
 `created_at` datetime NOT NULL,
 `updated_at` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

create table `post`(
 `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
 `content` text,
 `title` varchar(512),
 `created_by` int(11) unsigned,
 `created_at` datetime NOT NULL,
 `updated_at` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;