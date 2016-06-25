<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/login.css" type="text/css">
    <!--<script type="text/javascript" src="<?php echo (C("__HOME_JS__")); ?>/"></script>-->
    <script type="text/javascript" src="<?php echo (C("__HOME_JS__")); ?>/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/frameworks.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/github.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/site.css" type="text/css"/>
    
    <title><?php echo ($meta_title); ?></title>
</head>
<body>
<div id="particles-js" class="background"></div>


    <!-- 登陆框 -->
    <div class="panel-lite" style="width: 420px;">
        <h1 style="text-align: center;"><a  href="<?php echo C('HOME_PAGE');?>">安徽工业大学</a></h1>
        <h1><a href="<?php echo C('HOME_PAGE');?>">大学生创新学分审核系统</a></h1>
        <form class="login-form" action="<?php echo U('Public/login');?>" method="post">
            <div class="form-group">
                <input type="text" required="required" maxlength="9" class="form-control" name="username" placeholder="学号/工号">
            </div>
            <div class="form-group">
                <input type="password" required="required" class="form-control" name="password" placeholder="密码">
            </div>
            <a class="label-link" href="<?php echo C('HOME_PAGE');?>">忘记密码 ? </a>
            <div class="form-group">
                <div class="input-group">
                    <input type="text" style="float: left;" required="required" class="col-sm-4 form-control" name="verify" placeholder="验证码">
                    <span class="input-group-addon verifyimg-box" style="display: table-cell;padding-left:60px;">
                        <img class="verifyimg ad-verify" alt="验证码" src="<?php echo U('Public/verify');?>" title="点击刷新">
                    </span>
                </div>
            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-block" tabindex="3" type="submit" value="登 录" />
            </div>
        </form>
        <p class="create-account-callout mt-3">
            新来的？
            <a href="register">创建一个账户</a>.
        </p>
        <div class="label-link" style="padding-top:15px;">
            <a style="text-align: right;" href="http://down.tech.sina.com.cn/page/40975.html">我们强烈推荐使用Chrome浏览器</a>
        </div>
    </div>

</body>
<script src="<?php echo (C("__HOME_JS__")); ?>/particles.min.js"></script>
<script type="text/javascript">
    $(function(){
        // 刷新验证码
        $(".reload-verify").on('click', function() {
            var verifyimg = $(".verifyimg").attr("src");
            if (verifyimg.indexOf('?') > 0) {
                $(".verifyimg").attr("src", verifyimg + '&random=' + Math.random());
            } else {
                $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/, '') + '?' + Math.random());
            }
        });

        //背景粒子效果
        particlesJS('particles-js', {
            particles: {
                color: '#46BCF3',
                shape: 'circle', // "circle", "edge" or "triangle"
                opacity: 1,
                size: 2,
                size_random: true,
                nb: 200,
                line_linked: {
                    enable_auto: true,
                    distance: 100,
                    color: '#46BCF3',
                    opacity: .8,
                    width: 1,
                    condensed_mode: {
                        enable: false,
                        rotateX: 600,
                        rotateY: 600
                    }
                },
                anim: {
                    enable: true,
                    speed: 1
                }
            },
            interactivity: {
                enable: true,
                mouse: {
                    distance: 250
                },
                detect_on: 'canvas', // "canvas" or "window"
                mode: 'grab',
                line_linked: {
                    opacity: .5
                },
                events: {
                    onclick: {
                        enable: true,
                        mode: 'push', // "push" or "remove" (particles)
                        nb: 4
                    }
                }
            },
            retina_detect: true
        });
    });
</script>
</html>