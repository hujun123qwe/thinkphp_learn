<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <title><?php echo ($meta_title); ?>｜<?php echo C('WEB_SITE_TITLE');?>后台管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="author" content="<?php echo C('WEB_SITE_TITLE');?>">
    <meta name="keywords" content="dfe">
    <meta name="description" content="fsefe">
    <meta name="generator" content="CoreThink">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php echo C('WEB_SITE_TITLE');?>">
    <meta name="format-detection" content="telephone=no,email=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="apple-touch-icon" type="image/x-icon" href="/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="/logo.png">
    <link rel="stylesheet" type="text/css" href="/Public/libs/cui/css/cui.min.css">
    <link rel="stylesheet" type="text/css" href="/./InventionCent/Home/View/Public/css/admin.css">
    <link rel="stylesheet" type="text/css" href="/./InventionCent/Home/View/Public/css/theme/<?php echo C('ADMIN_THEME');?>.css">
    <link rel="stylesheet" type="text/css" href="/Public/libs/animate/animate.min.css">
    
    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/Public/libs/jquery/1.x/jquery.min.js"></script>
</head>
<body>
    <div class="clearfix full-header">
        
            <!-- 顶部导航 -->
            <div class="navbar navbar-inverse navbar-fixed-top main-nav" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-top">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" target="_blank" href="/"><img class="logo img-responsive" src="<?php echo (C("WEB_SITE_LOGO")); ?>"></a>
            </div>
            <div class="collapse navbar-collapse navbar-collapse-top">
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo U('Admin/Index/removeRuntime');?>" class="ajax-get no-refresh"><i class="fa fa-trash"></i> 清空缓存</a></li>
                    <li><a target="_blank" href="/"><i class="fa fa-external-link-square"></i> 打开前台</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i> <?php echo ($_user_auth["username"]); ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo U('Admin/Public/logout');?>" class="ajax-get"><i class="fa fa-sign-out"></i> 退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>

    <div class="clearfix full-container">
        <div class="container-fluid with-top-navbar">
            <div class="row">

                <!-- 后台左侧导航 -->
                <div id="sidebar" class="col-xs-12 col-sm-2 sidebar tab-content">
                    <!-- 模块菜单 -->
                    <nav class="navside navside-default" role="navigation">
                        <ul class="nav navside-nav navside-first">
                            <li><a data-toggle="collapse" href="#navside-collapse--1"><i class="fa fa-folder-open-o"></i><span class="nav-label">系统功能</span><span class="fa arrow"></span></a>
                                <ul class="nav navside-nav navside-second collapse in" id="navside-collapse--1">
                                    <li><a href="news" ><i class="fa fa-wrench"></i><span class="nav-label">通知公告</span></a></li>
                                    <li><a href="link" ><i class="fa fa-map-signs"></i><span class="nav-label">友情链接</span></a></li>
                                    <li><a href="upload" ><i class="fa fa-upload"></i><span class="nav-label">上传管理</span></a></li>
                                </ul>
                            </li>

                            <li><a data-toggle="collapse" href="#navside-collapse--2"><i class="fa fa-folder-open-o"></i><span class="nav-label">用户管理</span><span class="fa arrow"></span></a>
                                <ul class="nav navside-nav navside-second collapse in" id="navside-collapse--2">
                                    <li><a href="user_admin" ><i class="fa fa-wrench"></i><span class="nav-label">管理员管理</span></a></li>
                                    <li><a href="user_setting" ><i class="fa fa-map-signs"></i><span class="nav-label">用户设置</span></a></li>
                                    <li><a href="/index.php/Admin/Upload/index.html" ><i class="fa fa-upload"></i><span class="nav-label">用户统计</span></a></li>
                                    <li><a href="user_list" ><i class="fa fa-upload"></i><span class="nav-label">用户列表</span></a></li>
                                </ul>
                            </li>

                            <li><a data-toggle="collapse" href="#navside-collapse--3"><i class="fa fa-folder-open-o"></i><span class="nav-label">申请管理</span><span class="fa arrow"></span></a>
                                <ul class="nav navside-nav navside-second collapse in" id="navside-collapse--3">
                                    <li><a href="application_list" ><i class="fa fa-wrench"></i><span class="nav-label">申请列表</span></a></li>
                                    <li><a href="/index.php/Admin/Nav/index.html" ><i class="fa fa-map-signs"></i><span class="nav-label">已通过申请</span></a></li>
                                    <li><a href="/index.php/Admin/Upload/index.html" ><i class="fa fa-upload"></i><span class="nav-label">未通过申请</span></a></li>
                                    <li><a href="/index.php/Admin/Upload/index.html" ><i class="fa fa-upload"></i><span class="nav-label">无效申请</span></a></li>
                                </ul>
                            </li>

                            <li><a data-toggle="collapse" href="#navside-collapse--4"><i class="fa fa-folder-open-o"></i><span class="nav-label">学分管理</span><span class="fa arrow"></span></a>
                                <ul class="nav navside-nav navside-second collapse in" id="navside-collapse--4">
                                    <li><a href="credits_lists" ><i class="fa fa-wrench"></i><span class="nav-label">学分列表</span></a></li>
                                    <li><a href="/index.php/Admin/Nav/index.html" ><i class="fa fa-map-signs"></i><span class="nav-label">未获得学分</span></a></li>
                                    <li><a href="/index.php/Admin/Upload/index.html" ><i class="fa fa-upload"></i><span class="nav-label">学分分类</span></a></li>
                                    <li><a href="/index.php/Admin/Upload/index.html" ><i class="fa fa-upload"></i><span class="nav-label">学分配置</span></a></li>
                                </ul>
                            </li>

                            <li><a data-toggle="collapse" href="#navside-collapse--5"><i class="fa fa-folder-open-o"></i><span class="nav-label">操作记录</span><span class="fa arrow"></span></a>
                                <ul class="nav navside-nav navside-second collapse in" id="navside-collapse--5">
                                    <li><a href="logs_admin" ><i class="fa fa-wrench"></i><span class="nav-label">管理员记录</span></a></li>
                                    <li><a href="logs_students" ><i class="fa fa-map-signs"></i><span class="nav-label">用户记录</span></a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

                <!-- 右侧内容 -->
                
    <!-- 右侧内容 -->
    <div id="main" class="col-xs-12 col-sm-10 main">
        <ul class="breadcrumb">
            <li><i class="fa fa-map-marker"></i></li>
            <li class="text-muted"><a href="index">首页</a></li>
            <li>管理员操作记录</li>
        </ul>

        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$some): $mod = ($i % 2 );++$i;?><br><?php echo ($some["user_name"]); ?>;<?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

            </div>
        </div>
    </div>

    <div class="clearfix full-footer">
        
    </div>

    <div class="clearfix full-script">
        <div class="container-fluid">
            <input type="hidden" id="corethink_home_img" value="__HOME_IMG__">
            <script type="text/javascript" src="/Public/libs/cui/js/cui.min.js"></script>
            <script type="text/javascript" src="/./InventionCent/Home/View/Public/js/admin.js"></script>
            <script type="text/javascript">
                var admin_tabs = '<?php echo ($_admin_tabs); ?>';
                if(admin_tabs == '1' && !(self.frameElement != null && (self.frameElement.tagName == "IFRAME" || self.frameElement.tagName == "iframe"))){
                    parent.parent.location = "<?php echo U('Home/Admin/index');?>";
                }
            </script>
            
        </div>
    </div>
</body>
</html>