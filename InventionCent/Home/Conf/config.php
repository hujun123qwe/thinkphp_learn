<?php
return array(
	//'配置项'=>'配置值'
    'URL_ROUTER_ON'   => true, //开启路由
    'URL_ROUTE_RULES' => array( //定义路由规则
        'index/:id\d'    => 'Index/id',
        'index/:name'    => 'Index/name',
        'new/:year\d/:month\d'  => 'News/archive',
        'sql/:name'      => 'Index/insert_sql',
    ),
    'URL_MAP_RULES' => array(
        'login' => 'Login/login',
        'register' => 'Register/register',
        'chooseItem' => 'Register/chooseItem',
        'item' => 'User/user_item',
        'info' => 'User/user_info',
        'add' => 'Item/add_item',
        'admin' => 'Admin/admin',
        'error' => 'Index/err',
        'ok' => 'Index/ok',
        'sql'=>'Index/insert_sql',
        'bootstrap'=>'Index/bootstrap',
    ),

    '__HOME_IMG__' => APP_PATH.'/Home/View/img',
    '__HOME_JS__' => APP_PATH.'/Home/View/js',
    '__HOME_CSS__' => APP_PATH.'/Home/View/css',
    '__HOME_PUBLIC__'=> APP_PATH.'/Home/View/public/layout.html',
    '__ADMIN_PUBLIC__' => APP_PATH.'/Home/View/public/layout_admin.html',
);