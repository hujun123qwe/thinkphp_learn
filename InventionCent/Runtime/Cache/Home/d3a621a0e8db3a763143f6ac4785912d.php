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
                <h3>项目审核</h3>
                <ul class="boxed-group-inner mini-repo-list">
                    <li class="public source">
                <div class="boxed-group-inner clearfix">
                <div class="column">
                    <dl class="form-group">
                        <dt><label>项目名称</label></dt>
                        <dd><?php echo ($item_info["item_name"]); ?></dd>
                    </dl>
                    <dl class="form-group">
                        <dt><label>申请人姓名</label></dt>
                        <dd><?php echo ($user_info["user_name"]); ?></dd>
                    </dl>
                    <dl class="form-group">
                        <dt><label>申请人学号</label></dt>
                        <dd><?php echo ($user_info["student_id"]); ?></dd>
                    </dl>
                    <dl class="form-group">
                        <dt><label>申请人学院</label></dt>
                        <dd><?php echo ($user_info["academy"]); ?></dd>
                    </dl>
                    <dl class="form-group">
                        <dt><label>申请人班级</label></dt>
                        <dd><?php echo ($user_info["iclass"]); ?></dd>
                    </dl>
                    <dl class="form-group">
                        <dt><label>联系手机</label></dt>
                        <dd><?php echo ($user_info["phone"]); ?></dd>
                    </dl>
                    <dl class="form-group">
                        <dt><label>参与小组人数</label></dt>
                        <dd><?php echo ($apply_info["igroup"]); ?>人组</dd>
                    </dl>
                    <dl class="form-group">
                        <dt><label>项目等级</label></dt>
                        <dd><?php switch($apply_info["grade"]): case "1": ?>优秀<?php break;?>
                            <?php case "2": ?>良好<?php break;?>
                            <?php case "3": ?>通过<?php break;?>
                            <?php case "4": ?>不通过<?php break;?>
                            <?php default: ?>未知<?php endswitch;?>
                        </dd>
                    </dl>
                    <dl class="form-group">
                        <dt><label>项目性质</label></dt>
                        <dd><?php switch($apply_info["item_type"]): case "0": ?>一般课题项目<?php break;?>
                            <?php case "1": ?>重点课题项目<?php break;?>
                            <?php default: ?>未知<?php endswitch;?></dd>
                    </dl>
                    <dl class="form-group">
                        <dt>《安徽工业大学SRTP项目结题验收表》</dt>
                        <dd><img style="max-width:650px;" src="/uploads/<?php echo ($apply_info["upload_file"]); ?>"/></dd>
                        <dd><a href="/uploads/<?php echo ($apply_info["upload_file"]); ?>">下载（不是图片）</a></dd>
                    </dl>
                    <dl class="form-group">
                        <dt>其他文件1</dt>
                        <dd><img style="max-width:650px;" src="/uploads/<?php echo ($apply_info["upload_file_0"]); ?>"/></dd>
                        <dd><a href="/uploads/<?php echo ($apply_info["upload_file_0"]); ?>">下载（不是图片）</a></dd>
                    </dl>
                    <dl class="form-group">
                        <dt>其他文件2</dt>
                        <dd><img style="max-width:650px;" src="/uploads/<?php echo ($apply_info["upload_file_1"]); ?>"/></dd>
                        <dd><a href="/uploads/<?php echo ($apply_info["upload_file_1"]); ?>">下载（不是图片）</a></dd>
                    </dl>
                    <dl class="form-group">
                        <dt>其他文件3</dt>
                        <dd><img style="max-width:650px;" src="/uploads/<?php echo ($apply_info["upload_file_2"]); ?>"/></dd>
                        <dd><a href="/uploads/<?php echo ($apply_info["upload_file_2"]); ?>">下载（不是图片）</a></dd>
                    </dl>
                    <dl class="form-group">
                        <dt>其他文件4</dt>
                        <dd><img style="max-width:650px;" src="/uploads/<?php echo ($apply_info["upload_file_3"]); ?>"/></dd>
                        <dd><a href="/uploads/<?php echo ($apply_info["upload_file_3"]); ?>">下载（不是图片）</a></dd>
                    </dl>
                    <p><a href="<?php echo U('Credits/verified',array('apply_id'=>$item_info['apply_id']),'');?>"><button class="btn">审核 通过</button></a>
                        <a href=""><button class="btn">返回</button></a>
                        <a href=""><button class="btn">弄虚作假</button></a>
                    </p>
                    <p class="note">
                        We store your personal data in the Anhui University of Technology only.
                    </p>
                </div>

        </div>
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
            <li><a href="mailto:hujun123qwe@163.com">Help</a></li>
        </ul>
    </div>
</div>
</body>
</html>