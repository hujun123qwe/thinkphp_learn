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
        $this->assign('_admin_public_',C('__ADMIN_PUBLIC__'));
        if(IS_POST){
            $userDB = D('User');
            $user_info = $userDB->login();
            $this->assign('user_info', $user_info);
            if($user_info){
                if($user_info['user_type'] == 0){
                    $this->display('./user/home');
                }else if($user_info['user_type'] == 1){
                    $this->display('./admin/admin');
                }else{
                    $this->error('请认真登录');
                }
            }else{
                $this->error('请认真登录');
            }
        }else{
            $this->display();
        }

    }
}