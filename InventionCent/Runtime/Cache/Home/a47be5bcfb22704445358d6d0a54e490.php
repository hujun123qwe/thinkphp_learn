<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class=" is-copy-enabled">
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=device-width">
    <meta content="origin" name="referrer" />
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/frameworks.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/github.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/site.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/login.css" type="text/css">
    <script type="text/javascript" src="/Public/libs/jquery/1.x/jquery.min.js"></script>
    <title>Sign in to GitHub · GitHub</title>
</head>
<body>
    <!-- 背景 -->
    <div id="particles-js" class="background"></div>
        <!-- 登陆框 -->
    <div class="panel-lite">
        <div class="brand">
            <?php if(C('WEB_SITE_LOGO')): ?>
                <a href="<?php echo C('HOME_PAGE');?>" target="_blank">
                    <img alt="logo" class="logo img-responsive" src="<?php echo (get_cover(C("WEB_SITE_LOGO"))); ?>">
                </a>
            <?php else: ?>
                <a href="<?php echo C('HOME_PAGE');?>" target="_blank">
                    <?php echo C('PRODUCT_LOGO');?>
                </a>
            <?php endif; ?>
        </div>
        <h4>后台管理登录</h4>
        <form class="login-form" action="<?php echo U('Admin/Public/login');?>" method="post">
            <div class="form-group">
                <input type="text" required="required" class="form-control" name="username" autocomplete="off">
                <label class="form-label">账　号</label>
            </div>
            <div class="form-group">
                <input type="password" required="required" class="form-control" name="password">
                <label class="form-label">密　码</label>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="text" required="required" class="form-control" name="verify">
                    <label class="form-label">验证码</label>
                    <span class="input-group-addon verifyimg-box">
                        <img class="verifyimg reload-verify" alt="CoreThink验证码" src="<?php echo U('Admin/Public/verify');?>" title="点击刷新">
                    </span>
                </div>
            </div>
            <div class="form-group">
                <a type="submit" class="visible-xs btn btn-primary-outline btn-block btn-pill btn-lg ajax-post" target-form="login-form">登录</a>
            </div>
            <a class="link" target="_blank" href="<?php echo C('HOME_PAGE');?>">忘记密码 ? </a>
            <button type="submit" class="floating-btn ajax-post hidden-xs" target-form="login-form">
                <i class="icon-arrow"></i>
            </button>
        </form>
    </div>
</body>

    <script src="/Public/libs/particles/particles.min.js"></script>
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