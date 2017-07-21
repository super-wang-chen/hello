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

        <!-- End #tab1 -->
        <div class="tab-content default-tab" id="tab2">
          <form action="" enctype="multipart/form-data" method="post" id="form">
            <fieldset>
            <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            <p>
              <label>单页面名称</label>
              <input class="text-input small-input" type="text" id="location" name="location"  value="<?php echo ($brand["location"]); ?>"/>
              <!-- Classes for input-notification: success, error, information, attention -->
              <br />
         	<P>	
          	<label>单页标题</label>
              <input class="text-input small-input" type="text" id="title" name="title" value="<?php echo ($brand["title"]); ?>" />
			</p>
            <p>
              <label>单页内容</label>
              <textarea  id="editor" name="content" cols="79" rows="15"><?php echo ($brand["content"]); ?></textarea>
            </p>
            
 			<p>
              <label rel="<?php echo ($brand["id"]); ?>">修改图片</label>             
              <input  type="file" name="image" value="" />                              
            </p>                        
            <p>
              <input class="button" type="submit" value="提 交" />
            </p>
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