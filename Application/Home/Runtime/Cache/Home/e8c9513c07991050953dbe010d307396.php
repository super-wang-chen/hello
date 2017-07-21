<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>账号中心</title>
		<link rel="stylesheet" type="text/css" href="/tp/Application/Home/Home/Common/css/base.css"/>
		<link rel="stylesheet" type="text/css" href="/tp/Application/Home/Home/Common/css/user.css"/>
		<script src="/tp/Application/Home/Home/Common/js/jquery-1.12.4.min.js"></script>
		<script src="/tp/Application/Home/Home/Common/js/user.js"></script>
	</head>
	<body>
		<div class="header">
			<div class="mg">
				<div class="logo fl">
					<a href="/tp/index.php/Index/index">
						<img src="/tp/Application/Home/Home/Common/img/common/logo.png" alt="" />
					</a>
				</div>
<!-- 				<div class="search fl">
					<form action="">
						<input type="text" placeholder="请输入关键词"/>
						<a href="#"><img src="/tp/Application/Home/Home/Common/img/common/search.png"/></a>
					</form>
				</div> -->
				<div class="shopcar fr">
					<a href="/tp/index.php/Cart/index">购物车<img src="/tp/Application/Home/Home/Common/img/common/car.png" alt="" /></a>
				</div>
				
					<?php if($_SESSION['vip_name'] == ''): ?><div class="login fr">				
					    <a href="/tp/index.php/Login/login">登陆</a>/<a href="/tp/index.php/Login/register">注册</a>
					</div>					
				    <?php else: ?>				
					<div class="login fr">				
					    <a href="/tp/index.php/Login/login">欢迎您，<span style="color:red;"><?php echo ($_SESSION['vip_name']); ?></span>!</a><a href="<?php echo U('Login/LoginOut');?>">&nbsp&nbsp退出</a>
					</div><?php endif; ?>
				
			</div>
			<div class="nav">
				<div class="mg">
					<ul>
									
						<li><a href="/tp/index.php/Index/index">首页</a></li>
						<li><a href="/tp/index.php/Brand/index">品牌介绍</a></li>
						<li><a href="/tp/index.php/News/index">新闻中心</a></li>
						<li><a href="/tp/index.php/Product/index">产品中心</a></li>
						<li><a href="/tp/index.php/Contact/index">联系我们</a></li>
						<li><a href="/tp/index.php/User/index">会员中心</a></li>
					
					</ul>
				</div>
			</div>
		</div>
	    
	    
	    
		<div class="content order">
			<div class="mg">
				<div class="sidebar">
					<ul>
						<li><a href="/tp/index.php/User/data">个人资料</a></li>
						<li class="on"><a href="/tp/index.php/User/index">账号中心</a></li>
						<li><a href="/tp/index.php/Cart/index">购物车</a></li>							
						<li><a href="/tp/index.php/User/myorder">我的订单</a></li>
						<li><a href="/tp/index.php/Login/register">会员注册</a></li>
					</ul>
				</div>
				<div class="main">
					<div class="top">
						<img src="/tp/Application/Home/Home/Common/img/user/img1.jpg" alt="" />
						<ul>
							<li>昵称&nbsp;:&nbsp;<span><?php echo ($info["vip_name"]); ?></span></li>
							<li>账号安全&nbsp;:&nbsp;<img src="/tp/Application/Home/Home/Common/img/user/img2.png"/></li>
							<li>账号&nbsp;:&nbsp;<span><?php echo ($info["vip_name"]); ?></span></li>
							<li>上次登录时间&nbsp;:&nbsp;<span><?php echo ($vip_time); ?></span></li>
							<li>会员等级&nbsp;:&nbsp;<img src="/tp/Application/Home/Home/Common/img/user/img1.png"/></li>
							<li>账号余额&nbsp;:&nbsp;<span>1000.00</span></li>
						</ul>
					</div>
					 <div class="center">

					</div>
					<div class="bottom">
						<h3>推送信息</h3>
						<div class="prolist">
							<a href="javascript:;" class="left"><img src="/tp/Application/Home/Home/Common/img/user/left.png"/></a>
							<a href="javascript:;" class="right"><img src="/tp/Application/Home/Home/Common/img/user/right.png"/></a>
							<div>
								<ul>
								<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img style="width:150px;height:80px;" src="<?php echo ($vo["pro_img"]); ?>" alt="" /><div><a href="/tp/index.php/Product/pro_details/id/<?php echo ($vo["id"]); ?>">了解更多</a></div></li><?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
				<!-- footer部分开始 -->
		<div class="footer">
			<p>版权手有 © GSDGSHS怀素堂花草茶 HDIGFDGDGD UHF  ICU备12028918号</p>
		</div>
		<!-- footer部分结束 -->
	</body>
</html>