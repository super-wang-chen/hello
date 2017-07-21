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
          <form action="" enctype="multipart/form-data" method="post">
            <fieldset>
            <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            <p>
              <label>名称</label>
              <input class="text-input small-input" type="text"  name="name" value="<?php echo ($info["name"]); ?>"/>
              <!-- Classes for input-notification: success, error, information, attention -->              
            </p>
            <p>
            <input type="file" name="image"/>
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