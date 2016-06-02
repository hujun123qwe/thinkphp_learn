<?php
namespace Home\Model;
use Think\Model;
class ApplicationModel extends Model{

    public function deleteItem($item_id){
        if(empty($item_id)){
            return 0;
        }else{
            return $this->where('item_id=%d',$item_id)->delete();
        }
    }

    public function srtp($map){
        if(empty($map)){
            return 0;
        }else{
            return $this->add($map);
        }
    }

    public function getItemInfo($item_id){
    	$map['item_id'] = array(eq, $item_id);
    	return $this->where($map)->select();
    }
    
    public function getItemList($student_id){
        $map['student_id'] = array(eq, $student_id);
        return $this->where($map)->select();
    }
    
    public function editItem($map,$item_id){
        if(empty($map)){
            return 0;
        }else{
            return $this->where("item_id = %d", $item_id)->save($map);
        }
    }

    public function verified($item_id){
        if(empty($item_id)){
            return 0;
        }else{
            $map['item_status'] = 1;
            return $this->where('item_id=%d',$item_id)->save($map);
        }
    }
}