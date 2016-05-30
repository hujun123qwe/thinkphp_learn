<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2016/5/30
 * Time: 16:28
 */
namespace Home\Controller;
use Think\Controller;

class ApplicationController extends Controller{
    
    
    public function lists(){
        
        $this->assign('_admin_public_layout', C('ADMIN_PUBLIC_LAYOUT'));  // 页面公共继承模版
        $this->display();
    }
}