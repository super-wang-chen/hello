<?php
namespace Admin\Controller;
use Think\Controller;
class SingleController extends CommonController {
/*************************图片管理*******************************/
    //图片列表
    public function images(){
        $info=M('banner')->select();//获取所有图片信息         
        foreach ($info as &$v){
            $newPath=$v['image'];
            $v['image']="/Uploads/".$newPath;
            //$newPath=substr($v['image'], 1);//未上传服务器的路径（勿删）
            //$v['image']=__ROOT__."/Uploads".$newPath;//未上传服务器的路径（勿删）
            
        }
        
        $this->assign('info',$info);
        $this->view();
    }
    
    //图片修改
    public function update(){
        $id=$_GET['id'];
        $info=M('banner')->find($id);//获取当前图片及信息
        if(IS_POST){
            //print_r($_FILES);die;
            $upload = $this->Upload();
            $_POST['image']=$upload[image]['savepath'].$upload[image]['savename'];
            //echo $_POST['image'];die;
            $_POST['id']=$id;
            $true=M('banner')->save($_POST);
            if($true){
                $this->redirect('Single/images');
            }
            
        }
        
        //print_r($info);die;
        $this->assign('info',$info);
        $this->view();
    }
    
/************************品牌管理*******************************/
    //品牌列表
    public function brand(){
        $brandInfo=M('brand')->select();        
        foreach ($brandInfo as &$v){
            $newPath=$v['image'];
            $v['image']="/Uploads/".$newPath;
            //$newPath=substr($v['image'], 1);//未上传服务器的路径（勿删）
            //$v['image']=__ROOT__."/Uploads".$newPath;//未上传服务器的路径（勿删）
                      
        }
        //print_r($brandInfo);die;
        $this->assign('brandInfo',$brandInfo);
        $this->view();
        
    }
    

        
    //品牌修改
    public function upbrand(){
        $id=I('get.id');//获取当前id
        $brandInfo=M('brand')->find($id);//查找当前这一条信息
        if(IS_POST){
            $upload = $this->Upload();
            $_POST['image']=$upload[image]['savepath'].$upload[image]['savename'];
            $_POST['id']=$id;
            $true=M('brand')->save($_POST);
            if($true){
                $this->redirect('Single/brand');
            }
        }
        $this->assign('brand',$brandInfo);
        $this->view();
    } 
    
/************************留言管理*******************************/ 
    //留言列表
    public function message(){
        $message=M('message')->select();
        //print_r($message);die;
        $this->assign('message',$message);
        $this->view();
    }
    
    //查看留言   
    public function viewMessage(){
        $id=I('id');
        $details=M('message')->find($id);
        //print_r($details);die;
        $this->assign('details',$details);
        $this->view();
        
       }

   //删除留言
   public function delMessage(){
       $id=I('id');
       $del=M('message')->where(array('id'=>$id))->delete();
       if($del){
           $this->redirect('Single/message');
           
       }
   }
        
   /************************联系方式*******************************/
   public function contact(){             
       if(IS_POST){          
           $_POST['id']=1;
           //print_r($_POST);die;
           $list=M('contact')->save($_POST);
           M('contact')->getLastSql();
       }
       $info=M('contact')->select();         
       $this->assign('info',$info);
       $this->view();
   }
   
   /************************视频列表*******************************/
     //视频列表
     public function video(){
         $info=M('video')->select();                 
         $this->assign('info',$info);
         $this->view();
     }
        
     //视频修改  
     public function updateVideo(){
         $id=I('get.id');
         $videoInfo=M('video')->find($id);
         $img=str_replace('./', 'Uploads/',  $videoInfo['url']);
         
         if(IS_POST){
             if(!empty($_FILES)){
                 $_POST['id']=$id;
                 $_POST['time']=date('Y-m-d H:i:s',time());                 
                 $upload = $this->Upload_video();
                 //print_r($upload);die;
                 $_POST['url']=$upload;
                 $result=M('video')->save($_POST);
                 //echo M('video')->getLastSql();die;                 
                 if($result){
                     unlink($img);//删除文件夹中的原视频
                     $this->redirect('Single/video');
                 }                 
             }
                                             
         }
                  
         $this->assign('videoInfo',$videoInfo);
         $this->view();
     }     
        
        
        
        
        
        
 
    
}//这是class的结束符