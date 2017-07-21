<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends CommonController {    
  public function index(){
      if(!$this->checkLevel()){
          echo '<script>alert("对不起！您没有权限！");history.go(-1)</script>';
      }
      $data=new \Org\Util\Category('Category',array('id','pid','name','fullname'));
      $list = $data->getList();
      $this->assign("list",$list);
      $this->view();
  }
  
  //添加分类
  public function add(){
      if(!$this->checkLevel()){
          echo '<script>alert("对不起！您没有权限！");history.go(-1)</script>';
      }
      
      $data=new \Org\Util\Category('Category',array('id','pid','name','fullname'));
      $list = $data->getList();
      if(IS_POST){          
          $addCate=M('category')->add($_POST);
          if($addCate){
              $this->redirect('Category/index');
          }
      }
      $this->assign("list",$list);
      $this->view();
  }
  
  //修改分类
  public function update(){
      $data=new \Org\Util\Category('Category',array('id','pid','name','fullname'));
      $list = $data->getList();//获取所有分类
      $id=$_GET['id'];//获取当前选中的
      //dump($id);die;
      $info=M('category')->find($id);//通过当前id查找当前分类信息 
  
      
      if(IS_POST){
          $_POST['id']=$id;
          //dump($_POST);die;
          $updateCate=$data->edit($_POST);
          if($updateCate){
              $this->redirect('Category/index');
          }
      }
          
      $this->assign("info",$info);//将当前的一条分类信息模板输出
      $this->assign("list",$list);//将所有分类模板输出
      $this->view();
      
  
  }
  
  
  //删除分类
  public function delete(){
      $data=new \Org\Util\Category('Category',array('id','pid','name','fullname'));
      $id=$_GET['id'];//获取当前选中的id
      $delete=$data->getIdArr($id);
      //成功：1.不能为0  2.不能为空值
      if($delete){
          $this->redirect('Category/index');
      }
  
  }
}
