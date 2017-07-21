$(function () {
	$(".content .ng .fr li").click(function () {
		$(this).addClass("on").siblings().removeClass("on");
	})
})
