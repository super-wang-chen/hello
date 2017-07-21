<?php
namespace Home\Model;
use Think\Model;
class CommonModel extends Model{
    /**
     * 判断购物车中已存在的商品是否跟即将添加的商品重复，重复->true,不重复->false
     * @param  int     $id     产品id
     * @return bool    $status
     */
    public function judgeHave($id){
        $status=false;
        foreach($_SESSION['mycart'] as $k=>$v){
            if($k==$id){
                $status=true;
            }
        }
        //echo 123;die;
        return $status;
    }
   

    
}//class的结束符！