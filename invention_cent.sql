-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-06-05 12:27:26
-- 服务器版本： 10.1.8-MariaDB
-- PHP Version: 5.3.29-upupw

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invention_cent`
--

-- --------------------------------------------------------

--
-- 表的结构 `ahut_application`
--

CREATE TABLE IF NOT EXISTS `ahut_application` (
  `apply_id` int(6) unsigned NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `item_status` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` smallint(6) unsigned NOT NULL DEFAULT '0',
  `apply_time` int(11) unsigned NOT NULL DEFAULT '0',
  `apply_info` text NOT NULL,
  `verify_time` int(11) unsigned NOT NULL DEFAULT '0',
  `is_verify` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `inspector_id` smallint(6) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ahut_application`
--

INSERT INTO `ahut_application` (`apply_id`, `item_name`, `item_id`, `item_status`, `user_id`, `apply_time`, `apply_info`, `verify_time`, `is_verify`, `inspector_id`) VALUES
(1, 'fewewdfew', 1, 1, 23, 123, '123fewfewfew', 12312, 0, 0),
(2, '大学生诚信项目是ixnajisdie', 1, 0, 0, 123, 'HFE', 0, 0, 0),
(3, '大学生诚信项目是ixnajisdie', 1, 0, 0, 123, 'HFE', 0, 0, 0),
(4, '等级的英文_等级翻译_等级英语怎么说_海词词典', 1, 6, 0, 129084213, '海词词典', 0, 0, 0),
(5, '1gtrgtrgtr', 1, 0, 23, 123, '123', 12312, 0, 0),
(6, 'ew2', 1, 1, 19, 12, 'we', 0, 0, 0),
(7, 'ew', 1, 1, 19, 12, 'we', 0, 0, 0),
(8, '大学生能力训练', 1, 1, 19, 129084213, '数理学院', 0, 0, 0),
(9, 'SRTP审核测试', 1, 1, 19, 1465091885, '{"upload_file":"2016-06-05\\/5753872d98668.jpg","upload_file_0":"2016-06-05\\/5753872d9e452.xls","teacher":"\\u9a8c\\u8bc1\\u7801","igroup":"4","grade":"1","item_type":1}', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `ahut_credits`
--

CREATE TABLE IF NOT EXISTS `ahut_credits` (
  `credits_id` int(11) unsigned NOT NULL,
  `apply_id` int(11) unsigned NOT NULL,
  `item_id` int(11) unsigned NOT NULL,
  `user_id` int(6) unsigned NOT NULL,
  `credits_value` tinyint(2) unsigned NOT NULL,
  `create_time` int(11) unsigned NOT NULL,
  `is_add` tinyint(1) unsigned NOT NULL,
  `add_time` int(11) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ahut_credits`
--

