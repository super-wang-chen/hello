<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>订单</title>
		<link rel="stylesheet" type="text/css" href="/tp/Application/Home/Home/Common/css/base.css"/>
		<link rel="stylesheet" type="text/css" href="/tp/Application/Home/Home/Common/css/confirm_order.css"/>					
		<script src="/tp/Application/Home/Home/Common/js/jquery-1.12.4.min.js"></script>
	    <script src="/tp/Application/Home/Home/Common/js/confirm_order.js"></script>	
	
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
	
<div class="content">
			<div class="ng">
				<div class="top">
					<ul>
						<li>
							<a href="/tp/index.php/Cart/index"><img src="/tp/Application/Home/Home/Common/img/shop/img2.png"/></a>
							<p><a href="/tp/index.php/Cart/index">查看购物车</a></p>
						</li>
						<li>
							<a href="javascript:;"><img src="/tp/Application/Home/Home/Common/img/shop/img1.png"/></a>
							<p><a href="javascript:;">填写订单</a></p>
						</li>
						<li>
							<a href="javascript:;"><img src="/tp/Application/Home/Home/Common/img/shop/img2.png"/></a>
							<p><a href="javascript:;">付款</a></p>
						</li>
					</ul>
				</div>
				<ul>
					<!-- <li><b style="font-size:16px">订单编号：</b><span><?php echo ($order_id); ?></span></li> -->
					<?php if(is_array($list)): foreach($list as $key=>$v): ?><li>
						<a href="/tp/index.php/Product/pro_details" class="img">
							<img style="width:101px;height:109px;" src="<?php echo ($v[pro_img]); ?>">
						</a>
						<p class="name"><a href="/tp/index.php/Product/pro_details"><?php echo ($v["pro_name"]); ?></a></p>						
						<p class="zhe">￥<?php echo ($v["shop_price"]); ?></p>
						<p class="zhe">×<?php echo ($v["num"]); ?></p>
						<p class="price">¥<?php echo ($v["total"]); ?></p>
						<!--<p class="input"><a href="javascript:;" class="reducebtn"><img src="/tp/Application/Home/Home/Common/img/order/left.png"/></a><input type="text" value="1" class="numbtn" maxlength="2"><a href="javascript:;" class="addbtn"><img src="/tp/Application/Home/Home/Common/img/order/right.png"/></a></p>-->
					</li><?php endforeach; endif; ?>
				</ul>
				<form method="post" action="">
					<p>姓名&nbsp;:&nbsp;<input type="text" name="name"/></p>
					<p>地址&nbsp;:&nbsp;<input type="text" name="address"/></p>
					<p>电话&nbsp;:&nbsp;<input type="text" name="phone"/></p>
					<input class="pay" type="submit" value="立即结算"/>
				</form>	
				
				<p class="pay" style="padding-top:10px">支付方式：<a href="###" class="on">货到付款</a><a href="###">公司转账</a><a href="###">在线支付</a><a href="###">银行转账</a></p>				
				<span class="tolpri">总金额：<i>￥<?php echo ($orderTotal); ?></i></span>
			
			</div>
		</div>
		
		    <div class="footer">
			<p>版权手有 &copy GSDGSHS怀素堂花草茶 HDIGFDGDGD UHF  ICU备12028918号</p>
		</div>
	</body>
</html>