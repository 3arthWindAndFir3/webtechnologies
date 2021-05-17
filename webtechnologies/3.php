<!DOCTYPE html>
<html lang="ru">

<head>
<meta charset="utf-8" />
<title>3.php</title>
<meta name="generator" content="Geany 1.36" />
<script src="js-scripts/jquery-3.6.0.min.js"></script> 
</head>

<body>
	<?php
	
	
	//Однажды на лекции по ООПиМ Старцев сказал, что в коде портала кафедры АСУ есть комментарий,
	//где один разраб желает тому, кто отвечал за данный конкретный кусок кода смерти. 
	//И что тот, кому этот коммент был адресован, его увидел. 
	//К чему это я? 
	//Да ни к чему, на самом-то деле... 
	
	//получаем текущее число статей со страницы
		$kol = $_GET['startArticles'];
		$tek = $_GET['numberOfArticles'];
		//echo ('Базовое число статей - '. $kol. ', ');
		//echo ('текущее число статей - '. $tek);	
	
	//настраиваем подключение к бд	
		$link = mysqli_connect("127.0.0.1", "d996108w_opersys", "TaylorSwift#1", "d996108w_opersys");
		mysqli_query($link, 'SET NAMES utf-8');
		if (!$link) {
		echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
		echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
		echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
		exit;
		};
		if ($link){};
		
		 // подключаемся к бд
		 
		mysqli_select_db($link, "d996108w_opersys");
		
		//создаем массив для статей при выборке		
				
		//$data = array();
		
	//получение статей из базы
	
	for ($i = $kol+1; $i <= $tek+2; $i++) {
		$result=mysqli_query($link, "SELECT id, text FROM articles WHERE id=".$i); 
		while ($row=mysqli_fetch_array($result)){
			echo "<div><article><p><b>Статья ".$row['id']."</b></p>";
		    echo "<img id='image-in-article' src='images/".$row['id'].".jpg' />";
			echo "<p>".$row['text']."</p></article></div>";
			}
	}
	
	//кодируем массив в json
	
	//echo json_encode($data);

	?>

</body>

</html>
