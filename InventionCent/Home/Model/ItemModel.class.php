<?php
namespace Home\Model;
use Think\Model;
class ItemModel extends Model{

    public function getItemInfo($item_id){
        if(empty($item_id)){
            return 0;
        }else{
            return $this->where('item_id=%d',$item_id)->select();
        }
    }
}