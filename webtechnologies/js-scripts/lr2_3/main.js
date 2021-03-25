$("#moving-up").click(function(){
	$(".drag").css("position", "relative");
	$(".drag").animate({'top': '-=100px', 'height': '-=0px'}, 400);
});

$("#moving-left").click(function(){
	$(".drag").css("position", "relative");
	$(".drag").animate({'left': '-=100px', 'width': '-=0px'}, 400);
});

$("#moving-down").click(function(){
	$(".drag").css("position", "relative");
	$(".drag").animate({'top': '+=100px', 'height': '+=0px'}, 400);
});

$("#moving-right").click(function(){
	$(".drag").css("position", "relative");
	$(".drag").animate({'left': '+=100px', 'width': '+=0px'}, 400);
});

