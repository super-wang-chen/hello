/**
 * 产品添加及修改的表单验证
 */
$(function(){
	//alert(123);
	$("#basic_validate").validate({
		rules:{
			pro_name:{
				required:true,
				maxlength:15
			},
			market_price:{
				required:true,
				number:true,
				min:0
			},
			shop_price:{
				required:true,
				number:true,
				min:0
			},
			pro_num:{
				required:true,
				number:true,
				min:0
			},
			description:{
				required:true
			},
		},
		messages:{
			pro_name:{
				required:'产品名称不能为空！',
				maxlength:'产品名称不能超过15字！'
			},
			market_price:{
				required:'市场价格不能为空！',
				number:'请输入数字！',
				min:'数字不能为负数！'
				
			},
			shop_price:{
				required:'商城价格不能为空！',
				number:'请输入数字！', 
				min:'数字不能为负数！'
			},
			pro_num:{
				required:'产品数量不能为空！',
				number:'请输入数字！',
				min:'数字不能为负数！'
				
			},
			description:{
				required:'产品描述不能为空！',
			}
			
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.tips').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.tips').removeClass('error');
			$(element).parents('.tips').addClass('success');
		}
	})			
})