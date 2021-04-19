var startArticles = 5;
var numberOfArticles = (document.getElementsByTagName('article').length);
console.log (numberOfArticles);
var stringUrl = 'lr3_1.php?startArticles='+startArticles+'&numberOfArticles='+numberOfArticles+'';
var rightUrl = '/lr3_1.php';
var shortUrl='http://d996108w.beget.tech/'+stringUrl;

$("#more-articles").click(function(){
	$.ajax({
		crossDomain:true,
		url: rightUrl,
		method: 'get',
		dataType: 'json',
		data: {startArticles: 5, numberOfArticles: numberOfArticles}
	});
	onclick=window.location.assign(shortUrl);
}); 

/*$("#more-articles").click(function(){
	$.get('/get_number_articles.php', {startArticles: 5, currentArticles: numberOfArticles}, function(data){
		alert(data);
	});
}); */
