$(function(){	
	/*
	1.获取数量框中的新值
	2.获取对应产品的单价
	3.计算出新的总价
	4.改变显示的总价
	5.所有商品总价改变
	6.将服务器端数据同步更新
	*/
	/*********增加数量按钮点击事件*********/	
	$(".addbtn").click(function(){
		var count=$(this).prev().val();//获取数量框中的原始数量
		count++;
		if(count>99)count=99;//如若数量框中的数量大于99，则默认为99
		$(this).prev().val(count);//将新增加的数量重新赋给数量框
		var num=$(".addbtn").index($(this));//获取当前点击事件的下标
		var price=$('.pNumber').eq(num).html();//获取单价
		var all=count*price;//单价*数量=小价
		$('.sub').eq(num).html(all);//更新小计价格
		
		var len=$(".content .bottom ul li").length;//获取购物车中商品类别的总个数
		//alert(len);
		var total = 0;
		for(var i=0;i<len;i++){
			if($('.btn').eq(i).find('input').is(':checked')){
				 subtotal = Number($('.sub').eq(i).html());
	             total += subtotal
			}
		}		
	    $('#Total').html(total);
	    
	     /**
	      *1.Ajax的 参数 1. 数量    2.id   
	      *2.找到一个页面去接收数据（URL）
	      *3.根据ajax的传值来修改cookie   
	      */
		  var url=$(".numbtn").eq(num).attr('rel');	 	 
		  $.ajax({
			  type:"GET",
			  url:url,
			  data:{			  
				  'count':count,			  		  
			  },
		      success:function(msg){
		    	  
		    	  
		      }
		  })
		
	})
	
	/*********减少数量按钮点击事件*********/
	$(".reducebtn").click(function(){
		//alert(111);
		var count=$(this).next().val();//获取数量框中的原始数量值
		count--;
		if(count<1){count=1;return;}
		$(this).next().val(count);//将新值重新赋给数量框
		var num=$(".reducebtn").index($(this));//获取当前事件的下标
		var price=$('.pNumber').eq(num).html();//获取单价
		var all=count*price;//单价*数量=小价
		$('.sub').eq(num).html(all);//更新小计价格
		
		var len=$(".content .bottom ul li").length;//获取购物车中产品类别的总个数
		//alert(len);
		var total = 0;
		for(var i=0;i<len;i++){
			if($('.btn').eq(i).find('input').is(':checked')){
		         subtotal = Number($('.sub').eq(i).html());//总计价格等于小计价格的总和
		         total += subtotal
			}
		}		
		$('#Total').html(total);
		
	     /**
	      *1.Ajax的 参数 1. 数量    2.id   
	      *2.找到一个页面去接收数据（URL）
	      *3.根据ajax的传值来修改cookie   
	      */
		  var url=$(".numbtn").eq(num).attr('rel');	 	 
		  $.ajax({
			  type:"GET",
			  url:url,
			  data:{			  
				  'count':count,			  		  
			  },
		      success:function(msg){
		    	  
		    	  
		      }
		  })
	
    })
	

	
	/*********数量输入框中改变数量的键盘弹起事件*********/	
	$(".numbtn").keyup(function(){		
		var count=$(this).val();//获取数量中的值
		var reg = /^[1-9]+[0-9]*$/    // +:{1,} 代表一个以上   *:{0,}   代表0个以上
		if(reg.test(count)){//如果通过正则，则输出正确的数量
			count=Number(count);
		}else{//如果格式不正确，则数量默认为1
			count=1;
			$(this).val(count);
		}						
		var num = $(".numbtn").index($(this));//获取当前下标索引值
		var price=$('.pNumber').eq(num).html();//获取单价
		var all=count*price;//单价*数量=小价		
		$('.sub').eq(num).html(all);//更新小计价格
		
		//当用户改变数量时，总价也跟着改变
		var len=$(".content .bottom ul li").length;//获取购物车中产品类别的总个数
		//alert(len);
		var total = 0;
		for(var i=0;i<len;i++){
			if($('.btn').eq(i).find('input').is(':checked')){
				 subtotal = Number($('.sub').eq(i).html());
	             total += subtotal
			}
		}		
	    $('#Total').html(total);
	    	 
     /**
      *1.Ajax的 参数 1. 数量    2.id   
      *2.找到一个页面去接收数据（URL）
      *3.根据ajax的传值来修改cookie   
      */
	  var url=$(".numbtn").eq(num).attr('rel');	 	 
	  $.ajax({
		  type:"GET",
		  url:url,
		  data:{			  
			  'count':count,			  		  
		  },
	      success:function(msg){
	    	  
	    	  
	      }
	  })
			
	})
	
	
	/*********单选点击事件	*********/
	$(".select").click(function (){		
		var val = Number($(this).val());//获取select框选中的value值
		var num = $('.select').index($(this));//获取当前选框的索引下标值		  
		var len=$(".content .bottom ul li").length;//获取购物车中产品类别的总个数		
		var price=Number($('.pNumber').eq(num).html());//获取当前产品的单价
		var total=0;//定义一个产品的小计为0		
		for(var i=0;i<len;i++){
			if($('.btn').eq(i).find('input').is(':checked')){
				 subtotal = Number($('.sub').eq(i).html());
	             total += subtotal
			}
		}
		
		$('#Total').html(total);
	})
	
	
    /*********全选点击事件	*********/	
    $('#allcheck').click(function(){
    	
    	var check=$('.btn input[type="checkbox"]');
    	
    	if($(this).prop('checked')==true){
    		//alert(111);
    		var total=0;//定义一个产品的小计为0
			for(var i=0;i<check.length;i++){
				check.eq(i).prop('checked',true);
				subtotal = Number($('.sub').eq(i).html());
		        total += subtotal
			}
		    $('#Total').html(total);
    	}else{
    		//alert(888)
    		for(var i=0;i<check.length;i++){
				check.eq(i).prop('checked',false);
			}
			$('#Total').html(0);
    	}
  })
    
    

	

	

	
	//删除购物车
	$('.del').click(function(){
		var len=$(".content .bottom ul li").length;//获取购物车中商品类别的总个数	
		var url=$('.Cart').parent().attr('rel');//获取商品的id
		//alert(len)		
	    var str='';//定义一个空数组
		for(var i=0;i<len;i++){			
			if($('.btn').eq(i).find('input').is(':checked')){//如果当前商品被勾选
				str+=$('.Cart').eq(i).attr('rel')+',';//将勾选中的商品id放入字符串
				$(".content .bottom ul li").eq(i).remove();//移除被选中商品的样式
			}
			
/*			if($(this).prop('checked')==true){
				$(".content .bottom ul li").remove();
			}*/
			
		}
		
	    $.ajax({
			  type:"GET",
			  url:url,
			  data:{			  
				  'str':str,			  		  
			  },
		      success:function(msg){
		    	  		//alert(msg)    	  
		      }
		    })
		

	})
	
	
})//js结束符	
	
	


