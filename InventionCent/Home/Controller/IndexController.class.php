<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    protected function _initialize() {
        // 登录检测
       if (!is_login()) { //还没登录跳转到登录页面
           $this->redirect('Home/Public/login');
       }
   }

    public function index(){
        $this->display();
    }
    
    public function bootstrap(){
        $this->display();
    }
    
    public function login(){
        $this->display();
    }
    
    public function register(){
        $this->display();
    }
}