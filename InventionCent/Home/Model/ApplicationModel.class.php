<?php
namespace Home\Model;
use Think\Model;
class ApplicationModel extends Model{

    public function deleteItem($item_id){
        if(empty($item_id)){
            return 0;
        }else{
            return $this->where('apply_id=%d',$item_id)->delete();
        }
    }

    public function srtp($map){
        if(empty($map)){
            return 0;
        }else{
            return $this->add($map);
        }
    }

    public function getItemInfo($apply_id){
        if(empty($apply_id)){
            return 0;
        }else{
            $map['apply_id'] = array(eq, $apply_id);
            return $this->where($map)->select();
        }
    }
    
    public function getItemList($user_id){
        if(empty($user_id)){
            return 0;
        }else{
            $map['user_id'] = array(eq, $user_id);
            return $this->where($map)->select();
        }
    }
    
    public function editItem($map,$item_id){
        if(empty($map)){
            return 0;
        }else{
            return $this->where("apply_id=%d", $item_id)->save($map);
        }
    }

    public function verified($admin_id,$item_id){
        if(empty($item_id)){
            return 0;
        }else{
            $map['inspector_id'] = $admin_id;
            $map['item_status'] = 1;
            $map['verify_time'] = time();
            $map['is_verified'] = 1;
            return $this->where('apply_id=%d',$item_id)->save($map);
        }
    }

    public function getApplicationCount($user_id){
        if(empty($user_id)){
            return 0;
        }else{
            return $this->where('user_id=%d',$user_id)->count();
        }
    }

    public function getApplicationVerified($user_id){
        if(empty($user_id)){
            return 0;
        }else{
            $map['user_id'] = $user_id;
            $map['item_status'] = 1;
            return $this->where($map)->count();
        }
    }

    public function getItemId($apply_id){
        if(empty($apply_id)){
            return 0;
        }else{
            return $this->where('apply_id=%d',$apply_id)->select('item_id');
        }
    }
}