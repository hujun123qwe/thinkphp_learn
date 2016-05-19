<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
    
    public function user(){
        echo 'some';
    }
    
    /**
     * @param $db
     * @param string $name
     * @return bool
     */
    public function insertUser($name=''){
        $data['name'] = $name;
        return $this->add($data) ? true : false;
    }
}
