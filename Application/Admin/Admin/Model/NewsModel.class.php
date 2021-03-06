<?php
namespace Admin\Model;
use Think\Model;
class NewsModel extends Model{
   /**
    * 添加产品
    * @param array $data post传过来的数组
    */
    public function addNews($data){       
        $info=$this->convertImg($this->upload());//先获取图片上传后的数组            
        $data['img_path'] = $info['savepath'];//将文件路径添加到数组中        
        $data['image'] = $info['savename'];//将文件名添加倒数组中        
        $this->add($data);//将数据存到数据库
    }
    
   /**
    * 图片上传
    * return array $info 上传图片信息
    */
    public function upload(){
      $upload = new \Think\Upload();// 实例化上传类    
      $upload->maxSize = 3145728 ;// 设置附件上传大小    
      $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
      $upload->savePath = './Public/Uploads/'; // 设置附件上传目录    
      // 上传文件    
      $info=$upload->upload(); 
      
      $upload->saveName=array('uniqid','');//处理保存文件名
      return $info;
    }
        
   /**
    * 多图上传（包含单图）
    * @param string $imgArr 多张图片的组合
    */
    public function convertImg($imgArr){
        $imgstr='';//定义一个空字符串
        foreach($imgArr as $k=>$v){//多个图片循环
            if(($k+1)<count($imgArr)){//判断是单张图片还是多张图片
                $imgstr.=$v['savename']."|";//在多张图片数组里不是最后一张图片加上分隔符，
            }else{
                $imgstr.=$v['savename'];//是最后一张图片就去掉分隔符
            }
           
            $info['savepath'] = $v['savepath'];//将图片路径存到数组中                   
            $this->setThumb($v['savepath'],$v['savename']);
        }        
        
        $info['savename']=$imgstr;//将截取之后的图片名放到数组中去 
        //dump($info);die();
        return $info;
    }
    
    
    
    /**
     * 分页
     */
    public function getList($data=1){             
        $count      = $this->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数 
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show       = $Page->show();// 分页显示输出         
        
        //进行分页数据查询，limit的参数使用page类的属性
        $list = D('NewsView')->where($data)->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select(); 
         //print_r($list);exit;
        foreach($list as &$v){
            $arr = array();
            //把$v下面的pro_img字符串把其拆分成数组
            $array = explode('|', $v['image']);
            //把数组中元素值为空的元素过滤掉并追加到新的数组$arr中
            foreach($array as $val){
                if(!empty($val)){
                    $arr[]=$val;
                } 
            }
            //有图片储存的信息就进行拼接，没有的话就不进行拼接，然后对$v['pro_img']重新赋值使用，默认总是显示$arr中第一个元素为封面图片
           if(!empty($v['image'])){
               $v['image']=$this->getPath($v['img_path'])."thumb_".$arr[0];
           }
        }
        //print_r($list);exit;
        $info['list']=$list;//将产品的条数放到数组中
        $info['page']=$show;//将分页放到数组中
        
        return $info;
    }
    
    
    /**
     * 返回单张图片
     * @param string $img     原始图片
     * @param string $newImg  返回的单张产品图片
     * @Z,JUN
    */    
    public function getPic($img){
        $img=explode("|",$img);//把字符串打散为数组
        $newImg=$img[0];//截取第一张图片  
        return $newImg;        
    }
    
    /**
     * 返回多张图片
     * @param string $img     原始图片
     * @param string $newImg  返回的多张产品图片
     * @Z,JUN
    */
    public function getAllpic($img,$path){
        //echo $path;exit;
        $img=explode("|",$img);//把字符串打散为数组
        foreach($img as &$v){
            if(!empty($v)){
                $v =  $path.$v;
            }
        }
        return $img;
    }
    
    /**
     * 处理图片路径
     * @param string $path     原始路径
     * @param string $newPath  处理后的路径
     * @Z,JUN
    */
    public function getPath($path){
        $newPath=substr($path,1);//去掉字符串的第一个点
        $newPath=__ROOT__."/Uploads".$newPath;//将根目录预处理后的路径拼接
        return $newPath;
        
    }
    
    /**
     * 生成缩略图
     * @param string $path   原始路径
     * @param string $pic  原图片
     * @Z,JUN
    */
    public function setThumb($path,$img,$width=50,$height=50){
        $image = new \Think\Image();
        $image->open('Uploads'.substr($path,1).$img);//生成缩略图的路径        
        // 按照原图的比例生成一个最大为150*150的缩略图并保存为
        $path=str_replace('.','Uploads',$path);
        $thumbName=$path."thumb_".$img;
        //dump($thumbName);die;
        //$image->thumb($width,$height,\Think\Image::IMAGE_THUMB_FILLED)->save($thumbName);
        $image->thumb($width,$height)->save($thumbName);
        
    }
    
    /**
     * 新闻的修改
     * @param  array  $data  post数组
     * @author Z,JUN
     */
    public function updateNews($data){
        $id=$data['id'];
        if(!empty($_FILES['image']['name'][0])){            
            $info=$this->upload();
            //print_r($info);die;
            $resourse = M('News')->find($id);
            $str = $resourse['image'];
            foreach ($info as $k=>$v){
               $str .=$v['savename'].'|';                
               $this->setThumb($v['savepath'],$v['savename']);              
            }  
            $data['img_path'] = $info[0]['savepath'];
            $data['image']=$str;
                                              
        }
        
        $result = $this->where(array("id"=>$id))->save($data);
        return $result;
    }
    
    
    /**
     * 获取删除产品图片时相对路径    
     */
    public function delete(){        
        $id=I('id');      
        $info=M('news')->where(array('id'=>$id))->find();               
        $imgP=D('News')->getPath($info['img_path']);//调用getPath方法
        $imgP=str_replace(__ROOT__.'/','', $imgP);//把绝对路转换为相对路径     
        $newImg=D('News')->getAllpic($info['image'],$imgP);//调用多张图片   
        //dump($newImg);           
        foreach($newImg as $v){//删除多张原图片路径            
            unlink($v);            
        } 
       
        foreach($newImg as $v){//删除多张缩略图片路径
            $name = str_replace($imgP,'thumb_', $v);            
            unlink($imgP.$name);
        } 
        
        $pro=M('news')->where(array('id'=>$id))->delete();//删除产品信息        
        if($pro){        
            $this->redirect('News/index');           
        }else{
            $this->error('删除失败！');
        }                      
    }
    
    /**
     * 获取删除产品图片时相对路径
     */
    public function imgInfo($id){
        $info=$this->where(array('id'=>$id))->find();
        $imgP=$this->getPath($info['img_path']);//调用getPath方法
        $newImg=$this->getAllpic($info['image'],$imgP);//调用多张图片
         
        $arr = array();//定义一个空数组
        foreach($newImg as $k=>$v){//把图片信息拆分的数组进行遍历
            if(!empty($v)){
                $arr[] = $v;
            }
        }
        $info['image']=$arr;//新追加一个info字段名img
    
    
        return $info;
    }

    
}//这是class的结束符，不要动哦！

