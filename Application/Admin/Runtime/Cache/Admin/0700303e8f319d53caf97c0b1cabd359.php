<?php if (!defined('THINK_PATH')) exit();?>
 <script type="text/javascript" src="/tp/Application/Admin/Admin/Common/resources/scripts/level.js"></script>
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
          <form action="" enctype="multipart/form-data" method="post">
            <fieldset>
            <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            <p>
              <label>权限名称</label>
              <input class="text-input small-input" type="text" id="name" name="name" />
              <!-- Classes for input-notification: success, error, information, attention -->
              <br />
              </p>

            <p>
              <label>权限列表</label>                   
              
              <?php if(is_array($menu)): foreach($menu as $key=>$vo): ?><p class="box">
               	<input type="checkbox" class="box_1" name="level_id[]" value="<?php echo ($vo["id"]); ?>"/>
               	<b><?php echo ($vo["name"]); ?></b><br/>
               	 
               	<?php if(is_array($vo['child_menu'])): foreach($vo['child_menu'] as $key=>$v): ?><input type="checkbox" class="box_2" name="level_id[]" value="<?php echo ($v["id"]); ?>"/>
            	<span><?php echo ($v["name"]); ?></span><?php endforeach; endif; ?>
              <br/>
              </p><?php endforeach; endif; ?>           	            	            	           	             	            	        
            </p>
		    <p>
              <input type="button" value="全选" id="checkAll">&nbsp&nbsp<input type="button" value="反选" id="checkCancel">&nbsp&nbsp<input type="button" value="取消" id="checkName">
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
    <script>
    $(function(){
    	//全选
   	$("#checkAll").click(function(){ 		
           var check=$('.box input[type="checkbox"]');
           //alert(check.length);
             for(var i = 0;i < check.length;i++){
               check.eq(i).attr('checked',true);
             }
       }) 
         
    //反选
    $("#checkCancel").click(function(){
        var check=$('.box input[type="checkbox"]');
        //alert(check.length);
        for(var i = 0;i < check.length;i++){
          if(check.eq(i).attr('checked')){
              check.eq(i).attr('checked',false);
            }else{
              check.eq(i).attr('checked',true);
              
            }
         }
    })
    
    //取消
    $("#checkName").click(function(){
        var check=$('.box input[type="checkbox"]');
        for(var i = 0;i < check.length;i++){
            check.eq(i).attr('checked',false  );
        }
    })
    
    
    //权限组名称验证
    $(".button").click(function(){
        var name=$("#small-input").val();
        if(name==''){
          alert('权限组名称不能为空！');
          return false;
        }
    })
    //模块名被选中时子集全部被选中
    $(".box_1").click(function(){
       //var a = $(this).attr('checked');
        //alert(a);
    	if($(this).attr('checked')=='checked'){
    		//alert(1);
    		$(this).nextAll().attr('checked',true);
    	}else{
    		//alert(2);
    		$(this).nextAll().attr('checked',false);
    	}
    }) 
    
         //当子级没有被选中时模块也被取消选中
    $(".box_2").click(function(){
    	if($(this).attr('checked')=='checked'){
    		$(this).siblings('.box_1').attr('checked',true);
    	}else{
    		if($(this).siblings('input[checked=checked]').length<2){
    		   $(this).siblings('.box_1').attr('checked',false);
    		}0
    	}
    }) 
    	
    	
    })
    </script>