<?php if (!defined('THINK_PATH')) exit();?>	<link rel="stylesheet" type="text/css" href="/tp2/Application/Home/Home/Common/css/product.css"/>				
		<title>产品中心</title>
		<div class="content">
			<h2><span>产品中心</span></h2>
			<div class="mg">
				<div class="slibebar fl">
					<ul class="current">
					    <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($_GET['id'] == $vo['id']): ?><li class="aaa"><a href="/tp2/index.php/Product/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?><span></span></a></li>
						<?php else: ?>
						<li><a href="/tp2/index.php/Product/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?><span></span></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
						
					</ul>
				</div>
				<div class="main">
					<p>当前位置：<a href="/tp2/index.php/Index/index">首页</a>><a href="/tp2/index.php/Product/index">产品中心</a>><a href="###" class="on">产品中心</a></p>
					<ul class="prolist">
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<a href="/tp2/index.php/Product/pro_details/id/<?php echo ($vo["id"]); ?>"><img src="<?php echo ($vo["pro_img"]); ?>" alt="" /></a>
							<div class="text">
								<h4><a href="/tp2/index.php/Product/pro_details/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["pro_name"]); ?></a></h4>
								<p><?php echo (msubstr($vo["description"],0,100,'utf-8',true)); ?></p>
								<a href="/tp2/index.php/Product/pro_details/id/<?php echo ($vo["id"]); ?>">了解更多</a>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>						
					</ul>	
									
					<div class="page">
					 <?php echo ($page); ?>																		  					    
					</div>
				</div>
			</div>			
		</div>