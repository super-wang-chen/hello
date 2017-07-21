$(function(){
	$("#sub").click(function(){
		//alert(111);
		var data=$("#loginForm").serialize();
		//alert(data);
		var url=$("#loginForm").attr('rel');
		//alert(url);
		$.ajax({
		    type:'POST',
			data:data,
		    url:url,
		    success:function(msg){
		    	//alert(msg);
	    	    if(msg==2){	    		
		    		$("#loginForm").submit();
		    	}else if(msg==3){
		    		$("#error").html('');
		    		$("#error").html('验证码错误!');
		    	}else{
		    		$("#error").html('');
		    		$("#error").html('用户名或密码错误!');
		    	}
		    }
	     
	    })
		return false;
	})
	
	//验证码
	$("#codeA").click(function(){ 
		$(this).attr('title', '点击刷新');  
		var verifyimg = $(this).attr("src");
		if( verifyimg.indexOf('?')>0){  
		    $(this).attr("src", verifyimg+'&random='+Math.random());  
		}else{  
		    $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());  
		}  
	})
})