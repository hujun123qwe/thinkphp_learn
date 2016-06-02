<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2016/5/26
 * Time: 11:16
 */
namespace Home\Controller;
use Think\Controller;

class CreditsController extends Controller{

    protected function _initialize() {
        // 登录检测
//        if (!is_login()) { //还没登录跳转到登录页面
//            $this->redirect('Home/Public/login');
//        }
    }
    
    public function credits_list(){
        // 获取所有用户
        $creditsDB = D('Credits');
        $creditsCount = $creditsDB->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($creditsCount,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $limit = $Page->firstRow.','.$Page->listRows;// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $creditsDB->where(1)->order('credits_id')->limit($limit)->select();
        $this->assign('lists',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('layout_admin', C('__LAYOUT_ADMIN__'));  // 页面公共继承模版
        $this->assign('meta_title', "学分管理 | 大学生创新学分审核系统");
        $this->display(); // 输出模板
    }

    public function verifyItem(){
        $item_id = I('get.item_id');
        $itemDB = D('Application');
        $item_info = $itemDB->getItemInfo($item_id);
        $this->assign('item_info', $item_info[0]);
        $this->assign('meta_title', "审核项目 | 大学生创新学分审核系统");
        $this->assign('layout_admin', C('__LAYOUT_ADMIN__'));  // 页面公共继承模版
        $this->display();
    }
    
    public function verified(){
        $item_id = I('get.item_id');
        $itemDB = D('Application');
        if($itemDB->verified($item_id)){
            $this->success('审核通过');
        }else{
            $this->error('系统错误');
        }
    }
    
    
    public function check(){
        
    }
    
    public function del(){
        
    }
    
    public function edit(){
        
    }
    
    public function add(){
        
    }
    
    public function prints(){
        
    }
}