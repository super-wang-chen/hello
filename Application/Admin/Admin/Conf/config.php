<?php
return array(
	
	'LAYOUT_ON'=>true,
	'LAYOUT_NAME'=>'layout',
	'ADMIN_MENU' =>array(

					array('id'=>'1','name'=>'管理员管理','en'=>"Admin",'url'=>'Admin/index',
						'child_menu'=>array(
							array('id'=>'2','status'=>'1','name'=>'管理员列表','url'=>'Admin/index'),
							array('id'=>'3','status'=>'1','name'=>'管理员添加','url'=>'Admin/add'),
							array('id'=>'4','status'=>'0','name'=>'管理员修改','url'=>'Admin/update'),
							array('id'=>'5','status'=>'0','name'=>'管理员删除','url'=>'Admin/delete'),
						),
					),
					array(
						'id'=>'6','name'=>'产品管理','en'=>"Product",'url'=>'Product/index',
						'child_menu'=>array(
							array('id'=>'7','status'=>'1','name'=>'产品列表','url'=>'Product/index'),
							array('id'=>'8','status'=>'1','name'=>'产品添加','url'=>'Product/add'),
							array('id'=>'9','status'=>'0','name'=>'产品修改','url'=>'Product/update'),
							array('id'=>'10','status'=>'0','name'=>'产品删除','url'=>'Product/delete'),
						),
					),
					array('id'=>'11','name'=>' 新闻管理','en'=>"News",'url'=>'News/index',
						'child_menu'=>array(
							array('id'=>'12','status'=>'1','name'=>'新闻列表','url'=>'News/index'),
							array('id'=>'13','status'=>'1','name'=>'新闻添加','url'=>'News/add'),
							array('id'=>'14','status'=>'0','name'=>'新闻修改','url'=>'News/update'),
							array('id'=>'15','status'=>'0','name'=>'新闻删除','url'=>'News/delete'),
							),
						),
					array('id'=>'16','name'=>'权限管理','en'=>"Level",'url'=>'Level/index',
						'child_menu'=>array(
							array('id'=>'17','status'=>'1','name'=>'权限列表','url'=>'Level/index'),
							array('id'=>'18','status'=>'1','name'=>'权限添加','url'=>'Level/add'),
							array('id'=>'19','status'=>'0','name'=>'权限修改','url'=>'Level/update'),
							array('id'=>'20','status'=>'0','name'=>'权限删除','url'=>'Level/delete'),
							),
						),
					array('id'=>'21','name'=>'分类管理','en'=>"Category",'url'=>'Category/index',
						'child_menu'=>array(
							array('id'=>'22','status'=>'1','name'=>'分类列表','url'=>'Category/index'),
							array('id'=>'23','status'=>'1','name'=>'分类添加','url'=>'Category/add'),
							array('id'=>'24','status'=>'0','name'=>'分类修改','url'=>'Category/update'),
							array('id'=>'25','status'=>'0','name'=>'分类删除','url'=>'Category/delete'),
							),
						),
					array('id'=>'26','name'=>'会员中心','en'=>"Vip",'url'=>'Vip/index',
						'child_menu'=>array(
							array('id'=>'27','status'=>'1','name'=>'会员列表','url'=>'Vip/index'),
							// array('id'=>'63','status'=>'1','name'=>'购物车列表','url'=>'Vip/cart'),
							),
						),
					array('id'=>'28','name'=>'订单中心','en'=>"Order",'url'=>'Order/index',
						'child_menu'=>array(
							array('id'=>'29','status'=>'1','name'=>'待发货订单','url'=>'Order/index'),
							array('id'=>'30','status'=>'1','name'=>'已发货订单','url'=>'Order/sended'),
							array('id'=>'31','status'=>'0','name'=>'发货','url'=>'Order/send'),
							array('id'=>'32','status'=>'0','name'=>'待退货订单','url'=>'Order/returne'),
							array('id'=>'33','status'=>'0','name'=>'退货','url'=>'Order/refund'),
							array('id'=>'34','status'=>'0','name'=>'交易完成订单','url'=>'Order/finish'),
							),
						),
					array('id'=>'35','name'=>'单页面管理','en'=>"Single",'url'=>'Single/images',
						'child_menu'=>array(
							array('id'=>'36','status'=>'1','name'=>'图片列表','url'=>'Single/images'),
							array('id'=>'37','status'=>'0','name'=>'图片修改','url'=>'Single/update'),
							array('id'=>'38','status'=>'1','name'=>'品牌列表','url'=>'Single/brand'),
							array('id'=>'39','status'=>'0','name'=>'品牌修改','url'=>'Single/upbrand'),
							array('id'=>'40','status'=>'1','name'=>'留言列表','url'=>'Single/message'),
							array('id'=>'41','status'=>'0','name'=>'留言删除','url'=>'Single/delmessage'),
							array('id'=>'42','status'=>'1','name'=>'联系方式','url'=>'Single/contact'),	
							array('id'=>'43','status'=>'0','name'=>'联系方式修改','url'=>'Single/upcontact'),
						    array('id'=>'43','status'=>'1','name'=>'视频管理','url'=>'Single/video'),
						    array('id'=>'43','status'=>'0','name'=>'视频上传','url'=>'Single/addVideo'),
						    
							),
						),
					
				
	  ),

    
/*     //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '121.40.34.175', // 服务器地址
    'DB_NAME'   => '23996dbNKS6T', // 数据库名
    'DB_USER'   => '23996_fa5648', // 用户名
    'DB_PWD'    => 'qEecEb86j8x5Zj5', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'think_', // 数据库表前缀 
    'DB_CHARSET'=> 'utf8', // 字符集 */
				
    //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'tp', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'think_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集

		
);
?>