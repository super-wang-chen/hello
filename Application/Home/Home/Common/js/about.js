$(function(){
	$(".content .bottom li a").click(function(){
		if($(this).prev().css("height")=="200px"){
			$(this).prev().animate({"height":"599px"},300);
			$(this).find("img").attr("src","img/about/img5.png");
		}
		else{
			$(this).prev().animate({"height":"200px"},300);
			$(this).find("img").attr("src","img/about/img4.png");
		}
	})
})
