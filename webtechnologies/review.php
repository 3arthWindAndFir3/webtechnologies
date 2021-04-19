<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>help me</title>
<meta name="generator" content="Geany 1.36" />
</head>

<body>
	<?php 
	$name = $_GET['name'];
	$text = $_GET['text'];
	echo "<p>".$name."</p>";
	echo "<p>".$text."</p>";
	
		$link = mysqli_connect("127.0.0.1", "d996108w_opersys", "TaylorSwift#1", "d996108w_opersys");
		 mysqli_query($link, 'SET NAMES utf-8');
		 if (!$link) {
			echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
			echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
			echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
			exit;
		};
		if ($link){
			echo "<p>it's working!</p>";
		};
		mysqli_select_db($link, "d996108w_opersys");
		$sql_add = "INSERT INTO reviews (name, text) VALUES ('".$name."','".$text."')";
		
		mysqli_query($link, $sql_add);
		echo "<p>it's working!</p>";
	?>
</body>

</html>
