<?php  
namespace Home\Model;
use Think\Model;
class OrderModel extends CommonModel{
    /*
     * 分类分页
     */
     //所有订单
      public function getList2(){    //
        $count      = M('Order')->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数
        //$Page->setConfig('first','shouye');
        $Page->setConfig('prev','<');
        $Page->setConfig('next','>');
         
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $list =  M('Order')->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        //dump($list);die;
        $info['page']=$show;
        $info['list']=$list;
        //dump($info);die;
        return $info;
      } 
      
      /**
       * 获取列表，并实现分页
       * @return 		$info			返回列表及分页数据
       * @author
       */
      public function getList($id){
          $count =M('order')->count();// 查询满足要求的总记录数
          $Page  = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
          $page->lastSuffix=false;
          $Page -> setConfig('prev',' 上一页');
          $Page -> setConfig('next','下一页 ');
          $Page -> setConfig('first','&laquo; First');//首页
          $Page -> setConfig('last','Last &raquo;');//末页
          $show = $Page->show();// 分页显示输出
          //dump($show);die;
          // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
          $list =M('order')->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
          //dump($list);die;
          $info['page'] = $show;
          $info['list'] = $list;
          return $info;
      }
  }//class的结束符