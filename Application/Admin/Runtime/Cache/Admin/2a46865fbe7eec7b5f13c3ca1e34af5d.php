<?php if (!defined('THINK_PATH')) exit();?>
 <script type="text/javascript" src="/tp/Application/Admin/Admin/Common/resources/scripts/jquery.validate.js"></script>
    <!-- End .clear -->
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
		<div class="tab-content default-tab" id="tab2">
          <form action="" method="post" enctype="multipart/form-data">
				    <fieldset>
						<p>
							<label>标题：</label>
							<input class="text-input small-input" type="text" name="company" value="<?php echo ($videoInfo["title"]); ?>" />
						</p>
                         <p>
							<label>上传视频：</label>
							<input  type="file" value="上传视频" name="video" />
						</p>
												
						<p><input class="button" type="submit" value="上传视频" /></p>
						</fieldset> 
            <div class="clear"></div>
            <!-- End .clear -->
          </form>
        </div>
       
        <!-- End #tab2 -->
      </div>
      <!-- End .content-box-content -->
    </div>
    <!-- End .content-box -->