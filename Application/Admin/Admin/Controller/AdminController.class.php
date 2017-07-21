<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends CommonController{
    public function index(){
        if(!$this->checkLevel()){
            echo '<script>alert("对不起！您没有权限！");history.go(-1)</script>';
        }
        $list =D('AdminView')->order('id DESC')->select();
        //print_r($list);die;
        $this->assign('list',$list);     
        $this->view();
    }
    
    public function add(){

        if(!$this->checkLevel()){
            echo '<script>alert("对不起！您没有权限！");history.go(-1)</script>';
        }
        
        $info=M('level')->select();//获取权限表所有信息        
        $this->assign('info',$info);
        if(IS_POST){
          //print_r($_POST);die;
           $_POST[password]=md5($_POST[password]);//密码加密
           unset($_POST['repass']);//去除多余字段          
           $addAdmin=M('admin')->add($_POST);
           if($addAdmin){
             $this->redirect('Admin/index');        
           }
        }
        $this->view();
    }
    
    //管理员的修改
    public function update(){
        $id=$_GET['id'];        
        $list=M('admin')->find($id);//获取当前信息        
        $info=M('level')->select();//获取权限组               
        if(IS_POST){
            //print_r($_POST);die;
            $_POST['id']=$id;
            $_POST['password']=MD5($_POST['password']);          
            unset($_POST['repass']);
            //dump($_POST);die;
            $update=M('admin')->save($_POST);
            if($update!==false){
                $this->redirect('Admin/index');
            }
        }
        $this->assign('list',$list);
        $this->assign('info',$info);
        $this->view();
        
    }
    
    public function delete(){
        $id=$_GET['id'];
        //print_r($id);die;
        $deAdmin=M('admin')->where(array('id'=>$id))->delete();
        if($deAdmin){
            $this->redirect('Admin/index');
            
        }
    }
    
    public function adminCheck(){
        $username=I('get.username');  
        //print_r($username);die;
        //$id=I('get.id');
        $result=M('admin')->where(array('username'=>$username))->find();
        if($result){
            echo "false";
        }else{
            echo "true";
        }
        
    }
}