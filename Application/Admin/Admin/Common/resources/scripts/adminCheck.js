/**
 * 用户名重名验证
 */

$(function(){
	var url =$("#check").attr('rel');
	//alert(url)
	var name = $("#check").next().val();
	//alert(name);
    $("#from").validate({
        rules:{
        	username:{        	  
              required:true,
         	  rangelength:[2,10],
         	  remote:url,         		         	          
          },
          password:{
            required:true,
          },
          repass:{
            required:true,
            equalTo: "#password"
          },
          email:{
            required:true,
            email:true
          },
         
        },
        messages:{
        	username:{
            required:'管理员名称不能为空！',
            rangelength:'请输入长度2~12之间的管理员名称',
            remote:'用户名已存在'
            	
          },
          password:{
        	  required:'密码不能为空！',
          },
          repass:{
            required:'确认密码不能为空！',
            equalTo: '两次密码输入不一致 '
          },
          email:{
            required:'邮箱不能为空！',
            email:'请输入正确的邮箱格式'
          },
          
          
        },
       errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
          $(element).parents('.control-group').addClass('err');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).parents('.control-group').removeClass('err');
          $(element).parents('.control-group').addClass('suc');
        }
        
      })
})