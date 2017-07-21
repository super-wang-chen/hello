<?php if (!defined('THINK_PATH')) exit();?>
 
    
    <div class="content-box">
      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3>Content box</h3>
        <ul class="content-box-tabs">
          <!-- href must be unique and match the id of target div -->
          <li><a href="#tab2" class="default-tab">Forms</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <!-- End .content-box-header -->
      <div class="content-box-content">

        <!-- End #tab1 -->
        
         <div>
         
          <p><b>商品信息</b></p>
          <p>品牌：<span>怀素堂</span></p>
          <p>名称：<span><?php echo ($proInfo[0]["pro_name"]); ?></span></p>
          <p>单价：<span>￥<?php echo ($proInfo[0]["shop_price"]); ?>.00</span></p>
          <p>数量：<span><?php echo ($proInfo[0]["num"]); ?></span></p>
          <p>总价：<span>￥<?php echo ($proInfo[0]["total"]); ?>.00</span></p>  
               
        </div>
       
        
        <div>
       
          <p><b>配送信息</b></p>          
          <p>收货人：<span><?php echo ($addrInfo["name"]); ?></span></p>
          <p>收货地址：<span><?php echo ($addrInfo["address"]); ?></span></p>
          <p>手机号码：<span><?php echo ($addrInfo["phone"]); ?></span></p>
          <p>送货方式：韵达 圆通 中通 申通</p>
           
        </div>
       
        
        <div> 
                    
			<p><b>订单信息</b></p>
			<p>订单号：<span><?php echo ($info["order_id"]); ?></span></p>
			<p>支付方式：<span>在线支付</span></p>
			<p>下单时间：<span><?php echo ($info["time"]); ?></span></p>
																		                     
        </div>
        

        <!-- End #tab2 -->
      </div>
      <!-- End .content-box-content -->
    </div>
    <!-- End .content-box -->