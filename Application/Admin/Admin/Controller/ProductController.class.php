<?php
/*
 * 后台产品模块
 */
namespace Admin\Controller;
use Think\Controller;
//use Admin\Model\ProductModel;
class ProductController extends CommonController {
    //产品列表    
    public function index(){
        if(!$this->checkLevel()){
            echo '<script>alert("对不起！您没有权限！");history.go(-1)</script>';
        }
        
        $info=D('Product')->getList(); 
        //print_r($info);die;
        $this->assign('list',$info['list']);
        $this->assign('page',$info['page']);       
        $this->view();        
    
    }
    
    //产品添加
    public function add(){        
        if(!$this->checkLevel()){
            echo '<script>alert("对不起！您没有权限！");history.go(-1)</script>';
        }
       
        $_POST['pro_time']=time();
        $list=$this->cate();//获取所有有分类
        //print_r($list);die;
        $this->assign('list',$list);//将所有分类模板输出
        if(IS_POST){
            //print_r($_POST);die;
            $result=D('Product')->addpro($_POST);
            if(!$result){
                $this->redirect('Product/index');                
            }else{
                $this->error('添加失败！');
            }
            
        }
             
        $this->view();
    }
    
  
    
    //产品修改
    public function update(){   
        $id=$_GET['id'];//通过GET获取当前id        
        $pro=M('product')->find($id);//通过id获取当前的一条产品信息           
        $info=D('Product')->imgInfo($id);//获取产品的信息 
        //print_r($info);die;
        $arr=$info['img'];////$arr为完整图片信息，包括路径，$info为模型层获取的返回值
		//print_r($arr);die;
        if(IS_POST){
            $_POST['id']=$id;            
            $result=D('Product')->updatePro($_POST);//修改产品信息            
            if(!$result){
                $this->error('修改失败！');
            }else{
                $this->redirect('Product/index');
            }        
        } 
        $list=$this->cate();
        //print_r($list);die;
        foreach($list as $v){
              if($v['pid']==1){
                $cateArr[]=$v;
            }
        }
        //print_r( $cateArr);die;
        $this->assign('cateArr',$cateArr);
        $this->assign('list',$list);
        $this->assign('pro',$pro);//将产品信息模板输出
        $this->assign('arr',$arr); //将图片模板输出       
        $this->view();
           
    }
    
    
    
    //产品图片修改
    public function delImg(){
        if(IS_AJAX){            
            $src = I('src');//获取ajax传递过来的图片的路径        
            $id = I('id');//获取ajax传递过来的 id值 
            $info = M('Product')->find($id);//根据视图层传递过来的id，在数据中获取产品的详细信息              
            $str = strrchr($src,'/');//截取下划线之后 包括'/'及后面的图片名字  
            //echo $str;die;
            $img = substr($str,1);//去掉'/'获取原图片的名字                 
            $info['pro_img'] = str_replace($img,'', $info['pro_img']);//把原图片的名字在数据库中替换成空
            $info['pro_img']=join("|",array_filter(explode("|",$info['pro_img'])));
            $res = M('Product')->save($info);//把新的图片信息进行修改
            //echo M('Product')->getLastSql();exit;
            //获取图片的相对路径（删除图片时只能用相对路径进行删除，不能用绝对路径）
            $path = str_replace('.', 'Uploads', $info['img_path']);
            //如果数据库执行操作成功，就进行删除图片
            //print_r($path);die;
            if($res){
                //删除图片文件夹中的原图
                unlink($path.$img);
                //删除图片文件夹的缩略图
                unlink($path.'thumb_'.$img);
                //给予删除成功提示
                $this->ajaxReturn(1);
            }else{
                //给予删除失败提示
                $this->ajaxReturn(0);
            }
        }
    }

    
    
    
    //产品删除 
    public function delete(){        
        $id=I('id');      
        $info=M('product')->where(array('id'=>$id))->find();               
        $imgP=D('Product')->getPath($info['img_path']);//调用getPath方法
        $imgP=str_replace(__ROOT__.'/','', $imgP);//把绝对路转换为相对路径     
        $newImg=D('Product')->getAllpic($info['pro_img'],$imgP);//调用多张图片   
        //dump($newImg);die;           
        foreach($newImg as $v){//删除多张原图片路径            
            unlink($v);            
        } 
       
        foreach($newImg as $v){//删除多张缩略图片路径
            $name = str_replace($imgP,'thumb_', $v);            
            unlink($imgP.$name);
        } 
        
        $pro=M('product')->where(array('id'=>$id))->delete();//删除产品信息        
        if($pro){        
            $this->redirect('Product/index');           
        }else{
            $this->error('删除失败！');
        }                      
    }
    
 
    public function getList(){
        $count = $this->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数
        $page->lastSuffix=false;
        $Page -> setConfig('prev','&laquo; 上一页');
        $Page -> setConfig('next','下一页 &raquo;');
        $Page -> setConfig('first','&laquo; First');//首页
        $Page -> setConfig('last','Last &raquo;');//末页
        $show = $Page->show();// 分页显示输出
        dump($show);die;
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list =$this->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        //dump($list);die;
        $info['page'] = $show;
        $info['list'] = $list;
        return $info;
    }
    

}//这是class的结束符，不要动哦！