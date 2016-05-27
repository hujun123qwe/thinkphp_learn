<?php
/**
 * Created by PhpStorm.
 * User: hj2hl
 * Date: 2016-05-25
 * Time: 20:18
 */
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
    public function register(){
        $this->assign('_layout_',C('__HOME_PUBLIC__'));
        if(IS_POST){
            $userDB = D('User');
            if($userDB->register()){
                $this->assign('user_name',I('user_name'));
                $this->display('chooseItem');
                //$this->success('注册成功', U('chooseItem'));
            }else{
                $this->error('注册失败', U('register'));
            }
        }else{
            $this->display();
        }
    }
    public function chooseItem(){
        $this->assign('_layout_',C('__HOME_PUBLIC__'));
        $this->display();
    }
}