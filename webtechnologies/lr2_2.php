<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>LR2</title>
<script src="js-scripts/jquery-3.6.0.min.js"></script> 
<meta name="generator" content="Geany 1.37.1" />
<meta name="author" content="Leonid Varaxin" />
<link rel="stylesheet" type="text/css" href="styles/styles.css" />
<!-- библиотеки и таблицы стилей для 5 задания -->
<link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1.custom/jquery-ui.css" />
<script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<meta name="viewport" content="width=device-width">
</head>

<body>
	<header id="index-head">
		<p>Вараксин Л.Д. ПИ-318</p>
	<!-- задание 4-->
		<p>Текущие координаты мыши:
			<input type="text" id="x-data"></input>
			<input type="text" id="y-data"></input>
			<script src="js-scripts/lr2_4/main.js"></script>
		</p>
	</header>

	<main id="index-main" style="height="">
			<aside id="index-main-leftside">
				<p><b>Меню для переключения между лабораторными
				 работами</b></p>
				<ul>
					<li><a href="index.html">Вернуться в начало</a></li>
					<li><a href="lr1_1.html">Лабораторная работа №1</a></li>
					<li><a href="lr2_1.html">Лабораторная работа №2</a></li>
					<li><a href="lr3_1.html">Лабораторная работа №3</a></li>
					<li><a href="lr4_1.html">Лабораторная работа №4</a></li>
					<li><a href="lr5_1.html">Лабораторная работа №5</a></li>
				</ul>
				<!-- 7 задание -->
				<div id="calc-wrap" style="width:120px">
					<div id="calc">
						<textarea id="inputVal" cols="12">0</textarea>
						<script src="js-scripts/lr2_7/main.js"></script>
					</div>
				</div>
			</aside>
			<div id="index-main-textpart">
				<!-- задание 3-->
				<p><b>Знакомьтесь, это Ярослав! (его, кстати, можно брать и перетаскивать)</b></p>
				<p><img class="drag" src="images/yarik.jpg"
				 alt="Ярослав )" height="250" width="300" 
				 style="margin:100px"></img></p>
				<p>Двигать Ярослава )</p>
				<p><button id="moving-up">Вверх</button></p>
				<p><button id="moving-left">Влево</button>
				<button id="moving-down">Вниз </button>
				<button id="moving-right">Вправо</button></p>
				<script src="js-scripts/lr2_3/main.js"></script>
				<!-- 5 задание -->
				<script src="js-scripts/lr2_5/main.js"></script>
			</div>
			<aside id="index-main-rightside">
				<p><b>Меню переключения между 
				заданиями в рамках одной лабораторной работы</b></p>
				<ul>
						<li><a href="lr2_1.html">Страница 1</a></li>
						<li><a href="lr2_2.php">Страница 2</a></li>
				</ul> 
				<div>
					<!-- 6 задание -->
					<p><b>Небольшой опрос:</b></p>
					<p>Как вам данная страница?</p>
					<script src="js-scripts/lr2_6/main.js"></script>
					<form action="save_answer.php" metod="get">
						<ul>
							<?php
							 $link = mysqli_connect("127.0.0.1", "d996108w_opersys", "TaylorSwift#1", "d996108w_opersys");
							 mysqli_query($link, 'SET NAMES utf-8');
							 if (!$link) {
								echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
								echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
								echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
								exit;
							}
							 // подключение к базе данных:
							 mysqli_select_db($link, "d996108w_opersys");
							?>
							<li><input type="radio" id="cool" value="cool" name="answer" checked>Отличная!</input></li>
							<li><input type="radio" id="good" value="good" name="answer">Хорошая</input></li>
							<li><input type="radio" id="fixme" value="fixme" name="answer">Нужно доработать</input></li>
							<li><input type="radio" id="bad" value="bad" name="answer">Плохая</input></li>
							<li><input type="radio" id="worst" value="worst" name="answer">Ужасная</input></li>
							<p><button type="submit" id="send">Отправить</button></p>
							<!--<p><button id="stats">Статистика</button></p> -->
						</ul>
					</form>
				</div>
				
				</div>
			</aside>
	</main>
	
	<footer id="index-footer">
		<div>
				<button id="stats">Показать статистику</button>
				<script>
					$("#stats").click(function(){ 
					$("#count").css("visibility", "visible"); 
					}) 
					//$("#stats").mouseup(function(){ 
					//$("#count").css("visibility", "hidden"); 
					//}) 
				</script>
				</div>
				<div id="count" style="visibility:hidden">
					<?php
						$cool=mysqli_query($link,"SELECT answer FROM `answers` WHERE answer='cool' ");
						$good=mysqli_query($link,"SELECT answer FROM `answers` WHERE answer='good' ");
						$fixme=mysqli_query($link,"SELECT answer FROM `answers` WHERE answer='fixme' ");
						$bad=mysqli_query($link,"SELECT answer FROM `answers` WHERE answer='bad' ");
						$worst=mysqli_query($link,"SELECT answer FROM `answers` WHERE answer='worst' ");
						$all=mysqli_query($link,"SELECT * FROM answers ");

						$data1=mysqli_num_rows($cool);
						$data2=mysqli_num_rows($bad);
						$data3=mysqli_num_rows($fixme);
						$data4=mysqli_num_rows($bad);
						$data5=mysqli_num_rows($worst);
						$data6=mysqli_num_rows($all);
						
						print "Отличная: " .$data1 . " (" . round ($data1/$data6*100, 2) ."%)";
						echo "<br />";
						
						print "Хорошая: " .$data2. " (" . round ($data2/$data6*100, 2) ."%)";
						echo "<br />";
						
						print "Нужно доработать: " .$data3. " (" . round ($data3/$data6*100, 2) ."%)";
						echo "<br />";
						
						print "Плохая: " .$data4. " (" . round($data4/$data6*100, 2) ."%)";
						echo "<br />";
						
						print "Ужасная: " .$data5. " (" . round($data5/$data6*100, 2) ."%)";
						echo "<br />";
						//fetch_assoc
						
						print "Всего ответов: " .$data6;
						echo "<br />";
					?>
	</footer>
</body>

</html>
