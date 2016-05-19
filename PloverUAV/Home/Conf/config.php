<?php
return array(
	//'配置项'=>'配置值'
<<<<<<< HEAD
    'WHERE_IS' => 'Home/Conf/config.php',
    'URL_MODEL'             => 3,
    'URL_ROUTER_ON'     => true,
    'URL_MAP_RULES' => array(
        'register' => 'Register/register',
        'index' => 'Index/index',
    ),
    'URL_ROUTE_RULES'=>array(
        'index' => 'Index/index',
        'test' => function(){
            echo 'just test';
        },
        'hello/:name' => function($name){
                echo 'Hello,'.$name;
        }
=======
    'URL_ROUTER_ON'   => true,
    'URL_ROUTE_RULES'=>array(
        'index' => 'Home/Index/index'
    ),
    'URL_MAP_RULES'=>array(
        'register' => 'Home/Register/register'
>>>>>>> HL
    ),
);