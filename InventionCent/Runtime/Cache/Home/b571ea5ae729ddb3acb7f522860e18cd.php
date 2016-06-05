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
                        <li class="js-selected-navigation-item menu-item"><a href="news" ><i class="fa fa-wrench"></i><span class="nav-label">管理员记录</span></a></li>
                        <li class="js-selected-navigation-item menu-item"><a href="link" ><i class="fa fa-map-signs"></i><span class="nav-label">用户记录</span></a></li>
                  </nav>
                </div>
                <div class="column three-fourths">
                    

<div class="boxed-group">
    <h3>选择导出信息</h3>
    <div class="boxed-group-inner mini-repo-list">
        <form enctype="multipart/form-data" accept-charset="UTF-8" action="<?php echo U('Credits/print_view');?>" class="columns js-uploadable-container js-upload-avatar-image is-default" method="post">
            <div class="column two-thirds">
                <dl class="form-group">
                    <dt><label for="file_name">导出EXCEL文件名</label></dt>
                    <dd><input class="form-control"id="file_name" name="file_name" required="required" type="text" /></dd>
                </dl>
                <dl class="form-group">
                    <dt><label for="excel_line"></label></dt>
                    <dd><input type="checkbox" checked="checked" name="item_1"><label>序号</label></dd>
                    <dd><input type="checkbox" checked="checked" name="item_2"><label>学生姓名</label></dd>
                    <dd><input type="checkbox" checked="checked" name="item_3"><label>学号</label></dd>
                    <dd><input type="checkbox" checked="checked" name="item_4"><label>班级</label></dd>
                    <dd><input type="checkbox" checked="checked" name="item_5"><label>学院</label></dd>
                    <dd><input type="checkbox" checked="checked" name="item_6"><label>邮箱</label></dd>
                    <dd><input type="checkbox" checked="checked" name="item_7"><label>手机号</label></dd>
                    <dd><input type="checkbox" checked="checked" name="item_8"><label>住址</label></dd>
                    <dd><input type="checkbox" checked="checked" name="item_9"><label>项目类型</label></dd>
                    <dd><input type="checkbox" checked="checked" name="item_10"><label>项目名称</label></dd>
                    <dd><input type="checkbox" checked="checked" name="item_11"><label>获得学分</label></dd>
                    <dd><input type="checkbox" checked="checked" name="item_12"><label>申请时间</label></dd>
                    <dd><input type="checkbox" checked="checked" name="item_13"><label>审核时间</label></dd>
                    <dd><input type="checkbox" checked="checked" name="item_14"><label>指导老师</label></dd>
                    <dd><input type="checkbox" checked="checked" name="item_15"><label>小组人数</label></dd>
                    <dd><input type="checkbox" checked="checked" name="item_16"><label>项目等级</label></dd>
                    <dd><input type="checkbox" checked="checked" name="item_17"><label>项目性质</label></dd>
                </dl>
                <p><button type="submit" class="btn btn-primary">确定 导出</button></p>
            </div>
        </form>
        <p class="note">
            We store your personal data in the Anhui University of Technology only.
        </p>
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
            <img src="<?php echo (C("__HOME_IMG__")); ?>/ahut.png" class="octicon octicon-mark-github" style="height: 30px;width: 30px;"/>
        </a>
        <ul class="site-footer-links">
            <li>&copy; 2016 <span>安徽工业大学</span>, Inc.</li>
            <li><a href="http://www.ahut.edu.cn">工大首页</a></li>
            <li><a href="http://gczx.ahut.edu.cn/">工创中心</a></li>
            <li><a href="http://jwcad.ahut.edu.cn/">教务处</a></li>
            <li><a href="http://library_web.ahut.edu.cn/MainWeb/index.asp">校图书馆</a></li>
            <li><a href="mailto:hujun123qwe@163.com">Help</a></li>
        </ul>
    </div>
</div>
</body>
</html>