$(function(){
	//alert(111111)
	var url=$('#nameCheck').attr('rel');
	//alert(url)
	$('#checkForm').validate({
		//alert(123)
	       rules:{
	          	vip_name:{
	            required:true,
	           	rangelength:[5,10],
	           	remote:url
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
	              phone:{
	               required:true,
	               min:10,
	               digits:true
	             },

	           },
	           messages:{
	        	   vip_name:{
	               required:'用户名不能为空！',
	               rangelength:'请输入长度6~12之间的会员名称',
	               remote:'用户名已存在'
	             },
	             password:{
	           	  required:'密码不能为空！',
	             },
	             repass:{
	               required:'确认密码不能为空！',
	               equalTo: '两次密码输入不一致! '
	             },
	             email:{
	               required:'邮箱不能为空！',
	               email:'请输入正确的邮箱格式'
	             },
	            phone:{
	               required:'手机号不能为空！',
	               min:'请输入长度11位的手机号',
	               digits:'请输入正确的手机格式'
	             },



	           },
	          errorClass: "help-inline",
	           errorElement: "div",
	           highlight:function(element, errorClass, validClass) {
	             $(element).parents('.control-group').addClass('err');
	           },
	           unhighlight: function(element, errorClass, validClass) {
	             $(element).parents('.control-group').removeClass('err');
	             $(element).parents('.control-group').addClass('suc');
	           },

		
	})
})