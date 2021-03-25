$(document).mousemove(function(e){
    var X = e.pageX; // положения по оси X
    var Y = e.pageY; // положения по оси Y
    $("#x-data").val(X);
	$("#y-data").val(Y);
});

