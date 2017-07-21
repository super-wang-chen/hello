<?php if (!defined('THINK_PATH')) exit();?>	<head>
		<meta charset="UTF-8">
		<meta name="keywords" content="百度地图,百度地图API，百度地图自定义工具，百度地图所见即所得工具" />
        <meta name="description" content="百度地图API自定义地图，帮助用户在可视化操作下生成百度地图" />
		<title>联系我们</title>
		<link rel="stylesheet" type="text/css" href="/tp2/Application/Home/Home/Common/css/contact_us.css"/>		
		<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
	    <script type="text/javascript" src="/tp2/Application/Home/Home/Common/js/jquery.validate.js"></script>
		<script type="text/javascript" src="/tp2/Application/Home/Home/Common/js/messageCheck.js"></script>
		<script type="text/javascript" src="/tp2/Application/Home/Home/Common/js/messages_zh.js"></script>	
	</head>
		
		
		
		<link rel="stylesheet" type="text/css" href="/tp2/Application/Home/Home/Common/css/contact_us.css"/>
		<div class="content">
			<h2><span>联系我们</span></h2>
			<div class="mg">
				<p>当前位置：<a href="/tp2/index.php/Index/index">首页</a>><a href="/tp2/index.php/Contact/index">联系我们</a>><a href="###" class="on">联系我们</a></p>
				<div class="ov">
					<div class="fl">
						<p>公司&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo ($list[0]["company"]); ?></p>
						<p>电话&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo ($list[0]["tel"]); ?></p>
						<p>邮箱&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo ($list[0]["email"]); ?></p>
						<p>地址&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo ($list[0]["address"]); ?></p>
						<p>网址&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo ($list[0]["website"]); ?></p>
						<div style="width:476px;height:326px;border:#ccc solid 1px;" id="dituContent" class="map">
						</div>
					</div>
					<div class="fr">
						<h3>在线留言</h3>
						<form  id="messForm" action="" method="post" rel="/tp2/index.php/Contact/checkCode" >
							<p>姓名&nbsp;&nbsp;:&nbsp;&nbsp;
							   <input class="name" name="username" type="text"/><span></span>
							   </p>
							
							<p>地址&nbsp;&nbsp;:&nbsp;&nbsp;
							   <input class="address" name="address" type="text"/><span></span>
							</p>
							<p>电话&nbsp;&nbsp;:&nbsp;&nbsp;
							   <input class="phone"  name="phone" type="text"/><span></span>
							</p>
							<p>邮箱&nbsp;&nbsp;:&nbsp;&nbsp;
							   <input class="email" name="e_mail" type="email"/><span></span>
							</p>
							<p>留言框
							  <textarea  name="content"></textarea>
							</p>						
							<p>							
							<input id="checkCode" type="text" name="code" style="float:left;"/><img src="/tp2/index.php/Contact/VerifyCode" style="float:left;margin-right:5px" id="codeA"/> 							
 							<input id="button" type="button" value="提交" style="float:left;"/>
 							</p>
 							
 							<div id="error" style="font-size:12px;color:red;width:100px;height:30px"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	<script src="/tp2/Application/Home/Home/Common/js/map.js"></script>	
	<style>
.error_line{line-height:10px;font-size:12px;color:red;margin-left: 5px;}
		</style>