$(function () {
	$(".content .ng p.pay a").click(function () {
		$(this).addClass("on").siblings().removeClass("on");
	})
})
