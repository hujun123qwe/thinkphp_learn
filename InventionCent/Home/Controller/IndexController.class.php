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
        $this->redirect('User/index_student');
    }
    
    public function first_login(){
        $this->assign('meta_title', '选择项目 | 大学生创新学分审核系统');
        $this->assign('layout_login',C('__LAYOUT_LOGIN__'));
        $this->display();
    }
}