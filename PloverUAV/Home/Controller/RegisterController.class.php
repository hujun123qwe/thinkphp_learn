<?php
namespace HOME\Controller;
use Think\Controller;

class RegisterController extends Controller{
    public function register(){
        $this->display("./index");
    }
}