<?php
    $assoc_array = [ 
		"name" => "Мастер и Маргарита",
		"author" => "М.Булгаков",
		"year" => 1940,
		"genre" => "Мистика",
		"bestseller" => true
	];
	
	echo "<h2>Исходный ассоциативный PHP массив:</h2>";
	echo "<pre>";
	print_r($assoc_array);
	echo "</pre>";
	
	$json_string = '{"name":"Мастер и Маргарита", "author":"М.Булгаков", "year":1940, "genre":"Мистика", "bestseller":true}';
	
	echo "<h2>Ручное JSON представление (строка):</h2>";
	echo "<pre>";
	echo $json_string;
	echo "</pre>";
	
	$decoded_array = json_decode($json_string, true);
	
	echo "<h2>Результат декодирования json_decode(..., true):</h2>";
	echo "<pre>";
	print_r($decoded_array);
	echo "</pre>";
	
	if (json_last_error() === JSON_ERROR_NONE) {
		echo "<p style='color: green;'>Успех! JSON строка записана верно.</p>";
	} else {
		echo "<p style='color: red;'>Ошибка декодирования: " . json_last_error_msg() . "</p>";
	}

	echo "<h2>Проверка идентичности массивов:</h2>";
	if ($assoc_array == $decoded_array) {
		echo "<p style='color: green;'>Исходный и декодированный массивы идентичны!</p>";
	} else {
		echo "<p style='color: orange;'>Массивы различаются.</p>";
	}
?>