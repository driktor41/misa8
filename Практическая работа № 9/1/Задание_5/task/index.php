<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Отправка данных на сервер</h1>
	<h2>JSON формат</h2>
	
	<?php
		/*
		исходный массив
	    $array = ["Мастер и Маргарита", "М.Булгаков", 1940, "Мистика", true];
	    */

		// json-представление массива
		$json = '["Мастер и Маргарита","М.Булгаков",1940,"Мистика",true]';

		// декодируем json
		$arr = json_decode($json);

		// вывод в браузер структуры массива PHP
		echo "<pre>";
		print_r($arr);

		// доступ к элементу
		echo $arr[1];
	?>

	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>