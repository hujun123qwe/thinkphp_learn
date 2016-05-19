<?php
namespace HOME\Controller;
use Think\Controller;

class RegisterController extends Controller{
    public function register(){
        $ss = A('Home/CheckAnswer', 'Event');
        $keys = $ss->checkAnswer();
        $this->assign('key',$keys);
        $this->display("register");
    }
}