<?php
namespace Home\Model;
use Think\Model;
class CreditsModel extends Model{
    
    public function lists(){
        $this->assign('_admin_public_layout', C('ADMIN_PUBLIC_LAYOUT'));  // 页面公共继承模版
        $this->display(); // 输出模板
    }

    public function getCreditsValue($user_id){
    	if(empty($user_id)){
    		return 0;
    	}else{
    		return $this->where('user_id=%d',$user_id)->sum('credits_value');
    	}
    }

    public function createCredits($item_info,$creditsValue){
        if(empty($item_info) || $creditsValue<0){
            return 0;
        }else{
            $map = array();
            $map['apply_id'] = $item_info['apply_id'];
            $map['user_id'] = $item_info['user_id'];
            $map['item_id'] = $item_info['item_id'];
            $map['credits_value'] = $creditsValue;
            $map['create_time'] = time();
            return $this->add($map);
        }
    }
}