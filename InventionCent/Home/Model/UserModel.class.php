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

    public function login(){
<<<<<<< HEAD
        $user_name = I('post.name','','htmlspecialchars');
        $student_id = I('post.student_id','','htmlspecialchars');
        $password = I('post.password','','htmlspecialchars');

        //匹配登录方式
        if (preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/", $username)) {
            $map['email'] = array('eq', $username);     // 邮箱登陆
        } elseif (preg_match("/^1\d{10}$/", $username)) {
            $map['mobile'] = array('eq', $username);    // 手机号登陆
        } else {
            $map['username'] = array('eq', $username);  // 用户名登陆
        }

        $user_info = $this->where($map)->find(); //查找用户
        if (!$user_info) {
            $this->error = '用户不存在或被禁用！';
        } else {
            if (md5($password) == $user_info['password']) {
                $this->error = '密码错误！';
=======
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
>>>>>>> some
            } else {
                return $user_info;
            }
        }
        return false;
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
}
