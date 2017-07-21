<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登录</title>
		<link rel="stylesheet" type="text/css" href="/tp2/Application/Home/Home/Common/css/base.css"/>
		<link rel="stylesheet" type="text/css" href="/tp2/Application/Home/Home/Common/css/login.css"/>
		<script src="/tp2/Application/Home/Home/Common/js/jquery-1.12.4.min.js"></script>
		<script src="/tp2/Application/Home/Home/Common/js/login.js"></script>
	</head>
	<body>
		<div class="header">
			<div class="mg">
				<div class="logo fl">
					<a href="/tp2/index.php/Index/index">
						<img src="/tp2/Application/Home/Home/Common/img/common/logo.png" alt="" />
					</a>
				</div>
<!-- 				<div class="search fl">
					<form action="">
						<input type="text" placeholder="请输入关键词"/>
						<a href="#"><img src="/tp2/Application/Home/Home/Common/img/common/search.png"/></a>
					</form>
				</div> -->
				<div class="shopcar fr">
					<a href="/tp2/index.php/Cart/index">购物车<img src="/tp2/Application/Home/Home/Common/img/common/car.png" alt="" /></a>
				</div>
				
				
				<div class="login fr">
					<a href="/tp2/index.php/Login/login">登陆</a>/<a href="/tp2/index.php/Login/register">注册</a>
				</div>
		
				
			</div>
			<div class="nav">
				<div class="mg">
					<ul>
						<li><a href="/tp2/index.php/Index/index">首页</a></li>
						<li><a href="/tp2/index.php/Brand/index">品牌介绍</a></li>
						<li><a href="/tp2/index.php/News/index">新闻中心</a></li>
						<li><a href="/tp2/index.php/Product/index">产品中心</a></li>
						<li><a href="/tp2/index.php/Contact/index">联系我们</a></li>
						<li><a href="/tp2/index.php/User/index">会员中心</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="mg">
				<h2>登录</h2>
				<form action="" method="post">
					<p>用户名&nbsp;：&nbsp;<input name="vip_name" type="text" /></p>
					<p>密码&nbsp;：&nbsp;<input name="password" type="password" /></p>
					<p><input type="checkbox"  name="remember" /><label for="che">记住密码</label><a href="javascript:;">忘记密码?</a><a href="register.html">注册</a></p>
					
					<input type="submit" value="登录"/>
				</form>
			</div>
		</div>
		<div class="footer">
			<p>版权所有 &copy GSDGSHS怀素堂花草茶 HDIGFDGDGD UHF  ICU备12028918号</p>
		</div>
	</body>
</html>