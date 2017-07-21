<?php
namespace Home\Controller;
use Think\Controller;
class ContactController extends CommonController {
    public function index(){
        $this->banner();
        $list=M('contact')->select();
        //print_r($list);die;
        if(IS_POST){ 
           $_POST['time']=date('Y-m-d H:i:s',time());//获取登录时间          
           $message=M('message')->add($_POST);
           if($message){
              $this->redirect('Contact/index');
           }
            
        }
        $this->assign('list',$list);
        $this->view();
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
     * 
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
    
    
    
}//class的结束符，不要动！！！