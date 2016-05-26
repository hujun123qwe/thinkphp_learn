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
        if($_POST){
            $userDB = D('User');
//            if($userDB->register()){
//                echo 'OK';
//            }
            var_dump($userDB->register());
        }
        $this->display();
    }
    public function chooseItem(){
        $this->assign('_layout_',C('__HOME_PUBLIC__'));
        $this->display();
    }
}