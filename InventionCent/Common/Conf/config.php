<?php
return array(
	//'配置项'=>'配置值'
    'DEFAULT_MODULE'        =>  'Home',  // 默认模块
    'URL_ROUTER_ON'   => true, //开启路由
    'URL_ROUTE_RULES' => array( //定义路由规则
        'index/:id\d'    => 'Index/id',
        'index/:name'    => 'Index/name',
        'new/:year\d/:month\d'  => 'News/archive',
        'sql/:name'      => 'Index/insert_sql',
    ),
    'URL_MAP_RULES' => array(
        'error' => 'Index/err',
        'ok' => 'Index/ok',
        'sql'=>'Index/insert_sql',
        'bootstrap'=>'Index/bootstrap',
    ),

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
);