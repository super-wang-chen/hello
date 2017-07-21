<?php
namespace Admin\Model;
use Think\Model;
class SingleModel extends Model{
    /**
     * 获取列表，并实现分页
     * @return 		$info			返回列表及分页数据
     * @author
     */
    public function getList($data=1){
        $count =$this ->count();// 查询满足要求的总记录数        
        $Page  = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数
        $page->lastSuffix=false;
        $Page -> setConfig('prev','&laquo; 上一页');
        $Page -> setConfig('next','下一页 &raquo;');
        $Page -> setConfig('first','&laquo; First');//首页
        $Page -> setConfig('last','Last &raquo;');//末页
        $show = $Page->show();// 分页显示输出
        dump($show);die;
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list =$this->where($data)->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        //dump($list);die;
        $info['page'] = $show;
        $info['list'] = $list;
        return $info;
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
        //dump($info);die();
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
     * 品牌介绍图片的修改
     * @param  array  $data  post数组
     * @author Z,JUN
     */
    public function updateBrand($data){
        $id=$data['id'];
        if(!empty($_FILES['image']['name'][0])){
            $info=$this->upload();
            //print_r($info);die;
            $resourse = M('brand')->find($id);
            $str = $resourse['image'];
            foreach ($info as $k=>$v){
                if(($k+1)<count($info)){
                    $str .=$v['savename'].'|';  //在多张图片数组里不是最后一张图片加上分隔符，
                }else{
                    $str.=$v['savename'];//是最后一张图片就去掉分隔符
                }
    
                $this->setThumb($v['savepath'],$v['savename']);
            }
            $data['image_path'] = $info[0]['savepath'];
            $data['brand_img']=$str;
    
        }
    
        $result = $this->where(array("id"=>$id))->save($data);
        return $result;
         
    }
    
    /**
     * 获取删除产品图片时相对路径
     */
    public function imgInfo($id){
        $info=$this->where(array('id'=>$id))->find();
        $imgP=$this->getPath($info['image']);//调用getPath方法
        $newImg=$this->getAllpic($info['image'],$imgP);//调用多张图片
         
        $arr = array();//定义一个空数组
        foreach($newImg as $k=>$v){//把图片信息拆分的数组进行遍历
            if(!empty($v)){
                $arr[] = $v;
            }
        }
    
        $info['img']=$arr;//新追加一个info字段名img        
        return $info;
    }
    
    
    
    

    
}//class的结束符