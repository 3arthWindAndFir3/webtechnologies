<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>LR3</title>
<script src="js-scripts/jquery-3.6.0.min.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<meta name="generator" content="Geany 1.37.1" />
<meta name="author" content="Leonid Varaxin" />
<link rel="stylesheet" type="text/css" href="styles/styles.css" />
<meta name="viewport" content="width=device-width">
</head>

<body>
	<header id="index-head">Вараксин Л.Д. ПИ-318</header>

	<main id="index-main">
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
			</aside>
			<div id="index-main-textpart">
					<p><b>Оставить отзыв:</b></p>
					<p><b>Ваше имя:</b></p><p><input id="name" required type="text"
					placeholder="Ваше имя" size="30"></input><p>
					<p><b>Ваш отзыв:</b></p><p>:<textarea id="text" size="300"  
					cols="50" rows="10" required></textarea></p>
					<p><button id="send" type="submit">Отправить</button>
					<script src="js-scripts/lr3_2/main.js"></script>
				<div>
					<p><b>Что думают о нас другие пользователи?</b></p>
					<p>
					<?php $link = mysqli_connect("127.0.0.1", "d996108w_opersys", "TaylorSwift#1", "d996108w_opersys");
					 mysqli_query($link, 'SET NAMES utf-8');
					 if (!$link) {
						echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
						echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
						echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
						exit;
					};
					if ($link){};
					 // подключение к базе данных:
					mysqli_select_db($link, "d996108w_opersys");

						$result=mysqli_query($link, "SELECT name, text FROM reviews"); 
						while ($row=mysqli_fetch_array($result)){
							if ($row['name']!="") {
						 echo "<hr width=600 align=center/>";
						 echo "<div><p>Отзыв от <b>".$row['name'].":</b></p>";
						 echo "<p>".$row['text']."</p></div>"; }
						}
					?>
					</p>
				</div>
			</div>
			<aside id="index-main-rightside">
			<p><b>Меню переключения между 
				заданиями в рамках одной лабораторной работы</b></p>
				<ul>
						<li><a href="lr3_1.php">Задание 1</a></li>
						<li><a href="lr3_2.php">Задание 2</a></li>
				</ul>
			</aside>
	</main>
	
	<footer id="index-footer"></footer>
</body>

</html>
