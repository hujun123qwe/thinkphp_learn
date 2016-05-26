<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function user_item(){
        $this->display('item');
    }
    
    public function name($name='hj2hl'){
        echo "$name";
    }

    public function id($id='-1'){
        //$id = $_GET['id'];
        echo "id = $id";
    }
    
    public function ok(){
        $this->success('Hujun2Huangling','Index/id',5);
    }
    
    public function insert_sql($name){
        $user = D('User');
        if($user->insertUser($name)){
            echo 'ok!';
        }else{
            $this->error('数据库连接错误');
        }
    }
    
    public function bootstrap(){
        $this->display();
    }
    
    public function login(){
        $this->display();
    }
    
    public function register(){
        $this->display();
    }
}