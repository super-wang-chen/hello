<?php
/**
 * 后台新闻中心
 */
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\ProductModel;
class NewsController extends CommonController{
    //新闻列表    
    public function index(){
        if(!$this->checkLevel()){
            echo '<script>alert("对不起！您没有权限！");history.go(-1)</script>';
        }
        
        
        $info=D('News')->getList();        
        $this->assign('list',$info['list']);
        $this->assign('page',$info['page']);
        $this->view();        
    
    }
    
    //添加新闻
    public function add(){ 
        if(!$this->checkLevel()){
            echo '<script>alert("对不起！您没有权限！");history.go(-1)</script>';
        }
        
        if(!$this->checkLevel()){
            echo '<script>alert("对不起！您没有权限！");history.go(-1)</script>';
        }
        
        $_POST['time']=time();
        $list=$this->cate();
        $this->assign('list',$list);        
        if(IS_POST){                        
            $result=D('News')->addNews($_POST);
            if(!$result){
                $this->redirect('News/index');
            }else{
                $this->error('添加失败！');
            }
            
        }  
        $this->view();
    }
    
    //修改新闻
    public function update(){
        $id=$_GET['id'];//通过GET获取当前id        
        $news=M('news')->find($id);//通过id获取当前的一条产品信息  
        
        $info=D('News')->imgInfo($id);//获取产品的信息         
        $arr=$info['image'];////$arr为完整图片信息，包括路径，$info为模型层获取的返回值
        //print_r($news);die;
        if(IS_POST){
            $_POST['id']=$id;            
            $result=D('News')->updateNews($_POST);//修改产品信息            
            if(!$result){
                $this->error('修改失败！');
            }else{
                $this->redirect('News/index');
            }        
        } 
        $list=$this->cate();
        //print_r($list);die;
        foreach($list as $v){
            if($v['pid']==2){
            $cateArr[]=$v;
            }
        }
        //print_r($cateArr);die;
        $this->assign('cateArr',$cateArr);
        $this->assign('list',$list);
        $this->assign('news',$news);//将产品信息模板输出
        $this->assign('arr',$arr); //将图片模板输出       
        $this->view();
           
    }
      
    //修改产品
    public function delImg(){
        if(IS_AJAX){
            $src = I('src');//获取ajax传递过来的图片的路径
            $id = I('id');//获取ajax传递过来的
            $info = M('news')->find($id);//根据视图层传递过来的id，在数据中获取产品的详细信息
            $str = strrchr($src,'/');//截取下划线之后 包括'/'及后面的图片名字
            //echo $str;die;
            $img = substr($str,1);//去掉'/'获取原图片的名字
            $info['image'] = str_replace($img,'', $info['image']);//把原图片的名字在数据库中替换成空
            $info['image']=join("|",array_filter(explode("|",$info['image'])));
            $res = M('News')->save($info);//把新的图片信息进行修改
            //echo M('Product')->getLastSql();exit;
            //获取图片的相对路径（删除图片时只能用相对路径进行删除，不能用绝对路径）
            $path = str_replace('.', 'Uploads', $info['img_path']);
            //如果数据库执行操作成功，就进行删除图片
    
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
    
    
    //删除新闻 
    public function delete(){
        $id=I('id');
        $pro=M('News')->where(array('id'=>$id))->delete();       
        if($pro){
            $this->redirect('News/index');           
        }else{
            $this->error('删除失败！');
        }                      
    }
    
//这是class的结束符，不要动哦！