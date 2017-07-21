<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends CommonController {
    public function index(){
        $this->banner();
        $info=D('News')->getList();
        //print_r($info);die;
        $this->assign('list',$info['list']);
        $this->assign('page',$info['page']);        
        $this->view();
    }
    
    public function news_details(){
        $this->banner();
        $id=$_GET['id'];//通过url获取id                               
        $info=D('News')->imgInfo($id);//获取当前一条新闻详情 
        //print_r($info);die;

        if(!empty($_GET['id'])){
            $prev=M('news')->where('id<'.$id)->order('id desc')->limit(1)->select();//获取上一条新闻详情
            //print_r( $prev[0]['id']);die;
            $prevInfo=D('News')->imgInfo($prev[0]['id']);//获取上一条新闻详情包含图片相对路径的信息
            //print_r($prevInfo);die;
            if(!$prevInfo){
                $prevInfo['title']='这已经是第一篇了！！！';
            }
            
            $next=M('news')->where('id>'.$id)->find();//获取下一条新闻详情
            //print_r($next);die;
            if(!$next){
                $next['title']='这已经是最后一篇了！！！';
            }
            
        }
        
        $video=M('video')->where(array('id'=>1))->find();
        //$img=str_replace('./','/tp/Uploads/',$video['url']);//没有上传到服务器上的版本（勿删）
        $img=str_replace('./','/Uploads/',$video['url']);
        //print_r($img);die;
        $this->assign('img',$img);
        $this->assign('info',$info);
        $this->assign('prev',$prev[0]);
        $this->assign('next',$next);
        
        
        $this->view();
    }
}