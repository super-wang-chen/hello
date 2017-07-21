$(function () {
	$('.banner .bd').css('left','0');
    $('.center .lun .bd').css('top','0');
    var winW=$(document).width();
    var len=$('.banner .bd li').length;
    var lun=null;
    var index=0;
    var bool=true;
    for(var i=0;i<len;i++)
    {
        $('.banner .bd li').eq(i).css('left',i*winW+'px');
    }
    $('.banner .hd li').hover(function () {
    	clearInterval(lun);
    },function () {
    	move();
    })
     $('.banner .hd li').click(function () {
        var a=$(this).index();
        if(bool){
            bool=false;
            $(this).parent().children().removeClass('on').eq(a).addClass('on');
            $('.bd').stop(false,true).animate({left:-a*winW+'px'},700,function () {
                bool=true;
            });
            return index=a;
        }
    })
    move();
    function move(){
        lun=setInterval(function () {
            index++;
            if(index>=len)index=0;
            $('.banner .hd li').eq(index).addClass('on').siblings().removeClass('on');
            $('.banner .bd').stop(false,true).animate({left:-index*winW+'px'},700);
        },2000)
    }
    $(".product .pro a.right").click(function () {
//		$(".index_pro .pro ul li:first").stop().appendTo($(".index_pro .pro ul"));
            i++;
            if(i>4)i==0;
            arr1.unshift(arr1.pop());
            //console.log(arr1);
            $.each(arr1,function (index,value) {
              // console.log(this); $mylis.eq(i).attr('class',arr1[i]);
              //  console.log(value)
                $mylis.eq(index).animate(value,400);
            })
    })
    $(".product .pro a.left").click(function () {
		  	i++;
            if(i>4)i==0;
            arr1.push(arr1.shift());
            //console.log(arr1);
            $.each(arr1,function (index,value) {
              // console.log(this); $mylis.eq(i).attr('class',arr1[i]);
              //  console.log(value)
                $mylis.eq(index).animate(value,400);
            })
    })
    var timer2=null;
	var $mylis=$(".product .pro ul li");
    var arr1=[{"z-index": "100","margin-top": "60px","width": "229px","height": "334px","left": "65px"},{"z-index": "1000","margin-top": "15px","width": "600px","height": "419px","left": "294px"},{"z-index": "100","margin-top": "60px","width": "229px","height": "334px","left": "894px"}];
    var arr=[];
    var i=0;
    makeArray();
    function  makeArray(index) {
        timer2=setInterval(function () {
            i++;
            if(i>4)i==0;
            arr1.unshift(arr1.pop());
            //console.log(arr1);
            $.each(arr1,function (index,value) {
              // console.log(this); $mylis.eq(i).attr('class',arr1[i]);
              //  console.log(value)
                $mylis.eq(index).animate(value,300);
            })
        },2000)

    }
    $(".product .pro").hover(function () {
    	clearInterval(timer2);
    },function () {
    	makeArray();
    })
    $(".product .pro ul li").hover(function () {
    	if(parseInt($(this).css("margin-top"))<60){
    		$(this).find("div").animate({"bottom":"0px"},400);
    	}
    },function () {
    	if($(this).width()==600){
    		$(this).find("div").animate({"bottom":"-96px"},400);
    	}
    })
})
