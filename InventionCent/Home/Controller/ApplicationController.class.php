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
    
   protected function _initialize() {
       // 登录检测
       if (!is_login()) { //还没登录跳转到登录页面
           $this->redirect('Home/Public/login');
       }
   }
    
    public function deleteItem(){
        $item_id = I('get.item_id');
        $itemDB = D('Application');
        if($itemDB->deleteItem($item_id)){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

    public function editItem(){
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
            if($itemDB->editItem($map,$item_id)){
                $this->success('编辑成功');
            }else{
                $this->error('编辑失败');
            }
        }else{
            $user_id = 6;
            $userDB = D('User');
            $user_info = $userDB->getUserInfo($user_id);
            $this->assign('user_info',$user_info[0]);

            $item_id = I('get.item_id');
            $itemDB = D('Application');
            $item_info = $itemDB->getItemInfo($item_id);
            $this->assign('item_info', $item_info[0]);
            $this->assign('meta_title', "编辑项目 | 大学生创新学分审核系统");
            $this->assign('layout_admin', C('__LAYOUT_ADMIN__'));  // 页面公共继承模版
            $this->display();
        }


    }
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
            if($itemDB->editItem($map,$item_id)){
                $this->success('编辑成功');
            }else{
                $this->error('编辑失败');
            }
        }else{
            $user_id = is_login();
            $userDB = D('User');
            $user_info = $userDB->getUserInfo($user_id);
            $this->assign('user_info',$user_info[0]);

            $itemDB = D('Application');
            $item_info = $itemDB->getItemInfo(1);
            $this->assign('item_info', $item_info[0]);

            $application_count = $itemDB->getApplicationCount($user_info[0]['user_id']);
            $application_verified = $itemDB->getApplicationVerified($user_info[0]['user_id']);

            $creditsDB = D('Credits');
            $credits_value = $creditsDB->getCreditsValue($user_id);

            $this->assign('application_count',$application_count);
            $this->assign('application_verified',$application_verified);
            $this->assign('credits_value',$credits_value);

            $this->assign('meta_title', "编辑项目 | 大学生创新学分审核系统");
            $this->assign('layout_home', C('__LAYOUT_HOME__'));  // 页面公共继承模版
            $this->display();
        }
    }

    public function itemRoute(){
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
        }
    }

    public function chooseItem(){
        $this->assign('meta_title', '选择项目 | 大学生创新学分审核系统');
        $this->assign('layout_login',C('__LAYOUT_LOGIN__'));
        $this->display();
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
    
    public function item_list(){
        // 获取所有用户
        $itemDB = D('Application');
        $itemCount = $itemDB->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($itemCount,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $limit = $Page->firstRow.','.$Page->listRows;// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $itemDB->where(1)->order('item_id')->limit($limit)->select();
        foreach($list as $vo){
            foreach ($vo as $v){
                if($v['item_status']=='1'){
                    $v['item_status'] = '已通过';
                }else if($v['item_status']=='0'){
                    $v['item_status'] = '未审核';
                }else{
                    $v['item_status'] = '作假者';
                }
            }
        }
        $this->assign('lists',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('layout_admin', C('__LAYOUT_ADMIN__'));  // 页面公共继承模版
        $this->assign('meta_title', "申请管理 | 大学生创新学分审核系统");
        $this->display(); // 输出模板
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

    public function item_list_1(){
         // 获取所有用户
        $itemDB = D('Application');
        $itemCount = $itemDB->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($itemCount,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $limit = $Page->firstRow.','.$Page->listRows;// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $itemDB->where(1)->order('item_id')->limit($limit)->select();
        $this->assign('lists',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('layout_admin', C('__LAYOUT_ADMIN__'));  // 页面公共继承模版
        $this->assign('meta_title', "申请管理 | 大学生创新学分审核系统");
        $this->display(); // 输出模板    
    }

    public function item_list_0(){
        // 获取所有用户
        $itemDB = D('Application');
        $itemCount = $itemDB->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($itemCount,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $limit = $Page->firstRow.','.$Page->listRows;// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $itemDB->where(1)->order('item_id')->limit($limit)->select();
        $this->assign('lists',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('layout_admin', C('__LAYOUT_ADMIN__'));  // 页面公共继承模版
        $this->assign('meta_title', "申请管理 | 大学生创新学分审核系统");
        $this->display(); // 输出模板
    }

    //显示用的，不处理数据
    public function item_verified_admin(){
        // 获取所有用户
        $itemDB = D('Application');
        $itemCount = $itemDB->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($itemCount,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $limit = $Page->firstRow.','.$Page->listRows;// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $itemDB->where('item_status=%d',1)->order('apply_id')->limit($limit)->select();
        $this->assign('lists',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('layout_admin', C('__LAYOUT_ADMIN__'));  // 页面公共继承模版
        $this->assign('meta_title', "已通过申请 | 大学生创新学分审核系统");
        $this->display(); // 输出模板ied
    }

    public function item_verified_student(){
        $user_id = is_login();
        $itemDB = D('Application');
        $itemCount = $itemDB->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($itemCount,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $limit = $Page->firstRow.','.$Page->listRows;// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $map['item_status']=1;
        $map['user_id'] = $user_id;
        $list = $itemDB->where($map)->order('apply_id')->limit($limit)->select();
        $this->assign('lists',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('user_id',$user_id);

        $userDB = D('user');
        $user_info = $userDB->getUserInfo($user_id);

        $application_count = $itemDB->getApplicationCount($user_info[0]['user_id']);
        $application_verified = $itemDB->getApplicationVerified($user_info[0]['user_id']);

        $creditsDB = D('Credits');
        $credits_value = $creditsDB->getCreditsValue($user_id);

        $this->assign('application_count',$application_count);
        $this->assign('application_verified',$application_verified);
        $this->assign('credits_value',$credits_value);
        $this->assign('user_info', $user_info[0]);

        $this->assign('layout_home', C('__LAYOUT_HOME__'));  // 页面公共继承模版
        $this->assign('meta_title', "已通过申请 | 大学生创新学分审核系统");
        $this->display(); // 输出模板ied
    }

    public function item_unverify_student(){
        $user_id = is_login();
        $itemDB = D('Application');
        $itemCount = $itemDB->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($itemCount,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $limit = $Page->firstRow.','.$Page->listRows;// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $map['item_status']=0;
        $map['user_id'] = $user_id;
        $list = $itemDB->where('item_status=%d AND user_id=%d',0,$user_id)->order('apply_id')->limit($limit)->select();
        $this->assign('lists',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('user_id',$user_id);

        $userDB = D('user');
        $user_info = $userDB->getUserInfo($user_id);

        $application_count = $itemDB->getApplicationCount($user_info[0]['user_id']);
        $application_verified = $itemDB->getApplicationVerified($user_info[0]['user_id']);

        $creditsDB = D('Credits');
        $credits_value = $creditsDB->getCreditsValue($user_id);

        $this->assign('application_count',$application_count);
        $this->assign('application_verified',$application_verified);
        $this->assign('credits_value',$credits_value);
        $this->assign('user_info', $user_info[0]);

        $this->assign('layout_home', C('__LAYOUT_HOME__'));  // 页面公共继承模版
        $this->assign('meta_title', "已通过申请 | 大学生创新学分审核系统");
        $this->display(); // 输出模板ied
    }

    public function item_unverified_admin(){
        // 获取所有用户
        $itemDB = D('Application');
        $itemCount = $itemDB->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($itemCount,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $limit = $Page->firstRow.','.$Page->listRows;// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $itemDB->where('item_status=%d',0)->order('apply_id')->limit($limit)->select();
        $this->assign('lists',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('layout_admin', C('__LAYOUT_ADMIN__'));  // 页面公共继承模版
        $this->assign('meta_title', "未通过申请 | 大学生创新学分审核系统");
        $this->display(); // 输出模板ied
    }
}