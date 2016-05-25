<?php
return array(
	//'配置项'=>'配置值'
    'DEFAULT_MODULE'        =>  'Home',  // 默认模块


    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'invention_cent',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'ahut_',    // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',

    'css_path' => HOME_VIEW_PATH.'CSS',
    'js_path' => HOME_VIEW_PATH.'js',

    '__HOME_CSS__' => __ROOT__.'/'.APP_PATH.'Home/View/css',
    
);