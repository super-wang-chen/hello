<?php
namespace Home\Model;
use Think\Model;
class NewsModel extends CommonModel{
    /**
     * 新闻分页
     */   
    public function getList(){
        $count      = $this->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show       = $Page->show();// 分页显示输出
    
        //进行分页数据查询，limit的参数使用page类的属性
        $list = $this->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
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
                $v['image']=$this->getPath($v['img_path']).$arr[0];
            }
        } 
        //print_r($list);exit;
        $info['list']=$list;//将产品的条数放到数组中
        $info['page']=$show;//将分页放到数组中
    
        return $info;
    }
    
    /*
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
    
    /*
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
    
    
    
    /*
     * 获取单条产品详情
     * @param int   $id       URL接收到的产品id
     * @param array $newPath  id对应的单条产品详情对应组
     * @Z,JUN
     */
    public function imgInfo($id){
        $info=$this->where(array('id'=>$id))->find();
        $imgP=$this->getPath($info['img_path']);//调用getPath方法
        $imgN=$this->getPic($info['image']);//调用getPic方法
        $info['image']=$imgP.$imgN;
        return $info;
    }
    
    
}