<?php if (!defined('THINK_PATH')) exit();?>
  <script type="text/javascript" src="/tp/Application/Admin/Admin/Common/resources/scripts/jquery.validate.js"></script>
 <script type="text/javascript" src="/tp/Application/Admin/Admin/Common/resources/scripts/proCheck.js"></script>

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
          <form action="" method="post" id="basic_validate" enctype="multipart/form-data">                       
            <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            <p>
              <label>产品名称</label>
              <input class="text-input small-input" type="text" id="small-input" name="pro_name" value="<?php echo ($pro["pro_name"]); ?>" />
            <p>
              <label>市场价格</label>
              <input class="text-input small-input" type="text" id="medium-input" name="market_price" value="<?php echo ($pro["market_price"]); ?>" />
            <p>
              <label>商城价格</label>
              <input class="text-input small-input" type="text" id="large-input" name="shop_price" value="<?php echo ($pro["shop_price"]); ?>" />
            </p>
            <p>
              <label>产品数量</label>
              <input class="text-input small-input" type="text" name="pro_num" value="<?php echo ($pro["pro_num"]); ?>" />
            </p>
            <p>
              <label>产品分类</label>
              <select name="pro_cate" class="small-input" value="<?php echo ($pro["pro_cate"]); ?>">
                
                <?php if(is_array($cateArr)): $i = 0; $__LIST__ = $cateArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["id"] == $pro[pro_cate]): ?><option value="<?php echo ($vo["id"]); ?>" selected="selected"><?php echo ($vo["fullname"]); ?></option>
                <?php else: ?>
                <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["fullname"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
              </select>
            </p>
            <p>
              <label>产品描述</label>
              <textarea class="text-input textarea wysiwyg" id="textarea" name="description" cols="79" rows="15"><?php echo ($pro["description"]); ?></textarea>
            </p>            
            <p id="Files" rel="<?php echo U('product/delImg');?>">
              <label rel="<?php echo ($pro["id"]); ?>">产品图片</label>             
              <?php if(is_array($arr)): foreach($arr as $key=>$vo): ?><span style="margin-left:18px;" >
                <img src="<?php echo ($vo); ?>" class="images" style="width:180px;height:135px;"/>
                <a href="javascript:;" class="delImg" ><img src="/tp/Application/Admin/Admin/Common/resources/images/icons/cross.png" alt="Delete" /></a>
              </span><?php endforeach; endif; ?></br>                                          
              <span><span id="add">[+]</span><input  type="file" name="pro_img[]" value="<?php echo ($pro["pro_img[]"]); ?>" /></span><br/>          
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
    
    <!-- 错误提示样式 -->
    <style>
      .help-inline{margin-left:5px;font-size:12px;color:red;}
    </style>