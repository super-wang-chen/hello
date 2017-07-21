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
        <div class="tab-content default-tab" id="tab2">
          <form action="" id="basic_validate" method="post" enctype="multipart/form-data" name="basic_validate">
            <fieldset>
            <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            <p>
              <label>名称</label>
              <input  class="text-input small-input" type="text"  name="name" value="<?php echo ($info["name"]); ?>"/>
            <p>
              <label>父级ID</label>          
              <select name="pid" >
                <option value='0'>顶级分类</option>
                
                <?php if(is_array($list)): foreach($list as $key=>$vo): if($vo[id] == $info[pid]): ?><option value="<?php echo ($vo["id"]); ?>" selected="selected"><?php echo ($vo["fullname"]); ?></option>
                <?php else: ?>
                <option value='<?php echo ($vo[id]); ?>'><?php echo ($vo["fullname"]); ?></option><?php endif; endforeach; endif; ?>
              </select>
            </p>           
            <p>
              <input class="button" type="submit" value="Submit" />
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