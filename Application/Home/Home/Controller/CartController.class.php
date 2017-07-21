<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends CommonController {
    public function index(){ 
        //print_r($_COOKIE['cart']);die();
        if(empty($_SESSION['vip_name'])){
            $this->redirect('Login/login');
        }else{
            
            $array = json_decode($_COOKIE['cart'],true);//将该购物车中商品信息转化为数组
            //print_r($_COOKIE['cart']);die;
            $total = 0;        
            foreach($array as $v){
                $total+=$v['total'];
            }
           
            $this->assign('total',$total);
            $this->assign('cart',$array);        
            $this->display();
        }
    }//index结束符
    
    //添加购物车
    public function addCart(){
        if(IS_POST){
            $id=I('proId');
            $num=I('num');             
            $info=D('Product')->imgInfo($id);
            
            //判断cookie下面的$_COOKIE['cart']里面是否有值                        
            if(!empty($_COOKIE['cart'])){ //如果购物车中存在该商品，就重新追加商品信息               
                $arr = json_decode($_COOKIE['cart'],true);//把该购物车中商品的信息由字符串转化为数组            
                $arr[$id]['id']=$id;
                $arr[$id]['pro_name']=$info['pro_name'];
                $arr[$id]['pro_img']=$info['pro_img'];
                $arr[$id]['shop_price']=$info['shop_price'];
                //print_r($arr[$id]['shop_price']);die;
                if(!empty($arr[$id]['num'])){//判断购物车中是否存在商品重复,如果不重复就叠加产品数量
                    $arr[$id]['num']+=$num;
                    $arr[$id]['total']= $info['shop_price']* $arr[$id]['num'];
                    
                }else{
                    $arr[$id]['num']=$num;
                    $arr[$id]['total']= $info['shop_price']*$num;
                }
                
                //cookie的储存方式只能是字符串，保存时必须将数组转化为字符串
                setcookie('cart',json_encode($arr),time()+24*3600*30,'/');
                //print_r($_COOKIE['cart']);die;
                //第4参数为cookie的储存路径
            }else{//如果购物车中不存在该商品，直接往购物车中追加产品并保存COOKIE
                $array = array();//定义一个空数组将商品的信息放入
                $array[$id]['id']=$id;
                $array[$id]['pro_name']=$info['pro_name'];
                $array[$id]['pro_img']=$info['pro_img'];
                $array[$id]['shop_price']=$info['shop_price'];
                $array[$id]['num'] = $num;
                $array[$id]['total']= $info['shop_price']*$num; 
                //print_r($array );die;
                setcookie('cart',json_encode($array),time()+24*3600*30,'/');//第4参数为cookie的储存路径
                                            
            }                                         
            $this->redirect('index');
            
         }
                 
    }//addCart结束符
    
    //修改购物车
    public function updateCart(){
        if(IS_AJAX){
            $id=I('id');//获取ajax传过来的id
            $count=I('count');//获取ajax传过来的数量            
            $info=D('Product')->imgInfo($id);
            
            $arr = json_decode($_COOKIE['cart'],true);//把该购物车中商品的信息由字符串转化为数组            
            $arr[$id]['id']=$id;
            $arr[$id]['pro_name']=$info['pro_name'];
            $arr[$id]['pro_img']=$info['pro_img'];
            $arr[$id]['shop_price']=$info['shop_price'];
            $arr[$id]['num']=$count;
            $arr[$id]['total']= $info['shop_price']*$count;
            //cookie的储存方式只能是字符串，保存时必须将数组转化为字符串
            setcookie('cart',json_encode($arr),time()+24*3600*30,'/');//第4参数为cookie的储存路径
            
        }
        
    }//修改购物车结束符
    
    //删除购物车
    public function delCart(){
        if(IS_AJAX){
            $str=I('str');//获取被勾选中的id拼接的字符串
            $arr=explode(",",$str);//将字符串用逗号分开变成数组
            $array=array_filter($arr);//去掉购物车中勾选中的商品的id数组中的空值
            $arr1 = json_decode($_COOKIE['cart'],true);//把该购物车中原来商品的COOKIE信息由字符串转化为数组
            
            foreach($array as $v){//将勾选中的商品循环遍历
                unset($arr1[$v]);//删除选中的商品
            }
            //print_r($array);die;
            setcookie('cart',json_encode($arr1),time()+24*3600*30,'/');//第4参数为cookie的储存路径
                        
        }
    }


}//class的结束符，不要动！