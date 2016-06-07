<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/login.css" type="text/css">
    <script type="text/javascript" src="<?php echo (C("__HOME_JS__")); ?>/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/frameworks.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/github.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/site.css" type="text/css"/>
    
    <title><?php echo ($meta_title); ?></title>
</head>
<body>
<div id="particles-js" class="background"></div>


    <!-- 登陆框 -->
    <div class="panel-lite">
        <h1><a href="<?php echo C('HOME_PAGE');?>">大学生创新学分审核系统</a></h1>
        <div class="setup-wrapper">
            <div class="setup-main">
                <div class="setup-form-container">
                    <form action="<?php echo U('Application/itemRoute');?>" class="setup-form js-braintree-encrypt" method="get">
                        <h2 class="setup-form-title mb-3">
                            选择你要申请的创新学分类型
                        </h2>
                        <div class="currency-container js-details-container">
                            <label class="plan-choice plan-choice-free js-plan-choice-label open">
                                <input type="radio" class="plan-choice-radio js-plan-choice" name="item_type" value="1" checked>
                                大学生科研训练计划（SRTP）
                            </label>
                            <label class="plan-choice plan-choice-free js-plan-choice-label open">
                                <input type="radio" class="plan-choice-radio js-plan-choice" name="item_type" value="2">
                                学科竞赛
                            </label>
                            <label class="plan-choice plan-choice-free js-plan-choice-label open">
                                <input type="radio" class="plan-choice-radio js-plan-choice" name="item_type" value="3">
                                “三创”教育课程体系
                            </label>
                            <label class="plan-choice plan-choice-free js-plan-choice-label open">
                                <input type="radio" class="plan-choice-radio js-plan-choice" name="item_type" value="4">
                                论文发表学分认定
                            </label>
                            <label class="plan-choice plan-choice-free js-plan-choice-label open">
                                <input type="radio" class="plan-choice-radio js-plan-choice" name="item_type" value="5">
                                专利成果
                            </label>
                            <label class="plan-choice plan-choice-free js-plan-choice-label open">
                                <input type="radio" class="plan-choice-radio js-plan-choice" name="item_type" value="6">
                                其他科研、学术等创新活动
                            </label>
                            <p class="note mb-3">请认真选择, 一旦确定将不可更改.</p>
                        </div>
                        <input type="submit" value="下一步" class="btn btn-primary js-choose-plan-submit" style="width: 80px;">
                    </form>
                </div> <!-- /.setup-form-container -->
            </div> <!-- /.setup-main -->
        </div> <!-- /.setup-wrapper -->
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