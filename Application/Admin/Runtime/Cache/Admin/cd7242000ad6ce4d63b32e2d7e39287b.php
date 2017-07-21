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
          <form action="" method="post" enctype="multipart/form-data">                       
            <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            <p>
              <label>标题</label>
              <input class="text-input small-input" type="text" id="small-input" name="title" value="<?php echo ($news["title"]); ?>" />
            <p>
              <label>作者</label>
              <input class="text-input small-input" type="text" id="medium-input" name="author" value="<?php echo ($news["author"]); ?>" />
            <p>
            <p>
              <label>新闻分类</label>
              <select name="category" class="small-input">
                               
                <?php if(is_array($cateArr)): foreach($cateArr as $key=>$vo): if($vo.id==$news[category]): ?><option value="<?php echo ($vo["id"]); ?>" selected="selected"><?php echo ($vo["fullname"]); ?></option> 
                <?php else: ?>  
                 <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["fullname"]); ?></option><?php endif; endforeach; endif; ?>  
              </select>
            </p>
            <p>
              <label>新闻内容</label>
              <textarea class="text-input textarea wysiwyg" id="textarea"  name="content" cols="79" rows="15"><?php echo ($news["content"]); ?></textarea>
            </p>            
            <p id="Files" rel="<?php echo U('News/delImg');?>">
              <label rel="<?php echo ($news["id"]); ?>">产品图片</label>             
              <?php if(is_array($arr)): foreach($arr as $key=>$vo): ?><span style="margin-left:18px;" >
                <img src="<?php echo ($vo); ?>" class="images" style="width:180px;height:135px;"/>
                <a href="javascript:;" class="delImg" ><img src="/tp2/Application/Admin/Admin/Common/resources/images/icons/cross.png" alt="Delete" /></a>
              </span><?php endforeach; endif; ?></br>                                          
              <span><span id="addnews">[+]</span><input  type="file" name="image[]" value="<?php echo ($news["image[]"]); ?>" /></span><br/>          
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
    	//点击添加图片
    	//alert(123)
    	$("#addnews").click(function(){
    		//alert(123)
    	
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
    	
    		//删除图片
  	$(".delImg").click(function(){
  	  //获取ajax处理路径
	  var url= $('#Files').attr('rel');
	  //获取多张图片的下标索引值
	  var num = $(".delImg").index($(this));	  
	  var src = $(".delImg").prev('img').eq(num).attr('src');	  
	  //这里传递ID是为了去数据库中查找对应的信息
	  var id = $('#Files').find('label').attr('rel');
	  //alert(id);
	  $(this).parent().remove();
	  $.ajax({ 
		      type:'post',
		      url: url, 
		      data: {
		    	  'src':src,
		    	  'id':id
		      },
		      success: function(msg){
		    	  //alert(msg)
		    	       if(msg==1){
		    	    	   
		    	    	   
		    	       }
	        }
	  });
  })
    	

    })
    </script>