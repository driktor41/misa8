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
	   // json-представление ассоциативного массива PHP

	    $json = '{
	    	"name" : "Harry Potter and the Goblet of Fire",
	    	"author" : "J. K. Rowling",
	    	"year" : "2000",
	    	"genre" : "Fantasy Fiction",
	    	"bestseller" : "true"
	    }';    

	    $arr = json_decode($json, true);

		echo "<pre>";
		var_dump($arr);

		echo $arr["name"];
    ?>

	<footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>