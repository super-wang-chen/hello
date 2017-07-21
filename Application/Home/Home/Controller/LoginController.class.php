<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends CommonController {
    public function login(){
        
        if(IS_POST){
          $vip_name=I('vip_name');          
          $password=md5(I('password'));
          $vip_time= date('Y-m-d H:i:s',time());//获取vip登录时间
          //print_r( $_POST);die;
          $result=M('vip')->where(array('vip_name'=>$vip_name,'password'=>$password))->find();
          if($result){
              $_SESSION['id']= $result['id'];
              $_SESSION['vip_name']=$vip_name;//将用户名存到session
              $_SESSION['vip_time']=$vip_time;//将登录时间存到session中
              $_SESSION['vip_id']=$result['id'];
             
              //创建cookie
              if(isset($_POST['remember'])){//如果用户点击记住我，则创建cookie
                  setcookie('vip_name',$vip_name,time()+3600*24*7,'/');
                  setcookie('password',$_POST['password'],time()+3600*24*7,'/');
              }else{
                  setcookie('vip_name','',0);
                  setcookie('password','',0);
              }
              $this->redirect('User/index');
          }                    
        }
        $this->display();
    }
    
    //会员注册
    public function register(){
       
        if(IS_POST){            
            $_POST['password']=MD5($_POST['password']);
            unset($_POST['repass']);
            //$num=rand(1,9).time();//随机生成一个账号
            //$_POST['num']=$num;
            $info=M('vip')->add($_POST);
            if($info){                
                $this->redirect('Login/login');
            }
         }
                                            
        $this->display();
    }
    
    //会员重名验证
    public function nameCheck(){ 
        $vipname=I('get.vip_name');        
        $result=M('vip')->where(array('vip_name'=>$vipname))->find();        
        if($result){
            echo "false";
        }else{
            echo "true";
        }
    }
    
    
    /**
     * 验证码模板输出
     */
    public function VerifyCode(){
        ob_clean();
        $Verify = new \Think\Verify();
        $Verify->fontSize=14;
        $Verify->length=4;
        $Verify->useNoise=false;
        $Verify->imageW=0;
        $Verify->imageH=0;
        $Verify->bg=array(222, 206, 189);
        $Verify->fontttf = '2.ttf';
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
     * AJAX验证   
     */
    public function checkCode(){
        if(IS_AJAX){
            $code=I('code');
            //print_r($code);die;
            $len=strlen($code);//获取输入验证码的长度
            if($this->check_verify($code,'')){
                $this->ajaxReturn(1);//如果验证码正确 返回1
            }else{
                $this->ajaxReturn(2);//如果验证码错误 返回2
            }
             
        }
    
    }
    
    public function loginout(){
      unset($_SESSION['vip_name']);
      $this->redirect("Login/login");
    }
    
    
    
    
    
    
    
}//class的结束符