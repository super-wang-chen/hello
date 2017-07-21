<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends CommonController {
    //待发货订单
    public function index(){
        if(!$this->checkLevel()){
            echo '<script>alert("对不起！您没有权限！");history.go(-1)</script>';
        }
        $info=D('Order')->getList(1);
        //print_r($info['list']);die;
        $this->assign('list',$info['list']);
        $this->assign('page',$info['page']);
        $this->view();
    }
    
    //已发货订单
    public function sended(){
        if(!$this->checkLevel()){
            echo '<script>alert("对不起！您没有权限！");history.go(-1)</script>';
        }
        
        $info=D('Order')->getList(0);
        //print_r($info['list']);die;
        $this->assign('list',$info['list']);
        $this->assign('page',$info['page']);
        $this->view();
       
    }
    
    //查看订单
    public function viewOrder(){
        if(IS_GET){
            $id=I('get.id');
            $info=M('order')->find($id);//订单详情
            $proInfo=json_decode($info['product_info'],true);//将产品信息转化为数组
            $addrInfo=json_decode($info['user_info'],true);//将用户地址转化为数组                                   
        }
        //print_r($proInfo);die;
        $this->assign('info',$info);
        $this->assign('proInfo',$proInfo);//将产品信息模板输出
        $this->assign('addrInfo',$addrInfo);//将用户地址模板输出
        $this->view();
    }
    
    //发货
    public function sendOrder(){
        if(IS_GET){
            $id=I('get.id');            
            $info=M('order')->find($id);
            $info['status']=0;
            $upOrder=M('order')->save($info);
            if($upOrder){
                echo 1;            
            }else{
                echo 2;
            }
       
        }
    }
    
    //删除订单
    public function delete(){
        if(IS_GET){
            $id=I('get.id');
            $del=M('order')->where(array('id'=>$id))->delete();
            //$del= $info->delete();
            if($del){
                $this->redirect('Order/index');
                
            }
            
        }
        
    }
}