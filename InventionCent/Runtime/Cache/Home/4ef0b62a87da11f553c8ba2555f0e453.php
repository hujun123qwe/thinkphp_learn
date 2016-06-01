<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/login.css" type="text/css">
    <script type="text/javascript" src="/Public/libs/jquery/1.x/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/frameworks.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/github.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/site.css" type="text/css"/>
    
    <title><?php echo ($meta_title); ?></title>
</head>
<body>
<div id="particles-js" class="background"></div>


    <!-- 登陆框 -->
    <div class="panel-lite">
        <div class="setup-wrapper">
            <div class="setup-main">
                <div class="setup-form-container">
                    <form action="<?php echo U('Application/srtp');?>" class="setup-form js-braintree-encrypt" enctype="multipart/form-data" method="post">
                        <h2 class="setup-form-title mb-3">大学生科研训练计划（SRTP）</h2>
                        <div class="form-group">
                            <input type="text" name="item_name" required="required" class="form-control"  placeholder="项目名称">
                        </div>
                        <div class="form-group">
                            <input type="text" name="user_name" required="required" class="form-control" placeholder="姓名">
                            <input type="text" name="student_id" required="required" class="form-control" placeholder="学号">
                            <input type="text" name="academy" required="required" class="form-control" placeholder="学院">
                            <input type="text" name="iclass" required="required" class="form-control" placeholder="班级">
                            <input type="text" name="phone" required="required" class="form-control" placeholder="联系手机">
                        </div>
                        <div class="form-group">
                            <input type="text" name="teacher" required="required" class="form-control" placeholder="指导老师">
                        </div>
                        <div class="form-group">
                            <label for="InputFile">《安徽工业大学SRTP项目结题验收表》</label>
                            <br><input type="file" name="srtp_file" id="InputFile">
                        </div>
                        <label for="multiple">请选择小组人数</label>
                        <select class="form-control" id="multiple" name="group">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <div class="checkbox">
                            <label><input type="checkbox" name="is_important_item"> 重点课题项目</label>
                        </div>
                        <button type="submit" class="btn btn-default">提交申请</button>
                    </form>
                </div> <!-- /.setup-form-container -->
            </div> <!-- /.setup-main -->
        </div> <!-- /.setup-wrapper -->
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