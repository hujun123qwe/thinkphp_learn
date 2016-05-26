<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 2016/5/26
 * Time: 10:58
 */

namespace Home\Controller;
use Think\Controller;

class ItemController extends Controller{
    public function add_item(){
        $this->display();
    }
    
    public function del_item(){
        $this->display();
    }
    
    public function edit_item(){
        $this->display();
    }
}