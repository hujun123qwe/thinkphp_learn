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
        'error' => 'Index/err',
        'ok' => 'Index/ok',
        'sql'=>'Index/insert_sql',
        'bootstrap'=>'Index/bootstrap',
    ),

    '__HOME_IMG__' => __ROOT__.'/'.APP_PATH.'/Home/View/img',
);