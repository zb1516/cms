-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-03-19 10:19:59
-- 服务器版本： 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmsf`
--

-- --------------------------------------------------------

--
-- 表的结构 `cms_admin`
--

CREATE TABLE `cms_admin` (
  `admin_id` int(10) NOT NULL COMMENT '管理员id',
  `role_id` int(10) NOT NULL DEFAULT '0' COMMENT '角色id',
  `admin_name` varchar(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(32) NOT NULL DEFAULT '' COMMENT '密码',
  `salt` char(4) NOT NULL DEFAULT '' COMMENT '随机字符串',
  `login_ip` char(15) NOT NULL DEFAULT '0.0.0' COMMENT '登陆ip',
  `login_time` int(10) NOT NULL DEFAULT '0' COMMENT '登陆时间',
  `add_time` int(10) NOT NULL DEFAULT '0' COMMENT '添加时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- --------------------------------------------------------

--
-- 表的结构 `cms_article`
--

CREATE TABLE `cms_article` (
  `article_id` int(10) NOT NULL COMMENT '文章id',
  `article_author` varchar(20) NOT NULL DEFAULT '' COMMENT '作者',
  `article_source` varchar(100) NOT NULL DEFAULT '' COMMENT '来源',
  `article_image` varchar(100) NOT NULL DEFAULT '' COMMENT '图片',
  `article_title` varchar(100) NOT NULL DEFAULT '' COMMENT '文章标题',
  `article_content` text COMMENT '文章内容',
  `article_keyword` varchar(30) NOT NULL DEFAULT '' COMMENT '关键字',
  `article_abstract` varchar(255) NOT NULL DEFAULT '' COMMENT '摘要',
  `article_click` int(10) NOT NULL DEFAULT '0' COMMENT '点击量',
  `article_comment` int(10) NOT NULL DEFAULT '0' COMMENT '评论数',
  `state` tinyint(3) NOT NULL DEFAULT '1' COMMENT '审核状态 1待审核 2 审核通过 3审核不通过',
  `article_falg` char(4) NOT NULL DEFAULT '' COMMENT '属性 a推荐h热门t置顶n最新',
  `add_time` int(10) NOT NULL DEFAULT '0' COMMENT '发布时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章';

-- --------------------------------------------------------

--
-- 表的结构 `cms_comment`
--

CREATE TABLE `cms_comment` (
  `comment_id` int(10) NOT NULL COMMENT '评论id',
  `user_id` int(10) NOT NULL DEFAULT '0' COMMENT '用户id',
  `article_id` int(10) NOT NULL DEFAULT '0' COMMENT '文章id',
  `user_name` varchar(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `comment_title` varchar(100) NOT NULL DEFAULT '' COMMENT '评论标题',
  `comment_content` varchar(200) DEFAULT NULL COMMENT '评论内容',
  `state` tinyint(2) NOT NULL DEFAULT '1' COMMENT '审核状态',
  `add_time` int(10) NOT NULL DEFAULT '0' COMMENT '评论时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='评论';

-- --------------------------------------------------------

--
-- 表的结构 `cms_menu`
--

CREATE TABLE `cms_menu` (
  `menu_id` int(10) NOT NULL COMMENT '菜单id',
  `type_id` int(10) NOT NULL DEFAULT '0' COMMENT '分类id',
  `menu_name` varchar(30) NOT NULL DEFAULT '' COMMENT '菜单名称',
  `menu_url` varchar(200) NOT NULL DEFAULT '' COMMENT '链接地址',
  `sort` int(10) NOT NULL DEFAULT '0' COMMENT '排序'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='菜单';

-- --------------------------------------------------------

--
-- 表的结构 `cms_menu_type`
--

CREATE TABLE `cms_menu_type` (
  `type_id` int(10) NOT NULL COMMENT '类型id',
  `type_name` varchar(30) NOT NULL DEFAULT '' COMMENT '类名',
  `sort` int(10) NOT NULL DEFAULT '0' COMMENT '排序'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='菜单分类';

-- --------------------------------------------------------

--
-- 表的结构 `cms_user`
--

CREATE TABLE `cms_user` (
  `user_id` int(10) NOT NULL COMMENT '用户id',
  `user_name` varchar(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `user_password` varchar(32) NOT NULL DEFAULT '' COMMENT '密码',
  `state` tinyint(2) NOT NULL DEFAULT '1' COMMENT '状态 1正常 2禁用',
  `salt` char(4) NOT NULL DEFAULT '' COMMENT '随机字符串',
  `register_time` int(10) NOT NULL DEFAULT '0' COMMENT '注册时间',
  `login_time` int(10) NOT NULL DEFAULT '0' COMMENT '登陆时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_admin`
--
ALTER TABLE `cms_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cms_article`
--
ALTER TABLE `cms_article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `cms_comment`
--
ALTER TABLE `cms_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `cms_menu`
--
ALTER TABLE `cms_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `cms_menu_type`
--
ALTER TABLE `cms_menu_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `cms_user`
--
ALTER TABLE `cms_user`
  ADD PRIMARY KEY (`user_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `cms_admin`
--
ALTER TABLE `cms_admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '管理员id';
--
-- 使用表AUTO_INCREMENT `cms_article`
--
ALTER TABLE `cms_article`
  MODIFY `article_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '文章id';
--
-- 使用表AUTO_INCREMENT `cms_comment`
--
ALTER TABLE `cms_comment`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '评论id';
--
-- 使用表AUTO_INCREMENT `cms_menu`
--
ALTER TABLE `cms_menu`
  MODIFY `menu_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '菜单id';
--
-- 使用表AUTO_INCREMENT `cms_menu_type`
--
ALTER TABLE `cms_menu_type`
  MODIFY `type_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '类型id';
--
-- 使用表AUTO_INCREMENT `cms_user`
--
ALTER TABLE `cms_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户id';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
