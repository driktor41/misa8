<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Отправка JSON данных</title>
</head>
<body>
	
	<h1>Отправка данных на сервер</h1>
	<h2>JSON формат</h2>
	
	<?php
		require 'educations.php';
		
		echo "<h3>Исходный массив \$educations:</h3>";
		echo "<pre>";
		print_r($educations);
		echo "</pre>";
		$json_data = json_encode($educations, JSON_UNESCAPED_UNICODE);
		
		echo "<h3>JSON представление массива:</h3>";
		echo "<pre>";
		echo $json_data;
		echo "</pre>";
		$encoded_json = urlencode($json_data);
		echo "<h3>Передача данных на сервер:</h3>";
		echo "<a href='server.php?data={$encoded_json}'>Передать данные об образовании на сервер</a>";
	?>
	
</body>
</html>