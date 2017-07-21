<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    /**
     * 用户登录
     */
    public function index(){
        if(IS_POST){
            //1.接收用户输入的数据
            $username=I('username');
            $password=MD5(I('password'));            
            //2.将用户信息与数据库信息对比
            $adm=M('admin');
            $result=$adm->where(array('username'=>$username,'pawssword'=>$password))->find();
            if($result){
                $id=$result['level'];//获取当前用户的权限id（即level表里的id值）;                
                $r=M('level')->find($id);//通过当前用户的权限id查找权限信息
                $user=explode(',',$r['level_id']);//将数据库level表里的权限id打散转换成数组                
                
                //创建session                
                $_SESSION['level_id']=$user;//将权限id存放到session中
                $_SESSION['adminName']=$username;//将用户名存到session中
                //print_r($_SESSION);die;
                
                //创建cookie
                if(isset($_POST['remember'])){//如果用户点击记住我，则创建cookie
                    setcookie('username',$username,time()+3600*24*7,'/');
                    setcookie('password',$_POST['password'],time()+3600*24*7,'/');
                }else{
                    setcookie('username','',0);
                    setcookie('password','',0);
                }
                
                $this->redirect('Index/main');
            }  
        }
        
        $this->display();
    }
    
    /**
     * 进入首页
     */
    public function main(){
        $this->header();
        $this->view();
    }
    
    /**
     * AJAX验证码验证登录
     */
    public function  check(){
      if(IS_AJAX){        
        //1.接受用户输入的数据
        $username=I('username');
        $password=MD5(I('password'));
        $code = I('code');
            //2.将用户信息与数据库信息对比
            $adm=M('admin');
            $result=$adm->where(array('username'=>$username,'pawssword'=>$password))->find();
            if(!$result){
             $this->ajaxReturn(1);//如果没有影响的行数，则用户名和密码输入错误  返回1
            }else{//如果用户名和密码正确，再对验证码进行判断     
                if($this->check_verify($code,'')){
                    $this->ajaxReturn(2);//如果验证码正确 返回2
                }else{
                    $this->ajaxReturn(3);//如果验证码错误 返回3
                }
            }
      }
    }
    
    //生成验证码
    public function VerifyCode(){
        ob_clean();
        $Verify = new \Think\Verify();
        $Verify->fontSize=14;
        $Verify->length=4;
        $Verify->useNoise=false;
        $Verify->imageW=0;
        $Verify->imageH=0;
        $Verify->entry();
        
    }
    
  

    /**
     * 验证码的验证         
     */
    function check_verify($code, $id = ''){    
        $verify = new \Think\Verify();    
        return $verify->check($code, $id);
    }
    
   /**
    * 退出登录
    */
    public function loginOut(){
        session(null);//销毁session
        $this->redirect('Index/index');
    }
    
    /**
     * 视图封装
     */
    public function view($body=null){
        $this->display('Public:header');
        $this->display($body);
        $this->display('Public:footer');
    }
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
    
    
}//这是class的结束符