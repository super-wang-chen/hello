<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\ProductModel;
class VipController extends CommonController{
    //会员列表页
    public function index(){
        if(!$this->checkLevel()){
            echo '<script>alert("对不起！您没有权限！");history.go(-1)</script>';
        }
        $info=D('Vip')->getList();
        //print_r($info);die;
        $this->assign('list',$info['list']);
        $this->assign('page',$info['page']);
        $this->view();
    }
    
    //会员删除
    public function delete(){ 
        
        $id=I('id');
        //print_r($id);die;
        $del=M('Vip')->where(array('id'=>$id))->delete();
        if($del){
            $this->redirect('Vip/index');
        }
    }
    
}