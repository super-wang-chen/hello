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
        <div class="tab-content default-tab" id="tab2">
                
				<p><b>用户名:</b><?php echo ($details["username"]); ?></p>
				<p><b>地址:</b><?php echo ($details["address"]); ?></p>
				<p><b>电话:</b><?php echo ($details["phone"]); ?></p>
				<p><b>邮箱:</b><?php echo ($details["e_mail"]); ?></p>
				<p><b>内容:</b><?php echo ($details["content"]); ?></p>
            
          
        </div>
        <!-- End #tab2 -->
      </div>
      <!-- End .content-box-content -->
    </div>
    <!-- End .content-box -->