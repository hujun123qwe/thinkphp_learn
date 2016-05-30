<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2016/5/26
 * Time: 11:16
 */
namespace Home\Controller;
use Think\Controller;

class CreditsController extends Controller{
    
    public function lists(){
        $this->assign('_admin_public_layout', C('ADMIN_PUBLIC_LAYOUT'));  // 页面公共继承模版
        $this->display(); // 输出模板
    }
    public function check(){
        
    }
    
    public function del(){
        
    }
    
    public function edit(){
        
    }
    
    public function add(){
        
    }
    
    public function prints(){
        
    }
}