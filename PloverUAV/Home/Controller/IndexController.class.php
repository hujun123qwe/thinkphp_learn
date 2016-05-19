<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index($name='tp'){
        $this->assign('where_is', C('WHERE_IS'));
        //$name = $_GET['name'];
        $this->assign('name', $name);
        $this->display('./index');
    }
}