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
    <link rel="stylesheet" type="text/css" href="/Public/libs/cui/css/cui.min.css">
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
        <a class="header-logo-invertocat" href="<?php echo C('HOME_PAGE');?>"><h2>大学生创新学分审核系统</h2></a>
        <div class="header-search   js-site-search" role="search"></div>
        <ul class="header-nav left" role="navigation"></ul>
        <ul class="header-nav user-nav right" id="user-links">
            <li class="header-nav-item">
                <a href="/notifications" aria-label="You have no unread notifications" class="header-nav-link notification-indicator tooltipped tooltipped-s js-socket-channel js-notification-indicator" data-channel="notification-changed-v2:8892333" data-ga-click="Header, go to notifications, icon:read">
                    <span class="mail-status "></span>
                    <svg aria-hidden="true" class="octicon octicon-bell" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M14 12v1H0v-1l0.73-0.58c0.77-0.77 0.81-2.55 1.19-4.42 0.77-3.77 4.08-5 4.08-5 0-0.55 0.45-1 1-1s1 0.45 1 1c0 0 3.39 1.23 4.16 5 0.38 1.88 0.42 3.66 1.19 4.42l0.66 0.58z m-7 4c1.11 0 2-0.89 2-2H5c0 1.11 0.89 2 2 2z"></path></svg>
                </a>
            </li>
            <li class="header-nav-item dropdown js-menu-container">
                <a class="header-nav-link tooltipped tooltipped-s js-menu-target">
                    <svg aria-hidden="true" class="octicon octicon-plus left" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 9H7v5H5V9H0V7h5V2h2v5h5v2z"></path></svg>
                    <span class="dropdown-caret"></span></a>
                <div class="dropdown-menu-content js-menu-content">
                    <ul class="dropdown-menu dropdown-menu-sw">
                        <a class="dropdown-item" href="/new" data-ga-click="Header, create new repository">New repository</a>
                        <a class="dropdown-item" href="/new/import" data-ga-click="Header, import a repository">Import repository</a>
                        <a class="dropdown-item" href="/organizations/new" data-ga-click="Header, create new organization">New organization</a>
                    </ul>
                </div>
            </li>
            <li class="header-nav-item dropdown js-menu-container">
                <a class="header-nav-link name tooltipped tooltipped-sw js-menu-target">
                    <img alt="@hujun123qwe" class="avatar" height="20" src="https://avatars2.githubusercontent.com/u/8892333?v=3&amp;s=40" width="20" />
                    <span class="dropdown-caret"></span>
                </a>
                <div class="dropdown-menu-content js-menu-content">
                    <div class="dropdown-menu  dropdown-menu-sw">
                        <div class=" dropdown-header header-nav-current-user css-truncate">
                            Signed in as <strong class="css-truncate-target">hujun123qwe</strong>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/hujun123qwe" data-ga-click="Header, go to profile, text:your profile">
                            Your profile
                        </a>
                        <a class="dropdown-item" href="/stars" data-ga-click="Header, go to starred repos, text:your stars">
                            Your stars
                        </a>
                        <a class="dropdown-item" href="/explore" data-ga-click="Header, go to explore, text:explore">
                            Explore
                        </a>
                        <a class="dropdown-item" href="/integrations" data-ga-click="Header, go to integrations, text:integrations">
                            Integrations
                        </a>
                        <a class="dropdown-item" href="https://help.github.com" data-ga-click="Header, go to help, text:help">
                            Help
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/settings/profile" data-ga-click="Header, go to settings, icon:settings">
                            Settings
                        </a>
                        <form accept-charset="UTF-8" action="/logout" class="logout-form" method="post">
                            <div style="margin:0;padding:0;display:inline">
                                <input name="utf8" type="hidden" value="&#x2713;" />
                                <input name="authenticity_token" type="hidden"/>
                            </div>
                            <button class="dropdown-item dropdown-signout" data-ga-click="Header, sign out, icon:logout">
                                Sign out
                            </button>
                        </form>
                    </div>
                </div>
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
                    
    <div class="boxed-group">
        <h2>编辑项目</h2>
        <div class="boxed-group-inner clearfix">
                <div class="column">
                    <dl class="form-group">
                        <dt><label for="user_profile_name">项目名称</label></dt>
                        <dd><input class="form-control" id="user_profile_name" name="item_name" size="30" type="text" value="<?php echo ($item_info["item_name"]); ?>" /></dd>
                    </dl>
                    <dl class="form-group">
                        <dt><label for="h1">申请人姓名</label></dt>
                        <dd><input class="form-control" id="h1" name="user_name" size="30" type="text" value="<?php echo ($item_info["user_name"]); ?>" /></dd>
                    </dl>
                    <dl class="form-group">
                        <dt><label for="h2">申请人学号</label></dt>
                        <dd><input class="form-control" id="h2" name="student_id" size="30" type="text" value="<?php echo ($item_info["student_id"]); ?>" /></dd>
                    </dl>
                    <dl class="form-group">
                        <dt><label for="h2">申请人学院</label></dt>
                        <dd><input class="form-control" id="h3" name="academy" size="30" type="text" value="<?php echo ($item_info["academy"]); ?>" /></dd>
                    </dl>
                    <dl class="form-group">
                        <dt><label for="h3">申请人班级</label></dt>
                        <dd><input class="form-control" id="h4" name="iclass" size="30" type="text" value="<?php echo ($item_info["iclass"]); ?>" /></dd>
                    </dl>
                    <dl class="form-group">
                        <dt><label for="h5">联系手机</label></dt>
                        <dd><input class="form-control" id="h5" name="phone" size="30" type="text" value="<?php echo ($item_info["phone"]); ?>" /></dd>
                    </dl>
                    <p><a href="<?php echo U('Credits/verified',array('item_id'=>$item_info['item_id']),'');?>"><button class="btn">审核 通过</button></a>
                        <a href=""><button class="btn">返回</button></a>
                        <a href=""><button class="btn">弄虚作假</button></a>
                    </p>
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