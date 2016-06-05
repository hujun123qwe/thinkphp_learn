<?php
// +----------------------------------------------------------------------
// | OpenCMF [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.opencmf.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: jry <598821125@qq.com>
// +----------------------------------------------------------------------
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
/**
 * 后台唯一不需要权限验证的控制器
 * @author jry <598821125@qq.com>
 */
class PublicController extends Controller {
    /**
     * 后台登陆
     * @author jry <598821125@qq.com>
     */
    public function login() {
        if (IS_POST) {
            $username = I('username');
            $password = I('password');
            // 图片验证码校验
            if (!$this->check_verify(I('post.verify'))) {
                $this->error('验证码输入错误！');
            }

            // 验证用户名密码是否正确
            $user_object = D('Home/User');
            $user_info = $user_object->login($username, $password);
            if (!$user_info) {
                $this->error('登录失败');
            }
            
            // 设置登录状态
            //提交成功后，先生退出登录
            $uid = $user_object->auto_login($user_info);

            // 跳转
            if (0 < $user_info['user_id'] && $user_info['user_id'] === $uid) {
                if($user_info['user_type'] == 1){
                    $this->success('登录成功！', U('Admin/index'));    
                }else if($user_info['user_type'] == 0){
                    $this->success('登录成功！', U('Index/index'));
                }
            } else {
                $this->logout();
            }
        } else {
            $this->assign('meta_title', '登录 | 大学生创新学分审核系统');
            $this->assign('layout_login',C('__LAYOUT_LOGIN__'));
            $this->display();
        }
    }

    /**
     * 注销
     * @author jry <598821125@qq.com>
     */
    public function logout() {
        session('user_auth', null);
        session('user_auth_sign', null);
        $this->success('退出成功！', U('login'));
    }

    /**
     * 图片验证码生成，用于登录和注册
     * @author jry <598821125@qq.com>
     */
    public function verify($vid = 1) {
        $verify = new Verify();
        $verify->length = 4;
        $verify->entry($vid);
    }

        /**
     * 数据签名认证
     * @param  array  $data 被认证的数据
     * @return string       签名
     * @author jry <598821125@qq.com>
     */
    public function data_auth_sign($data) {
        // 数据类型检测
        if (!is_array($data)) {
            $data = (array)$data;
        }
        ksort($data); //排序
        $code = http_build_query($data); // url编码并生成query字符串
        $sign = sha1($code);  // 生成签名
        return $sign;
    }

    /**
     * 检测验证码
     * @param  integer $id 验证码ID
     * @return boolean 检测结果
     */
    function check_verify($code, $vid = 1) {
        $verify = new Verify();
        return $verify->check($code, $vid);
    }

    /*
     *用户注册
     *跳转页面
    */
    public function register(){
        if(IS_POST){
            if(!$this->check_verify(I('post.verify'))){
                $this->error('验证码输入错误！');
            }
            if(I('post.student_id')){
                $reg_data['student_id'] = I('post.student_id');
            }else{
                $this->error('注册失败，必须输入学号');
            }
            if(I('post.user_name')){
                $reg_data['user_name'] = I('post.user_name');
            }else{
                $this->error('注册失败，必须输入姓名');
            }
            $reg_data['password'] = I('post.password');
            $reg_data['password'] = md5($reg_data['password']);
            $reg_data['add_time'] = time();
            $reg_data['last_login'] = $reg_data['add_time'];
            $reg_data['last_ip'] = get_client_ip();
            $userDB = D('User');
            if($userDB->checkRegister($reg_data['student_id'])){
                $this->error('此学号已被注册，请联系管理员15551053527',5);
            }
            $data = $userDB->create($reg_data);
            if($data){
                $id = $userDB->add($data);
                if ($id) {
                    session('reg_verify', null);
                    $user_info = $userDB->login($data['user_name'], I('post.password'));
                    $uid = $userDB->auto_login($user_info);
                    $this->success('注册成功', U('Index/first_login'));
                } else {
                    $this->error('注册失败，请重新注册');
                }
            } else {
                $this->error('注册失败，请重新注册');
            }
        }else{
            $this->assign('meta_title', '注册 | 大学生创新学分审核系统');
            $this->assign('layout_login',C('__LAYOUT_LOGIN__'));
            $this->display();
        }
    }
}
