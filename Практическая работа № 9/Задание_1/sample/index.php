<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Отправка данных на сервер</h1>
	<h2>Отправка данных в строке запроса</h2>
	
	<?php
		$array = [
			[
			"id"=>"1",
			"album_name"=>"Atom Heart Mother",
			"date"=>"10 октября 1970", 
			"label" =>"EMI, Harvest, Capitol",
			"status"=>"Золотой (USA)"
			],
			[
			"id"=>"2",
			"album_name"=>"Meddle",
			"date"=>"30 октября 1971",
			"label"=>"EMI, Harvest, Capitol",
			"status"=>"Платиновый (USA)"
			]
		];

		echo "<h2>Исходный массив</h2>";
		// исходный массив
		echo "<pre>";
		print_r ($array);
		echo "</pre>";

		// ?data= ...

		echo "<h2>Массив из строки запроса </h2>";
		// сформированный массив
		echo "<pre>";
		print_r ($_GET["data"]);
	?>
	

</body>
</html>