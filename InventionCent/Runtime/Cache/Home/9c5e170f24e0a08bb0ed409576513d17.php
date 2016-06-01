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
                <a href="/notifications" aria-label="You have no unread notifications" class="header-nav-link notification-indicator tooltipped tooltipped-s js-socket-channel js-notification-indicator" data-channel="notification-changed-v2:8892333" data-ga-click="Header, go to notifications, icon:read" data-hotkey="g n">
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
                    <nav class="menu">
                        <h3 class="menu-heading">
                            系统管理
                        </h3>
                            <li class="js-selected-navigation-item selected menu-item" aria-selected="true"><a href="" ><i class="fa fa-wrench"></i><span class="nav-label">通知公告</span></a></li>
                            <li class="js-selected-navigation-item menu-item"><a href="" ><i class="fa fa-map-signs"></i><span class="nav-label">友情链接</span></a></li>
                            <li class="js-selected-navigation-item menu-item"><a href="" ><i class="fa fa-upload"></i><span class="nav-label">上传管理</span></a></li>
                     </nav>
                    <nav class="menu">
                        <h3 class="menu-heading">
                            用户管理
                        </h3>
                        <li class="js-selected-navigation-item menu-item"><a href="admin/user_admin" ><i class="fa fa-wrench"></i><span class="nav-label">管理员管理</span></a></li>
                        <li class="js-selected-navigation-item menu-item"><a href="user_setting" ><i class="fa fa-map-signs"></i><span class="nav-label">用户设置</span></a></li>
                        <li class="js-selected-navigation-item menu-item"><a href="admin/user_list" ><i class="fa fa-upload"></i><span class="nav-label">用户列表</span></a></li>
                    </nav>
                    <nav class="menu">
                        <h3 class="menu-heading">
                            申请管理
                        </h3>
                        <li class="js-selected-navigation-item menu-item"><a href="news" ><i class="fa fa-wrench"></i><span class="nav-label">申请列表</span></a></li>
                        <li class="js-selected-navigation-item menu-item"><a href="link" ><i class="fa fa-map-signs"></i><span class="nav-label">已通过申请</span></a></li>
                        <li class="js-selected-navigation-item menu-item"><a href="upload" ><i class="fa fa-upload"></i><span class="nav-label">未通过申请</span></a></li>
                        <li class="js-selected-navigation-item menu-item"><a href="news" ><i class="fa fa-wrench"></i><span class="nav-label">无效申请</span></a></li>
                    </nav>
                    <nav class="menu">
                        <h3 class="menu-heading">
                            学分管理
                        </h3>
                        <li class="js-selected-navigation-item menu-item"><a href="news" ><i class="fa fa-wrench"></i><span class="nav-label">学分列表</span></a></li>
                        <li class="js-selected-navigation-item menu-item"><a href="link" ><i class="fa fa-map-signs"></i><span class="nav-label">学分配置</span></a></li>
                        <li class="js-selected-navigation-item menu-item"><a href="upload" ><i class="fa fa-upload"></i><span class="nav-label">学分分类</span></a></li>
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
                        <h3>后台 管理 系统</h3>
                        <div class="boxed-group-inner clearfix">
                            <div class="column two-thirds">
                                
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
                                                        <img border="0" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAAAWCAMAAAB37HsnAAADAFBMVEVWHhOgZEUpcqtJcJWkt8wSjtK8//9Gs+6knJPQv7ZGlcJLeXkXoOlyvOT/8PJ+RSsMf8DO1N9tocdjs5Kh0uzYsJO0gmQzodsUlORTr+Dr7vZy4faTUzH/29ojlM+93e5jlLwugLPlz7NBndBsMxsOte9ku+qIp8Hd6PaBwuTNm3ludmPR4+0Vm+YilNJdWkCibVrFkGpCkL8ZpO27u9Lh19aU1fYmpOpJldqVXEJIz/mw2e+DyO21oaAZo/DgxK0Xnumvckhosdfe7/rt8vt6NCSLrKNYmcIwib+NoK5Sq9vdzNlzQDbGzNZ7Ukwoqu3+/v+/iFhzk3mFsdLTqI9Tf5/x9fzw18AlnuDc4+0UldupdmLR6fY0jcIPicyYYleSze1bJRvf8PmQyOei2fVMncp0wKRzl7VjPicZn+cynNTv+P3Pxsqa8f6ixeB3c3fUmWm+m4Xe1ev/4u60t5i0eU314MtXd2FSpNCFPy2lZlW7v91+SzuTYEgUwfZ0xvJWuu86lMhkv/CWu9YUrfDn5utoLyPy1rvj6vWVWjc0p+jB5vnm7vmsgnB0NSjU2+ZLo9G1dmI9i7rqxKWjbE20lY3oupW5zNxOg2tynb+EzfSESStBodXEq54uhLuateekcFZzwetruZoTkdVmJxlwqM8Sistjm8Mlm9yLU0eMSjvJlnI2re2y4fmcZkJyuN5vPTXh5/NUtepK0vupakLsyKq3n5Q1p+Xe0eN8m7jR7Puqbl7v0LSQWExtMyPY3unQooN5gGayfVgan+icXTbp7/osea4ajNY4sO+ZrtvZxLW1iXGERC1NdJnz28NeKiB6PSt5PiOdZEve8fRevOvQrpqx2/KXzvk+mcxznsBKmcbA4fPH1Niiz+be5fBCpdrDkXHg8PmSq8MNg8TBqaj/4/T/3uSAeHnw+f0nq+905P68w+M3kcZNoc62flJlxPTX3ejQ5/RzOiuKSyiqclBgKR+aXj3dtZiKttQXxvkzn9ij2/iCRzpWf6L35NCaV0Xk0jIHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADyUlEQVQ4y7WSC1QUVRjHx2xDc8nESXSzl6mx1jVyLCrXusakSa9L7123NXDTZK0Ms8gyqDRGdwptfQHbA6gRZYp2N3LDzZ6opeCj2h5TyESWSVZSmSaY372zCHk4Rzvg/5yZ+93v+9/fvfPd4ZyVi06Icr7jrjmHdKbfuqrP93A54h2diAhd1c+LuByZoixLb8i4acb85/b16N1NaOF8QIuiaHl38+I5z765bvC4cW8tmQ+J7kP/8Nji1XPWZnBvpP86e/bSdnRRUUfzwYP/D72Hoif/u3ptcsuWlq3pHy5Iv6IdbbN1NJc7j+x0Gdy0Nw6Cja9D5L4ZohC9/ewDYeGq+z+hlq+4eyn62udXrZo0+YmWdQuu3rSt+Ci0F5bobJrmUY18tZ6mnK3tUgV1lzNL8TurIYfmfXZ5KFsIZe9+WWhHW179K3mT77YBzdxDh+7cPLQNncd+wzwtXkkz0MOJm425JAsJQpnuFtx6GRLQPyQXzsrcqfR1FgbTU9w3gK7ZnnFGJD/yd0byoUfqlmxrQyOF5xU9qJUIQQMdHUPYsaMaooPVI3iszKhFYad5dlMojIRQk/FlBtoyorkqvy6/qnlEXV1k31yK/oiV+XuEDmiVDOLZsTWeVUuIQEoMnxbrdXg367iBPjUJSF/08MGpfdvfj1RdMngsRU83U0VtZoo2B3U6c2sokag0rbGqLdUs2gwfbzY7QqMbG01lriubXC4EuV8AXVNTc+mkBl+Vr+GVP2fOLP54BiTIdEzlGY4pGgd1mDxNdmA0xQtRPFFpVecxTwtYJfHwps3eiXGoiS3Fdxto+YIXKyoq3v6p77Jlff/oRdGsmifehcU1MXScx4owLteLMHbsrc7DKV4xESeKXhXHVe91YHwgM9w4bOcptCGnIYYelSTL8vd28mlDb2J/MOIbUHzxt7LM0Cm6FaWQhRqYM3HQY4X1GO3wuDE28ZCL+hFGWbTKj4TKmV+G0ZOzXKwhjiPod6YtJ9KtElk+beKQhz8YeiGgEajEWU6IhrRKJS1T1a0OxOTXixAqU/ypzjV0alIqSZQGLnqPsxAKNRm+67gXkmSpdf/XlsKEQqlwf+vUqaW33CcZaIeCFMWETA4WxcioLRo5hpBcZvM7CVGBef3pw36E4fH/oBNWnrvyNXgSbi8t7d//0Rj6GDIpsU0GKopCtzBBDj6o0Si/xNAnt9b2rK2lT58VoPHHhz6GDHT9ewUFBf1uBPWD4Hd7N6EnPCDLkiQFAvV2UH0gEJAkuMaBXdWG9dxFE87rTCd1Wc8cBolttvN3y+WLAAAAAElFTkSuQmCC" alt="CoreThink交流群" title="CoreThink交流群">
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