<?php if (!defined('THINK_PATH')) exit();?><html>
<style type="text/css">
    *{ padding: 0; margin: 0; }
    div{ padding: 4px 48px;}
    body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px}
    h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; }
    p{ line-height: 1.8em; font-size: 36px }
    a,a:hover{color:blue;}
</style>
<div style="padding: 24px 48px;">
    <h1>:)</h1>
    <p>欢迎使用
    <b>ThinkPHP</b>！
    </p>
    <br/>版本 V<?php echo (THINK_VERSION); ?>
    <br/>Think CONST VALUE <?php var_dump($Think); php?>
    <br/>本网页当前地址 <a href="<?php echo U('index/4@tp.local');?>"><?php echo U('index/4@tp.local');?></a>
    <br/>输出一个配置》  <?php echo (C("DB_PWD")); ?>  》 数据库的密码
</div>
</html>