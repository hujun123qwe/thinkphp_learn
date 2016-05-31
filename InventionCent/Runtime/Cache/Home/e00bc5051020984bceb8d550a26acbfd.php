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
                <div class="column one-fourth vcard" itemscope itemtype="http://schema.org/Person">
                    <a href="/account" aria-label="Change your avatar" class="vcard-avatar d-block tooltipped tooltipped-s">
                        <img alt="" class="avatar rounded-2" height="230" src="https://avatars1.githubusercontent.com/u/8892333?v=3&amp;s=460" width="230" />
                    </a>

                    <h1 class="vcard-names my-3">
                        <div class="vcard-fullname" itemprop="name">胡军<?php echo ($user["user_name"]); ?></div>
                        <div class="vcard-username" itemprop="additionalName">129084213<?php echo ($user["student_id"]); ?></div>
                    </h1>
                    <ul class="vcard-details border-top border-gray-light py-3">
                        <li aria-label="Organization" class="vcard-detail py-1 css-truncate css-truncate-target" itemprop="worksFor" title="ploverUAV">
                            <svg aria-hidden="true" class="octicon octicon-organization" height="16" version="1.1" viewBox="0 0 14 16" width="14">
                                <path d="M4.75 4.95c0.55 0.64 1.34 1.05 2.25 1.05s1.7-0.41 2.25-1.05c0.34 0.63 1 1.05 1.75 1.05 1.11 0 2-0.89 2-2s-0.89-2-2-2c-0.41 0-0.77 0.13-1.08 0.33C9.61 1 8.42 0 7 0S4.39 1 4.08 2.33c-0.31-0.2-0.67-0.33-1.08-0.33-1.11 0-2 0.89-2 2s0.89 2 2 2c0.75 0 1.41-0.42 1.75-1.05z m5.2-1.52c0.2-0.38 0.59-0.64 1.05-0.64 0.66 0 1.2 0.55 1.2 1.2s-0.55 1.2-1.2 1.2-1.17-0.53-1.19-1.17c0.06-0.19 0.11-0.39 0.14-0.59zM7 0.98c1.11 0 2.02 0.91 2.02 2.02s-0.91 2.02-2.02 2.02-2.02-0.91-2.02-2.02S5.89 0.98 7 0.98zM3 5.2c-0.66 0-1.2-0.55-1.2-1.2s0.55-1.2 1.2-1.2c0.45 0 0.84 0.27 1.05 0.64 0.03 0.2 0.08 0.41 0.14 0.59-0.02 0.64-0.53 1.17-1.19 1.17z m10 0.8H1c-0.55 0-1 0.45-1 1v3c0 0.55 0.45 1 1 1v2c0 0.55 0.45 1 1 1h1c0.55 0 1-0.45 1-1v-1h1v3c0 0.55 0.45 1 1 1h2c0.55 0 1-0.45 1-1V12h1v1c0 0.55 0.45 1 1 1h1c0.55 0 1-0.45 1-1V11c0.55 0 1-0.45 1-1V7c0-0.55-0.45-1-1-1zM3 13h-1V10H1V7h2v6z m7-2h-1V9h-1v6H6V9h-1v2h-1V7h6v4z m3-1h-1v3h-1V7h2v3z"></path></svg>ploverUAV</li>
                        <li aria-label="Home location" class="vcard-detail py-1 css-truncate css-truncate-target" itemprop="homeLocation" title="Anhui Maanshan">
                            <svg aria-hidden="true" class="octicon octicon-location" height="16" version="1.1" viewBox="0 0 12 16" width="12">
                                <path d="M6 0C2.69 0 0 2.5 0 5.5c0 4.52 6 10.5 6 10.5s6-5.98 6-10.5C12 2.5 9.31 0 6 0z m0 14.55C4.14 12.52 1 8.44 1 5.5 1 3.02 3.25 1 6 1c1.34 0 2.61 0.48 3.56 1.36 0.92 0.86 1.44 1.97 1.44 3.14 0 2.94-3.14 7.02-5 9.05z m2-9.05c0 1.11-0.89 2-2 2s-2-0.89-2-2 0.89-2 2-2 2 0.89 2 2z"></path></svg>Anhui Maanshan</li>
                        <li aria-label="Email" class="vcard-detail py-1 css-truncate css-truncate-target" itemprop="email">
                            <svg aria-hidden="true" class="octicon octicon-mail" height="16" version="1.1" viewBox="0 0 14 16" width="14">
                                <path d="M0 4v8c0 0.55 0.45 1 1 1h12c0.55 0 1-0.45 1-1V4c0-0.55-0.45-1-1-1H1c-0.55 0-1 0.45-1 1z m13 0L7 9 1 4h12zM1 5.5l4 3L1 11.5V5.5z m1 6.5l3.5-3 1.5 1.5 1.5-1.5 3.5 3H2z m11-0.5L9 8.5l4-3v6z"></path></svg>
                            <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;%68%75%6a%75%6e%31%32%33%71%77%65@%31%36%33.%43%4f%4d">hujun123qwe@163.COM</a></li>
                        <li aria-label="Blog or website" class="vcard-detail py-1 css-truncate css-truncate-target" itemprop="url">
                            <svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16">
                                <path d="M4 9h1v1h-1c-1.5 0-3-1.69-3-3.5s1.55-3.5 3-3.5h4c1.45 0 3 1.69 3 3.5 0 1.41-0.91 2.72-2 3.25v-1.16c0.58-0.45 1-1.27 1-2.09 0-1.28-1.02-2.5-2-2.5H4c-0.98 0-2 1.22-2 2.5s1 2.5 2 2.5z m9-3h-1v1h1c1 0 2 1.22 2 2.5s-1.02 2.5-2 2.5H9c-0.98 0-2-1.22-2-2.5 0-0.83 0.42-1.64 1-2.09v-1.16c-1.09 0.53-2 1.84-2 3.25 0 1.81 1.55 3.5 3 3.5h4c1.45 0 3-1.69 3-3.5s-1.5-3.5-3-3.5z"></path></svg><a href="http://me.hujun.ren" class="url" rel="nofollow me">http://me.hujun.ren</a></li>
                        <li aria-label="Member since" class="vcard-detail py-1 css-truncate css-truncate-target">
                            <svg aria-hidden="true" class="octicon octicon-clock" height="16" version="1.1" viewBox="0 0 14 16" width="14">
                                <path d="M8 8h3v2H7c-0.55 0-1-0.45-1-1V4h2v4z m-1-5.7c3.14 0 5.7 2.56 5.7 5.7S10.14 13.7 7 13.7 1.3 11.14 1.3 8s2.56-5.7 5.7-5.7m0-1.3C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7S10.86 1 7 1z"></path></svg>
                            <span class="join-label">Joined on </span><local-time class="join-date" datetime="2014-09-24T02:55:08Z" day="numeric" month="short" year="numeric">Sep 24, 2014</local-time></li>
                    </ul>

                    <div class="vcard-stats border-top border-bottom border-gray-light mb-3 py-3">
                        <a class="vcard-stat">
                            <strong class="vcard-stat-count d-block">1</strong>
                            <span class="text-muted">提交申请</span>
                        </a>
                        <a class="vcard-stat">
                            <strong class="vcard-stat-count d-block">6</strong>
                            <span class="text-muted">通过申请</span>
                        </a>
                        <a class="vcard-stat">
                            <strong class="vcard-stat-count d-block">0</strong>
                            <span class="text-muted">创新学分</span>
                        </a>
                    </div>
                </div>

                

