<?php if (!defined('THINK_PATH')) exit();?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=" />
<title>Simpla Admin | Sign In by www.865171.cn</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="/tp2/Application/Admin/Admin/Common/resources/css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="/tp2/Application/Admin/Admin/Common/resources/css/style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="/tp2/Application/Admin/Admin/Common/resources/css/invalid.css" type="text/css" media="screen" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="/tp2/Application/Admin/Admin/Common/resources/scripts/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="/tp2/Application/Admin/Admin/Common/resources/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="/tp2/Application/Admin/Admin/Common/resources/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="/tp2/Application/Admin/Admin/Common/resources/scripts/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="/tp2/Application/Admin/Admin/Common/resources/scripts/login.js"></script>

</head>
<body id="login">
<div id="login-wrapper" class="png_bg">
  <div id="login-top">
    <h1>Simpla Admin</h1>
    <!-- Logo (221px width) -->
    <a href="http://www.865171.cn"><img id="logo" src="/tp2/Application/Admin/Admin/Common/resources/images/logo.png" alt="Simpla Admin logo" /></a></div>
  <!-- End #logn-top -->
  <div id="login-content">
    <form action="" id="loginForm" rel="/tp2/Admin.php/Index/check" method="post">
      <div class="notification information png_bg">
        <div> Just click "Sign In". No password needed. </div>
      </div>
      <p>
        <label>用户名</label>
        <input class="text-input" type="text" name="username" />
      </p>
      <div class="clear"></div>
      <p> 
        <label>密码</label>
        <input class="text-input" type="password" name="password" />
      </p>
      <div class="clear"></div>
      <p>        
        <label style="width:88px">验证码</label>                      
        <input class="text-input" style="width:80px;margin-right:7px;float:left" type="text" name="code" />        
        <img src="/tp2/Admin.php/Index/VerifyCode" style="float:left;" id="codeA"/>   
      </p>
      <div class="clear"></div>
      <p id="remember-password">
        <input type="checkbox" name="remember"/>
        Remember me </p>
      <div class="clear"></div>
      <span id="error" style="color:red"></span>
      <p>
        <input class="button" id="sub" type="button" value="Sign In" />
      </p>
    </form>
  </div>
  <!-- End #login-content -->
</div>
<!-- End #login-wrapper -->
</body>
</html>