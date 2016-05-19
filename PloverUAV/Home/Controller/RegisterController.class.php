<?php
namespace HOME\Controller;
use Think\Controller;

class RegisterController extends HomeController{
    public function register(){
<<<<<<< HEAD
        $this->display();
=======
        $ss = A('Home/CheckAnswer', 'Event');
        $keys = $ss->checkAnswer();
        $this->assign('key',$keys);
        $this->display("register");
>>>>>>> HL
    }
}