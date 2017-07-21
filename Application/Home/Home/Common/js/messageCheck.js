/**
 * 留言框验证
 */
$(function(){
	
	//用户名
	var a=0;//阻止提交
	
	$('.name').blur(function(){
		//alert(11111)
		var str=$(this).val();
		 if(str==''){
	    	$(this).next('span').text('用户名不能为空');
	    	a++;
	      } else{
	    	  $(this).next('span').text(''); 
	      }
	})
	
		
	//地址
	$('.address').blur(function(){
		//alert(11111)
		var str=$(this).val();
		 if(str==''){
	    	$(this).next('span').text('地址不能为空');
	    	a++;
	      } else{
	    	  $(this).next('span').text(''); 
	      }
	})
	
	//手机号
	$('.phone').blur(function(){
		//alert(1)
		var reg =/^1\d{10}$/;//11位的数字
		var str=$(this).val();
		if(!str.match(reg)){
			$(this).next('span').text('请输入11位数字');
			a++
		}else{
			$(this).next('span').text('');
		}
	})
	
	//邮箱
	$('.email').blur(function(){
		//alert(1)
		var reg = /^\w+@\w+\.(com|cn|com\.cn)$/;
		var str=$(this).val();
		if(!str.match(reg)){
			$(this).next('span').text('邮箱格式不正确');
			a++;
		}else{
			$(this).next('span').text('');
		}
	})
		
		
	//验证码无刷新更新
	$("#codeA").click(function(){ 
		$(this).attr('title', '点击刷新');  
		var verifyimg = $(this).attr("src");
		if( verifyimg.indexOf('?')>0){  
		    $(this).attr("src", verifyimg+'&random='+Math.random());  
		}else{  
		    $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());  
		}  
	})
	

	
	//验证码验证，当在输入框输入验证码后的弹起事件做AJAX验证
	$("#checkCode").blur(function(){
		//alert(123);
		var code=$("#checkCode").val();
		//alert(code)
		var url=$('#messForm').attr('rel');
		//alert(url)
			$.ajax({
			    type:'GET',
				data:{'code': code},
			    url:url,
			    success:function(msg){
			    	//alert(msg);
		    	    if(msg==1){	 		    	    	
			    		$("#error").text('');	
			    	}else{
			    		$("#error").text('验证码错误!');
			    		a++;			    		
			    	}
			    }
		     
		   })//ajax结束符		
	   		   
  })//失去焦点事件结束符
  
	//提交
	$('#button').click(function(){
		//alert(1111)		
		$('#messForm').submit();//提交订单		
		
	
	})
 
	//阻止提交
	$('#messForm').submit(function(){
      //判断所有选项不能为空
      if($(".name").val()=='' || $(".address").val()=='' || $("#phone").val()=='' || $("#email").val()==''){
          alert("您有未填写的选项!");
          return false;
      }
      //判断如果有误项，阻止提交
	  if(a!=0){
		return false;
	  }
  })	
  
    
  
})//js结束符