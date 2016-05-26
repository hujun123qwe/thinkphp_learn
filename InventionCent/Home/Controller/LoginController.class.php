<?php
/**
 * Created by PhpStorm.
 * User: hj2hl
 * Date: 2016-05-25
 * Time: 20:08
 */

namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
        $this->assign('_layout_',C('__HOME_PUBLIC__'));
        $this->display();
    }
}