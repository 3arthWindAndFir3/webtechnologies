$("#more-articles").click(function(){
	var startArticles = 5;
	var numberOfArticles = document.getElementsByTagName('article').length;
	$.ajax({
		method: 'get',
		url: "/3.php?startArticles=" + startArticles + "&numberOfArticles=" + numberOfArticles,
       		dataType: "html",
		success: function (data) {
			alert ("Загружаю статьи, подождите..."); 
			$("#put-here").html(data);
			}
		});
	});
