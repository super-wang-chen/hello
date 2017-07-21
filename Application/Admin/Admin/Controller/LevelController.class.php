<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\ProductModel;
class LevelController extends CommonController{
    //权限列表页
    public function index(){
        if(!$this->checkLevel()){
            echo '<script>alert("对不起！您没有权限！");history.go(-1)</script>';
        }
        $info=D('Level')->getList();
        //print_r($info);die;
        $this->assign('list', $info['list']);        
        $this->assign('page',$info['page']);
        $this->view();
    }
    
    //权限添加
    public function add(){
        if(!$this->checkLevel()){
            echo '<script>alert("对不起！您没有权限！");history.go(-1)</script>';
        }
        
        if(IS_POST){
            //print_r($_POST);die;
            //将权限id组合成字符串
            $_POST['level_id']=implode(',',$_POST['level_id']);
            //将post提交的数据添加到数据库的表里
            $level=M('level')->add($_POST);
            if($level){
                $this->redirect('Level/index');
                
            }
        }
        $this->view();
        
    }
    
   
    //权限修改
    public function update(){
        $id=$_GET['id'];//通过GET获取当前id       
        $info=M('level')->find($id);//通过当前id查找当前信息       
        //数据库里权限id以字符串的形式保存，这里将将权限id变成数组
        $info['level_id']=explode(',',$info['level_id']);        
        if(IS_POST){
            $_POST['id']=$id;
            //如果是POST提交的数据里面的权限id是数组的形式，这里修改之前要将权限ID转换为字符串才能保存到数据库         
            $_POST['level_id']=implode(',',$_POST['level_id']);
            //将修改的信息进行保存
            $level=M('level')->save($_POST);
            if($level){
                $this->redirect('Level/index');
            
            }
                                   
        }
         
        $this->assign('info',$info);
        $this->view();
    }
    
    //权限删除
    public function delete(){
        //获取当前权限组所属id值
        $id=I('id');
        //查找当前信息并删除
        $level = M('level')->where(array('id'=>$id))->delete();
        if(level){
            $this->redirect('Level/index');
        }
        
    }
    
}