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
            $file_name = 'avatar_pic';
            $userDB = D('user');
            $user_info = $userDB->getUserInfo($user_id);

            $temp_old = $user_info[0];

            if(is_uploaded_file($_FILES["srtp_file"][tmp_name])){
                if($file_path = $this->my_upload($file_name)){
                    $map['avatar_pic'] = $file_path;
                }else{
                    $this->error('上传文件错误');
                }
            }
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
            if($map == array_intersect($temp_old, $map)){
                $this->success('个人信息更新成功',U('User/index_student'));
            }else if($userDB->edit_student($map,$user_id)){
                $this->success('个人信息更新成功',U('User/index_student'));
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

    public function edit_admin($user_id=-1){
        if(IS_POST){
            $map = array();
            $user_id = I('post.user_id');
            $map['email'] = I('post.email');
            $map['phone'] = I('post.phone');
            $map['academy'] = I('post.academy');
            $map['iclass'] = I('post.iclass');
            $map['address'] = I('post.address');
            $map['password'] = I('post.password');
            $userDB = D('User');
            if($userDB->edit_student($map,$user_id)){
                $this->success('个人信息更新成功');
            }else{
                $this->error('个人信息未作任何更改');
            }
        }else{
            if($user_id == -1){
                $user_id = is_login();
            }
            if($user_id){
                $userDB = D('user');
                $user_info = $userDB->getUserInfo($user_id);
            }else{
                $this->error('你已经掉线了',U('Public/login'));
            }
            $userDB = D('user');
            $user_info = $userDB->getUserInfo($user_id);
            $this->assign('user_info', $user_info[0]);
            $this->assign('meta_title','编辑个人信息 | 大学生创新学分审核系统');
            $this->assign('layout_admin', C('__LAYOUT_ADMIN__'));  // 页面公共继承模版
            $this->display('edit_admin');
        }
    }

    public function editUser($user_id_student){
        $userDB = D('User');
        $user_info_student = $userDB->getUserInfo($user_id_student);
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
                $this->success('个人信息更新成功');
            }else{
                $this->error('个人信息未作任何更改');
            }
        }else{
            $user_id = is_login();
            if($user_id){
                $userDB = D('user');
                $user_info = $userDB->getUserInfo($user_id);
            }else{
                $this->error('你已经掉线了',U('Public/login'));
            }
            $userDB = D('user');
            $user_info = $userDB->getUserInfo($user_id);
            $this->assign('user_info', $user_info[0]);
            $this->assign('meta_title','编辑个人信息 | 大学生创新学分审核系统');
            $this->assign('layout_admin', C('__LAYOUT_ADMIN__'));  // 页面公共继承模版
            $this->display();
        }
    }
    
    public function delete_student(){
        $user_id = I('get.user_id');
        $userDB = D('User');
        if($userDB->deleteUser($user_id)){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

    public function delete_admin(){
        $this->error('禁止删除管理员');
    }

    public function edit_student_pro(){
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
                $this->success('个人信息更新成功');
            }else{
                $this->error('个人信息未作任何更改');
            }
        }else{
            $user_id_student = I('get.user_id_student');
            $user_id = is_login();
            if($user_id){
                $userDB = D('user');
                $user_info = $userDB->getUserInfo($user_id);
            }else{
                $this->error('你已经掉线了',U('Public/login'));
            }
            $userDB = D('user');
            $user_info = $userDB->getUserInfo($user_id);
            $user_info_student = $userDB->getUserInfo($user_id_student);
            $this->assign('user_info', $user_info[0]);
            $this->assign('user_info_student',$user_info_student[0]);
            $this->assign('meta_title','编辑学生信息 | 大学生创新学分审核系统');
            $this->assign('layout_admin', C('__LAYOUT_ADMIN__'));  // 页面公共继承模版
            $this->display();
        }
    }

    public function my_upload($file_name){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif','png','jpeg','doc','docx','ppt','pptx','xls','xlsx');// 设置附件上传类型
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

    public function edit_password(){
        if(IS_POST){

        }else{
            $user_id = is_login();
            if($user_id){
                $userDB = D('user');
                $user_info = $userDB->getUserInfo($user_id);
            }else{
                $this->error('你已经掉线了',U('Public/login'));
            }

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
            $this->assign('meta_title','修改密码 | 大学生创新学分审核系统');
            $this->assign('user_info', $user_info[0]);
            $this->assign('layout_home', C('__LAYOUT_HOME__'));  // 页面公共继承模版
            $this->display();
        }
    }
}