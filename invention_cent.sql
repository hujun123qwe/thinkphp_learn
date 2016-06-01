-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-06-01 17:46:59
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
-- 表的结构 `ahut_admin_module`
--

CREATE TABLE IF NOT EXISTS `ahut_admin_module` (
  `id` int(11) unsigned NOT NULL COMMENT 'ID',
  `name` varchar(31) NOT NULL DEFAULT '' COMMENT '名称',
  `title` varchar(63) NOT NULL DEFAULT '' COMMENT '标题',
  `logo` varchar(63) NOT NULL DEFAULT '' COMMENT '图片图标',
  `icon` varchar(31) NOT NULL DEFAULT '' COMMENT '字体图标',
  `icon_color` varchar(7) NOT NULL DEFAULT '' COMMENT '字体图标颜色',
  `description` varchar(127) NOT NULL DEFAULT '' COMMENT '描述',
  `developer` varchar(31) NOT NULL DEFAULT '' COMMENT '开发者',
  `version` varchar(7) NOT NULL DEFAULT '' COMMENT '版本',
  `user_nav` text NOT NULL COMMENT '个人中心导航',
  `config` text NOT NULL COMMENT '配置',
  `admin_menu` text NOT NULL COMMENT '菜单节点',
  `is_system` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否允许卸载',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='模块功能表';

--
-- 转存表中的数据 `ahut_admin_module`
--

INSERT INTO `ahut_admin_module` (`id`, `name`, `title`, `logo`, `icon`, `icon_color`, `description`, `developer`, `version`, `user_nav`, `config`, `admin_menu`, `is_system`, `create_time`, `update_time`, `sort`, `status`) VALUES
(1, 'Home', '管理', '', 'fa fa-cog', '#3CA6F1', '核心系统', '南京科斯克网络科技有限公司', '1.1.0', '', '', '{"1":{"pid":"0","title":"\\u7cfb\\u7edf","icon":"fa fa-cog","level":"system","id":"1"},"2":{"pid":"1","title":"\\u7cfb\\u7edf\\u529f\\u80fd","icon":"fa fa-folder-open-o","id":"2"},"3":{"pid":"2","title":"\\u7cfb\\u7edf\\u8bbe\\u7f6e","icon":"fa fa-wrench","url":"Admin\\/Config\\/group","id":"3"},"4":{"pid":"3","title":"\\u4fee\\u6539\\u8bbe\\u7f6e","url":"Admin\\/Config\\/groupSave","id":"4"},"5":{"pid":"2","title":"\\u5bfc\\u822a\\u7ba1\\u7406","icon":"fa fa-map-signs","url":"Admin\\/Nav\\/index","id":"5"},"6":{"pid":"5","title":"\\u65b0\\u589e","url":"Admin\\/Nav\\/add","id":"6"},"7":{"pid":"5","title":"\\u7f16\\u8f91","url":"Admin\\/Nav\\/edit","id":"7"},"8":{"pid":"5","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Nav\\/setStatus","id":"8"},"9":{"pid":"2","title":"\\u5feb\\u6377\\u94fe\\u63a5","icon":"fa fa-link","url":"Admin\\/Link\\/index","id":"9"},"10":{"pid":"9","title":"\\u65b0\\u589e","url":"Admin\\/Link\\/add","id":"10"},"11":{"pid":"9","title":"\\u7f16\\u8f91","url":"Admin\\/Link\\/edit","id":"11"},"12":{"pid":"9","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Link\\/setStatus","id":"12"},"13":{"pid":"2","title":"\\u914d\\u7f6e\\u7ba1\\u7406","icon":"fa fa-cogs","url":"Admin\\/Config\\/index","id":"13"},"14":{"pid":"13","title":"\\u65b0\\u589e","url":"Admin\\/Config\\/add","id":"14"},"15":{"pid":"13","title":"\\u7f16\\u8f91","url":"Admin\\/Config\\/edit","id":"15"},"16":{"pid":"13","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Config\\/setStatus","id":"16"},"17":{"pid":"2","title":"\\u4e0a\\u4f20\\u7ba1\\u7406","icon":"fa fa-upload","url":"Admin\\/Upload\\/index","id":"17"},"18":{"pid":"17","title":"\\u4e0a\\u4f20\\u6587\\u4ef6","url":"Admin\\/Upload\\/upload","id":"18"},"19":{"pid":"17","title":"\\u5220\\u9664\\u6587\\u4ef6","url":"Admin\\/Upload\\/delete","id":"19"},"20":{"pid":"17","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Upload\\/setStatus","id":"20"},"21":{"pid":"17","title":"\\u4e0b\\u8f7d\\u8fdc\\u7a0b\\u56fe\\u7247","url":"Admin\\/Upload\\/downremoteimg","id":"21"},"22":{"pid":"17","title":"\\u6587\\u4ef6\\u6d4f\\u89c8","url":"Admin\\/Upload\\/fileManager","id":"22"},"23":{"pid":"1","title":"\\u7cfb\\u7edf\\u6743\\u9650","icon":"fa fa-folder-open-o","id":"23"},"24":{"pid":"23","title":"\\u7528\\u6237\\u7ba1\\u7406","icon":"fa fa-user","url":"Admin\\/User\\/index","id":"24"},"25":{"pid":"24","title":"\\u65b0\\u589e","url":"Admin\\/User\\/add","id":"25"},"26":{"pid":"24","title":"\\u7f16\\u8f91","url":"Admin\\/User\\/edit","id":"26"},"27":{"pid":"24","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/User\\/setStatus","id":"27"},"28":{"pid":"23","title":"\\u7ba1\\u7406\\u5458\\u7ba1\\u7406","icon":"fa fa-lock","url":"Admin\\/Access\\/index","id":"28"},"29":{"pid":"28","title":"\\u65b0\\u589e","url":"Admin\\/Access\\/add","id":"29"},"30":{"pid":"28","title":"\\u7f16\\u8f91","url":"Admin\\/Access\\/edit","id":"30"},"31":{"pid":"28","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Access\\/setStatus","id":"31"},"32":{"pid":"23","title":"\\u7528\\u6237\\u7ec4\\u7ba1\\u7406","icon":"fa fa-sitemap","url":"Admin\\/Group\\/index","id":"32"},"33":{"pid":"32","title":"\\u65b0\\u589e","url":"Admin\\/Group\\/add","id":"33"},"34":{"pid":"32","title":"\\u7f16\\u8f91","url":"Admin\\/Group\\/edit","id":"34"},"35":{"pid":"32","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Group\\/setStatus","id":"35"},"36":{"pid":"1","title":"\\u6269\\u5c55\\u4e2d\\u5fc3","icon":"fa fa-folder-open-o","id":"36"},"37":{"pid":"36","title":"\\u524d\\u53f0\\u4e3b\\u9898","icon":"fa fa-adjust","url":"Admin\\/Theme\\/index","id":"37"},"38":{"pid":"37","title":"\\u5b89\\u88c5","url":"Admin\\/Theme\\/install","id":"38"},"39":{"pid":"37","title":"\\u5378\\u8f7d","url":"Admin\\/Theme\\/uninstall","id":"39"},"40":{"pid":"37","title":"\\u66f4\\u65b0\\u4fe1\\u606f","url":"Admin\\/Theme\\/updateInfo","id":"40"},"41":{"pid":"37","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Theme\\/setStatus","id":"41"},"42":{"pid":"37","title":"\\u5207\\u6362\\u4e3b\\u9898","url":"Admin\\/Theme\\/setCurrent","id":"42"},"43":{"pid":"37","title":"\\u53d6\\u6d88\\u4e3b\\u9898","url":"Admin\\/Theme\\/cancel","id":"43"},"44":{"pid":"36","title":"\\u529f\\u80fd\\u6a21\\u5757","icon":"fa fa-th-large","url":"Admin\\/Module\\/index","id":"44"},"45":{"pid":"44","title":"\\u5b89\\u88c5","url":"Admin\\/Module\\/install","id":"45"},"46":{"pid":"44","title":"\\u5378\\u8f7d","url":"Admin\\/Module\\/uninstall","id":"46"},"47":{"pid":"44","title":"\\u66f4\\u65b0\\u4fe1\\u606f","url":"Admin\\/Module\\/updateInfo","id":"47"},"48":{"pid":"44","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Module\\/setStatus","id":"48"},"49":{"pid":"36","title":"\\u63d2\\u4ef6\\u7ba1\\u7406","icon":"fa fa-th","url":"Admin\\/Addon\\/index","id":"49"},"50":{"pid":"49","title":"\\u5b89\\u88c5","url":"Admin\\/Addon\\/install","id":"50"},"51":{"pid":"49","title":"\\u5378\\u8f7d","url":"Admin\\/Addon\\/uninstall","id":"51"},"52":{"pid":"49","title":"\\u8fd0\\u884c","url":"Admin\\/Addon\\/execute","id":"52"},"53":{"pid":"49","title":"\\u8bbe\\u7f6e","url":"Admin\\/Addon\\/config","id":"53"},"54":{"pid":"49","title":"\\u540e\\u53f0\\u7ba1\\u7406","url":"Admin\\/Addon\\/adminList","id":"54"},"55":{"pid":"54","title":"\\u65b0\\u589e\\u6570\\u636e","url":"Admin\\/Addon\\/adminAdd","id":"55"},"56":{"pid":"54","title":"\\u7f16\\u8f91\\u6570\\u636e","url":"Admin\\/Addon\\/adminEdit","id":"56"},"57":{"pid":"54","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Admin\\/Addon\\/setStatus","id":"57"}}', 1, 1438651748, 1453274303, 0, 1),
(2, 'User', '用户', '', 'fa fa-users', '#F9B440', '用户中心模块', '南京科斯克网络科技有限公司', '1.1.0', '{"title":{"center":"\\u4e2a\\u4eba\\u4fe1\\u606f"},"center":[{"title":"\\u4fee\\u6539\\u4fe1\\u606f","icon":"fa fa-edit","url":"User\\/Center\\/profile"},{"title":"\\u4fee\\u6539\\u5bc6\\u7801","icon":"fa fa-lock","url":"User\\/Center\\/password"},{"title":"\\u6d88\\u606f\\u4e2d\\u5fc3","icon":"fa fa-envelope-o","url":"User\\/Message\\/index","badge":["User\\/Message","newMessageCount"],"badge_class":"badge-danger"}],"main":[{"title":"\\u4e2a\\u4eba\\u4e2d\\u5fc3","icon":"fa fa-tachometer","url":"User\\/Center\\/index"}]}', '{"status":"1","reg_toggle":"1","allow_reg_type":["username"],"deny_username":"","user_protocol":"","behavior":["User"]}', '{"1":{"pid":"0","title":"\\u7528\\u6237","icon":"fa fa-user","id":"1"},"2":{"pid":"1","title":"\\u7528\\u6237\\u7ba1\\u7406","icon":"fa fa-folder-open-o","id":"2"},"3":{"pid":"2","title":"\\u7528\\u6237\\u8bbe\\u7f6e","icon":"fa fa-wrench","url":"User\\/Index\\/module_config","id":"3"},"4":{"pid":"2","title":"\\u7528\\u6237\\u7edf\\u8ba1","icon":"fa fa-area-chart","url":"User\\/Index\\/index","id":"4"},"5":{"pid":"2","title":"\\u7528\\u6237\\u5217\\u8868","icon":"fa fa-list","url":"User\\/User\\/index","id":"5"},"6":{"pid":"5","title":"\\u65b0\\u589e","url":"User\\/User\\/add","id":"6"},"7":{"pid":"5","title":"\\u7f16\\u8f91","url":"User\\/User\\/edit","id":"7"},"8":{"pid":"5","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"User\\/User\\/setStatus","id":"8"},"9":{"pid":"2","title":"\\u7528\\u6237\\u7c7b\\u578b","icon":"fa fa-user","url":"User\\/Type\\/index","id":"9"},"10":{"pid":"9","title":"\\u65b0\\u589e","url":"User\\/Type\\/add","id":"10"},"11":{"pid":"9","title":"\\u7f16\\u8f91","url":"User\\/Type\\/edit","id":"11"},"12":{"pid":"9","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"User\\/Type\\/setStatus","id":"12"},"13":{"pid":"9","title":"\\u5b57\\u6bb5\\u7ba1\\u7406","icon":"fa fa-users","url":"User\\/Attribute\\/index","id":"13"},"14":{"pid":"13","title":"\\u65b0\\u589e","url":"User\\/Attribute\\/add","id":"14"},"15":{"pid":"13","title":"\\u7f16\\u8f91","url":"User\\/Attribute\\/edit","id":"15"},"16":{"pid":"13","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"User\\/Attribute\\/setStatus","id":"16"}}', 0, 1453102131, 1453274305, 0, 1),
(3, 'Credit', '学分', '', 'fa fa-newspaper-o', '#9933FF', 'CMS门户模块', '南京科斯克网络科技有限公司', '1.1.0', '{"center":[{"title":"\\u6211\\u7684\\u6587\\u6863","icon":"fa fa-list","url":"Cms\\/Index\\/my"}]}', '{"need_check":"0","toggle_comment":"1","group_list":"1:\\u9ed8\\u8ba4","cate":"a:1","taglib":["Cms"]}', '{"1":{"id":"1","pid":"0","title":"CMS","icon":"fa fa-newspaper-o"},"2":{"pid":"1","title":"\\u5185\\u5bb9\\u7ba1\\u7406","icon":"fa fa-folder-open-o","id":"2"},"3":{"pid":"2","title":"\\u6587\\u7ae0\\u914d\\u7f6e","icon":"fa fa-wrench","url":"Cms\\/Index\\/module_config","id":"3"},"4":{"pid":"2","title":"\\u6587\\u6863\\u6a21\\u578b","icon":"fa fa-th-large","url":"Cms\\/Type\\/index","id":"4"},"5":{"pid":"4","title":"\\u65b0\\u589e","url":"Cms\\/Type\\/add","id":"5"},"6":{"pid":"4","title":"\\u7f16\\u8f91","url":"Cms\\/Type\\/edit","id":"6"},"7":{"pid":"4","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Cms\\/Type\\/setStatus","id":"7"},"8":{"pid":"4","title":"\\u5b57\\u6bb5\\u7ba1\\u7406","icon":"fa fa-database","url":"Cms\\/Attribute\\/index","id":"8"},"9":{"pid":"8","title":"\\u65b0\\u589e","url":"Cms\\/Attribute\\/add","id":"9"},"10":{"pid":"8","title":"\\u7f16\\u8f91","url":"Cms\\/Attribute\\/edit","id":"10"},"11":{"pid":"8","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Cms\\/Attribute\\/setStatus","id":"11"},"12":{"pid":"2","title":"\\u680f\\u76ee\\u5206\\u7c7b","icon":"fa fa-navicon","url":"Cms\\/Category\\/index","id":"12"},"13":{"pid":"12","title":"\\u65b0\\u589e","url":"Cms\\/Category\\/add","id":"13"},"14":{"pid":"12","title":"\\u7f16\\u8f91","url":"Cms\\/Category\\/edit","id":"14"},"15":{"pid":"12","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Cms\\/Category\\/setStatus","id":"15"},"16":{"pid":"2","title":"\\u6587\\u7ae0\\u7ba1\\u7406","icon":"fa fa-edit","url":"Cms\\/Index\\/index","id":"16"},"17":{"pid":"2","title":"\\u5e7b\\u706f\\u5207\\u6362","icon":"fa fa-image","url":"Cms\\/Slider\\/index","id":"17"},"18":{"pid":"17","title":"\\u65b0\\u589e","url":"Cms\\/Slider\\/add","id":"18"},"19":{"pid":"17","title":"\\u7f16\\u8f91","url":"Cms\\/Slider\\/edit","id":"19"},"20":{"pid":"17","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Cms\\/Slider\\/setStatus","id":"20"},"21":{"pid":"2","title":"\\u901a\\u77e5\\u516c\\u544a","icon":"fa fa-bullhorn","url":"Cms\\/Notice\\/index","id":"21"},"22":{"pid":"21","title":"\\u65b0\\u589e","url":"Cms\\/Notice\\/add","id":"22"},"23":{"pid":"21","title":"\\u7f16\\u8f91","url":"Cms\\/Notice\\/edit","id":"23"},"24":{"pid":"21","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Cms\\/Notice\\/setStatus","id":"24"},"25":{"pid":"2","title":"\\u5e95\\u90e8\\u5bfc\\u822a","icon":"fa fa-map-signs","url":"Cms\\/Footnav\\/index","id":"25"},"26":{"pid":"25","title":"\\u65b0\\u589e","url":"Cms\\/Footnav\\/add","id":"26"},"27":{"pid":"25","title":"\\u7f16\\u8f91","url":"Cms\\/Footnav\\/edit","id":"27"},"28":{"pid":"25","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Cms\\/Footnav\\/setStatus","id":"28"},"29":{"pid":"2","title":"\\u53cb\\u60c5\\u94fe\\u63a5","icon":"fa fa-link","url":"Cms\\/FriendlyLink\\/index","id":"29"},"30":{"pid":"29","title":"\\u65b0\\u589e","url":"Cms\\/FriendlyLink\\/add","id":"30"},"31":{"pid":"29","title":"\\u7f16\\u8f91","url":"Cms\\/FriendlyLink\\/edit","id":"31"},"32":{"pid":"29","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Cms\\/FriendlyLink\\/setStatus","id":"32"},"33":{"pid":"2","title":"\\u56de\\u6536\\u7ad9","icon":"fa fa-recycle","url":"Cms\\/Index\\/recycle","id":"33"},"34":{"pid":"33","title":"\\u8bbe\\u7f6e\\u72b6\\u6001","url":"Cms\\/Notice\\/setStatus","id":"34"}}', 0, 1453102270, 1453274304, 0, 1);

-- --------------------------------------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `ahut_credit_record`
--

CREATE TABLE IF NOT EXISTS `ahut_credit_record` (
  `record_id` mediumint(8) unsigned NOT NULL,
  `credit_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `credit_record` tinyint(3) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
