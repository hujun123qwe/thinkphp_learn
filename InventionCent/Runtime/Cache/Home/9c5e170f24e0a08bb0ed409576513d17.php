<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <title>安徽工业大学创新学分审核系统后台管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="author" content="安徽工业大学">
    <meta name="description" content="安徽工业大学创新学分审核系统后台管理">
    <meta name="format-detection" content="telephone=no,email=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="apple-touch-icon" type="image/x-icon" href="/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="/logo.png">
    <link rel="stylesheet" type="text/css" href="<?php echo (C("__HOME_CSS__")); ?>/cui.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo (C("__HOME_CSS__")); ?>/admin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo (C("__HOMR_CSS__")); ?>/animate.min.css">
    <script type="text/javascript" src="<?php echo (C("__HOME_JS__")); ?>/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo (C("__HOME_JS__")); ?>/cui.min.js"></script>
    <script type="text/javascript" src="<?php echo (C("__HOME_JS__")); ?>/admin.js"></script>
    
</head>
<body>
    <div class="clearfix full-header">
        
                <!-- 顶部导航 -->
            <div class="navbar navbar-inverse navbar-fixed-top main-nav" role="navigation">
                <div class="collapse navbar-collapse navbar-collapse-top">
                    <ul class="nav navbar-nav">
                        <li><a href=""><i class="fa fa-home"></i>
                            <span style="font-size: large;">安徽工业大学创新学分审核系统后台管理</span></a></li>
                        <!-- 主导航 -->
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="" class="ajax-get no-refresh"><i class="fa fa-trash"></i>首页</a></li>
                        <li><a target="_blank" href="/"><i class="fa fa-external-link-square"></i> 打开前台</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i><?php echo ($user_info["user_name"]); ?>hujun123qwe<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo U('Admin/Public/logout');?>" class="ajax-get"><i class="fa fa-sign-out"></i>退出</a></li>
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
                                    <li>
                                        <a data-toggle="collapse" href="#navside-collapse--1">
                                            <i class="fa fa-folder-open-o"></i>
                                            <span class="nav-label">系统功能</span>
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="nav navside-nav navside-second collapse in" id="navside-collapse--1">
                                            <li >
                                                <a href="/admin.php?s=/admin/config/group.html" >
                                                    <i class="fa fa-wrench"></i>
                                                    <span class="nav-label">系统设置</span>
                                                </a>
                                            </li><li >
                                            <a href="/admin.php?s=/admin/nav/index.html" >
                                                <i class="fa fa-map-signs"></i>
                                                <span class="nav-label">导航管理</span>
                                            </a>
                                        </li><li >
                                            <a href="/admin.php?s=/admin/link/index.html" >
                                                <i class="fa fa-link"></i>
                                                <span class="nav-label">快捷链接</span>
                                            </a>
                                        </li><li >
                                            <a href="/admin.php?s=/admin/config/index.html" >
                                                <i class="fa fa-cogs"></i>
                                                <span class="nav-label">配置管理</span>
                                            </a>
                                        </li><li >
                                            <a href="/admin.php?s=/admin/upload/index.html" >
                                                <i class="fa fa-upload"></i>
                                                <span class="nav-label">上传管理</span>
                                            </a>
                                        </li>                                            </ul>                                    </li><li>
                                    <a data-toggle="collapse" href="#navside-collapse--2">
                                        <i class="fa fa-folder-open-o"></i>
                                        <span class="nav-label">用户管理</span>
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="nav navside-nav navside-second collapse in" id="navside-collapse--2">
                                        <li><a href="/admin.php?s=/admin/user/index.html" >
                                                <i class="fa fa-user"></i>
                                                <span class="nav-label">添加用户</span>
                                            </a>
                                        </li>
                                        <li><a href="/admin.php?s=/admin/access/index.html" >
                                            <i class="fa fa-lock"></i>
                                            <span class="nav-label">查看用户</span>
                                        </a>
                                        </li>
                                        <li><a href="/admin.php?s=/admin/group/index.html" >
                                            <i class="fa fa-sitemap"></i>
                                            <span class="nav-label">用户组管理</span>
                                        </a>
                                    </li>
                                    </ul>
                                </li><li>
                                    <a data-toggle="collapse" href="#navside-collapse--3">
                                        <i class="fa fa-folder-open-o"></i>
                                        <span class="nav-label">扩展中心</span>
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="nav navside-nav navside-second collapse in" id="navside-collapse--3">
                                        <li >
                                            <a href="/admin.php?s=/admin/theme/index.html" >
                                                <i class="fa fa-adjust"></i>
                                                <span class="nav-label">前台主题</span>
                                            </a>
                                        </li><li >
                                        <a href="/admin.php?s=/admin/module/index.html" >
                                            <i class="fa fa-th-large"></i>
                                            <span class="nav-label">功能模块</span>
                                        </a>
                                    </li><li >
                                        <a href="/admin.php?s=/admin/addon/index.html" >
                                            <i class="fa fa-th"></i>
                                            <span class="nav-label">插件管理</span>
                                        </a>
                                    </li>                                            </ul>                                    </li>                            </ul>
                            </nav>
                        </div>

                        <!-- 右侧内容 -->
                        <div id="main" class="col-xs-12 col-sm-10 main"  style="overflow-y: scroll;">
                            
            <!-- 右侧内容 -->
            <div id="main" class="col-xs-12 col-sm-10 main">
                <!-- 面包屑导航 -->
                <ul class="breadcrumb">
                    <li><i class="fa fa-map-marker"></i></li>
                    <li class="text-muted">首 页</li>
                </ul>

                <!-- 多标签后台内容部分 -->
                <div class="tab-content ct-tab-content">
                    <!-- 首页 -->
                    <div role="tabpanel" class="fade in active" id="home">
                        <div class="dashboard clearfix">
                            <div class="col-xs-12 col-sm-6 col-lg-4 ct-update">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="update pull-right"></div>
                                        <i class="fa fa-cog"></i> 系统信息
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-condensed text-overflow">
                                            <tbody>
                                            <tr>
                                                <td>PloverUAV版本</td>
                                                <td>
                                                        <span class="version">
                                                            v                                                                                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>产品型号</td>
                                                <td>（  ）</td>
                                            </tr>
                                            <tr>
                                                <td>官方正版授权</td>
                                                <td class="sn_info">
                                                    <a href="http://www.ploveruav.com" target="_blank" class="btn-danger" style="padding:2px 5px;"><i class="fa fa-lock"></i> 未授权！</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ThinkPHP版本</td>
                                                <td>3.2.3</td>
                                            </tr>
                                            <tr>
                                                <td>服务器操作系统</td>
                                                <td>WINNT</td>
                                            </tr>
                                            <tr>
                                                <td>运行环境</td>
                                                <td>
                                                    Apache/2.4.17                                                    </td>
                                            </tr>
                                            <tr>
                                                <td>PHP版本</td>
                                                <td>5.3.29-upupw</td>
                                            </tr>
                                            <tr>
                                                <td>MYSQL版本</td>
                                                <td>10.1.8-MariaDB</td>
                                            </tr>
                                            <tr>
                                                <td>上传限制</td>
                                                <td>300M</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-lg-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-actions"></div>
                                        <i class="fa fa-th-list"></i> 产品团队
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-condensed">
                                            <tbody>
                                            <tr>
                                                <td>网站标题</td>
                                                <td>啄木鸟无人机</td>
                                            </tr>
                                            <tr>
                                                <td>项目开发团队</td>
                                                <td>安徽啄木鸟无人机科技有限公司</td>
                                            </tr>
                                            <tr>
                                                <td>CoreThink框架</td>
                                                <td><a href="http://www.ploveruav.com">安徽啄木鸟无人机科技有限公司</a></td>
                                            </tr>
                                            <tr>
                                                <td>官方网址</td>
                                                <td><a href="http://www.ploveruav.com">http://www.ploveruav.com</a></td>
                                            </tr>
                                            <tr>
                                                <td>核心团队</td>
                                                <td>江如意、赵瀚卿...</td>
                                            </tr>
                                            <tr>
                                                <td>官方QQ群</td>
                                                <td>
                                                    <a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=1ac8801c2f274de186f5c52203f428a1726ba9e3018aa579399b4c6161ca63cd">
                                                        <img border="0" src="data:image/png;base64,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" alt="CoreThink交流群" title="CoreThink交流群">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>联系我们</td>
                                                <td>
                                                    service@corethink.cn
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- 后台首页小工具 -->
                        </div>
                    </div>
                </div>

                <div class="clearfix footer">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" target="_blank" href="/">
                                    <span>PloverUAV</span>
                                </a>
                            </div>
                            <div class="collapse navbar-collapse navbar-collapse-bottom">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="http://www.ploveruav.com" class="text-muted" target="_blank">
                                            <span>版权所有 © 2014-2016</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a class="text-muted pull-right">框架开发：安徽啄木鸟无人机科技有限公司</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



                            <div class="clearfix footer">
                                <div class="navbar navbar-default" role="navigation">
                                    <div class="container-fluid">
                                        <div class="navbar-header">
                                            <a class="navbar-brand" target="_blank" href="/">
                                                <span>安徽工业大学创新学分审核系统</span>
                                            </a>
                                        </div>
                                        <div class="collapse navbar-collapse navbar-collapse-bottom">
                                            <ul class="nav navbar-nav">
                                                <li>
                                                    <a href="<?php echo C('WEBSITE_DOMAIN');?>" class="text-muted" target="_blank">
                                                        <span>版权所有 © 2016-2020</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a class="text-muted pull-right">有问题请联系：15551053527，hujun123qwe@163.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        
    </div>

</body>
</html>