INSERT INTO `ahut_credits` (`credits_id`, `apply_id`, `item_id`, `user_id`, `credits_value`, `create_time`, `is_add`, `add_time`) VALUES
(1, 2, 1, 9, 20, 0, 0, 0),
(2, 9, 1, 19, 92, 1465096657, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `ahut_item`
--

CREATE TABLE IF NOT EXISTS `ahut_item` (
  `item_id` tinyint(3) unsigned NOT NULL,
  `item_name` varchar(255) NOT NULL DEFAULT '未定义',
  `item_describe` text NOT NULL,
  `creidts_describe` text NOT NULL,
  `item_unit` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ahut_item`
--

INSERT INTO `ahut_item` (`item_id`, `item_name`, `item_describe`, `creidts_describe`, `item_unit`) VALUES
(1, '大学生科研训练计划（SRTP）', '一、学分的获得\r\n（一）学生在SRTP活动中，完整地参加了从文献资料综述、研究方案设计、实验研究（或设计制造、调查研究）、撰写报告或论文、书写心得体会、答辩并提交全套资料这一项目研究全过程，通过结题验收，即可获得相应的学分。\r\n（二）结题验收以学院为单位统一组织，由校创新教育领导小组和学院创新教育活动指导小组联合组成专家组负责实施。结题验收时，项目组成员应到场共同汇报和答辩，并提供项目所形成的各项成果。\r\n（三）学生取得的学分应在完成SRTP项目结题验收后由专家组当即评定，并明确记载在《安徽工业大学SRTP项目结题验收表》上。\r\n', '项目总学分=项目基本分+项目加分。', ''),
(2, '学科竞赛类', '学科竞赛的学分数按参赛获奖等级认定（表3）。\r\n鼓励奖\r\n(参赛奖)	院级三等奖	校级三等奖\r\n院级二等奖	校级二等奖\r\n院级一等奖	省级三等奖\r\n校级一等奖	国家三等奖\r\n省级二等奖	国家二等奖\r\n省/大区一等奖	国家一等奖\r\n省级特等奖	国际奖\r\n0.2	0．4	0．6	1．0	1.5	2	4	6	8\r\n注：①团队参赛获奖的，团队中所有学生均可获得相应学分。\r\n②同一内容或同一作品参赛多次获奖者，按其中最高奖的学分计，不累计计算。\r\n', '鼓励奖(参赛奖)	0.2\r\n院级三等奖	0．4\r\n校级三等奖	0．6\r\n院级二等奖	0．6\r\n校级二等奖	1．0\r\n院级一等奖	1．0\r\n省级三等奖	1．5\r\n校级一等奖	1.5\r\n国家三等奖	2.0\r\n省级二等奖	2.0\r\n国家二等奖	4.0\r\n省/大区一等奖	4.0\r\n国家一等奖	6.0\r\n省级特等奖	6.0\r\n国际奖		8.0', ''),
(3, '“三创”教育课程体系', '完成必修课《创造学与创新能力开发》（40学时）及其实践环节的学习并通过考核成绩合格者', '计2学分', ''),
(4, '发表论文', '学生在国内外正式出版的刊物发表论文或参加国际、国内各级学术活动提交论文并被录用，可获得相应的创新学分。', '（一）国际刊物（含国际会议论文集）、国内核心刊物，计5分。\r\n（二）国内一般刊物或国家级学术活动论文，计3分。\r\n（三）省、部级学术活动论文（作报告或收入论文集），计2分。\r\n（四）校、院级学术活动论文（作报告或收入论文集），计 0.5分。\r\n如论文有多位作者，则学分按以下比例进行分配：一位作者：100％；          二位作者：60％、40％；三位作者：50％、30％、20％；四位作者；40％、30％、20％、10％。\r\n发表论文需注明“安徽工业大学大学生创新教育专项经费资助项目”字样。\r\n', ''),
(5, '专利成果', '学生通过科技活动、创新教育课程学习等途径，以安徽工业大学名义申报并获得专利的，均可获得创新学分。', '（一）获得发明专利的，记录4分；获得实用新型、外观设计等专利的，记录2分。\r\n（二）未以安徽工业大学名义申报获得专利的，创新学分减半认定。\r\n', ''),
(6, '其他各级各类科研和学术等创新活动', '各学院可根据各学科的特点或实验条件确定创新项目，并制定相应的实施细则报工创中心审定备案。', '学分认定由学院创新教育活动指导小组参照上述各项学分认定办法执行。', '');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `avatar_pic` varchar(255) NOT NULL,
  `add_time` int(11) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `last_ip` varchar(15) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ahut_user`
--

INSERT INTO `ahut_user` (`user_id`, `student_id`, `user_name`, `user_type`, `academy`, `iclass`, `email`, `phone`, `password`, `address`, `avatar_pic`, `add_time`, `last_login`, `last_ip`) VALUES
(1, 16777215, 'hujun123qwe', 1, '未定义', '未定义', '', '0', 'df9b1a57ec59bc2cfcd6c977815069b9', '安徽工业大学', '', 1464312287, 0, '127.0.0.1'),
(2, 0, '', 0, '未定义', '未定义', '', '0', 'd41d8cd98f00b204e9800998ecf8427e', '安徽工业大学', '', 1464312296, 0, '127.0.0.1'),
(3, 0, '', 0, '未定义', '未定义', '', '0', 'd41d8cd98f00b204e9800998ecf8427e', '安徽工业大学', '', 1464312296, 0, '127.0.0.1'),
(4, 0, '', 0, '未定义', '未定义', '', '0', 'd41d8cd98f00b204e9800998ecf8427e', '安徽工业大学', '', 1464312297, 0, '127.0.0.1'),
(5, 129084212, 'hujun12312', 0, '数理学院', '信122班', 'hujun123qwe@163.com', '15551053527', '555b71983a443aba1cad59f3358bc2bf', '安徽工业大学', '', 1464312564, 0, '127.0.0.1'),
(6, 129084211, '胡军', 0, '数理学院', '信122班', 'hujun123qwe@163.com', '15551053527', '03e15259561469276b1ef6b14cb38af6', '安徽工业大学', '', 1464312749, 0, '127.0.0.1'),
(7, 123, '123', 0, '未定义', '未定义', '', '0', '202cb962ac59075b964b07152d234b70', '安徽工业大学', '', 1464312857, 0, '127.0.0.1'),
(9, 1234, '1234', 0, '未定义', '未定义', '', '0', '81dc9bdb52d04dc20036dbd8313ed055', '安徽工业大学', '', 1464313029, 0, '127.0.0.1'),
(14, 123412, '123412', 1, '未定义', '未定义', 'hujub1', '12', '244ffbcf4483ae7fc354e3f00db6b454', '安徽工业大学', '', 1464313966, 0, '127.0.0.1'),
(15, 123456789, 'hujun123', 0, '未定义', '未定义', '', '0', '2d1c83603ff77250d17cbba5213bf0f8', '安徽工业大学', '', 1464667319, 0, ''),
(16, 123123, '123123', 0, '未定义', '未定义', '', '0', '4297f44b13955235245b2497399d7a93', '安徽工业大学', '', 1464667524, 1464667524, '127.0.0.1'),
(17, 123, '123qwe', 0, '未定义', '未定义', '', '0', '46f94c8de14fb36680850768ff1b7f2a', '安徽工业大学', '', 1464668237, 1464668237, '127.0.0.1'),
(18, 1234, '1234', 0, '未定义', '未定义', '', '0', '81dc9bdb52d04dc20036dbd8313ed055', '安徽工业大学', '', 1464669137, 1464669137, '127.0.0.1'),
(19, 129084213, '胡军', 0, '未定义', '未定义', 'hujun123qwe@163.com', '1555150525', '03e15259561469276b1ef6b14cb38af6', '安徽工业大学', '2016-06-05/5753a42b0e8dc.jpg', 1464931258, 1464931258, '127.0.0.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ahut_application`
--
ALTER TABLE `ahut_application`
  ADD PRIMARY KEY (`apply_id`);

--
-- Indexes for table `ahut_credits`
--
ALTER TABLE `ahut_credits`
  ADD PRIMARY KEY (`credits_id`),
  ADD UNIQUE KEY `credits_id` (`credits_id`);

--
-- Indexes for table `ahut_item`
--
ALTER TABLE `ahut_item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `item_id` (`item_id`);

--
-- Indexes for table `ahut_logs`
--
ALTER TABLE `ahut_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `credit_id` (`credit_id`);

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
-- AUTO_INCREMENT for table `ahut_application`
--
ALTER TABLE `ahut_application`
  MODIFY `apply_id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ahut_credits`
--
ALTER TABLE `ahut_credits`
  MODIFY `credits_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ahut_logs`
--
ALTER TABLE `ahut_logs`
  MODIFY `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ahut_user`
--
ALTER TABLE `ahut_user`
  MODIFY `user_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
