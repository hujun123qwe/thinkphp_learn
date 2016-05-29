-- --------------------------------------------------------

--
-- 表的结构 `ahut_user`
--
DROP TABLE IF EXISTS `ahut_user`;
CREATE TABLE `ahut_user` (
  `user_id` smallint(6) unsigned NOT NULL auto_increment,
  `student_id` int(10) unsigned NOT NULL default '0',
  `user_name` varchar(60) NOT NULL default '',
  `user_type` tinyint(1) NOT NULL default '0',
  `email` varchar(60) NOT NULL default '',
  `password` varchar(32) NOT NULL default '',
  `address` varchar(128) default '安徽工业大学',
  `add_time` int(11) NOT NULL default '0',
  `last_login` int(11) NOT NULL default '0',
  `last_ip` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`user_id`),
  KEY `user_name` (`user_name`),
  KEY `student_id` (`student_id`)
);


-- --------------------------------------------------------

--
-- 表的结构 `ahut_credit`
--

DROP TABLE IF EXISTS `ahut_credit`;
CREATE TABLE `ahut_credit` (
  `credit_id` mediumint(8) unsigned NOT NULL auto_increment,
  `cat_id` smallint(5) NOT NULL default '0',
  `title` varchar(150) NOT NULL default '',
  `content` longtext NOT NULL,
  `user_id` tinyint(1) NOT NULL default '0',
  `is_open` tinyint(1) unsigned NOT NULL default '1',
  `add_time` int(10) unsigned NOT NULL default '0',
  `file_url` varchar(255) NOT NULL default '',
  `is_verify` tinyint(1) NOT NULL default '0',
  `verify_time` int(10) NOT NULL default '0',
  PRIMARY KEY  (`credit_id`),
  KEY `cat_id` (`cat_id`)
);

-- --------------------------------------------------------

--
-- 表的结构 `ahut_credit_cat`
--

DROP TABLE IF EXISTS `ahut_credit_cat`;
CREATE TABLE `ahut_credit_cat` (
  `credit_cat_id` smallint(5) NOT NULL auto_increment,
  `credit_name` varchar(255) NOT NULL default '',
  `credit_type` tinyint(1) unsigned NOT NULL default '1',
  `credit_discrip` longtext,
  PRIMARY KEY  (`credit_cat_id`),
  KEY `credit_type` (`credit_type`)	
);

-- --------------------------------------------------------

--
-- 表的结构 `ahut_logs`
--

DROP TABLE IF EXISTS `ahut_logs`;
CREATE TABLE `ahut_logs` (
	`log_id` int(10) unsigned NOT NULL auto_increment,
	`log_type` tinyint(1) unsigned NOT NULL default '0',
	`log_auth` tinyint(1) unsigned NOT NULL default '0',
	`credit_id` mediumint(8) unsigned NOT NULL default '0',
	`operate_time` int(10) unsigned NOT NULL default '0',
	PRIMARY KEY (`log_id`),
	KEY `credit_id` (`credit_id`)
);

-- --------------------------------------------------------

--
-- 表的结构 `ahut_credit_record`
--

DROP TABLE IF EXISTS `ahut_credit_record`;
CREATE TABLE `ahut_credit_record`(
	`record_id` mediumint(8) unsigned NOT NULL auto_increment,
	`credit_id` mediumint(8) unsigned NOT NULL default '0',
	`credit_record` tinyint(3) unsigned NOT NULL default '0',
	PRIMARY KEY (`record_id`),
	KEY `credit_id` (`credit_id`)
);


