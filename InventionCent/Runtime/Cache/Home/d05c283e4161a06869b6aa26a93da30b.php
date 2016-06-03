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
    <!--<link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/table.css" type="text/css"/>-->
    <!--<link rel="stylesheet" type="text/css" href="/Public/libs/cui/css/cui.min.css">-->
    <style>
        .breadcrumb>li,.pagination{display:inline-block}
        .breadcrumb{
            padding:8px 15px;
            margin-bottom:20px;
            list-style:none;
            background-color:#f5f5f5;
            border-radius:4px;
            font-size: 12px;
        }
        .breadcrumb>li+li:before{content:"/\00a0";padding:0 5px;color:#ccc}
        .breadcrumb>.active{color:#777}

    </style>
    
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
                        <li class="js-selected-navigation-item menu-item"><a href="<?php echo U('User/user_list');?>" ><i class="fa fa-upload"></i><span class="nav-label">用户列表</span></a></li>
                    </nav>
                    <nav class="menu">
                        <h3 class="menu-heading">
                            申请管理
                        </h3>
                        <li class="js-selected-navigation-item menu-item"><a href="<?php echo U('Application/item_list');?>" ><i class="fa fa-wrench"></i><span class="nav-label">申请列表</span></a></li>
                        <!--<li class="js-selected-navigation-item menu-item"><a href="link" ><i class="fa fa-map-signs"></i><span class="nav-label">已通过申请</span></a></li>-->
                        <!--<li class="js-selected-navigation-item menu-item"><a href="upload" ><i class="fa fa-upload"></i><span class="nav-label">未通过申请</span></a></li>-->
                        <li class="js-selected-navigation-item menu-item"><a href="news" ><i class="fa fa-wrench"></i><span class="nav-label">无效申请</span></a></li>
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
                        <li class="js-selected-navigation-item menu-item"><a href="news" ><i class="fa fa-wrench"></i><span class="nav-label">管理员记录</span></a></li>
                        <li class="js-selected-navigation-item menu-item"><a href="link" ><i class="fa fa-map-signs"></i><span class="nav-label">用户记录</span></a></li>
                  </nav>
                </div>
                <div class="column three-fourths">
                    
<div class="columns">
    <div class="single-column">

        <div class="boxed-group flush">
            <h3>产品团队</h3>
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
                            <td>江如意、赵瀚卿...</td>
                        </tr>
                        <tr>
                            <td>联系我们</td>
                            <td>
                                service@corethink.cn
                            </td>
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
        <a href="https://github.com" aria-label="Homepage" class="site-footer-mark" title="GitHub">
            <svg aria-hidden="true" class="octicon octicon-mark-github" height="24" version="1.1" viewBox="0 0 16 16" width="24">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59 0.4 0.07 0.55-0.17 0.55-0.38 0-0.19-0.01-0.82-0.01-1.49-2.01 0.37-2.53-0.49-2.69-0.94-0.09-0.23-0.48-0.94-0.82-1.13-0.28-0.15-0.68-0.52-0.01-0.53 0.63-0.01 1.08 0.58 1.23 0.82 0.72 1.21 1.87 0.87 2.33 0.66 0.07-0.52 0.28-0.87 0.51-1.07-1.78-0.2-3.64-0.89-3.64-3.95 0-0.87 0.31-1.59 0.82-2.15-0.08-0.2-0.36-1.02 0.08-2.12 0 0 0.67-0.21 2.2 0.82 0.64-0.18 1.32-0.27 2-0.27 0.68 0 1.36 0.09 2 0.27 1.53-1.04 2.2-0.82 2.2-0.82 0.44 1.1 0.16 1.92 0.08 2.12 0.51 0.56 0.82 1.27 0.82 2.15 0 3.07-1.87 3.75-3.65 3.95 0.29 0.25 0.54 0.73 0.54 1.48 0 1.07-0.01 1.93-0.01 2.2 0 0.21 0.15 0.46 0.55 0.38C13.71 14.53 16 11.53 16 8 16 3.58 12.42 0 8 0z"></path></svg>
        </a>
        <ul class="site-footer-links">
            <li>&copy; 2016 <span>安徽工业大学</span>, Inc.</li>
            <li><a href="http：//www.ahut.edu.cn">工大首页</a></li>
            <li><a href="http://gczx.ahut.edu.cn/">工创中心</a></li>
            <li><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
            <li><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact</a></li>
            <li><a href="https://help.github.com" data-ga-click="Footer, go to help, text:help">Help</a></li>
        </ul>
    </div>
</div>

</body>
</html>