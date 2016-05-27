<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2016/5/26
 * Time: 10:58
 */

namespace Home\Controller;
use Think\Controller;

class AdminController extends Controller{
    public function admin(){
        $this->assign('_admin_public_',C('__ADMIN_PUBLIC__'));
        $this->display();
    }
    
    public function op_list(){
        
    }
}