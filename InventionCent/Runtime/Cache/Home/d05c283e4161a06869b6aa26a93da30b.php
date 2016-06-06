<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=device-width">
    <meta content="origin-when-cross-origin" name="referrer" />
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/frameworks.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/github.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/site.css" type="text/css"/>
    
    <title><?php echo ($meta_title); ?></title>
</head>

<body>
<div class="header header-logged-in true" role="banner">
    <div class="container clearfix">
        <a class="header-logo-invertocat" href="<?php echo U('Admin/index');?>"><h2>大学生创新学分审核系统</h2></a>
        <div class="header-search   js-site-search" role="search"></div>
        <ul class="header-nav left" role="navigation"></ul>
        <ul class="header-nav user-nav right" style="padding-right:5px;">
            <li class="header-nav-item" style="padding-right:12px;">
                <span class="vcard-username">欢迎<?php echo ($user_info["user_name"]); ?>管理员</span>
            </li>
            <li class="header-nav-item" style="padding-right:8px;">
                <a href="<?php echo U('User/edit_admin');?>" class="btn btn-sm">个人信息</a>
            </li>
            <li class="header-nav-item" style="padding-right:8px;">
                <a href="<?php echo U('Public/logout');?>" class="btn btn-sm">退出</a>
            </li>
        </ul>
    </div>
</div>

<div role="main" class="main-content">
    <div id="js-pjax-container" data-pjax-container>
        <div class="page-content container">
            <div class="columns profilecols">
                <div class="column one-fourth" role="navigation">
                    <!--<nav class="menu">-->
                        <!--<h3 class="menu-heading">-->
                            <!--系统管理-->
                        <!--</h3>-->
                            <!--<li class="js-selected-navigation-item selected menu-item" aria-selected="true"><a href="" ><i class="fa fa-wrench"></i><span class="nav-label">通知公告</span></a></li>-->
                            <!--<li class="js-selected-navigation-item menu-item"><a href="" ><i class="fa fa-map-signs"></i><span class="nav-label">友情链接</span></a></li>-->
                            <!--<li class="js-selected-navigation-item menu-item"><a href="" ><i class="fa fa-upload"></i><span class="nav-label">上传管理</span></a></li>-->
                     <!--</nav>-->
                    <nav class="menu">
                        <h3 class="menu-heading">
                            用户管理
                        </h3>
                        <li class="js-selected-navigation-item menu-item"><a href="<?php echo U('User/user_admin');?>" ><i class="fa fa-wrench"></i><span class="nav-label">管理员管理</span></a></li>
                        <li class="js-selected-navigation-item menu-item"><a href="<?php echo U('User/user_list');?>" ><i class="fa fa-upload"></i><span class="nav-label">学生列表</span></a></li>
                    </nav>
                    <nav class="menu">
                        <h3 class="menu-heading">
                            申请管理
                        </h3>
                        <li class="js-selected-navigation-item menu-item"><a href="<?php echo U('Application/item_list');?>" ><i class="fa fa-wrench"></i><span class="nav-label">申请列表</span></a></li>
                        <li class="js-selected-navigation-item menu-item"><a href="<?php echo U('Application/item_invalid');?>" ><i class="fa fa-wrench"></i><span class="nav-label">作废申请</span></a></li>
                    </nav>
                    <nav class="menu">
                        <h3 class="menu-heading">
                            学分管理
                        </h3>
                        <li class="js-selected-navigation-item menu-item"><a href="<?php echo U('Credits/credits_list');?>" ><i class="fa fa-wrench"></i><span class="nav-label">学分列表</span></a></li>
                        <!--<li class="js-selected-navigation-item menu-item"><a href="link" ><i class="fa fa-map-signs"></i><span class="nav-label">学分配置</span></a></li>-->
                    </nav>
                    <nav class="menu">
                        <h3 class="menu-heading">
                            操作记录
                        </h3>
                        <li class="js-selected-navigation-item menu-item"><a href="#" ><i class="fa fa-wrench"></i><span class="nav-label">管理员记录</span></a></li>
                        <li class="js-selected-navigation-item menu-item"><a href="#" ><i class="fa fa-map-signs"></i><span class="nav-label">用户记录</span></a></li>
                  </nav>
                </div>
                <div class="column three-fourths">
                    
<div class="columns">
    <div class="single-column">

        <div class="boxed-group flush">
            <h3>服务器信息</h3>
            <ul class="boxed-group-inner mini-repo-list">
                <li class="public source">
                    <table class="capped-list">
                        <tbody>
                        <tr>
                            <td>ThinkPHP版本</td>
                            <td><?php echo (THINK_VERSION); ?></td>
                        </tr>
                        <tr>
                            <td>服务器操作系统</td>
                            <td><?php echo (PHP_OS); ?></td>
                        </tr>
                        <tr>
                            <td>运行环境</td>
                            <td>
                                <?php
 $server_software = explode(' ', $_SERVER['SERVER_SOFTWARE']); echo $server_software[0]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>PHP版本</td>
                            <td><?php echo PHP_VERSION; ?></td>
                        </tr>
                        <tr>
                            <td>MYSQL版本</td>
                            <td><?php $system_info_mysql = M()->query("select version() as v;"); echo ($system_info_mysql["0"]["v"]); ?></td>
                        </tr>
                        <tr>
                            <td>上传限制</td>
                            <td><?php echo ini_get('upload_max_filesize');?></td>
                        </tr>
                        </tbody>
                    </table>
                </li>
            </ul>
        </div>

        <div class="boxed-group flush">
            <h3>产品团队</h3>
            <ul class="boxed-group-inner mini-repo-list">
                <li class="public source">
                    <table class="capped-list">
                        <tbody>
                        <tr>
                            <td>核心团队</td>
                            <td>胡军</td>
                        </tr>
                        <tr>
                            <td>指导老师</td>
                            <td>徐浩</td>
                        </tr>
                        <tr>
                            <td>邮箱</td>
                            <td>
                                hujun123qwe@163.com
                            </td>
                        </tr>
                        <tr>
                            <td>技术支持</td>
                            <td>15551053527（8:00-17:00）</td>
                        </tr>
                        </tbody>
                    </table>
                </li>
            </ul>
        </div>

    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</div>



<div class="container site-footer-container">
    <div class="site-footer" role="contentinfo">
        <ul class="site-footer-links right">
            <li>中心地址：安徽省马鞍山市马向路新城东区（东校区）邮编：243032</li>
        </ul>
        <a href="<?php echo U('Admin/index');?>" aria-label="Homepage" class="site-footer-mark" title="GitHub">
            <img src="<?php echo (C("__HOME_IMG__")); ?>/ahut.png" class="octicon octicon-mark-github" style="height: 30px;width: 30px;"/>
        </a>
        <ul class="site-footer-links">
            <li>&copy; 2016 <span>安徽工业大学</span>, Inc.</li>
            <li><a href="http://www.ahut.edu.cn">工大首页</a></li>
            <li><a href="http://gczx.ahut.edu.cn/">工创中心</a></li>
            <li><a href="http://jwcad.ahut.edu.cn/">教务处</a></li>
            <li><a href="http://library_web.ahut.edu.cn/MainWeb/index.asp">校图书馆</a></li>
            <li><a href="http://me.hujun.ren">Help</a></li>
        </ul>
    </div>
</div>
</body>
</html>