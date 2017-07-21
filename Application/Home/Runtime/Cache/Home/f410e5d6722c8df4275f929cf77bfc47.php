<?php if (!defined('THINK_PATH')) exit();?>    
       <link rel="stylesheet" type="text/css" href="/tp2/Application/Home/Home/Common/css/about.css"/>
        <script src="/tp2/Application/Home/Home/Common/js/jquery-1.12.4.min.js"></script>
        <script src="/tp2/Application/Home/Home/Common/js/about.js"></script>
        <title>品牌中心</title>
		<div class="content">
			<h2><span>品牌介绍</span></h2>
			<div class="mg">
			
				<p>当前位置：<a href="/tp2/index.php/Index/index">首页</a>><a href="/tp2/index.php/Brand/index">品牌介绍</a>><a href="###" class="on">品牌介绍</a></p>
				<div class="text">
				 
				    <?php if($_GET['id'] != ''): ?><h3><?php echo ($brand["title"]); ?></h3>
                    <?php echo ($brand["content"]); ?>
                    <?php else: ?>
                    
                    <h3><?php echo ($brand1["title"]); ?></h3>
                    <?php echo ($brand1["content"]); endif; ?>

				                          
                                   
				</div>
				<div class="img">
					<img src="/tp2/Application/Home/Home/Common/img/about/img1.png"/>
					<img src="/tp2/Application/Home/Home/Common/img/about/img2.png" alt="" />
					<img src="/tp2/Application/Home/Home/Common/img/about/img3.png"/>
				</div>

			</div>
		</div>