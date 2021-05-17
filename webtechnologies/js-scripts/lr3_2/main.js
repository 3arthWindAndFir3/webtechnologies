$("#send").click(function(){
	$.get('/review.php', {name: $("#name").val(), text: $("#text").val()}, function(data){
		alert("Спасибо за ваш отзыв! Сейчас он появится в списке остальных.");
		$.ajax({
		method: 'get',
		url: "/get_reviews.php",
        dataType: "html",
		success: function (data) {
			$("#put-here").html(data);
			}
		});
	});
});

$(document).ready (function(){
	$.ajax({
		method: 'get',
		url: "/get_reviews.php",
        dataType: "html",
		success: function (data) {
			$("#put-here").html(data);
			}
		});
	});
