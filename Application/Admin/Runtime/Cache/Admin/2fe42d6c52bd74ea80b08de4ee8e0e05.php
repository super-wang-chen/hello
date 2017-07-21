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
              <label>标题</label>
              <input  class="text-input small-input" type="text"  name="title" />
            <p>
              <label>作者</label>
              <input  class="text-input small-input" type="text" name="author" />
            </p>
            <p>
              <label>新闻分类</label>
              <select name="category" >
              <option >请选择分类</option>
              <?php if(is_array($list)): foreach($list as $key=>$vo): if($vo["pid"] == 2): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["fullname"]); ?></option><?php endif; endforeach; endif; ?>
              </select>
            </p>
            <p>
              <label>内容</label>
              <textarea class="text-input textarea wysiwyg" id="textarea" name="content" cols="79" rows="15"></textarea>
            </p>
            <p>
              <label>上传图片</label>
             <span>
              <span id="addnews">[+]</span><input  type="file" name="image[]" /><br/>
             </span>            
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
<script>

	$(function(){
		//alert(111);
		//点击添加图片
		$("#addnews").click(function(){
			var d = $(".len").length;
			if(d<5){
			var file="<span class='len'><span class='reduce'>[-]</span>";
			file+="<input  type='file' name='image[]' /><br/></span>";
			$(this).parent().parent().append(file);
			}
		})
		
		$(".reduce").live("click",function(){
			//alert(111);
			$(this).parent().remove();
		})
	
	
})

</script>