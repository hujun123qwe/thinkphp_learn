<?php
/*CREATE TABLE `ahut_user` (
`user_id` smallint(6) unsigned NOT NULL auto_increment,
  `student_id` mediumint(9) unsigned NOT NULL default '0',
  `user_name` varchar(60) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `password` varchar(32) NOT NULL default '',
  `address` varchar(128) default '安徽工业大学',
  `add_time` int(11) NOT NULL default '0',
  `last_login` int(11) NOT NULL default '0',
  `last_ip` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`user_id`),
  KEY `user_name` (`user_name`),
  KEY `student_id` (`student_id`)
);*/

namespace Home\Model;
use Think\Model;
class UserModel extends Model{

    protected $_validate = array(
        array('verify','require','验证码必须！'), //默认情况下用正则进行验证
        array('name','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
        array('value',array(1,2,3),'值的范围不正确！',2,'in'), // 当值不为空的时候判断是否在一个范围内
        array('repassword','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
        array('password','checkPwd','密码格式不正确',0,'function'), // 自定义函数验证密码格式
    );

    public function user(){
        echo 'some';
    }

    public function register(){
        $user_name = I('post.user_name','hujun','htmlspecialchars');
        $student_id = I('post.student_id','129084213','htmlspecialchars');
        $password = I('post.user_password','qweasd','htmlspecialchars');
        
        $data['user_name'] = $user_name;
        $data['student_id'] = $student_id;
        $data['password'] = md5($password);
        $data['add_time'] = time();
        $data['last_time'] = time();
        $data['last_ip'] = get_client_ip();

        return $this->add($data) ? true : false;
    }

     /**
     * 用户登录
     * @author jry <598821125@qq.com>
     */
    public function login($username, $password){
        //去除前后空格
        $username = trim($username);
        if (preg_match("/^1\d{10}$/", $username)) {
            $map['student_id'] = $username;    // 手机号登陆
        } else {
            $map['user_name'] = $username;  // 用户名登陆
        }
        $user_info = $this->where($map)->find(); //查找用户
        if (!$user_info) {
            $this->error = '用户不存在或被禁用！';
        } else {
            if (md5($password) !== $user_info['password']) {
                $this->error = '密码错误！';
            } else {
                return $user_info;
            }
        }
        return false;
    }

    public function login_old(){
        $user_name = I('post.login','','htmlspecialchars');
        $password = I('post.user_password','','htmlspecialchars');

        if (!$user_name) {
            $this->error('请输入账号！');
        }
        if (!$password) {
            $this->error('请输入密码！');
        }

        if(preg_match("/^1\d{10}$/", $user_name)) {
            $data['student_id'] = $user_name;   // 学号登陆
        }else{
            $data['user_name'] = $user_name;  // 用户名登陆
        }
        $user_info = $this->where($data)->find(); //查找用户
        if (!$user_info) {
            return false;
        } else {
            if (md5($password) !== $user_info['password']) {
                $this->error('密码错误！');
            } else {
                return $user_info;
            }
        }
        return false;
    }

        /**
     * 设置登录状态
     * @author jry <598821125@qq.com>
     */
    public function auto_login($user){
        // 记录登录SESSION和COOKIES
        $auth = array(
            'user_id'      => $user['user_id'],
            'password' => $user['password'],
        );
        session('user_auth', $auth);
        session('user_auth_sign', $this->data_auth_sign($auth));
        return $this->is_login();
    }

        /**
     * 检测用户是否登录
     * @return integer 0-未登录，大于0-当前登录用户ID
     * @author jry <598821125@qq.com>
     */
    public function is_login(){
        $user = session('user_auth');
        if (empty($user)) {
            return 0;
        } else {
            if (session('user_auth_sign') == $this->data_auth_sign($user)) {
                return $user['user_id'];
            } else {
                return 0;
            }
        }
    }

    /**
     * 数据签名认证
     * @param  array  $data 被认证的数据
     * @return string       签名
     * @author jry <598821125@qq.com>
     */
    public function data_auth_sign($data){
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
     * @param $db
     * @param string $name
     * @return bool
     */
    public function insertUser($name=''){
        $data['name'] = $name;
        return $this->add($data) ? true : false;
    }

    /*
    edit student info 
    */
    public function edit_student($map,$user_id){
        if(empty($map)){
            return 0;
        }else{
            return $this->where("user_id = %d",$user_id)->save($map);
        }
    }

    /*
    得到当前登录用户信息
    */
    public function getUserInfo($user_id){
        $map['user_id'] = array(eq, $user_id);
        return $this->where($map)->select();
    }
}
