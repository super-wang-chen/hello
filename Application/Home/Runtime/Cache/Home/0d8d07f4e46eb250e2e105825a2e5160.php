<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>我的订单</title>
		<link rel="stylesheet" type="text/css" href="/tp/Application/Home/Home/Common/css/base.css"/>
		<link rel="stylesheet" type="text/css" href="/tp/Application/Home/Home/Common/css/order.css"/>
		<script src="/tp/Application/Home/Home/Common/js/jquery-1.12.4.min.js"></script>
		<script src="/tp/Application/Home/Home/Common/js/base.js"></script>
		<script src="/tp/Application/Home/Home/Common/js/collection.js"></script>
	</head>
	<body>
		<div class="header">
			<div class="mg">
				<div class="logo fl">
					<a href="index.html">
						<img src="/tp/Application/Home/Home/Common/img/common/logo.png" alt="" />
					</a>
				</div>

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
					<h3>>&nbsp;全部订单</h3>
					<!-- <img src="/tp/Application/Home/Home/Common/img/collection/del.png"/> -->
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p>订单编号：<?php echo ($vo["order_id"]); ?></p>
										
					<ul>
					  	 <?php if(is_array($vo["product_info"])): $i = 0; $__LIST__ = $vo["product_info"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><li>
							<div class="img">
								<a href="/tp/index.php/Product/pro_details/id/<?php echo ($vo1["id"]); ?>"><img style="width:101px; height:109px;" src="<?php echo ($vo1["pro_img"]); ?>" alt="" /></a>
							</div>
							<div class="name">
								<p><a href="/tp/index.php/Product/pro_details/id/<?php echo ($vo1["id"]); ?>"><?php echo ($vo1["pro_name"]); ?></a></p>
							</div>
							<div class="date">
								<p><?php echo ($vo["time"]); ?></p>
								
							</div>
							<div class="price">
								<p>¥<?php echo ($vo1["total"]); ?></p>
							</div>
							<div class="pay">
								<p>已支付</p>
							</div>
							<div class="come">
								<a href="/tp/index.php/User/myorder_details/id/<?php echo ($vo["id"]); ?>">进入查看</a>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul><?php endforeach; endif; else: echo "" ;endif; ?>
					<div class="page"><?php echo ($page); ?></div>
					
					
				</div>
			</div>
		</div>
	    <div class="footer">
			<p>版权手有 © GSDGSHS怀素堂花草茶 HDIGFDGDGD UHF  ICU备12028918号</p>
		</div>
	</body>
</html>