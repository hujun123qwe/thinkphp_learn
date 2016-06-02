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
	//'配置项'=>'配置值'
    'URL_ROUTER_ON'   => true, //开启路由
    'URL_MAP_RULES' => array(
        'chooseItem' => 'Register/chooseItem',
        'item' => 'User/user_item',
        'info' => 'User/user_info',
        'add' => 'Item/add_item',
        'first_login'=>'Index/first_login',
        'admin'=>'Admin/index',
        'admin/user_admin'=>'User/user_admin',
        'admin/user_setting'=>'User/setting',
        'admin/user_list'=>'User/lists',
        'admin/news' => 'Public/news',
        'admin/link'=> 'Public/link',
        'admin/upload'=>'Public/upload',
        'admin_login'=>'Public/login',
        'admin/logs_admin'=>'Logs/admin_lists',
        'admin/logs_students'=>'Logs/students_lists',
        'admin/application_list'=>'Application/lists',
        'admin/credits_lists'=>'Credits/lists',
        'error' => 'Index/err',
        'ok' => 'Index/ok',
        'sql'=>'Index/insert_sql',
        'bootstrap'=>'Index/bootstrap',
        'indexs'=>'User/index_student',
        'edits' => 'User/edit_student',
    ),

    '__HOME_IMG__' => __ROOT__.'/'.APP_PATH.'/Home/View/img',
    '__HOME_JS__' => __ROOT__.'/'.APP_PATH.'/Home/View/js',
    '__HOME_CSS__' => __ROOT__.'/'.APP_PATH.'/Home/View/css',
    '__HOME_PUBLIC__'=> APP_PATH.'/Home/View/public',

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
    'ADMIN_PAGE_ROWS'      => 10,

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
    '__LAYOUT_ADMIN__' => APP_PATH.'/Home/View/public/layout_admin.html',
    '__LAYOUT_HOME__' => APP_PATH.'/Home/View/public/layout_home.html',
    '__LAYOUT_LOGIN__' => APP_PATH.'/Home/View/Public/layout_login.html',
    'HOME_PAGE' => (is_ssl()?'https://':'http://').$_SERVER['HTTP_HOST'].__ROOT__,
);