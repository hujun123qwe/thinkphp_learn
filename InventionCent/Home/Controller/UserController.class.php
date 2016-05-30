<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
    /**
     * 管理员列表
     * @param $tab 配置分组ID
     * @author jry <598821125@qq.com>
     */
    public function index() {
        // 获取所有用户
        $userDB = D('User');
        $userCount = $userDB->count();// 查询满足要求的总记录数
        //$Page       = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        //$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $userDB->where('1')->order('user_id')->select();
        $this->assign('list',$list);// 赋值数据集
       // $this->assign('page',$show);// 赋值分页输出
        $this->assign('_admin_public_layout', C('ADMIN_PUBLIC_LAYOUT'));  // 页面公共继承模版
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
}