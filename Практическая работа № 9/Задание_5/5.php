<?php
	$array = ["Мастер и Маргарита", "М.Булгаков", 1940, "Мистика", true];
	
	echo "<h2>Исходный PHP массив:</h2>";
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	
	$json_string = '["Мастер и Маргарита", "М.Булгаков", 1940, "Мистика", true]';
	
	echo "<h2>Ручное JSON представление (строка):</h2>";
	echo "<pre>";
	echo $json_string;
	echo "</pre>";
	
	$decoded_array = json_decode($json_string);
	
	echo "<h2>Результат декодирования json_decode():</h2>";
	echo "<pre>";
	print_r($decoded_array);
	echo "</pre>";
	
	if (json_last_error() === JSON_ERROR_NONE) {
		echo "<p style='color: green;'>Успех! JSON строка записана верно.</p>";
	} else {
		echo "<p style='color: red;'>Ошибка декодирования: " . json_last_error_msg() . "</p>";
	}
?>