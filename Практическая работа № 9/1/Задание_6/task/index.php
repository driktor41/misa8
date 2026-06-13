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
	    $assoc_array = [ 
			"name" => "Мастер и Маргарита",
			"author" => "М.Булгаков",
			"year" => 1940,
			"genre" => "Мистика",
			"bestseller" => true
		];
		*/

		// json-представление массива
		$json = '{"name":"Мастер и Маргарита","author":"М.Булгаков","year":1940,"genre":"Мистика","bestseller":true}';

		// декодируем json 
		// представим объект JSON как ассоциативный массив PHP
		$arr = json_decode($json, JSON_OBJECT_AS_ARRAY);

		// вывод в браузер структуры массива PHP
		echo "<pre>";
		print_r($arr);

		// доступ к элементу
		echo $arr["author"];
	?>
	
	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>