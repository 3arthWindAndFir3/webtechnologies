<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>help me</title>
<meta name="generator" content="Geany 1.36" />
</head>

<body>
<?php 
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
	$result=mysqli_query($link, "SELECT name, text FROM reviews"); 
	while ($row=mysqli_fetch_array($result)){
		if ($row['name']!="") {
	 echo "<hr width=600 align=center/>";
	 echo "<div><p>Отзыв от <b>".$row['name'].":</b></p>";
	 echo "<p>".$row['text']."</p></div>"; }
	}
?>
</body>

</html>
