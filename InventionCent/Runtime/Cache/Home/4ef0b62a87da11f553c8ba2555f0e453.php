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
    
    <script type="text/javascript">
        $(function () {
            $(".btn-pill").on('click',function () {
                var file_form_num = $(".file_form_num").size();
                if(file_form_num>4){
                    alert("好像用不到这么多材料，打包上传吧!");
                }else {
                    $("#file_form").append("<lable>其他材料</lable><input type=\"file\" class=\"form-control file_form_num\" name=\"other_file_" + file_form_num + "\">");
                }
            })
        });
    </script>

    <title><?php echo ($meta_title); ?></title>
</head>
<body>
<div id="particles-js" class="background"></div>


    <!-- 登陆框 -->
    <div class="panel-lite">
        <h1><a href="<?php echo C('HOME_PAGE');?>">大学生创新学分审核系统</a></h1>
        <div class="setup-wrapper">
            <div class="setup-main">
                <div class="setup-form-container" style="color: #666666;">
                    <form action="<?php echo U('Application/srtp');?>" class="setup-form js-braintree-encrypt" enctype="multipart/form-data" method="post">
                        <input type="hidden" name="item_id" value="1"/>
                        <h2 class="setup-form-title mb-3">大学生科研训练计划（SRTP）</h2>
                        <div class="form-group">
                            <input type="text" name="item_name" required="required" class="form-control"  placeholder="项目名称">
                        </div>
                        <div class="form-inline" >
                            <input type="text" style="width: 218px;" class="form-control" value="姓名：<?php echo ($user_info["user_name"]); ?>">
                            <input type="text" style="width: 218px;" class="form-control" value="学号：<?php echo ($user_info["student_id"]); ?>">
                        </div>
                        <div class="form-inline">
                            <input type="text" style="width: 218px;" class="form-control" value="学院：<?php echo ($user_info["academy"]); ?>">
                            <input type="text" style="width: 218px;" class="form-control" value="班级：<?php echo ($user_info["iclass"]); ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="teacher" required="required" class="form-control" placeholder="指导老师">
                        </div>
                        <div class="form-group" id="file_form">
                            <label for="InputFile">《安徽工业大学SRTP项目结题验收表》</label>
                            <input type="file" class="form-control" name="srtp_file" id="InputFile">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-pill" style="color:#666666;">+上传更多</button>
                        </div>
                        <div class="form-inline">
                            <label>请选择小组人数</label>
                            <select class="form-control" name="group" style="width: 80px;">
                                <option value="1">1人组</option>
                                <option value="2">2人组</option>
                                <option value="3">3人组</option>
                                <option value="4">4人组</option>
                                <option value="5">5人组</option>
                            </select>
                            <span style="margin-left: 40px;"></span>
                            <label>请选择成绩等级</label>
                            <select class="form-control" name="grade" style="width: 80px;">
                                <option value="1">优秀</option>
                                <option value="2">良好</option>
                                <option value="3">通过</option>
                                <option value="4">不通过</option>
                            </select>
                        </div>
                        <div class="form-checkbox">
                            <input type="checkbox" name="is_important_item"><label>重点课题项目</label>
                        </div>
                        <button type="submit" class="btn btn-primary">提交申请</button>
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