<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {
    //账号中心
    public function index(){
        
        if(empty($_SESSION['vip_name'])){
            $this->redirect('Login/login');
        }else{
                                               
              $id=$_SESSION['id'];//获取当前的id值
              $vip_time=$_SESSION['vip_time'];//获取登录时间             
              $info=M('vip')->find($id);//找到当前用户信息     
              //print_r( $info);die;
              
              
              //推送信息
              $list=M('product')->order('rand()')->limit(5)->select();
              //print_r($list);die;
              foreach( $list as &$v){
                  if(!empty($v['pro_cate'])){//3.如果产品中的分类不为空，则通过分类id获取，分类的所有信息
                      $cate=M('category')->where(array('id'=>$v['pro_cate']))->select();
                      foreach($cate as  &$val){//4.获取分类信息的值
                          $name=$val['name'];
                      }
                  }
                  $v['pro_cate']=$name;//5将分类的名称赋给产品信息的pro_cate
                  $v['pro_img'] = D('Product')->getPath($v['img_path']).D('Product')->getPic($v['pro_img']);
              }
              
              
              $this->assign('list',$list);
              $this->assign('vip_time',$vip_time);
              $this->assign('info',$info);
            
              $this->display();
          }  
       
    }
    
    //个人资料
    public function data(){
        $id=$_SESSION['id'];//获取当前的id值
        $info=M('vip')->find($id);//找到当前用户信息
        $this->assign('info',$info);
        $this->display();
    }
    
    //我的定订单
    public function myOrder(){
        $info=D('Order')->getList();
        //print_r( $info);die;        
        $proInfo=$info['list'];//所有订单信息
      
        
        foreach($proInfo as $ke=>$va){//将每一个订单里面的商品信息转化为数组并循环输出
            $proInfo[$ke]["product_info"]=json_decode($va['product_info'],true);
            //$proInfo[$ke]["product_info"]['pro_img']=substr($proInfo[$ke]["product_info"]['pro_img'],3);//截取，去掉/tp
           
        }
              
        //print_r($proInfo);die;
        $this->assign('list',$proInfo);
        $this->assign('page',$info['page']);               
        $this->display();
    }
    
   public function myorder_details(){
       if(IS_GET){
           $id=I('get.id');
           $info=M('order')->find($id);//订单详情
           $proInfo=json_decode($info['product_info'],true);//将产品信息转化为数组
           $addrInfo=json_decode($info['user_info'],true);//将用户地址转化为数组
       }
       

     
       $this->assign('info',$info);
       $this->assign('proInfo',$proInfo);//将产品信息模板输出
       $this->assign('addrInfo',$addrInfo);//将用户地址模板输出
       $this->display();
   }
    
    
    

}