

--
-- 表的结构 `ahut_application`
--

CREATE TABLE IF NOT EXISTS `ahut_application` (
  `item_id` int(6) unsigned NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `item_status` tinyint(1) NOT NULL DEFAULT '0',
  `user_name` varchar(128) NOT NULL DEFAULT '',
  `student_id` int(10) unsigned NOT NULL DEFAULT '0',
  `academy` varchar(128) NOT NULL DEFAULT '哪学院？ ',
  `iclass` varchar(128) NOT NULL DEFAULT ' 几班的？',
  `phone` int(12) unsigned NOT NULL DEFAULT '0',
  `group` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `upload_file` varchar(128) NOT NULL
) 

--
-- 转存表中的数据 `ahut_application`
--

INSERT INTO `ahut_application` (`item_id`, `item_name`, `item_type`, `item_status`, `user_name`, `student_id`, `academy`, `iclass`, `phone`, `group`, `grade`, `upload_file`) VALUES
(1, 'fewewdfew', 1, 0, '23ewfewfewf', 123, '123fewfewfew', '12312ewfewfew', 312312, 3, 1, ''),
(2, '大学生诚信项目是ixnajisdie', 0, 0, 'HUJUN', 123, 'HFE', '信122班', 2147483647, 1, 1, ''),
(3, '大学生诚信项目是ixnajisdie', 0, 0, 'HUJUN', 123, 'HFE', '信122班', 2147483647, 1, 1, ''),
(4, '等级的英文_等级翻译_等级英语怎么说_海词词典', 0, 0, '胡军', 129084213, '海词词典', '信122班', 2147483647, 1, 1, ''),
(5, 'gtrgtrgtr', 0, 0, '23', 123, '123', '12312', 312312, 1, 1, ''),
(6, 'ew', 0, 0, 'ew', 12, 'we', 'we', 23, 3, 1, './Uploads/2016-06-01/574e4cdd9f636.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `ahut_credits`
--

CREATE TABLE IF NOT EXISTS `ahut_credits` (
  `credits_id` int(8) unsigned NOT NULL,
  `credits_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `item_id` int(8) unsigned NOT NULL DEFAULT '0',
  `content` longtext NOT NULL,
  `user_id` int(8) unsigned NOT NULL DEFAULT '0',
  `is_open` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `add_time` varchar(128) NOT NULL DEFAULT 'not defined',
  `is_verify` tinyint(1) NOT NULL DEFAULT '0',
  `verify_time` int(10) NOT NULL DEFAULT '0'
) 

--
-- 转存表中的数据 `ahut_credits`
--

INSERT INTO `ahut_credits` (`credits_id`, `credits_type`, `item_id`, `content`, `user_id`, `is_open`, `add_time`, `is_verify`, `verify_time`) VALUES
(0, 1, 1, 'This is test case', 6, 1, 'not defined', 1, 123123),
(0, 5, 123, '', 123, 2, 'not defined', 3, 1232);

-- --------------------------------------------------------

--
-- 表的结构 `ahut_credit_cat`
--

CREATE TABLE IF NOT EXISTS `ahut_credit_cat` (
  `credit_cat_id` smallint(5) NOT NULL,
  `credit_name` varchar(255) NOT NULL DEFAULT '',
  `credit_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `credit_discrip` longtext
) 

-- --------------------------------------------------------

--
-- 表的结构 `ahut_credit_record`
--

CREATE TABLE IF NOT EXISTS `ahut_credit_record` (
  `record_id` mediumint(8) unsigned NOT NULL,
  `credit_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `credit_record` tinyint(3) unsigned NOT NULL DEFAULT '0'
)

-- --------------------------------------------------------

--
-- 表的结构 `ahut_logs`
--

CREATE TABLE IF NOT EXISTS `ahut_logs` (
  `log_id` int(10) unsigned NOT NULL,
  `log_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `log_auth` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `credit_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `operate_time` int(10) unsigned NOT NULL DEFAULT '0'
) 

-- --------------------------------------------------------

--
-- 表的结构 `ahut_upload`
--

CREATE TABLE IF NOT EXISTS `ahut_upload` (
  `id` int(11) unsigned NOT NULL COMMENT 'ID',
  `uid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'UID',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '文件名',
  `path` varchar(255) NOT NULL DEFAULT '' COMMENT '文件路径',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '文件链接',
  `ext` char(4) NOT NULL DEFAULT '' COMMENT '文件类型',
  `size` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '文件大小',
  `md5` char(32) NOT NULL DEFAULT '' COMMENT '文件md5',
  `sha1` char(40) NOT NULL DEFAULT '' COMMENT '文件sha1编码',
  `location` varchar(15) NOT NULL DEFAULT '' COMMENT '文件存储位置',
  `download` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '下载次数',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '上传时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文件上传表';

-- --------------------------------------------------------

--
-- 表的结构 `ahut_user`
--

CREATE TABLE IF NOT EXISTS `ahut_user` (
  `user_id` smallint(6) unsigned NOT NULL,
  `student_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `user_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `academy` varchar(128) NOT NULL DEFAULT '未定义',
  `iclass` varchar(128) NOT NULL DEFAULT '未定义',
  `email` varchar(60) NOT NULL DEFAULT '',
  `phone` varchar(128) NOT NULL DEFAULT '0',
  `password` varchar(32) NOT NULL DEFAULT '',
  `address` varchar(128) DEFAULT '安徽工业大学',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `last_ip` varchar(15) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ahut_user`
--

INSERT INTO `ahut_user` (`user_id`, `student_id`, `user_name`, `user_type`, `academy`, `iclass`, `email`, `phone`, `password`, `address`, `add_time`, `last_login`, `last_ip`) VALUES
(1, 16777215, 'hujun123qwe', 1, '未定义', '未定义', '', '0', 'df9b1a57ec59bc2cfcd6c977815069b9', '安徽工业大学', 1464312287, 0, '127.0.0.1'),
(2, 0, '', 0, '未定义', '未定义', '', '0', 'd41d8cd98f00b204e9800998ecf8427e', '安徽工业大学', 1464312296, 0, '127.0.0.1'),
(3, 0, '', 0, '未定义', '未定义', '', '0', 'd41d8cd98f00b204e9800998ecf8427e', '安徽工业大学', 1464312296, 0, '127.0.0.1'),
(4, 0, '', 0, '未定义', '未定义', '', '0', 'd41d8cd98f00b204e9800998ecf8427e', '安徽工业大学', 1464312297, 0, '127.0.0.1'),
(5, 129084213, 'hujun12312', 1, '未定义', '未定义', '', '0', '555b71983a443aba1cad59f3358bc2bf', '安徽工业大学', 1464312564, 0, '127.0.0.1'),
(6, 129084213, '胡军', 0, '数理学院', '信122班', 'hujun123qwe@163.com', '15551053527', '2b4c3f7824a4de1216a63be9add078ff', '安徽工业大学', 1464312749, 0, '127.0.0.1'),
(7, 123, '123', 0, '未定义', '未定义', '', '0', '202cb962ac59075b964b07152d234b70', '安徽工业大学', 1464312857, 0, '127.0.0.1'),
(8, 1234, '1234', 0, '未定义', '未定义', '', '0', '81dc9bdb52d04dc20036dbd8313ed055', '安徽工业大学', 1464312980, 0, '127.0.0.1'),
(9, 1234, '1234', 0, '未定义', '未定义', '', '0', '81dc9bdb52d04dc20036dbd8313ed055', '安徽工业大学', 1464313029, 0, '127.0.0.1'),
(10, 123412, '123412', 0, '未定义', '未定义', '', '0', '244ffbcf4483ae7fc354e3f00db6b454', '安徽工业大学', 1464313060, 0, '127.0.0.1'),
(11, 123412, '123412', 0, '未定义', '未定义', '', '0', '244ffbcf4483ae7fc354e3f00db6b454', '安徽工业大学', 1464313231, 0, '127.0.0.1'),
(12, 123412, '123412', 0, '未定义', '未定义', '', '0', '244ffbcf4483ae7fc354e3f00db6b454', '安徽工业大学', 1464313520, 0, '127.0.0.1'),
(13, 123412, '123412', 0, '未定义', '未定义', '', '0', '244ffbcf4483ae7fc354e3f00db6b454', '安徽工业大学', 1464313595, 0, '127.0.0.1'),
(14, 123412, '123412', 0, '未定义', '未定义', '', '0', '244ffbcf4483ae7fc354e3f00db6b454', '安徽工业大学', 1464313966, 0, '127.0.0.1'),
(15, 123456789, 'hujun123', 0, '未定义', '未定义', '', '0', '2d1c83603ff77250d17cbba5213bf0f8', '安徽工业大学', 1464667319, 0, ''),
(16, 123123, '123123', 0, '未定义', '未定义', '', '0', '4297f44b13955235245b2497399d7a93', '安徽工业大学', 1464667524, 1464667524, '127.0.0.1'),
(17, 123, '123qwe', 0, '未定义', '未定义', '', '0', '46f94c8de14fb36680850768ff1b7f2a', '安徽工业大学', 1464668237, 1464668237, '127.0.0.1'),
(18, 1234, '1234', 0, '未定义', '未定义', '', '0', '81dc9bdb52d04dc20036dbd8313ed055', '安徽工业大学', 1464669137, 1464669137, '127.0.0.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ahut_admin_module`
--
ALTER TABLE `ahut_admin_module`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ahut_application`
--
ALTER TABLE `ahut_application`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `ahut_credit_cat`
--
ALTER TABLE `ahut_credit_cat`
  ADD PRIMARY KEY (`credit_cat_id`),
  ADD KEY `credit_type` (`credit_type`);

--
-- Indexes for table `ahut_credit_record`
--
ALTER TABLE `ahut_credit_record`
  ADD PRIMARY KEY (`record_id`),
  ADD KEY `credit_id` (`credit_id`);

--
-- Indexes for table `ahut_logs`
--
ALTER TABLE `ahut_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `credit_id` (`credit_id`);

--
-- Indexes for table `ahut_upload`
--
ALTER TABLE `ahut_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ahut_user`
--
ALTER TABLE `ahut_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ahut_admin_module`
--
ALTER TABLE `ahut_admin_module`
AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ahut_application`
--
ALTER TABLE `ahut_application`
  MODIFY `item_id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ahut_credit_cat`
--
ALTER TABLE `ahut_credit_cat`
  MODIFY `credit_cat_id` smallint(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ahut_credit_record`
--
ALTER TABLE `ahut_credit_record`
  MODIFY `record_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ahut_logs`
--
ALTER TABLE `ahut_logs`
  MODIFY `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ahut_upload`
--
ALTER TABLE `ahut_upload`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID';
--
-- AUTO_INCREMENT for table `ahut_user`
--
ALTER TABLE `ahut_user`
  MODIFY `user_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
