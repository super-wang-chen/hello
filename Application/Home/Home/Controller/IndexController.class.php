<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;
class IndexController extends CommonController {
    public function index(){
        /******主页轮播图******/
        $this->banner();      
                
        /******产品首推轮播图********/
        $infoP=M('product')->order('id DESC')->limit(3)->select();
        //print_r($infoP);die;
        foreach($infoP as &$value1){
            $a=explode('|', $value1['pro_img']);
            $banner_arr = $a[0];
            $newPath1=substr($value1['img_path'],1);
            $value1['pro_img']=__ROOT__."/Uploads".$newPath1.$banner_arr;
            
        }
        
        //print_r($infoP);die;
        $this->assign('banner_pro',$infoP);
        
        
        
        /********茶品系列********/
        $info = D('ProductView')->where(1)->order('id ASC')->limit(3)->select();        
        foreach($info as &$vlue){
             $arr = array();
             //把$v下面的pro_img字符串把其拆分成数组
             $array = explode('|', $vlue['pro_img']);
             //把数组中元素值为空的元素过滤掉并追加到新的数组$arr中
             foreach($array as $val){
                 if(!empty($val)){
                     $arr[]=$val;
                 }
             }
             
             $newPath=substr($vlue['img_path'],1);
             $vlue['pro_img']=__ROOT__."/Uploads".$newPath.$arr[0];
        }
        
             
          //print_r($info);die;
        $this->assign('info',$info); 
        
        /********首页在线咨询 数据********/                
        $indexData=M('brand')->where(array('id'=>1))->find();        
        $this->assign('indexData',$indexData);
                              
        /********首页品牌介绍数据********/
        $brandArr=M('brand')->order('id ASC')->limit('1,3')->select();
        //print_r($brandArr);die;
        foreach($brandArr as $k=>$v){
            //$brandArr[$k]['image']=str_replace('./','/tp/Uploads/',$v['image']);//没有上传服务器的版本（勿删）
            $brandArr[$k]['image']=str_replace('./','/Uploads/',$v['image']);
            $k++;   
        }
        $this->assign('brandArr', $brandArr);  
        
        $this->view();
    }
    

    
    
    
    
    
    
    
}//class的结束符，不要动！