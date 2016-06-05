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
    <div class="container" style="margin-top:12px;">
        <a class="header-logo-invertocat" href="<?php echo C('HOME_PAGE');?>"><h2>大学生创新学分审核系统</h2></a>
        <div class="header-search   js-site-search" role="search"></div>
        <ul class="header-nav left" role="navigation"></ul>
        <ul class="header-nav user-nav right" style="padding-right:5px;">
            <li class="header-nav-item" style="padding-right:12px;">
                <span class="vcard-username">欢迎<?php echo ($user_info["user_name"]); ?>同学</span>
            </li>
            <li class="header-nav-item" style="padding-right:8px;">
                <a href="<?php echo U('User/edit_student');?>" class="btn btn-sm">个人信息</a>
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
                <div class="column one-fourth vcard" itemscope itemtype="http://schema.org/Person">
                    <a href="#" aria-label="Change your avatar" class="vcard-avatar d-block tooltipped tooltipped-s">
                        <img alt="" class="avatar rounded-2" height="230" src="<?php echo (C("__HOME_IMG__")); ?>/avatar_big.png" width="230" />
                    </a>
                    <h1 class="vcard-names my-3">
                        <div class="vcard-fullname" itemprop="name"><?php echo ($user_info["user_name"]); ?></div>
                        <div class="vcard-username" itemprop="additionalName"><?php echo ($user_info["student_id"]); ?></div>
                    </h1>
                    <ul class="vcard-details border-top border-gray-light py-3">
                        <li aria-label="Organization" class="vcard-detail py-1 css-truncate css-truncate-target" itemprop="worksFor" title="ploverUAV">
                            <svg aria-hidden="true" class="octicon octicon-organization" height="16" version="1.1" viewBox="0 0 14 16" width="14">
                                <path d="M4.75 4.95c0.55 0.64 1.34 1.05 2.25 1.05s1.7-0.41 2.25-1.05c0.34 0.63 1 1.05 1.75 1.05 1.11 0 2-0.89 2-2s-0.89-2-2-2c-0.41 0-0.77 0.13-1.08 0.33C9.61 1 8.42 0 7 0S4.39 1 4.08 2.33c-0.31-0.2-0.67-0.33-1.08-0.33-1.11 0-2 0.89-2 2s0.89 2 2 2c0.75 0 1.41-0.42 1.75-1.05z m5.2-1.52c0.2-0.38 0.59-0.64 1.05-0.64 0.66 0 1.2 0.55 1.2 1.2s-0.55 1.2-1.2 1.2-1.17-0.53-1.19-1.17c0.06-0.19 0.11-0.39 0.14-0.59zM7 0.98c1.11 0 2.02 0.91 2.02 2.02s-0.91 2.02-2.02 2.02-2.02-0.91-2.02-2.02S5.89 0.98 7 0.98zM3 5.2c-0.66 0-1.2-0.55-1.2-1.2s0.55-1.2 1.2-1.2c0.45 0 0.84 0.27 1.05 0.64 0.03 0.2 0.08 0.41 0.14 0.59-0.02 0.64-0.53 1.17-1.19 1.17z m10 0.8H1c-0.55 0-1 0.45-1 1v3c0 0.55 0.45 1 1 1v2c0 0.55 0.45 1 1 1h1c0.55 0 1-0.45 1-1v-1h1v3c0 0.55 0.45 1 1 1h2c0.55 0 1-0.45 1-1V12h1v1c0 0.55 0.45 1 1 1h1c0.55 0 1-0.45 1-1V11c0.55 0 1-0.45 1-1V7c0-0.55-0.45-1-1-1zM3 13h-1V10H1V7h2v6z m7-2h-1V9h-1v6H6V9h-1v2h-1V7h6v4z m3-1h-1v3h-1V7h2v3z"></path>
                            </svg><?php echo ($user_info["academy"]); ?></li>
                        <li aria-label="Home location" class="vcard-detail py-1 css-truncate css-truncate-target" itemprop="homeLocation" title="Anhui Maanshan">
                            <svg aria-hidden="true" class="octicon octicon-location" height="16" version="1.1" viewBox="0 0 12 16" width="12">
                                <path d="M6 0C2.69 0 0 2.5 0 5.5c0 4.52 6 10.5 6 10.5s6-5.98 6-10.5C12 2.5 9.31 0 6 0z m0 14.55C4.14 12.52 1 8.44 1 5.5 1 3.02 3.25 1 6 1c1.34 0 2.61 0.48 3.56 1.36 0.92 0.86 1.44 1.97 1.44 3.14 0 2.94-3.14 7.02-5 9.05z m2-9.05c0 1.11-0.89 2-2 2s-2-0.89-2-2 0.89-2 2-2 2 0.89 2 2z"></path>
                            </svg><?php echo ($user_info["iclass"]); ?></li>
                        <li aria-label="Email" class="vcard-detail py-1 css-truncate css-truncate-target" itemprop="email">
                            <svg aria-hidden="true" class="octicon octicon-mail" height="16" version="1.1" viewBox="0 0 14 16" width="14">
                                <path d="M0 4v8c0 0.55 0.45 1 1 1h12c0.55 0 1-0.45 1-1V4c0-0.55-0.45-1-1-1H1c-0.55 0-1 0.45-1 1z m13 0L7 9 1 4h12zM1 5.5l4 3L1 11.5V5.5z m1 6.5l3.5-3 1.5 1.5 1.5-1.5 3.5 3H2z m11-0.5L9 8.5l4-3v6z"></path></svg>
                            <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;%68%75%6a%75%6e%31%32%33%71%77%65@%31%36%33.%43%4f%4d"><?php echo ($user_info["email"]); ?></a></li>
                        <li aria-label="Blog or website" class="vcard-detail py-1 css-truncate css-truncate-target" itemprop="url">
                            <svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16">
                                <path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path>
                            </svg><a href="http://me.hujun.ren" class="url" rel="nofollow me"><?php echo ($user_info["phone"]); ?></a></li>
                        <li aria-label="Member since" class="vcard-detail py-1 css-truncate css-truncate-target">
                            <svg aria-hidden="true" class="octicon octicon-clock" height="16" version="1.1" viewBox="0 0 14 16" width="14">
                                <path d="M8 8h3v2H7c-0.55 0-1-0.45-1-1V4h2v4z m-1-5.7c3.14 0 5.7 2.56 5.7 5.7S10.14 13.7 7 13.7 1.3 11.14 1.3 8s2.56-5.7 5.7-5.7m0-1.3C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7S10.86 1 7 1z"></path>
                            </svg><span class="join-label">Joined on </span><local-time class="join-date" datetime="2014-09-24T02:55:08Z" day="numeric" month="short" year="numeric"><?php echo (date("D F d Y",$user_info["add_time"])); ?></local-time></li>
                    </ul>

                    <div class="vcard-stats border-top border-bottom border-gray-light mb-3 py-3">
                        <a class="vcard-stat">
                            <strong class="vcard-stat-count d-block"><?php echo ($application_count); ?></strong>
                            <span class="text-muted">提交申请</span>
                        </a>
                        <a class="vcard-stat">
                            <strong class="vcard-stat-count d-block"><?php echo ($application_verified); ?></strong>
                            <span class="text-muted">通过申请</span>
                        </a>
                        <a class="vcard-stat">
                            <strong class="vcard-stat-count d-block"><?php echo ($credits_value); ?></strong>
                            <span class="text-muted">创新学分</span>
                        </a>
                    </div>
                </div>

                
    	<div class="column three-fourths">
        <div class="boxed-group">
            <h3>编辑项目</h3>
	            <div class="boxed-group-inner clearfix">
	                <form enctype="multipart/form-data" accept-charset="UTF-8" action="<?php echo U('Application/edit');?>" class="columns js-uploadable-container js-upload-avatar-image is-default" method="post">
						<input type="hidden" name="apply_id" value="<?php echo ($item_info["apply_id"]); ?>"/>
	                <div class="column two-thirds">
	                    <dl class="form-group">
	                        <dt><label for="user_profile_name">项目名称</label></dt>
	                        <dd><input class="form-control" style="opacity: 0.5;" disabled="disabled" id="user_profile_name" name="item_name" size="30" type="text" value="<?php echo ($item_info["item_name"]); ?>" /></dd>
	                    </dl>
	                    <dl class="form-group">
	                        <dt><label for="h1">申请人姓名</label></dt>
	                        <dd><input class="form-control" style="opacity: 0.5;" disabled="disabled" id="h1" name="user_name" size="30" type="text" value="<?php echo ($user_info["user_name"]); ?>" /></dd>
	                    </dl>
	                    <dl class="form-group">
	                        <dt><label for="h2">申请人学号</label></dt>
	                        <dd><input class="form-control disabled"  style="opacity: 0.5;" disabled="disabled" id="h2" name="student_id" size="30" type="text" value="<?php echo ($user_info["student_id"]); ?>" /></dd>
	                    </dl>
	                    <dl class="form-group">
	                        <dt><label for="h2">申请人学院</label></dt>
	                        <dd><input class="form-control"  style="opacity: 0.5;" disabled="disabled" id="h2" name="academy" size="30" type="text" value="<?php echo ($user_info["academy"]); ?>" /></dd>
	                    </dl>
	                    <dl class="form-group">
	                        <dt><label for="h3">申请人班级</label></dt>
	                        <dd><input class="form-control"  style="opacity: 0.5;" disabled="disabled" id="h3" name="iclass" size="30" type="text" value="<?php echo ($user_info["iclass"]); ?>" /></dd>
	                    </dl>
	                    <dl class="form-group">
	                        <dt><label for="h5">联系手机</label></dt>
	                        <dd><input class="form-control"  style="opacity: 0.5;" disabled="disabled" id="h5" name="phone" size="30" type="text" value="<?php echo ($user_info["phone"]); ?>" /></dd>
	                    </dl>
	                     <dl class="form-group">
	                     	<dt><label for="h5">指导老师</label></dt>
                            <dd><input type="text" name="teacher" required="required" class="form-control" value="<?php echo ($apply_info["teacher"]); ?>"></dd>
                        </dl>	
                        <dl class="form-group">
                            <dt><label>请选择小组人数</label></dt>
                            <dd><select class="form-control" name="group" style="width: 80px;">
                                <option value="1" <?php if($apply_info["igroup"] == 1): ?>selected="selected"<?php endif; ?>>1人组</option>
                                <option value="2" <?php if($apply_info["igroup"] == 2): ?>selected="selected"<?php endif; ?>>2人组</option>
                                <option value="3" <?php if($apply_info["igroup"] == 3): ?>selected="selected"<?php endif; ?>>3人组</option>
                                <option value="4" <?php if($apply_info["igroup"] == 4): ?>selected="selected"<?php endif; ?>>4人组</option>
                                <option value="5" <?php if($apply_info["igroup"] == 5): ?>selected="selected"<?php endif; ?>>5人组</option>
                            </select></dd>
                        </dl>
                        <dl class="form-group">
                            <dt><label>请选择成绩等级</label></dt>
                            <dd><select class="form-control" name="grade" style="width: 80px;">
                                <option value="1" <?php if($apply_info["grade"] == 1): ?>selected="selected"<?php endif; ?>>优秀</option>
                                <option value="2" <?php if($apply_info["grade"] == 2): ?>selected="selected"<?php endif; ?>>良好</option>
                                <option value="3" <?php if($apply_info["grade"] == 3): ?>selected="selected"<?php endif; ?>>通过</option>
                                <option value="4" <?php if($apply_info["grade"] == 4): ?>selected="selected"<?php endif; ?>>不通过</option>
                            </select></dd>
                        </dl>
                        <dl class="form-group">
                            <input type="checkbox" name="is_important_item" <?php if($apply_info["item_type"] == 1): ?>checked="checked"<?php endif; ?>><label>重点课题项目</label>
                        </dl>
                        <dl class="form-group">
                        	<dt>《安徽工业大学SRTP项目结题验收表》</dt>
                        	<dd><img style="max-width:650px;" src="/uploads/<?php echo ($apply_info["upload_file"]); ?>"/></dd>
                        	<dd><input type="file" class="form-control" name="srtp_file"></dd>
                        </dl>
	                    <p><button type="submit" class="btn btn-primary">确认 更改</button></p>
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
            <svg aria-hidden="true" class="octicon octicon-mark-github" height="24" version="1.1" viewBox="0 0 16 16" width="24">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59 0.4 0.07 0.55-0.17 0.55-0.38 0-0.19-0.01-0.82-0.01-1.49-2.01 0.37-2.53-0.49-2.69-0.94-0.09-0.23-0.48-0.94-0.82-1.13-0.28-0.15-0.68-0.52-0.01-0.53 0.63-0.01 1.08 0.58 1.23 0.82 0.72 1.21 1.87 0.87 2.33 0.66 0.07-0.52 0.28-0.87 0.51-1.07-1.78-0.2-3.64-0.89-3.64-3.95 0-0.87 0.31-1.59 0.82-2.15-0.08-0.2-0.36-1.02 0.08-2.12 0 0 0.67-0.21 2.2 0.82 0.64-0.18 1.32-0.27 2-0.27 0.68 0 1.36 0.09 2 0.27 1.53-1.04 2.2-0.82 2.2-0.82 0.44 1.1 0.16 1.92 0.08 2.12 0.51 0.56 0.82 1.27 0.82 2.15 0 3.07-1.87 3.75-3.65 3.95 0.29 0.25 0.54 0.73 0.54 1.48 0 1.07-0.01 1.93-0.01 2.2 0 0.21 0.15 0.46 0.55 0.38C13.71 14.53 16 11.53 16 8 16 3.58 12.42 0 8 0z"></path></svg>
        </a>
        <ul class="site-footer-links">
            <li>&copy; 2016 <span>安徽工业大学</span>, Inc.</li>
            <li><a href="http://www.ahut.edu.cn">工大首页</a></li>
            <li><a href="http://gczx.ahut.edu.cn/">工创中心</a></li>
            <li><a href="http://jwcad.ahut.edu.cn/">教务处</a></li>
            <li><a href="http://library_web.ahut.edu.cn/MainWeb/index.asp">校图书馆</a></li>
            <li><a href="https://help.github.com" data-ga-click="Footer, go to help, text:help">Help</a></li>
        </ul>
    </div>
</div>

</body>
</html>