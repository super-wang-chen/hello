<?php if (!defined('THINK_PATH')) exit();?>
  <!-- End .clear -->
    <div class="content-box">
      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3>留言列表</h3>
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
          <table>
            <thead>
				<b>姓名:</b><p><?php echo ($info["name"]); ?></p>
				<b>邮箱:</b><p><?php echo ($info["email"]); ?></p>
				<b>地址:</b><p><?php echo ($info["title"]); ?></p>
				<b>内容:</b><p><?php echo ($info["content"]); ?></p>
            </thead>
            <tfoot>
              
            </tfoot>
            <tbody>

            </tbody>
          </table>
        </div>
        <!-- End #tab1 -->
       <div id="xs" ></div>
        <!-- End #tab2 -->
      </div>
      <!-- End .content-box-content -->
    </div>
    <!-- End .content-box -->