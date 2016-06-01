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
    
//    protected function _initialize() {
//        // 登录检测
//        if (!is_login()) { //还没登录跳转到登录页面
//            $this->redirect('Home/Public/login');
//        }
//    }
    
    public function edit(){
        if(IS_POST){
            $map = array();
            //必须要一个id来判断
            $item_id = I('post.item_id');
            if(I('post.item_name')){
                $map['item_name'] = I('post.item_name');
            }
            if(I('post.user_name')){
                $map['user_name'] = I('post.user_name');
            }
            if(I('post.student_id')){
                $map['student_id'] = I('post.student_id');
            }
            if(I('post.phone')){
                $map['phone'] = I('post.phone');
            }
            if(I('post.teacher')){
                $map['teacher'] = I('post.teacher');
            }
            if(I('post.academy')){
                $map['academy'] = I('post.academy');
            }
            if(I('post.group')){
                $map['group'] = I('post.group');
            }
            if(I('post.iclass')){
                $map['iclass'] = I('post.iclass');
            }
            $itemDB = D('Application');
            if($itemDB->edit($map,$item_id)){
                $this->success('编辑成功');
            }else{
                $this->error('编辑失败');
            }
        }else{
            $user_id = 6;
            $userDB = D('User');
            $user_info = $userDB->getUserInfo($user_id);
            $this->assign('user_info',$user_info[0]);

            $itemDB = D('Application');
            $item_info = $itemDB->getItemInfo(1);
            $this->assign('item_info', $item_info[0]);
            $this->assign('meta_title', "编辑项目 | 大学生创新学分审核系统");
            $this->assign('layout_home', C('__LAYOUT_HOME__'));  // 页面公共继承模版
            $this->display();
        }
    }
    
    public function chooseItem(){
        if(IS_GET){
            $application_type = I('get.plan');
            switch ($application_type){
                case 1:
                    $this->srtp();
                    break;
                case 2:
                    $this->competition();
                    break;
                case 3:
                    $this->course();
                    break;
                case 4:
                    $this->paper();
                    break;
                case 5:
                    $this->paper();
                    break;
                case 6:
                    $this->other();
                    break;
                default:
                    $this->error('该系统暂时不支持此项目申请');
                    break;
            }
        }else{
            $this->assign('meta_title', '选择项目 | 大学生创新学分审核系统');
            $this->assign('layout_login',C('__LAYOUT_LOGIN__'));
            $this->display('./first_login');
        }
    }

    public function other(){
        if(IS_POST){

        }else{
            $this->assign('meta_title', '其他 | 大学生创新学分审核系统');
            $this->assign('layout_login',C('__LAYOUT_LOGIN__'));
            $this->display('other');
        }
    }

    public function patent(){
        if(IS_POST){

        }else{
            $this->assign('meta_title', '专利成果 | 大学生创新学分审核系统');
            $this->assign('layout_login',C('__LAYOUT_LOGIN__'));
            $this->display('patent');
        }
    }

    public function paper(){
        if(IS_POST){

        }else{
            $this->assign('meta_title', '论文发表 | 大学生创新学分审核系统');
            $this->assign('layout_login',C('__LAYOUT_LOGIN__'));
            $this->display('paper');
        }
    }

    public function course(){
        if(IS_POST){

        }else{
            $this->assign('meta_title', '“三创”教育课程体系 | 大学生创新学分审核系统');
            $this->assign('layout_login',C('__LAYOUT_LOGIN__'));
            $this->display('course');
        }
    }

    public function competition(){
        if(IS_POST){

        }else{
            $this->assign('meta_title', '学科竞赛 | 大学生创新学分审核系统');
            $this->assign('layout_login',C('__LAYOUT_LOGIN__'));
            $this->display('competition');
        }
    }
    
    public function srtp(){
        if(IS_POST){
            $map = array();
            $file_name = 'srtp_file';
            if($file_path = $this->my_upload($file_name)){
                $map['upload_file'] = $file_path;
            }else{
                echo 'upload_error';
                exit;
            }
            $map['item_name'] = I('post.item_name');
            $map['user_name'] = I('post.user_name');
            $map['student_id'] = I('post.student_id');
            $map['phone'] = I('post.phone');
            $map['teacher'] = I('post.teacher');
            $map['academy'] = I('post.academy');
            $map['iclass'] = I('post.iclass');
            $map['group'] = I('post.group');
            if(I('post.is_important_item')){
                $map['item_type'] = 1;
            }else{
                $map['item_type'] = 0;
            }
            $userDB = D('Application');
            if($userDB->srtp($map)){
                $this->success('申请提交成功，请等待审核', U('Index/index'));
            }else{
                $this->error('申请提交失败', U('Application/srtp'));
            }
        }else{

            $this->assign('meta_title', '大学生科研训练计划（SRTP） | 大学生创新学分审核系统');
            $this->assign('layout_login',C('__LAYOUT_LOGIN__'));
            $this->display('srtp');
        }
    }
    
    public function lists(){
        $this->assign('_admin_public_layout', C('ADMIN_PUBLIC_LAYOUT'));  // 页面公共继承模版
        $this->display();
    }

    public function my_upload($file_name){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath  =      ''; // 设置附件上传目录
        //上传文件
        $file   =   $upload->uploadOne($_FILES[$file_name]);
        if(!$file) {// 上传错误提示错误信息
            return 0;
            //$this->error($upload->getError());
        }else{// 上传成功
            return $file['savepath'].$file['savename'];
        }
    }
}