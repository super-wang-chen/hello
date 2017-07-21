<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/tp2/Application/Home/Home/Common/css/index.css"/>
        <title>首页</title>
		<!-- content部分开始 -->
		<div class="content">
			<div class="product">
				<div class="title">
					<h3>产品首推</h3>
					<h4>怀素堂花草茶</h3>
				</div>
				<div class="pro">
					<ul>
					   <?php if(is_array($banner_pro)): $i = 0; $__LIST__ = $banner_pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/tp2/index.php/Product/pro_details/id/<?php echo ($vo["id"]); ?>"><img src="<?php echo ($vo["pro_img"]); ?>"/></a><div><h3><a href="/tp2/index.php/Product/pro_details/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["pro_name"]); ?></a></h3><p><?php echo (msubstr($vo["description"],0,20,'utf-8',false)); ?></p></div></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<a href="javascript:;" class="left"><</a>
					<a href="javascript:;" class="right">></a>
				</div>
				<a href="/tp2/index.php/Product/index" class="buy">点击抢购</a>
			</div>
			<div class="contact">			        
				<img src="/tp2/Application/Home/Home/Common/img/index/pro4.jpg"/>
				<img src="/tp2/Application/Home/Home/Common/img/index/peo1.png" alt="" />
				<div class="mg">
					<h3><?php echo ($indexData["title"]); ?></h3>
					<p><?php echo (msubstr($indexData["content"],0,100,'utf-8',false)); ?></p>
					<a href="/tp2/index.php/Contact/index">在线咨询</a>
				</div>
			</div>
			<div class="prolist">
				<div class="title">
					<h3>茶品系列</h3>
					<h4>怀素堂花草茶</h3>
					<img src="/tp2/Application/Home/Home/Common/img/index/bg1.png" class="bg"/>
				</div>
				<div class="mg">
					<ul>
					 <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
							<div>
							   
								<p><a href="/tp2/index.php/Product/pro_details/id/<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></a></p>
								
							<a href="/tp2/index.php/Product/pro_details/id/<?php echo ($v["id"]); ?>"><img src="<?php echo ($v["pro_img"]); ?>"/></a>
							</div>
							<a href="/tp2/index.php/Product/pro_details/id/<?php echo ($v["id"]); ?>" class="click">点击进入</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>

					</ul>
				</div>
			</div>
			<div class="brand">
				<div class="title">
					<h3>品牌介绍</h3>
					<h4>怀素堂花草茶</h3>
				</div>
				<ul>
				
				    <?php if(is_array($brandArr)): $i = 0; $__LIST__ = $brandArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><a href="/tp2/index.php/Brand/index/id/<?php echo ($val["id"]); ?>"><img src="<?php echo ($val["image"]); ?>"/></a>
						<div>
							<h3><a href="/tp2/index.php/Brand/index/id/<?php echo ($val["id"]); ?>"></a></h3>
							<p><?php echo (msubstr($val["content"],0,100,'utf-8',false)); ?></p>
							<a href="/tp2/index.php/Brand/index/id/<?php echo ($val["id"]); ?>">了解更多</a>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>
			</div>	
		</div>
		<!-- content部分结束 -->