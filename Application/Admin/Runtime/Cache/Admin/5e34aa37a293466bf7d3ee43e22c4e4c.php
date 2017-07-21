<?php if (!defined('THINK_PATH')) exit();?>
  <!-- End .clear -->
    <div class="content-box">
      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3>订单详情</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab1" class="default-tab">Table</a></li>
          <!-- href must be unique and match the id of target div -->
        </ul>
        <div class="clear"></div>
      </div>
      <!-- End .content-box-header -->
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
          <!-- This is the target div. id must match the href of this div's tab -->
          <div class="notification attention png_bg"> <a href="#" class="close"><img src="/tp/Application/Admin/Admin/Common/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
            <div> This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross. </div>
          </div>
        </div>
					<div class="right">
					<div class="state">
						<p>订单编号：<?php echo ($info[ordel_id]); ?></p>
					</div>
					<div class="title_us">
						<span>商品信息</span>
						<span>单价(元)</span>
						<span>购买数量</span>
						<span>总价</span>
					</div>
					<?php if(is_array($info['product'])): foreach($info['product'] as $key=>$vo): ?><div class="pic">

						<a href=""><img style="width:40px;height:40px;" src="<?php echo ($vo["img"]); ?>"></a>
						<a href=""><?php echo (mb_substr($vo["name"],0,10,'utf-8')); ?><span>颜色：原色</span></a>
						<p><?php echo ($vo["price"]); ?>.00</p>
						<p><?php echo ($vo["num"]); ?></p>
						<p><?php echo ($vo["totbl"]); ?></p>

					</div><?php endforeach; endif; ?>
					<div class="price">
						<span>实际支付金额：</span>
						<span>￥<?php echo ($info[tot]); ?>.00</span>
					</div>
					<div class="details">
						<h3>订单信息</h3>
						<p>收货人：<?php echo ($list["name"]); ?><span>&nbsp<?php echo ($list["phone"]); ?></span>&nbsp&nbsp&nbsp<span><?php echo ($list["district"]); ?></span></p>
						<p>发货人：SNONE北京分公司</p>
						<p>支付方式：在线支付</p>
						<p>配送费用：无</p>
						<p>商品金额：￥<?php echo ($info[tot]); ?>.00<span>优惠券：无</span><span>折扣：无</span></p>
					</div>
				</div>
        <!-- End #tab1 -->
       <div id="xs" ></div>
        <!-- End #tab2 -->
      </div>
      <!-- End .content-box-content -->
    </div>
    <!-- End .content-box -->