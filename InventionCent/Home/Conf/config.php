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
        'admin'=>'Admin/index',
        'admin_login'=>'Public/login',
        'error' => 'Index/err',
        'ok' => 'Index/ok',
        'sql'=>'Index/insert_sql',
        'bootstrap'=>'Index/bootstrap',
    ),

    '__HOME_IMG__' => __ROOT__.'/'.APP_PATH.'/Home/View/img',
    '__HOME_PUBLIC__'=> APP_PATH.'/Home/View/public/layout.html',

    // 模板相关配置
    'TMPL_PARSE_STRING'  => array(
        '__PUBLIC__'     => __ROOT__.'/Public',
        '__CUI__'        => __ROOT__.'/Public/libs/cui',
        '__ADMIN_IMG__'  => __ROOT__.'/'.APP_PATH.'Home/View/Public/img',
        '__ADMIN_CSS__'  => __ROOT__.'/'.APP_PATH.'Home/View/Public/css',
        '__ADMIN_JS__'   => __ROOT__.'/'.APP_PATH.'Home/View/Public/js',
        '__ADMIN_LIBS__' => __ROOT__.'/'.APP_PATH.'Home/View/Public/libs',
    ),

    // 系统功能模板
    'USER_CENTER_SIDE'    => APP_PATH.'User/View/Index/side.html',
    'USER_CENTER_FORM'    => APP_PATH.'User/View/Builder/form.html',
    'USER_CENTER_LIST'    => APP_PATH.'User/View/Builder/list.html',
    'USER_LOGIN_MODAL'    => APP_PATH.'User/View/User/login_modal.html',
    'HOME_PUBLIC_LAYOUT'  => APP_PATH.'Home/View/Public/layout-home.html',
    'ADMIN_PUBLIC_LAYOUT' => APP_PATH.'Home/View/Public/layout.html',

    // 错误页面模板
    'TMPL_ACTION_ERROR'   => APP_PATH.'Home/View/Public/think/error.html',      // 错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS' => APP_PATH.'Home/View/Public/think/success.html',    // 成功跳转对应的模板文件
    'TMPL_EXCEPTION_FILE' => APP_PATH.'Home/View/Public/think/exception.html',  // 异常页面的模板文件

    // 文件上传默认驱动
    'UPLOAD_DRIVER' => 'Local',

    // 文件上传相关配置
    'UPLOAD_CONFIG' => array(
        'mimes'    => '',                        // 允许上传的文件MiMe类型
        'maxSize'  => 2*1024*1024,               // 上传的文件大小限制 (0-不做限制，默认为2M，后台配置会覆盖此值)
        'autoSub'  => true,                      // 自动子目录保存文件
        'subName'  => array('date', 'Y-m-d'),    // 子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath' => './Uploads/',              // 保存根路径
        'savePath' => '',                        // 保存路径
        'saveName' => array('uniqid', ''),       // 上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
        'saveExt'  => '',                        // 文件保存后缀，空则使用原后缀
        'replace'  => false,                     // 存在同名是否覆盖
        'hash'     => true,                      // 是否生成hash编码
        'callback' => false,                     // 检测文件是否存在回调函数，如果存在返回文件信息数组
    ),
);