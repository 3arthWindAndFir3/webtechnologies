<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>LR3</title>
<script src="js-scripts/jquery-3.6.0.min.js"></script> 
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
					<li><a href="lr3_1.php">Лабораторная работа №3</a></li>
					<li><a href="lr4_1.html">Лабораторная работа №4</a></li>
					<li><a href="lr5_1.html">Лабораторная работа №5</a></li>
				</ul>
			</aside>
			<div id="index-main-textpart">
				<div>
					<article>
						<p><b>Статья 1</b></p>
						<img id="image-in-article" src="images/bridge.jpg" alt="bridge image" />
						<p>На мосту стоит прохожий, чем-то на меня похожий!</p>
					</article>
				</div>
				<div>
					<article>
						<p><b>Статья 2</b></p>
						<img id="image-in-article" src="images/face.jpg" alt="bridge image" />
						<p>Вдруг откуда не возьмись - неоткуда не взялось!</p>
					</article>
				</div>
				<div>
					<article>
						<p><b>Статья 3</b></p>
						<img id="image-in-article" src="images/wagon.jpg" alt="bridge image" />
						<p>Машина смерти сошла с ума, <br />
						Она летит сметая всех! <br />
						Мы увернулись — на этот раз, <br />
						Ушли по белой полосе.
						</p>
					</article>
				</div>
				<div>
					<article>
						<p><b>Статья 4</b></p>
						<img id="image-in-article" src="images/bride.jpg" alt="bridge image" />
						<p>
						Любовь зимой приходит в платье белом, <br />
						Весной любовь приходит в платье голубом, <br />
						Любовь приходит летом в платьице зеленом, <br />
						А осенью любовь приходит в золотом.
						</p>
					</article>
				</div>
				<div>
					<article>
						<p><b>Статья 5</b></p>
						<img id="image-in-article" src="images/cowboy.jpg" alt="bridge image" />
						<p>
						Oh he might have gone on living but he made one fatal slip <br />
						When he tried to match the ranger with the big iron on his hip  <br />
						Big iron on his hi-i-i-i-ip!
						</p>
					</article>
				</div>
				<?php
					$kol = $_GET['startArticles'];
					$tek = $_GET['numberOfArticles'];				
				
					$link = mysqli_connect("127.0.0.1", "d996108w_opersys", "TaylorSwift#1", "d996108w_opersys");
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

					for ($i = $kol+1; $i <= $tek+2; $i++) {
						$result=mysqli_query($link, "SELECT id, text FROM articles WHERE id=".$i); 
						while ($row=mysqli_fetch_array($result)){
						 echo "<div><article><p><b>Статья ".$row['id']."</b></p>";
						 echo "<img id='image-in-article' src='images/".$row['id'].".jpg' />";
						 echo "<p>".$row['text']."</p></article></div>";
						}
					}

				 ?>
				<p><button id="more-articles">Загрузить еще...</button>
				</p>
				<script type="text/javascript"  src="js-scripts/lr3_1/send.js"></script>
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
