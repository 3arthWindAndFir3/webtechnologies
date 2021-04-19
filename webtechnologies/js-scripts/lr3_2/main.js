/*$("send").click(function(){
	$.ajax({
		url: 'review.php',
		method: 'post'
		data: { name: $("#name").val(), text: $("#text").val() };
	});
});
*/
$("#send").click(function(){
	$.get('/review.php', {name: $("#name").val(), text: $("#text").val()}, function(data){
		alert("Спасибо за ваш отзыв! (Обновите страницу чтобы увидеть свой отзыв.)");
	});
});


/*	  $( function() {
	    $('#send').click( function() {
	      var data = { name: $("#name").val(), text: $("#text").val() };
	      $.get( "getForecast.txt", data, success, "json" );
	    } );
	    function success( forecastData ) {
	      var forecast = forecastData.city + " прогноз на " + forecastData.date;
	      forecast += ": " + forecastData.forecast + ". Максимальная температура: " + forecastData.maxTemp + "C";
	      alert( forecast );
	    }

	  } );
*/
