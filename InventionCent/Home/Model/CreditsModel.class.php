<?php
namespace Home\Model;
use Think\Model;
class CreditsModel extends Model{
    
    public function lists(){
        $this->assign('_admin_public_layout', C('ADMIN_PUBLIC_LAYOUT'));  // 页面公共继承模版
        $this->display(); // 输出模板
    }
}