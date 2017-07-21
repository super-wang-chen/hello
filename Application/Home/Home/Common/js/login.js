$(function () {
	$("input[type='checkbox']").click(function () {
		var flag=$(this).prop("checked");
		if(!flag){
			$(this).parent().css("background","url(img/shop/check1.png) no-repeat");
		}
		else{
			$(this).parent().css("background","url(img/shop/check2.png) no-repeat");
		}
	})	
})
