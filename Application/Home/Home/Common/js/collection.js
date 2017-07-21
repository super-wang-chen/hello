$(function () {
	$(".allcheckbtn").prop("checked",false);
	$("li input[type='checkbox']").click(function () {
		var len=$(".content .bottom li").length;
			var bool=true;
			for(var i=0;i<len;i++){
				if(!$(".content .bottom li").eq(i).find(".btn input").prop("checked")){
					bool=false;
					break;
				}	
			}
			if(!bool){
//				console.log(12)
				$(".allcheckbtn").prop("checked",false);
				$(".allcheckbtn").parent().css("background","url(img/shop/check1.png) no-repeat");
			}
			else{
				$(".allcheckbtn").prop("checked",true);
				$(".allcheckbtn").parent().css("background","url(img/shop/check2.png) no-repeat");
			}
		
		var flag=$(this).prop("checked");
		if(flag){
			$(this).parent().css("background","url(img/shop/check2.png) no-repeat");
		}
		else{
			$(this).parent().css("background","url(img/shop/check1.png) no-repeat");
		}
	})	
	$(".allcheckbtn").click(function () {
		var flag=$(this).prop("checked");
//		console.log(flag)
		if(flag){
			$("input[type='checkbox']").prop("checked",true);
			$("input[type='checkbox']").parent().css("background","url(img/shop/check2.png) no-repeat");
		}
		else{
			$("input[type='checkbox']").prop("checked",false);
			$("input[type='checkbox']").parent().css("background","url(img/shop/check1.png) no-repeat");
		}
	})
	
})
