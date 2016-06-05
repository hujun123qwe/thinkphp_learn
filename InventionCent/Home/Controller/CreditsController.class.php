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
       if (!is_login()) { //还没登录跳转到登录页面
           $this->redirect('Home/Public/login');
       }
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
        $item_id = I('get.apply_id');
        $itemDB = D('Application');
        $item_info = $itemDB->getItemInfo($item_id);
        $map = json_decode($item_info[0]['apply_info'],true);
        $this->assign('apply_info',$map);

        $userDB = D('User');
        $user_info = $userDB->getUserInfo($item_info[0]['user_id']);
        $this->assign('user_info',$user_info[0]);

        $this->assign('item_info', $item_info[0]);
        $this->assign('meta_title', "审核项目 | 大学生创新学分审核系统");
        $this->assign('layout_admin', C('__LAYOUT_ADMIN__'));  // 页面公共继承模版
        $this->display();
    }
    
    public function verified(){
        $admin_id = is_login();
        $apply_id = I('get.apply_id');
        $itemDB = D('Application');
        $creditsDB = D('Credits');
        $item_info = $itemDB->getItemInfo($apply_id);
        $item_id = $item_info[0]['item_id'];
        $creditsValue = $this->getCreditsValue($item_id, $item_info);

        if($itemDB->verified($admin_id,$apply_id) && $creditsDB->createCredits($item_info[0],$creditsValue)){
            $this->success('审核通过',U('Application/item_list'));
        }else{
            $this->error('审核出错，请检查申请单');
        }
    }

    public function getCreditsValue($item_id,$item_info){
        switch ($item_id){
            case 1:
                return $this->credits_srtp($item_info);
            default:
                $this->error('不能确定项目类型');
                break;
        }
    }

    protected function credits_srtp($item_info){
        $apply_info = json_decode($item_info[0]['apply_info'],true);
        //项目不通过
        if($apply_info['grade']==4){
            return 0;
        }
        $item_basic_credits_array = array(
            array(30,25,20),
            array(50,40,30),
            array(70,60,40),
            array(80,65,42),
            array(90,70,44)
        );
        $item_basic_credits = $item_basic_credits_array[$apply_info['igroup']-1][$apply_info['grade']-1];
        if($apply_info['igroup']==4 && $apply_info['item_type']==1){
            $item_bonus_credits = 12;
        }else{
            $item_bonus_credits = 0;
        }
        return $item_basic_credits+$item_bonus_credits;
    }

    public function print_view(){
        if(IS_POST) {
            
        }else{
            $item_id = I('get.apply_id');
            $itemDB = D('Application');
            $item_info = $itemDB->getItemInfo($item_id);
            $map = json_decode($item_info[0]['apply_info'],true);
            $this->assign('apply_info',$map);

            $userDB = D('User');
            $user_info = $userDB->getUserInfo($item_info[0]['user_id']);
            $this->assign('user_info',$user_info[0]);

            $this->assign('item_info', $item_info[0]);
            $this->assign('meta_title', "打印学分单 | 大学生创新学分审核系统");
            $this->assign('layout_admin', C('__LAYOUT_ADMIN__'));  // 页面公共继承模版
            $this->display();
        }
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