<?php
namespace Home\Controller;
use Think\Controller;
class BrandController extends CommonController {
    public function index(){
        header("content-type:text/html;charset=utf-8");
        $this->banner();
        if(IS_GET){
            $id=I('get.id');
            //print_r($id);die;
            $brand=M('brand')->where(array('id'=>$id))->find();
            $brand1=M('brand')->where(array('id'=>2))->find();
            //print_r($brand1);die;  
            $this->assign('brand1',$brand1);
            $this->assign('brand',$brand);
            
            $this->view();
        }
       
    }
}