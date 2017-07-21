<?php if (!defined('THINK_PATH')) exit();?>			
		
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>购物车</title>
		<link rel="stylesheet" type="text/css" href="/tp/Application/Home/Home/Common/css/base.css"/>
		<link rel="stylesheet" type="text/css" href="/tp/Application/Home/Home/Common/css/shop_cart.css"/>
		<script src="/tp/Application/Home/Home/Common/js/jquery-1.12.4.min.js"></script>
		<script src="/tp/Application/Home/Home/Common/js/shopcar.js"></script>
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
						<li class="active"><a href="/tp/index.php/User/index">会员中心</a></li>
					</ul>
				</div>
			</div>
		
		
		
		<div class="content">
			<div class="ng">
				<div class="top">
					<ul>
						<li>
							<a href="javascript:;"><img src="/tp/Application/Home/Home/Common/img/shop/img2.png"/></a>
							<p><a href="javascript:;">查看购物车</a></p>
						</li>
						<li>
							<a href="javascript:;"><img src="/tp/Application/Home/Home/Common/img/shop/img2.png"/></a>
							<p><a href="javascript:;">填写订单</a></p>
						</li>
						<li>
							<a href="javascript:;"><img src="/tp/Application/Home/Home/Common/img/shop/img2.png"/></a>
							<p><a href="javascript:;">付款</a></p>
						</li>
					</ul>
				</div>

 				<div class="bottom">
					<p>
						<span><a  class="del" href="javascript:;"><img src="/tp/Application/Home/Home/Common/img/collection/del.png"/></a></span>
						<span>商品</span>
						<span>名称</span>						
						<span>单价</span>
						<span>数量</span>
						<span>共计</span>
						
					</p>
					<ul rel = "<?php echo U('Cart/delCart');?>">
					    <?php if(is_array($cart)): $i = 0; $__LIST__ = $cart;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="Cart" rel="<?php echo ($vo["id"]); ?>" >
							<div class="btn"><label><input class="select" type="checkbox"></label></div>
							<div class="img"><a href="/tp/index.php/Product/pro_details/id/<?php echo ($vo["id"]); ?>"><img style="width:101px;height:109px;" src="<?php echo ($vo["pro_img"]); ?>"/></a></div>
							<div class="name"><p><a href="/tp/index.php/Product/pro_details/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["pro_name"]); ?></a></p></div>							
							<div class="price"><p><span>￥</span><span class="pNumber"><?php echo ($vo["shop_price"]); ?></span></p></div>
							<div class="input"><a href="javascript:;" class="reducebtn"><img src="/tp/Application/Home/Home/Common/img/order/left.png"/></a><input type="text" value="<?php echo ($vo["num"]); ?>" class="numbtn" name="num" rel="/tp/index.php/Cart/updateCart/id/<?php echo ($key); ?>"><a href="javascript:;" class="addbtn"><img src="/tp/Application/Home/Home/Common/img/order/right.png"/></a></div>
						    <div class="zhe"><p><span>￥</span><span class="sub"><?php echo ($vo["total"]); ?></span></p></div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<p class="allcheck">
						<span><input type="checkbox" id="allcheck" class="allcheckbtn" ></span><label for="allcheck">全选</label>
						<span class="tolpri" >总金额：<i>￥</i><i class="sum" id="Total">0</i></span>
						
					</p>
					<form method="post" id="orderForm" action="<?php echo U('order/orderAdd');?>">
						<input name="total" type="hidden" id="orderTotal"/>
						<input name="pro_id" type="hidden" id="infoId"/>
					</form>
				</div>
				<a href="/tp/index.php/Product/index" class="fr">继续购买>></a>
				<a href="javascript:;" class="fr" id="orderNow">立即结算</a>			
			</div>
		</div>
		<!-- footer部分开始 -->
		<div class="footer">
			<p>版权手有 © GSDGSHS怀素堂花草茶 HDIGFDGDGD UHF  ICU备12028918号</p>
		</div>
		<!-- footer部分结束 -->
	</body>
</html>		
		
		
		
		<!-- 立即结算 -->
		<script>
		$(function(){
			//alert(1111)
			var length = $('.Cart').length;
			var Total = 0;
			for(var i =0 ;i<length;i++){
				if($('.select').eq(i).is(':checked')){
					Total+= Number($('.sub').eq(i).html());
				}
			}
			$('#Total').html(Total);
			
			$('#orderNow').click(function(){
				var total = $('#Total').html();
				var str ="";
				for(var i =0 ;i<length;i++){
					if($('.select').eq(i).is(':checked')){
						str+=$('.Cart').eq(i).attr('rel')+','; 
					}
				}
				
				$('#orderTotal').val(total);
				$('#infoId').val(str);
				$('#orderForm').submit();
			})
		})
		
		</script>