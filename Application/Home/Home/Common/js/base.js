$(function() {
	$(".addbtn").click(function () {
		var num=parseInt($(this).prev().val());
		num++;
		if(num>99)num=99;
		$(this).prev().val(num);
	})
	$(".reducebtn").click(function () {
		var num=parseInt($(this).next().val());
		num--;
		if(num<1)num=1;
		$(this).next().val(num);
	})
	var vall=1;
	$(".numbtn").focus(function () {
		vall=$(this).val();
	})
	$(".numbtn").blur(function () {
		var val2=$(this).val();
		var ind=val2.indexOf(".");
		var ind2=val2.indexOf("-");
		if(isNaN($(this).val())||$(this).val().substr(0,1)=="0"||$(this).val()==""||ind2!=-1){
			$(this).val(vall);
		}
		if(ind!=-1){$(this).val(val2.substr(0,ind))}
		if(ind==0){$(this).val(1);}
	})
})