<div class="column three-fourths">
    <div class="tabnav">
        <div class="right">
            <a href="/account" class="btn btn-sm">
                编辑
            </a>
        </div>

        <nav class="tabnav-tabs" data-pjax role="navigation">
            <a href="" class="tabnav-tab selected" aria-selected="true" role="tab">
                <svg aria-hidden="true" class="octicon octicon-diff-added" height="16" version="1.1" viewBox="0 0 14 16" width="14">
                    <path d="M13 1H1C0.45 1 0 1.45 0 2v12c0 0.55 0.45 1 1 1h12c0.55 0 1-0.45 1-1V2c0-0.55-0.45-1-1-1z m0 13H1V2h12v12zM6 9H3V7h3V4h2v3h3v2H8v3H6V9z">

                    </path>
                </svg>
                全部申请
            </a>
            <a href="" class="tabnav-tab " aria-selected="false" role="tab">
                <svg aria-hidden="true" class="octicon octicon-repo" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M4 9h-1v-1h1v1z m0-3h-1v1h1v-1z m0-2h-1v1h1v-1z m0-2h-1v1h1v-1z m8-1v12c0 0.55-0.45 1-1 1H6v2l-1.5-1.5-1.5 1.5V14H1c-0.55 0-1-0.45-1-1V1C0 0.45 0.45 0 1 0h10c0.55 0 1 0.45 1 1z m-1 10H1v2h2v-1h3v1h5V11z m0-10H2v9h9V1z"></path></svg>
                已通过申请
            </a>
            <a href="" class="tabnav-tab " aria-selected="false" role="tab">
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
                        <h3>Popular repositories</h3>
                        <ul class="boxed-group-inner mini-repo-list">
                            <li class="public source ">
                                <a href="<?php echo U('application/edit');?>" class="mini-repo-list-item css-truncate">
                                    <svg aria-label="Repository" class="octicon octicon-repo repo-icon" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path d="M4 9h-1v-1h1v1z m0-3h-1v1h1v-1z m0-2h-1v1h1v-1z m0-2h-1v1h1v-1z m8-1v12c0 0.55-0.45 1-1 1H6v2l-1.5-1.5-1.5 1.5V14H1c-0.55 0-1-0.45-1-1V1C0 0.45 0.45 0 1 0h10c0.55 0 1 0.45 1 1z m-1 10H1v2h2v-1h3v1h5V11z m0-10H2v9h9V1z"></path></svg>
                                        <span class="repo-and-owner css-truncate-target">
                                            <span class="repo" title="点击编辑">wwn-mall</span>
                                        </span>
                                        <span class="stars">
                                            审核状态<?php echo ($item_status); ?>
                                        </span>
                                    <span class="repo-description css-truncate-target">
                                        属于什么类型的<?php echo ($item_type); ?>
                                    </span>
                                </a>
                            </li>
                        </ul>
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