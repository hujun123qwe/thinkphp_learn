<?php
namespace Home\Model;
use Think\Model;
class ApplicationModel extends Model{

    public function srtp($map){
        if(empty($map)){
            $this->error('请将申请填写完整');
            return 0;
        }else{
            return $this->add($map);
        }
    }

    public function getItemInfo($item_id){
    	$map['item_id'] = array(eq, $item_id);
    	return $this->where($map)->select();
    }
}