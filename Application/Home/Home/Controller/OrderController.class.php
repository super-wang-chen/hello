<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends CommonController {
/****************************************加入购物车**********************************/
    
    //购物车->添加订单
    public function orderAdd(){                        
        if($_POST['total']==0){//如果购物车中总金额为0，就阻止提交订单并给一个提示
           $this->error('请选择您所要购买的商品！');
        }else{//如果不为0，就跳到订单页
           $temp = array();//定义一个空数组，存放临时信息             
           $array = explode(',',$_POST['pro_id']);//将POST接收到的id组成的字符串转拆分成数组
           $array = array_filter($array);//去掉数组中的空值
           $arr = json_decode($_COOKIE['cart'],true);//购物车信息将字符串转化为数组
           foreach ($array as $v){//将购物车中被选中商品的的信息循环出来，并放到临时数组中
               $temp[] = $arr[$v];
           }
           setcookie('cartInfo',json_encode($temp),time()+24*3600*30,'/');//第4参数为cookie的储存路径
           //print_r($_COOKIE['cartInfo']);die();
           $this->redirect('order/index');
        }
    }
    
    //购物车->订单页
    public function index(){        
        $temp = json_decode($_COOKIE['cartInfo'],true);//将该购物车中商品信息转化为数组

        
        
        $order_id = time().mt_rand(100,999);//获取订单编号
        $orderTotal = 0 ;        
        foreach($temp as $v){
            $orderTotal +=$v['total'];                        
        }

        //print_r($temp);die;
        if(IS_POST){
            $datas = array();//定义一个空数组，存放订单信息
            $datas['user_info']=json_encode($_POST);//将用户地址信息转换为字符串存到数据库
            $datas['product_info'] = json_encode($temp);//将购物车中的商品订单信息转化为字符串存到数据库表中
            $datas['order_id'] =$order_id;//将订单编号存到数据库
            $datas['total'] = $orderTotal;//将总金额存到数据库
            $datas['member_id']=$_SESSION['vip_name'];//添加会员名到数据库
            $datas['time']=date('Y-m-d H:i:s',time());
            $datas['status']=1;
            $res = M('order')->add($datas);//将所有信息添加到表中
            if($res>0){//如果受影响的行数大于0，就查找最新的id
                //print_r( $temp);die;
                $arr1=json_decode($_COOKIE['cart'],true);
                //$idArr=array();
                foreach($temp as $key=>&$val){
                     $idA=$val['id'];
                     unset($arr1[$idA]);
                }
                setcookie('cart',json_encode($arr1),time()+24*3600*30,'/');
               
                $id = M('Order')->getLastInsID();
                $_SESSION['addId'] =  $id;//将更新的商品放到session                
                $this->redirect('Order/pay');
            }
        }
        

        $this->assign('order_id',$order_id);//将订单编号模板输出
        $this->assign('list',$temp);//将产品信息模板输出
        $this->assign('orderTotal',$orderTotal); //将总价模板输出
        $this->display();
    }
    
    //购物车->订单页->支付
    public function pay(){                
        $id=$_SESSION['addId'];//获取当前订单id
        $data = M('Order')->find($id);//通过id查找当前订单信息        
        $array = json_decode($data['product_info'],true);
        $userArr=json_decode($data['user_info'],true);        
        $orderTotal = 0 ;
        foreach($array as $v){
            $orderTotal +=$v['total'];
        }
        
        $data['orderTotal'] = $orderTotal;
        //print_r($array);die;
        $this->assign('userArr',$userArr);
        $this->assign('list',$array);
        $this->assign('data',$data);
        //print_r($_COOKIE);die;
        
        $this->display();
    }
    
    
    
  /****************************************立即购买**********************************/  
    //产品详情->立即购买
    public function buy_now(){
        if(empty($_SESSION['vip_name'])){
            $this->redirect('Login/login');
        }else{
            if(IS_POST){
                $id=I('proId');
                $num=I('num');
                $info=D('Product')->imgInfo($id);
                //print_r($info);die;
                $array = array();//定义一个空数组将商品的信息放入
                $array[$id]['id']=$id;
                $array[$id]['pro_name']=$info['pro_name'];
                $array[$id]['pro_img']=$info['pro_img'];
                $array[$id]['shop_price']=$info['shop_price'];
                $array[$id]['num'] = $num;
                $array[$id]['total']= $info['shop_price']*$num;
                //print_r($array );die;
                //将商品信息转化为字符串存入订单
                setcookie('buyInfo',json_encode($array),time()+24*3600*30,'/');//第4参数为cookie的储存路径
                
            }
            $this->redirect("Order/buy_index");
        }
    }
    
    //产品详情->确认订单
    public function buy_index(){
        $array = json_decode($_COOKIE['buyInfo'],true);//将该购物车中商品信息转化为数组
        $order_id = time().mt_rand(100,999);//将订单编号存到数据库
        //print_r($order_id);die;
        $total = 0;
        foreach($array as $v){
            $total+=$v['total'];
        }
        
        if(IS_POST){
            //print_r($_POST);die;
             $buyDatas=array();//定义一个空数组存放订单信息
             $buyDatas['user_info']=json_encode($_POST);//将用户地址信息转换为字符串存到数据库
             $buyDatas['product_info'] = json_encode($array);//将购物车中的商品订单信息转化为字符串存到数据库表中
             $buyDatas['order_id'] =$order_id;//将订单编号存到数据库
             $buyDatas['total'] = $total;//将总金额存到数据库
             $buyDatas['member_id']=$_SESSION['vip_name'];//添加会员名到数据库
             $buyDatas['time']=date('Y-m-d H:i:s',time());//下单时间添加到数据库
             $buyDatas['status']=1;//将发货状态存到数据库
             //print_r($buyDatas);die;
             $res = M('order')->add($buyDatas);//将所有信息添加到表中
             
             if($res>0){//如果受影响的行数大于0，就跳转到支付页     
                $id = M('order')->getLastInsID();//获取最新添加的订单的id值
                //print_r($id);die;
                $_SESSION['lastId']=$id;
                $this->redirect("Order/buy_pay");             
             }                         
        }
        
        $this->assign('order_id',$order_id);//将订单号模板输出
        $this->assign('total', $total);//将总价模板输出
        $this->assign('info',$array);//将产品信息模板输出
        $this->display();
    }  
    
    //产品详情->确认订单->支付
    public function buy_pay(){
        unset($_COOKIE["cart"]);
        $id=$_SESSION['lastId'];
        $data=M('order')->find($id);//通过id查找最新一条订单信息
        //print_r($data);die;
        $array = json_decode($data['product_info'],true);//
        $userArr=json_decode($data['user_info'],true);
        $orderTotal = 0 ;
        foreach($array as $v){
            $orderTotal +=$v['total'];
        }
        $data['orderTotal'] = $orderTotal;
        //print_r($array);die;
        $this->assign('userArr',$userArr);
        $this->assign('list',$array);
        $this->assign('data',$data);
        //print_r($id);die;
        
        $this->display();
        
    }
    
    
}//class的结束符