<?php
namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset="utf-8"');
class CommonController extends Controller {    
     public function _initialize(){//框架定义的__construct初始化函数
         $b =CONTROLLER_NAME;
         $a =CONTROLLER_NAME.'/'.ACTION_NAME;//定义$a=控制器名字/方法名
         
         if($b='Index'&&$a!='Index/index'){
             $this->checkLogin();
         }
         
         $this->header();
         
    } 
    
   
    
    /**
     * 验证登录
    */
    public function checkLogin(){
        if(empty($_SESSION['adminName'])){
            
            $this->redirect('Index/index');
        }
    }  
    
    /**
     * 获取配置信息
     */
    public function getMenu(){
        $_SESSION['menu_arr']=array();//定义一个session空数组
        $menu=C('ADMIN_MENU');//获取配置文件
        
        foreach ($menu as $key => $value) {
            foreach ($value['child_menu'] as $k => $v) {
                $url=$v['url'];                
                $_SESSION['menu_arr'][$url]=$v['id'];
            }
    
        }
        
        return $_SESSION['menu_arr'];
    }
    
   /**
    * 权限封装
    * 通过用户访问的URL地址，获取到该地址对应的id值
    * 1.获取用户所拥有的权限
    * 2.当用户进入一个页面时进行判断，用户要进入的页面的URL的id是否在其所拥有的的权限id之内，有->进入 没有->阻止
    */
    public function checkLevel(){
        $a=false;
        if(!empty($_SESSION['level_id'])){
            if(empty($_SESSION['menu_arr'])){
                $this->getMenu();
            }
            $url=CONTROLLER_NAME.'/'.ACTION_NAME;
            if(!empty($_SESSION['menu_arr'][$url])){
                $id = $_SESSION['menu_arr'][$url];
                //dump($id);die;
                if(in_array($id,$_SESSION['level_id'])){
                    $a = true;
                }
            }
        }
        return $a;
    }
    
    
    /**
     * 视图封装
    **/
    public function view($body=null){
        //首尾分离视图封装
        $this->display('Public:header');
        $this->display($body);
        $this->display('Public:footer');        
    }
    
    
   /**
    * 头部侧边菜单栏
   **/
    public function header(){
        $menu=C('ADMIN_MENU');//获取配置名为ADMIN_MENU的参数   
        //dump($menu);die;
        $b =CONTROLLER_NAME;//定义 $a=控制器名       
        //print_r($b);die;
        $a =CONTROLLER_NAME.'/'.ACTION_NAME;//定义$a=控制器名字/方法名
        //print_r($a);die;
        $this->assign('controller',$b);
        $this->assign('url',$a);
        $this->assign('menu',$menu);       
    
    }
    
    
   /**
    * 分类
   **/
    public function cate(){
        $category = new \Org\Util\Category('Category',array('id','pid','name','fullname'));
        $list=$category->getList();
        return $list;
    }
    
    //*********************上传图片*****************************
    public function Upload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录    // 上传文件
        $upload->saveName  = array('uniqid','');
        $info   =   $upload->upload();
        return $info;
    }
    
    /**
     * 视频上传
     * return array $info 上传视频信息
     */
    public function Upload_video(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     31457280000 ;// 设置附件上传大小
        $upload->allowExts =     array('ogg', 'mp4', 'wmv');// 设置附件上传类型
        $upload->savePath  =      './Public/Uploads/Video'; // 设置附件上传目录    // 上传文件
        $upload->saveName  = array('uniqid','');
        $info   =   $upload->upload();
        $list= $info['video']['savepath'].$info['video']['savename'];
        //print_r($list);die;
        return $list;
    }
    

}
