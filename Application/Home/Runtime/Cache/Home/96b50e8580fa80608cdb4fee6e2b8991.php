<?php if (!defined('THINK_PATH')) exit();?>	   
	    <link rel="stylesheet" type="text/css" href="/tp2/Application/Home/Home/Common/css/pro_details.css"/>		
		<!-- 放大图片jq -->
		<script src="/tp2/Application/Home/Home/Common/js/product.js"></script>
		<title>产品详情</title>
		<div class="content">
			<div class="mg">
				<div class="slibebar fl">
					<ul>
					<?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/tp2/index.php/Product/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?><span></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<p class="address">当前位置：<a href="/tp2/index.php/Index/index">首页</a>><a href="/tp2/index.php/Product/index">产品中心</a>><a href="javascript:;" class="on">产品详情</a></p>
				<div class="main">
					<div class="left fl">
						<img src="<?php echo ($info["pro_img"]); ?>" alt="" />
						<a href="javascript:;" class="fl"><img src="/tp2/Application/Home/Home/Common/img/order/left.png"/></a>
						<a href="javascript:;" class="fr"><img src="/tp2/Application/Home/Home/Common/img/order/right.png"/></a>
						<div class="prolist">
							<ul> 
							    <?php if(is_array($arr)): foreach($arr as $key=>$val): ?><li class="on"><a href="javascript:;"><img src="<?php echo ($val); ?>"/></a></li><?php endforeach; endif; ?>
							</ul>
						</div>
					</div>
					<div class="right">
					  <form method="post" action="/tp2/index.php/Cart/addCart" id="cartForm">
						<p>【品牌】:<span>杯素堂</span></p>
						<p>【名称】:<span><?php echo ($info["pro_name"]); ?></span></p>
						<p>【价格】:<span>￥<?php echo ($info["shop_price"]); ?></span></p>					
						<p>【规格】:<span>90g</span></p>
						<p>【数量】:<a href="javascript:;" class="reduceNum">[-]</a><input class="numBtn" type="text" size="4" maxlength="8" name="num" id="num" value="1"/><a href="javascript:;" class="addNum">[+]</a></p>
						<p>【保质期】:<span>24个月</span></p>
						<p>【配料】:<span>原料来源于植物的花、根、茎、叶、果的精华。</span></p>
						<p>【特殊功能】:<span>养生、养颜、美容</span></p>
						<a href="javascript:viod(0)" class="buy" id="buyNow" rel="/tp2/index.php/Order/buy_now">立即购买</a>
						<a href="javascript:viod(0)" class="add" id="addCart">加入购物车</a>
						<input type="hidden" name="proId" value="<?php echo ($info["id"]); ?>"/>
					  </form>
						<p class="share">
							分享:
							<a href="###"><img src="/tp2/Application/Home/Home/Common/img/product/img1.png"/></a>
							<a href="###"><img src="/tp2/Application/Home/Home/Common/img/product/img2.png"/></a>
							<a href="###"><img src="/tp2/Application/Home/Home/Common/img/product/img3.png"/></a>
						</p>
					</div>
				</div>
			</div>
		</div>
		
<script>
$(function(){
	$("#addCart").click(function(){
		//alert(123);
		$("#cartForm").submit();
		
		
	})
	
	$("#buyNow").click(function(){
		//alert(123);
		var rel=$(this).attr('rel');
		//alert(rel);
		$("#cartForm").attr('action',rel);//改变表单的action属性
		$("#cartForm").submit();
		
	})

	
	//数量框的正则	
	$(".numBtn").keyup(function(){
	   var num=$(this).val();
	   //alert(num);
	   var reg = /^[1-9]+[0-9]*$/;   
	   if(reg.text(num)){
	     num=Number(num);
	   }else{
	     num=1
		 $(this).val(num);
	   }	   
	 })
	 

	//增加数量按钮的js事件
	$('.addNum').click(function(){
	  //alert(123);
	  var num=$(this).prev().val();
	  //alert(num);
	  num++;
	  if(num>99)num=99;
	  $(this).prev().val(num);	  
	})
	
	//减少数量按钮的点击事件
	$('.reduceNum').click(function(){
	  //alert(123);
	  var num=$(this).next().val();
	  //alert(num);
	  num--;
	  if(num<1){num=1;return;}
	  $(this).next().val(num);	  
	})
	

		

})
</script>