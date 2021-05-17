/*ИГРОВОЙ ПЛАН
 * Пакман двигается на стрелочки - есть!
 * Есть генерируемое поле с рандомной расстановкой фруктов - есть!
 * Есть подсчет ходов - есть!
 * Запомнить координаты всех яблочек - есть!
 * Считать при каждом шаге координаты пакмана - есть!
 * уменьшение числа яблочек при прохождении через них - есть!
 * подсчет очков - есть!
 * отсчет по времени - есть!
 */


//сообщение об методе ввода
alert("Pac-man! Для победы нужно довести счетчик фруктов до нуля!");
alert ("Для передвижения используйте стрелочки. Игра начнется после нажатия на одну из них.");
alert ("Успейте вовремя, ведь если вы не успеете за отведенное время - вы проиграете!");
//переменные-счетчики
var foodNumber = 0;
var turnCounter = 0;
var foodCounter = 0;
var iteraCount = 0;

//массивы для еды
var foodContent = [[1,1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1,1],[1,1,1,1,1,1,1,1,1,1]];
//массивы для координат расположения еды
var dataArrayX = [[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null]];
var dataArrayY = [[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null],[null,null,null,null,null,null,null,null,null,null]];


//установка размера поля
var count = prompt("Введите число размер поля от 2 до 5:");
alert ("У вас есть " + count*5 + " секунд, чтобы собрать все фрукты!"); 

function outOfTime () {
	alert ("Время вышло! Вы проиграли!");
	window.location.reload();
	};

setTimeout(outOfTime, 5000*count);

//расчет случайного количества еды в зависимости от размера поля
for (var z=0; z<count; z++) {
	for (var w=0; w<count; w++) {
		foodContent[z][w]=Math.round(Math.random());
		foodNumber+=foodContent[z][w];
	};
};

var foodz = foodNumber;

//установка еды на поле
for (var i=0; i<count; i++) {
	document.write ("<p>");
	//document.write ("<tr>");
	for (var j=0; j<count; j++) {
		iteraCount++;
		if (foodContent[i][j]==0) {
			//document.write ("<img src='images/wall.svg' alt='wall' height='50' width='50'style='position:relative; top:"+j*100+"; left:"+i*100+"'>");
		};
		if (foodContent[i][j]==1) {
			document.write ("<img src='images/food.svg' alt='taken' id='food"+ iteraCount +"' height='50' width='50'>");
			dataArrayX[i][j]=$("#food"+iteraCount).offset().left; //координаты яблочек по x
			dataArrayY[i][j]=$("#food"+iteraCount).offset().top; //координаты яблочек по y
			console.log ("x= "+dataArrayX[i][j]+ "; y= "+dataArrayY[i][j]);
		};
		
	};
	document.write ("</p>");
	//document.write ("</tr>");
};

iteraCount=0;

//расчет текущих значений переменных и запись их в поля справа
function dataPush() {
	$("#fruits").val(foodNumber);
	$("#turns").val(turnCounter);
	$("#pacman-x").val($(".drag").offset().left);
	$("#pacman-y").val($(".drag").offset().top);
};

//проверка на соотвествие координат пакмана и еды, если совпадает, то картинка меняется
function eating() {
	for (var i=0; i<count; i++) {
			for (var j=0; j<count; j++) {
				iteraCount++;
				var value1 = ($(".drag").offset().left+180)>dataArrayX[i][j]-25;
				var value2 = ($(".drag").offset().left+180)<dataArrayX[i][j]+25;
				var value3 = $(".drag").offset().top>dataArrayY[i][j]-25;
				var value4 = $(".drag").offset().top<dataArrayY[i][j]+25;
				if ((value1 && value2) && (value3 && value4)){
					//var identify = "food" + iteraCount;
					$("#food"+iteraCount).attr("src", "images/taken.jpg");
					foodNumber=foodNumber-1;
					if (foodNumber<=0) {
							var score = foodz*3000-turnCounter*100;
							alert ("Вы выиграли! Вы завершили игру за " + turnCounter + " ходов и получили за это " + score + " очков!");
							window.location.reload();
					};
			};
		};
	};
	iteraCount = 0;
};
//перемещение на стрелочках
	$(document).keyup(function(e) {
		if (e.key === "ArrowLeft" || e.keyCode === 37) {
			turnCounter++;
			dataPush(); 
			$(".drag").attr('src', 'images/left.svg');
			$(".drag").css("position", "relative");
			$(".drag").animate({'left': '-=50px', 'width': '-=0px'}, 400);
			eating();
		};
		
		if (e.key === "ArrowRight" || e.keyCode === 39) {
			turnCounter++;
			dataPush();
			$(".drag").attr('src', 'images/right.svg');
			$(".drag").css("position", "relative");
			$(".drag").animate({'left': '+=50px', 'width': '+=0px'}, 400);
			eating();
		};
		
		if (e.key === "ArrowUp" || e.keyCode === 38) {
			turnCounter++;
			dataPush(); 
			$(".drag").attr('src', 'images/top.svg');
			$(".drag").css("position", "relative");
			$(".drag").animate({'top': '-=75px', 'height': '-=0px'}, 400);	
			eating();
		};
		
		if (e.key === "ArrowDown" || e.keyCode === 40) {
			turnCounter++;
			dataPush(); 
			$(".drag").attr("src", "images/bottom.svg");
			$(".drag").css("position", "relative");
			$(".drag").animate({'top': '+=75px', 'height': '+=0px'}, 400);
			eating();
		};
	});
