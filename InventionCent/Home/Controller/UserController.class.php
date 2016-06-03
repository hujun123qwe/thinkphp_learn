<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
   protected function _initialize() {
       // 登录检测
       if (!is_login()) { //还没登录跳转到登录页面
           $this->redirect('Home/Public/login');
       }
   }
    /**
     * 管理员列表
     * @param $tab 配置分组ID
     * @author jry <598821125@qq.com>
     */
    public function index(){
        // 获取所有用户
        $userDB = D('User');
        $userCount = $userDB->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($userCount,25);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $limit = $Page->firstRow.','.$Page->listRows;// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $userDB->where('1')->order('user_id')->limit($limit)->select();
        $this->assign('lists',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('_admin_public_layout', C('ADMIN_PUBLIC_LAYOUT'));  // 页面公共继承模版
        $this->display(); // 输出模板
    }

    public function index_student(){

        $user_id = is_login();
        $userDB = D('User');
        $user_info = $userDB->getUserInfo($user_id);

        $itemDB = D('Application');
        $item_list = $itemDB->getItemList($user_info[0]['user_id']);
        $application_count = $itemDB->getApplicationCount($user_info[0]['user_id']);
        $application_verified = $itemDB->getApplicationVerified($user_info[0]['user_id']);

        $creditsDB = D('Credits');
        $credits_value = $creditsDB->getCreditsValue($user_id);

        $this->assign('application_count',$application_count);
        $this->assign('application_verified',$application_verified);
        $this->assign('credits_value',$credits_value);

        $this->assign('user_info',$user_info[0]);
        $this->assign('item_list',$item_list);
        $this->assign('meta_title','个人主页 | 大学生创新学分审核系统');
        $this->assign('layout_home', C('__LAYOUT_HOME__'));  // 页面公共继承模版
        $this->display(); // 输出模板
    }

    /**
     * 新增
     * @author jry <598821125@qq.com>
     */
    public function add(){
        if (IS_POST) {
            $access_object = D('Access');
            $data = $access_object->create();
            if ($data) {
                if ($access_object->add($data)) {
                    $this->success('新增成功', U('index'));
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error($access_object->getError());
            }
        } else {
            //使用FormBuilder快速建立表单页面。
            $builder = new \Common\Builder\FormBuilder();
            $builder->setMetaTitle('新增配置')  //设置页面标题
            ->setPostUrl(U('add')) //设置表单提交地址
            ->addFormItem('uid', 'text', 'UID', '用户ID')
                ->addFormItem('group', 'select', '用户组', '不同用户组对应相应的权限', select_list_as_tree('Group'))
                ->display();
        }
    }

    /**
     * 编辑
     * @author jry <598821125@qq.com>
     */
    public function edit($id){
        if (IS_POST) {
            $access_object = D('Access');
            $data = $access_object->create();
            if ($data) {
                if ($access_object->save($data)) {
                    $this->success('更新成功', U('index'));
                } else {
                    $this->error('更新失败');
                }
            } else {
                $this->error($access_object->getError());
            }
        } else {
            // 使用FormBuilder快速建立表单页面。
            $builder = new \Common\Builder\FormBuilder();
            $builder->setMetaTitle('编辑配置')  // 设置页面标题
            ->setPostUrl(U('edit'))    // 设置表单提交地址
            ->addFormItem('id', 'hidden', 'ID', 'ID')
                ->addFormItem('uid', 'text', 'UID', '用户ID')
                ->addFormItem('group', 'select', '用户组', '不同用户组对应相应的权限', select_list_as_tree('Group'))
                ->setFormData(D('Access')->find($id))
                ->display();
        }
    }
    
    public function user_admin(){
        // 获取所有用户
        $userDB = D('User');
        $adminCount = $userDB->getAdminNumber();
        $Page       = new \Think\Page($adminCount,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $limit = $Page->firstRow.','.$Page->listRows;// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $userDB->where('user_type=%d',1)->order('user_id')->limit($limit)->select();
        $this->assign('lists',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('layout_admin', C('__LAYOUT_ADMIN__'));  // 页面公共继承模版
        $this->assign('meta_title', "管理员管理 | 大学生创新学分审核系统");
        $this->display(); // 输出模板
    }
    
    public function user_list(){
        // 获取所有用户
        $userDB = D('User');
        $userCount = $userDB->getStudentNumber();// 查询满足要求的总记录数
        $Page       = new \Think\Page($userCount,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $limit = $Page->firstRow.','.$Page->listRows;// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $userDB->where('user_type=%d',0)->order('user_id')->limit($limit)->select();
        $this->assign('lists',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('layout_admin', C('__LAYOUT_ADMIN__'));  // 页面公共继承模版
        $this->assign('meta_title', "学生管理 | 大学生创新学分审核系统");
        $this->display(); // 输出模板
    }

    public function edit_student(){
        if(IS_POST){
            $map = array();
            $user_id = I('post.user_id');
            if(I('post.email')){
                $map['email'] = I('post.email');
            }
            if(I('post.phone')){
                $map['phone'] = I('post.phone');
            }
            if(I('post.academy')){
                $map['academy'] = I('post.academy');
            }
            if(I('post.iclass')){
                $map['iclass'] = I('post.iclass');
            }
            if(I('post.address')){
                $map['address'] = I('post.address');
            }
            if(I('post.password')){
                $map['password'] = I('post.password');
            }
            $userDB = D('User');            
            if($userDB->edit_student($map,$user_id)){
                $this->display();
            }else{
                $this->error('数据传递错误:(');
            }
        }else{
            $user_id = is_login();
            if($user_id){
                $userDB = D('user');
                $user_info = $userDB->getUserInfo($user_id);
            }else{
                $this->error('你已经掉线了',U('Public/login'));
            }
//测试用            
            $userDB = D('user');
            $user_info = $userDB->getUserInfo($user_id);

            $itemDB = D('Application');
            $application_count = $itemDB->getApplicationCount($user_info[0]['user_id']);
            $application_verified = $itemDB->getApplicationVerified($user_info[0]['user_id']);

            $creditsDB = D('Credits');
            $credits_value = $creditsDB->getCreditsValue($user_id);

            $this->assign('application_count',$application_count);
            $this->assign('application_verified',$application_verified);
            $this->assign('credits_value',$credits_value);
            $this->assign('meta_title','编辑个人信息 | 大学生创新学分审核系统');
            $this->assign('user_info', $user_info[0]);
            $this->assign('layout_home', C('__LAYOUT_HOME__'));  // 页面公共继承模版
            $this->display();
        }
    }
}