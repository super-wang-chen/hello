<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>支付</title>
		<link rel="stylesheet" type="text/css" href="/tp/Application/Home/Home/Common/css/base.css"/>
		<link rel="stylesheet" type="text/css" href="/tp/Application/Home/Home/Common/css/pay.css"/>
		<script src="/tp/Application/Home/Home/Common/js/jquery-1.12.4.min.js"></script>
		<script src="/tp/Application/Home/Home/Common/js/pay.js"></script>
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
							<a href="shop_cart.html"><img src="/tp/Application/Home/Home/Common/img/shop/img2.png"/></a>
							<p><a href="shop_cart.html">查看购物车</a></p>
						</li>
						<li>
							<a href="confirm_order.html"><img src="/tp/Application/Home/Home/Common/img/shop/img2.png"/></a>
							<p><a href="confirm_order.html">填写订单</a></p>
						</li>
						<li>
							<a href="javascript:;"><img src="/tp/Application/Home/Home/Common/img/shop/img1.png"/></a>
							<p><a href="javascript:;">付款</a></p>
						</li>
					</ul>
				</div>
				<div class="fl">
					<ul>
					    <li><b style="font-size:16px">订单编号：</b><span><?php echo ($data["order_id"]); ?></span></li>
					    <?php if(is_array($list)): foreach($list as $key=>$v): ?><li>
							<a href="pro_details.html"><img style="width:101px;height:109px" src="<?php echo ($v["pro_img"]); ?>"/></a>
							<p class="name"><a href="pro_details.html"><?php echo ($v["pro_name"]); ?></a></p>
							<p class="price">¥<?php echo ($v["shop_price"]); ?></p><p class="num">x<?php echo ($v["num"]); ?></p>
						</li><?php endforeach; endif; ?>
					</ul>
					<p><span><?php echo ($userArr["name"]); ?></span><span><?php echo ($userArr["address"]); ?></span><span><?php echo ($userArr["phone"]); ?></span><a href="/tp/index.php/Order/index">修改地址</a></p>
				</div>
				<div class="fr">
					<h3>支付方式</h3>
					<ul>
						<li class="on"><a href="javascript:;"><img src="/tp/Application/Home/Home/Common/img/pay/pay1.png"/>中国工商银行</a></li>
						<li><a href="javascript:;"><img src="/tp/Application/Home/Home/Common/img/pay/pay2.png"/>中国工商银行</a></li>
						<li><a href="javascript:;">在线支付</a></li>
						<li><a href="javascript:;">更多支付</a></li>
					</ul>
					<form action="">
						<input type="text" placeholder="请输入银行卡号/其他支付方式"/>
						<a href="###">确定</a>
					</form>
				</div>
<!-- 				<div class="pay">
					<h4>订单支付成功</h4>
					<h5>应付金额：<span>￥<?php echo ($data["orderTotal"]); ?></span></h5>
				</div> -->
				<div class="bottom">
					<p>总金额：<span>¥<?php echo ($data["orderTotal"]); ?></span></p>
					<a  id="nowpay" href="<?php echo U('User/myorder');?>">立即支付</a>
				</div>
			</div>
		</div>
		<div class="footer">
			<p>版权手有 &copy GSDGSHS怀素堂花草茶 HDIGFDGDGD UHF  ICU备12028918号</p>
		</div>
	</body>
</html>
<script>
$(function(){
	$("#nowpay").click(function(){
		//alert(111);
		alert('支付成功！')
		 
	})
			
	
})

</script>