<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends CommonController {
    //前台产品中心
    public function index(){
        $this->banner();//轮播图
        //获取所有产品分类
        $cate=M('category')->where(array('pid'=>1))->select();
        //将所有产品分类在前台产品中心的侧边菜单栏模板输出
        $this->assign('cate',$cate);
        
        if(IS_GET){
            $id=I('get.id'); 
            if($id!=''){
                $info=D('Product')->getList2($id);//如果id不为空，则输出相应分类的信息
            }else{
                $info=D('Product')->getList();//如果为空则输出所有信息
            }
        }
        
        //print_r($info);die;
        $this->assign('list',$info['list']);
        $this->assign('page',$info['page']);        
        $this->view();
    }
    
    //前台产品详情
    public function pro_details(){
        $this->banner();
        $cate=M('category')->where(array('pid'=>1))->select();
        $this->assign('cate',$cate);
        if(IS_GET){
            $id=I('get.id');            
        }
        $info=D('Product')->imgInfo($id);//获取产品信息
        //print_r($info);die;
        $arr=D('Product')->imagesInfo($id);//获取多张产品图片
        //print_r($arr);die;
    
        $this->assign('arr',$arr);
        $this->assign('info',$info);
        $this->view();
    }
    

    
}//这是class的结束符！