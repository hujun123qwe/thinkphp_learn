<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{
    public function user_item(){
        $this->display('item');
    }

    public function user_info(){
        $this->display('info');
    }
}