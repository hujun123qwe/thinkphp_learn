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
                    

    <div class="tabnav">
        <div class="right"><a href="<?php echo U('Application/add_item');?>" class="btn btn-sm">新增</a></div>
        <nav class="tabnav-tabs" data-pjax role="navigation">
            <a href="<?php echo U('Application/item_list');?>" class="tabnav-tab " aria-selected="true" role="tab">
                <svg aria-hidden="true" class="octicon octicon-diff-added" height="16" version="1.1" viewBox="0 0 14 16" width="14">
                    <path d="M13 1H1C0.45 1 0 1.45 0 2v12c0 0.55 0.45 1 1 1h12c0.55 0 1-0.45 1-1V2c0-0.55-0.45-1-1-1z m0 13H1V2h12v12zM6 9H3V7h3V4h2v3h3v2H8v3H6V9z">
                    </path>
                </svg>全部申请</a>
            <a href="<?php echo U('Application/item_verified_admin');?>" class="tabnav-tab " aria-selected="false" role="tab">
                <svg aria-hidden="true" class="octicon octicon-repo" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M4 9h-1v-1h1v1z m0-3h-1v1h1v-1z m0-2h-1v1h1v-1z m0-2h-1v1h1v-1z m8-1v12c0 0.55-0.45 1-1 1H6v2l-1.5-1.5-1.5 1.5V14H1c-0.55 0-1-0.45-1-1V1C0 0.45 0.45 0 1 0h10c0.55 0 1 0.45 1 1z m-1 10H1v2h2v-1h3v1h5V11z m0-10H2v9h9V1z"></path></svg>
                已通过申请</a>
            <a href="<?php echo U('Application/item_unverified_admin');?>" class="tabnav-tab selected" aria-selected="false" role="tab">
                <svg aria-hidden="true" class="octicon octicon-rss" height="16" version="1.1" viewBox="0 0 10 16" width="10"><path d="M2 13H0V11c1.11 0 2 0.89 2 2zM0 3v1c4.97 0 9 4.03 9 9h1c0-5.52-4.48-10-10-10z m0 4v1c2.75 0 5 2.25 5 5h1c0-3.31-2.69-6-6-6z"></path></svg>
                未通过申请
            </a>
        </nav>
    </div>

    <div class="js-repo-filter position-relative">
        <div class="contributions-tab">
            <div class="columns popular-repos">
                <div class="single-column">
                    <div class="boxed-group flush">
                        <table class="capped-list">
                            <thead><tr><th>#</th><th>编号</th><th>项目名</th><th>项目类型</th><th>申请人</th><th>申请时间</th><th>是否通过</th><th>操作</th></tr></thead>
                            <tbody>
                            <?php if(is_array($lists)): $k = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr class="js-navigation-item">
                                    <td><?php echo ($k); ?></td>
                                    <td><?php echo ($vo["apply_id"]); ?></td>
                                    <td><a href="editItem?apply_id=<?php echo ($vo["apply_id"]); ?>"><?php echo ($vo["item_name"]); ?></a></td>
                                    <td><?php echo ($vo["item_type"]); ?></td>
                                    <td><?php echo ($vo["student_id"]); ?></td>
                                    <td><?php echo (date("y-m-d",$vo["apply_time"])); ?></td>
                                    <td>
                                        <?php if($vo["item_status"] == 1 ): ?>已通过
                                            <?php elseif($vo["item_status"] == 0): ?>未审核
                                            <?php else: ?>未知参数<?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo U('Credits/verifyItem',array('apply_id'=>$vo['apply_id']),'');?>">审核</a>&nbsp;
                                        <a href="deleteItem?apply_id=<?php echo ($vo["apply_id"]); ?>">删除</a>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>

                        <?php if(!empty($page)): ?><ul class="pagination"><?php echo ($page); ?></ul><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.contributions-tab -->





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