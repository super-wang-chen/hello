$(function  () {
	var bool=true;
	var len=$(".order .main .bottom ul li").length;
	var w=$(".order .main .bottom ul li").outerWidth(true);
	var left=parseInt(w)*(parseInt(len)-3);
	$(".order .main .bottom a.right").click(function () {
//		console.log(left)
		if(bool){
			bool=false;
			$(".order .main .bottom ul").animate({"margin-left":-w+"px"},400,function () {
				$(".order .main .bottom ul li:first").appendTo($(".order .main .bottom ul"));
				$(".order .main .bottom ul").css("margin-left","0");
				bool=true;
			});
		}
	})
	$(".order .main .bottom a.left").click(function () {
//		console.log(left)
		if(bool){
			bool=false;
			$(".order .main .bottom ul li:last").prependTo($(".order .main .bottom ul"));
			$(".order .main .bottom ul").css("margin-left",-w+"px");
			$('.order .main .bottom ul').animate({"margin-left":"0px"},400,function () {
				bool=true;
			})
		}
	})
	var timer=null;
	lun();
	function lun () {
		timer=setInterval(function () {
			$(".order .main .bottom ul").animate({"margin-left":-w+"px"},400,function () {
				$(".order .main .bottom ul li:first").appendTo($(".order .main .bottom ul"));
				$(".order .main .bottom ul").css("margin-left","0");
				bool=true;
			});
		},2000)
	}
	$(".order .main .prolist a").hover(function () {
		clearInterval(timer);
	},function () {
		lun();
	})
})
