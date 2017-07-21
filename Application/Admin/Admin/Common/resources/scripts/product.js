$(function(){
	//点击添加图片
	$("#add").click(function(){
		var d = $(".len").length;
		if(d<5){
		var file="<span class='len'><span class='reduce'>[-]</span>";
		file+="<input  type='file' name='pro_img[]' /><br/></span>";
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