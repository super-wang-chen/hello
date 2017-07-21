<?php if (!defined('THINK_PATH')) exit();?>	
		<link rel="stylesheet" type="text/css" href="/tp2/Application/Home/Home/Common/css/news.css"/>
		<title>新闻中心</title>
		<div class="content">
			<h2><span>新闻资讯</span></h2>
			<div class="mg">
				<p>当前位置：<a href="/tp2/index.php/Index/index">首页</a>><a href="/tp2/index.php/News/index">新闻中心><a href="###" class="on">新闻资讯</a></p>
				<ul>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<div class="fl">
							<img style="width:200px;height:200px" src="<?php echo ($vo["image"]); ?>" alt="" />
							<div>
								<a href="/tp2/index.php/News/news_details/id/<?php echo ($vo["id"]); ?>">了解详情</a>
							</div>
						</div>
						<div class="fr">
							<h3><a href="/tp2/index.php/News/news_details/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?><span><?php echo (date("Y-m-d",$vo["time"])); ?></span></a></h3>
							<p><?php echo (msubstr($vo["content"],0,100,'utf-8',true)); ?></p>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>	
				</ul>
				<ol>
				 <?php echo ($page); ?>
				</ol>				                                   				
			</div>
		</div>