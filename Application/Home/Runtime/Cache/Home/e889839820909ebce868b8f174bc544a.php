<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<!-- header部分开始 -->

	<head>
		<meta charset="UTF-8">
		<meta name="keywords" content="百度地图,百度地图API，百度地图自定义工具，百度地图所见即所得工具" />
        <meta name="description" content="百度地图API自定义地图，帮助用户在可视化操作下生成百度地图" />
		
		<link rel="stylesheet" type="text/css" href="/tp2/Application/Home/Home/Common/css/base.css"/>				
	    <script src="/tp2/Application/Home/Home/Common/js/jquery-1.3.2.min.js"></script>		
		
<!-- 		<script src="/tp2/Application/Home/Home/Common/js/jquery-1.12.4.min.js"></script>		
 -->	    <script src="/tp2/Application/Home/Home/Common/js/index.js"></script>
	    
	
	</head>
	<body>
		<div class="header">
			<div class="mg">
				<div class="logo fl">
					<a href="javascript:;">
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
				
				<?php if($_SESSION['vip_name'] == ''): ?><div class="login fr">				
					    <a href="/tp2/index.php/Login/login">登陆</a>/<a href="/tp2/index.php/Login/register">注册</a>
					</div>					
				<?php else: ?>				
					<div class="login fr">				
					    <a href="/tp2/index.php/Login/login">欢迎您，<span style="color:red;"><?php echo ($_SESSION['vip_name']); ?></span>!</a><a href="<?php echo U('Login/LoginOut');?>">&nbsp&nbsp退出</a>
					</div><?php endif; ?>
				
			</div>
			<div class="nav">
				<div class="mg">
					<ul>
						<li><a href="/tp2/index.php/Index/index">首页</a></li>
						<li><a href="/tp2/index.php/Brand/index/id/">品牌介绍</a></li>
						<li><a href="/tp2/index.php/News/index">新闻中心</a></li>
						<li><a href="/tp2/index.php/Product/index">产品中心</a></li>
						<li><a href="/tp2/index.php/Contact/index">联系我们</a></li>
						<li><a href="/tp2/index.php/User/index">会员中心</a></li>
					</ul>
				</div>
			</div>
			<div class="banner">
				<div class="bd">
					<ul>
					    <?php if(is_array($banner)): foreach($banner as $key=>$v): ?><li><a href="javascript:;"><img src="<?php echo ($v); ?>"/></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
				<div class="hd">
					<ul>
						<li class="on"><a href="javascript:;"></a></li>
						<li><a href="javascript:;"></a></li>
						<li><a href="javascript:;"></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- header部分结束 -->