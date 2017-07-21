<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    
    public function checklog(){
        if(empty($_SESSION['vip_id'])){
            echo '<script>alert("对不起！请先登陆！");history.go(-1)</script>';
        }
    }
    
    public function view($body=null){
        $this->display('Public:header');
        $this->display($body);
        $this->display('Public:footer');
    }
    
    public function banner(){        
        $infoMain=M('banner')->where(array('bid'=>1))->select();       
        $banner=array();
        foreach($infoMain as &$val){
            $bannerImg=$val['image'];                      
            $bannerImg="/Uploads/".$bannerImg;
            //$bannerImg=substr($val['image'],2);//没有上传服务器的路径（勿删）
            //$bannerImg="Uploads/".$bannerImg;////没有上传服务器的路径（勿删）            
            $banner[]=$bannerImg;
        }         
        $this->assign('banner',$banner);        
    }
    
/*     public function header(){
        $menu=C('NAV_MENU');//获取配置名为ADMIN_MENU的参数
        dump($menu);die;
        $b =CONTROLLER_NAME;//定义 $b=控制器名
        //print_r($b);die;
        $a =CONTROLLER_NAME.'/'.ACTION_NAME;//定义$a=控制器名字/方法名
        //print_r($a);die;
        $this->assign('controller',$b);
        $this->assign('url',$a);
        $this->assign('menu',$menu);
        
    } */
    
}//class的结束符，不要动！